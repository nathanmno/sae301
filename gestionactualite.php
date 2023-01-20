<?php include("./include/modele.php") ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Actualités</title>
</head>
<body>
    <h1>Gestion Actualités</h1>
    <?php 
    $result=gestionactualite();
    echo("<table>");
    echo("<tr><th>id</th><th>Titre</th> <th>Date</th><th>img</th><th>Texte</th> <th>Edit/Suppr</th></tr>");
    if(isset($result["id"])){
        echo("<tr><td>{$result["id"]}</td><td>{$result["titre"]}</td> <td>{$result["date"]}</td> <td>{$result["miniature"]}</td> <td>{$result["texte"]}</td> <td><a href='editactualite.php?id={$result["id"]}'>Edit</a> <a href='gestionactualite.php?iddel={$result["id"]}'>x</a></td></tr>");
        echo("</table>");
    }
    elseif(isset($result[0])){
        foreach($result as $r){
            echo("<tr><td>{$r["id"]}</td><td>{$r["titre"]}</td> <td>{$r["date"]}</td> <td>{$r["miniature"]}</td> <td>{$r["texte"]}</td><td><a href='editactualite.php?id={$r["id"]}'>Edit</a> <a href='gestionactualite.php?iddel={$r["id"]}'>x</a></td></tr>");
        }
        echo("</table>");
    }
    ?>
</body>
</html>