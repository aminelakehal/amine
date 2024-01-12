
<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="bootstrap-dist/css/bootstrap.css" />
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		
		<title>
			Formulaire circuits Maison Nomade
		</title>
		
		<link rel="stylesheet" href="styleFormulaires.css" media="screen" type="text/css" />
		
	</head>
	
	<body>
	<header id="haut">
	
	
	</header>
	
	
	<nav class="navbar" navbar-default role=navigatio>
			
			
	        <a class="nav-link" href="./site/index.php">Accueil</a>
			<a id="inactive" class="nav-link" href="circuits.php">Circuits</a>
			<a id="inactive" class="nav-link" href="clients.php">Clients</a>
			<a id="inactive" class="nav-link" href="reservations.php">Réservations</a>
			
			
			
			
			
			
		
		</nav>
		
		<section id="bas">
		<form method="post" action="circuits.php">
		
		
		<table class="table">
        <thead>
          <tr>
			
            <th>Formulaire pour ajouter un circuit :</th>
        
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><label for="ville" > Ville : </label></td>
            <td><SELECT name="ville" size="1">
					<OPTION>Paris
					<OPTION>Lyon
					<OPTION>Rome
					<OPTION>Mykonos
					<OPTION>Antalya
					<OPTION>Arizona
					<OPTION>NewYork
					<OPTION>Singapour
					<OPTION>Abu Dhabi
					<OPTION>Marrakesh
				</SELECT>
			</td>
            
		   </tr>
		   
          
        </tbody>
      </table>
			
			
			<input type="submit" value="Valider" onclick=window.location.href='formulaireEmployes.php'/>
		</form>
			
		
		
		</section>
		
	</body>

</html>
	