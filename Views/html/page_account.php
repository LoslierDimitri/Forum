<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum account</title>
</head>

<body>
    <?php
    $path = $_SERVER["DOCUMENT_ROOT"];
    $path_new = $path . "./Forum/Views/components/component_navbar.php";
    include($path_new);
    ?>

    <p>ID: <?= $User->id ?></p>
    <p>IMAGE:</p>
    <img src="../Views/images/<?= $User->image[0]["image"] ?>" alt="">
    <p>IMAGE SELECTION:</p>
    <?php
    $path = $_SERVER["DOCUMENT_ROOT"];
    $path_new = $path . "./Forum/Views/components/component_form_add_image.php";
    include($path_new);
    ?>
    <p>NAME: <?= $User->name[0]["name"] ?></p>
    <p>MAIL: <?= $User->mail[0]["mail"] ?></p>
    <p>TYPE: <?= $User->type[0]["type"] ?></p>
    <p>PASSWORD: <?= $User->password[0]["password"] ?></p>

    <?php
    $path = $_SERVER["DOCUMENT_ROOT"];
    $path_new = $path . "./Forum/Views/components/component_footer.php";
    include($path_new);
    ?>

    <?php
    ?>
</body>

</html>