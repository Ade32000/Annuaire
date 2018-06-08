<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title></title>
</head>
<body>

	
	<nav></nav>


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
$cpt = $bdd->query('SELECT COUNT(*) AS nb_contacts FROM contacts') ;
$lieu = $bdd->query('SELECT * FROM contacts WHERE ville = "Auch"') ;
$mail = $bdd->query('SELECT * FROM contacts WHERE email LIKE "%gmail.com"') ;

while($donnees=$reponse->fetch()){
      echo 'Id= ' . $donnees['id'] . " " . 'Nom= ' . $donnees['nom'] . " " . 'Prénom= ' . $donnees['prenom'] . " " . 'Entreprise= ' . $donnees['entreprise'] . " " . 'Date de naissance= ' . $donnees['datenaissance'] . " " . 'Rue= ' . $donnees['rue'] . " " . 'CP= ' . $donnees['cp'] . " " . 'Ville= ' . $donnees['ville'] . " " . 'Email= ' . $donnees['email'] . " " . 'Tél= ' . $donnees['telephone'] . "\n" . "\n";
}
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
echo "\n" . "\n";

$up = $bdd->query('UPDATE contacts SET email = "ogatien@simplon.co" WHERE id = 18') ;

// $del = $bdd->query('DELETE FROM appartenir WHERE fk_contact = 5') ;
// $delcontact = $bdd->query('DELETE FROM contacts WHERE id = 5') ;


 ?>



 	<footer></footer>
</body>
</html>