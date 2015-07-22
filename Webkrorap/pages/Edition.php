<!DOCTYPE html>
<html>
	<head>
		<link href="../public/css/bootstrap.min.css" rel="stylesheet">
		<link href="../public/css/style.css" rel="stylesheet" >
		<meta charset="utf-8">
		<title>Edition des News</title>
		<style type="text/css">

		</style>
	</head>
	<body>


		<div class="col-lg-6">
			<form role="form" method="GET" action="traitement.php">
				<div class="form-group">
				    <label for="date">Date</label>
				    <input type="date" class="form-control" name="Date" placeholder="JJ/MM/AAAA">
				</div>
				<div class="form-group">
				    <label for="">Lieu</label>
				    <input type="text" class="form-control" name="Lieu" placeholder="Pays,Ville,etc...">
				</div>
				<div class="form-group">
				    <label for="">Titre de la News</label>
				    <input type="text" class="form-control" name="Titre" placeholder="Titre">
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