<?php 
try{
	$connexion= new PDO('mysql:host=localhost;dbname=L2','root','');
}
catch ( Exception $e)
{
	die( ' Erreur : ' . $e->getMessage( ) ) ;
}

$answer= $connexion-> query('SELECT * FROM news');

 ?>

<!DOCTYPE html>
<html>
	<head>
		<link href="../public/css/bootstrap.min.css" rel="stylesheet">
		<link href="../public/css/style.css" rel="stylesheet" >
		<meta charset="utf-8">
		<title>News</title>
		<style type="text/css"></style>
	</head>
	<body>
		<?php 
			while($data= $answer->fetch()){
		 ?>
		<div class="row">
			<div class=" col-lg-offset-1 col-lg-10">
				<div class="panel panel-default News">
					<div class="panel-heading">
						<div class="panel-title">
							L2-Connection : <?php echo $data['Categorie_news'] ;?>
						</div>
					</div>
					<div class="panel-body">
					   <div class="media">
						   	<a class="pull-left" href="#">
						   		<img width="200" height="200" class="media-object image-same" src="<?php echo "../".$data['Media_news'] ;?>" alt="Image">
						   	</a>
						   	<div class="media-body">
						   		<h4 class="media-heading"><?php echo $data['Titre_news'] ;?></h4>
						   		<p>
						   			<?php echo $data['Commentaire_news'] ;?>
						   		</p>
						   	</div>
					   </div>
					</div>
				</div>
			</div>
		</div>
		<?php 
		}

		$answer->closeCursor();

		 ?>
		
	</body>
</html>