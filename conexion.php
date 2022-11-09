<?php
$hostname = 'sql210.epizy.com';
$database = 'epiz_32595317_prog_web';
$username = 'epiz_32595317';
$password = 'eFKsOkWxz17sDe';

$conexion = new mysqli($hostname,$username,$password,$database);
if($conexion->connect_errno){
	echo "El sitio web está experimentando problemas";
}
?>
