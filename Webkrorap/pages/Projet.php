<?php 
header("Location: test.php");

$connexion= new PDO('mysql:host=localhost;dbname=L2','root','');



if(!empty($_FILES)){

	$media=$_FILES['Image'];
	$ext = strtolower(substr($media['name'],-3));
	
	$allow_ext= array("jpg","png","gif");
	$url= "../public/media/".$media['name'];

	if(in_array($ext, $allow_ext)){
	
		move_uploaded_file($media['tmp_name'], "../public/media/".$media['name']);	
	
	}else{
		$erreur="le fichier uploader n'est pas un image ni une video";
	}
}

if(!empty($_FILES)){

	$req= $connexion->prepare('INSERT INTO Projet(type_projet,titre_projet, commentaires_projet,url_image_projet) VALUES(:type_projet,:titre_projet, :commentaires_projet, :url_image_projet)');

	$req-> execute(array(
		'type_projet'=>$_POST['Type_projet'],
		'titre_projet'=>$_POST['Nom_projet'],
		'commentaires_projet'=>$_POST['commentaire'],
		'url_image_projet'=>$url,
	));
}

?>