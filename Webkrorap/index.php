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
		<?php include ("inclusions/Slider.php");?>	
		<div class="haut-2 container">
			<div class="row">
				<div class="col-md-4 hover-news">
					<div class="list-group">
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">BRAND NEW SONG</h4>
							<div class="separator"></div>
					<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita repudiandae provident nam et consectetur molestiae aspernatur ratione placeat dignissimos odio, cum, non eveniet adipisci voluptas doloribus fugiat, maiores odit sint.</p>
						</a>
					</div>
				</div>
				<div class="col-md-4 hover-news">
					<div class="list-group">
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">BRAND NEW SONG</h4>
					<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita repudiandae provident nam et consectetur molestiae aspernatur ratione placeat dignissimos odio, cum, non eveniet adipisci voluptas doloribus fugiat, maiores odit sint.</p>
						</a>
					</div>
				</div>
				<div class="col-md-4 hover-news">
					<div class="list-group">
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">BRAND NEW SONG</h4>
					<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita repudiandae provident nam et consectetur molestiae aspernatur ratione placeat dignissimos odio, cum, non eveniet adipisci voluptas doloribus fugiat, maiores odit sint.</p>
						</a>
					</div>
				</div>
				<div class="col-md-4 hover-news">
					<div class="list-group">
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">BRAND NEW SONG</h4>
					<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita repudiandae provident nam et consectetur molestiae aspernatur ratione placeat dignissimos odio, cum, non eveniet adipisci voluptas doloribus fugiat, maiores odit sint.</p>
						</a>
					</div>
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