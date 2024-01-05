<?php

session_start();

if(!isset($_SESSION['usuario'])){
    echo '
        <script>
            alert("Inicia sesión");
            window.location = "../index.php";
        </script>
    ';
    session_destroy();
    die();
}

?>


<h1>hola usuario</h1>

<a href="php/close_session.php">cerrar sesion</a>