<?php
/**
 *
 * Package: hmvc
 * Filename: loginform.php
 * Author: solidstunna101
 * Date: 09/12/13
 * Time: 15:27
 *
 */
?>

<h1>Login Form</h1>

<?php
echo validation_errors("<p>", "</p>");
?>

<?php
    echo form_open('users/submit');

    echo "Username";
    echo form_input('username', '');
    echo "<br />";

    echo "Password";
    echo form_password('pword', '');
    echo "<br />";

    echo form_submit('submit', 'Submit');
    echo form_close();
?>
