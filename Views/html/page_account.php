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

    <link rel="stylesheet" href="/Forum/Views/css/style_account.css">
    <link rel="stylesheet" href="/Forum/Views/css/style_form_change_image.css">
    <title>Forum account</title>
</head>

<body>

    <?php
    $path = $_SERVER["DOCUMENT_ROOT"];
    $path_new = $path . "./Forum/Views/components/component_navbar.php";
    include($path_new);
    ?>


    <img class="flex jc_c m_a account_img" src="../Views/images/<?= $User->image[0]["image"] ?>" alt="">
    <div class="flex jc_c m_a">
        <div class="account_info">
            <?php
            if (isset($_SESSION["type"]) && $_SESSION["type"] == "a") {
            ?>
            <p>ID: <?= $User->id ?></p>
            <?php
            }
            ?>
            <p>Change your profile picture:</p>
            <?php
            $path = $_SERVER["DOCUMENT_ROOT"];
            $path_new = $path . "./Forum/Views/components/component_form_change_image.php";
            include($path_new);
            ?>
            <p>Name: <?= $User->name[0]["name"] ?></p>
            <p>Mail: <?= $User->mail[0]["mail"] ?></p>
            <?php
            if ($User->type[0]["type"] == "a") {
            ?>
            <p>Type: Administrator</p>
            <?php
            } else {
            ?>
            <p>Type: User</p>
            <?php
            }
            ?>
            <!-- <p>PASSWORD: <? //= $User->password[0]["password"] 
                                ?></p> -->
        </div>
    </div>
    <?php
    $path = $_SERVER["DOCUMENT_ROOT"];
    $path_new = $path . "./Forum/Views/components/component_footer.php";
    include($path_new);
    ?>

    <?php
    ?>
</body>

</html>