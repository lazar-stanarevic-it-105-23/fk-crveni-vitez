<?php

$server = "localhost";
$korisnik = "root";
$lozinka = "";
$baza = "crveni_vitez";
$port = 3307;

$conn = new mysqli(
    $server,
    $korisnik,
    $lozinka,
    $baza,
    $port
);

if ($conn->connect_error) {
    die("Greška pri povezivanju sa bazom.");
}

$conn->set_charset("utf8mb4");

?>