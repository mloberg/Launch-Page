<?php include_once('settings.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title><?php echo $title;?></title>
	<link rel="stylesheet" href="css/style.php" />
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
<div id="box">
	<img src="<?php echo $logo;?>" alt="logo" <?php echo $attr;?> />
	<div id="content">
		<p><?php echo $description;?></p>
		<p class="signup"><?php echo $signup_text;?></p>
	</div>
	<form action="javascript:alert('An error has occured');">
		<input type="text" id="email" name="email" value="email" />
		<input type="submit" id="submit" value="<?php echo $button_text;?>" />
	</form>
	<div id="resp"></div>
	<div id="social">
		<?php if($twitter !== ''):?>
		<a href="http://twitter.com/<?php echo $twitter;?>"><img src="img/twitter.png" alt="Twitter" width="32" height="32" /></a>
		<?php endif;?>
		<?php if($facebook !== ''):?>
		<a href="<?php echo $facebook;?>"><img src="img/facebook.png" alt="Facebook" width="32" height="32" /></a>
		<?php endif;?>
		<?php if($blog !== ''):?>
		<a href="<?php echo $blog;?>"><img src="img/blogger.png" alt="Blog" width="32" height="32" /></a>
		<?php endif;?>
		<?php if($website !== ''):?>
		<a href="<?php echo $website;?>"><img src="img/website.png" alt="Website" width="32" height="32" /></a>
		<?php endif;?>
	</div>
</div>
<?php if($footer):?>
<footer> 
	<?php echo $footer_text;?> 
</footer>
<?php endif;?>
<script src="https://ajax.googleapis.com/ajax/libs/mootools/1.3.1/mootools-yui-compressed.js"></script>
<script src="js/launch.js"></script>
</body>
</html>