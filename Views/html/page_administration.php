<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/Forum/Views/css/style_base.css">
    <link rel="stylesheet" href="/Forum/Views/css/style_navbar.css">
    <link rel="stylesheet" href="/Forum/Views/css/style_footer.css">
    <link rel="stylesheet" href="/Forum/Views/css/style_grid.css">

    <link rel="stylesheet" href="/Forum/Views/css/style_form_delete.css">
    <title>Forum administration</title>
</head>

<body>

    <?php
    $path = $_SERVER["DOCUMENT_ROOT"];
    $path_new = $path . "./Forum/Views/components/component_navbar.php";
    include($path_new);
    ?>

    <div class="flex f_r col_10">
        <div class="flex col_3">
            <?php
            $path = $_SERVER["DOCUMENT_ROOT"];
            $path_new = $path . "./Forum/Views/components/component_form_delete_user.php";
            include($path_new);
            ?>
        </div>
        <div class="flex col_3">
            <?php
            $path = $_SERVER["DOCUMENT_ROOT"];
            $path_new = $path . "./Forum/Views/components/component_form_delete_topic.php";
            include($path_new);
            ?>
        </div>
        <div class="flex col_3">
            <?php
            $path = $_SERVER["DOCUMENT_ROOT"];
            $path_new = $path . "./Forum/Views/components/component_form_delete_comment.php";
            include($path_new);
            ?>
        </div>
    </div>

    <p><?= $_SESSION["error"] ?></p>
    <?php
    $_SESSION["error"] = "";
    ?>

    <?php
    $path = $_SERVER["DOCUMENT_ROOT"];
    $path_new = $path . "./Forum/Views/components/component_footer.php";
    include($path_new);
    ?>

    <?php
    ?>
</body>

</html>