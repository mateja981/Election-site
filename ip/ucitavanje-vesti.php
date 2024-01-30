<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "izbori";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM vesti ORDER BY datum DESC";
$result = $conn->query($sql);
	

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		echo '<div class="new-div">';
		echo '<div class="new-title">' . $row["Naslov"] . "</div>";
        echo '<div class="new-date">' . $row["Datum"] . "</div>";
		echo "<p>ID vesti: " . $row["IDvest"] . "</p>";	
        echo "<p>" . $row["Sadrzaj"] . "</p>";
		echo "</div>";
        echo "<hr>";
    }
} else {
    echo "Nema dostupnih vesti.";
}

// Zatvaranje konekcije
$conn->close();
?>
