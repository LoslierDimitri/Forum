<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="text" name="delete" value="comment" hidden>
    <p class="form_delete_label">Comment ID:</p>
    <input class="form_delete_input" type="text" name="comment" value="" placeholder="Comment ID">
    <p class="form_delete_label">Comment ID verification:</p>
    <input class="form_delete_input" type="text" name="comment_verification" value=""
        placeholder="Comment ID verification">
    <button class="form_delete_btn" type="submit">Submit</button>
</form>