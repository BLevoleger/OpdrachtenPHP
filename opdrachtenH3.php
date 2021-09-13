<?php

date_default_timezone_set("Europe/Amsterdam");

$dag = date("l");
$dagNumeriek = date("j");
$maand = date("F");
$jaar = date("Y");
$dagVanJaar = date("z");
$dagVanWeek = date("w");
$Schikkel = date("L");

#Opdracht 1 :
echo "Opdracht 1: ";
echo "$dag $dagNumeriek $maand $jaar <br>";

#opdracht 2 :
echo "Opdracht 2: ";
echo "Vandaag is het de $dagVanJaar/e dag van het jaar <br>";

#Opdracht 3 :
echo "Opdracht 3: ";
echo "$dag is de $dagVanWeek dag van de week <br>";

#Opdracht 4 :
echo "Opdracht 4: ";
if ($Schikkel = 1) {
    echo "Het jaar $jaar is geen schikkeljaar";
} else {
    echo "Het jaar $jaar is een schikkeljaar";
}
