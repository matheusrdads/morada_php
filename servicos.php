<?php
include('./php/actions/conexaodb.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviços</title>

    <script src="js/javascript.js"></script>

    <!--css-->
    <link rel="stylesheet" href="css/main.css">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/avaliacao.css">

    <!--icones-->
    <link rel="icon" href="img/logomorada.png">
    <link rel="stylesheet" href="css/servicos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--css-->
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

        <div class="espaco-topo">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <?php
                    $controle_ativo = 2;
                    $controle_num_slide = 1;
                    $result_carousel = "SELECT * FROM usuarios  WHERE estrela > 3 Limit 5";
                    $resultado_carousel = mysqli_query($conn, $result_carousel);
                    while ($row_carousel = mysqli_fetch_assoc($resultado_carousel)) {
                        if ($controle_ativo == 2) { ?>
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li><?php
                                                                                                                $controle_ativo = 1;
                                                                                                            } else { ?>
                            <li data-target="#carousel-example-generic" data-slide-to="<?php echo $controle_num_slide; ?>"></li><?php
                                                                                                                                $controle_num_slide++;
                                                                                                                            }
                                                                                                                        }
                                                                                                                                ?>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php
                    $controle_ativo = 2;
                    $result_carousel = "SELECT * FROM usuarios  WHERE estrela > 3 Limit 5";
                    $resultado_carousel = mysqli_query($conn, $result_carousel);
                    while ($row_carousel = mysqli_fetch_assoc($resultado_carousel)) {
                        if ($controle_ativo == 2) { ?>

                            <div class="item active">

                                <div class="col">
                                    <div class="card mb-2" style="background-color: transparent;">
                                        <img class="card-img-top" src="<?php echo $row_carousel['imagem']; ?>" alt="<?php echo $row_carousel['nome']; ?>" style="width: 25%; margin-left: auto; margin-right: auto; border-radius: 50%;">
                                        <div class="card-body">
                                            <?php
                                                include('./php/includes/estrelas.php')
                                            ?>

                                            <h4 class="card-title"><?php echo $row_carousel['nome']; ?></h4>
                                            <p style="margin-bottom: 30px;"><?php echo $row_carousel['sobre']; ?></p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        <?php
                            $controle_ativo = 1;
                        } else { ?>
                            <div class="item">

                                <div class="item active">

                                    <div class="col">
                                        <div class="card mb-2" style="background-color: transparent;">
                                            <img class="card-img-top" src="<?php echo $row_carousel['imagem']; ?>" alt="<?php echo $row_carousel['nome']; ?>" style="width: 25%; margin-left: auto; margin-right: auto; border-radius: 50%;">
                                            <div class="card-body">
                                                <?php
                                                    include('./php/includes/estrelas.php')
                                                ?>

                                                <h4 class="card-title"><?php echo $row_carousel['nome']; ?></h4>

                                                <p style="margin-bottom: 30px;"><?php echo $row_carousel['sobre']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        <?php }} ?>          
                </div>
            </div>
        </div>
    </div>



    <!--Footer-->

    <?php
    require "./php/includes/footer.html";
    ?>

</body>
<!-- caroucel -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- caroucel -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



</html>