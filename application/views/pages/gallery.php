<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="#">Home</a></li>
				<li>Gallery</li>			
			</div>		
		</div>	
	</div>
	<h1 class="text-primary text-center">Our Previous Works</h1>
<div class="gallery">
		<div class="container">
			<div class="row">
  <div class="overview-items">
  
      <?php foreach ($gallery as $gal ) { ?>
      <div class="overview-item col-xs-12 col-lg-3 col-sm-4 col-md-3">
    <div class = "recent-work-wrap">
					
			<div class="overlay">
					<div class="bg-info text-center">
						<h4><?php echo $gal['gtitle'] ;?></h4>
						<a href="">
			<img  class="img-responsive" src="<?php echo base_url().'assets/content/'.$gal['gphoto'] ;?>" alt="image" width="500px" style="height: 250px;"/>
						</a>
						<p><?php echo $gal['gcontent'] ; ?> </p>
					</div>
			</div>
				

					
    </div>
  </div>
  <?php } ;?>
 
      </div>
    </div>
      </div>
      </div>
 