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
								<li role="presentation"><a href="<?php echo base_url() ?>" class="activeZ"><?php echo $hcon['menu1']; ?></a></li>
								<li role="presentation"><a href="<?php echo base_url('welcome/about') ?>"><?php echo $hcon['menu2']; ?></a></li>
								<li role="presentation"><a href=<?php echo base_url('welcome/services') ?>><?php echo $hcon['menu3']; ?></a></li>								
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
<div>
<?php echo $maincontent;?>
</div>

	<footer>
		<div class="footer">
			<div class="container">
				<div class="social-icon">
					<div class="col-md-4 sm-4">
						<ul class="social-network">
							<li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
						</ul>	
					</div>
				</div>
				
				<div class="col-md-4 sm-4">
					<div style="padding-top:110px" >
						&copy; <a href="#"><?php echo $fcon['foo_name']; ?></a> All Rights Reserved.
				</div>						
			</div>
				<div class="col-md-4 sm-4">
					<div class="copyright">
						Adress Box
                        <div class="credits">
                           
                            <a href="#"><?php echo $fcon['foo_name']; ?></a> </br>
							 <a href="#"><?php echo $fcon['foo_address']; ?></a></br>
							   <a href="#"><?php echo $fcon['foo_mobile1']; ?></a> ,  
							   <a href="#"><?php echo $fcon['foo_mobile2']; ?></a> </br>
							     <a href="#"><?php echo $fcon['foo_website']; ?></a>
                        </div>
					</div>
				</div>						
			</div>
			
			<div class="pull-right">
				<a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
			</div>		
		</div>
	</footer>

	
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="<?php echo base_url('assets/js/jquery-2.1.1.min.js'); ?>"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/jquery.prettyPhoto.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.isotope.min.js'); ?>"></script>  
	<script src="<?php echo base_url('assets/js/wow.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/functions.js'); ?>"></script>
	
</body>
</html>