<?php
$this->config->load('tankstrap'); 
$tankstrap = $this->config->item('tankstrap');
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'size'	=> 30,
);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="<?php echo $tankstrap["bootstrap_path"];?>" rel="stylesheet">
        <title><?php echo $tankstrap["delete_page_title"];?></title>
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