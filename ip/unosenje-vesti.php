<?php
// Povezivanje sa bazom podataka (prilagodite svojim podacima)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "izbori";

$conn = new mysqli($servername, $username, $password, $dbname);

// Provera konekcije
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Dobijanje podataka iz forme
$naslov = $_POST['naslov'];
$sadrzaj = $_POST['sadrzaj'];
$datum = date('Y-m-d'); // Automatsko dobijanje trenutnog datuma i vremena

// SQL upit za unos vesti
$sql = "INSERT INTO vesti (IDvest, Naslov, Datum, Sadrzaj ) VALUES ('','$naslov', '$datum', '$sadrzaj')";

if ($conn->query($sql) === TRUE) {
    header("Location: vesti.php");
} else {
    echo "Error: " . $sql . "
<br>" . $conn->error;
}

// Zatvaranje konekcije
$conn->close();
?>