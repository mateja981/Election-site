<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "izbori";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8");



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Opstina= $_POST["Opstina"];
   
    $sql= " INSERT INTO `opstina`(`IDopstina`, `Opstina`, `BrojMesta`, `BrojRezultata`) VALUES ('','$Opstina','Null','Null')";
    if ($conn->query($sql) === TRUE) {
        header('Location: spisak-opstina.php');
    } else {
        echo "Greška: " . $sql . "
<br>" . $conn->error;
    }
}
$conn->close();


?>