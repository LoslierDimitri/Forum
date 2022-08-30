<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="text" name="delete" value="user" hidden>
    <p class="form_delete_label">User NAME:</p>
    <input class="form_delete_input" type="text" name="user" value="" placeholder="User NAME">
    <p class="form_delete_label">User NAME verification:</p>
    <input class="form_delete_input" type="text" name="user_verification" value="" placeholder="User NAME verification">
    <button class="form_delete_btn" type="submit">Submit</button>
</form>