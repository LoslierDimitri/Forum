<?php
$dir    = '../Views/images';
$files = scandir($dir, 1);
?>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <select name="image" id="image">
        <?php
        for ($i = 0; $i < count($files) - 2; $i++) {
        ?>
            <option value=<?= $files[$i] ?>><?= $files[$i] ?></option>
        <?php
        }
        ?>
    </select>
    <button type="submit">SUBMIT</button>
</form>