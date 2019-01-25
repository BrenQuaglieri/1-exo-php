<?php

$argent = 30;
$theatre = false;
$nom = 'Quaglieri';
$place = 30;


if ($argent <= $place) {
    echo 'Vous devriez aller au ciné, monsieur ' . $nom;
}
if (($theatre == true) && ($argent >= $place)) {
    echo 'Nous vous proposons une réservation pour la prochaine pièce, monsieur ' . $nom;
}
if (($theatre = false) && ($argent >= $place)) {
    echo 'Bienvenue, Monsieur ' . $nom;
}
