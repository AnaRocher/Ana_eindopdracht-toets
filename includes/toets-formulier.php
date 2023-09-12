<div>
    <label for="onderwerp" class="font-semibold">Onderwerp</label>
    <input name="onderwerp" value="<?php echo $_POST['onderwerp'] ?? '' ?>" type="text" id="onderwerp"
        class="block w-full p-4 bg-neutral-100">
    <?php if (isset($foutmeldingen['onderwerp'])) : ?>
    <p class="text-red-500"><?php echo $foutmeldingen['onderwerp'] ?></p>
    <?php endif ?>
</div>
<div>
    <label for="vak_id" class="font-semibold">Vak</label>
    <select name="vak_id" id="vak_id" class="p-4 w-full">
        <?php foreach($vakken as $vak): ?>
        <option <?php if (isset($_POST['vak_id']) && $_POST['vak_id'] == $vak['id']) { echo 'selected'; } ?>
            value="<?php echo $vak['id'] ?>"><?php echo $vak['naam'] ?></option>
        <?php endforeach ?>
        <!-- ... -->
    </select>
    <?php if (isset($foutmeldingen['vak_id'])) : ?>
    <p class="text-red-500"><?php echo $foutmeldingen['vak_id'] ?></p>
    <?php endif ?>
</div>
<div>
    <label for="datum" class="font-semibold">Datum</label>
    <input name="datum" value="<?php echo $_POST['datum'] ?? date('Y-m-d') ?>" type="date" id="datum"
        class="block w-full p-4 bg-neutral-100">
    <?php if (isset($foutmeldingen['datum'])) : ?>
    <p class="text-red-500"><?php echo $foutmeldingen['datum'] ?></p>
    <?php endif ?>
</div>
<div>
    <label for="max" class="font-semibold">Max cijfer</label>
    <input name="max" value="<?php echo $_POST['max'] ?? '10' ?>" min="1" type="number" id="max"
        class="block w-full p-4 bg-neutral-100">
    <?php if (isset($foutmeldingen['max'])) : ?>
    <p class="text-red-500"><?php echo $foutmeldingen['max'] ?></p>
    <?php endif ?>
</div>