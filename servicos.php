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
<body>
    

    
    <div class="container text-center">

    <!-- banner -->
    <img class=" imagem-head" src="./img/servicos/servico3.jpg" alt="">

    <!-- titulo -->
        <h1 style="text-align: center;">Principais Serviços</h2>
        <p><strong>Seja um ajudador oferecendo mão de obra para quem precisa para uma sociedade mais justa oferecendo condições adequada de moradia, venha e faça parte!</strong></p>
        


        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="./img/servicos/reforma.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Construção</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                
            </div>
            <div class="card">
                <img class="card-img-top" src="./img/servicos/reforma.jpg" alt="Card image cap">
                <div class="card-body">
        <h5 class="card-title">Manutenção</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
                
            </div>
            <div class="card">
                <img class="card-img-top" src="./img/servicos/reforma.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Reparos</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
                
            </div>
            </div>





            <!-- sessao servicos -->
            <!-- <section class="flex">
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
            
        </section> -->








        <hr>

        <h2 style="text-align: center; margin-top: 20px;">Destaques</h2>

        <!--Carousel Wrapper-->
        <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

        <!--Controls-->
        <div class="controls-top">
            <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
            <a class="btn-floating" href="#multi-item-example" data-slide="next"><i
                class="fas fa-chevron-right"></i></a>
        </div>
        <!--/.Controls-->

        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
            <li data-target="#multi-item-example" data-slide-to="1"></li>
            
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!--First slide-->
            <div class="carousel-item active">

            <div class="col-md-3" style="float:left">
            <div class="card mb-2">
                <img class="card-img-top"
                    src="./img/profile.png" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Luiz Claudio</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                    <a class="btn btn-primary">Perfil</a>
                </div>
                </div>
            </div>

            <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                <img class="card-img-top"
                    src="./img/profile.png" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Atonio Lopes</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                    <a class="btn btn-primary">Perfil</a>
                </div>
                </div>
            </div>

            <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                <img class="card-img-top"
                    src="./img/profile.png" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Marcos Antonio</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                    <a class="btn btn-primary">Perfil</a>
                </div>
                </div>
            </div>
            
            <div class="col-md-3" style="float:left">
            <div class="card mb-2">
                <img class="card-img-top"
                    src="./img/profile.png" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Julia Nascimento</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                    <a class="btn btn-primary">Perfil</a>
                </div>
                </div>
            </div>

            </div>
            <!--/.First slide-->

            <!--Second slide-->
            <div class="carousel-item">

            <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                <img class="card-img-top"
                    src="./img/icones/profile-icon.png" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Marcos Ferreira</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                    <a class="btn btn-primary">Perfil</a>
                </div>
                </div>
            </div>

            <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                <img class="card-img-top"
                    src="./img/icones/profile-icon.png" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Nathan Pereira</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                    <a class="btn btn-primary">Perfil</a>
                </div>
                </div>
            </div>

            <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                <img class="card-img-top"
                    src="./img/icones/profile-icon.png" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Luiz Henrique</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                    <a class="btn btn-primary">Perfil</a>
                </div>
                </div>
            </div>
            
            <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                <img class="card-img-top"
                    src="./img/icones/profile-icon.png" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Caio Andrade</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                    <a class="btn btn-primary">Perfil</a>
                </div>
                </div>
            </div>

            </div>
            <!--/.Second slide-->

        

        </div>
        <!--/.Slides-->

        </div>
        <!--/.Carousel Wrapper-->




        <!-- sessao destaques -->
        <!-- <h2 style="text-align: center; margin-top: 100px;">Destaques</h2>
        <section class="flex-2">
            <div>
                <img class="perfilimg" src="./img/icones/profile-icon.png" alt="">
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
                <img class="perfilimg" src="./img/icones/profile-icon.png" alt="">
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
                <img class="perfilimg" src="./img/icones/profile-icon.png" alt="">
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
        </section>  -->
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

