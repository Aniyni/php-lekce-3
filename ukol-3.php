<!DOCTYPE html>
<html lang="en">
<head>
    <title>Úkol 3</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<br>
<div class="container">

    <?php
    $predmety = [
        'zeměpis' => 1,
        'dějepis' => 2,
        'fyzika' => 3,
        'přírodopis' => 1
    ];
    ?>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Předmět</th>
            <th>Známka</th>
        <?php
        $soucet = 0;
        $pocetznamek = 0;
        foreach ($predmety as $pred => $hodnota){
            echo "
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>$pred</td>
                <td>$hodnota</td>
            </tr>";
            $soucet = $soucet + $hodnota; //můžu to zapsat i jako $soucet += $hodnota;
            $pocetznamek++; //alternativní zápis $pocetznamek = $pocetznamek + 1;
        }
            ?>
        </tbody>
    </table>

    Průměr:<?php
    echo ($soucet/$pocetznamek);

?>
</div>
</body>
</html>
