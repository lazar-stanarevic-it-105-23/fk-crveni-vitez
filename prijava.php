<?php

include "konekcija.php";

$poruka = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $ime = $_POST["ime"];
    $prezime = $_POST["prezime"];
    $godine = $_POST["godine"];
    $pozicija = $_POST["pozicija"];
    $visina = $_POST["visina"];
    $iskustvo = $_POST["iskustvo"];

    $tim = "Drugi tim";
    $status = "Prijavljen";

    $sql = "INSERT INTO igraci
            (
                ime,
                prezime,
                godine,
                pozicija,
                visina,
                iskustvo,
                tim,
                status
            )
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param(
        "ssisssss",
        $ime,
        $prezime,
        $godine,
        $pozicija,
        $visina,
        $iskustvo,
        $tim,
        $status
    );

    if ($stmt->execute()) {

        $poruka = "Uspešno ste prijavljeni!";

    } else {

        $poruka = "Došlo je do greške pri prijavljivanju.";

    }

    $stmt->close();
}

?>

<!DOCTYPE html>
<html lang="sr">

<head>

    <meta charset="UTF-8">

    <title>Prijava kandidata</title>

    <link
        rel="stylesheet"
        href="style.css"
    >

    <link
        rel="icon"
        type="image/x-icon"
        href="./slike/FK Klub Vitez.png"
    >

</head>

<body>

<nav>

    <div class="logo">
        FK CRVENI VITEZ
    </div>

    <ul>

        <li>
            <a href="./index.html">
                Početna
            </a>
        </li>

        <li>
            <a href="./o nama.html">
                O nama
            </a>
        </li>

        <li>
            <a href="./igraci.php">
                Igrači
            </a>
        </li>

        <li>
            <a href="./dogadjaji.html">
                Događaji
            </a>
        </li>

        <li>
            <a href="./aktivnosti.html">
                Aktivnosti
            </a>
        </li>

        <li>
            <a href="./vesti.html">
                Vesti
            </a>
        </li>

        <li>
            <a href="./prodavnica.html">
                Prodavnica
            </a>
        </li>

        <li>
            <a href="./prijava.php">
                Prijava
            </a>
        </li>

        <li>
            <a href="./istorija.html">
                Istorija
            </a>
        </li>

        <li>
            <a href="./clanstvo.html">
                Članstvo
            </a>
        </li>

    </ul>

</nav>


<section class="hero hero-dogadjaji">

    <h1>
        Prijava kandidata
    </h1>

</section>


<main>

    <div class="form-container">

        <h2>
            Prijavite se za FK Crveni Vitez
        </h2>

        <?php if ($poruka != ""): ?>

            <p class="poruka">
                <?= htmlspecialchars($poruka) ?>
            </p>

        <?php endif; ?>


        <form
            action="prijava.php"
            method="POST"
        >

            <input
                type="text"
                name="ime"
                placeholder="Ime"
                required
            >

            <input
                type="text"
                name="prezime"
                placeholder="Prezime"
                required
            >

            <input
                type="number"
                name="godine"
                placeholder="Godine"
                required
            >

            <input
                type="text"
                name="pozicija"
                placeholder="Pozicija"
                required
            >

            <input
                type="text"
                name="visina"
                placeholder="Visina"
                required
            >

            <input
                type="text"
                name="iskustvo"
                placeholder="Iskustvo"
                required
            >

            <button
                type="submit"
            >
                Prijavi se
            </button>

        </form>

    </div>

</main>


<footer>

    <p>
        © 2026 FK Crveni Vitez
    </p>

</footer>

</body>

</html>