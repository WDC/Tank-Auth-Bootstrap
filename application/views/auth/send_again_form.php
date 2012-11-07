<?php
$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> set_value('email'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="bootstrap.css" rel="stylesheet">
        <title>Send Again</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="span6 offset3">
                    <div class="well">
                        <center>
							<h2>Send Again</h2>
                            <?php echo form_open($this->uri->uri_string()); ?>
                            <div class="control-group">
                                <?php echo form_label('Email Address', $email['id'], array('class' => 'control-label')); ?>
                                <div class="controls">
                                    <?php echo form_error('email'); ?>                                
                                    <?php echo form_input($email); ?>
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <?php echo form_submit('send', 'Send', 'class="btn btn-info"'); ?>
                            <?php echo form_close(); ?>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>