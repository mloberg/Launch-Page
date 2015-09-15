<?php $config = array_merge_recursive(json_decode(file_get_contents('config.json'), true), json_decode(file_get_contents('secret.json'), true));?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?= $config['title'];?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="css/bootstrap.min.css" rel="stylesheet">
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

    /* Submit form */
    #signup legend {
      text-align: center;
    }

    /* Footer navigation links */
    .nav-footer > li {
      float: left;
    }
    .nav-footer > li > a {
      padding-right: 5px;
      padding-left: 5px;
      margin-right: 2px;
      line-height: 14px;
    }
  </style>
  <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
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
      <a class="btn btn-large btn-success" href="#signup"><?= $config['signup-button-text'];?></a>
    </div>

    <hr>

    <div class="row-fluid marketing">
      <div class="span6">
        <?php foreach ($config['info-block-1'] as $content) { echo $content; } ?>
      </div>

      <div class="span6">
        <?php foreach ($config['info-block-2'] as $content) { echo $content; } ?>
      </div>
    </div>

    <div id="signup">
      <legend><?= $config['signup-text'];?></legend>
      <form class="form-horizontal" id="signup-form">
        <input type="hidden" name="nojs" value="1">
        <div class="control-group" id="email-group">
          <label class="control-label" for="email">Email</label>
          <div class="controls">
            <input type="text" class="input-xlarge" id="email" name="email" placeholder="Required">
            <span class="help-inline" id="email-help"></span>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="fname">First Name</label>
          <div class="controls">
            <input type="text" class="input-xlarge" id="fname" name="fname" placeholder="Optional">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="lname">Last Name</label>
          <div class="controls">
            <input type="text" class="input-xlarge" id="lname" name="lname" placeholder="Optional">
          </div>
        </div>
        <div class="control-group">
          <div class="controls">
            <button type="submit" class="btn"><?= $config['submit-text'];?></button>
            <span class="help-inline" id="response"></span>
          </div>
        </div>
      </form>
    </div>

    <hr>

    <div class="footer">
      <ul class="nav nav-footer pull-right">
        <?php foreach ($config['footer-links'] as $text => $link): ?>
          <li><a href="<?= $link;?>"><?= $text;?></a></li>
        <?php endforeach;?>
      </ul>
      <p><?= $config['copyright'];?></p>
    </div>

  </div>
<script src="js/jquery.min.js"></script>
<script src="js/launch.js"></script>
</body>
</html>
