<?php 


$connexion= new PDO('mysql:host=localhost;dbname=L2','root','');


if(!empty($_POST)AND !empty($_FILES)){
		
	$MediaS= $connexion-> prepare('SELECT * FROM Media WHERE titre_media=:valeur');
	$MediaS->execute(array(
		'valeur' => $_POST['Titre'], 
	));

	while ($data=$MediaS->fetch()) {

		$url="../".$data['location_media'];

		unlink($url);
	}


	// procedure de chargement des images

	$media=$_FILES['Image'];
	$ext = strtolower(substr($media['name'],-3));

	$allow_ext= array("jpg","png","gif");
	$url1= "../public/media/".$media['name'];

	if(in_array($ext, $allow_ext)){

		move_uploaded_file($media['tmp_name'], "../../public/media/".$media['name']);

	}else{
		$erreur="le fichier uploader n'est pas un image ni une video";
	}

	// requete de remplacement de l'image dans la base de donnees 

	$MediaR= $connexion-> prepare('UPDATE Media SET titre_media=:titre_media, desc_media=:desc_media, location_media=:location_media WHERE titre_media=:valeur');
	$MediaR->execute(array(
		'titre_media' => $_POST['Titre1'], 
		'desc_media' => $_POST['desc'], 
		'location_media' => $url1, 
		'valeur' => $_POST['Titre'], 
	));	
	

}

?>