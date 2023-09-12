<div>
    <label for="voornaam" class="font-semibold">Voornaam</label>
    <input name="voornaam" value="<?php echo $_POST['voornaam'] ?? '' ?>" type="text" id="voornaam" class="block w-full p-4 bg-neutral-100">
    <?php if (isset($foutmeldingen['voornaam'])) : ?>
        <p class="text-red-500"><?php echo $foutmeldingen['voornaam'] ?></p>
    <?php endif ?>
</div>
<div>
    <label for="naam" class="font-semibold">Naam</label>
    <input name="naam" value="<?php echo $_POST['naam'] ?? '' ?>" type="text" id="naam" class="block w-full p-4 bg-neutral-100">
    <?php if (isset($foutmeldingen['naam'])) : ?>
        <p class="text-red-500"><?php echo $foutmeldingen['naam'] ?></p>
    <?php endif ?>
</div>