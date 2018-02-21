<?php
// http://localhost:8000/jeux_video.php?console=PC

// if statement is applyed if there is a console request
// if (isset($_GET['console'])) {
  $bdd = new PDO('mysql:host=localhost;dbname=jeux_video', 'root', 'toor', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  $requete = $bdd->prepare('SELECT * FROM jeux_video WHERE console = ? ORDER BY prix DESC LIMIT 5');
  $requete->execute(array($_GET['console']));

  while($donnees = $requete->fetch()) {
    echo "<p>" . $donnees['console'] . " - " . $donnees['nom'] . " - " . $donnees['prix'] . " euros </p>";
  };
// }

//----- INSERT TO ------
// $requete = $bdd->prepare('INSERT INTO jeux_video(nom, possesseur) VALUES(?, ?)');
// $requete->execute(array($_GET['nom'], $_GET['possesseur']));


//----- UPDATE -----
// $requete = $bdd->prepare('UPDATE jeux_video SET possesseur = "Jean", console = "NES" WHERE ID=51');
// /!\ if you don't precise the WHERE, it will change all entries


//----- DELETE -----
// $requete = $bdd->prepare('DELETE FROM jeux_video WHERE ID=51');

 ?>
