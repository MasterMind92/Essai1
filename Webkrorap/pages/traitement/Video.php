<?php 
header("Location: ../Administration.php");

$connexion= new PDO('mysql:host=localhost;dbname=L2','root','');

if(!empty($_POST)){

	$req= $connexion->prepare('INSERT INTO Video(lien_video) VALUES(:titre_video,:lien_video)');

	$req-> execute(array(
		'titre_video'=>$_POST['Titre'],
		'lien_video'=>$_POST['Lien']
	));
}

?>