<?php

require "./php/includes/menu.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morada Sobre</title>

    <!--css-->
    <link rel="stylesheet" href="css/sobre.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--scripts-->
    <script src="js/javascript.js"></script>
    
    <!--icones-->
    <link rel="icon" href="img/topcasaicon.png">

    <!--css scrollbar-->
    <style>
      ::-webkit-scrollbar {
        width: 10px;
      }
      
      /* Track */
      ::-webkit-scrollbar-track {
        background: #222222; 
        /* box-shadow: inset 0 0 5px rgb(148, 225, 255);  */
        /* border-radius: 10px; */
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

      @media screen and (max-width:1000px){
    .response{
        width: 550px;
        height: 600px;
    }
}


@media screen and (max-width:780px){
    .response{
        width: 600px;
        height: 680px;
    }
}

@media screen and (max-width:580px){
    .response{
        width: 450px;
        height: 780px;
    }

    .display-3 {
      font-size: 40px;
    }

    h3{
      font-size:25px;
    }
}


    @media screen and (max-width:400px){
    .response{
        width: 380px;
        height: 750px;
        font-weight: normal;
    }
}
    </style>
</head>


<body>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class=" w-100 response" src="./img/sobre/background.jpg" alt="First slide">

      <div class="container bg-text ">
            <h3 class="display-3 text-about"> NOSSA MISSÃO</h1>
              <h3>
                <small>
                    Somos uma organização que visa desenvolver o desenvolvimento individual
                    e coletivo de pessoas em situação insultentável de moradia. 
                    Estamos dispostos a melhorar neste processo moradias em situação de risco,
                    pequenos reparos em toda parte de uma residência. Sempre utilizando
                    métodos construtivos que irão efetivamente reparar um problema e mudar as 
                    condições de bem estar dessas pessoas, realizando assim com eficiência e respeito
                    obras rapidas e competentes com o máximo de supervisão que podemos oferecer
                    e colhendo o feedback das pessoas assistidas, afim de manter uma melhora contínua. 
                </small>
              </h3>
        </div>
    </div>
    <div class="carousel-item">
      <img class=" w-100 response" src="./img/sobre/background2.jpg" alt="Second slide">
      <div class="container bg-text ">
            <h1 class="display-3 text-about"> NOSSOS VALORES </h1>
            <h3>
                <small>
                    Nossos valores e ideais são paltados no trabalho voluntário, 
                    onde o indivíduo se sensibiliza com a causa do próximo e 
                    entra em movimento para prover uma mudança 
                    na realidade de seu próximo, seja com doações de materias,
                    ferramentas, mão de obra e trasporte de materias 
                </small>
                </h3>
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
</body>
</html>
