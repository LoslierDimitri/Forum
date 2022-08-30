<div class="nav flex col_10">
    <div class="flex col_10">
        <a class="nav_btn nav_btn_blue f_l" href="/Forum/Controllers/controller_page_accueil.php">MENU</a>
    </div>

    <div class="flex">
        <?php
        if (isset($_SESSION["id"]) == false) {
        ?>
        <a class="nav_btn nav_btn_blue f_l"
            href="/Forum/Controllers/controller_page_connection_registration.php">CONNECTION</a>
        <?php
        }
        ?>

        <?php
        if (isset($_SESSION["id"])) {
        ?>
        <a class="nav_btn nav_btn_blue f_l" href="/Forum/Controllers/controller_page_account.php">ACCOUNT</a>
        <a class="nav_btn nav_btn_blue f_l" href="/Forum/Controllers/controller_page_deconnection.php">DECONNECTION</a>
        <?php
            if ($_SESSION["type"] == "a") {
            ?>
        <a class="nav_btn nav_btn_red f_l" class="jc_r"
            href="/Forum/Controllers/controller_page_administration.php">ADMINISTRATION</a>
        <?php
            }
            ?>
        <?php
        }
        ?>
    </div>
</div>