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
    $username = $_POST["Email"];
    $password = $_POST["Password"];

    $sql = "SELECT * FROM korisnici WHERE Email = '$username' AND Sifra = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
		$red = $result->fetch_assoc();
        session_start();
        $_SESSION["IDkontrolora"] = $red['IDkontrolora'];
        $row = $result->fetch_assoc();
        header("Location: home.php");
    } else {
        echo "failure";
    }
}

$conn->close();
?>
