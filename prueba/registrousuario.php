<?php
include ("conexion.php");

session_start();

if (isset($_POST['enviar'])) {
$usuario=$_POST['usuario'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['correo'];
$telefono=$_POST['telefono'];
$password=$_POST['pass'];
$password=md5($password); //La contraseña se cifra en md5
$insertar = "INSERT INTO regisuser (usuario,nombre_u,apellido_u,mail,telefono,pass) VALUES ('$usuario','$nombre','$apellido','$email','$telefono','$password')";

if (mysqli_query($conexion,$insertar)) {
    echo "<script language='JavaScript'>alert('¡Registro exitoso!')</script>";
    }else{
        echo "error en el registro" . $insertar . mysqli_error($conexion);
    }
}
mysqli_close($conexion);
?>