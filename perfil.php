<?php

include('./php/includes/verifica_login.php');


require "./php/includes/menu.html";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>

<div class="container-fluid">
        <div class="container-fluid" style="margin-bottom:70px; margin-top:70px;">
            <div class="row">
                <div class="col-sm border">
                <h3 class="display-4 text-center"> <?php echo $_SESSION['nome'];?></h3>
                    <div class="text-center"><img src="img/icones/profile-icon.png" style="width:200px; height:200px"alt=""></div>
                    <main>  
        <div>
                <ul class="nav justify-content-center">
                    <li class="nav-item"><a href="#" class="nav-link"> <img src="img/icones/linkedin.png" /></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"> <img src="img/icones/face.png" /></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"> <img src="img/icones/tw.png" /></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"> <img src="img/icones/rss.png" /></a></li>
                </ul>
        </div>

        <div class="nav justify-content-center" style="margin-top:30px; margin-bottom:30px">
            <button type="button" class="btn btn-secondary btn-sm"> <a href="editprofile.php">Edite seu Perfil</a></button>
            <button type="button" class="btn btn-primary"> <a href="./php/includes/logout.php">Sair</a></button>
            
        </div>               
            <h4>Sobre</h4>
            <p><?php echo $_SESSION['sobre'];?>
            </p>

            <h4>Informações da conta</h4>
            <p>Nome: <?php echo $_SESSION['nome'];?> </p>
            
            <p>Sobrenome: <?php 
            if (!$_SESSION['sobrenome'] = null)
                echo "Não Cadastrado";
            else
                echo $_SESSION['sobrenome'];?> </p>
            
            <p>Endereço: <?php
            if (!$_SESSION['endereco'] = null)
            echo "Não Cadastrado";
        else
          echo $_SESSION['endereco'];?> </p>
            
            <p>Bairro: <?php 
            if (!$_SESSION['bairro'] = null)
                echo "Não Cadastrado";
            else
             echo $_SESSION['bairro'];?>
            </p>
            
            <p>Complemento: <?php
            if (!$_SESSION['complemento'] = null)
            echo "Não Cadastrado";
        else
         echo $_SESSION['complemento'];?> </p>
            
            <p>CEP: <?php 
            if (!$_SESSION['cep'] = null)
            echo "Não Cadastrado";
        else
        echo $_SESSION['cep'];?></p>
            <p>Telefone:
                <?php if (!$_SESSION['telefone'] = null)
                echo "Não Cadastrado";
            else
             echo $_SESSION['telefone'];?>  </p>

                        
            <!-- Informações para armezanar apenas no banco de dados, não rendenizar no perfil
            <p>Data de nascimento: --------- </p>
            <p>Endereço: --------- </p>
            <p>Cep: --------- </p>
            <p>Complemento: --------- </p> -->

        </div>
            <div class="col-sm border">
            <h3 class="display-5 text-center">Projetos relacionados</h3>
            <p>Nenhum projeto cadastrado</p>
            

            <form class="form" method="post" action="solicitarservicos.php">
                <label for="">
                        <h3 class="display-5">Solicite ajuda</h3>
                    
                        <select name="categoria">
                        <option value="">Construção</option>
                        <option value="">Manutenção</option>
                        </select><br><br>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="descrição" rows="3" placeholder="Digite aqui a descrição do serviço"></textarea>
                        <button type="submit" class="btn btn-secondary btn-sm">
                            Enviar
                        </button>
            </form>
                    <form class="form" method="post" action="oferecerservicos.php">
                            <h3 class="display-5">Ofereça ajuda</h3>
                                <select name="categoria">
                                    <option value="">Construção</option>
                                    <option value="">Manutenção</option>
                                </select><br><br>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="descrição" rows="3" placeholder="Digite aqui a descrição do serviço"></textarea>

                            <button type="submit" class="btn btn-secondary btn-sm"> Enviar</button>
                <form>
                </div>
               

            <div class="col-sm border">
             <h4>Proximos Eventos</h4>

            <p>Sem eventos cadastrados.</p>
           
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



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>

</body>
</html>
