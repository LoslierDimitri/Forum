<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum topic</title>
</head>

<body>
    
    <?php
    $path = $_SERVER["DOCUMENT_ROOT"];
    $path_new = $path . "./Forum/Views/components/component_navbar.php";
    include($path_new);
    ?>

    <?php
    $path = $_SERVER["DOCUMENT_ROOT"];
    $path_new = $path . "./Forum/Views/components/component_form_new_comment.php";
    include($path_new);
    ?>

    <?php
    for ($i = count($Comment_table) - 1; $i >= 0; $i--) {
    ?>
        <p>---------------------------------------------------------------------------------------------------------</p>
        <p>id: <?= $Comment_table[$i]->id ?> text: <?= $Comment_table[$i]->text ?>, date: <?= $Comment_table[$i]->date ?>, id_user: <?= $Comment_table[$i]->id_user ?></p>

        <p>ID: <?= $Comment_table[$i]->User->id ?></p>
        <p>IMAGE:</p>
        <img src="../Views/images/<?= $Comment_table[$i]->User->image[0]["image"] ?>" alt="">
        <p>NAME: <?= $Comment_table[$i]->User->name[0]["name"] ?></p>
        <p>MAIL: <?= $Comment_table[$i]->User->mail[0]["mail"] ?></p>
        <p>TYPE: <?= $Comment_table[$i]->User->type[0]["type"] ?></p>
        <p>PASSWORD: <?= $Comment_table[$i]->User->password[0]["password"] ?></p>
        <p>---------------------------------------------------------------------------------------------------------</p>
    <?php
    }
    ?>

    <?php
    $path = $_SERVER["DOCUMENT_ROOT"];
    $path_new = $path . "./Forum/Views/components/component_footer.php";
    include($path_new);
    ?>
</body>

</html>