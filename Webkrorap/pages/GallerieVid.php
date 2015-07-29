</div><?php 
try{
	$connexion= new PDO('mysql:host=localhost;dbname=L2','root','');
}
catch ( Exception $e)
{
	die( ' Erreur : ' . $e->getMessage( ) ) ;
}

$answer= $connexion-> query('SELECT * FROM Video');

 ?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Gallerie Video</title>

		<!-- Bootstrap CSS -->
		<link href="../public/css/bootstrap.min.css" rel="stylesheet">
		<link href="../public/css/style.css" rel="stylesheet" >

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>

		<div class="row Image">
		<?php 
			while($data= $answer->fetch()){
		?>			
			<div class="media">
				<a class="pull-left" href="#">
					<iframe width="420" height="320" frameborder="0" src="<?php echo $data['lien_video'];?>"></iframe>
				</a>
				<div class="media-body">
					<h4 class="media-heading">Media heading</h4>
					<p>Text goes here...</p>
				</div>
			</div>
		<?php 
		}

		$answer->closeCursor();

		?>
		</div>

		<!-- jQuery -->
		<script src="../public/js/JQuery.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="../public/js/bootstrap.min.js"></script>

		<script>
			
		</script>
	</body>
</html>