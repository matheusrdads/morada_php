<?php

require "./php/includes/menu.php";

?>

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
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--icones-->
    <link rel="icon" href="img/logomorada.png">


</head>
<body >

    <!--carrosel de imagens principal-->
        <div class="coluna-100">
            <div class="slider-principal">
                <img src="img/carroselprincipal/banner7.jpg" />
                <img src="img/carroselprincipal/banner3.png" />
                <img src="img/carroselprincipal/banner5.jpg" />
                <img src="img/carroselprincipal/banner4.jpg" />
            </div>
        </div>

    <!--sessão de sobre-->
    <div class="container-fluid text-center" style="background: background: rgb(255,255,255);
background: linear-gradient(180deg, rgba(255,255,255,0.5690651260504201) 24%, rgba(168,202,255,1) 74%, rgba(0,123,255,1) 100%);">  

            <div class="container" style="margin-bottom:70px; margin-top:70px">
                    <h2 class="display-2">Sobre</h2>
                    <p class="lead">Nós acreditamos que todas as pessoas tem direito a moradias seguras, dignas e em bom estado, e pensando nisso queremos te
                        ajudar a transformar o seu lar. 
                        Morada te ajuda a terminar aquela obra parada em casa, fazer pequenas reformas e realizar manutenções de forma rápida 
                        e <em>gratuita</em> da doação de ferramentas e serviços voluntários.
                    Faça parte da iniciativa Morada você também e leve felicidade a sua região. </p>
                    <input">
            </div>

        <!--sessão de 'faça parte'-->
                <div class="container" style="margin-bottom:70px; margin-top:70px">
                    <h2 class="display-2">Faça parte da Morada</h2>
                    <p class="lead">Tá com aquela caixa de ferramenta parada em casa, ou algum resto de obra? É um prestador de serviços com um grande coração
                        e muita vontade de ajudar o mundo a ser um lugar melhor? Sabia que alguém na sua rua pode estar só esperando por você pra tornar a casa em um verdadeiro lar?
                        Ofereça <em>Ajuda</em> aqui na Morada! </p>
                </div>
        

        <!--sessão de serviços AJUSTAR O TEXT-ALIGN DO P PARA CENTER-->
            <div class="container" style="margin-bottom:70px; margin-top:70px">
                <a name="servicos" id="servicos"></a>
                <h2 class="display-2">Ajuda disponivel</h2>
                    <p class="lead">Você poderá encontrar empréstimos e doações de todo tipo de ferramentas e serviços voluntário.
                    <br>
                        Comece escolhendo uma categoria:
                    </p>
            </div>

        <div class="container"style="margin-bottom:70px; margin-top:70px">
            <div class="row">
                <div class="col-sm">
                    <a href="servicos.php" style="text-decoration: none;">
                    <img src="img/servicos/construction.png" width="100px"></a>
                    <h3 class="display-5">CONSTRUÇÃO</h3>
                    <p>alvenaria, concretagem, revestimentos, carpintaria, etc.</p>
                    
                </div>
            <div class="col-sm">
                <a href="servicos.php" style="text-decoration: none;">
                <img src="img/servicos/conserto.png" width="100px"></a>
                <h3 class="display-5">MANUTENÇÃO</h3>
                <p>instalação elétrica, reparos hidráulicos, pinturas, etc</p>

            </div>
        </div>
         
        <div class="container-fluid" style="margin-bottom:70px; margin-top:70px;    ">
            <h3 class="display-4">MURAL</h3>
            <div class="row">
                <div class="col-sm-4">
                <div class="jumbotron">
                <div class="container">
                <h3 class="display-7">João Pedro</h3>
                    <p>Oi pessoal sou carpinteiro e posso ajudar com serviços leves, mandar descrição por favor, fui...</p>
                    <p class="lead">Vista Alegre.</p>
                </div>
            </div>
        </div>


            <div class="col-sm-4">
                <div class="jumbotron">
                <div class="container">
                <h3 class="display-7">Ana Furtado</h3>
                    <p>Olá a todos preciso de doação de material de pintura pode ser usado mesmo, Obrigado a todos.</p>
                    <p class="lead">BelfordRoxo.</p>
                </div>
            </div>
            </div>


            <div class="col-sm-4">
            <div class="jumbotron">
                <div class="container">
                <h3 class="display-7">Janaína</h3>
                    <p>Alguém tem sobra madeira de alguma obra? Poderia ser sarrafos mesmo. </p>
                    <p class="lead">Duque de caxias</p>
                </div>
            </div>  
            </div>

            </div>
            <button type="button" class="btn btn-secondary btn-lg"> <a href="projetos.php">Veja mais</a></button>
        </div>
 
<div class="row-12 align-content-center">
    <div class="card bg-muted  w-25" >
      <div class="card-body">
        <h5 class="card-title">Empresas Parceiras</h5>
        <p class="card-text">Tem uma empresa e deseja colaborar, seja bem vindo(a).</p>
        <a href="#" class="btn btn-primary">Saiba mais</a>
      </div>
    </div>
    </div>

 

        </div>
           
            <div class="row">
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
