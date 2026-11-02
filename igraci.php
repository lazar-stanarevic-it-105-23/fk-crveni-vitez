<?php

include "konekcija.php";

$sql = "SELECT * FROM igraci";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="sr">

<head>

    <meta charset="UTF-8">

    <title>Prijavljeni kandidati</title>

    <link rel="stylesheet" href="style.css">

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
        Prijavljeni kandidati
    </h1>

</section>


<main>

    <div class="table-container">

        <table>

            <thead>

                <tr>

                    <th>
                        Redni broj
                    </th>

                    <th>
                        Ime i prezime
                    </th>

                    <th>
                        Godine
                    </th>

                    <th>
                        Pozicija
                    </th>

                    <th>
                        Visina
                    </th>

                    <th>
                        Iskustvo
                    </th>

                    <th>
                        Tim
                    </th>

                    <th>
                        Status
                    </th>

                </tr>

            </thead>

            <tbody>

<?php

while ($igrac = $result->fetch_assoc()) {

    echo "<tr>";

    echo "<td>"
        . $igrac["id"]
        . "</td>";

    echo "<td>"
        . htmlspecialchars($igrac["ime"])
        . " "
        . htmlspecialchars($igrac["prezime"])
        . "</td>";

    echo "<td>"
        . $igrac["godine"]
        . "</td>";

    echo "<td>"
        . htmlspecialchars($igrac["pozicija"])
        . "</td>";

    echo "<td>"
        . htmlspecialchars($igrac["visina"])
        . "</td>";

    echo "<td>"
        . htmlspecialchars($igrac["iskustvo"])
        . "</td>";

    echo "<td>"
        . htmlspecialchars($igrac["tim"])
        . "</td>";

    echo "<td>"
        . htmlspecialchars($igrac["status"])
        . "</td>";

    echo "</tr>";
}

?>

            </tbody>

        </table>

    </div>

</main>


<footer>

    <p>
        © 2026 FK Crveni Vitez
    </p>

</footer>

</body>

</html>