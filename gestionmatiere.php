<?php include("./include/modele.php")?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion matiere</title>
</head>
<body>
    <h1>Gestion matières</h1>
    <?php
    $result=gestionmatiere();
    echo("<table>");
    echo("<tr><th>id</th><th>Titre</th> <th>img</th><th>Texte</th><th>Texte anglais</th> <th>Edit/Suppr</th></tr>");
    if(isset($result["id"])){
        echo("<tr><td>{$result["id"]}</td><td>{$result["nom"]}</td> <td>{$result["img"]}</td> <td>{$result["texte"]}</td><td>{$result["texte2"]}</td> <td><a href='editmatiere.php?id={$result["id"]}'>Edit</a> <a href='gestionmatiere.php?iddel={$result["id"]}'>x</a></td></tr>");
        echo("</table>");
    }
    elseif(isset($result[0])){
        foreach($result as $r){
            echo("<tr><td>{$r["id"]}</td><td>{$r["nom"]}</td>  <td>{$r["img"]}</td> <td>{$r["texte"]}</td><td>{$r["texte2"]}</td><td><a href='editmatiere.php?id={$r["id"]}'>Edit</a> <a href='gestionmatiere.php?iddel={$r["id"]}'>x</a></td></tr>");
        }
        echo("</table>");
    }
    ?>
</body>
</html>