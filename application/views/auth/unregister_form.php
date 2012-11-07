<?php
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'size'	=> 30,
);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.1/css/bootstrap-combined.min.css" rel="stylesheet">
        <title>Delete Account</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="span6 offset3">
                    <div class="well">
                        <center>
							<h2>Delete Account</h2>
                            <?php echo form_open($this->uri->uri_string()); ?>
                            <div class="control-group">
                                <?php echo form_label('Password', $password['id'], array('class' => 'control-label')); ?>
                                <div class="controls">
                                    <?php echo form_error('password'); ?>                                
                                    <?php echo form_input($password); ?>
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <?php echo form_submit('cancel', 'Delete Account', 'class="btn btn-danger"'); ?>
                            <?php echo form_close(); ?>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>