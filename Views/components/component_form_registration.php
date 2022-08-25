<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="text" name="type" value="registration" hidden>
    <input type="text" name="name" value="name" placeholder="name">
    <input type="mail" name="mail" value="mail" placeholder="mail">
    <input type="text" name="password" value="password" placeholder="password">
    <input type="text" name="password_verification" value="password_verification" placeholder="password verification">
    <button type="submit">submit</button>
</form>