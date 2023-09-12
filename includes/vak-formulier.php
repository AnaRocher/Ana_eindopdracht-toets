<div>
    <label for="naam" class="font-semibold">Naam</label>
    <input name="naam" value="<?php echo $_POST['naam'] ?? '' ?>" type="text" id="naam" class="block w-full p-4 bg-neutral-100">
    <?php if (isset($foutmeldingen['naam'])) : ?>
        <p class="text-red-500"><?php echo $foutmeldingen['naam'] ?></p>
    <?php endif ?>
</div>