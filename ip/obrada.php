<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "izbori";

$conn = new mysqli($servername, $username, $password, $dbname);

// Provera konekcije
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["azuriraj"])) {
    $vestId = $_POST["vest_id"];
    $noviNaslov = $_POST["novi_naslov"];
    $noviSadrzaj = $_POST["novi_sadrzaj"];

    // SQL upit za ažuriranje vesti
    $updateSql = "UPDATE vesti SET Naslov='$noviNaslov', Sadrzaj='$noviSadrzaj' WHERE IDvest=$vestId";

    if ($conn->query($updateSql) === TRUE) {
        echo "Vest uspešno ažurirana!";
		header('Location: vesti.php');
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>