<form method="POST">
    Jméno: <input type="text" name="firstName"><br>
    Heslo: <input type="password" name="secret"><br>
    <input type="checkbox" name="optIn"> Souhlasím<br>
    <input type="submit"><br>
</form>

<?php
if (!empty($_POST)) {
    var_dump($_POST);
}
