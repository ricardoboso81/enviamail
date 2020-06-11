<?php
$desinatario ='lioncaro81@hotmail.com';
// ES AL AL CORREO QUE SE ENVIARA//
$nombre=$_POST['nombre'];
$asunto=$_POST['asunto'];
$mensaje=$_POST['mensaje'];
$email=$_POST['email'];

$header="Enviado desde la pagina de Ricardo Bojorquez";
$mensajeCompleto=$mensaje. "\nAtentamente: ". $nombre;

mail($desinatario,$asunto,$mensajeCompleto,$header);
echo"<script> alert('Correo envia satifactoriamente')</script>";
echo"<script>setTimeout(\"location.href='index.html'\",1000)</script>";

?>