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
echo anchor('tasks/create', '<p>Create New');

?>

<?php
    foreach ($query->result() as $row){
        echo "<h2>" .$row->title. "</h2>";
    }

    echo "<hr>";

    $name = "omatsola";

    //the code below calls another modules functions
    $this->load->module('nofun', $name);
    $this->nofun->sayhello($name);

    echo "<hr>";

    //second method of calling other modules
   // echo Modules::run('nofun/sayhello', $name);


?>
