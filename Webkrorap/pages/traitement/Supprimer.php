<?php 
$connexion= new PDO('mysql:host=localhost;dbname=L2','root','');


if (!empty($_POST)) {
	if ($_POST['suppression']=="image" ) {
	
	$MediaS= $connexion-> prepare('DELETE FROM Media WHERE titre_media=:valeur');
	$MediaS->execute(array(
		'valeur' => $_POST['Titre'], 
	));
	}
	elseif ($_POST['suppression']=="video" ) {
		
		$MediaS= $connexion-> prepare('DELETE FROM Video WHERE titre_video=:valeur');
		$MediaS->execute(array(
			'valeur' => $_POST['Titre'], 
		));
	}elseif ($_POST['suppression']=="news" ) {
		
		$MediaS= $connexion-> prepare('DELETE FROM News WHERE Titre_news=:valeur');
		$MediaS->execute(array(
			'valeur' => $_POST['Titre'], 
		));
	}elseif ($_POST['suppression']=="projet" ) {
		
		$MediaS= $connexion-> prepare('DELETE FROM Projet WHERE titre_projet=:valeur');
		$MediaS->execute(array(
			'valeur' => $_POST['Titre'], 
		));
	}	
}
 ?>
