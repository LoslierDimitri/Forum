<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="text" name="delete" value="comment" hidden>
    <input type="text" name="comment" value="comment" placeholder="comment_id">
    <input type="text" name="comment_verification" value="comment_verification" placeholder="comment_id_verification">
    <button type="submit">submit</button>
</form>