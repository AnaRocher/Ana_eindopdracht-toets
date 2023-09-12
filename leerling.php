<?php

include 'includes/database.php';

$query = $pdo->prepare('SELECT * FROM toetsen');
$query->execute([]);
$toetsen = $query->fetchAll();

$query = $pdo->prepare('SELECT * FROM leerlingen');
$query->execute([]);
$leerlingen = $query->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puntenboek</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <div class="container mx-auto">
        <?php include 'includes/main-header.php' ?>

        <h2 class="font-semibold text-2xl mb-4">
            <a href="leerlingen.php" class="uppercase text-blue-500 hover:underline">Leerlingen</a> &raquo;
            <b class="uppercase">
                <?php foreach ($leerlingen as $leerling) : ?>
                <?php 
                    $query = $pdo->prepare('SELECT * FROM resultaten WHERE leerling_id=:id');
                    $query->execute([
                        'id' => $leerling['id']
                    ]);
                    $vak = $query->fetch();  ?>
                <?php if (isset($_GET['id']) == ['leerling_id']): ?>
                <?php echo $leerling['voornaam'] . ' ' . $leerling['naam'] ?>
                <?php endif; ?>
                <?php endforeach; ?>
            </b>
        </h2>

        <p>Dit zijn alle toetsen voor de leerling <b class="font-semibold">
                <?php foreach ($leerlingen as $leerling) : ?>
                <?php echo $leerling['voornaam'] . ' ' . $leerling['naam'] ?>
                <?php endforeach; ?></b></p>

        <table class="w-full mt-4">
            <thead class="bg-neutral-300">
                <tr>
                    <th>Onderwerp</th>
                    <th>Vak</th>
                    <th>Datum</th>
                    <th>Score</th>
                    <th>Maximum cijfer</th>
                    <th>Handelingen</th>
                </tr>
            </thead>
            <tbody class="text-center">

                <tr>
                    <td>Tafels</td>
                    <td><a href="vak.php?id=1" class="text-blue-500 hover:underline">Wiskunde</a></td>
                    <td>2022-12-4</td>
                    <td class="text-red-500">4</td>
                    <td>10</td>
                    <td>
                        <a href="resultaat-aanpassen.php?id=1" class="text-orange-500 hover:underline">aanpassen</a>
                        <a href="resultaat-verwijderen.php?id=1" class="text-red-500 hover:underline">verwijderen</a>
                    </td>
                </tr>

                <tr>
                    <td>Hoofdstuk 2 vocabulaire</td>
                    <td><a href="vak.php?id=1" class="text-blue-500 hover:underline">Frans</a></td>
                    <td>2022-11-5</td>
                    <td class="text-green-500">17</td>
                    <td>20</td>
                    <td>
                        <a href="resultaat-aanpassen.php?id=1" class="text-orange-500 hover:underline">aanpassen</a>
                        <a href="resultaat-verwijderen.php?id=1" class="text-red-500 hover:underline">verwijderen</a>
                    </td>
                </tr>

                <!-- ... -->

            </tbody>
        </table>
    </div>

</body>

</html>