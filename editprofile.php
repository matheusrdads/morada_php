

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="icon" href="img/logomorada.png">
    
    <style>
        h1 {
            color: orangered
        }
        .inpt {
            border-radius: 15px;
            border: 1px solid grey;
            width: 280px;
        }
        .inpt_date {
            border-radius: 15px;
            border: 1px solid grey;
            width: 280px;
        }
        .sobre {
            border-radius: 30px;
            border: 1px solid grey;
            width: 565px;
            height: 200px;
            ;
        }
        .btnstyle {
            border: 1px solid orangered;
            background-color: orangered !important;
            width: 300px;
            height: 40px;
            border-radius: 30px;
            color: white;
        }
        .btnstyle:hover {
            border: 1px solid orangered;
            background-color: #2d2d2d !important;
            color: orangered !important;
        }
    </style>
</head>

<?php
require "./php/includes/menu.php";
?>

<body>
    <div class="container-fluid">
        <div class="container text-center">
            <img src="img/icones/profile-icon.png" style="width:200px; height:200px" alt=""><br>
            <h1> Editar seu Perfil </h1>
            <form method="post" action="./php/actions/posteditprofile.php">
                <div class="form-group">
                    <input type="text" class="inpt mb-3" name="nome" id="nome" placeholder="Nome">
                    <input type="text" class="inpt mb-3" name="sobrenome" id="sobrenome" placeholder="Sobrenome">
                    <br>
                    <input type="text" class="inpt mb-3" name="endereco" id="endereco" placeholder="Endereço">
                    <input type="number" class="inpt mb-3" name="cep" id="cep" placeholder="Cep">
                    <br>
                    <input type="text" class="inpt mb-3" name="bairro" id="bairro" placeholder="Bairro">
                    <input type="text" class="inpt mb-3" name="complemento" id="complemento" placeholder="Complemento">
                    <br>
                    <input type="number" class="inpt mb-3" name="telefone" id="telefone" placeholder="Telefone">
                    <input type="date" class="inpt_date mb-3" name="data_de_nascimento" id="idade" placeholder="idade">
                    <br>
                    <input class="sobre mb-3" type="text" name="sobre" placeholder="Sobre">
                    <br>
                    <br>
                    <button class="btnstyle" type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>


    <!-- Footer -->
    <?php

    require "./php/includes/footer.html";

    ?>
    <!-- Footer -->


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </div>

</body>

</html>