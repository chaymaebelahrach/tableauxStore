<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Log In </title>
<link rel="stylesheet" href="../style/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
<?php  				   
	session_start();  	   
   if (!(isset($_SESSION["utilisateur"]) && isset($_SESSION["role_utiliseur"]) && 	$_SESSION["role_utiliseur"] == "Administrateur" )) {
    	header("location: login.php"); 
   		exit();
   }
   include_once("temp_header.php");
?>
			
<div align="center" id="mainWrapper"> 			   
  <div id="pageContent">
	   <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Produits</h2>
                        <a href="creer_produit.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Créer produit</a>
                    </div>
     <?php
      include("connexion_db.php"); 
											 
    // Fetching products from the database
    $query = "SELECT * FROM products";
	     if($result = mysqli_query( $conn, $query )){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Image</th>";
                                        echo "<th>Designation</th>";
                                        echo "<th>Description</th>";
                                        echo "<th>Prix</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
										echo "<td><img src='" . $row['image'] . "' class='produit-img-list'/></td>";
                                        echo "<td>" . $row['libelle'] . "</td>";
                                        echo "<td>" . $row['description'] . "</td>";
                                        echo "<td>" . $row['prix'] . "</td>";
                                        echo "<td>";
                                            echo '<a href="produit.php?id='. $row['id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                            echo '<a href="modifier_produit.php?id='. $row['id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                            echo '<a href="supprimer_produit.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
	  ?>       
        </div>
        </div>
    </div>
  </div>
  <?php include_once("temp_footer.php");?>
</div>
	<style>
		.produit-img-list{
			width: 100px;
		}
	
	</style>
</body>
</html>