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

		<?php include("inclusions/Menu.php");?>
		<!--- CORPS DE LA PAGE -->
		<div class="col-md-offset-1 col-md-10">
			
			<?php include ("inclusions/Slider.php");?>
			
		</div>
			
		<div class="haut-2 container">
			<div class="row Preview">
				<div class="col-md-4 hover-news">
					<a href="#" >
						<ul class="list-group">
							<li class="list-group-item">L2-Connection</li>
							<li class="list-group-item">Titre du son</li>
							<li class="list-group-item">Item 3</li>
							<li class="list-group-item"><img width="100%" height="100%" src=""></li>
						</ul>
					</a>
				</div>
				<div class="col-md-4 hover-news">
					<a href="#" >
						<ul class="list-group">
							<li class="list-group-item">L2-Connection</li>
							<li class="list-group-item">Titre du son</li>
							<li class="list-group-item">Item 3</li>
							<li class="list-group-item"><img width="100%" height="100%" src=""></li>
						</ul>
					</a>
				</div>
				<div class="col-md-4 hover-news">
					<a href="#" >
						<ul class="list-group">
							<li class="list-group-item">L2-Connection</li>
							<li class="list-group-item">Titre du son</li>
							<li class="list-group-item">Item 3</li>
							<li class="list-group-item"><img width="100%" height="100%" src=""></li>
						</ul>
					</a>
				</div>
				<div class="col-md-4 hover-news">
					<a href="#" >
						<ul class="list-group">
							<li class="list-group-item">L2-Connection</li>
							<li class="list-group-item">Titre du son</li>
							<li class="list-group-item">Item 3</li>
							<li class="list-group-item"><img width="100%" height="100%" src=""></li>
						</ul>
					</a>
				</div>
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