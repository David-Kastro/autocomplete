<?php

$dbname   = 'teste1';
$host     = 'localhost';
$user     = 'root';
$pass     = '';

try{
	$db = new PDO("mysql:dbname=".$dbname.";host=".$host, $user, $pass);
	
}catch(PDOException $e){
	echo 'ERROR: '.$e->getMessage();
	exit;
}

if(!empty($_POST['texto'])){
	$texto = $_POST['texto'];
	
	$sql = $db->prepare("SELECT * FROM pessoas WHERE nome LIKE :texto");
	$sql->bindValue(":texto", '%'.$texto.'%');
	$sql->execute();

	if($sql->rowCount() > 0){
		$html = '';
		foreach($sql->fetchAll() as $nome){
			$html = $html.'<li class="option">'.$nome['nome'].'</li>';
		}

		echo "<ul>".$html."<ul>";
	}
}