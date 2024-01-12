<?php

// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$nom_base_de_donnees = "agence de voyage"; // Utilisation du bon nom de la base de données

$conn = new mysqli($servername, $username, $password, $nom_base_de_donnees);

if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}

// Récupération des données du formulaire
$lieu_depart = $_POST["lieu_depart"];
$nombre_passager = $_POST["nombre_passager"];
$date_depart = $_POST["date_depart"];
$date_darrivee = $_POST["date_arrivee"];
$user_id = 1;

// Vérification de l'existence de l'utilisateur
$sql_check = "SELECT * FROM user WHERE user_id = ?";

$stmt_check = $conn->prepare($sql_check);

$stmt_check->bind_param("i", $user_id);

$stmt_check->execute();

$result_check = $stmt_check->get_result();

if ($result_check->num_rows === 0) {
    die("L'utilisateur n'existe pas.");
}

// Insertion des données dans la table `reservation_vol`
$sql_insert = "INSERT INTO reservation_vol (lieu_depart, date_depart, user_id, date_arrivee, nombre_passager) VALUES (?, ?, ?, ?, ?)";

$stmt_insert = $conn->prepare($sql_insert);

$stmt_insert->bind_param("ssiss", $lieu_depart, $date_depart, $user_id, $date_darrivee, $nombre_passager);

$stmt_insert->execute();

if ($stmt_insert->affected_rows === 1) {
    echo "Votre réservation a été enregistrée avec succès.";
} else {
    die("Une erreur est survenue lors de l'enregistrement de votre réservation.");
}

// Fermeture de la connexion
$stmt_check->close();
$stmt_insert->close();
$conn->close();

?>
