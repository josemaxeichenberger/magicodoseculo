<?php
// Detalhes de conexão com o banco de dados
$host = 'localhost';
$user = 'magicodoseculo_base';
$password = 'dire@0300';
$database = 'magicodoseculo_base';
session_start();

try {
    $pdo = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];

        // Verificar se o e-mail existe
        $stmt = $pdo->prepare('SELECT * FROM leads WHERE email = ?');
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
       
            $_SESSION['id_user'] = $user['id'];
            $_SESSION['logui'] = true;
            $_SESSION['email'] = $_POST['email'];
            // Sucesso no login
            http_response_code(200);
            echo json_encode(['message' => 'Login bem-sucedido!']);
        } else {
            $_SESSION['logui'] = false;
            // E-mail não encontrado, erro de autenticação
            http_response_code(401);
            echo json_encode(['message' => 'E-mail não encontrado. Verifique suas informações.']);
        }
    }
} catch (PDOException $e) {
    // Erro no servidor
    http_response_code(500);
    echo json_encode(['message' => 'Erro ao conectar ao banco de dados.']);
}
?>
