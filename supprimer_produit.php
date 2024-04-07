<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
	<?php
session_start();
if (!(isset($_SESSION["utilisateur"]) && isset($_SESSION["role_utiliseur"]) && $_SESSION["role_utiliseur"] == "Administrateur")) {
    header("location: login.php");
    exit();
}

include("connexion_db.php");

// Check if product ID parameter exists in the URL
if(isset($_GET["id"]) && !empty($_GET["id"])){
    // Prepare a DELETE statement
    $sql = "DELETE FROM products WHERE id = ?";
    
    if($stmt = mysqli_prepare($conn, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameter
        $param_id = $_GET["id"];
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Product deleted successfully, redirect back to products page
            header("location: gestion_produits.php");
            exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
    
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($conn);
} else{
    // Product ID parameter is missing, redirect back to products page
    header("location: products.php");
    exit();
}
?>


<body>
</body>
</html>