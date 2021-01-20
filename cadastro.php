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

    <!-- <link rel="stylesheet" type="text/css" href="css/contato.css"> -->

    <!--icones-->
    <link rel="icon" href="img/logomorada.png">
    <script src="https://kit.fontawesome.com/6dd1874a7a.js" crossorigin="anonymous"></script>

    <!--scripts-->
    <script src="js/validacaologin.js"></script>
    <script src="js/validacaocadastro.js"></script>
    <script src="js/javascript.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>
        body {
            background: rgb(65, 255, 250) !important;
            background: linear-gradient(180deg, rgba(65, 255, 250, 1) 0%, rgba(0, 73, 255, 1) 91%) !important;
        }
        .formulario {
            background-color: transparent !important;
            border: 2px solid cyan;
            border-radius: 15px;

        }
        .formulario:hover {
            border: 2px solid orangered !important;
        }
        .jumbotron {
            margin-left: 8% !important;
            width: 80% !important;
            border-radius: 50px !important;
            background-color: rgba(0, 0, 0, 0.733) !important;
            box-shadow: 0 0 2em rgb(0, 0, 0) !important;

        }
        .submitbtn {
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

        .submitbtn:hover {
            box-shadow: 0px 1px 18px #1145ff;
        }
        .form {
            width: 60%;
            align-items: center;
            margin-left: 20%;
            color: #fff;
        }
        ::placeholder {
            color: #fff !important;
            text-align: center
        }
    </style>
</head>
<?php
require "./php/includes/menu.php";
?>
<body>
    <div class="container">
        <div class="jumbotron mt-5 mb-5">
            <h1 class="display-4 text-center mb-5 text-white">Cadastro</h1>
            <form class="form" method="post" action="./php/actions/postcadastro.php">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control formulario" name="nome" id="nome" onkeyup="valida_cadastro()" placeholder="Nome">
                            <div class="form-border"></div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col">
                            <input type="email" class="form-control formulario" name="email" id="emailcadastro" onkeyup="valida_cadastro()" placeholder="E-mail">
                            <div class="form-border"></div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col">

                            <input type="password" class="form-control formulario" name="senha" id="senhacadastro" onkeyup="valida_cadastro()" placeholder="Senha">
                            <div class="form-border"></div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block submitbtn">Entrar</button>
            </form>
            <?php
            if (isset($_SESSION['cadastrado'])) :
            ?>
                <div class="bg-success">
                    Cadastrado realizado com sucesso!!
                </div>
            <?php
            endif;
            unset($_SESSION['cadastrado']);
            ?>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>