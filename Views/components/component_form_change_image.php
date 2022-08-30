<?php
$dir    = '../Views/images';
$files = scandir($dir, 1);
?>

<form class="" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <select class="form_change_img_select" name="image" id="image">
        <?php
        for ($i = 0; $i < count($files) - 2; $i++) {
        ?>
        <option value=<?= $files[$i] ?>><?= $files[$i] ?></option>
        <?php
        }
        ?>
    </select>
    <button class="form_change_img_btn" type="submit">Submit</button>
</form>