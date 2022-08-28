<div>
    <a href="/Forum/Controllers/controller_page_accueil.php">MENU</a>

    <?php
    if (isset($_SESSION["id"]) == false) {
    ?>
        <a href="/Forum/Controllers/controller_page_connection_registration.php">CONNECTION</a>
    <?php
    }
    ?>

    <?php
    if (isset($_SESSION["id"])) {
    ?>
        <a href="/Forum/Controllers/controller_page_account.php">ACCOUNT</a>
        <a href="/Forum/Controllers/controller_page_deconnection.php">DECONNECTION</a>
        <?php
        if ($_SESSION["type"] == "a") {
        ?>
            <a href="/Forum/Controllers/controller_page_administration.php">ADMINISTRATION</a>
        <?php
        }
        ?>
    <?php
    }
    ?>
</div>