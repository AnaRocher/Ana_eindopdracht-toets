<?php 

include './includes/database.php';

$query = $pdo->prepare('SELECT * FROM resultaten');
$query->execute([]);
$resultaten = $query->fetchAll();

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

        <h2 class=""></h2>

        <table class="w-full">
            <thead class="bg-neutral-300">
                <tr>
                    <th>Onderwerp</th>
                    <th>Vak</th>
                    <th>Datum</th>
                    <th>Aantal ingestuurd</th>
                    <th>Gemiddelde score</th>
                    <th>Maximum cijfer</th>
                    <th>Handelingen</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php foreach($toetsen as $onderwerp): ?>
                <?php        
                    $query = $pdo->prepare('SELECT * FROM vakken WHERE id=:id');
                    $query->execute([
                        'id' => $onderwerp['vak_id']
                    ]);
                    $vak = $query->fetch();
                    ?>
                <tr>
                    <td><a href="toets.php?id=<?php echo $onderwerp['id']?>"
                            class="text-blue-500 hover:underline"><?php echo $onderwerp['onderwerp']?></a></td>
                    <td><a href="vak.php?id=<?php echo $onderwerp['vak_id']?>"
                            class="text-blue-500 hover:underline"><?php echo $vak['naam'] ?></a></td>
                    <td><?php echo $onderwerp['datum']?></td>
                    <td>4</td>
                    <td class="text-red-500">3</td>
                    <td><?php echo $onderwerp['max']?></td>
                    <td>
                        <a href="toets-aanpassen.php?id=1" class="text-orange-500 hover:underline">aanpassen</a>
                        <a href="toets-verwijderen.php?id=1" class="text-red-500 hover:underline">verwijderen</a>
                    </td>
                </tr>
                <!-- ... -->
                <?php endforeach; ?>


            </tbody>
        </table>
    </div>

</body>

</html>