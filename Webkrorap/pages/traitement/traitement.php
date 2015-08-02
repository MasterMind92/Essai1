<?php 
header("Location:../Administration.php");

$connexion= new PDO('mysql:host=localhost;dbname=L2','root','');



if(!empty($_FILES)){

	$media=$_FILES['Media'];
	$ext = strtolower(substr($media['name'],-3));
	
	$allow_ext= array("jpg","png","gif");
	$url= "public/media/".$media['name'];

	if(in_array($ext, $allow_ext)){
	
		move_uploaded_file($media['tmp_name'], "../../public/media/".$media['name']);	
	
	}else{
		$erreur="le fichier uploader n'est pas un image ni une video";
	}
}

if(!empty($_FILES)AND !empty($_POST)){

	$requete= $connexion->prepare('INSERT INTO news( Categorie_news,Titre_news, Date_news, Lieu_news,Commentaire_news, Media_news) VALUES(:Categorie_news,:Titre_news,:Date_news,:Lieu_news,:Commentaires_news,:Media_news)');

	$requete-> execute(array(
		'Categorie_news'=>$_POST['Categorie'],
		'Titre_news'=>$_POST['Titre'],
		'Date_news'=>$_POST['Date'],
		'Lieu_news'=>$_POST['Lieu'],
		'Commentaires_news'=>$_POST['Commentaires'],
		'Media_news'=>$url,
	));

} 
?>