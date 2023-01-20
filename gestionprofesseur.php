<?php include("./include/modele.php")?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Professeurs</title>
</head>
<body>
    <h1>Gestion professeurs</h1>
<?php 
 $result=gestionprofs();
 echo("<table>");
 if(isset($result)&& isset($result[0])){
     echo ("<tr><th>ID</th>
     <th>Img</th>
     <th>Nom</th> 
     <th>Prenom</th> 
     <th>Description</th>
     <th>Description anglais</th>
     <th>Suppr</th></tr>");
     foreach($result as $r){
         echo("<tr> 
         <td> {$r["id"]} </td> 
         <td> {$r["img"]} </td>
         <td> {$r["nom"]} </td>
         <td> {$r["prenom"]} </td>
         <td> {$r["description"]} </td>
         <td> {$r["description2"]} </td>
         <td> <a href='editprofesseur.php?id={$r["id"]}'>Edit</a><a href='gestionprofesseur.php?iddel={$r["id"]}'>X</a></td>
         </tr>");
     }
     echo ("</table>");
 }
 elseif(isset($result["nom"])){
     echo ("<tr><th>ID</th>
     <th>Img</th>
     <th>Nom</th> 
     <th>Prenom</th> 
     <th>Description</th>
     <th>Description anglais</th>
     <th>Suppr</th></tr>");;
     echo("<tr> 
         <td> {$result["id"]} </td> 
         <td> {$result["img"]}</td> 
         <td> {$result["nom"]} </td>
         <td> {$result["prenom"]} </td>
         <td> {$result["description"]} </td>
         <td> {$result["description2"]} </td>
         <td> <a href='editprofesseur.php?id={$result["id"]}'>Edit</a> <a href='gestionprofesseur.php?iddel={$result["id"]}'>X</a></td>
         </tr>");
     echo ("</table>");
 }
 else{
     echo("Aucun professeur pour l'instant");
 }

?>
</body>
</html>