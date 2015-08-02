<?php 
try{
	$connexion= new PDO('mysql:host=localhost;dbname=L2','root','');
}
catch ( Exception $e)
{
	die( ' Erreur : ' . $e->getMessage( ) ) ;
}

$answer= $connexion-> query('SELECT * FROM Media');

 ?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Gallerie Photo</title>

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
		
			<div id="affiche" class="Gallerie col-xs-6 col-sm-4 col-md-3 col-lg-2">
				<a data-toggle="modal" href='#<?php echo $data['id_media'] ;?>'><img class="thumbnail" width="100%" src="<?php echo "../".$data['location_media'] ;?>" ></a>
				
				<div class="modal  fade" id="<?php echo $data['id_media'] ;?>">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
								<h4 class="modal-title">Modal title</h4>
							</div>
							<div class="modal-body ">
									<img  src="<?php echo $data['location_media'] ;?>">						
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary">Save changes</button>
							</div>
						</div>
					</div>
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