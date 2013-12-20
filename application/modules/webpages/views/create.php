<?php
/**
 *
 * Package: hmvc
 * Filename: create.php
 * Author: solidstunna101
 * Date: 20/12/13
 * Time: 11:21
 *
 */
?>
<h2>Create New Page</h2>
<?php
echo validation_errors("<p><span class='label label-danger'>","</span></p>");
echo form_open('webpages/submit/'.$update_id); ?>
<table class="table table-bordered">
    <tr>
        <td>Page Headline:
            <?php $page_headline = array('class' => 'form-control', 'name' => 'page_headline', 'id' => 'page_headline', 'value' => $page_headline);
                echo form_input($page_headline);
            ?>

        </td>
        <td>Page Title
            <?php $page_title = array('class' => 'form-control', 'name' => 'page_title', 'id' => 'page_title', 'value' => $page_title);
            echo form_input($page_title);
            ?>
        </td>
    </tr>
    <tr>
        <td>Description
            <?php $description = array('class' => 'form-control', 'name' => 'description', 'id' => 'description', 'value' => $description);
            echo form_input($description);
            ?></td>
    </tr>
    <tr>
        <td>Keywords
            <?php $keywords = array('class' => 'form-control', 'name' => 'keywords', 'id' => 'keywords', 'value' => $keywords);
            echo form_input($keywords);
            ?></td>
    </tr>
    <tr>
        <td>Page Content
            <?php $page_content = array('class' => 'form-control', 'name' => 'page_content', 'id' => 'page_content', 'value' => $page_content);
            echo form_textarea($page_content);
            ?></td>
    </tr>
    <tr>
    <td><?php
        $submit = array('name' => 'submit', 'value' => 'Submit', 'class' => 'btn btn-info');
        echo form_submit($submit);
        ?></td>
    </tr>
    <?php
        echo form_close();
    ?>
</table>