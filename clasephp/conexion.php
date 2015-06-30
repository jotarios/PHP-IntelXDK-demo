<?php 
$driver   = 'mysql';
$servidor = 'localhost';
$usuario  = 'baseusuarios';
$clave    = '';
$base     = 'baseusuarios';
$cadena   = "$driver:host=$servidor;dbname=$base";
$cnx      = new pdo($cadena,$usuario,$clave);
?>