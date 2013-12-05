<?php
/**
 *
 * Package: hmvc
 * Filename: form.php
 * Author: solidstunna101
 * Date: 04/12/13
 * Time: 17:33
 *
 */
?>

<?php
    echo validation_errors('<p style="color: red">', '</p>');

    echo form_open('tasks/submit');

    echo "Title";
    echo form_input('title', $title);

    echo "<br />";
    echo "Priority";
    echo form_input('priority', $priority);

    echo "<br />";

    echo "<br />";

    echo form_submit('submit', 'Submit');

    echo form_close();
?>