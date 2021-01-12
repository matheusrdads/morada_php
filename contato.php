<?php

require "./php/includes/menu.php";

?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morada Contato</title>

    <!--css-->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/slick.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/contato.css"> -->
    
    <!--icones-->
    <link rel="icon" href="img/logomorada.png">
    <script src="https://kit.fontawesome.com/6dd1874a7a.js" crossorigin="anonymous"></script>
    
    <!--scripts-->
    <script src="js/javascript.js"></script>
    <script src="./js/validacaocontato.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    </head>

    <body style="background: background: rgb(255,255,255);
background: linear-gradient(180deg, rgba(255,255,255,1) 23%, rgba(0,123,255,1) 64%);">
        <div class="container" >
            <h1 class="display-4 text-center mt-2 ">Fale Conosco</h1>
            <div class="jumbotron mt-5" style="background: #C1C1C1" >
                <form method="post" action="./php/actions/postcontato.php">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <label for="nome">Digite seu nome</label>
                                <input type="text" name="nome" class="form-control" placeholder="Nome">
                            </div>
                            <div class="col">
                                <label for="Sobrenome">Sobrenome</label>
                                <input type="text" class="form-control"  name="sobrenome" placeholder="Sobrenome">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <label for="email">Endereço de email</label>
                                <input type="email" class="form-control " name="email" placeholder="Seu email">
                            </div>
                            <div class="col">
                                <label for="telefone">Telefone</label>
                                <input type="number" class="form-control" name="telefone" placeholder="Telefone">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Digite sua mensagem</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="mensagem" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    
                </form>
            </div>
        
        </div>
        <?php
        require "./php/includes/footer.html";
        ?>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</html>