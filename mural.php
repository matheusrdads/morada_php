<?php
require "./php/actions/conexaodb.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetos</title>

    <!--css-->
    <link rel="stylesheet" href="css/projetos.css">

    <!--icones-->
    <link rel="icon" href="img/logomorada.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
     <!--css-->
    <style>
        .edit {
            color: #fff !important;
            background: -webkit-linear-gradient(right, #00e0ff, #1145ff);
            border: none;
            border-radius: 21px;
            box-shadow: 0px 1px 8px #1145ff;
            height: 42.3px;
            margin: 0 auto;
            margin-top: 5px;
            transition: 0.25s;
            width: 123px;
        }

        .edit a {
            text-decoration: none;
            color: #fff;
        }

        .edit:hover {
            box-shadow: 0px 1px 18px #1145ff;
        }
        .jumbotron {
            height: 95%;
            border: 2px solid #fff;
            background: url(img/duck.png) no-repeat;
            -moz-box-shadow: 0px 6px 5px #ccc !important;
            -webkit-box-shadow: 0px 6px 5px #ccc !important;
            box-shadow: 0px 6px 5px #ccc !important;
            -moz-border-radius: 30px !important;
            -webkit-border-radius: 30px !important;
            border-radius: 30px !important;
        }

        .btn-primary {
            color: white !important;
            background-color: rgb(29, 108, 255) !important;
            width: 60% !important;
            border-radius: 30px !important;
        }

        .btn-primary:hover {
            background-color: orange !important;
            color: white !important;
            border-color: orangered !important;
        }

        ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #222222;

        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: rgb(23, 86, 204);
            border-radius: 10px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #ff7300;
        }

        .anyClass p {
            margin: 0;
            font-size: 18px;
            /* height: 200px !important; */
            
        }

        .anyClass {
            height: 200px !important;
            overflow-y: auto;
        }



        .card {
            border-radius: 20px !important;
        }
    </style>

</head>

<body>

<?php
require "./php/includes/menu.php"; ?>

    <!-- Titulo Mural -->
    <div class="container text-center">
        <h3 class="display-3 " style=" margin-top:30px;">MURAL</h3>
    </div>

    <div class="container">

        <!-- PRIMEIRA COLUNA -->
        <div class="container mt-4 text-center">
            <div class="row">

                <?php

                $pesquisar = '';

                if (!empty($_GET['pesquisar'])) {
                    $pesquisar = $_GET['pesquisar'];
                }

                // $result_usuarios = "SELECT * FROM usuarios JOIN servicos ON usuarios.idusuario = servicos.usuario WHERE endereco LIKE '%$pesquisar%' LIMIT 26;";
                $result_usuarios = "SELECT nome, descricao, bairro, endereco, idusuario, tipo FROM usuarios JOIN servicos ON usuarios.idusuario = servicos.usuario WHERE descricao > '0' and  endereco LIKE '%$pesquisar%';";


                $result = $conn->query($result_usuarios);

                if ($result->num_rows > 0 && $pesquisar === 0) {

                    while ($row = $result->fetch_assoc()) {
                ?>

                        <div class="col-sm-4">
                            <div class="card mb-5 rounded">
                                <div class="container">
                                    <div class=" anyClass">
                                        <h3 class="display-7"><?php echo $row['nome']; ?></h3>
                                        <p class="lead"><?php echo "Status: ", $row['tipo']; ?></p>
                                        <p class=" lead"><?php echo "Tipo: ", $row['descricao']; ?></p>
                                        <p class="lead"><?php echo "Bairro: ", $row['bairro']; ?></p>
                                        <p class="lead"><?php echo "Rua", $row['endereco']; ?></p>
                                        <button type="button" class="btn text-white edit"><a href="./perfilpublico.php?id=<?php echo $row['idusuario']; ?>">Visualizar</a></button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    <?php }
                } else {

                    while ($row = $result->fetch_assoc()) {
                    
                        if($row['tipo'] === 'oferecendo') {?>
                        <div class="col-sm-4">
                            <div class="card mb-5 rounded bg-success">
                                <div class="container">
                                    <div class="anyClass">
                                        <h3 class="display-7"><?php echo $row['nome']; ?></h3>
                                        <p class=" lead"><?php echo "Tipo: ", $row['descricao']; ?></p>
                                        <p class="lead"><?php echo "Status: ", $row['tipo']; ?></p>
                                        <p class="lead"><?php echo "Bairro: ", $row['bairro']; ?></p>
                                        <p class="lead"><?php echo "Endereço: ", $row['endereco']; ?></p>
                                        <button type="button" class="btn text-white edit"><a href="./perfilpublico.php?id=<?php echo $row['idusuario']; ?>">Visualizar</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                       
                <?php }  else if ($row['tipo'] === 'solicitando'){


                        if($row['tipo'] === 'solicitando') {?>
                            <div class="col-sm-4">
                                <div class="card mb-5 rounded bg-secondary">
                                    <div class="container">
                                        <div class="anyClass">
                                            <h3 class="display-7"><?php echo $row['nome']; ?></h3>
                                            <p class=" lead"><?php echo "Tipo: ", $row['descricao']; ?></p>
                                            <p class="lead"><?php echo "Status: ", $row['tipo']; ?></p>
                                            <p class="lead"><?php echo "Bairro: ", $row['bairro']; ?></p>
                                            <p class="lead"><?php echo "Endereço: ", $row['endereco']; ?></p>
                                            <button type="button" class="btn text-white edit"><a href="./perfilpublico.php?id=<?php echo $row['idusuario']; ?>">Visualizar</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    

        <?php  }    
                  }
                    }  }?>

                <!-- Fecha o background color -->
            </div>
        </div>
    </div>

    <?php

    require "./php/includes/footer.html";

    ?>

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>