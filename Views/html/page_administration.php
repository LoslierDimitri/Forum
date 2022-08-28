<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum administration</title>
</head>

<body>

    <?php
    $path = $_SERVER["DOCUMENT_ROOT"];
    $path_new = $path . "./Forum/Views/components/component_navbar.php";
    include($path_new);
    ?>

    <?php
    $path = $_SERVER["DOCUMENT_ROOT"];
    $path_new = $path . "./Forum/Views/components/component_form_delete_user.php";
    include($path_new);
    ?>
    <?php
    $path = $_SERVER["DOCUMENT_ROOT"];
    $path_new = $path . "./Forum/Views/components/component_form_delete_topic.php";
    include($path_new);
    ?>
    <?php
    $path = $_SERVER["DOCUMENT_ROOT"];
    $path_new = $path . "./Forum/Views/components/component_form_delete_comment.php";
    include($path_new);
    ?>

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