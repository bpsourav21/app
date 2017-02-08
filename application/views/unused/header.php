<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $hcon['title1']; ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css');?>">
	<link href="<?php echo base_url('assets/css/prettyPhoto.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet" />	

  </head>
  <body>
	<header>		
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navigation">
				<div class="container">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<a href="index.html"><h1><?php echo $hcon['title1']; ?></h1></a>
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="<?php echo base_url() ?>" class="active"><?php echo $hcon['menu1']; ?></a></li>
								<li role="presentation"><a href="<?php echo base_url('welcome/about') ?>"><?php echo $hcon['menu2']; ?></a></li>
								<li role="presentation"><a href="services.html"><?php echo $hcon['menu3']; ?></a></li>								
								<li role="presentation"><a href="portfolio.html"><?php echo $hcon['menu4']; ?></a></li>
								<li role="presentation"><a href="blog.html"><?php echo $hcon['menu5']; ?></a></li>
								<li role="presentation"><a href="contact.html"><?php echo $hcon['menu6']; ?></a></li>						
							</ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>		
	</header>

<?php echo $maincontent;?>