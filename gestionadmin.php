<?php include("./include/modele.php");

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Gestion Admin</h1>
    <?php
       echo ("<table>");
    $result=gestionadmin();
    if(isset($result)&& isset($result[0])){
     
        echo ("<tr><th>ID</th>
        <th>Login</th> 
        <th>lvl</th> 
        <th>Suppr</th></tr>");
        foreach($result as $r){
            echo("<tr> 
            <td> {$r["id"]} </td> 
            <td> {$r["login"]} </td>
            <td> {$r["autorisation"]} </td>
            <td> <a href='gestionadmin.php?iddel={$r["id"]}'>X</a></td>
            </tr>");
        }
        echo ("</table>");
    }
    elseif(isset($result["login"])){
        echo ("<tr>
        <th>ID</th>
        <th>Login</th> 
        <th>lvl</th> 
        <th>Suppr</th></tr>");
        echo("<tr> 
            <td> {$result["id"]} </td> 
            <td> {$result["login"]} </td>
            <td> {$result["autorisation"]} </td>
            <td> <a href='gestionadmin.php?iddel={$result["id"]}'>X</a></td>
            </tr>");
        echo ("</table>");
    }
    else{
        echo("Seul l'admin 1 existe");
    }
    ?>
</body>
</html>