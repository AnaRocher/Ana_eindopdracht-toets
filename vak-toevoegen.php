<?php 

$foutmeldingen = [];


include 'includes/database.php';

if ($_POST) {
    include 'includes/vak-validatie.php';
    
    if (empty($foutmeldingen)) {
        $query = $pdo->prepare('INSERT INTO vakken (naam) VALUES (:input)');
        $query->execute([
            'input' => $_POST['naam']
        ]);
        header('location:vakken.php');
        exit;
    }
}

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
            toevoegen
        </h2>

        <form method="post" class="grid gap-4">
            <?php include 'includes/vak-formulier.php' ?>
            <div class="flex gap-4 items-center">
                <input type="submit" class="block bg-green-500 text-green-100 text-center p-4" value="Toevoegen">
                <a href="vakken.php" class="text-blue-500 hover:underline">Annuleer</a>
            </div>
        </form>
    </div>

</body>

</html>