<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        height: 100vh;
        padding: 0;
        margin: 0;
    }

    ul {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        height: 100%;
        list-style: none;
        padding: 0;
        margin: 0;
    }
</style>

<body>
    <ul>
        <!--On pourrait réduire le nombre de bouton sur le pannel en mettant les liens d'ajouts dans les pages de gestions-->
        <li><a href="login.php">Login</a></li>
        <li><a href="admin.php?deco=yes">Deconnexion</a></li>
        <li><a href="chiffremmi.php">Changer les chiffres MMI</a></li>
        <li><a href="ajoutprofesseur.php">Ajouter un professeur</a></li>
        <li><a href="gestionprofesseur.php">Gérer les professeurs</a></li>
        <li><a href="ajoutmatiere.php">Ajouter une matière</a></li>
        <li><a href="gestionmatiere.php">Gérer les matieres</a></li>
        <li><a href="ajoutadmin.php">Ajouter un admin</a></li>
        <li><a href="gestionadmin.php">Gérer les admins</a></li>
        <li><a href="ajoutactualite.php">Ajouter une actualité</a></li>
        <li><a href="gestionactualite.php">Gérer les actualités</a></li>
        <li><a href="ajoutprojet.php">Ajouter un projet</a></li>
        <li><a href="gestionprojet.php">Gérer les projets</a></li>
    </ul>
</body>

</html>