<?php 
try{
	$connexion= new PDO('mysql:host=localhost;dbname=L2','root','');
}
catch ( Exception $e)
{
	die( ' Erreur : ' . $e->getMessage( ) ) ;
}

$answer= $connexion-> query('SELECT * FROM News');

 ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Page d'accueil</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="public/css/bootstrap.min.css" rel="stylesheet">
		<link href="public/css/style.css" rel="stylesheet" >
		<link href="public/css/font-awesome.min.css" rel="stylesheet">
	</head>
	<body>
		<!--- MENU DE NAVIGATION -->

		<nav class="navbar navbar-inverse navbar-static-top">
			<div class="container">
				<a class="navbar-brand" href="">Nom Groupe</a>
				<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navHeaderCollapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse navHeaderCollapse">
					<ul class="nav navbar-nav navbar-left">
						<li><a href="index.php"><center><i class="fa fa-home fa-2"></i><br>ACCUEIL</center></a></li>
						<li><a href="pages/News.php"><center><i class="fa fa-newspaper-o"></i><br>NEWS</center></a></li>
						<li><a href="pages/Presentation.php"><center><i class="fa fa-user"></i><br>BIOGRAPHIE</center></a></li>
						<li><a href="#"><center><i class="fa fa-music"></i><br>DISCOGRAPHIE</center></a></li>
						<li><a href="pages/Gallerie.php"><center><i class="fa fa-photo"></i><br>PHOTOS</center></a></li>
						<li><a href="pages/Gallerievid.php"><center><i class="fa fa-video-camera"></i><br>VIDEOS</center></a></li>
						<li><a href="#"><center><i class="fa fa-envelope"></i><br>CONTACTS</center></a></li>
						<li><a class="social-icon twitter-icon" href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a class="social-icon facebook-icon" href="#"><i class="fa fa-facebook-official"></i></a></li>
						<li><a class="social-icon youtube-icon" href="#"><i class="fa fa-youtube"></i></a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!--- CORPS DE LA PAGE -->
		<div class="container">
			<div id="mycarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
			<ol class="carousel-indicators">
				<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
				<li data-target="#mycarousel" data-slide-to="1"></li>
				<li data-target="#mycarousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img class="first-slide slider-pic" src="../public/img/01.jpg" alt="First slide">
					<div class="container">
						<div class="carousel-caption">
							<h2>Exemple headline</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat quo excepturi accusantium, sint modi nesciunt. Expedita, similique, est. Placeat dolores, distinctio eius perspiciatis. Voluptatem quas architecto dolor, hic commodi nam!</p>
						</div>
					</div>
				</div>
				<div class="item">
					<img class="second-slide  slider-pic" src="../public/img/02.jpg" alt="Second slide">
					<div class="container">
						<div class="carousel-caption">
							<h2>Exemple headline</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat quo excepturi accusantium, sint modi nesciunt. Expedita, similique, est. Placeat dolores, distinctio eius perspiciatis. Voluptatem quas architecto dolor, hic commodi nam!</p>
						</div>
					</div>
				</div>
				<div class="item">
					<img class="third-slide slider-pic" src="../public/img/03.jpg" alt="Third slide">
					<div class="container">
						<div class="carousel-caption">
							<h2>Exemple headline</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat quo excepturi accusantium, sint modi nesciunt. Expedita, similique, est. Placeat dolores, distinctio eius perspiciatis. Voluptatem quas architecto dolor, hic commodi nam!</p>
						</div>
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			</a>
			<a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			</a>
		</div>
		</div>
			
		<div class="haut-2 container">
			<div class="row Preview">
				<?php 
					while($data= $answer->fetch()){
				?>
				<a href="pages/News.php">	
					<div style="text-decoration:none;color:black;" class="col-md-4 hover-news">	
						<ul class="list-group">
							<li class="list-group-item">L2-Connection <?php echo $data['Categorie_news'] ;?> </li>
							<li class="list-group-item"><?php echo $data['Titre_news'] ;?></li>
							<li class="list-group-item"><?php echo $data['Date_news'] ;?></li>
							<li class="list-group-item"><img width="100%" height="100%" src="<?php echo $data['Media_news'];?>"></li>
						</ul>
					</div>
				</a>
				<?php 	
				}

				$answer->closeCursor();
				?>
			</div>
		</div>
		<!-- PIED DE PAGE -->
		<?php include("inclusions/Footer.php");?>
		<script src="public/js/JQuery.min.js"></script>
		<script src="public/js/bootstrap.min.js"></script>
		<script type="text/javascript">
		$(function(){
			$('[alt="First slide"]').attr('src','public/img/01.jpg');
			$('[alt="Second slide"]').attr('src','public/img/02.jpg');
			$('[alt="Third slide"]').attr('src','public/img/03.jpg');
		});
		</script>
	</body>
</html>