<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>home</title>
<style>.card-collection {
  display: flex;
}

.card {
  display: flex;
  flex-direction: row;
  border: 2px solid white;
}

.card:hover { 
  transform: scale(1.1);
  position: initial;
  z-index: 111;
  background: #fff;
}</style>
</head>
<body> 
<?php include_once("temp_header.php");?>
</br>
</br>
<td>&nbsp;</td>
<td>&nbsp;</td>
<h1 align="center"">Produits</h1>
<table width="914" align="center"  border="0">
  <tbody>
    <?php
      include("connexion_db.php"); 
											 
    // Fetching products from the database
    $query = "SELECT * FROM products";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// Get the search term
		$valeurRecherche = $_POST[ 'recherche_valeur' ];

		// Fetching products from the database
		$query = "SELECT * FROM products where libelle like '%" . $valeurRecherche . "%'";
	}
    $result = mysqli_query( $conn, $query );

    // Check if there are any products
    if ( mysqli_num_rows( $result ) > 0 ) {
      // Start building the HTML table 

      // Loop through each product
      $compteur = 0;
      while ( $row = mysqli_fetch_assoc( $result ) ) {
        if ( $compteur == 4 ) {
          echo '<tr>';
        }
        echo '<td width="280">';
        echo '<div class="card-collection">';
        echo '<div class="card">';
        echo '<div class="card-body">';
        echo '<h5 class="text-center"><img src="' . htmlspecialchars($row['image']) . '" width="200" height="200" alt=""/><br><a href="/produit.php?id=' . htmlspecialchars($row['id']) . '">' . htmlspecialchars($row['libelle']) . '</a></h5>';
        echo '<p align_text="center">' . htmlspecialchars($row['prix']) . ' DH</p>';
        echo '</div></div></div>';
        echo '</td>';
        if ($compteur % 4 == 3) {
          echo '</tr>';
        }
        $compteur++;
      }

    } else {
      // If no products found
      echo '<p style="text-align:center"><strong>Aucun produits trouvé.</strong></p>';
    }

    // Close the database connection
    mysqli_close( $conn );
    ?>
  </tbody>
</table> 

</br>
	
</body>
</div>
<footer><?php include_once("temp_footer.php");?></footer>
</html>
