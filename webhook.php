<?php
// Define the handler function to process the webhook
function handleWebhook($data) {
    // MySQL database connection details
    $host = 'localhost';
    $user = 'magicodoseculo_base'; 
    $password = 'dire@0300';
    $database = 'magicodoseculo_base';
    
    try {
        // Create a PDO connection
        $pdo = new PDO("mysql:host=$host;dbname=$database", $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $response = []; // Array to hold response messages
        
        if ($data['status'] === 'paid') {
            // Check if the email already exists
            $stmt = $pdo->prepare('SELECT * FROM leads WHERE email = ?');
            $stmt->execute([$data['customer']['email']]);
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            if (count($rows) > 0) {
                // Email exists, update the existing record
                $updateStmt = $pdo->prepare('UPDATE leads SET plane = ? WHERE email = ?');
                $updateStmt->execute([$data['product']['short_id'], $data['customer']['email']]);
                $response['message'] = 'Registro atualizado com sucesso!';
            } else {
                // Email does not exist, insert new record
                $insertStmt = $pdo->prepare('INSERT INTO leads (email, plane, course) VALUES (?, ?, ?)');
                $insertStmt->execute([$data['customer']['email'], $data['product']['short_id'], $data['offer']['name']]);
                $response['message'] = 'Dado inserido com sucesso!';
            }
        } elseif (in_array($data['status'], ['refunded', 'chargedback', 'refund_requested'])) {
            // Handle refund/chargeback status
            $stmt = $pdo->prepare('SELECT * FROM leads WHERE email = ?');
            $stmt->execute([$data['customer']['email']]);
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (count($rows) > 0) {
                // Email exists, delete the record
                $deleteStmt = $pdo->prepare('DELETE FROM leads WHERE email = ?');
                $deleteStmt->execute([$data['customer']['email']]);
                $response['message'] = 'Status de Refund/Chargeback. Email removido.';
            } else {
                $response['message'] = 'Email não encontrado. Nada foi feito.';
            }
        }
        
    } catch (PDOException $e) {
        // Handle errors with a message
        $response = ['message' => 'Erro ao processar o webhook', 'error' => $e->getMessage()];
    }
    
    // Save response to a JSON file
    file_put_contents('webhook_response.json', json_encode($response, JSON_PRETTY_PRINT));
}

// Handling the POST request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the POST data (assuming JSON body)
    $data = json_decode(file_get_contents('php://input'), true);
    
    if ($data) {
        handleWebhook($data);
    } else {
        file_put_contents('webhook_response.json', json_encode(['message' => 'Dados inválidos'], JSON_PRETTY_PRINT));
    }
} else {
    // If the request method is not POST
    http_response_code(405);
    file_put_contents('webhook_response.json', json_encode(['message' => 'Método não permitido'], JSON_PRETTY_PRINT));
}
?>
