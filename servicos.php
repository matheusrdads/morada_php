
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviços</title>
    <link rel="stylesheet" href="css/main.css">
    <script src="js/javascript.js"></script>
    <link rel="icon" href="img/logomorada.png">
    <link rel="stylesheet" href="css/servicos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        .submitbtn {
            background: -webkit-linear-gradient(right, #00e0ff, #1145ff);
            border: none;
            border-radius: 21px;
            box-shadow: 0px 1px 8px #1145ff;
            color: white !important;
            height: 42.3px;
            margin: 0 auto;
            margin-top: 50px;
            transition: 0.25s;
            width: 140px;
        }
        .card {
            border: none;
        }
        .submitbtn:hover {
            box-shadow: 0px 1px 18px #1145ff;
        }
    </style>
</head>

<?php
require "./php/includes/menu.php";
?>

<body>

    <div class="container text-center">
        <!-- banner -->
        <img class=" imagem-head" src="./img/servicos/servico3n.png" style="width: 70%" alt="">
        <!-- titulo -->
        <div class="container text-center mb-5" style="width:80%">
            <h1 class="display-3 pt-5">Principais Serviços</h2>
                <p class="lead">Solicite um serviço em nossa plataforma e descubra na sua regiao uma pessoa disposta a te ajudar!</strong></p>
        </div>
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="./img/servicos/construcao.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Construção</h5>
                    <p class="card-text">Alvenaria, concretagem, revestimentos, carpintaria, etc.</p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="./img/servicos/pinturacasa.png" style="height:193" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Manutenção</h5>
                    <p class="card-text">Instalação elétrica, reparos hidráulicos, pinturas, etc</p>
                </div>

            </div>
            <div class="card">
                <embed class="embed-responsive-item" src="https://www.recordtvriopreto.com.br/sistema/video_artigo/43552_3253726141497619971.mp4" ? silenciado=1 allowfullscreen style="height: 190px;"></embed>
                <div class="card-body">
                    <h5 class="card-title">Doações</h5>
                    <p class="card-text">Realize doações de equipamentos e materiais que não utilize mais para ajudar o próximo.</p>
                </div>
            </div>
        </div>
        <hr>
        <h2 class="display-3 pt-5">Destaques</h2>
        <!--Carousel Wrapper-->
        <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
            <!--Controls-->
            <div class="controls-top">
                <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
                <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fas fa-chevron-right"></i></a>
            </div>
            <!--/.Controls-->
            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                <li data-target="#multi-item-example" data-slide-to="1"></li>
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                <!--First slide-->
                <div class="carousel-item active">
                    <div class="col-md-3" style="float:left">
                        <div class="card mb-2">
                            <img class="card-img-top" src="./img/icones/profile-icon.png" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Luiz Claudio</h4>
                                <a class="btn submitbtn ">Perfil</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="float:left">
                        <div class="card mb-2">
                            <img class="card-img-top" src="./img/icones/profile-icon.png" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Atonio Lopes</h4>
                                <a class="btn submitbtn">Perfil</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="float:left">
                        <div class="card mb-2">
                            <img class="card-img-top" src="./img/icones/profile-icon.png" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Marcos Antonio</h4>
                                <a class="btn submitbtn">Perfil</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="float:left">
                        <div class="card mb-2">
                            <img class="card-img-top" src="./img/icones/profile-icon.png" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Julia Nascimento</h4>
                                <a class="btn submitbtn">Perfil</a>
                            </div>
                        </div>
                    </div>

                </div>
                <!--/.First slide-->

                <!--Second slide-->
                <div class="carousel-item">
                    <div class="col-md-3" style="float:left">
                        <div class="card mb-2">
                            <img class="card-img-top" src="./img/icones/profile-icon.png" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Marcos Ferreira</h4>
                                <a class="btn submitbtn">Perfil</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3" style="float:left">
                        <div class="card mb-2">
                            <img class="card-img-top" src="./img/icones/profile-icon.png" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Nathan Pereira</h4>
                                <a class="btn submitbtn">Perfil</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3" style="float:left">
                        <div class="card mb-2">
                            <img class="card-img-top" src="./img/icones/profile-icon.png" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Luiz Henrique</h4>

                                <a class="btn submitbtn">Perfil</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3" style="float:left">
                        <div class="card mb-2">
                            <img class="card-img-top" src="./img/icones/profile-icon.png" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Caio Andrade</h4>
                                <a class="btn submitbtn">Perfil</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.Second slide-->
            </div>
            <!--/.Slides-->
        </div>
        <!--/.Carousel Wrapper-->
    </div>
    <!--Footer-->

    <?php
    require "./php/includes/footer.html";
    ?>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>