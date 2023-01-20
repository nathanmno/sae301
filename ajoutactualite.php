<?php 
include("./include/modele.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout Actualités</title>
    <script src="tinymce/tinymce.min.js" referrerpolicy="origin"></script>
<script>tinymce.init({ selector: 'textarea', menubar:'' });</script>
</head>
<body>
    <h1>Ajout d'actualité</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="titre">Titre</label>
    <input type="text" name="titre" id="titre">
    <textarea name="texte" id="texte" cols="30" rows="10"></textarea>
    <label for="img">Ajouter une image</label>
    <input type="file" id="img" name="img" accept="image/*">
    <input type="submit" value="Confirmer">
    </form>
    <?php 
    ajoutactualite();
    ?>
</body>
</html>