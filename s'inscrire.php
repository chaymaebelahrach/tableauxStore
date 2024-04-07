<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Page</title>

<style>
	     /* Style the form container */
form {
   width: 800px;/*Changer la largeur du cadre du formulaire*/
   height: 400px;/*Changer la hauteur du cadre du formulaire*/
  display: flex; /* Arrange elements horizontally */
  flex-direction: column; /* Stack elements vertically */
  align-items: center; /* Center elements horizontally */
  margin: 10rem auto; /* Add margin for better spacing */
  padding: 1rem; /* Add padding for better spacing */
  border: 2px solid #ddd; /* Add a thin border */
  border-color: #a7ce44;  
  border-radius: 5px; /* Add rounded corners */
}
/* Style the input fields */
input[type="text"], input[type="email"],input[type="textarea"] {
  max-width: 5000px;
  padding: 0.5rem; /* Add padding for better spacing */
  border: 1px solid #ccc; /* Add a thin border */
  border-radius: 3px; /* Add rounded corners */
  font-size: 17px; /* Adjust font size for readability */
  border-color: #a7ce44; 
}

/* Style the submit button */
input[type="submit"] {
  background-color: #007bff; /* Set button background color */
  color: white; /* Set button text color */
  padding: 0.75rem 1.5rem; /* Adjust padding for better size */
  border: none; /* Remove default button border */
  border-radius: 5px; /* Add rounded corners */
  cursor: pointer; /* Indicate clickable element */
  margin-top: 1rem; /* Add space between input and button */
}
		input[type="reset"]{
  background-color: #007bff; /* Set button background color */
  color: white; /* Set button text color */
  padding: 0.75rem 1.5rem; /* Adjust padding for better size */
  border: none; /* Remove default button border */
  border-radius: 5px; /* Add rounded corners */
  cursor: pointer; /* Indicate clickable element */
  margin-top: 1rem; /* Add space between input and button */
}

/* Style the submit button on hover */
		input[type="submit"]:hover {
  background-color: #a7ce44; /* Change background color on hover */
	color : black
}
		input[type="reset"]:hover {
		  background-color: #a7ce44; /* Change background color on hover */
	    color : black	
		}
		input[type="submit"]{
			 background-color: #a7ce44;
		}
		input[type="reset"]{
			background-color: #a7ce44;
		}
	
	/*Le style du footer*/
#pageContent {
  text-align: center; /* Center elements within the div */
}

#pageContent h1 {
  font-size: 1.5em; /* Set a good font size for the heading */
  margin-bottom: 20px; /* Add space between heading and emails */
}

#pageContent a {
  color: #a7ce44; /* Set a green for the email links */
  text-decoration: none; /* Remove underline from links */
}

#pageContent a:hover {
  text-decoration: underline; /* Add underline on hover for better feedback */
}

#pageContent h2 {
  font-size: 1.2em; /* Set a smaller font size for emails */
  margin-bottom: 10px; /* Add some space between emails */
}
	/*Style du titre*/
h1 {
  margin-top: 150px;/* Espacement au-dessus du titre */
  margin-bottom: 10px;/* Espacement en dessous du titre */
  text-align: center; /* Centrage du texte */
	
  font-family: "Poppins", sans-serif; /* Police élégante et moderne */
  font-weight: 700; /* Poids gras pour une meilleure visibilité */
  font-size: 2em; /* Taille de police importante */
  color: #a7ce44; /* Couleur gris foncé pour une meilleure lisbilité */
  text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); /* Ombre subtile pour un effet 3D */
 
}

/* Optionnel : style pour le texte "tous nos avantages exclusifs" */
span {
  color: #007bff; /* Couleur bleu vif pour attirer l'attention */
  font-style: italic; /* Style italique pour souligner l'importance */
}
}

	
	</style>
</head>
<body>
<header>
	
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
			             style="margin-top: -7px;"
                          width="50px"
                          height="50px"
                          align="left"/> 
			              <a href="index.php" class="btn"> Home </a> <a
                          href="panier.php"
                          class="btn"
                          ><i class="fas fa-cart-plus menu-icon"></i>Panier</a
                        > <a href="produits.php" class="btn"
                          ><i class="fa fa-bars menu-icon"></i>Products</a
                        >
			             <a href="contact.php" class="btn"
                          ><i class="fa fa-phone menu-icon"></i> Contact Us</a
                        > 
			  </div>
			  </th>

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
</header>
<main>
<h1> <pre>      Créez un compte pour profiter de tous  
 nos avantages exclusifs :</pre></h1>
<form action="traitement_inscription.php" method="post" align="center" >	
		<p>Nom :
	  <input type="text" name="nom" />
		&emsp;&emsp;&emsp;&emsp;&emsp;
	   Prénom :
	  <input  type="text" name="prénom" />
	   </p>
   <table>
		<tr align="left">
		<td >
           <p>Email :&emsp;&emsp;&emsp;&emsp;
           <input type="email" name="email">
           </p>
           <p>Téléphone :&emsp;&emsp;
           <input type="text" name="téléphone">
           </p>
           <p>Commentaire :&emsp;
           <input type="textarea" name="commentaire">
           </p>
	    </td>
		</tr>
	</table>
	  <p>
      <input type="submit" value="Envoyer"> <input type="reset" value="Annuler">
	  </p>
</form>
</main>		
			  </br></br>
	<?php include_once("temp_footer.php");?>											  
</body>
</html>
