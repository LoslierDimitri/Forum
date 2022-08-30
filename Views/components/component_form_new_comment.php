<?php
if (isset($_SESSION["id"]) == false) {
?>
<p class="form_not_connected flex jc_c">You need to be connected to write a new comment</p>
<?php
}
?>

<?php
if (isset($_SESSION["id"])) {
?>
<form class="flex col_100" action="<?= $_SERVER['PHP_SELF'] . "?topic_id=" . $topic_id . "" ?>" method="POST">
    <input class="f_l col_2 form_input" type="text" name="comment_text" value="" placeholder="Comment">
    <button class="form_btn btn f_l" type="submit">Submit</button>
</form>
<?php
}
?>