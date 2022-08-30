<form class="flex col_10 f_c" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="text" name="type" value="connection" hidden>
    <p class="form_connection_label">Name:</p>
    <input class="form_connection_input" type="text" name="name" value="" placeholder="Name">
    <p class="form_connection_label">Password:</p>
    <input class="form_connection_input" type="password" name="password" value="" placeholder="Password">
    <button class="form_connection_btn" type="submit">Submit</button>
</form>



<!-- <form class="flex c_10" action="<? //= $_SERVER['PHP_SELF']
                                        ?>" method="POST">
    <input type="text" name="type" value="connection" hidden>
    <input class="form_connection_input" type="text" name="name" value="" placeholder="Name">
    <input class="form_connection_input" type="password" name="password" value="" placeholder="Password">
    <button class="form_connection_btn" type="submit">Submit</button>
</form> -->