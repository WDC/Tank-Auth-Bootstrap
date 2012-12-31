<?php
$this->config->load('tankstrap'); 
$tankstrap = $this->config->item('tankstrap');
if ($use_username) {
	$username = array(
		'name'	=> 'username',
		'id'	=> 'username',
		'value' => set_value('username'),
		'maxlength'	=> $this->config->item('username_max_length', 'tank_auth'),
		'size'	=> 30,
	);
}
$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> set_value('email'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'value' => set_value('password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
);
$confirm_password = array(
	'name'	=> 'confirm_password',
	'id'	=> 'confirm_password',
	'value' => set_value('confirm_password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="<?php echo $tankstrap["bootstrap_path"];?>" rel="stylesheet">
        <title><?php echo $tankstrap["register_page_title"];?></title>
    </head>
    <body>
	<div class="container">
		<div class="row">
			<div class="span6 offset3">
				<div class="well">
					<center>
					<h2>Register!</h2>
<?php echo form_open($this->uri->uri_string()); ?>

	<?php if ($use_username): ?>
	<div class="control-group">
        <?php echo form_label('Username', $username['id'], array('class' => 'control-label')); ?>
        <div class="controls">
            <?php echo form_error('username'); ?>                                
            <?php echo form_input($username); ?><br />
            <p class="help-block"></p>
        </div>
    </div>
	<?php endif; ?>
    <div class="control-group">
        <?php echo form_label('Contact E-mail', $email['id'], array('class' => 'control-label')); ?>
        <div class="controls">
            <?php echo form_error('email'); ?>                                
            <?php echo form_input($email); ?><br />
            <p class="help-block"></p>
        </div>
    </div>
    <div class="control-group">
        <?php echo form_label('Password', $password['id'], array('class' => 'control-label')); ?>
        <div class="controls">
            <?php echo form_error('password'); ?>                                
            <?php echo form_password($password); ?>
            <p class="help-block"></p>
        </div>
    </div>
    <div class="control-group">
        <?php echo form_label('Confirm Password', $confirm_password['id'], array('class' => 'control-label')); ?>
        <div class="controls">
            <?php echo form_error('confirm_password'); ?>                                
            <?php echo form_password($confirm_password); ?>
            <p class="help-block"></p>
        </div>
    </div>
	<?php if ($captcha_registration): ?>
	<div class="control-group">
        <?php echo form_label('Confirmation Code', $captcha['id'], array('class' => 'control-label')); ?>
        <div class="controls">
            <?php echo $captcha_html; ?>
            <p class="help-block"></p>
        </div>
    </div>	
	<div class="control-group">
        <?php echo form_label('Enter Code', $captcha['id'], array('class' => 'control-label')); ?>
        <div class="controls">
            <?php echo form_error('captcha'); ?>                                
            <?php echo form_input($captcha); ?>
            <p class="help-block"></p>
        </div>
    </div>
	<?php endif; ?>
</table>
<?php echo form_submit('register', 'Register', 'class="btn btn-primary"'); ?>
<?php echo form_close(); ?>
</center>
</div>
</div>
</div>
</div>
</body>
</html>