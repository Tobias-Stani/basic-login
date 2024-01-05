<?php
session_start();
include('db.php');

$mail = $_POST['mail'];
$pass = $_POST['pass'];


$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE mail='$mail' AND pass='$pass'");

if (mysqli_num_rows($validar_login) > 0) {
    $_SESSION['usuario'] = $mail; 
    header("Location: ../bienvenida.php");
    exit;
} else {
    echo '
        <script>
            alert("El usuario no existe");
            window.location = "../index.php";
        </script>
    ';
    exit;
}
?>
