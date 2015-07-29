<?php 
header("Location: test.php");

$connexion= new PDO('mysql:host=localhost;dbname=L2','root','');



if(!empty($_FILES)){

	$media=$_FILES['Image'];
	$ext = strtolower(substr($media['name'],-3));
	
	$allow_ext= array("jpg","png","gif");
	$url= "/public/media/".$media['name'];

	if(in_array($ext, $allow_ext)){
	
		move_uploaded_file($media['tmp_name'], "../public/media/".$media['name']);	
	
	}else{
		$erreur="le fichier uploader n'est pas un image ni une video";
	}
}

if(!empty($_FILES)){

	$req= $connexion->prepare('INSERT INTO Media(titre_media, desc_media, location_media) VALUES(:titre_media, :desc_media, :location_media)');

	$req-> execute(array(
		'titre_media'=>$_POST['Titre'],
		'desc_media'=>$_POST['desc'],
		'location_media'=>$url,
	));
}

?>