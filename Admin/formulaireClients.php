
<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="bootstrap-dist/css/bootstrap.css" />
		
		<title>
			Fomulaire clients Maison Nomade
		</title>
		
		<link rel="stylesheet" href="styleFormulaires.css" media="screen" type="text/css" />
		
	</head>
	
	<body>
	<header id="haut">
	
	
	</header>
	
	
	<nav class="navbar" navbar-default role=navigatio>
			
			
	        <a class="nav-link" href="./site/index.php">Accueil</a>
			
			<a id="inactive" class="nav-link" href="Les Hotel.php">Les Hotel</a>
			<a id="inactive" class="nav-link" href="clients.php">Clients</a>
			<a id="inactive" class="nav-link" href="reservations.php">Réservations</a>
			
			
			
			
			
			
		
		</nav>
		
		<section id="bas">
		
		<form action="add_client.php" method="post" >
		
		<table class="table">
        <thead>
          <tr>
			
            <th>Formulaire pour ajouter un client :</th>
        
          </tr>
        </thead>
        <tbody>
		<tr>
			
            <!-- <td><label for="idClient" > Identifiant : </label></td>
            <td><input type="text" name="idClient"/></td> -->
            
		   </tr>
          <tr>
            <td><label for="nomClient" > Nom : </label></td>
            <td><input type="text" name="nom"/></td>
            
		   </tr>
		   <tr>
            <td><label for="prenomClient" > Prénom : </label></td>
            <td><input type="text" name="prenom"/></td>
            
		   </tr>
		   <tr>
            <td><label for="email" > Email : </label></td>
            <td><input type="email" name="email"/></td>
            
		   </tr>
		   <tr>
            <td><label for="telephone" > Téléphone : </label></td>
            <td><input type="ttelephon" name="telephone"/></td>
            
		   </tr>
		   <tr>
            <td><label for="adresse" > Adresse : </label></td>
            <td><input type="text" name="adresse"/></td>

            
		   </tr>
		   <tr>
            <td><label for="adresse" > password : </label></td>
            <td><input type="password" name="password"/></td>

            
		   </tr>
		   <tr>
            <td><label for="adresse" > ville : </label></td>
            <td><input type="text" name="Ville"/></td>

            
		   </tr>
		   <tr>
            <td><label for="adresse" > pays : </label></td>
            <td><input type="text" name="Pays"/></td>

            
		   </tr>
		  
		   <tr>
            <td><label for="adresse" > code_postal : </label></td>
            <td><input type="text" name="code_postal"/></td>

            
		   </tr>
        </tbody>
      </table>
			
			
			<input type="submit" value="Valider" name="Valider" >
		</form>
			
		
		
		</section>
		
	</body>

</html>
	