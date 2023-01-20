<?php 
include("./include/modele.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout Professeur</title>
</head>
<body>
    <h1>Ajout Professeur</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="nom">Nom</label>
    <input type="text" name="nom" id="nom">
        <label for="prenom">Prénom</label>
    <input type="text" name="prenom" id="prenom">
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
        <label for="description2">Description anglais</label>
        <textarea name="description2" id="description2" cols="30" rows="10"></textarea>
    <label for="img">Ajouter une image de profile</label>
    <input type="file" id="img" name="img" accept="image/*">
    <input type="submit" value="Confirmer">
    </form>
    <?php
    ajoutprof()
    ?>
</body>
</html>