<?php
include("connexion.php");
ini_set('session.gc_maxlifetime', 3600);
session_start();
//La suppression d'image ne fonctionnait pas sur mon xamp
function connexion()
{
    if (isset($_POST["mdp"], $_POST["login"])) {
        global $db;
        $requete = "SELECT * FROM administrateurs WHERE login=:login    ";
        $stmt = $db->prepare($requete);
        $stmt->bindParam(':login', $_POST["login"], PDO::PARAM_STR);
        $stmt->execute();
        if ($stmt->rowcount() == 1) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            echo ("le Login existe");
            if (
                password_verify($_POST["mdp"], $result["mdp"])
            ) {
                echo ("Connexion réussie");
                global $db;
                $requete = "SELECT * FROM administrateurs WHERE login='{$_POST["login"]}'";
                $stmt = $db->query($requete);
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                $_SESSION["id"] = $result["id"];
                $_SESSION["lvl"] = $result["autorisation"];
                header("Refresh:3; Location:admin.php");
            } else {
                echo (" mais le mot de passe erroné");
            }
        } else {
            echo ("le login n'existe pas");
        }
    } else {
    };
};

if (isset($_GET["deco"])) {
    session_destroy();
    header("Location:login.php");
}

function ajoutadmin()
{
    global $db;
    //Vérification du niveau d'autorisation
    if (isset($_SESSION["lvl"]) && $_SESSION["lvl"] == 0) {

        if (isset($_POST["mdp1"], $_POST["mdp2"], $_POST["login"], $_POST["autorisation"])) {
            $requete = "SELECT login FROM administrateurs WHERE login='{$_POST["login"]}'";
            $stmt = $db->query($requete);
            if ($stmt->rowCount() == 1) {
                echo ("Ce login existe déjà !");
            } else {

                if ($_POST["mdp1"] == $_POST["mdp2"]) {
                    $hash = password_hash($_POST["mdp1"], PASSWORD_DEFAULT);
                    $requete = "INSERT INTO administrateurs(login, mdp, autorisation)
                    VALUES('{$_POST["login"]}', '$hash', '{$_POST["autorisation"]}')";
                    $stmt = $db->query($requete);
                    if ($stmt->rowCount() == 1) {
                        echo ("Ajout réussi :)");
                        header("Refresh:3");
                    }
                }
            }
        }
    } else {
        header("Location:admin.php");
    }
};

function gestionadmin()
{
    //Niveau d'autorisation
    if (isset($_SESSION["lvl"]) && $_SESSION["lvl"] == 0) {
        global $db;

        //Suppresion admin
        if (isset($_GET["iddel"])) {
            $requete = "DELETE FROM administrateurs WHERE id={$_GET["iddel"]}";
            $stmt = $db->query($requete);
            if ($stmt->rowCount() == 1) {
                echo ("Suppresion réussie");
            } else {
                echo ("La suppresion a échoué");
            }
            header("Location:gestionadmin.php");
        }
        //Récupération des admins
        $requete = "SELECT id, login, autorisation FROM administrateurs WHERE id>1";
        $stmt = $db->query($requete);
        if ($stmt->rowCount() > 1) {
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } else {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }
    } else {
        header("Location:admin.php");
    }
};
function chiffresmmi()
{
    global $db;
    //Niveau d'autorisation
    if (isset($_SESSION["lvl"]) && $_SESSION["lvl"] == 0) {

        $requete = "SELECT* FROM mmienchiffres";
        $stmt = $db->query($requete);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $form = " <form action='' method='post'>
    <label for='annee'>Durée d'existence</label>
    <input type='number' name='annee' id='annee' value='{$result["annee"]}'>
    <label for='diplomes'>Diplomés</label>
    <input type='number' name='diplomes' id='diplomes' value='{$result["diplomes"]}'>
    <label for='candidatures'>Candidatures</label>
    <input type='number' name='candidatures' id='candidatures' value='{$result["candidatures"]}'>
    <label for='places'>Places</label>
    <input type='number' name='places' id='places' value='{$result["places"]}'>
    <input type='submit' value='Confirmer les changements'>
    </form>";
        echo ($form);
        if (isset($_POST["annee"], $_POST["diplomes"], $_POST["candidatures"], $_POST["places"])) {
            $requete = "UPDATE mmienchiffres SET annee='{$_POST["annee"]}', diplomes='{$_POST["diplomes"]}', candidatures='{$_POST["candidatures"]}', places='{$_POST["places"]}'";
            $stmt = $db->query($requete);
            if ($stmt->rowCount() == 1) {
                echo ("Changement effectué :)");
                header("Refresh:3");
            }
        }
    } else {
        header("Location:admin.php");
    }
};
function selectchiffresmmi(){
    global $db;
    $requete="SELECT * FROM mmienchiffres";
    $stmt=$db->query($requete);
    $result=$stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
function ajoutprof()
{
    global $db;
    //Niveau d'autorisation
    if (isset($_SESSION["lvl"]) && $_SESSION["lvl"] == 0) {
        $uploaddir = "uploads/profs/";
        if (isset($_POST["nom"], $_POST["prenom"], $_POST["description"])) {
            $_POST["description"] = str_replace("'", "''", $_POST["description"]);
            $_POST["description2"] = str_replace("'", "''", $_POST["description2"]);
            $tmp_file = $_FILES['img']['tmp_name'];
            if (!is_uploaded_file($tmp_file)) {
                exit("Le fichier est introuvable");
            }
            $name_file = $_FILES['img']['name'];

            if (!move_uploaded_file($tmp_file, $uploaddir . $name_file)) {
                exit("Impossible de copier le fichier dans $uploaddir");
            }
            $imgpath = $uploaddir . $name_file;
            $requete = "INSERT INTO professeurs (nom, prenom, description, description2, img) VALUES ('{$_POST["nom"]}', '{$_POST["prenom"]}', '{$_POST["description"]}', '{$_POST["description2"]}', '{$imgpath}')";
            $stmt = $db->query($requete);
            if ($stmt->rowCount() == 1) {
                echo ("Ajout réussi :)");
                header("Refresh:3");
            }
        }
    } else {
        header("Location:admin.php");
    }
}
function gestionprofs()
{
    //Niveau d'autorisation
    if (isset($_SESSION["lvl"]) && $_SESSION["lvl"] == 0) {
        global $db;
        //Suppresion profs
        if (isset($_GET["iddel"])) {
            $requete = "DELETE FROM professeurs WHERE id={$_GET["iddel"]}";
            $stmt = $db->query($requete);
            if ($stmt->rowCount() == 1) {
                $requete = "SELECT img FROM professeurs WHERE id={$_GET["iddel"]}";
                $stmt = $db->query($requete);
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                $name=substr($result["img"],strrpos($result["img"], "/")+1);
                $uploaddir="/uploads/profs";
                chdir($uploaddir);
                unlink($name);
                echo ("Suppresion réussie");
            } else {
                echo ("La suppresion a échoué");
            }
            header("Location:gestionprofesseur.php");
        }
        //Récupération des professeurs
        $requete = "SELECT * FROM professeurs";
        $stmt = $db->query($requete);
        if ($stmt->rowCount() > 1) {
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } else {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }
    } else {
        header("Location:admin.php");
    }
}
function editprof()
{
if(isset($_POST["id"])||isset($_GET["id"])){
    global $db;
    if(isset($_GET["id"])){
        $id=$_GET["id"];
    }
    else if(isset($_POST["id"])){
        $id=$_POST["id"];
    }
    $requete = "SELECT * from professeurs where id=$id";
    $stmt = $db->query($requete);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    echo ("<form action='' method='post' enctype='multipart/form-data'>
<label for='nom'>Nom</label>
<input type='text' name='nom' id='nom' value='{$result["nom"]}'>
<label for='prenom'>Prénom</label>
<input type='text' name='prenom' id='prenom' value='{$result["prenom"]}'>
<label for='description'>Description</label>
<textarea name='description' id='description' cols='30' rows='10'>{$result["description"]}</textarea>
<label for='description2'>Description anglais</label>
<textarea name='description2' id='description' cols='30' rows='10'>{$result["description2"]}</textarea>
<label for='img'>Ajouter une image de profile</label>
<input type='file' id='img' name='img' accept='image/*'>
<input type='hidden' name='id' value='{$_GET["id"]}' >
<input type='submit' value='Confirmer'>
</form>");
if(isset($_POST['nom'], $_POST['prenom'], $_POST['description'])){
    $_POST["description"] = str_replace("'", "''", $_POST["description"]);
    $requete="UPDATE professeurs SET nom='{$_POST["nom"]}', prenom='{$_POST["prenom"]}', description='{$_POST["description"]}' WHERE id=$id";
    $stmt=$db->query($requete);
    if($stmt->rowCount()==1){
        echo("Les changements ont bien été enregistrés :)");
    }
    else{
        echo("Erreur dans l'enregistrement");
    }
    if(isset($_FILES['img']["tmp_name"])){
        $uploaddir = "uploads/profs/";
        $tmp_file = $_FILES['img']['tmp_name'];
        if (!is_uploaded_file($tmp_file)) {
            exit("Le fichier est introuvable");
        }
        $name_file = $_FILES['img']['name'];

        if (!move_uploaded_file($tmp_file, $uploaddir . $name_file)) {
            exit("Impossible de copier le fichier dans $uploaddir");
        }
        $imgpath = $uploaddir . $name_file;
        $requete="UPDATE professeurs set img='$imgpath' WHERE id=$id";
        $stmt=$db->query($requete);
        $name=substr($result["img"],strrpos($result["img"], "/")+1);
        chdir($uploaddir);
        unlink($name);
    }
    header("Refresh:3");
}
}
else{
    header("Location:admin.php");
};
}

function selectprofs(){
    global $db;
    $requete="SELECT *  FROM `professeurs`";
    $stmt=$db->query($requete);
    $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function ajoutactualite()
{
    global $db;
    //Niveau d'autorisation
    if (isset($_SESSION["lvl"]) && $_SESSION["lvl"] == 0) {
        if (isset($_POST["titre"], $_POST["texte"])) {
            $_POST["titre"] = str_replace("'", "''", $_POST["titre"]);
            $_POST["texte"] = str_replace("'", "''", $_POST["texte"]);
            $_POST["texte"] = str_replace("&lt", "<", $_POST["texte"]);
            $_POST["texte"] = str_replace("&gt", ">", $_POST["texte"]);
            $_POST["texte"] = str_replace("'", "''", $_POST["texte2"]);
            $_POST["texte"] = str_replace("&lt", "<", $_POST["texte2"]);
            $_POST["texte"] = str_replace("&gt", ">", $_POST["texte2"]);
            $uploaddir = "uploads/actualites/";
            $tmp_file = $_FILES['img']['tmp_name'];
            if (!is_uploaded_file($tmp_file)) {
                exit("Le fichier est introuvable");
            }
            $name_file = $_FILES['img']['name'];

            if (!move_uploaded_file($tmp_file, $uploaddir . $name_file)) {
                exit("Impossible de copier le fichier dans $uploaddir");
            }
            $imgpath = $uploaddir . $name_file;
            $requete = "INSERT INTO actualites (titre, texte, date, miniature) VALUES ('{$_POST["titre"]}', '{$_POST["texte"]}',  '{$_POST["texte2"]}', CURRENT_DATE, '{$imgpath}')";
            $stmt = $db->query($requete);
            if ($stmt->rowCount() == 1) {
                echo ("Ajout réussi :)");
                header("Refresh:3");
            }
        }
    } else {
        header("Location:admin.php");
    }
};
function gestionactualite()
{
    global $db;
    //Niveau d'autorisation
    if (isset($_SESSION["lvl"]) && $_SESSION["lvl"] == 0) {
        if (isset($_GET["iddel"])) {
            $requete = "DELETE FROM actualites WHERE id={$_GET["iddel"]}";
            $stmt = $db->query($requete);
            if ($stmt->rowCount() == 1) {
                echo ("Suppresion réussie");
            } else {
                echo ("La suppresion a échoué");
            }
            header("Location:gestionactualite.php");
        }
        $requete = "SELECT * from actualites";
        $stmt = $db->query($requete);
        if ($stmt->rowCount() == 1) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        } else if ($stmt->rowCount() > 1) {
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } else {
        }
    }
};
function editactualite(){
    if(isset($_POST["id"])||isset($_GET["id"])){
        global $db;
        if(isset($_GET["id"])){
            $id=$_GET["id"];
        }
        else if(isset($_POST["id"])){
            $id=$_POST["id"];
        }
        $requete = "SELECT * from actualites where id=$id";
        $stmt = $db->query($requete);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        echo ("<form action='' method='post' enctype='multipart/form-data'>
    <label for='titre'>Titre</label>
    <input type='text' name='titre' id='titre' value='{$result["titre"]}'>
    <label for='texte'>Texte</label>
    <textarea name='texte' id='texte' cols='30' rows='10'>{$result["texte"]}</textarea>
    <label for='img'>Ajouter une image de profile</label>
    <input type='file' id='img' name='img' accept='image/*'>
    <input type='hidden' name='id' value='{$_GET["id"]}' >
    <input type='submit' value='Confirmer'>
    </form>");
    if(isset($_POST['titre'], $_POST['texte'])){
        $_POST["texte"] = str_replace("'", "''", $_POST["texte"]);
        $requete="UPDATE actualites SET titre='{$_POST["titre"]}', texte='{$_POST["texte"]}' WHERE id=$id";
        $stmt=$db->query($requete);
        if($stmt->rowCount()==1){
            echo("Les changements ont bien été enregistrés :)");
        }
        else{
            echo("Erreur dans l'enregistrement");
        }
        if(isset($_FILES['img']["tmp_name"])){
            $uploaddir = "uploads/actualites/";
            $tmp_file = $_FILES['img']['tmp_name'];
            if (!is_uploaded_file($tmp_file)) {
                exit("Le fichier est introuvable");
            }
            $name_file = $_FILES['img']['name'];
    
            if (!move_uploaded_file($tmp_file, $uploaddir . $name_file)) {
                exit("Impossible de copier le fichier dans $uploaddir");
            }
            $imgpath = $uploaddir . $name_file;
            $requete="UPDATE actualites set miniature='$imgpath' WHERE id=$id";
            $stmt=$db->query($requete);
            $name=substr($result["miniature"],strrpos($result["miniature"], "/")+1);
            chdir($uploaddir);
            unlink($name);
        }
        header("Refresh:3");
    }
    }
    else{
        header("Location:admin.php");
    };
}
function selectdeuxprojets(){
    global $db;
    $requete="SELECT *  FROM `projets` ORDER BY date DESC LIMIT 2";
    $stmt=$db->query($requete);
    $result=$stmt->fetchall(PDO::FETCH_ASSOC);
    return $result;
}
function selectactualites(){
    global $db;
    $requete="SELECT *  FROM actualites";
    $stmt=$db->query($requete);
    $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function selectprojets(){
    global $db;
    $requete="SELECT *  FROM projets";
    $stmt=$db->query($requete);
    $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function ajoutprojet()
{
    global $db;
    //Niveau d'autorisation
    if (isset($_SESSION["lvl"]) && $_SESSION["lvl"] == 0) {
        if (isset($_POST["titre"], $_POST["texte"])) {
            $_POST["titre"] = str_replace("'", "''", $_POST["titre"]);
            $_POST["texte"] = str_replace("'", "''", $_POST["texte"]);
            $_POST["texte"] = str_replace("&lt", "<", $_POST["texte"]);
            $_POST["texte"] = str_replace("&gt", ">", $_POST["texte"]);

            $uploaddir = "uploads/projets/";
            $tmp_file = $_FILES['img']['tmp_name'];
            if (!is_uploaded_file($tmp_file)) {
                exit("Le fichier est introuvable");
            }
            $name_file = $_FILES['img']['name'];

            if (!move_uploaded_file($tmp_file, $uploaddir . $name_file)) {
                exit("Impossible de copier le fichier dans $uploaddir");
            }
            $imgpath = $uploaddir . $name_file;
            $requete = "INSERT INTO projets (titre, auteur, texte, date, miniature) VALUES ('{$_POST["titre"]}', '{$_POST["auteur"]}','{$_POST["texte"]}', '{$_POST["date"]}', '{$imgpath}')";
            $stmt = $db->query($requete);
            if ($stmt->rowCount() == 1) {
                echo ("Ajout réussi :)");
                header("Refresh:3");
            }
        }
    } else {
        header("Location:admin.php");
    }
};
function gestionprojet()
{
    global $db;
    //Niveau d'autorisation
    if (isset($_SESSION["lvl"]) && $_SESSION["lvl"] == 0) {
        if (isset($_GET["iddel"])) {
            $requete = "DELETE FROM projets WHERE id={$_GET["iddel"]}";
            $stmt = $db->query($requete);
            if ($stmt->rowCount() == 1) {
                echo ("Suppresion réussie");
                $stmt=$db->query($requete);
                $result=$stmt->fetch(PDO::FETCH_ASSOC);
                $requete="SELECT FROM projets WHERE id={$_GET["iddel"]}";
                $uploaddir="/uploads/projets";
                $name=substr($result["miniature"],strrpos($result["miniature"], "/")+1);
                chdir($uploaddir);
                unlink($name);
            } else {
                echo ("La suppresion a échoué");
            }
            header("Location:gestionprojet.php");
        }
        $requete = "SELECT * from projets";
        $stmt = $db->query($requete);
        if ($stmt->rowCount() == 1) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        } else if ($stmt->rowCount() > 1) {
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } else {
        }
    } else {
        header("Location:admin.php");
    }
};
function editprojet(){
    if(isset($_POST["id"])||isset($_GET["id"])){
        global $db;
        if(isset($_GET["id"])){
            $id=$_GET["id"];
        }
        else if(isset($_POST["id"])){
            $id=$_POST["id"];
        }
        $requete = "SELECT * from projets where id=$id";
        $stmt = $db->query($requete);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        echo ("<form action='' method='post' enctype='multipart/form-data'>
    <label for='titre'>Titre</label>
    <input type='text' name='titre' id='titre' value='{$result["titre"]}'>
    <label for='auteur'>Auteur</label>
    <input type='text' name='auteur' id='auteur' value='{$result["auteur"]}'>
    <label for='texte'>Texte</label>
    <textarea name='texte' id='texte' cols='30' rows='10'>{$result["texte"]}</textarea>
    <label for='img'>Ajouter une image de profile</label>
    <input type='file' id='miniature' name='miniature' accept='image/*'>
    <input type='hidden' name='id' value='{$_GET["id"]}' >
    <input type='submit' value='Confirmer'>
    </form>");
    if(isset($_POST['titre'], $_POST['texte'])){
        $_POST["texte"] = str_replace("'", "''", $_POST["texte"]);
        $_POST["texte"] = str_replace("&lt", "<", $_POST["texte"]);
        $_POST["texte"] = str_replace("&gt", ">", $_POST["texte"]);
        $_POST["titre"] = str_replace("'", "''", $_POST["titre"]);
        $requete="UPDATE projets SET titre='{$_POST["titre"]}',auteur='{$_POST["auteur"]}', texte='{$_POST["texte"]}'WHERE id=$id";
        $stmt=$db->query($requete);
        if($stmt->rowCount()==1){
            echo("Les changements ont bien été enregistrés :)");
        }
        else{
            echo("Erreur dans l'enregistrement");
        }
        if(isset($_FILES['img']["tmp_name"])){
            $uploaddir = "uploads/projets/";
            $tmp_file = $_FILES['img']['tmp_name'];
            if (!is_uploaded_file($tmp_file)) {
                exit("Le fichier est introuvable");
            }
            $name_file = $_FILES['img']['name'];
    
            if (!move_uploaded_file($tmp_file, $uploaddir . $name_file)) {
                exit("Impossible de copier le fichier dans $uploaddir");
            }
            $imgpath = $uploaddir . $name_file;
            $requete="UPDATE projets set miniature='$imgpath' WHERE id=$id";
            $stmt=$db->query($requete);
            $name=substr($result["miniature"],strrpos($result["miniature"], "/")+1);
            chdir($uploaddir);
            unlink($name);
        }
       header("Refresh:3");
    }
    }
    else{
        header("Location:admin.php");
    };
};

function selectmatieres(){
    global $db;
    $requete="SELECT *  FROM `matieres`";
    $stmt=$db->query($requete);
    $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function ajoutmatiere()
{
    global $db;
    //Niveau d'autorisation
    if (isset($_SESSION["lvl"]) && $_SESSION["lvl"] == 0) {
        if (isset($_POST["nom"], $_POST["texte"])) {
            $_POST["nom"] = str_replace("'", "''", $_POST["nom"]);
            $_POST["texte"] = str_replace("'", "''", $_POST["texte"]);
            $_POST["texte"] = str_replace("&lt", "<", $_POST["texte"]);
            $_POST["texte"] = str_replace("&gt", ">", $_POST["texte"]);
            $_POST["texte2"] = str_replace("'", "''", $_POST["texte2"]);
            $_POST["texte2"] = str_replace("&lt", "<", $_POST["texte2"]);
            $_POST["texte2"] = str_replace("&gt", ">", $_POST["texte2"]);
            $uploaddir = "uploads/matieres/";
            $tmp_file = $_FILES['img']['tmp_name'];
            if (!is_uploaded_file($tmp_file)) {
                exit("Le fichier est introuvable");
            }
            $name_file = $_FILES['img']['name'];

            if (!move_uploaded_file($tmp_file, $uploaddir . $name_file)) {
                exit("Impossible de copier le fichier dans $uploaddir");
            }
            $imgpath = $uploaddir . $name_file;
            $requete = "INSERT INTO matieres (nom, texte, texte2, img) VALUES ('{$_POST["nom"]}', '{$_POST["texte"]}', '{$_POST["texte2"]}', '{$imgpath}')";
            $stmt = $db->query($requete);
            if ($stmt->rowCount() == 1) {
                echo ("Ajout réussi :)");
                header("Refresh:3");
            }
        }
    } else {
        header("Location:admin.php");
    }
};
function gestionmatiere()
{
    global $db;
    //Niveau d'autorisation
    if (isset($_SESSION["lvl"]) && $_SESSION["lvl"] == 0) {
        if (isset($_GET["iddel"])) {
            $requete = "DELETE FROM matieres WHERE id={$_GET["iddel"]}";
            $stmt=$db->query($requete);
            $result=$stmt->fetch(PDO::FETCH_ASSOC);
            $requete="SELECT FROM matieres WHERE id={$_GET["iddel"]}";
            $uploaddir="/uploads/matieres";
            $name=substr($result["img"],strrpos($result["img"], "/")+1);
            chdir($uploaddir);
            unlink($name);
            $stmt = $db->query($requete);
            if ($stmt->rowCount() == 1) {
                echo ("Suppresion réussie");
            } else {
                echo ("La suppresion a échoué");
            }
            header("Location:gestionmatiere.php");
        }
        $requete = "SELECT * from matieres";
        $stmt = $db->query($requete);
        if ($stmt->rowCount() == 1) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        } else if ($stmt->rowCount() > 1) {
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } else {
        }
    } else {
        header("Location:admin.php");
    }
};
function editmatiere(){
    if(isset($_POST["id"])||isset($_GET["id"])){
        global $db;
        if(isset($_GET["id"])){
            $id=$_GET["id"];
        }
        else if(isset($_POST["id"])){
            $id=$_POST["id"];
        }
        $requete = "SELECT * from matieres where id=$id";
        $stmt = $db->query($requete);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        echo ("<form action='' method='post' enctype='multipart/form-data'>
    <label for='nom'>Nom</label>
    <input type='text' name='nom' id='nom' value='{$result["nom"]}'>
    <label for='texte'>Texte</label>
    <textarea name='texte' id='texte' cols='30' rows='10'>{$result["texte"]}</textarea>
    <label for='texte2'>Texte anglais</label>
    <textarea name='texte2' id='texte2' cols='30' rows='10'>{$result["texte2"]}</textarea>
    <label for='img'>Ajouter une image de profile</label>
    <input type='file' id='img' name='img' accept='image/*'>
    <input type='hidden' name='id' value='{$_GET["id"]}' >
    <input type='submit' value='Confirmer'>
    </form>");
    if(isset($_POST['nom'], $_POST['texte'], $_POST['texte2'])){
        $_POST["texte"] = str_replace("'", "''", $_POST["texte"]);
        $requete="UPDATE matieres SET nom='{$_POST["nom"]}', texte='{$_POST["texte"]}', texte2='{$_POST["texte2"]}' WHERE id=$id";
        $stmt=$db->query($requete);
        if($stmt->rowCount()==1){
            echo("Les changements ont bien été enregistrés :)");
        }
        else{
            echo("Erreur dans l'enregistrement");
        }
        if(isset($_FILES['img']["tmp_name"])){
            $uploaddir = "uploads/matieres/";
            $tmp_file = $_FILES['img']['tmp_name'];
            if (!is_uploaded_file($tmp_file)) {
                exit("Le fichier est introuvable");
            }
            $name_file = $_FILES['img']['name'];
    
            if (!move_uploaded_file($tmp_file, $uploaddir . $name_file)) {
                exit("Impossible de copier le fichier dans $uploaddir");
            }
            $imgpath = $uploaddir . $name_file;
            $requete="UPDATE matieres set img='$imgpath' WHERE id=$id";
            $stmt=$db->query($requete);
            $name=substr($result["img"],strrpos($result["img"], "/")+1);
            chdir($uploaddir);
            unlink($name);
        }
        header("Refresh:3");
    }
    }
    else{
        header("Location:admin.php");
    };
}
