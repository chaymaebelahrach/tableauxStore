<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tutorial</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <!-- CSS -->
    <link href="product-details-style.css" rel="stylesheet">
    <meta name="robots" content="noindex,follow" />
  </head>
<body>
    <?php include_once("temp_header.php");?>
    <main class="container">
      <?php 
		 
      	  include("connexion_db.php"); 
	      $produitId=$_GET['id'];
	      $query = "SELECT * FROM products where id='" . $produitId . "'";
          $produitResult = mysqli_query( $conn, $query );
          if ( mysqli_num_rows( $produitResult ) > 0 ) {
            $produitDetails = mysqli_fetch_assoc( $produitResult );
	      }
	      //recuperer les dimensions
	      $query = "SELECT * FROM produits_dimensions where produit_id='" . $produitId . "'";
          $produitDimensionsResult = mysqli_query( $conn, $query );
      ?>
      <!-- Left Column / tableau Image -->
      <div class="left-column" style="width: 50% !important;"> 
        <img  class="active" src="<?php echo $produitDetails['image'];?>" alt="" height="400">
      </div>
      <!-- Right Column -->
      <div class="right-column">
        <!-- Product Description -->
        <div class="product-description">
          <span>Tableau</span>
          <h1><?php echo $produitDetails['libelle'];?></h1>
        </div>
		  <?php
// Vérifier si la clé 'description' existe dans $produitDetails
if (isset($produitDetails['description'])) {
    // Si oui, afficher la description
    echo '<div><p>' . $produitDetails['description'] . '</p></div>';
} else {
    // Si non, afficher un message d'erreur
    echo '<div><p>Description non disponible</p></div>';
    // Utilisez ces lignes pour déboguer et voir le contenu de $produitDetails
    // var_dump($produitDetails); // Affiche le contenu complet de $produitDetails
    // print_r($produitDetails); // Affiche une représentation lisible de $produitDetails
}
		 
?>

        <!-- Product Configuration -->
        <div class="product-configuration">
          <!-- Cable Configuration -->
          <div class="cable-config">
            <span>Dimension : </span>
            <div class="product-choose">
              <?php 
                if ( mysqli_num_rows( $produitResult ) > 0 ) {
                  while ( $dimension = mysqli_fetch_assoc( $produitDimensionsResult ) ) {
                    echo '<button>'.$dimension['dimension'].'</button>';
                  } 
                }
              ?>
            </div>
          </div>
        </div>
	  <div id="compteur-container" mx=12>
	  <label for="QTY" >Quantité : </label>
      <button id="moins" >-</button>
      <span id="compteur" >0</span>
      <button id="plus">+</button>
    </div>
		
		  <br />
        <!-- Product Pricing -->
        <div class="product-price">
          <span><?php echo $produitDetails['prix'];?> DH</span>
			<div>
				<a href="panier.php" class="cart-btn">Add to cart</a>

			</div>
		</div>
          
        </div>
    </main>

    <!-- Scripts -->
    <script src="jquery.min.js" charset="utf-8"></script>
    <script src="script.js" charset="utf-8"></script>
	 <script src="counter.js"></script>
	  <?php include_once("temp_footer.php");?>	
  </body>
</html>
