<?php require('layout.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Layout Tests</title>

<link rel="stylesheet" href="public/css/style.css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body class="<?php echo $layout[$page]; ?>">

    <div class="navbar navbar-default navbar-fixed-top l-nav-utility">
      <div class="container">
<!--         <div class="navbar-header">
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div> -->
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav" style="margin-left: -15px;">
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download">
					<span class="glyphicon glyphicon-user" style="margin-right:10px;"></span> Current Students <span class="caret"></span></a>
				<ul class="dropdown-menu" aria-labelledby="download">
					<li><a href="#">Item One</a></li>
					<li><a href="#">Item Two</a></li>
					<li class="divider"></li>
					<li><a href="#">Item Three</a></li>
					<li><a href="#">Item Four</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download">
					Staff <span class="caret"></span></a>
				<ul class="dropdown-menu" aria-labelledby="download">
					<li><a href="#">Item One</a></li>
					<li><a href="#">Item Two</a></li>
					<li class="divider"></li>
					<li><a href="#">Item Three</a></li>
					<li><a href="#">Item Four</a></li>
				</ul>
			</li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
          	<li><a href="http://builtwithbootstrap.com/" target="_blank">Colleges &amp; Schools</a></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download">
					Services <span class="caret"></span></a>
				<ul class="dropdown-menu" aria-labelledby="download">
					<li><a href="#">Item One</a></li>
					<li><a href="#">Item Two</a></li>
					<li class="divider"></li>
					<li><a href="#">Item Three</a></li>
					<li><a href="#">Item Four</a></li>
				</ul>
			</li>
            <li><a href="http://builtwithbootstrap.com/" target="_blank">A-Z</a></li>
            <li><a href="https://wrapbootstrap.com/?ref=bsw" target="_blank">Search <span class="glyphicon glyphicon-search" style="margin-left:5px; margin-top:4px;"></span></a></li>
          </ul>

        </div>
      </div>
    </div>

	<nav class="l-uni-navbar" role="navigation">
		<div class="container">
		<div class="navbar-header">
			<a href="../" class="navbar-brand"><img src="src/img/uod_banner_logo.png" class="logo"></a>
		</div>
		<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Study</a></li>
                <li><a href="#">Student Life</a></li>
                <li><a href="#">Research</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Alumni</a></li>
		</ul>

		</div><!-- / .container -->
	</nav>