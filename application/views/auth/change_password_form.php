<?php
$old_password = array(
	'name'	=> 'old_password',
	'id'	=> 'old_password',
	'value' => set_value('old_password'),
	'size' 	=> 30,
);
$new_password = array(
	'name'	=> 'new_password',
	'id'	=> 'new_password',
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
);
$confirm_new_password = array(
	'name'	=> 'confirm_new_password',
	'id'	=> 'confirm_new_password',
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size' 	=> 30,
);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="bootstrap.css" rel="stylesheet">
        <title>Change Email Address</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="span6 offset3">
                    <div class="well">
                        <center>
                            <?php echo form_open($this->uri->uri_string()); ?>
                            <div class="control-group">
                                <?php echo form_label('Old Password', $old_password['id'], array('class' => 'control-label')); ?>
                                <div class="controls">
                                    <?php echo form_error('old_password'); ?>                                
                                    <?php echo form_input($old_password); ?>
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <?php echo form_label('New Password', $new_password['id'], array('class' => 'control-label')); ?>
                                <div class="controls">
                                    <?php echo form_error('new_password'); ?>                                
                                    <?php echo form_input($new_password); ?>
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <?php echo form_label('Confirm New Password', $confirm_new_password['id'], array('class' => 'control-label')); ?>
                                <div class="controls">
                                    <?php echo form_error('confirm_new_password'); ?>                                
                                    <?php echo form_input($confirm_new_password); ?>
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <?php echo form_submit('change', 'Change Password'); ?>
                            <?php echo form_close(); ?>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>