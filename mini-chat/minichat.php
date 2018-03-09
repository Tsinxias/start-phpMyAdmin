<?php
$bdd = new PDO('mysql:host=localhost;dbname=minichat','root', 'toor', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form class="" action="minichat_post.php" method="POST">
    <label for="pseudo">Pseudo: </label>
    <input type="text" name="pseudo" value="">
    <br>
    <label for="message">Message: </label>
    <input type="text" name="message" value="">
    <br>
    <button type="submit" name="button">Envoyer</button>
  </form>
  <?php
  try {
  	$bdd = new PDO('mysql:host=localhost;dbname=minichat','root', 'toor', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  } catch(Exception $e) {
          die('Erreur : '.$e->getMessage());
  }

  $select = "SELECT * FROM posts ORDER BY id DESC LIMIT 10";
  $prepare = $bdd->query($select);

  while ($row = $prepare->fetch()) {
    echo '<p><strong>' . $row["pseudo"] . '</strong> : ' . $row['message'] . '</p>';
  }
   ?>
</body>
</html>
