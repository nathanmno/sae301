<?php include("./include/modele.php")?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion projets</title>
</head>
<body>
    <?php
    $result=gestionprojet();
    echo("<table>");
    echo("<tr><th>id</th><th>Titre</th><th>Auteur</th> <th>Date</th><th>img</th><th>Texte</th> <th>Edit/Suppr</th></tr>");
    if(isset($result["id"])){
        echo("<tr><td>{$result["id"]}</td><td>{$result["titre"]}</td><td>{$result["auteur"]}</td> <td>{$result["date"]}</td> <td>{$result["miniature"]}</td> <td>{$result["texte"]}</td> <td><a href='editprojet.php?id={$result["id"]}'>Edit</a> <a href='gestionprojet.php?iddel={$result["id"]}'>x</a></td></tr>");
        echo("</table>");
    }
    elseif(isset($result[0])){
        foreach($result as $r){
            echo("<tr><td>{$r["id"]}</td><td>{$r["titre"]}</td><td>{$r["auteur"]}</td><td>{$r["date"]}</td> <td>{$r["miniature"]}</td> <td>{$r["texte"]}</td><td><a href='editprojet.php?id={$r["id"]}'>Edit</a> <a href='gestionprojet.php?iddel={$r["id"]}'>x</a></td></tr>");
        }
        echo("</table>");
    }
    ?>
</body>
</html>