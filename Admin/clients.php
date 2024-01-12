<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="bootstrap-dist/css/bootstrap.css" />
	
		<title>
			Clients Maison Nomade
		</title>
		<link rel="stylesheet" href="styleAccueil.css">
		
		
	</head>
	
	<body>
	<header id="haut">
	
	
	</header>
	
	
	<nav class="navbar" navbar-default role=navigatio>
			
			
            <a class="nav-link" href="./site/index.php">Accueil</a>
			
			<a class="nav-link" href="distination.php">destination</a>
			<a class="nav-link" href="circuits.php">Circuits</a>
			<a class="nav-link active" href="clients.php">Clients</a>
			<a class="nav-link" href="reservations.php">Réservations</a>
			
			
			
			<form class="form-inline mr-auto"  >
				<input class="form-control" type="text" placeholder="" aria-label="">
				<button class="btn btn-mdb-color btn-rounded btn-sm my-0 ml-sm-2"  type="submit">Rechercher</button>
			</form>
			
			<a class="nav-link" href="deconnexion.php">Déconnexion</a>
			
		
		</nav>
        <?php
		
		// Connexion à la base de données
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "agence de voyage";

    try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


	// Récupération des données des clients
    $sql = "SELECT user_id,nom, prenom, email, telephone, adresse,Ville,Pays,code_postal FROM user";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Affichage des données
    echo '<table class="table">';
    echo '<thead>';
    echo '<tr>';
	echo '<th>id</th>';
    echo '<th>Nom</th>';
    echo '<th>Prénom</th>';
    echo '<th>Email</th>';
    echo '<th>Téléphone</th>';
    echo '<th>Adresse</th>';
    echo '<th>Ville</th>';
    echo '<th>Pays</th>';
    echo '<th>Code postal</th>';
	echo '<th>Modifier</th>';
    echo '<th>Supprimer</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<tr>';
		echo '<td>' . $row['user_id'] . '</td>';
        echo '<td>' . $row['nom'] . '</td>';
        echo '<td>' . $row['prenom'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . $row['telephone'] . '</td>';
        echo '<td>' . $row['adresse'] . '</td>';
        echo '<td>' . $row['Ville'] . '</td>';
        echo '<td>' . $row['Pays'] . '</td>';
        echo '<td>' . $row['code_postal'] . '</td>';
       
        echo '<td><form method="post" action="modifier_cliente.php">
              <input type="hidden" name="idClient" value="' . $row['user_id'] . '">
              <button class="btn btn-mdb-color btn-rounded btn-sm my-0 ml-sm-2" type="submit">Modifier</button></form></td>';
        echo '<td><button class="btn btn-mdb-color btn-rounded btn-sm my-0 ml-sm-2" type="button" onclick="window.location.href=\'delete_client.php?id=' . $row['user_id'] . '\'">Supprimer</button></td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

$conn = null;

		
		
?>


		
		
		<section id="footer">
		
			  <input id="button" type=button class="btn btn-light"  value= Ajouter onclick="window.location.href='formulaireClients.php'" />
		
		</section>
	</body>

</html>
	
