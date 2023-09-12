<?php 
include 'includes/database.php';

$query = $pdo->prepare('SELECT * FROM vakken');
$query->execute([]);
$vakken = $query->fetchAll();

$query = $pdo->prepare('SELECT * FROM toetsen');
$query->execute([]);
$toetsen = $query->fetchAll();


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
            <a href="vakken.php" class="uppercase text-blue-500 hover:underline">Vakken</a> &raquo;
            <b class="uppercase"><?php if(isset($_GET['id'])): ?>
                <?php echo $_POST['vak_naam']; ?>
                <?php endif ?></b>
        </h2>

        <p>Dit zijn alle toetsen voor het vak <b class="font-semibold">Wiskunde.</b></p>

        <table class="w-full mt-4">
            <thead class="bg-neutral-300">
                <tr>
                    <th>Onderwerp</th>
                    <th>Datum</th>
                    <th>Aantal ingestuurd</th>
                    <th>Gemiddelde score</th>
                    <th>Maximum cijfer</th>
                    <th>Handelingen</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <td>Tafels</td>
                    <td>2022-12-4</td>
                    <td>4</td>
                    <td class="text-red-500">3</td>
                    <td>10</td>
                    <td>
                        <a href="toets-aanpassen.php?id=1" class="text-orange-500 hover:underline">aanpassen</a>
                        <a href="toets-verwijderen.php?id=1" class="text-red-500 hover:underline">verwijderen</a>
                    </td>
                </tr>

                <!-- ... -->

            </tbody>
        </table>
    </div>

</body>

</html>