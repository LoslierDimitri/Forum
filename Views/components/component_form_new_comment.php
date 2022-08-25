<form action="<?= $_SERVER['PHP_SELF'] . "?topic_id=" . $topic_id . "" ?>" method="POST">
    <input type="text" name="comment_text" value="comment_text" placeholder="comment text">
    <button type="submit">submit</button>
</form>