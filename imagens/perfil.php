<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</head>
<style>
    .profile-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 70vh;
    }

    .profile-box {
      text-align: center;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 10px;
      max-width: 400px;
      width: 100%;
      height: 400px;
    }

    .profile-image {
      width: 200px;
      height: 200px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 10px;
    }
  </style>
<body>
        <?php
            if (isset($_SESSION["msg"])) {   // isset() verifica se a variavel existe;
                echo $_SESSION["msg"];
                unset($_SESSION["msg"]);    // unset() destrói a variável passada como argumento, melhor utilizada em escopo global
            }
        ?>

    <div class="container" style="margin-top: 50px;">
       <a class="btn btn-primary" href="./index.php">Voltar</a>
    </div>

    <div class="container" id="card">

    </div>

    <script src="script.js"></script>
    
</body>
</html>