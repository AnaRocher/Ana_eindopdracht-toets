<?php

if (empty($_POST['onderwerp'])) {
    $foutmeldingen['onderwerp'] = "Onderwerp is verplicht.";
}

if (empty($_POST['vak_id'])) {
    $foutmeldingen['vak_id'] = "Vak is verplicht.";
}

if (empty($_POST['datum'])) {
    $foutmeldingen['datum'] = "Datum is verplicht.";
}

if (empty($_POST['max'])) {
    $foutmeldingen['max'] = "Maximum cijfer is verplicht.";
} elseif ($_POST['max'] < 1) {
    $foutmeldingen['max'] = "Maximum cijfer moet positief zijn."; 
}