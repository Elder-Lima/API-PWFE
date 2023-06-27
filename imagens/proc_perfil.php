<?php

    session_start();
    include_once('conexao.php');

    $nome = $_POST['nome'];


    if (isset($_FILES["img"])) {
        // seleção do diretório
        $dir = "./img/";
        $dirBcd = "./img/";
        // pega dados da imagem (nome, nome temporário, tipo do arquivo)
        $image = $_FILES["img"];
        $tmp_name = $image['tmp_name'];
        $name = basename($image["name"]);
        $fileType = strtolower(pathinfo($name, PATHINFO_EXTENSION)); 
        // cria um id único pro arquivo (evita arquivos com nome repetido se substituirem) e cria o caminho onde vai armazenar o arquivo
        $name = uniqid();
        $path = $dir . $name . "." . $fileType;
        $pathBcd = $dirBcd . $name . "." . $fileType;
        // caso seja png, jpg ou jpeg, move o arquivo para a pasta images/imgCliente com o nome dele
        $allowTypes = array('jpg','png','jpeg');

        if(in_array($fileType, $allowTypes) && $image['size'] <= 2097152){

            //upload do caminho da imagem no banco upload da imagem em um diretório
            move_uploaded_file($tmp_name, $path);
            $insereImagem = mysqli_query($conn, "INSERT INTO cliente(nome, url) VALUES ('$nome', '$pathBcd');");

            // inserção de imagem por @zerobugs-tutorial em https://youtu.be/ae83c8Zpoxo (acesso em 13/04/2023)
            

            if($insereImagem){
                $id = mysqli_insert_id($conn);
                $_SESSION['msg'] = "<center><span style='color:blue;'>Perfil Criado com sucesso!</span></center>";
                $_SESSION['id'] = $id;
                header('Location: ./perfil.php');

            }
        }
        else{
            if($image['size'] > 2097152){   
                $_SESSION['msg'] = "<center><span style='color:red;'>Perfil não cadastrado. Tamanho de imagem não aceita. Máx 2MB.</span></center>";
                header('Location: index.php');
            } 
        }

    }
?>