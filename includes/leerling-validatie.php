<?php
if (empty($_POST['voornaam'])) {
    $foutmeldingen['voornaam'] = "Voornaam is verplicht.";
}

if (empty($_POST['naam'])) {
    $foutmeldingen['naam'] = "Naam is verplicht.";
}