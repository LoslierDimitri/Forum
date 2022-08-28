<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="text" name="delete" value="topic" hidden>
    <input type="text" name="topic" value="topic" placeholder="topic_id">
    <input type="text" name="topic_verification" value="topic_verification" placeholder="topic_id_verification">
    <button type="submit">submit</button>
</form>