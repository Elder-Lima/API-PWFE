<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imports Fut</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilo1.css">
</head>
<body>

    <div class="barraS">
        <h1 id="desconto">DESCONTOS IMPERDIVEIS!</h1>
    </div>

    <nav class="navbar navbar-expand-lg">
        <div class="container cont">
            <img id="logo" src="./img/logo.png" alt="">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#tselecoes">Seleções</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tbrasil">Brasil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#teuropa">Europa</a>
                </li>
                </ul>

                <form class="d-flex form">
                    <!-- <span><i class="bi bi-search"></i></span> -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Pesquisar">
                </form>
            </div>
        </div>
    </nav>

   
    <img src="./img/camisass.PNG" class="img-fluid camisas" alt="...">

    <div class="d-flex justify-content-center">
        <h1 id="tselecoes">Seleções</h1>
    </div>
    <div class="container">
        <div class="row" id="cardrow">
            
        
        </div>
    </div>
    
    <div class="d-flex justify-content-center">
        <h1 id="tbrasil">Brasil</h1>
    </div>
    <div class="container">
        <div class="row" id="brasil">

        </div>
    </div>

    <div class="d-flex justify-content-center">
        <h1 id="teuropa">Europa</h1>
    </div>
    <div class="container">
        <div class="row" id="europa">

        </div>
    </div>


    <footer class="container-fluid" style="background-color: black;" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-12" id="footer-top">
                    <div class="row justify-content-between">
                        <div class="col-4"><h2>Imports Fut</h2></div>
                        <div class="col-4" id="social-icons">
                            <i class="bi bi-facebook"></i>
                            <i class="bi bi-instagram"></i>
                            <i class="bi bi-youtube"></i>
                            <i class="bi bi-twitter"></i>
                        </div>
                    </div>
                </div>
                <div class="col-12" id="footer-details">
                    <div class="row">
                        <div class="col-12 col-md-4" id="news-container">
                            <h4 style="color: white;">Camisas 100% Originais</h4>
                            <form action="">
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="Digite o seu e-mail">
                                </div>
                                <button class="btn btn-dark" type="submit">Inscrever</button>
                            </form>
                        </div>
                        <div class="col-12 col-md-4" id="contact-container">
                            <h4>Formas de contato</h4>
                            <p class="" style="color: white;">(11)99999-9999</p>
                            <p class="" style="color: white;">importsfut@gmail.com</p>
                        </div>
                        <div class="col-12 col-md-4" id="links-container">
                            <div class="row">
                                <h4>Voce pode estar procurando por:</h4>
                                <div class="col-6">
                                    <ul class="list-unstyled">
                                        <li><a href="#tselecoes" class="secondary-color">Seleções</a></li>
                                        <li><a href="#tbrasil" class="secondary-color">Brasil</a></li>
                                        <li><a href="#teuropa" class="secondary-color">Europa</a></li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12" id="footer-bottom">
                    <div class="row justify-content-between">
                        <div class="col-12 col-md-3">
                            <p class="secondary-color">Imports Fut &copy; 2023</p>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </footer>

    
    <script src="script1.js"></script>
</body>
</html>