<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="text" name="delete" value="topic" hidden>
    <p class="form_delete_label">Topic ID:</p>
    <input class="form_delete_input" type="text" name="topic" value="" placeholder="Topic ID">
    <p class="form_delete_label">Topic ID verification ID:</p>
    <input class="form_delete_input" type="text" name="topic_verification" value="" placeholder="Topid ID verification">
    <button class="form_delete_btn" type="submit">Submit</button>
</form>