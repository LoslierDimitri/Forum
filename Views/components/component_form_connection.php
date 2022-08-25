<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="text" name="type" value="connection" hidden>
    <input type="text" name="name" value="name" placeholder="name">
    <input type="text" name="password" value="password" placeholder="password">
    <button type="submit">submit</button>
</form>