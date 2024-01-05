<?php

include('db.php');

$name = $_POST['name'];
$mail = $_POST['mail'];
$user = $_POST['user'];
$pass = $_POST['pass'];

// pass encriptada.
// $pass_hash = hash('sha512', $pass);

$query = "INSERT INTO usuarios(name, mail, user, pass) VALUES('$name', '$mail', '$user', '$pass')";

//verifica que no se repita el mail en la bd.
$verificar_mail = mysqli_query($conexion, "SELECT * FROM usuarios WHERE  mail='$mail' ");

if(mysqli_num_rows($verificar_mail) > 0){
    echo '
        <script>
            alert("ESTE CORREO YA ESTA EN USO, INTENTA CON OTRO");
            window.location = "../index.php";
        </script>
    ';
    exit();
    mysqli_close($conexion);
};

//verifica que no se repita el user en la bd.
$verificar_user = mysqli_query($conexion, "SELECT * FROM usuarios WHERE  user='$user' ");

if(mysqli_num_rows($verificar_user) > 0){
    echo '
        <script>
            alert("ESTE USUARIO YA ESTA EN USO, UTILICE OTRO");
            window.location = "../index.php";
        </script>
    ';
    exit();
    mysqli_close($conexion);
};



$ejecutar = mysqli_query($conexion ,$query);

//alerta de que se registro el usuario, cambiar por sweet alert.
if($ejecutar){
    echo '
        <script>
            alert("Usuario registrado correctamente");
            window.location = "../index.php";
        </script>
    ';
} else {
    echo '
        <script>
            alert("Usuario no ingresado intente nuevamente);
            window.location = "../index.php";
        </script>   
    ';
}

mysqli_close($conexion);

?>