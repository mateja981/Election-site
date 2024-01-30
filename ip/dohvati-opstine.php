<?php
// Povezivanje na MySQL bazu podataka
$servername = "localhost";
$username = "root";
$password = "";
$database = "izbori";

$conn = new mysqli($servername, $username, $password, $database);

// Provera konekcije
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Postavljanje podataka iz AJAX zahteva
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $broj_birackog_mesta = $_POST["broj_birackog_mesta"];

    // SQL upit za dohvatanje opština na osnovu broja biračkog mesta
    $sql = "SELECT * FROM opstina";
    $result = $conn->query($sql);

    // Generisanje padajućeg menija
    while ($row = $result->fetch_assoc()) {
        echo '<option value="' . $row["Opstina"] . '">' . $row["Opstina"] . '</option>';
    }
}

// Zatvaranje konekcije
$conn->close();
?>
