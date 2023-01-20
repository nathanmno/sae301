<?php 
include("./include/modele.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="tinymce/tinymce.min.js" referrerpolicy="origin"></script>
<script>tinymce.init({ selector: 'textarea', menubar:'' });</script>
    <title>Edit Projet</title>
</head>
<body>
    <h1>Edit Projet</h1>
    <?php
    editprojet();
    ?>
</body>
</html>