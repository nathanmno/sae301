<!DOCTYPE html>
<html lang="fr">
<?php
include("./include/modele.php");
connexion();
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <label for="login">Login</label>
    <input type="text" name="login" id="login">
    <label for="mdp">Mot de Passe</label>
    <input type="password" name="mdp" id="mdp">
    <input type="submit" value="Se connecter">
</form>
</body>
</html>