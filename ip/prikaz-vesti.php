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

// Provera da li je forma poslata za ažuriranje
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["azuriraj"])) {
    $noviNaslov = $_POST["novi_Naslov"];
    $noviSadrzaj = $_POST["novi_Sadrzaj"];

    // SQL upit za ažuriranje vesti
    $updateSql = "UPDATE vesti SET Naslov='$noviNaslov', Sadrzaj='$noviSadrzaj' WHERE id=$IDvest";

    if ($conn->query($updateSql) === TRUE) {
        echo "Vest uspešno ažurirana!";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Provera da li je forma poslata za brisanje
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["obrisi"])) {
    $vestId = $_POST["vest_id"];

    // SQL upit za brisanje vesti
    $deleteSql = "DELETE FROM vesti WHERE id=$vestId";

    if ($conn->query($deleteSql) === TRUE) {
        echo "Vest uspešno obrisana!";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}


// SQL upit za dohvatanje svih vesti
$sql = "SELECT * FROM vesti ORDER BY Datum DESC";
$result = $conn->query($sql);

//Prikazivanje vesti
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="new-div">';
        echo "<h2>" . $row["Naslov"] . "</h2>";
        echo "<p><strong>Datum i vreme:</strong> " . $row["Datum"] . "</p>";
        echo "<p>" . $row["Sadrzaj"] . "</p>";

        // Dodavanje linka za ažuriranje
        echo '<a href="azuriranje.php?id=' . $row["IDvest"] . '">Ažuriraj vest</a>';

        echo "</div>";
        echo "<hr>";
    }
} else {
    echo "Nema dostupnih vesti.";
}


// Zatvaranje konekcije
$conn->close();
?>
