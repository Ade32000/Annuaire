<?php
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Mon annuaire</title>
	<nav class="menu">
		<ul>
			<li><a href="annuaire.php">Accueil</a></li>
			<li><a href="formulaire.php">Ajouter</a></li>
			<li><a href="#recherche">Rechercher</a></li>
		</ul>
	</nav>
</head>
<body>
	 

<!-- --------------------------------------------v  connexion bdd et requêtes ici  v--------------------------------------------------- -->
<?php
try{
	$bdd = new PDO('mysql:host=localhost;dbname=Mon_annuaire;charset=utf8', 'annie', '12345678');
}
// en cas d'erreur on affiche un message :
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


$reponse = $bdd->query('SELECT * FROM contacts') ;
// -----------------------------------------------------------------------------------------------------------------------------------------
// En-têtes tableau html : 

echo '<table class="striped"><thead><tr><th>' . 'Id' . '</th><th>' . 'Nom' . '</th><th>' . 'Prénom' . '</th><th>' . 'Entreprise' . '</th><th>' . 'Date de naissance' . '</th><th>' . 'Rue' . '</th><th>' . 'CP' . '</th><th>' . 'Ville' . '</th><th>' . 'Email' . '</th><th>' . 'Tél' . '</th></tr></thead><tbody>'; 

while($donnees=$reponse->fetch()){

	 echo '<tr><td>' . $donnees['id'] . '</td><td>' . $donnees['nom'] . '</td><td>' . $donnees['prenom'] . '</td><td>' . $donnees['entreprise'] . '</td><td>' . $donnees['datenaissance'] . '</td><td>' . $donnees['rue'] . '</td><td>' . $donnees['cp'] . '</td><td>' . $donnees['ville'] . '</td><td>' . $donnees['email'] . '</td><td>' . $donnees['telephone'] . '</td></tr>';	              
}
echo '</tbody></table>';
?>

 <form id="search">
            <input type="text" name="recherche" id="recherche" value="" placeholder="Rechercher un contact" />
            <input type="submit" name="search" id="bouton" value="Rechercher">
        </form>

<div id="codephp">

<!-- $cpt = $bdd->query('SELECT COUNT(*) AS nb_contacts FROM contacts') ;
$lieu = $bdd->query('SELECT * FROM contacts WHERE ville = "Auch"') ;
$mail = $bdd->query('SELECT * FROM contacts WHERE email LIKE "%gmail.com"') ;


while($result=$cpt->fetch()){
      echo 'Nombre de contacts= ' . $result[0] . "\n" . "\n". "\n";
}

while($reslieu=$lieu->fetch()){
      echo 'Id= ' . $reslieu['id'] . " " . 'Nom= ' . $reslieu['nom'] . " " . 'Prénom= ' . $reslieu['prenom'] . " " . 'Entreprise= ' . $reslieu['entreprise'] . " " . 'Date de naissance= ' . $reslieu['datenaissance'] . " " . 'Rue= ' . $reslieu['rue'] . " " . 'CP= ' . $reslieu['cp'] . " " . 'Ville= ' . $reslieu['ville'] . " " . 'Email= ' . $reslieu['email'] . " " . 'Tél= ' . $reslieu['telephone'] . "\n" . "\n";
  }
echo "\n" . "\n";

while($resmail=$mail->fetch()){
      echo 'Id= ' . $resmail['id'] . " " . 'Nom= ' . $resmail['nom'] . " " . 'Prénom= ' . $resmail['prenom'] . " " . 'Entreprise= ' . $resmail['entreprise'] . " " . 'Date de naissance= ' . $resmail['datenaissance'] . " " . 'Rue= ' . $resmail['rue'] . " " . 'CP= ' . $resmail['cp'] . " " . 'Ville= ' . $resmail['ville'] . " " . 'Email= ' . $resmail['email'] . " " . 'Tél= ' . $resmail['telephone'] . "\n" . "\n";
  }
echo "\n" . "\n"; -->
</div>


<!-- $up = $bdd->query('UPDATE contacts SET email = "ogatien@simplon.co" WHERE id = 18') ;

// $del = $bdd->query('DELETE FROM appartenir WHERE fk_contact = 5') ;
// $delcontact = $bdd->query('DELETE FROM contacts WHERE id = 5') ; -->

<!-- Récupération des données du formulaire d'ajout de contact -->
<?php 

$req = $bdd->prepare('INSERT INTO contacts (nom, prenom, entreprise, datenaissance, rue, cp, ville, email, telephone) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)');

$req->execute(array($_POST['nom'], $_POST['prenom'], $_POST['entreprise'], $_POST['datenaissance'], $_POST['rue'], $_POST['cp'], $_POST['ville'], $_POST['email'], $_POST['telephone']));

 ?>



 

	
        </body>
        <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
</html>


  