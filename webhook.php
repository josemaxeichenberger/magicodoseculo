<?php
// Define the handler function to process the webhook
function handleWebhook($data) {
    // MySQL database connection details (ideal para manter em um arquivo .env para segurança)
    $host = 'localhost';
    $user = 'magicodoseculo_base'; 
    $password = 'dire@0300';
    $database = 'magicodoseculo_base';

    try {
        // Create a PDO connection
        $pdo = new PDO("mysql:host=$host;dbname=$database", $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $response = []; // Array para armazenar mensagens de resposta

        if (isset($data['sale_status_enum_key']) && isset($data['customer']['email'])) {
            $email = $data['customer']['email'];
            $status = $data['sale_status_enum_key'];
            $productID = $data['product']['code'] ?? null;
            $offerName = $data['product']['name'] ?? null;

            if ($status === 'approved' && $productID && $offerName) {
                // Verifica se o email já existe
                $stmt = $pdo->prepare('SELECT * FROM leads WHERE email = ?');
                $stmt->execute([$email]);
                $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

                if (count($rows) > 0) {
                    // Email existe, atualizar o registro existente
                    $updateStmt = $pdo->prepare('UPDATE leads SET plane = ? WHERE email = ?');
                    $updateStmt->execute([$productID, $email]);
                    $response['message'] = 'Registro atualizado com sucesso!';
                } else {
                    // Email não existe, insira um novo registro
                    $insertStmt = $pdo->prepare('INSERT INTO leads (email, plane, course) VALUES (?, ?, ?)');
                    $insertStmt->execute([$email, $productID, $offerName]);
                    $response['message'] = 'Dado inserido com sucesso!';
                }
            } elseif (in_array($status, ['refunded', 'chargedback', 'refund_requested'])) {
                // Lida com status de reembolso ou estorno
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
        // Lida com erros com uma mensagem
        $response = ['message' => 'Erro ao processar o webhook', 'error' => $e->getMessage()];
    }

    // Log response (apenas para debug, desabilitar em produção)
    file_put_contents('webhook_response.json', json_encode($response, JSON_PRETTY_PRINT));

    return $response;
}

// Tratando a requisição POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtém os dados POST (assumindo corpo em JSON)
    $data = json_decode(file_get_contents('php://input'), true);
    
    if ($data) {
        $response = handleWebhook($data);
        // Resposta HTTP 200
        http_response_code(200);
        echo json_encode($response);
    } else {
        http_response_code(400);
        echo json_encode(['message' => 'Dados inválidos']);
    }
} else {
    // Se o método da requisição não for POST
    http_response_code(405);
    echo json_encode(['message' => 'Método não permitido']);
}
?>
