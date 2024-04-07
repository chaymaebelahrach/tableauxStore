<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Inscription</title>
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
	</style>
</head>
<body>

<form action="traitement_inscription.php" method="post" align="center" >
	<p>Nom :
	  <input type="text" name="nom" />
	   Prénom :
	  <input  type="text" name="prénom" />
	</p>
    <p>Email :
    <input type="email" name="email">
    </p>
    <p>Téléphone :
    <input type="text" name="téléphone">
    </p>
    <p>Commentaire :
    <input type="textarea" name="commentaire">
    </p>
	<p>
    <input type="submit" value="Envoyer"> <input type="reset" value="Annuler">
	</p>
</form>

</body>
</html>