<?php 


$connexion= new PDO('mysql:host=localhost;dbname=L2','root','');


if(!empty($_POST)AND !empty($_FILES)){
	// requete d'obtention de la news a modifier

	$MediaS= $connexion-> prepare('SELECT * FROM News WHERE Titre_news=:valeur');
	$MediaS->execute(array(
		'valeur' => $_POST['Titre'], 
	));

	while ($data=$MediaS->fetch()) {

		$url="../".$data['Media_news'];

		unlink($url);
	}


	// procedure de chargement des images

	$media=$_FILES['Media'];
	$ext = strtolower(substr($media['name'],-3));

	$allow_ext= array("jpg","png","gif");
	$url1= "public/media/".$media['name'];

	if(in_array($ext, $allow_ext)){

		move_uploaded_file($media['tmp_name'], "../../public/media/".$media['name']);	

	}else{
		$erreur="le fichier uploader n'est pas une image ni une video";
	}

	// requete de remplacement de l'image dans la base de donnees 

	$MediaR= $connexion-> prepare('UPDATE News SET Categorie_news=:Categorie_news, Titre_news=:Titre_news, Date_news=:Date_news, Lieu_news=:Lieu_news, Commentaire_news=:Commentaire_news, Media_news=:Media_news WHERE  Titre_news=:valeur');
	$MediaR->execute(array(
		'Categorie_news' => $_POST['Categorie'], 
		'Titre_news' => $_POST['Titre1'], 
		'Date_news' => $_POST['Date'], 
		'Lieu_news' => $_POST['Lieu'], 
		'Commentaire_news' => $_POST['Commentaires'], 
		'Media_news' => $url1, 
		'valeur' => $_POST['Titre'],  
	));	
}

print_r($_FILES);

?>