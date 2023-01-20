<!DOCTYPE html>
<html lang="fr">
<?php
include("./include/modele.php");
ajoutadmin();
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout d'admin</title>
</head>
<body>
<h1>Ajouter un admin</h1>
<form action="" method="post">
    <label for="login">Login</label>
    <input type="text" name="login" id="login">
    <label for="mdp1">Mot de Passe</label>
    <input type="password" name="mdp1" id="mdp1">
    <label for="mdp2">Confirmer le mot de passe</label>
    <input type="password" name="mdp2" id="mdp2">
    <select name="autorisation" id="">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="0">SuperAdmin</option>
    </select>
    <input type="submit" value="Ajouter l'admin">
</form>
</body>
</html>