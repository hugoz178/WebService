<?php 

$servidor= "localhost";
$usuario= "root";
$psw="";
$db="haceru2";

$conexion= new mysqli($servidor,$usuario,$psw,$db);

function NF($fecha){
	return date('g:i a',strtotime($fecha));
}

?>