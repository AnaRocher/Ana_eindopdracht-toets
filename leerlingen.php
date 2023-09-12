<?php 
include 'includes/database.php';

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

        <h2 class="font-semibold text-2xl uppercase">Leerlingen</h2>

        <p class="flex gap-4 my-4">
            <a href="leerling-toevoegen.php" class="bg-green-500 text-green-100 px-2 py-1">Nieuwe leerling toevoegen</a>
        </p>

        <table class="w-full">
            <thead class="bg-neutral-300">
                <tr>
                    <th>Voornaam</th>
                    <th>Naam</th>
                    <th>Handelingen</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php foreach($leerlingen as $leerling): ?>
                <tr>
                    <td <?php echo $leerling['id'] ?>><?php echo $leerling['voornaam']?></td>
                    <td <?php echo $leerling['id'] ?>><?php echo $leerling['naam']?></td>

                    <td>
                        <a href="leerling.php?id=<?php echo $leerling['id']?>"
                            class="text-blue-500 hover:underline">resultaten bekijken</a>
                        <a href="leerling-aanpassen.php?id=<?php echo $leerling['id']?>"
                            class="text-orange-500 hover:underline">aanpassen</a>
                        <a href="leerling-verwijderen.php?id=<?php echo $leerling['id']?>"
                            class="text-red-500 hover:underline">verwijderen</a>
                    </td>
                </tr>
                <?php endforeach ?>
                <!-- ... -->

            </tbody>
        </table>
    </div>

</body>

</html>