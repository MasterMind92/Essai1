<?php 
$connexion= new PDO('mysql:host=localhost;dbname=L2','root','');

	$requete= $connexion->prepare('INSERT INTO `news`(, `Titre_news`, `Date_news`, `Lieu_news`, `Commentaire_news`, `Photo_news`, `Video_news`) VALUES(:Date_news,:Lieu_news,:Titre_news,:Commentaires_news,:Photo_news)');

$requete-> execute(array(
	'Date_news'=>$_GET['Date'],
	'Lieu_news'=>$_GET['Lieu'],
	'Titre_news'=>$_GET['Titre'],
	'Commentaires_news'=>$_GET['Commentaires'],
	'Photo_news'=>$_GET['Media'],
));

echo " voici les infos qui sont passees:".$_GET['Date']."<br/>".$_GET['Lieu']."<br/>".$_GET['Titre']."<br/>".$_GET['Commentaires']."<br/>".$_GET['Media']."<br/>";

 ?>