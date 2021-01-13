<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morada Login</title>

    <!--css-->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/login.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    

    <!--icones-->
    <link rel="icon" href="img/logomorada.png">
    <script src="https://kit.fontawesome.com/6dd1874a7a.js" crossorigin="anonymous"></script>
    <script src="js/javascript.js"></script>

    <!--scripts-->
    <script src="js/validacaologin.js"></script>
    <script src="js/validacaocadastro.js"></script>
</head>

<body>

<header class="menu-principal">
    <main>
        <div class="header-1">
            <div class="redes-sociais">
                <ul class="nav justify-content-center " style="background-color: rgb(43, 43, 43);">
                <a class="navbar-brand float-left" href="index.php"><img src="img/logo.png" width="40px" /></a>
                    <li class="nav-item"><a href="#" class="nav-link"> <img src="img/icones/linkedin.png" /></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"> <img src="img/icones/face.png" /></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"> <img src="img/icones/tw.png" /></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"> <img src="img/icones/rss.png" /></a></li>
                
                </ul>
            </div>
        </div>
    </main>
    
</header>


     <div class="coluna-100 videobackground">
        <video id="videoBG" src="img/login/videoloop.mp4" autoplay="true" loop="true"></video>
    </div> 

    <div class="coluna-100 container">
        <div class="content first-content">
            <div class="first-column">

            <div>         
                <img src="img/logomorada.png" width="100px" />
            </div>
                <!-- <h2 class="title title-primary">bem vindo de volta!</h2>
                <p class="description description-primary">continue conectado </p>
                <p class="description description-primary">entre com sua conta</p> -->
                <button id="signin" class="btn btn-primary">entre</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">criar conta</h2>
                <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="https://www.facebook.com/">
                            <li class="item-social-media">
                                <i class="fab fa-facebook-f"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-google-plus-g"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="https://br.linkedin.com/">
                            <li class="item-social-media">
                                <i class="fab fa-linkedin-in"></i>
                            </li>
                        </a>
                    </ul>
                </div><!-- social media -->
                <p class="description description-second">ou use seu email para se registrar:</p>
                <form class="form" method= "post" action="./php/actions/postcadastro.php">
                    <label class="label-input" for="">
                        <i class="far fa-user icon-modify"></i>
                        <input type="text" name = "nome" id="nome" onkeyup="valida_cadastro()" placeholder="Nome">
                    </label>

                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" name = "email" id="emailcadastro" onkeyup="valida_cadastro()" placeholder="E-mail">
                    </label>

                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name= "senha" id="senhacadastro" onkeyup="valida_cadastro()" placeholder="Senha">
                    </label>


                    <button type= "submit" class="btn btn-second" id="cadastro">cadastro</button>
                </form>

                <?php
                    if(isset($_SESSION['cadastrado'])):
                ?>
                <div class="bg-success" >
                    Cadastrado realizado com sucesso!!
                </div>
                <?php
                endif;
                unset($_SESSION['cadastrado']);
                ?>
            </div><!-- second column -->
        </div><!-- first content -->
        <div class="content second-content">
            <div class="first-column">
                <h2 class="title title-primary">Olá</h2>
                <p class="description description-primary">Entre com seus dados pessoais</p>
                <p class="description description-primary">e comece sua jornada</p>
                <button id="signup" class="btn btn-primary">cadastro</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">Entre</h2>
                <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="https://www.facebook.com/">
                            <li class="item-social-media">
                                <i class="fab fa-facebook-f"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="https://www.facebook.com/">
                            <li class="item-social-media">
                                <i class="fab fa-google-plus-g"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="https://br.linkedin.com/">
                            <li class="item-social-media">
                                <i class="fab fa-linkedin-in"></i>
                            </li>
                        </a>
                    </ul>
                </div><!-- social media -->
                <p class="description description-second">ou use sua conta para entrar:</p>
                <form class="form" method="post" action="./php/actions/postlogin.php">

                    <label class="label-input" for="email">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" name="email" id="email" onkeyup="valida_login()" placeholder="E-mail">
                    </label>

                    <label class="label-input" for="senha">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" id="senha" name="senha" onkeyup="valida_login()" placeholder="Senha">
                    </label>

                    <a class="password" href="#">Esqueceu sua senha?
                    </a>
                    <button class="btn btn-second" id="login">entre</button>
                </form>
            </div><!-- second column -->
        </div><!-- second-content -->
    </div>
    <script src="js/login.js"></script>
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>


    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-migrate.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>

</body>

</html>
