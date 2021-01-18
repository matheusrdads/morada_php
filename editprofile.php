<?php

require "./php/includes/menu.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- css -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


</head>

<body>

 <div class="container">

 <img src="img/icones/profile-icon.png" style="width:200px; height:200px"alt=""><br>

 <h1> Editar seu Perfil </h1>
<form method="post" action="./php/actions/posteditprofile.php">
    <div class="form-group">

    <input type="text" class="inpt" name = "nome" id="nome"  placeholder="Nome" value="josé">

    <input type="text" class="inpt" name = "sobrenome" id="sobrenome"  placeholder="Sobrenome">

    <br>
    <input type="text" class="inpt" name = "endereco" id="endereco"  placeholder="Endereço">

    <input type="number" class="inpt" name = "cep" id="cep"  placeholder="Cep">
    <br>
    <input type="text" class="inpt" name = "bairro" id="bairro"  placeholder="Bairro">

    <input type="text" class="inpt" name = "complemento" id="complemento"  placeholder="Complemento">
    <br>
    <input type="number" class="inpt" name = "telefone" id="telefone"  placeholder="Telefone">

    <input type="date" class="inpt_date" name = "data_de_nascimento" id="idade"  placeholder="idade">
    <br>
    <input class="sobre" type="text"  name="sobre" placeholder="Sobre">   
    <br>
    <br>
    
    <button type="submit">Enviar</button>

    </div>
</form>
</div>


<!-- Footer -->
<?php

require "./php/includes/footer.html";

?>
<!-- Footer --> 


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>

</div>

</body>
</html>
