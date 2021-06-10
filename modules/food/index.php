<!-- gallery -->
	<div class="gallery" id="food">
		<div class="heading">
			<h3 data-aos="zoom-in" >Our Food</h3>
		</div>
			<div class="gallery-grids">
				<?php 
						$food_data=$dbobj->fetchAll("select * from food");
						foreach ($food_data as $food_value) {
				?>
				<div data-aos="flip-right" class="col-md-3 gallery-grid">
					<div class="grid">
						
						<figure class="effect-roxy">
							<a class="example-image-link" href="<?php echo BASEURL."admin/public/images/$food_value[image]";?>" data-lightbox="example-set" data-title="">
								<img src="<?php echo BASEURL."admin/public/images/$food_value[image]";?>" alt="" style="width: 200px; height: 250px;"/>
								<figcaption>
									<h3><?php echo $food_value['title']; ?></h3>
									<p><?php echo $food_value['description']; ?></p>
								</figcaption>	
							</a>
						</figure>
					
					</div>
				</div>
				<?php }?>
				<div class="clearfix"> </div>

			</div>
	</div>
<!-- //gallery -->