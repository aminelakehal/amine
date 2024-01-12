<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="bootstrap-dist/css/bootstrap.css" />
		
		<title>
			Circuits Maison Nomade
		</title>
		
		<link rel="stylesheet" href="styleAccueil.css" media="screen" type="text/css" />
		
	</head>
	
	<body>
	<header id="haut">
	
	
	</header>
	
	
	<nav class="navbar" navbar-default role=navigatio>
			
			
	    <a class="nav-link" href="./site/index.php">Accueil</a>
			
		
			<a class="nav-link active" href="circuits.php">Circuits</a>
			<a class="nav-link" href="clients.php">Clients</a>
			<a class="nav-link" href="reservations.php">Réservations</a>
			
			
			
			<form class="form-inline mr-auto">
				<input class="form-control" type="text" placeholder="" aria-label="">
				<button class="btn btn-mdb-color btn-rounded btn-sm my-0 ml-sm-2" type="submit">Rechercher</button>
			</form>
			
			<a class="nav-link" href="deconnexion.php">Déconnexion</a>
			
		
		</nav>
		
		<!-- <section id="bas">
		
		<table class="table">
        <thead>
          <tr>
			
            <th>Pays</th>
            <th>Ville</th>
            <th>Hotel</th>
			<th>Duree min</th>
			<th>Prix min (€)</th>
			<th> </th>
			<th> </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>FRANCE</td>
            <td>Paris</td>
            <td>maison favart</td>
			<td>1 nuits</td>
			<td>256</td>
			<td><button class="btn btn-mdb-color btn-rounded btn-sm my-0 ml-sm-2" type="submit">Modifier</button></td>
			<td><button class="btn btn-mdb-color btn-rounded btn-sm my-0 ml-sm-2" type="submit">Supprimer</button></td>


          </tr>
          <tr>
            <td>ALGRERIAN</td>
            <td>ALGE</td>
            <td>El Aurassi</td>
			<td>1 nuits</td>
			<td>256</td>
			<td><button class="btn btn-mdb-color btn-rounded btn-sm my-0 ml-sm-2" type="submit">Modifier</button></td>
			<td><button class="btn btn-mdb-color btn-rounded btn-sm my-0 ml-sm-2" type="submit">Supprimer</button></td>
			
          </tr>
          
        </tbody>
      </table>

			
		
		
		</section>
		<section id="footer"> -->
		<?php
// Connexion à la base de données (à ajuster selon vos paramètres)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agence de voyage";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}

// Récupérer les réservations depuis la base de données
$sql = "SELECT * FROM reservation_vol";
$result = $conn->query($sql);

// Afficher les réservations dans un tableau
echo "<table border='1'>
    <tr>
    
        <th>Lieu de départ</th>
        <th>Nombre de passagers</th>
        <th>Date de départ</th>
        <th>Date d'arrivée</th>
    </tr>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
             
            <td>" . $row['lieu_depart'] . "</td>
            <td>" . $row['nombre_passager'] . "</td>
            <td>" . $row['date_depart'] . "</td>
            <td>" . $row['date_arrivee'] . "</td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='5'>Aucune réservation trouvée</td></tr>";
}

echo "</table>";

// Fermer la connexion à la base de données
$conn->close();
?>

		
			  <input id="button" type=button class="btn btn-light" value= Ajouter onclick="window.location.href='formulaireCircuits.php'" />

		</section>
	</body>

</html>
	
