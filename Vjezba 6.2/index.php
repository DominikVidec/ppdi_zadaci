<?php
$json = file_get_contents("podaci.json");
$podaci = json_decode($json, true);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<style>
.auto{
    border:1px solid black;
    padding:10px;
    margin:10px;
}

.skupi{
    background-color:#ffcccc;
}

.povoljni{
    background-color:#ccffcc;
}
</style>

</head>
<body>

<h2>Automobili</h2>

<?php
foreach($podaci["automobili"] as $auto){

    if($auto["cijena"] > 20000){
        $klasa = "skupi";
        $oznaka = "Skuplji automobil";
    } else {
        $klasa = "povoljni";
        $oznaka = "Povoljniji automobil";
    }

    echo "<div class='$klasa auto'>";
    echo "<h3>{$auto['marka']} {$auto['model']}</h3>";
    echo "<p>Godina: {$auto['godina']}</p>";
    echo "<p>Boja: {$auto['boja']}</p>";
    echo "<p>Registriran: " . ($auto['registriran'] ? 'DA' : 'NE') . "</p>";
    echo "<p>Cijena: {$auto['cijena']} EUR</p>";
    echo "<p>Kilometri: {$auto['kilometri']}</p>";
    echo "<p>Gorivo: {$auto['gorivo']}</p>";
    echo "<p>Vlasnik od: {$auto['vlasnik_od']}</p>";
    echo "<strong>$oznaka</strong>";
    echo "</div>";
}
?>

</body>
</html>
