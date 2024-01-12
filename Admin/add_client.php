<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "agence de voyage";

try {
    // Connexion à la base de données
    $connexion = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupération des données du formulaire
    
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $adresse = $_POST["adresse"];
    $mot_de_passe = $_POST['password'];
    $Ville = $_POST['Ville'];
    $Pays = $_POST['Pays'];
    $code_postal = $_POST['code_postal'];
    
    // Validation des données
    if (empty($nom)) {
        throw new Exception("Le nom du client est obligatoire.");
    }
    if (empty($prenom)) {
        throw new Exception("Le prénom du client est obligatoire.");
    }
    if (empty($email)) {
        throw new Exception("L'adresse e-mail du client est obligatoire.");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception("L'adresse e-mail du client n'est pas valide.");
    }
    if (empty($telephone)) {
        throw new Exception("Le numéro de téléphone du client est obligatoire.");
    }
    if (!is_numeric($telephone)) {
        throw new Exception("Le numéro de téléphone du client doit être un nombre.");
    }
    if (empty($adresse)) {
        throw new Exception("L'adresse du client est obligatoire.");
        
        

    }

    // Insertion des données dans la base de données
    $requete = $connexion->prepare("INSERT INTO user (nom, prenom, email, telephone, adresse, Ville, Pays, code_postal, password) VALUES (:nom, :prenom, :email, :telephone, :adresse, :Ville, :Pays, :code_postal, :password)");

    $requete->bindValue(":nom", $nom);
    $requete->bindValue(":prenom", $prenom);
    $requete->bindValue(":email", $email);
    $requete->bindValue(":telephone", $telephone);
    $requete->bindValue(":adresse", $adresse);
    $requete->bindValue(":password", $mot_de_passe);
    $requete->bindValue(":Ville", $Ville);
    $requete->bindValue(":Pays", $Pays);
    $requete->bindValue(":code_postal", $code_postal);
    

    $requete->execute(); 
    header("location: clients.php");
    echo "Client ajouté avec succès!";
} catch (PDOException $e) {
    echo "Erreur ajouter client : " . $e->getMessage();
} finally {
    // Fermer la connexion à la base de données
    $connexion = null;
}
?>
