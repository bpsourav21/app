	<div class="container">
            <div class="row">
                <div class="portfolio-items">
                    <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            
                                    
				<?php foreach ($gallery as $gal ) { ?>
					
						<div class="overlay">
								<div class="recent-work-inner">
									<h4><?php echo $gal['gtitle'] ;?></h4>
									<a href="preview">
						<img  class="img-responsive" src="<?php echo base_url().'assets/content/'.$gal['gphoto'] ;?>" alt="image" width="500px" style="height: 200px;"/>
									</a>
									<p><?php echo $gal['gcontent'] ; ?> </p>
								</div>
						</div>
				

					<?php } ;?>

				
			
                    </div>
                      </div>
                        </div>
                    </div>