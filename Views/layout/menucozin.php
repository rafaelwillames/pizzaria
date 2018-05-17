<?php

if(!isset($_SESSION['cpf'])){
    header("location: /../index.php");
    session_destroy();
}
if(isset($_GET['action'])){
    session_destroy();
    header("location: /../index.php");
}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">PizzariaCTL</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="/../cozinheiro/" class="nav-link ml-2">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="/../cozinheiro/funcionarios.php" class="nav-link ml-2" >Funcionários</a>
                </li>
                <li class="nav-item">
                    <a href="/../cozinheiro/pedidos.php" class="nav-link ml-2">Pedidos</a>
                </li>
                <li class="nav-item">
                    <a href="/../cozinheiro/delivery.php" class="nav-link ml-2">Delivery</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link ml-2" data-toggle="modal" data-target="#exampleModal" >Perfil</a>
                </li>
                <li class="nav-item">
                    <a href="?action=sair" class="nav-link ml-2">Sair</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Modal Perfil -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Olá  <?php echo $_SESSION['nome']; ?></h5>
            </div>
            <div class="modal-body">
                <a href="#">Editar Perfil</a>
                <a href="?action=sair">Sair</a>
            </div>
        </div>
    </div>
</div>
