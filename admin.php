<?php
session_start();

// Vérifier si l'utilisateur est connecté en tant qu'administrateur
if ($GLOBALS["nomAdminRole"]==) {
    header("Location: login.php"); // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    exit();
}

// Filtrer les données de session pour des raisons de sécurité
$id = preg_replace('#[^0-9]#i', '', $_SESSION["id"]); 
$utilisateur = preg_replace('#[^A-Za-z0-9]#i', '', $_SESSION["utilisateur"]); 
$password = preg_replace('#[^A-Za-z0-9]#i', '', $_SESSION["password"]); 

// Vérifier si l'utilisateur est bien un administrateur dans la base de données
include "../siteweb/connect_to_mysql.php"; 
$sql = mysqli_query($conn, "SELECT * FROM `admin` WHERE id='$id' AND username='$utilisateur' AND password='$password' LIMIT 1"); 
$existCount = mysqli_num_rows($sql); 

// Si l'utilisateur n'est pas un administrateur dans la base de données, afficher un message d'erreur
if ($existCount == 0) {
    echo "Vos données de session de connexion ne correspondent pas à celles enregistrées dans la base de données.";
    exit();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Zone d'administration</title>
<link rel="stylesheet" href="../style/style.css" type="text/css" media="screen" />
</head>

<body>
<div align="center" id="mainWrapper">
<div valign="right" style="height: 300px; width: 1300px; color: #ffffff; background-image: url(../style/bg1.jpg);">
</div>
<?php include_once("../temp_header.php");?>
  <div id="pageContent"><br />
    <div align="left" style="margin-left:24px;">
      <h2>Bonjour gestionnaire de magasin, veuillez procéder avec les liens ci-dessous..</h2>
      <p><a href="inventory_list.php">Gérer l'inventaire</a><br />
    </div>
    <br />
    <br />
    <br />
  </div>
  <?php include_once("../temp_footer.php");?>
</div>
</body>
</html>
