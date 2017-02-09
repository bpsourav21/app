<div class="span12">
			<div class="tabbable tabs">
			  <div class="tab-content label-primary">
				<div class="tab-pane active" id="all">
				<ul class="thumbnails">
				<?php foreach ($gallery as $gal ) { ?>
					<li class="span4">
						<div class="thumbnail">
								<div class="blockDtl">
									<h4><?php echo $gal['gtitle'] ;?></h4>
									<a href="#">
										<img src="<?php echo base_url().'assets/content/'.$gal['gphoto'] ;?>" alt="image" width="500px" style="height: 200px;"/>
									</a>
									<p><?php echo $gal['gcontent'] ; ?> </p>
								</div>
						</div>
					</li>

					<?php } ;?>

				
				</ul>
					
			</div>
			
			</div>
			</div> <!-- /tabbable -->