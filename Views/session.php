<?php
    session_start();

    if(!isset($_SESSION['cpf'])){
        header("location: /../index.php");
        session_destroy();
    }

    if(isset($_GET['action']) != null){
        if($_GET['action'] == 'sair'){
            session_destroy();
            header("location: /../index.php");
        }

        if($_GET['action'] == 'editar'){
            echo "Editar";
        }

        if($_GET['action'] == 'apagar'){
            echo "Apagar";
        }
    }
?>