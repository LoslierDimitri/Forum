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

    <link rel="stylesheet" href="/Forum/Views/css/style_form_new_topic.css">
    <link rel="stylesheet" href="/Forum/Views/css/style_topic.css">
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

    <div class="topic_group">
        <?php
        for ($i = count($Comment_table) - 1; $i >= 0; $i--) {
        ?>
        <div class="flex">
            <div class="comment_l col_7">
                <?php
                    if (isset($_SESSION["type"]) && $_SESSION["type"] == "a") {
                    ?>
                <p>id: <?= $Comment_table[$i]->id ?></p>
                <?php
                    }
                    ?>
                <p>date: <?= $Comment_table[$i]->date ?></p>
                <p> text: <?= $Comment_table[$i]->text ?></p>

                <!-- id_user: <? //= $Comment_table[$i]->id_user 
                                    ?></p> -->
            </div>
            <div class="comment_r col_3">
                <?php
                    if (isset($_SESSION["type"]) && $_SESSION["type"] == "a") {
                    ?>
                <p class="flex jc_c m_a">ID: <?= $Comment_table[$i]->User->id ?></p>
                <?php
                    }
                    ?>
                <!-- <p>IMAGE:</p> -->
                <img class="img_comment flex jc_c m_a"
                    src="../Views/images/<?= $Comment_table[$i]->User->image[0]["image"] ?>" alt="">
                <p class="flex jc_c m_a"><?= $Comment_table[$i]->User->name[0]["name"] ?></p>
                <!-- <p>MAIL: <? //= $Comment_table[$i]->User->mail[0]["mail"] 
                                    ?></p> -->
                <?php
                    if ($Comment_table[$i]->User->type[0]["type"] == "a") {
                    ?>
                <p class="flex jc_c m_a">Administrator</p>
                <?php
                    }
                    ?>
                <!-- <p>TYPE: <? //= $Comment_table[$i]->User->type[0]["type"] 
                                    ?></p> -->
                <!-- <p>PASSWORD: <? //= $Comment_table[$i]->User->password[0]["password"] 
                                        ?></p> -->
            </div>
        </div>
        <?php
        }
        ?>
    </div>

    <?php
    $path = $_SERVER["DOCUMENT_ROOT"];
    $path_new = $path . "./Forum/Views/components/component_footer.php";
    include($path_new);
    ?>
</body>

</html>