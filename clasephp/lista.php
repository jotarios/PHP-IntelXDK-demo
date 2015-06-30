<?php
header("Access-Control-Allow-Origin:*");
require_once("conexion.php");
$rs = $cnx->query("select * from usuario");
$cadena="";
while ($reg = $rs->fetchObject()) {
	$cadena .= "$reg->idusuario - $reg->email <br>";
}
echo $cadena;
?>