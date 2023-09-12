<?php

if (empty($_POST['naam'])) {
    $foutmeldingen['naam'] = "Naam is verplicht.";
}