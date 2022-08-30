<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Forum/Views/css/style_base.css">
    <link rel="stylesheet" href="/Forum/Views/css/style_navbar.css">
    <link rel="stylesheet" href="/Forum/Views/css/style_footer.css">
    <link rel="stylesheet" href="/Forum/Views/css/style_grid.css">

    <link rel="stylesheet" href="/Forum/Views/css/style_form_connection.css">
    <link rel="stylesheet" href="/Forum/Views/css/style_form_registration.css">
    <title>Forum connection registration</title>
</head>

<body>

    <?php
    $path = $_SERVER["DOCUMENT_ROOT"];
    $path_new = $path . "./Forum/Views/components/component_navbar.php";
    include($path_new);
    ?>

    <div class="flex f_r col_10">
        <div class="flex f_c col_5">
            <?php
            $path = $_SERVER["DOCUMENT_ROOT"];
            $path_new = $path . "./Forum/Views/components/component_form_connection.php";
            include($path_new);
            ?>
        </div>
        <div class="flex f_c col_5">
            <?php
            $path = $_SERVER["DOCUMENT_ROOT"];
            $path_new = $path . "./Forum/Views/components/component_form_registration.php";
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
</body>

</html>