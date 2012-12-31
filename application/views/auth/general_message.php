<?php $this->config->load('tankstrap'); $tankstrap = $this->config->item('tankstrap');?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="<?php echo $tankstrap["bootstrap_path"];?>" rel="stylesheet">
<title><?php echo $tankstrap["general_page_title"];?></title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="span6 offset3">
            <div class="well">
				<center>
                	<h3><?php echo $message; ?></h3>
				</center>
            </div>
        </div>
    </div>
</div>
</body>
</html>