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
    $Email= $_POST["Email"];
    $Sifra= $_POST["Sifra"];
	$Ime= $_POST['Ime'];
	$Prezime= $_POST['Prezime'];
	$Telefon= $_POST['Telefon'];
	$Adresa= $_POST['Adresa'];
	$IDIzbornomesto= $_POST['IDIzbornomesto'];
	$Slika= $_POST['Slika'];
	$sql= " INSERT INTO `korisnici`(`IDkontrolora`, `IDIzbornoMesto`, `Ime`, `Prezime`, `Telefon`, `Email`, `Sifra`, `Adresa`, `Slika`, `Admin`) VALUES ('','$IDIzbornomesto','$Ime', '$Prezime', '$Telefon', '$Email', '$Sifra', '$Adresa', '$Slika', '0')";
	if ($conn->query($sql) === TRUE) {
        header('Location: registruj-se.php');
    } else {
        echo "Greška: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();


?>