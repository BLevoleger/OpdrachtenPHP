<?php

#Opdracht 1:
echo "Opdracht 1: ";
 $time = date("H");
switch ($time) {
    case $time >= 6 && $time < 12:
        echo "Het is ochtend";
        break;
    case $time >= 12 && $time < 18:
        echo "Het is Middag";
        break;
    case $time >= 18 && $time < 24:
        echo "Het is Avond";
        break;
    case $time >= 24 && $time < 6:
        echo "Het is Nacht";
        break;
}

echo "<br>";

#Opdracht 2:
echo "Opdracht 2: ";
$resultaat = match(intval($time)) {
    6, 7, 8, 9, 10, 11 => "Het is Ochtend",
    12, 13, 14, 15, 16, 17 => "Het is Middag",
    18, 19, 20, 21, 22, 23 => "Het is Avond",
    24, 1, 2, 3, 4, 5 => "Het is Nacht",

    default => "Onbekende tijd"
};
echo $resultaat;

echo "<br>";

#Opdracht 3:
echo "Opdracht 3: ";
$var1 = 5;
$var2 = 8;
if ($var1 >= $var2) {      
    $times2 = $var1 * 2;
    echo $times2 + $var2;
} else {
    $times2 = $var2 * 2;
    echo $times2 + $var1;
}

echo "<br>";

#Opdracht 4:
echo "Opdracht 4: ";
$price = 45;
if ($price > 150) {
    $newPrice = $price * 1.19;
    echo "Oude prijs: €$price. Na verhoging van 19% is de prijs: €$newPrice.";
} else if ($price < 55) {
    $newPrice = $price * 1.11;
    echo "Oude prijs: €$price. Na verhoging van 11% is de prijs: €$newPrice.";
} else {
    $newPrice = $price * 1.16;
    echo "Oude prijs: €$price. Na verhoging van 16% is de prijs: €$newPrice.";
}
 
echo "<br>";

#Opdracht 5:
echo "Opdracht 5: ";
$getal = 3;
if ($getal % 2) {
    echo "Getal is oneven";
} else {
    echo "Getal is even";
}

echo "<br>";

#Opdracht 6:
echo "Opdracht 6: ";
$uur = date("H");
$temp = 24;
$LuchtVhd = 90;
$aircoOn;
if ($uur == 8) {
    $aircoOn = true;
} else if ($uur >= 17 && $ $uur< 8) {
    $aircoOn = false;
}


