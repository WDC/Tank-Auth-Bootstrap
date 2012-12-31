<?php $this->config->load('tankstrap'); $tankstrap = $this->config->item('tankstrap');?>
<!DOCTYPE html>
<html lang="en">
<link href="<?php echo $tankstrap["bootstrap_path"];?>" rel="stylesheet">
<title><?php echo $tankstrap["login_page_title"];?></title>

<?php
$login = array(
    'name' => 'login',
    'id' => 'login',
    'value' => set_value('login'),
    'maxlength' => 80,
    'size' => 30,
);
if ($login_by_username AND $login_by_email) {
    $login_label = 'Email or Username';
} else if ($login_by_username) {
    $login_label = 'Login';
} else {
    $login_label = 'Email';
}
$password = array(
    'name' => 'password',
    'id' => 'password',
    'size' => 30,
);
$remember = array(
    'name' => 'remember',
    'id' => 'remember',
    'value' => 1,
    'checked' => set_value('remember'),
    'style' => 'margin:0;padding:0',
);
$captcha = array(
    'name' => 'captcha',
    'id' => 'captcha',
    'maxlength' => 8,
);
?>
<div class="container">
    <div class="row">
        <center><img src="LOGO FILE" /></center>   
        <br />
    </div>
    <div class="row">
        <div class="span6 offset3">
            <div class="well">
                <center><h3>Login</h3></center>
            <?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
            <form class="form-horizontal">
                <div class="control-group">
                    <?php echo form_label($login_label, $login['id'], array('class' =>'control-label')); ?>
                    <div class="controls">
                        <?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?>
                        <?php echo form_input($login['id'], '', 'id="' . $login['id'] . '" placeholder="Email or username"'); ?>
                    </div>
                </div>
                <div class="control-group">
                    <?php echo form_label('Password', $password['id'], array('class' =>'control-label')); ?>
                    <div class="controls">
                        <?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?>
                        <?php echo form_password($password['id'], '', 'id="' . $password['id'] . '" placeholder="Password"'); ?>
                    </div>
                </div>
                <div class="control-group">
                    <?php echo form_label('Remember Me', $remember['id'], array('class' =>'control-label')); ?>
                    <div class="controls">
            			<?php echo form_checkbox($remember); ?>
                    </div>
                </div>   
                <div class="control-group">
                    <center><?php echo anchor('/auth/forgot_password/', 'Forgot password'); ?>&nbsp; | &nbsp;<?php if ($this->config->item('allow_registration', 'tank_auth')) echo anchor('/auth/register/', 'Register'); ?></center>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <?php echo form_submit('submit', 'Login', 'class="btn btn-primary"'); ?>
                    </div>                
                </div>
                        <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>