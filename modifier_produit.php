<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title> 
<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<?php  				   
session_start();  	   
if (!(isset($_SESSION["utilisateur"]) && isset($_SESSION["role_utiliseur"]) && 	$_SESSION["role_utiliseur"] == "Administrateur" )) {
    header("location: login.php"); 
       exit();
}
?>  

<?php
 include("connexion_db.php"); 
  
$produitId=$_GET['id'];
$query = "SELECT * FROM products where id='" . $produitId . "'";
$produitResult = mysqli_query( $conn, $query );
if ( mysqli_num_rows( $produitResult ) > 0 ) {
$produitDetails = mysqli_fetch_assoc( $produitResult );
}
// Define variables and initialize with empty values
$libelle =$produitDetails["libelle"];
$description =$produitDetails["description"];
$image = $produitDetails["image"];
$prix =$produitDetails["prix"];
$quantite= $produitDetails["Quantite"];
$libelle_err = $description_err = $prix_err =$quantite_err =$image_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate libelle
    $input_libelle = trim($_POST["libelle"]);
    if(empty($input_libelle)){
        $libelle_err = "Please enter a libelle.";
    } else{
        $libelle = $input_libelle;
    }
    
    // Validate Description
    $input_description = trim($_POST["description"]);
    if(empty($input_description)){
        $description_err = "Please enter an description.";     
    } else{
        $description = $input_description;
    }
    
    // Validate Prix
    $input_prix = trim($_POST["prix"]);
    if(empty($input_prix)){
        $prix_err = "Please enter the Prix amount.";     
    } elseif(!ctype_digit($input_prix)){
        $prix_err = "Please enter a positive integer value.";
    } else{
        $prix = $input_prix;
    }
      // Validate quantite
    $input_quantite= trim($_POST["quantite"]);
    if(empty($input_quantite)){
        $quantite_err = "Please enter the quantite amount.";     
    } elseif(!ctype_digit($input_quantite)){
        $quantite_err = "Please enter a positive integer value.";
    } else{
        $quantite = $input_quantite;
    }
	
    // Check input errors before inserting in database
    if(empty($libelle_err) && empty($description_err) && empty($prix_err)){
		
	
        // Prepare an insert statement
        $sql = "update products set libelle=? , description=?, prix=? ,Quantite=? where id=?";
         
        if($statement = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
			
            $param_libelle = $libelle;
            $param_description = $description;
            $param_prix = $prix;
            mysqli_stmt_bind_param($statement,"sssss", $param_libelle, $param_description, $param_prix, $quantite,$produitId);
            
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($statement)){
                // Records created successfully. Redirect to landing page
               header("location: gestion_produits.php");
               exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($statement);
    }
    
    // Close connection
    mysqli_close($conn);
}
?>
<?php include_once("temp_header.php");?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="mt-5">Modifier Produit</h2>
            <p>Please fill this form and submit to add employee record to the database.</p>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])."?id=".$produitId; ?>" method="post">
                <div class="form-group">
                    <label>Libellé</label>
                    <input type="text" name="libelle" class="form-control <?php echo (!empty($libelle_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $libelle; ?>">
                    <span class="invalid-feedback"><?php echo $libelle_err;?></span>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control <?php echo (!empty($description_err)) ? 'is-invalid' : ''; ?>"><?php echo $description; ?></textarea>
                    <span class="invalid-feedback"><?php echo $description_err;?></span>
                </div>
                <div class="form-group">
                    <label>Prix</label>
                    <input type="text" name="prix" class="form-control <?php echo (!empty($prix_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $prix; ?>">
                    <span class="invalid-feedback"><?php echo $prix_err;?></span>
                </div>
                <div class="form-group">
                    <label>Quantité</label>
                    <input type="text" name="quantite" class="form-control <?php echo (!empty($quantite_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $quantite; ?>">
                    <span class="invalid-feedback"><?php echo $quantite_err;?></span>
                </div>
                <div class="form-group d-none">
                    <label>Image</label>
                   <input type="file" name="imageToUpload" >
                    <span class="invalid-feedback"><?php echo $image_err;?></span>
                </div>
                <input type="submit" class="btn btn-primary" value="Submit">
                <a href="gestion_produits.php" class="btn btn-secondary ml-2">Cancel</a>
            </form>
        </div>
    </div>        
</div> 
</body>
</html>