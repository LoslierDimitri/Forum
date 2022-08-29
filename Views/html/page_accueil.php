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
    <title>Forum accueil</title>
</head>

<body>

    <?php
    $path = $_SERVER["DOCUMENT_ROOT"];
    $path_new = $path . "./Forum/Views/components/component_navbar.php";
    include($path_new);
    ?>

    <?php
    $path = $_SERVER["DOCUMENT_ROOT"];
    $path_new = $path . "./Forum/Views/components/component_form_new_topic.php";
    include($path_new);
    ?>

    <div class="topic_group">
        <?php
        for ($i = count($Topic_table) - 1; $i >= 0; $i--) {
        ?>
        <a href="../Controllers/controller_page_topics.php?topic_id=<?= $Topic_table[$i]->id ?>">
            <div class="topic">
                <?php
                    if (isset($_SESSION["type"]) && $_SESSION["type"] == "a") {
                    ?>
                <p> ID: <?= $Topic_table[$i]->id ?></p>
                <p>Topic: <?= $Topic_table[$i]->name ?></p>
                <p>Date: <?= $Topic_table[$i]->date ?></p>
                <?php
                    } else {
                    ?>

                <p>Topic: <?= $Topic_table[$i]->name ?></p>
                <p>Date: <?= $Topic_table[$i]->date ?></p>
                <?php
                    }
                    ?>
            </div>
        </a>
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