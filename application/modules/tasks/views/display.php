<?php
/**
 *
 * Package: hmvc
 * Filename: display.php
 * Author: solidstunna101
 * Date: 02/12/13
 * Time: 10:10
 *
 */

?>

<h1>Your Tasks</h1>

<?php
    foreach ($query->result() as $row){
        echo "<h2>" .$row->title. "</h2>";
    }

?>
