<?php 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="form.css">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Ajouter un contact</title>
</head>
<body>
	
	<form method="post" action="annuaire.php">
		<center><h3>Formulaire de contact</h3></center><br>
		<h5>Saisir les informations du nouveau contact :</h5><br><br>
	<div class="formulaire">
		<label for="nom">Nom : </label><input placeholder="ex : CONNOR" type="text" name="nom" id="nom">
		<label for="prenom">Prénom : </label><input placeholder="ex : Sarah" type="text" name="prenom" id="prenom">
		<label for="entreprise">Entreprise : </label><input placeholder="ex : Simplon.co" type="text" name="entreprise" id="entreprise">
		<label for="datenaissance">Date de naissance : </label><input placeholder="ex : 25/12/1980" type="date" name="datenaissance" id="datenaissance">
		<label for="rue">Rue : </label><input placeholder="ex : 10 avenue du code" type="text" name="rue" id="rue">
		<label for="cp">CP : </label><input placeholder="ex : 32000" type="text" name="cp" id="cp">
		<label for="ville">Ville : </label><input placeholder="ex : Auch" type="text" name="ville" id="ville">
		<label for="email">E-mail : </label><input placeholder="ex : InCodeWeTrust@simplon.co" type="email" name="email">
		<label for="telephone">Téléphone : </label><input placeholder="ex : 06 12 34 56 78" name="telephone" type="tel" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$">
		<input type="submit" name="envoi" value="Envoyer" id="envoi">
	</div>
	</form>
	
</body>
</html>
<?php 
 ?>