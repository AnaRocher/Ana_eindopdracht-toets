<?php 

$foutmeldingen = [];
include 'includes/database.php';

if ($_POST) {
 
    if (empty($foutmeldingen)) {
        $query = $pdo->prepare('DELETE FROM toetsen WHERE id=:id');
        $query->execute([
            'id' => $_GET['id']
        ]);
        header('location:toetsen.php');
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
            <a href="index.php" class="uppercase text-blue-500 hover:underline">Toetsen</a> &raquo;
            Ben je zeker dat je deze toets wilt verwijderen?
        </h2>

        <form method="post" class="grid gap-4">
            <div class="flex gap-4 items-center">
                <input name="verwijderen" type="submit" class="block bg-red-500 text-red-100 text-center p-4"
                    value="Ja, verwijder!">
                <a href="index.php" class="text-blue-500 hover:underline">Annuleer</a>
            </div>
        </form>
    </div>

</body>

</html>