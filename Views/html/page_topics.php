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
    for ($i = 0; $i < count($Comment_table); $i++) {
    ?>
        <p>id: <?= $Comment_table[$i]->id ?> text: <?= $Comment_table[$i]->text ?>, date: <?= $Comment_table[$i]->date ?>, id_user: <?= $Comment_table[$i]->id_user ?></p>
    <?php
    }
    ?>

    <?php
    $path = $_SERVER["DOCUMENT_ROOT"];
    $path_new = $path . "./Forum/Views/components/component_form_new_comment.php";
    include($path_new);
    ?>

    <?php
    $path = $_SERVER["DOCUMENT_ROOT"];
    $path_new = $path . "./Forum/Views/components/component_footer.php";
    include($path_new);
    ?>
</body>

</html>