<?php 


$connexion= new PDO('mysql:host=localhost;dbname=L2','root','');


if(!empty($_POST)AND !empty($_FILES)){
		
	$MediaS= $connexion-> prepare('SELECT * FROM Projet WHERE titre_projet=:valeur');
	$MediaS->execute(array(
		'valeur' => $_POST['Titre'], 
	));

	while ($data=$MediaS->fetch()) {

		$url="../".$data['url_image_projet'];

		unlink($url);
	}

	// procedure de chargement des images

	$media=$_FILES['Image'];
	$ext = strtolower(substr($media['name'],-3));

	$allow_ext= array("jpg","png","gif");
	$url1= "public/media/".$media['name'];

	if(in_array($ext, $allow_ext)){

		move_uploaded_file($media['tmp_name'], "../public/media/".$media['name']);	

	}else{
		$erreur="le fichier uploader n'est pas un image ni une video";
	}

	// requete de remplacement de l'image dans la base de donnees 

	$MediaR= $connexion-> prepare('UPDATE Media SET type_projet=:type_projet, titre_projet=:titre_projet, commentaires_projet=:commentaires_projet  WHERE titre_projet=:valeur');
	$MediaR->execute(array(
		'type_projet' => $_POST['Type_projet'], 
		'titre_projet' => $_POST['Titre1'], 
		'commentaires_projet' => $_POST['commentaire'], 
		'url_image_projet' => $url1, 
		'valeur' => $_POST['Titre'], 
	));	
}

?>