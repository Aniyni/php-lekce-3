<?php
$vek = 6;
$vek2 = 52;
$prihlasen = false;


if ($vek < 15){
    echo 'ahoj žáku';
} elseif ($vek < 19) {echo 'Ahoj studente';
} else {echo 'Dobrý den';
}


$dny = ['pondělí', 'úterý', 'středa'];
foreach ($dny as $den) {
    echo $den;
    echo ', ';
}
// vypíše: pondělí, úterý, středa


$udaje = ['jmeno' => 'Anna', 'prijmeni' => 'Zbrklá'];
foreach ($udaje as $klic => $hodnota) {
    echo $klic;
    echo ': ';
    echo $hodnota;
    echo '<br>';
}
/* vypíše:
jmeno: Anna
prijmeni: Zbrklá
*/

if (isset($_COOKIE ['accessed'])){
    echo $_COOKIE ['accessed'];
}

