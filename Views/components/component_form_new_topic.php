<?php
if (isset($_SESSION["id"]) == false) {
?>
    <p>NOT CONNECTED</p>
<?php
}
?>

<?php
if (isset($_SESSION["id"])) {
?>
    <form class="flex col_100" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
        <input class="f_l col_2" type="text" name="topic_name" value="" placeholder="Topic name">
        <input class="f_l col_7" type="text" name="comment_text" value="" placeholder="Comment">
        <button class="admin_btn btn f_l col_1" type="submit">Submit</button>
    </form>
<?php
}
?>