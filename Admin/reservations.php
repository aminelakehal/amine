<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="bootstrap-dist/css/bootstrap.css" />
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		
		<title>
			Réservations Maison Nomade
		</title>
		
		<link rel="stylesheet" href="styleAccueil.css" media="screen" type="text/css" />
		
	</head>
	
	<body>
	<header id="haut">
	
	
	</header>
	
	
	<nav class="navbar" navbar-default role=navigatio>
			
			
			<a class="nav-link" href="./site/index.php">Accueil</a>
			<a class="nav-link" href="circuits.php">Circuits</a>
			<a class="nav-link" href="clients.php">Clients</a>
			<a class="nav-link active" href="reservations.php">Réservations</a>
			
			
			
			<form class="form-inline mr-auto">
				<input class="form-control" type="text" placeholder="" aria-label="">
				<button class="btn btn-mdb-color btn-rounded btn-sm my-0 ml-sm-2" type="submit">Rechercher</button>
			</form>
			
			<a class="nav-link" href="deconnexion.php">Déconnexion</a>
			
		
		</nav>
		
		<section id="bas">
		
		<table class="table">
        <thead>
          <tr>
			
            <th>Nom du client</th>
			<th>Date de départ</th>
			<th>Date d'arrivée</th>
			<th>Nombre de passagers</th>
			<th> </th>
			<th> </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>utilisateur</td>
			<td>18/07/2023</td>
			<td>26/07/2023</td>
			<td>4</td>
			<td><button class="btn btn-mdb-color btn-rounded btn-sm my-0 ml-sm-2" type="submit">Modifier</button></td>
			<td><button class="btn btn-mdb-color btn-rounded btn-sm my-0 ml-sm-2" type="submit">Supprimer</button></td>


          </tr>
          
          
        </tbody>
      </table>

			
		
		
		</section>
		<section id="footer">
		
			  <input id="button" type=button class="btn btn-light"  value= Ajouter />

		</section>
	</body>

</html>
	
