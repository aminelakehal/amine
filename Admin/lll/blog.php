<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- FONTS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;800&display=swap" rel="stylesheet">

    <!-- STYLES -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <link rel="stylesheet" href="./ressources/css/style.css" />
    <link rel="stylesheet" href="./ressources/css/blog.css">
    <link rel="stylesheet" href="./ressources/css/lll.css">
    <title>Blog</title>
</head>

<body>
    <header>

        <!-- =============== NAVBAR ===============  -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <a href="./index.html" class="navbar-brand"><img src="./ressources/images/logo.png" alt="Logo" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#monMenu"
                    aria-controls="#monMenu" aria-label="Menu pour mobile">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="monMenu">
                    <div class="navbar-nav ml-auto">
                        <a href="../site/index.php" class="nav-item nav-link">Accueil</a>
                        <a href="#blog.php" class="nav-item nav-link active">destinations</a>
                        <!-- <a href="./contact.html" class="nav-item nav-link" id="contact">Contact</a> -->
                        <a href="../site/inscription.php" class="nav-item nav-link" id="inscription">Inscription</a>
                        <a href="../site/connexion.php" class="nav-item nav-link" id="connexion">Connexion</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>


    <!-- <section class="blog">
        <div class="container">
            <main class="col-md-12"> -->

                <!-- ========= LES FILTRES ========= -->

               
                     
                </header>
                
<br><br><br><br><br>




<section class="container">
    <div class="row">
        <?php
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

        // Récupérer les données depuis la base de données
        $sql = "SELECT title, img_src, description, read_more_url FROM destination";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="card-img" src="<?php echo $row['img_src']; ?>" alt="image">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $row['title']; ?></h4>
                            <p class="card-text"><?php echo $row['description']; ?></p>
                            <a href="<?php echo $row['read_more_url']; ?>" class="btn btn-info">Lire</a>
                        </div>
                        <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "0 results";
        }

        // Fermer la connexion à la base de données
        $conn->close();
        ?>
    </div>
</section>

     <!-- =============== AJOUTER PARTIE ABONNEMENT NEWSLETTER =============== -->
    
  
    
 <!-- =============== FOOTER ===============  -->
 <footer>
    <div class="copyright">
        <p>Agence de voyage - 2024 <i class="fas fa-copyright"></i> <a href="#">Mentions légales</a></p>
    </div>
    <div class="social">
        <i class="fab fa-facebook-square" id="fb"></i>
        <!-- <i class="fab fa-instagram-square" id="insta"></i> -->
        <i class="fab fa-twitter-square" id="twitter"></i>
        <a href=""><i class="fab fa-github-square" id="git"></i></a>
    </div>
</footer>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>

</html>
</body>
</html>
