<?php
/**
 *
 * Package: hmvc
 * Filename: manage.php
 * Author: solidstunna101
 * Date: 19/12/13
 * Time: 19:33
 *
 */
?>

<h2>Content Management System</h2>

<?php
    echo anchor('webpage/create', 'Create New Page');
?>

<table class="table table-bordered">
    <tr><th>Head1</th><th>Head2</th><th>Head3</th></tr>
    <?php
        foreach($query->result() as $row) {

            $edit_url = base_url()."webpages/create/".$row->id;
            $delete_url = base_url()."webpages/deleteconf/".$row->id;
            $page_headline = $row->page_headline;

    ?>
    <tr>
        <td><?php echo $page_headline; ?></td>
        <td><?php echo anchor($edit_url, 'Edit'); ?></td>
        <td><?php echo anchor($delete_url, 'Delete'); ?></td></tr>
    <tr class="warning">...</tr>
    <tr class="danger">...</tr>
    <?php
        }
    ?>
</table>