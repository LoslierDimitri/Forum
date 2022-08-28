<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <?php
    for ($i = count($Topic_table) - 1; $i >= 0; $i--) {
    ?>
        <p>id: <?= $Topic_table[$i]->id ?> <a href="../Controllers/controller_page_topics.php?topic_id=<?= $Topic_table[$i]->id ?>">nom: <?= $Topic_table[$i]->name ?></a>, date: <?= $Topic_table[$i]->date ?></p>
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