<?php

session_start();

// Defina o cabeçalho para permitir o acesso de outros domínios (Cross-Origin Resource Sharing)
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Authorization, Content-Type");

$id = $_SESSION['id'];


// Verifique o método da requisição
$method = $_SERVER['REQUEST_METHOD'];

// Verifique o endpoint solicitado
$endpoint = $_GET['endpoint'];

// Verifique os parâmetros da requisição
$params = $_GET;

// Defina a resposta padrão
$response = array(
    'status' => 'error',
    'message' => 'Invalid request'
);

// Verifique o método e o endpoint para executar a lógica da API
if ($method == 'GET') {
    if ($endpoint == 'profile-image') {
        // Conecte-se ao banco de dados MySQL
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "cliente";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verifique se a conexão foi estabelecida com sucesso
        if ($conn->connect_error) {
            $response = array(
                'status' => 'error',
                'message' => 'Failed to connect to MySQL: ' . $conn->connect_error
            );
        } else {
            // Execute a consulta para obter os dados dos usuários
            $sql = "SELECT * FROM cliente WHERE id = '$id'";
            $result = $conn->query($sql);

            // Verifique se a consulta retornou resultados
            if ($result->num_rows > 0) {
                $users = array();

                // Itere pelos resultados e adicione os usuários ao array
                while ($row = $result->fetch_assoc()) {
                    $user = array(
                        'id' => $row['id'],
                        'name' => $row['nome'],
                        'url' => $row['url']
                    );

                    $users[] = $user;
                }

                $response = array(
                    'status' => 'success',
                    'users' => $users
                );
            } else {
                $response = array(
                    'status' => 'success',
                    'users' => []
                );
            }

            // Feche a conexão com o banco de dados
            $conn->close();
        }
    }
}

// Envie a resposta como JSON
echo json_encode($response);
?>
