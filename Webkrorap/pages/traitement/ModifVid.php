<?php 


$connexion= new PDO('mysql:host=localhost;dbname=L2','root','');


if(!empty($_POST)AND !empty($_FILES)){
		
	$MediaS= $connexion-> prepare('SELECT * FROM Video WHERE titre_projet=:valeur');
	$MediaS->execute(array(
		'valeur' => $_POST['Titre'], 
	));

	while ($data=$MediaS->fetch()) {

		$url="../".$data['url_image_projet'];

		unlink($url);
	}

	// requete de remplacement de l'image dans la base de donnees 

	$MediaR= $connexion-> prepare('UPDATE Video SET titre_video=:titre_video,lien_video=:lien_video  WHERE titre_video=:valeur');
	$MediaR->execute(array( 
		'titre_video' => $_POST['Titre1'], 
		'lien_video' => $_POST['Lien'], 
		'valeur' => $_POST['Titre'], 
	));	
}

?>