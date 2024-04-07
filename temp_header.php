<?php  
	$GLOBALS['nomAdminRole']='Administrateur';
	$GLOBALS['nomClientRole']='Client';
?>
<div id="pageHeader">
      <table width="100%" border="0" cellspacing="0" cellpadding="12">
        <tr>
          <td width="21%"><div valign="right" style="height: 20px;  color: #ffffff;
            <tr>
              <td width="32%">
            <table width="100%" border="0" align="center">
              <tbody>
                <tr>
				<th width="70%" scope="col">
				  <div id="menu-countiner">
					<img
					  src="8883482222_fbe1abdf-deae-4004-92f7-415643a2100e.png"
					  alt=""
					  style="margin-top: -7px"
					  width="50px"
					  height="50px"
					  align="left"
					/>
					<a href="index.php" class="btn"> Home </a>
			  		<?php 
						if (isset($_SESSION["utilisateur"]) && isset($_SESSION["role_utiliseur"]) && $_SESSION["role_utiliseur"] == "Administrateur") {
							echo '<a href="gestion_produits.php" class="btn"><i class="fa fa-list-check"></i>Gestion produits</a>';
						}
			  		?>
					<a href="panier.php" class="btn"
					  ><i class="fas fa-cart-plus menu-icon"></i>Panier</a
					>
					<a href="/produits.php" class="btn"
					  ><i class="fa fa-bars menu-icon"></i>Products</a
					>
					<a href="/contact.php" class="btn"
					  ><i class="fa fa-phone menu-icon"></i> Contact Us</a
					>
				  </div>
				</th>

                  <th width="30%" scope="col"> <form id="rechercheForm" action="produits.php" method="post">
                      <input type="search" name="recherche_valeur" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST[ 'recherche_valeur'])) { echo $_POST[ 'recherche_valeur' ];}?>" id="search" class="input" />
                      <input
                          type="submit"
                          name="rechercheBtn"
                          id="search2" 
              class="bouton"
                        />
                    </form>
                  </th>
                </tr>
              </tbody>
            </table></td>
        </tr>
        <tr>
          <link
                rel="stylesheet"
                href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
              />
          <link
                rel="stylesheet"
                href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
                integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
                crossorigin="anonymous"
              />
          <link
                href="https://fonts.googleapis.com/icon?family=Material+Icons"
                rel="stylesheet"
              />
        </tr>
        <style>
              .btn {
                   /* background-color: green; */
				border: none;
				color: #0a0a0a;
				padding: 12px 16px;
				font-size: 18px;
				cursor: pointer;
				text-decoration: none;
			}
			  #menu-countiner{
			  padding: 14px 0px; 
    display: flex;
    justify-content: space-between; 
			  }
			  .menu-icon{
			      padding: 0px 5px;
			  }
 #rechercheForm{
			      margin: 0px;
			  }
              .btn:hover {
                background-color: #a7ce44;
              }
              .bouton {
        display: inline-block;
        background-color: #a7ce44;
        border-radius: 6px;
        font-size: 16px;
        color: #FFFFFF;
        text-decoration: none;
        padding: 12px 30px;
        transition: all .5s;
              border:none;

    }
              .input{ 
        width: 50%;
        padding-left: 20px;
        border: 2px solid #e1e8ee;
        border-radius: 6px;
              color: #86939e;
        opacity: .7;
                  font-size: 14px;
        font-weight: 100;
        line-height: 14px;
                  height: 42px;
                  box-sizing: border-box;
              }
            </style>
          </td>

          </tr>

      </table>
      <p>&nbsp;</p>
    </div>
