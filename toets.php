<?php 

// Er zijn twee submits in het formulier.
// Als je de "submits" een "name" geeft kan je bij de verwerking verschillende handelingen uitvoeren.
include 'includes/database.php';

$foutmeldingen = [];


if ($_POST) {
    if (isset($_POST['leegmaken'])) {
        $query = $pdo->prepare('SELECT * FROM toetsen');
        $query->execute([]);
        $toets = $query->fetchAll();
    }

    if (isset($_POST['toevoegen'])) {
        if (empty($_POST['cijfer'])) {
            $foutmeldingen['cijfer'] = "Je moet een cijfer invullen.";
        }

        if (empty($foutmeldingen)) {

        }
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

        <h2 class="font-semibold text-2xl">Toets: <a href="vak.php?id=<?php echo $vak['id']?>"
                class="text-blue-500 hover:underline uppercase <?php echo $vak['id'] ?>">Wiskunde</a> &raquo; <b
                class="uppercase">Tafels</b>
        </h2>

        <p class="mb-4 text-neutral-500">Datum: 2022-05-12</p>

        <p>Dit zijn alle resultaten voor de toets <b class="font-semibold">Tafels</b> voor het vak <a
                href="vak.php?id=1" class="text-blue-500 hover:underline ">Wiskunde</a>.</p>

        <form method="post">
            <table class="w-full mt-4">
                <thead class="bg-neutral-300">
                    <tr>
                        <th>Leerling</th>
                        <th>Cijfer</th>
                        <th>Maximum cijfer</th>
                        <th>Handelingen</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td class="py-2">John Doe</td>
                        <td class="text-red-500">4</td>
                        <td>10</td>
                        <td>
                            <a href="resultaat-aanpassen.php?id=1" class="text-orange-500 hover:underline">aanpassen</a>
                            <a href="resultaat-verwijderen.php?id=1"
                                class="text-red-500 hover:underline">verwijderen</a>
                        </td>
                    </tr>

                    <!-- ... -->

                    <!-- DEZE RIJ MOET JE LATEN STAAN! -->
                    <tr class="border-t border-neutral-200 bg-neutral-100">
                        <td class="p-2">
                            <select name="leerling_id" id="leerling_id" class="bg-neutral-200 p-2 w-full text-center">
                                <!-- <option value="1">John Doe</option> -->
                                <option value="2"
                                    <?php echo (isset($_POST['leerling_id']) && $_POST['leerling_id'] == 1) ? 'selected' : '' ?>>
                                    Jane Doe</option>
                                <!-- ... -->
                            </select>
                        </td>
                        <td>
                            <input type="number" max="10" min="0" value="<?php echo $_POST['cijfer'] ?? '5' ?>"
                                name="cijfer"
                                class="bg-neutral-200 p-2 text-center <?php echo isset($foutmeldingen['cijfer']) ? 'border border-red-500' : '' ?>">
                        </td>
                        <td>
                            10
                        </td>
                        <td>
                            <input name="toevoegen" type="submit"
                                class="bg-green-500 text-green-100 px-2 py-1 cursor-pointer" value="toevoegen">
                        </td>
                    </tr>
                </tbody>
                <tfoot class="text-center bg-neutral-200">
                    <tr class="border-t border-neutral-300">
                        <td class="font-semibold py-4">Gemiddelde score</td>
                        <td class="text-red-500">4</td>
                        <td>10</td>
                        <td><input name="leegmaken"
                                onclick="return confirm('Ben je zeker dat je de resultaten wilt leegmaken?');"
                                type="submit" class="bg-red-500 text-red-100 px-2 py-1 cursor-pointer"
                                value="leegmaken"></td>
                    </tr>
                </tfoot>
            </table>
        </form>
    </div>

</body>

</html>