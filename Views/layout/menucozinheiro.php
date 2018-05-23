<?php if($_SESSION['tipo'] = "cozinheiro"): ?>

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
                    <div class="dropdown">
                        <a href="#" class="nav-link ml-2 dropdown-toggle"
                           id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cadastro</a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="/../cozinheiro/coz_form.php">Cozinheiro</a>
                            <a class="dropdown-item" href="/../cozinheiro/gar_form.php">Garcom</a>
                            <a class="dropdown-item" href="/../cozinheiro/mot_form.php">MotoBoy</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <div class="dropdown">
                        <a href="#" class="nav-link ml-2 dropdown-toggle"
                           id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pesquisa</a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="/../cozinheiro/coz_pesquisa.php">Cozinheiro</a>
                            <a class="dropdown-item" href="/../cozinheiro/gar_pesquisa">Garcom</a>
                            <a class="dropdown-item" href="/../cozinheiro/mot_pesquisa">MotoBoy</a>
                            <a class="dropdown-item" href="/../cozinheiro/todos_pesquisa">Buscar Todos</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a href="#" class="nav-link ml-2 dropdown-toggle"
                           id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pedido</a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="/../cozinheiro/ped_abrir.php">Abrir Pedido</a>
                            <a class="dropdown-item" href="/../cozinheiro/ped_fechar">Fechar Pedido</a>
                            <a class="dropdown-item" href="/../cozinheiro/ped_pesquisa">Buscar Pedido</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="/../cozinheiro/delivery.php" class="nav-link ml-2">Delivery</a>
                </li>
                <li class="nav-item">
                    <a href="/../cozinheiro/relatorio.php" class="nav-link ml-2">Relatório</a>
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

<?php else: header("location: /../"); endif; ?>