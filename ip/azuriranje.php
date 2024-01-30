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


if (isset($_GET['id'])) {
    $vestId = $_GET['id'];

    // Upit za dohvatanje podataka o vesti na osnovu ID-ja
    $sql = "SELECT * FROM vesti WHERE IDvest = $vestId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $naslov = $row['Naslov'];
        $sadrzaj = $row['Sadrzaj'];

        // Prikazivanje forme za ažuriranje sa podacima o vesti
        echo '<form method="post" action="obrada.php">';
        echo '<input type="hidden" name="vest_id" value="' . $vestId . '">';
        echo 'Naslov: <input type="text" name="novi_naslov" value="' . $naslov . '" required><br>';
        echo 'Sadržaj: <textarea name="novi_sadrzaj" rows="4" required>' . $sadrzaj . '</textarea><br>';
        echo '<input type="submit" name="azuriraj" value="Ažuriraj vest">';
        echo '</form>';
    } else {
        echo 'Vest nije pronađena.';
    }
} else {
    echo 'Nije dostavljen ID vesti.';
}


?>