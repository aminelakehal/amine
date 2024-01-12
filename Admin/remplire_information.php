<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agence de voyage";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imagePath = $_POST['image_path'];
    $caption = $_POST['caption'];

    $sql = "INSERT INTO information (image_path, caption) VALUES ('$imagePath', '$caption')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>