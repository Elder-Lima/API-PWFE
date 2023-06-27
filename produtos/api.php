
<?php

// Credenciais válidas, continuar com o processamento da API

// Defina o cabeçalho para permitir o acesso de outros domínios (Cross-Origin Resource Sharing)
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Authorization, Content-Type");



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
    if ($endpoint == 'produtos') {
        // Conecte-se ao banco de dados MySQL
        $servername = "localhost";
        $username = "camisas";
        $password = "camisas123";
        $dbname = "produtos";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verifique se a conexão foi estabelecida com sucesso
        if ($conn->connect_error) {
            $response = array(
                'status' => 'error',
                'message' => 'Failed to connect to MySQL: ' . $conn->connect_error
            );
        } else {


            // Execute a consulta para obter os dados dos usuários
            $sql = "SELECT * FROM produtos WHERE tipo = 'Selecao'";
            $result = $conn->query($sql);

            // Verifique se a consulta retornou resultados
            if ($result->num_rows > 0) {
                $users = array();

                // Itere pelos resultados e adicione os usuários ao array
                while ($row = $result->fetch_assoc()) {
                    $user = array(
                        'id' => $row['id'],
                        'name' => $row['name'],
                        'caminho' => $row['caminho'],
                        'informacoes' => $row['informacoes']
                    );

                    $users[] = $user;
                }

                $responseS = array(
                    'status' => 'success',
                    'users' => $users 
                );
            } else {
                $responseS = array(
                    'status' => 'success',
                    'users' => []
                );
            }


            // Execute a consulta para obter os dados dos usuários
            $sql2 = "SELECT * FROM produtos WHERE tipo = 'Brasil'";
            $resultb = $conn->query($sql2);

            // Verifique se a consulta retornou resultados
            if ($resultb ->num_rows > 0) {
                $usersB = array();

                // Itere pelos resultados e adicione os usuários ao array
                while ($rowb = $resultb->fetch_assoc()) {
                    $userb = array(
                        'id' => $rowb['id'],
                        'name' => $rowb['name'],
                        'caminho' => $rowb['caminho'],
                        'informacoes' => $rowb['informacoes']
                    );

                    $usersB[] = $userb;
                }

                $responseB = array(
                    'status' => 'success',
                    'usersB' => $usersB
                );
            } else {
                $responseB = array(
                    'status' => 'success',
                    'usersB' => []
                );
            }

            // Execute a consulta para obter os dados dos usuários
            $sql3 = "SELECT * FROM produtos WHERE tipo = 'Europa'";
            $resulte = $conn->query($sql3);

            // Verifique se a consulta retornou resultados
            if ($resulte->num_rows > 0) {
                $usersE = array();

                // Itere pelos resultados e adicione os usuários ao array
                while ($rowe = $resulte ->fetch_assoc()) {
                    $user3 = array(
                        'id' => $rowe['id'],
                        'name' => $rowe['name'],
                        'caminho' => $rowe['caminho'],
                        'informacoes' => $rowe['informacoes']
                    );

                    $usersE[] = $user3;
                }

                $responseE = array(
                    'status' => 'success',
                    'usersE' => $usersE
                );
            } else {
                $responseE = array(
                    'status' => 'success',
                    'usersE' => []
                );
            }

            $response = array(
                'status' => 'success',
                'selecao' => $responseS,
                'brasil' => $responseB,
                'europa' => $responseE,
            );

            // Feche a conexão com o banco de dados
            $conn->close();
        }
    }
}

// Envie a resposta como JSON
echo json_encode($response);

?>
