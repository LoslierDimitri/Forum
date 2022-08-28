<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="text" name="delete" value="user" hidden>
    <input type="text" name="user" value="user" placeholder="user_name">
    <input type="text" name="user_verification" value="user_verification" placeholder="user_name_verification">
    <button type="submit">submit</button>
</form>