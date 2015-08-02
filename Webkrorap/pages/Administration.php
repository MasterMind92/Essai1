<?php 
try{
	$connexion= new PDO('mysql:host=localhost;dbname=L2','root','');
}
catch ( Exception $e)
{
	die( ' Erreur : ' . $e->getMessage( ) ) ;
}

$Media= $connexion-> query('SELECT * FROM Media');
$News= $connexion-> query('SELECT * FROM News');
$Video= $connexion-> query('SELECT * FROM Video');
$Projet= $connexion-> query('SELECT * FROM Projet');

 ?>

<!DOCTYPE html>
<html>
	<head>
		<link href="../public/css/bootstrap.min.css" rel="stylesheet">
		<link href="../public/css/style.css" rel="stylesheet" >
		<meta charset="utf-8">
		<title>Administration</title>
		<style type="text/css"></style>
	</head>
	<body>

		<div class="jumbotron">
			<div class="container">
				<h1>Bienvenue sur la page d'administration!</h1>
				<p>
					Ici il vous sera possible de vous occuper de l'edition des news et de l'uploading des photos, des videos et autres medias 
				</p>
				<p>
					<a class="btn btn-primary btn-lg" data-toggle="modal" href='#modal-id'>En savoir plus</a>
					<div class="modal fade" id="modal-id">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title">Documentation de la page d'administration</h4>
								</div>
								<div class="modal-body">
									
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary">Save changes</button>
								</div>
							</div>
						</div>
					</div>
				</p>
			</div>
		</div>
				<!---------------------LES DIFFERENTS FORMULAIRES ---------------------------->
		<div class="row">
			<div class="col-lg-offset-1 col-xs-10 col-sm-10 col-md-10 col-lg-10">
				<div class="col-lg-12">
					<div class="btn-group btn-group-justified ">
						<a  class="btn btn-info ajouter"><span class="glyphicon glyphicon-plus"></span> AJOUTER</a>
						<a class="btn btn-primary btn-success modifier"><span class="glyphicon glyphicon-refresh"></span> MODIFIER</a>
						<a class="btn btn-primary btn-danger supprimer"><span class="glyphicon glyphicon-remove"></span> SUPPRIMER</a>
					</div>
				</div>
			</div>	
		</div>
					<!---------------------FORMULAIRE D'EDITION DES NEWS ---------------------------->
		<div class="row">
			<div class=" col-lg-offset-1 col-lg-10 upload">
				<div class="col-lg-6 ">
					<form role="form" method="POST" action="traitement/traitement.php" enctype="multipart/form-data">
						<legend class="label label-info"><h3>Edition des news</h3></legend>

						<div class="form-group">
						    <label for="Categorie">Categorie</label>
						    <input type="text" class="form-control" name="Categorie" placeholder="Ici va la categorie de la news">
						    <p class="help-block">on peut mettre Concert, Nouveau Son, etc...</p>
						</div>
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
						<button type="submit" class="btn btn-info">
					  		Valider
						</button>
					</form>
				</div>
				<!---------------------FORMULAIRE D'UPLOAD  DES PROJETS ---------------------------->
				<div class="col-lg-6">
					<form role="form" method="POST" action="traitement/Projet.php" enctype="multipart/form-data">
						<legend class="label label-info"><h3>Upload des projets</h3></legend>

						<div class="form-group">
						    <label for="Type">Type</label>
						    <input type="text" class="form-control" name="Type_projet" placeholder="Type du projet...">
						    <p class="help-block">Notamment solo, Groupe, en collaboration, etc...</p>
						</div>
						<div class="form-group">
						    <label for="Nom_projet">Nom du projet</label>
						    <input type="text" class="form-control" name="Nom_projet" placeholder="Nom du projet...">
						</div>
						<div class="form-group">
						    <label for="commentaire">Commentaires</label>
						    <textarea class="form-control" name="commentaire" placeholder="deux ou trois petites precisions sur le projet en question..."></textarea>
						</div>
						<div class="form-group">
						    <label for="Type">choisissez l'image du projet</label>
						    <input type="file" name="Image" >
						</div>				
						<button type="submit" class="btn btn-info">
					  		Valider
						</button>
					</form>
				</div>
			</div>
		</div>
		<br/>
		<div class="row">
			<div class="col-lg-offset-1 col-lg-10 upload">
				<!---------------------FORMULAIRE D'UPLOAD  DES IMAGES---------------------------->
				<div class="col-lg-6">
					<form class="upload" action="Image.php" method="POST" role="form" enctype="multipart/form-data">
					<legend class="label label-info"><h3>Upload d'Image</h3></legend>
				
					<div class="form-group">
						<label for="Image">Image a uploader</label>
						<input type="file" name="Image">
					</div>
					<div class="form-group">
						<label for="">Titre du media</label>
						<input type="text" class="form-control" name="Titre" placeholder="Input field">
					</div>
					<div class="form-group">
						<label for="">Description</label>
						<textarea class="form-control" placeholder="petite description" name="desc"></textarea>
					</div>										
					<button type="submit" class="btn btn-info">Valider</button>
					</form>
				</div>
				<!---------------------FORMULAIRE D'UPLOAD  DES VIDEOS---------------------------->
				<div class="col-lg-6">
					<form  class="upload" action="Video.php" method="POST" role="form">
					<legend class="label label-info"><h3>Upload de video</h3></legend>
					
					<div class="form-group">
						<label for="">Titre de la video</label>
						<input type="text" class="form-control" name="Titre" placeholder="Ici va le titre de la video">
					</div>
					<div class="form-group">
						<label for="">lien de la video </label>
						<input type="text" class="form-control" name="Lien" placeholder="Input field">
						<p class="help-block">
							ici va le lien de la video qu'il vous sera possible de lier de youtube a ce site de sorte a ce que le nombre de vue soit comptabiliser sur youtube.
						</p>
					</div>								
					<button type="submit" class="btn btn-info">Valider</button>
					</form>
				</div>
			</div>
		</div>
			
		<!----------------------------------------------------------------------
			=				FORMULAIRES DE MODIFICATION 
		------------------------------------------------------------------------>


		<!------------------- FORMULAIRE DE MODIFICATION DES NEWS---------------------------->
		<div class="row">
			<div class=" col-lg-offset-1 col-lg-10 modification">
				<div class="col-lg-6 ">
					<form role="form" method="POST" action="traitement/ModifNews.php" enctype="multipart/form-data">
						<legend class="label label-success"><h3>Modification des news</h3></legend>

						<div class="form-group">
						    <label for="">Titre de la News a modifier</label>
						    <input type="text" class="form-control" name="Titre" placeholder="Titre de la news a modifier">
						    <p class="help-block"> Consulter la liste des news pour etre plus sur...</p>
						</div>
						<div class="form-group">
						    <label for="Categorie">Categorie</label>
						    <input type="text" class="form-control" name="Categorie" placeholder="Ici va la categorie de la news">
						    <p class="help-block">on peut mettre Concert, Nouveau Son, etc...</p>
						</div>
						<div class="form-group">
						    <label for="">Titre de la News</label>
						    <input type="text" class="form-control" name="Titre1" placeholder="Titre">
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
						<button type="submit" class="btn btn-success">
					  		Valider
						</button>
					</form>
				</div>
				<!---------------------FORMULAIRE DE MODIFICATION  DES PROJETS ------------------------>
				<div class="col-lg-6 modification">
					<form  role="form" method="POST" action="traitement/ModifProjet.php" enctype="multipart/form-data">
						<legend class="label label-success"><h3>Modification des projets</h3></legend>

						<div class="form-group">
						    <label for="Nom_projet">Titre du projet a remplacer </label>
						    <input type="text" class="form-control" name="Titre" placeholder="Nom du projet...">
						</div>
						<div class="form-group">
						    <label for="Type">Type</label>
						    <input type="text" class="form-control" name="Type_projet" placeholder="Type du projet...">
						    <p class="help-block">Notamment solo, Groupe, en collaboration, etc...</p>
						</div>
						<div class="form-group">
						    <label for="Nom_projet">Titre du projet</label>
						    <input type="text" class="form-control" name="Titre1" placeholder="Nom du projet...">
						</div>
						<div class="form-group">
						    <label for="commentaire">Commentaires</label>
						    <textarea class="form-control" name="commentaire" placeholder="deux ou trois petites precisions sur le projet en question..."></textarea>
						</div>
						<div class="form-group">
						    <label for="Type">choisissez l'image du projet</label>
						    <input type="file" name="Image" >
						</div>				
						<button type="submit" class="btn btn-success">
					  		Valider
						</button>
					</form>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-offset-1 col-lg-10 modification">
				<!---------------------FORMULAIRE DE MODIFICATION  DES IMAGES------------------------>
				<div class="col-lg-6 modification">
					<form  action="Image.php" method="POST" role="form" enctype="multipart/form-data">
					<legend class="label label-success"><h3>Modification d'Image</h3></legend>
				
					<div class="form-group">
						<label for="Image">Image a uploader</label>
						<input type="file" name="Image">
					</div>
					<div class="form-group">
						<label for="">Titre du media</label>
						<input type="text" class="form-control" name="Titre" placeholder="Input field">
					</div>
					<div class="form-group">
						<label for="">Description</label>
						<textarea class="form-control" placeholder="petite description" name="desc"></textarea>
					</div>										
					<button type="submit" class="btn btn-success">Valider</button>
					</form>
				</div>
				<!---------------------FORMULAIRE DE MODIFICATION  DES VIDEOS ------------------------>
				<div class="col-lg-6 modification">
					<form   action="Video.php" method="POST" role="form">
					<legend class="label label-success"><h3>Modification de video</h3></legend>			
					
					<div class="form-group">
						<label for="">Titre de la video recherchee</label>
						<input type="text" class="form-control" name="Titre" placeholder="">
					</div>
					<div class="form-group">
						<label for="">Nouveau Titre </label>
						<input type="text" class="form-control" name="Titre1" placeholder="">
					</div>
					<div class="form-group">
						<label for="">lien de la video </label>
						<input type="text" class="form-control" name="Lien" placeholder="le lien de la nouvelle video">
						<p class="help-block">
							ici va le lien de la video qu'il vous sera possible de lier de youtube a ce site de sorte a ce que le nombre de vue soit comptabiliser sur youtube.
						</p>
					</div>								
					<button type="submit" class="btn btn-success">Valider</button>
					</form>
				</div>
			</div>
		</div>
		<!---------------------FORMULAIRE DE SUPPRESSION ---------------------------->
		<div class="row">
			<div class="col-lg-offset-1 col-lg-10 suppression">
				<div class="col-lg-offset-2 col-lg-7">
					<form action="traitement/Supprimer.php" method="POST" role="form">
						<legend class="label label-danger"><h3>Formulaire de suppression</h3></legend>
					
						<div class="form-group">
							<label for="suppression">Qu'est-ce qu'on cherche ?</label>
							<select class="form-control" name="suppression">
								<option value="image">une image</option>
								<option value="video">une video</option>
								<option value="news">une news</option>
								<option value="projet">un projet</option>
							</select>
						</div>
						<div class="form-group">
							<label for="Titre">Titre</label>
							<input type="text" class="form-control" name="Titre" placeholder="Titre de l'element a supprimer">
						</div>
						<button type="submit" class="btn btn-danger">Valider</button>
					</form>
				</div>
			</div>
		</div>
		<!---------------------TABLEAU DES DIFFERENTS MEDIAS ---------------------------->
		<div class="row">
			<div class="col-lg-offset-1 col-xs-10 col-sm-10 col-md-10 col-lg-10">
				<div class="col-lg-12">
					<div class="btn-group btn-group-justified ">
						<a  class="btn btn-perso News"><span class="glyphicon glyphicon-list"></span>Liste des News</a>
						<a class="btn btn-perso Images"><span class="glyphicon glyphicon-list"></span>Liste des Images</a>
						<a class="btn btn-perso Videos"><span class="glyphicon glyphicon-list"></span>Liste des Videos</a>
						<a class="btn btn-perso Projets"><span class="glyphicon glyphicon-list"></span>Liste des Projets</a>
					</div>
				</div>
			</div>	
		</div>


		<div class="row">
			<div class="col-lg-offset-1 col-lg-10 listN">

				<div class="panel panel-default">
					<table class="table table-striped table-bordered">
						<div class="panel-heading">
						   <h3 class="panel-title">Liste des News</h3>
						</div>
						<thead>
							<tr>
								<th>Categorie</th>
								<th>Titre</th>
								<th>Date</th>
								<th>Lieu</th>
								<th>Commentaires</th>
								<th>location Image</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								while($dataN= $News->fetch()){
							?>	
							<tr>
								<td class="col-lg-3"><?php echo $dataN['Categorie_news'] ;?></td>
								<td class="col-lg-3"><?php echo $dataN['Titre_news'] ;?></td>
								<td class="col-lg-3"><?php echo $dataN['Date_news'] ;?></td>
								<td class="col-lg-3"><?php echo $dataN['Lieu_news'] ;?></td>
								<td class="col-lg-3"><?php echo $dataN['Commentaire_news'] ;?></td>
								<td class="col-lg-3"><?php echo $dataN['Media_news'] ;?></td>
							</tr>
							<?php
							 }
								 $News->closeCursor();
							 ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-offset-1 col-lg-10 listI">

				<div class="panel panel-default">
					<table class="table table-striped table-bordered">
						<div class="panel-heading">
						   <h3 class="panel-title">Liste des Images </h3>
						</div>
						<thead>
							<tr>
								<th>Identifiant</th>
								<th>Titre de l'image</th>
								<th>Description</th>
								<th>url de l'image</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								while($dataI= $Media->fetch()){
							?>
							<tr>
								<td class="col-lg-3"><?php echo $dataI['id_media'] ;?></td>
								<td class="col-lg-3"><?php echo $dataI['titre_media'] ;?></td>
								<td class="col-lg-3"><?php echo $dataI['desc_media'] ;?></td>
								<td class="col-lg-3"><?php echo $dataI['location_media'] ;?></td>
							</tr>
							<?php
							 }
								 $Media->closeCursor();
							 ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-offset-1 col-lg-10 listV">

				<div class="panel panel-default">
					<table class="table table-striped table-bordered">
						<div class="panel-heading">
						   <h3 class="panel-title">Liste des Videos </h3>
						</div>
						<thead>
							<tr>
								<th>Titre</th>
								<th>Lien</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								while($dataM= $Video->fetch()){
							?>
							<tr>
								<td class="col-lg-3"> <?php echo $data['titre_video'] ?> </td>
								<td class="col-lg-3"> <?php echo $data['lien_video'] ?> </td>
							</tr>
							<?php
							 }
								 $Video->closeCursor();
							 ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-offset-1 col-lg-10 listP">

				<div class="panel panel-default">
					<table class="table table-striped table-bordered">
						<div class="panel-heading">
						   <h3 class="panel-title">Liste des Projets </h3>
						</div>
						<thead>
							<tr>
								<th>Type du projet</th>
								<th>Titre du projet</th>
								<th>Commentaires</th>
								<th>url image du projet</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								while($dataP= $Projet->fetch()){
							?>
							<tr>
								<td class="col-lg-3"><?php echo $dataP['type_projet'] ;?></td>
								<td class="col-lg-3"><?php echo $dataP['titre_projet'] ;?></td>
								<td class="col-lg-3"><?php echo $dataP['commentaires_projet'] ;?></td>
								<td class="col-lg-3"><?php echo $dataP['url_image_projet'] ;?></td>
							</tr>
							<?php
							 }
								 $Projet->closeCursor();
							 ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		


		<!-- jQuery -->
		<script src="../public/js/JQuery.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="../public/js/bootstrap.min.js"></script>

		<script>

			$(function(){
				//code de dissimulation de l'interface d'aministration

				$('.upload').hide();
				$('.suppression').hide();
				$('.modification').hide();
				$('.listN').hide();
				$('.listV').hide();
				$('.listI').hide();
				$('.listP').hide();


				$('.ajouter').click(function(){
					$('.suppression').slideUp(500);
					$('.modification').slideUp(500);
					$('.upload').slideToggle(500);
				});	

				$('.modifier').click(function(){
					$('.upload').slideUp(500);
					$('.suppression').slideUp(500);
					$('.modification').slideToggle(500);
				});

				$('.supprimer').click(function(){
					$('.modification').slideUp(500);
					$('.upload').slideUp(500);
					$('.suppression').slideToggle(500);
				});

				$('.News').click(function(){
					$('.listV').slideUp();
					$('.listI').slideUp();					
					$('.listP').slideUp();					
					$('.listN').slideToggle(500);
				});

				$('.Images').click(function(){
					$('.listV').slideUp();
					$('.listP').slideUp();
					$('.listN').slideUp();					
					$('.listI').slideToggle(500);
				});

				$('.Projets').click(function(){
					$('.listV').slideUp();
					$('.listN').slideUp();
					$('.listI').slideUp();					
					$('.listP').slideToggle(500);
				});

				$('.Videos').click(function(){
					$('.listP').slideUp();
					$('.listN').slideUp();
					$('.listI').slideUp();					
					$('.listV').slideToggle(500);
				});

				/*--------------------------------------*/
				//code d'animation du formulaire de modification

			});

		</script>
	</body>
</html>