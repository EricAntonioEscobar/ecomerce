<?php
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['correo']=$correo;

include ("conexion.php");

$objeto = new Conexion;
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM usuarios WHERE correo = '$correo' AND contraseña = '$contraseña'"; 

$resultado = $conexion->prepare($consulta);
$resultado->execute();

$filas = $resultado->fetch(PDO::FETCH_ASSOC);

if($filas){
    header("location:principal.php");
}else{
    ?> 
    <?php
    echo '<script>alert("Error de autentificación");parent.location = "index.php"</script>'; 
    ?>
    <?php
};
