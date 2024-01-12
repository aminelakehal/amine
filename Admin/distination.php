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
		

		
	</body>
  <?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Connexion à la base de données
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "agence de voyage";

  $conn = new mysqli($servername, $username, $password, $dbname);

  // Vérifier la connexion
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Récupérer les données du formulaire
  $title = $_POST['title'];
  $description = $_POST['description'];
  $read_more_url = $_POST['read_more_url'];

  // Vérifier et traiter l'image
  if (isset($_FILES['img_src']) && $_FILES['img_src']['size'] > 0) {
    // Définir le dossier de destination
    $target_dir = "../site/uploads/";
    // Récupérer le nom du fichier original
    $original_filename = $_FILES['img_src']['name'];
    // Définir une extension de fichier valide
    $allowed_extensions = array('jpg', 'jpeg', 'png');
    // Extraire l'extension du fichier
    $ext = pathinfo($original_filename, PATHINFO_EXTENSION);
    // Vérifier l'extension
    if (!in_array($ext, $allowed_extensions)) {
      echo "Extension de fichier non autorisée.";
      exit;
    }
    // Définir un nom de fichier unique
    $new_filename = uniqid() . "." . $ext;
    // Définir le chemin complet du fichier
    $target_file = $target_dir . $new_filename;
    // Déplacer le fichier temporaire vers le dossier de destination
    if (move_uploaded_file($_FILES['img_src']['tmp_name'], $target_file)) {
      // Enregistrer le nom du fichier dans la base de données
      $img_src = $target_file;
    } else {
      echo "Une erreur s'est produite lors du téléchargement de l'image.";
      exit;
    }
  } else {
    echo "Aucune image sélectionnée.";
    exit;
  }

  // Insérer les données dans la base de données
  $sql = "INSERT INTO destination (title, img_src, description, read_more_url) VALUES ('$title', '$img_src', '$description', '$read_more_url')";

  if ($conn->query($sql) === TRUE) {
    echo "<p>Nouvelle entrée ajoutée avec succès.</p>";
  } else {
    echo "Erreur: " . $sql . "<br>" . $conn->error;
  }

  // Fermer la connexion à la base de données
  $conn->close();
}
?>
<form action="distination.php" method="post" enctype="multipart/form-data" >
<table class="table">
  <thead>
    <tr>
      <th>Formulaire pour ajouter une destination :</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><label for="title">Titre:</label></td>
      <td><input type="text" name="title" required><br></td>
    </tr>
    <tr>
      <td><label for="img_src">Image:</label></td>
      <td><input type="file" name="img_src" id="image" accept="image/*" required><br></td>
    </tr>
    <tr>
      <td><label for="description">Description:</label></td>
      <td><textarea name="description" required></textarea><br></td>
    </tr>
    <tr>
      <td><label for="read_more_url">URL de lecture:</label></td>
      <td><input type="text" name="read_more_url" required><br></td>
    </tr>
    <tr>
      <td><input type="submit" value="Ajouter"></td>
    </tr>
  </tbody>
</table>
</form>
</section>

</body>
</html>