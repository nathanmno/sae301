<?php include("./include/modele.php")?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout Matière</title>
</head>
<body>
    <h1>Ajout matière</h1>
     <form action="" method="post" enctype="multipart/form-data">
        <label for="nom">Nom</label>
    <input type="text" name="nom" id="nom">
    <label for="texte">Texte</label>
    <textarea name="texte" id="texte" cols="30" rows="10"></textarea>
    <label for="texte2">Texte anglais</label>
    <textarea name="texte2" id="texte2" cols="30" rows="10"></textarea>
    <label for="img">Ajouter une image</label>
    <input type="file" id="img" name="img" accept="image/*">
    <input type="submit" value="Confirmer">
    </form>
<?php 
ajoutmatiere();
?>
</body>
</html>