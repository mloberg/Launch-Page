<?php $config = json_decode(file_get_contents('config.json'), true);?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?= $config['title'];?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="css/bootstrap.css" rel="stylesheet">
  <style>
    body {
      padding-top: 20px;
      padding-bottom: 40px;
    }

    /* Custom container */
    .container-narrow {
      margin: 0 auto;
      max-width: 700px;
    }
    .container-narrow > hr {
      margin: 30px 0;
    }

    /* Main marketing message and sign up button */
    .jumbotron {
      margin: 60px 0;
      text-align: center;
    }
    .jumbotron h1 {
      font-size: 72px;
      line-height: 1;
    }
    .jumbotron .btn {
      font-size: 21px;
      padding: 14px 24px;
    }

    /* Supporting marketing content */
    .marketing {
      margin: 60px 0;
    }
    .marketing p + h4 {
      margin-top: 28px;
    }
  </style>
  <link href="css/bootstrap-responsive.css" rel="stylesheet">
  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
  <div class="container-narrow">
    <div class="masthead">
      <ul class="nav nav-pills pull-right">
        <li class="active"><a href="index.php">Home</a></li>
        <?php foreach ($config['links'] as $title => $link): ?>
        <li><a href="<?= $link;?>"><?= $title;?></a></li>
        <?php endforeach;?>
      </ul>
      <h3 class="muted"><?= $config['title'];?></h3>
    </div>

    <hr>

    <div class="jumbotron">
      <h1><?= $config['heading'];?></h1>
      <p class="lead"><?= $config['description'];?></p>
      <a class="btn btn-large btn-success" href="#">Sign up today</a>
    </div>

    <hr>

    <div class="row-fluid marketing">
      <div class="span6">
        <h4>Subheading</h4>
        <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

        <h4>Subheading</h4>
        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

        <h4>Subheading</h4>
        <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
      </div>

      <div class="span6">
        <h4>Subheading</h4>
        <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

        <h4>Subheading</h4>
        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

        <h4>Subheading</h4>
        <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
      </div>
    </div>

    <hr>

    <div class="footer">
      <p><?= $config['copyright'];?></p>
    </div>

  </div>
<!--
  <script src="../assets/js/jquery.js"></script>
  <script src="../assets/js/bootstrap-transition.js"></script>
  <script src="../assets/js/bootstrap-alert.js"></script>
  <script src="../assets/js/bootstrap-modal.js"></script>
  <script src="../assets/js/bootstrap-dropdown.js"></script>
  <script src="../assets/js/bootstrap-scrollspy.js"></script>
  <script src="../assets/js/bootstrap-tab.js"></script>
  <script src="../assets/js/bootstrap-tooltip.js"></script>
  <script src="../assets/js/bootstrap-popover.js"></script>
  <script src="../assets/js/bootstrap-button.js"></script>
  <script src="../assets/js/bootstrap-collapse.js"></script>
  <script src="../assets/js/bootstrap-carousel.js"></script>
  <script src="../assets/js/bootstrap-typeahead.js"></script>
-->
</body>
</html>

<!--

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
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

-->