<form class="flex f_c" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <input class="form_registration_input" type="text" name="type" value="registration" hidden>
    <p class="form_registration_label">Name:</p>
    <input class="form_registration_input" type="text" name="name" value="" placeholder="Name">
    <p class="form_registration_label">Mail:</p>
    <input class="form_registration_input" type="email" name="mail" value="" placeholder="Mail">
    <p class="form_registration_label">Password:</p>
    <input class="form_registration_input" type="password" name="password" value="" placeholder="Password">
    <p class="form_registration_label">Password verification:</p>
    <input class="form_registration_input" type="password" name="password_verification" value=""
        placeholder="Password verification">
    <button class="form_registration_btn" type="submit">Submit</button>
</form>