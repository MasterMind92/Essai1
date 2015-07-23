<?php 
$connexion= new PDO('mysql:host=localhost;dbname=L2','root','');



if(!empty($_FILES)){

	$media=$_FILES['Media'];
	$ext = strtolower(substr($media['name'],-3));
	
	$allow_ext= array("jpg","png","gif","swf","3gp","mp3","wma","aa","Ogg","wav" ,"mkv","divx","flv","avi","mp4","mpeg","mpg","mov");
	$url= "../public/media/".$media['name'];

	if(in_array($ext, $allow_ext)){
	
		move_uploaded_file($media['tmp_name'], "../public/media/".$media['name']);	
	
	}else{
		$erreur="le fichier uploader n'est pas un image ni une video";
	}
}

if(!empty($_FILES)){

	$requete= $connexion->prepare('INSERT INTO news( Titre_news, Date_news, Lieu_news,Commentaire_news, Media_news) VALUES(:Titre_news,:Date_news,:Lieu_news,:Commentaires_news,:Media_news)');

	$requete-> execute(array(
		'Titre_news'=>$_POST['Titre'],
		'Date_news'=>$_POST['Date'],
		'Lieu_news'=>$_POST['Lieu'],
		'Commentaires_news'=>$_POST['Commentaires'],
		'Media_news'=>$url,
	));
}
	
	

?>

<!DOCTYPE html>
<html>
	<head>
		<link href="../public/css/bootstrap.min.css" rel="stylesheet">
		<link href="../public/css/style.css" rel="stylesheet" >
		<meta charset="utf-8">
		<title>Edition des News</title>
		<style type="text/css"></style>
	</head>
	<body>


		<div class="col-lg-6">
			<form role="form" method="POST" action="Edition.php" enctype="multipart/form-data">
				<div class="form-group">
				    <label for="">Titre de la News</label>
				    <input type="text" class="form-control" name="Titre" placeholder="Titre">
				</div>
				<div class="form-group">
				    <label for="date">Date</label>
				    <input type="date" class="form-control" name="Date" placeholder="JJ/MM/AAAA">
				</div>
				<div class="form-group">
				    <label for="">Lieu</label>
				    <input type="text" class="form-control" name="Lieu" placeholder="Pays,Ville,etc...">
				</div>
				<div class="form-group">
				    <label for="">Commentaires</label>
				    <textarea class="form-control" name="Commentaires" placeholder="Vos commentaires ici"></textarea>
				</div>
				<div class="form-group">
			    	<label for="Media">Uploader une image/video</label>
			    	<input type="file" name="Media" >
				</div>				
				<button type="submit" class="btn btn-info col-lg-offset-2 col-lg-8">
			  		Valider
				</button>
			</form>
		</div>
		

	<script src="../public/js/JQuery.min.js"></script>
	<script>
		$(function(){


		});
	</script>
	</body>

</html>