<?php
include('./php/actions/conexaodb.php');
// include('./php/actions/exibeServicos.php');

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$query = "SELECT * FROM usuarios JOIN servicos ON usuarios.idusuario = servicos.usuario WHERE idusuario = $id ; ";
// $query ="SELECT * FROM usuarios WHERE idusuario = $id;";
$result = $conn->query($query);
$data = mysqli_fetch_assoc($result);

$query2 ="SELECT * FROM usuarios WHERE idusuario = $id;";
$result2 = $conn->query($query2);
$data2 = mysqli_fetch_assoc($result2);


if (isset($_POST['estrela'])) {
    $estrela = $_POST['estrela'];

    $result_avaliacoes = " UPDATE  usuarios SET estrela = '$estrela'   WHERE idusuario = '$id' ";

    $resultado_avaliacoes = mysqli_query($conn, $result_avaliacoes);
    if (mysqli_insert_id($conn)) {
        // $_SESSION['msg'] = "Usuário avaliado com sucesso";
        header("Location: ./perfilpublico.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>

    <!--css-->
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="./css/avaliacao.css">
    
    <!--icones-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href=" http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">

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
            margin-top: 50px;
            transition: 0.25s;
            width: 153px;
        }

        .edit a {
            text-decoration: none;
            color: #fff;
        }

        .edit:hover {
            box-shadow: 0px 1px 18px #1145ff;
        }

        .sair {
            background: -webkit-linear-gradient(right, #00e0ff, #1145ff);
            border: none;
            border-radius: 21px;
            box-shadow: 0px 1px 8px #1145ff;
            color: white;
            height: 42.3px;
            margin: 0 auto;
            margin-top: 50px;
            transition: 0.25s;
            width: 153px;
        }

        .sair:hover {
            box-shadow: 0px 1px 18px #1145ff;
        }

        .sair a {
            text-decoration: none;
            color: #fff;
        }

        select {
            border-radius: 15px;
            border: 1px solid orangered;
            width: 150px;
        }

        select:hover {
            border-radius: 15px;
            border: 1px solid orangered;
            width: 150px;
        }

        .btnstyle {
            border: 1px solid orangered;
            background-color: orangered !important;
            width: 140px;
            border-radius: 30px;
            color: white;
        }

        .btnstyle:hover {
            border: 1px solid orangered;
            background-color: #2d2d2d !important;
            color: orangered !important;
        }

        .dangerB a {
            text-decoration: none;
            color: white;
        }

        .dangerB {
            border-radius: 30px;
            background-color: red;
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

        .anyClass {
            height: 100px !important;
            overflow-y: auto;
        }
    </style>
</head>

<?php
require "./php/includes/menu.php";
?>

<body>

    <div class="container-fluid">
        <div class="container-fluid" style="margin-bottom:70px; margin-top:70px;">
            <div class="row">
                <div class="col-sm border">
                    <h3 class="display-4 text-center"> <?php echo $data['nome']; ?></h3>
                    <div class="text-center"><img src="img/icones/profile-icon.png" style="width:200px; height:200px" alt=""></div>
                    <main>
                        <div>
                            <ul class="nav justify-content-center">
                                <li class="nav-item"><a href="#" class="nav-link"> <img src="img/icones/linkedin.png" /></a></li>
                                <li class="nav-item"><a href="#" class="nav-link"> <img src="img/icones/face.png" /></a></li>
                                <li class="nav-item"><a href="#" class="nav-link"> <img src="img/icones/tw.png" /></a></li>
                            </ul>
                            <div class="estrelas">

                                <!--modal button-->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Avaliar usuário
                                </button>
                                

                                <div>
                                <?php if($data2['estrela']) {
                                    
                                    $ava = $data2['estrela']; ?>
                                
                                <?php
                                if ($ava > 0 and $ava < 2) { ?>
                                    <label for="estrela_cinco"><i class="fa"></i></label>
                                    <input type="radio" id="estrela_um" name="estrela" value="1">

                                <?php } else if ($ava > 1 and $ava < 3) { ?>
                                    <label for="estrela_cinco"><i class="fa"></i></label>
                                    <label for="estrela_cinco"><i class="fa"></i></label>


                                <?php } else if ($ava > 2 and $ava < 4) { ?>
                                    <label for="estrela_cinco"><i class="fa"></i></label>
                                    <label for="estrela_cinco"><i class="fa"></i></label>
                                    <label for="estrela_cinco"><i class="fa"></i></label>


                                <?php } else if ($ava > 3 and $ava < 5) { ?>
                                    <label for="estrela_cinco"><i class="fa"></i></label>
                                    <label for="estrela_cinco"><i class="fa"></i></label>
                                    <label for="estrela_cinco"><i class="fa"></i></label>
                                    <label for="estrela_cinco"><i class="fa"></i></label>


                                <?php } else if ($ava > 4 and $ava < 6) { ?>
                                    <label for="estrela_cinco"><i class="fa"></i></label>
                                    <label for="estrela_cinco"><i class="fa"></i></label>
                                    <label for="estrela_cinco"><i class="fa"></i></label>
                                    <label for="estrela_cinco"><i class="fa"></i></label>
                                    <label for="estrela_cinco"><i class="fa"></i></label>


                                <?php } 
                                
                                
                                } else {?>

                                    <p>Usuário sem avaliação</p>

                                
                                <?php } ?>


                               

                                </div>





                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Avaliar usuário</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <Form method="POST" action="" enctype="multipart/form-data">
                                                    <div class="estrelas">
                                                        <input type="radio" id="vazio" name="estrela" value="" checked>

                                                        <label for="estrela_um"><i class="fa"></i></label>
                                                        <input type="radio" id="estrela_um" name="estrela" value="1">

                                                        <label for="estrela_dois"><i class="fa"></i></label>
                                                        <input type="radio" id="estrela_dois" name="estrela" value="2">

                                                        <label for="estrela_tres"><i class="fa"></i></label>
                                                        <input type="radio" id="estrela_tres" name="estrela" value="3">

                                                        <label for="estrela_quatro"><i class="fa"></i></label>
                                                        <input type="radio" id="estrela_quatro" name="estrela" value="4">

                                                        <label for="estrela_cinco"><i class="fa"></i></label>
                                                        <input type="radio" id="estrela_cinco" name="estrela" value="5"><br>

                                                    </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Avaliar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                </form>

                                
                            </div>
                        </div>


                        <h4>Sobre</h4>
                        <p><?php echo $data['sobre']; ?>
                        </p>

                        <h4>Informações da conta</h4>
                        <p>Nome: <?php echo $data['nome']; ?> </p>


                        <p>Sobrenome: <?php

                                        echo $data['sobrenome']; ?> </p>

                        <p>Bairro: <?php

                                    echo $data['bairro']; ?>
                        </p>

                </div>

                <div class="col-sm border">
                    <h4 class="display-4">Avisos</h4>

                    <?php

                    $result = $conn->query($query);
                    if ($result->num_rows > 0) {

                        /* fetch associative array */
                        while ($row = $result->fetch_assoc()) {

                    ?>
                            <div class="Card" style="width: 18rem;">   
                                    <h5 class="card-title"><?php echo $row['tipo'] ?></h5>
                                    <p class="card-text"><?php echo $row['descricao']; ?></p>
                            </div>

                            <br>
                    <?php
                        }
                    } else {
                        echo '<p>' . 'Nenhuma solicitação feita!' . '<p>';
                    }

                    ?>

                        <form class="form text-center mt-1" method="post" action="./php/actions/mensagem.php?id=<?php echo $data['idusuario']; ?>">
                        <label for="">
                            <h4 class="display-4 ">Ajude essa Pessoa</h4>
                            <select name="categoria">
                                <option value="construcao">Construção</option>
                                <option value="manutencao">Manutenção</option>
                            </select><br><br>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="mensagem" rows="5" placeholder="Digite aqui a descrição do serviço"></textarea>
                            <button type="submit" class="btn btnstyle mt-3 btn-sm">
                                Enviar
                            </button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php

    require "./php/includes/footer.html";

    ?>
    <!-- Footer -->

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="./js/confirma.js" crossorigin="anonymous"></script>

</body>

</html>