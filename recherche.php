<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>home</title>
<link rel="stylesheet" href="style/style.css" type="text/css" media="screen" />
</head>
<body>
<?php include_once("temp_header.php");?>
</br>
</br>
<td>&nbsp;</td>
<td>&nbsp;</td>
<h1 align="center"">Resultats :</h1>
<table width="914" align="center" border="0">
  <tbody>
    <?php
    // Assuming you have already established a connection to your MySQL database

    $servername = "localhost:3308";
    $username = "root";
    $password = "";
    $databasename = "siteweb";

    // CREATE CONNECTION 
    $conn = new mysqli( $servername,
      $username, $password, $databasename );

    // GET CONNECTION ERRORS 
    if ( $conn->connect_error ) {
      die( "Connection failed: " . $conn->connect_error );
    }
    // SQL QUERY 
    //$query = "SELECT * FROM `products` where libelle='produit';";
    $valeurRecherche = $_POST[ 'recherche_valeur' ];

    // Fetching products from the database
    $query = "SELECT * FROM products where libelle like '%" . $valeurRecherche . "%'";
    $result = mysqli_query( $conn, $query );

    // Check if there are any products
    if ( mysqli_num_rows( $result ) > 0 ) {
      // Start building the HTML table 

      // Loop through each product
      $compteur = 0;
      while ( $row = mysqli_fetch_assoc( $result ) ) {
        if ( $compteur == 3 ) {
          echo '<tr>';
          $compteur = 0;
        }
        echo '<td width="230">';
        echo '<img src="' . htmlspecialchars( $row[ 'image' ] ) . '" width="200" height="200" alt=""/><br><a href="/produits.php?produitId=' . htmlspecialchars( $row[ 'id' ] ) . '">' . htmlspecialchars( $row[ 'libelle' ] ) . '</a>';
        echo '<p align="center">' . htmlspecialchars( $row[ 'prix' ] ) . ' DH</p>';
        echo '<br>';
        echo '</td>';
        if ( $compteur == 3 ) {
          echo '</tr>';
        }
        $compteur++;
      }

    } else {
      // If no products found
      echo 'Aucun produits trouvé.';
    }

    // Close the database connection
    mysqli_close( $conn );
    ?>
  </tbody>
</table>
</body>
</html>
