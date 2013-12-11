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
echo validation_errors("<p style='color: red;'>", "</p>");
?>
<div class="col-lg-4">
    <?php $attributes = array('role' => 'form', 'id' => 'login'); ?>
    <?php $form_label = array('class' => 'control-label');?>
    <?php $form_input = array('class' => 'form-control', 'id' => 'username', 'placeholder' => 'Enter Your Username'); ?>
    <?php $form_password = array('class' => 'form-control', 'id' => 'password', 'placeholder' => 'Enter Your Password'); ?>
    <?php $form_submit = array('name' => 'submit', 'value' => 'Submit', 'class' => 'btn btn-info'); ?>
    <?php echo form_open('users/submit', $attributes); ?>

    <div class="form-group">
        <?php
            echo form_label('username', 'username');
            echo form_input($form_input);
        ?>

    </div>

    <div class="form-group">
        <?php
        echo form_label('password', 'password');
        echo form_password($form_password);
        ?>
    </div>

    <?php echo form_submit($form_submit); ?>

    <?php echo form_close(); ?>


</div>


