<?php
$server = "localhost";
$korisnik = "root";
$lozinka = "";
$baza_podataka = "izbori";

$conn = new mysqli($server, $korisnik, $lozinka, $baza_podataka);

if ($conn->connect_error) {
    die("Greška pri povezivanju s bazom podataka: " . $conn->connect_error);
}

session_start();

$trenutni_korisnik = isset($_SESSION['IDkontrolora']) ? $_SESSION['IDkontrolora'] : null;

if (!$trenutni_korisnik) {
    include("NavKorisnik.php");
} else {
    $upit = "SELECT Admin FROM korisnici WHERE IDkontrolora  = $trenutni_korisnik";
    $rezultat = $conn->query($upit);

    if ($rezultat->num_rows > 0) {
        $red = $rezultat->fetch_assoc();
        $uloga = $red['Admin'];

        if ($uloga == "1") {
            include("NavAdmin.php");
        } else {
            include("NavKontrolor.php");
        }
    } else {
        // Greška: korisnik nije pronađen
    }
}


$conn->close();
?>