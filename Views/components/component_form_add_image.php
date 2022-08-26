<!-- <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
    <button type="submit">submit</button>
</form> -->
<?php
$dir    = '../Views/images';
$files = scandir($dir, 1);

// echo "<pre>";
// print_r($files);
// echo "</pre>";

unset($files[count($files) - 1]);
unset($files[count($files) - 1]);

// echo "<pre>";
// print_r($files);
// echo "</pre>";
?>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <select name="image" id="image">
        <?php
        for ($i = 0; $i < count($files); $i++) {
        ?>
            <option value=<?= $files[$i] ?>><?= $files[$i] ?></option>
        <?php
        }
        ?>
    </select>
    <!-- <img src="../Views/images/<?php //$files[$i] ?>" alt=""> -->
    <button type="submit">SUBMIT</button>
</form>