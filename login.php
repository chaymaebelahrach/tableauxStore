<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Log In </title>
<link rel="stylesheet" href="../style/style.css" type="text/css" media="screen" />
</head>

<body>
	
<div align="center" id="mainWrapper">

<?php 

session_start(); 
if (isset($_SESSION["utilisateur"])) {
  //rediriger
  //echo "<script>window.top.location='/gestion_produits.php';</script>";
  //exit(); 
} 
// Parse the log in form if the user has filled it out and pressed "Log In"
if (isset($_POST["utilisateur"]) && isset($_POST["password"])) {

	$utilisateur =$_POST["utilisateur"]; 
    $password = $_POST["password"];
	//Recuperer l'utilisateur connecté et designation de son role
	$login_query="SELECT utilisateurs.* ,roles.designation as designation_role  FROM utilisateurs 
		INNER JOIN roles_utilisateurs on utilisateurs.id=roles_utilisateurs.id_utilisateur
		INNER JOIN roles on roles.id=roles_utilisateurs.id_role
		WHERE utilisateurs.utilisateur='$utilisateur' AND utilisateurs.password='$password' LIMIT 1";
    	
    include("connexion_db.php"); 
	$sql = mysqli_query($conn, $login_query);
    $existCount = mysqli_num_rows($sql); // count the row nums
    if ($existCount == 1) { // evaluate the count
	     while($row = mysqli_fetch_array($sql)){  
		 $_SESSION["id"] = $row["id"];
		 $_SESSION["utilisateur"] = $row["utilisateur"];
		 $_SESSION["role_utiliseur"] =$row["designation_role"] ;
			 
		//echo $_SESSION["utilisateur"];	
		//echo $_SESSION["role_utiliseur"];	
		header("Location:gestion_produits.php"); 
		 }
		//rediriger
		 //echo "<script>window.top.location='/gestion_produits.php';</script>";
         exit();
    } else {
		echo 'That information is incorrect, try again <a href="index.php">Click Here</a>';
		exit();
	}
}
?>

<?php include_once("temp_header.php");?>
<div valign="right" style="height: 300px; width: 1280px;">
<div id="pageContent"><br />
    <div align="left" style="margin-left:24px;">
      <h2>Please Log In To Manage the Store</h2>
      <form id="form1" name="form1" method="post" action="login.php">
       <p>User Name:</p> 
          <input name="utilisateur" type="text" id="utilisateur" size="40" />
        <br /><br />
        <p> Password:</p> 
       <input name="password" type="password" id="password" size="40" />
       <br />
       <br />
       <br />
       
         <input type="submit" name="button" id="button" value="Log In" />
       
      </form>
      <p>&nbsp; </p>
    </div>
    <br />
  <br />
  <br />
  </div>
  <?php include_once("temp_footer.php");?>
</div>
	</div>
</body>
</html>