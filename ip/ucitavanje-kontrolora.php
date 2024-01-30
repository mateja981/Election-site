<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "izbori";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM korisnici WHERE Admin = 0";
$result = $conn->query($sql);
       
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		echo '
<div class="cont-info">';
        echo '
	<div class="cont-name">' . $row["Ime" ] ." ". $row["Prezime"] . "</div>";
		echo "
	<div class='cont-mail'>". $row["Email"] ."</div>";
		echo "
</div>";
		echo "
<hr>";
       
    }
} else {
    echo "Nema dostupnih kontrolora.";
}

// Zatvaranje konekcije
$conn->close();
?>