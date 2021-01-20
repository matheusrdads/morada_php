
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morada</title>

    <!--css-->
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="./css/slick.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--icones-->
    <link rel="icon" href="img/logomorada.png">
    <style>
        body {
            background: rgb(240, 249, 255);
        }
        .bg-light {
            background: rgb(0, 138, 255);
            background: linear-gradient(180deg, rgba(0, 138, 255, 1) 0%, rgba(142, 71, 255, 1) 90%);
        }
        .jumbotron {
            border: 2px solid #fff;
            background: url(img/duck.png) no-repeat;
            -moz-box-shadow: 0px 6px 5px #ccc !important;
            -webkit-box-shadow: 0px 6px 5px #ccc !important;
            box-shadow: 0px 6px 5px #ccc !important;
            -moz-border-radius: 30px !important;
            -webkit-border-radius: 30px !important;
            border-radius: 30px !important;
        }
        .tamanho {
            position: static;
        }
        .rounded-circle {
            border: 5px solid white;
        }
        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .btnhover {
            width: 200px;
            font-size: 16px;
            color: #fff;
            text-align: center;
            border: none;
            background-size: 300% 100%;
            border-radius: 50px;
            moz-transition: all .4s ease-in-out;
            -o-transition: all .4s ease-in-out;
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }
        .btnhover:hover {
            color: #fff;
            background-position: 100% 0;
            moz-transition: all .4s ease-in-out;
            -o-transition: all .4s ease-in-out;
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }
        .btn-hover:focus {
            outline: none;
        }
        .btnhover.btncolor {
            background-image: linear-gradient(to right, #6253e1, #852D91, #A3A1FF, #F24645);
            box-shadow: 0 4px 15px 0 rgba(126, 52, 161, 0.75);

        }
        @media screen and (max-width:1000px) {
            .banner {
                height: 550px !important;
            }
        }

        @media screen and (max-width:500px) {
            .banner {
                height: 300px !important;

            }
        }

        @media screen and (max-width:1000px) {
            .tamanho {
                height: 550px !important;
            }
        }

        @media screen and (max-width:500px) {
            .tamanho {
                height: 300px !important;

            }
        }
    </style>
</head>
<?php
require "./php/includes/menu.php";
?>
<body>
    <!--carrosel de imagens principal-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 banner" src="./img/carroselprincipal/banner1.png" alt="First slide">
            </div>
            <div class="carousel-item banner">
                <img class="d-block w-100 banner" src="./img/carroselprincipal/banner2.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 banner" src="./img/carroselprincipal/banner3.png" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!--sessão de sobre-->
    <div class="container-fluid pt-5">
        <div class="container" style="margin-bottom:70px; margin-top:20px">
            <div class="row">
                <div class="ml-3 col-xl-4 col-lg-4 col-md- col-sm-6 text-center imgdark">
                    <img class="bgdark img-responsive" src="img/logodark.png" width="65%">
                </div>
                <div class="ml-4 col-xl-6 col-lg-6 col-md- col-sm-8 textabout">
                    <h3 class="display-3 sobre">Sobre</h3>
                    <p class="lead">Nós acreditamos que todas as pessoas tem direito a moradias seguras, dignas e em bom estado,
                        e pensando nisso queremos te
                        ajudar a transformar o seu lar.
                        Morada te ajuda a terminar aquela obra parada em casa,
                        fazer pequenas reformas e realizar manutenções de forma rápida
                        e <em>gratuita</em> da doação de ferramentas e serviços voluntários.<br>
                        Faça parte da iniciativa Morada você também e leve felicidade a sua região. </p>
                </div>
            </div>
        </div>
    </div>
    <!--sessão de serviços-->
    <div class="container-fluid bg-light text-center">
        <h1 class="display-4 text-light mb-3 pt-5 ajuda">AJUDA</h1>
        <p class="lead text-light">Você poderá encontrar serviços voluntarios e doações de todo tipo de ferramenta.</p>
        <p class="lead text-light mb-5">Comece escolhendo uma categoria:</p>
        <div class="row mb-5">
            <div class="col-sm-4">
                <a href="servicos.php"><img src="img/servicos/doacao.png" width="150px"></a>
                <h4 class="display-4 text-light">Doações</h4>
                <p class="lead text-light">Tá com aquela caixa de ferramenta parada em casa,<br> ou algum resto de obra?<br>
                    <!-- Sabia que alguém na sua rua pode estar só esperando por
                  você pra tornar a casa em um verdadeiro lar? -->
                    Ofereça ajuda aqui na Morada!
                </p>
            </div>
            <div class="col-sm-4">
                <a href="servicos.php"><img src="img/servicos/construcao2.png" width="150px"></a>
                <h4 class="display-4 text-light">Construção</h4>
                <p class="lead text-light">Alvenaria, concretagem, revestimentos, carpintaria, etc...</p>
            </div>
            <div class="col-sm-4">
                <a href="servicos.php"><img src="img/servicos/conserto2.png" width="150px"></a>
                <h4 class="display-4 text-light">Manutenção</h4>
                <p class="lead text-light">Instalação elétrica, reparos hidráulicos, pinturas, etc...</p>
            </div>
        </div>
        <br><br>
    </div>
    <div class="container text-center" style="margin-bottom:70px; margin-top:70px;">
        <h3 class="display-4 mb-5 ">MURAL</h3>
        <div class="row">
            <div class="col-sm-4">
                <div class="jumbotron">
                    <div class="container">
                        <h3 class="display-7">João Pedro</h3>
                        <p>Oi pessoal sou carpinteiro e posso ajudar com serviços leves, mandar descrição por favor, fui...</p>
                        <!-- <p class="lead">Vista Alegre.</p> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="jumbotron">
                    <div class="container">
                        <h3 class="display-7">Ana Furtado</h3>
                        <p>Olá a todos preciso de doação de material de pintura pode ser usado mesmo, obrigado a todos.</p>
                        <!-- <p class="lead">BelfordRoxo.</p> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="jumbotron">
                    <div class="container">
                        <h3 class="display-7">Janaína</h3>
                        <p>Alguém tem sobra madeira de alguma obra? Poderia ser sarrafos mesmo. </p>
                        <!-- <p class="lead">Duque de Caxias</p> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="container btnteste">
            <a href="mural.php" class="btn btnhover btncolor btn-lg mb-5">Veja mais</a>
        </div>
    </div>

    <h3 class="display-4 text-center "> AVALIAÇÕES </h3>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 tamanho" src="./img/carroselprincipal/tst.png" alt="First slide">
                <div class="container bg-text">
                    <!-- <img class="card-img-top" src="./img/icones/profile-icon.png" style="width:170px;" alt="Card image cap"> -->
                    <img src="./img/icones/profilewoman.png" style="width:15%;" alt="..." class="rounded-circle">
                    <h2 class=" text-about">Bruna Pontes</h2>
                    <p class="lead text-light">
                        <small>
                            Muito gratificante saber que existem pessoas dispostas a ajudar a gente sem receber nada em troca.
                        </small>
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 tamanho" src="./img/carroselprincipal/tst.png" alt="Second slide">
                <div class="container bg-text">
                    <!-- <img class="card-img-top" src="./img/icones/profile-icon.png" style="width:170px;" alt="Card image cap"> -->
                    <img src="./img/icones/profilewoman2.png" style="width:15% " class="rounded-circle">
                    <h2 class=" text-about"> Vanessa Ramos</h2>
                    <p class="lead text-light">
                        <small>
                            Tive a oportunidade de ajudar pessoas que realmente preccisavam, e isso para mim não tem preço!
                        </small>
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 tamanho" src="./img/carroselprincipal/tst.png" alt="Second slide">
                <div class="container bg-text">
                    <!-- <img class="card-img-top" src="./img/icones/profile-icon.png" style="width:170px;" alt="Card image cap"> -->
                    <img src="./img/icones/profileman.png" style="width:15%" alt="..." class="rounded-circle">
                    <h2 class=" text-about"> Marcos Paulo </h2>
                    <p class="lead text-light">
                        <small>
                            Estava com um pequeno problema em minha residencia, mas que me encomadava muito, graças ao programa recebi ajuda.
                        </small>
                    </p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </div>
    </div>
    </div>
    </div>

    <div class="row-12 align-content-center text-center">
        <div class="card bg-muted ">
            <div class="card-body">
                <h5 class="card-title">Empresas Parceiras</h5>
                <p class="card-text">Tem uma empresa e deseja colaborar, seja bem vindo(a).</p>
                <a href="./contatoempresas.php" class="btn btn-primary">Saiba mais</a>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php
    require "./php/includes/footer.html";
    ?>
    <!-- Footer -->

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-migrate.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>