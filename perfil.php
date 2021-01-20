
<?php
include('./php/actions/conexaodb.php');
include('./php/includes/verifica_login.php');
include('./php/actions/exibeDados.php');
include('./php/actions/exibeServicos.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>

    <!--css-->
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


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

        .dangerB a{
            text-decoration: none;
            color: white;
        }

        .dangerB{
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
        height:100px!important;
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
                                <li class="nav-item"><a href="#" class="nav-link"> <img src="img/icones/rss.png" /></a></li>
                            </ul>
                        </div>

                        <div class="nav justify-content-center" style="margin-bottom:30px">
                            <button type="button" class="btn text-white edit"> <a href="editprofile.php">Edite seu Perfil</a></button>
                            <button type="button" class="btn sair"> <a href="./php/includes/logout.php">Sair</a></button>

                        </div>
                        <h4>Sobre</h4>
                        <p><?php echo $data['sobre']; ?>
                        </p>

                        <h4>Informações da conta</h4>
                        <p>Nome: <?php echo $data['nome']; ?> </p>

                        <p>Sobrenome: <?php

                                        echo $data['sobrenome']; ?> </p>

                        <p>Endereço: <?php

                                        echo $data['endereco']; ?> </p>

                        <p>Bairro: <?php

                                    echo $data['bairro']; ?>
                        </p>

                        <p>Complemento: <?php

                                        echo $data['complemento']; ?> </p>

                        <p>CEP: <?php

                                echo $data['cep']; ?></p>
                        <p>Telefone:
                            <?php 
                            echo $data['telefone']; ?> </p>


                </div>
                <div class="col-sm border">
                    <form class="form text-center" method="post" action="./php/actions/postsolicitar_servicos.php">
                        <label for="">
                            <h4 class="display-4 ">Solicite ajuda</h4>
                            <select name="categoria">
                                <option value="construcao">Construção</option>
                                <option value="manutencao">Manutenção</option>
                            </select><br><br>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="descricao" rows="5" placeholder="Digite aqui a descrição do serviço"></textarea>
                            <button type="submit" class="btn btnstyle mt-3 btn-sm">
                                Enviar
                            </button>
                    </form>
                    <form class="form" method="post" action="./php/actions/postoferecer_servicos.php">
                        <h3 class="display-4 pt-5">Ofereça ajuda</h3>
                        <select name="categoria">
                            <option value="construcao">Construção</option>
                            <option value="manutencao">Manutenção</option>
                        </select><br><br>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="descricao" rows="5" placeholder="Digite aqui a descrição do serviço"></textarea>
                        <button type="submit" class="btn btnstyle mt-3 btn-sm"> Enviar</button>
                        <form>
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
                                <div class="card-body  anyClass">
                                    <h5 class="card-title"><?php echo $row['tipo']?></h5>
                                    <p class="card-text"><?php echo $row['descricao'];?></p>
                                </div> 
                            </div>
                            <button class="btn btn-danger dangerB mt-2 mb-2"><a href="./php/actions/deleta_servico.php?id=<?php echo $row['idservicos'];?>" data-confirm="Tem certeza que deseja excluir o intem selecionado?" >Apagar</a></button>
                            <br>         
            <?php
                    }
                
                }else{
                    echo '<p>'. 'Nenhuma solicitação feita!'. '<p>';
                }
           
           ?>
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
            <script src="./js/confirma.js" crossorigin="anonymous"></script>

</body>
</html>