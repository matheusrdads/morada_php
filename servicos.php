<?php

    require "./php/includes/menu.php";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviços</title>
    <link rel="stylesheet" href="css/main.css">
    <script src="js/javascript.js"></script>
    <link rel="icon" href="img/logomorada.png">
    <link rel="stylesheet" href="css/servicos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 

</head>
<body style="background: background: rgb(255,255,255);
background: linear-gradient(180deg, rgba(255,255,255,1) 34%, rgba(0,123,255,1) 71%);">
    

    <img class=" imagem-head" src="./img/servicos/servico3.jpg" alt="">
    <div class="container text-center">

        <h1 style="text-align: center;">Principais Serviços</h2>
        <p><strong>Seja um ajudador oferecendo mão de obra para quem precisa para uma sociedade mais justa oferecendo condições adequada de moradia, venha e faça parte!</strong></p>
        <section class="flex">
            <div>
                <img class="imagem" src="./img/servicos/reforma.jpg" alt="">
                <p>Serviço 1</p>
                <hr>
                <p class="p-descricao">Descrição do serviço</p>
                <button class="btn_serv bg-dark text-white">Contratar</button>
            </div>
            <div>
                <img class="imagem" src="./img/servicos/reforma.jpg" alt="">
                <p>Serviço 2</p>
                <hr>
                <p class="p-descricao">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et ipsa impedit sequi, esse aut, voluptate placeat</p>
                <button class="btn_serv bg-dark text-white">Contratar</button>
            </div>
            <div>
                <img class="imagem" src="./img/servicos/reforma.jpg" alt="">
                <p>Serviço 3</p>
                <hr>
                <p class="p-descricao">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex dolorum sint obcaecati iste magni consecteturgfgrdgrddgrdrggrdgrgdrgdrg </p>
                <button class="btn_serv bg-dark text-white">Contratar</button>
            </div>
            
        </section>
        <hr>
        <h2 style="text-align: center; margin-top: 100px;">Destaques</h2>
        <section class="flex-2">
            <div>
                <img class="imagem" src="./img/icones/profile-icon.png" alt="">
                <hr>
                <p>Luiz claudio</p>
                <p>Função</p>
                <div class="estrelas">
                    <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                    <label for="cm_star-1"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-1" name="fb" value="1"/>
                    <label for="cm_star-2"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-2" name="fb" value="2"/>
                    <label for="cm_star-3"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-3" name="fb" value="3"/>
                    <label for="cm_star-4"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-4" name="fb" value="4"/>
                    <label for="cm_star-5"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-5" name="fb" value="5"/>
                </div>

            </div>
            <div>
                <img class="imagem" src="./img/icones/profile-icon.png" alt="">
                <hr>
                <p>Antônio Lopes</p>
                <p>Função</p>
                <div class="estrelas">
                    <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                    <label for="cm_star-1"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-1" name="fb" value="1"/>
                    <label for="cm_star-2"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-2" name="fb" value="2"/>
                    <label for="cm_star-3"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-3" name="fb" value="3"/>
                    <label for="cm_star-4"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-4" name="fb" value="4"/>
                    <label for="cm_star-5"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-5" name="fb" value="5"/>
                </div>
            
            </div>
            <div>
                <img class="imagem" src="./img/icones/profile-icon.png" alt="">
                <hr>
                <p>Julia Nascimento</p>
                <p>Função</p>
                <div class="estrelas">
                    <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                    <label for="cm_star-1"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-1" name="fb" value="1"/>
                    <label for="cm_star-2"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-2" name="fb" value="2"/>
                    <label for="cm_star-3"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-3" name="fb" value="3"/>
                    <label for="cm_star-4"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-4" name="fb" value="4"/>
                    <label for="cm_star-5"><i class="fa"></i></label>
                    <input type="radio" id="cm_star-5" name="fb" value="5"/>
                </div>
        </section> 
    </div>
        
    
    <!--Footer-->
    <footer class="container-fluid">
        <?php
            require "./php/includes/footer.html";
        ?>

    </footer>


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>

