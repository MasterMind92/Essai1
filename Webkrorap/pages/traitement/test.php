<?php 

$connexion= new PDO('mysql:host=localhost;dbname=L2','root','');


if (in_array("Categorie", $_POST)) {
	echo "wai c'est bon ";	
}

 
print_r($_POST);
print_r($_FILES);

?>

