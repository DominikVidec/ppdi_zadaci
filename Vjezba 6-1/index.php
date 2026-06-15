<?php
$json = file_get_contents("podaci.json");
$podaci = json_decode($json, true);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Automobili</title>

    <style>
        .auto {
            border: 1px solid black;
            padding: 10px;
            margin: 10px;
        }

        .skupi {
            background-color: lightcoral;
        }
    </style>
</head>
<body>

<h2>Podaci o osobi</h2>

<p>
    <?php
    echo $podaci["osoba"]["ime"] . " " .
         $podaci["osoba"]["prezime"];
    ?>
</p>

<h2>Automobili</h2>

<?php
foreach ($podaci["automobili"] as $auto) {

    $klasa = "";

    if ($auto["cijena"] > 20000) {
        $klasa = "skupi";
    }

    echo "<div class='auto $klasa'>";
    echo "<p>Marka: {$auto['marka']}</p>";
    echo "<p>Model: {$auto['model']}</p>";
    echo "<p>Godina: {$auto['godina']}</p>";
    echo "<p>Registracija: {$auto['registracija']}</p>";
    echo "<p>Cijena: {$auto['cijena']} EUR</p>";
    echo "</div>";
}
?>

</body>
</html>
