<?php
	include 'conexion.php';
	
	$pdo = new conexion();
	
	//Listar registros y consultar registro
	if($_SERVER['REQUEST_METHOD'] == 'GET'){
		if (isset($_GET['id'])) {
			$sql = $pdo->prepare("SELECT * FROM clientes WHERE id=:id");
			$sql->bindValue(':id', $_GET['id']);
			$sql->execute();
			$sql->setFetchMode(PDO::FETCH_ASSOC);
			header("HTTP/1.1 200 hay datos");
			echo json_encode($sql->fetchAll());
			exit;		
		} else{
			$sql = $pdo->prepare("SELECT * FROM clientes");
			$sql->execute();
			$sql->setFetchMode(PDO::FETCH_ASSOC);
			header("HTTP/1.1 200 hay datos");
			echo json_encode($sql->fetchAll());
			exit;	

		}
		
	}
?>