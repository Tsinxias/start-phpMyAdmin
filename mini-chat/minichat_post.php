<?php
$bdd = new PDO('mysql:host=localhost;dbname=minichat','root', 'toor', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$sql = "INSERT INTO posts (pseudo, message) VALUES (?, ?)";
$requete = $bdd->prepare($sql);

$pseudo = $_POST['pseudo'];
$message = $_POST['message'];

$requete->execute(array($pseudo, $message));

// var_dump($_POST);
header('Location: minichat.php');
 ?>
