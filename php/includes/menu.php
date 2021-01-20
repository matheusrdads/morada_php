
<link href='https://css.gg/search.css' rel='stylesheet'>
<style> 
.style {  
    text-align: center;
    border-radius: 30px !important;
    background-color:transparent !important;
    border: 1px solid white !important;
}
.botao{
    border:transparent !important;
    color:white !important;
}

</style>
<script src="https://kit.fontawesome.com/9bc643a911.js" crossorigin="anonymous"></script>
<header class="menu-principal">
    <main>
        <div class="header-1">
            <div class="redes-sociais">
                <ul class="nav justify-content-end " style="background-color: rgb(43, 43, 43);">
                    <li class="nav-item"><a href="https://www.linkedin.com/" class="nav-link"> <img src="img/icones/linkedin.png" /></a></li>
                    <li class="nav-item"><a href="https://www.facebook.com/" class="nav-link"> <img src="img/icones/face.png" /></a></li>
                    <li class="nav-item"><a href="https://www.twitter.com/" class="nav-link"> <img src="img/icones/tw.png" /></a></li>
                    <li class="nav-item"><a href="https://www.google.com/" class="nav-link"> <img src="img/icones/rss.png" /></a></li>
                
                </ul>
            </div>
        </div>
    </main>
    
</header>


<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php"><img src="img/logo.png" width="40px" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                <li class="nav-item">
                    <a class="nav-link  text-white" href="sobre.php">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  text-white" href="contato.php">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  text-white" href="servicos.php">Serviços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  text-white" href="mural.php">Mural</a>
                </li>
                
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2 style" type="search" placeholder="Pesquisar">
                <button class="btn btn-outline-primary botao" type="submit"><i class="gg-search"></i></button>              
            </form>
            <ul class="navbar-nav" >
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-alt"  style="color: white;"></i>
                    <div class="dropdown-menu dropdown-menu-right dropdown-default"
                    aria-labelledby="navbarDropdownMenuLink-333" >
                    <a class="dropdown-item" href="login.php">Entre</a>
                    <a class="dropdown-item" href="perfil.php">Meu Perfil</a>
                    <a class="dropdown-item" href="editprofile.php">Editar Perfil</a>
                    <a class="dropdown-item" href="./php/includes/logout.php">Sair da Conta</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>  