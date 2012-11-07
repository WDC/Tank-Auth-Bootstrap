<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
if ($this->config->item('use_username', 'tank_auth')) {
	$login_label = 'Email or login';
} else {
	$login_label = 'Email';
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.1/css/bootstrap-combined.min.css" rel="stylesheet">
        <title>Forgot Password</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="span6 offset3">
                    <div class="well">
                        <center>
							<h2>Reset Password</h2>
                            <?php echo form_open($this->uri->uri_string()); ?>
                            <div class="control-group">
                                <?php echo form_label($login_label, $login['id'], array('class' => 'control-label')); ?>
                                <div class="controls">
                                    <?php echo form_error('login'); ?>                                
                                    <?php echo form_input($login); ?>
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <?php echo form_submit('reset', 'Get A New Password', 'class="btn btn-primary"'); ?>
                            <?php echo form_close(); ?>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>