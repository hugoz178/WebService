<?php

class conexion extends PDO
{
	private $hostbd = 'localhost';
	private $nombrebd = 'WebService';
	private $usuariobd = 'root';
	private $passwordbd = ' ';

	public dunction __construct()
	{
		try{
			parent::__construct('mysql_host=' . $this->hostbd. ';dbname='. $this->nombrebd . ';charset=utf8', $this->usuariobd, $this->passwordbd, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		} catch(PDOException $e){
			echo 'Error: ' e->getMessage();
			exit;
		}
	}

}	
	 

?>