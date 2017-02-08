<html>
      <head>
            <title> Admin Panel</title>
             <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css');?>">
	<link href="<?php echo base_url('assets/css/prettyPhoto.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet" />	
      <style>
      h1.page-header {
    margin-top: -5px;
}

.sidebar {
    padding-left: 0;
}

.main-container { 
    background: #C0C0C0;
    padding-top: 15px;
    margin-top: -20px;
}

.footer {
    width: 100%;
}  
      </style>

</head>
<body>

<nav class="navbar navbar-default navbar-static-top">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">
			Admin Panel
			</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">			
			<form class="navbar-form navbar-left" method="GET" role="search">
				<div class="form-group">
					<input type="text" name="q" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
			</form> -->
			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo base_url();?>" target="_blank">Visit Site</a></li>
				<li class="dropdown ">
					<a href="#" onclick="toggleMenu()" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						Account
						<span  class="caret"></span></a>
						<ul id="newDiv" class="dropdown-menu" role="menu">
						<!-- 	<li class="dropdown-header">Home</li>
						<li class=""><a href="#">Home</a></li>
							<li class=""><a href="#">Other Link</a></li> -->
							
							<li class=""><a href="#">Change Password</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo site_url("login/log_out");?>">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>


	<script type="text/javascript">
	function toggleMenu(){
		var element= document.getElementById('newDiv');
		 element.style.display = 'block';
	}
	 </script>
	<div class="container-fluid main-container">
		<div class="col-md-2 sidebar">
	<ul class="nav nav-pills nav-stacked ">
		<li class="activeZ"><a href="<?php echo base_url('admin/header') ?>">Header</a></li>
		<li><a href="<?php echo base_url('admin/home_sec1') ?>">Home Section 1</a></li>
		<li><a href="<?php echo base_url('admin/home_sec2') ?>">Home Section 2</a></li>
		<li><a href="#">Link</a></li>
		<li><a href="#">Footer</a></li>
	</ul>
		</div>
		<div class="col-md-10 content">
            <div class="panel panel-default">
                <div class="panel-heading ">
                    Dashboard
                </div>
                
                <div class="panel-body text-primary">
                    <?php echo $subcontent;?>
                </div>
            </div>
		</div>
		<footer class="pull-left">
			<p class="col-md-12">
				<strong>© 2017 All Rights Reserved by <a href="#"> my company </a></strong>
			</p>
		</footer>
	</div>
</body>
</html>