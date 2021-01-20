<?php
require "./php/actions/exibeAleatorio.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetos</title>
    <link rel="stylesheet" href="css/projetos.css">
    <link rel="icon" href="img/logomorada.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style> 
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

        .btn-primary  {
            color: white !important;
            background-color:rgb(29, 108, 255) !important;
            width: 60% !important;
            border-radius: 30px !important;
        }
        .btn-primary:hover{
            background-color: orange !important;
            color:white !important;
            border-color:orangered !important;
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
        height:200px!important;
        overflow-y: auto;
}
.card {
    border-radius: 20px!important;
}

    </style>
</head>

<?php
require "./php/includes/menu.php";
?>

<body>



    <!-- Titulo Mural -->
    <div class="container text-center">
        <h3 class="display-3 " style=" margin-top:30px;">MURAL</h3>
    </div>


    <div class="container">


        <!-- PRIMEIRA COLUNA -->
            <div class="container mt-4 text-center">
                <div class="row">
                <?php 
                $result = $conn->query($query);
                        if ($result->num_rows > 0) {
                            /* fetch associative array */
                            while ($row = $result->fetch_assoc()) { 
        
                                
                ?>
                        <div class="col-sm-4">
                                <div class="card mb-5 rounded">
                                        <div class="container">
                                                <div class=" anyClass">
                                                    <h3 class="display-7"><?php echo $row['nome'];?></h3>
                                                    <p class=" lead"><?php echo $row['descricao'];?></p>
                                                    <p class="lead"><?php echo $row['bairro'];?></p>
                                                    <p class="lead"><?php echo $row['tipo'];?></p>
                                                </div>
                                        </div>
                                </div>
                        </div>
                <?php }
                        }else {
                            echo "Nenhuma solicitação feita!";
                        }
                        ?>
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