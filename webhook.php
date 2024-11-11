<?php
// Define the handler function to process the webhook
function handleWebhook($data) {
    // MySQL database connection details (melhor manter em um arquivo .env para segurança)
    $host = 'localhost';
    $user = 'magicodoseculo_base'; 
    $password = 'dire@0300';
    $database = 'magicodoseculo_base';
    
    try {
        // Create a PDO connection
        $pdo = new PDO("mysql:host=$host;dbname=$database", $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $response = []; // Array to hold response messages
        
        if (isset($data['status']) && isset($data['customer']['email'])) {
            $email = $data['customer']['email'];
            $status = $data['status'];
            $productID = $data['product']['short_id'] ?? null;
            $offerName = $data['offer']['name'] ?? null;

            if ($status === 'paid' && $productID && $offerName) {
                // Check if the email already exists
                $stmt = $pdo->prepare('SELECT * FROM leads WHERE email = ?');
                $stmt->execute([$email]);
                $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

                if (count($rows) > 0) {
                    // Email exists, update the existing record
                    $updateStmt = $pdo->prepare('UPDATE leads SET plane = ? WHERE email = ?');
                    $updateStmt->execute([$productID, $email]);
                    $response['message'] = 'Registro atualizado com sucesso!';
                } else {
                    // Email does not exist, insert new record
                    $insertStmt = $pdo->prepare('INSERT INTO leads (email, plane, course) VALUES (?, ?, ?)');
                    $insertStmt->execute([$email, $productID, $offerName]);
                    $response['message'] = 'Dado inserido com sucesso!';
                }
            } elseif (in_array($status, ['refunded', 'chargedback', 'refund_requested'])) {
                // Handle refund/chargeback status
                $stmt = $pdo->prepare('DELETE FROM leads WHERE email = ?');
                $stmt->execute([$email]);
                $response['message'] = 'Status de Refund/Chargeback. Email removido.';
            } else {
                $response['message'] = 'Status não manipulado ou dados incompletos.';
            }
        } else {
            $response['message'] = 'Dados incompletos ou inválidos.';
        }

    } catch (PDOException $e) {
        // Handle errors with a message
        $response = ['message' => 'Erro ao processar o webhook', 'error' => $e->getMessage()];
    }

    // Log response (apenas para debug, desabilitar em produção)
    file_put_contents('webhook_response.json', json_encode($response, JSON_PRETTY_PRINT));

    return $response;
}

// Handling the POST request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the POST data (assuming JSON body)
    $data = json_decode(file_get_contents('php://input'), true);
    
    if ($data) {
        $response = handleWebhook($data);
        // Send HTTP 200 response
        http_response_code(200);
        echo json_encode($response);
    } else {
        http_response_code(400);
        echo json_encode(['message' => 'Dados inválidos']);
    }
} else {
    // If the request method is not POST
    http_response_code(405);
    echo json_encode(['message' => 'Método não permitido']);
}
?>
