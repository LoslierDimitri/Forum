<?php
if (isset($_SESSION["id"]) == false) {
?>
<p class="form_not_connected flex jc_c">You need to be connected to create a new topic</p>
<?php
}
?>

<?php
if (isset($_SESSION["id"])) {
?>
<form class="flex col_10" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <input class="f_l col_2 form_input" type="text" name="topic_name" value="" placeholder="Topic name">
    <input class="f_l col_4 form_input" type="text" name="comment_text" value="" placeholder="Comment">
    <button class="form_btn f_l" type="submit">Submit</button>
</form>
<?php
}
?>