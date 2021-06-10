	<!-- banner -->
<div id="home" class="w3ls-banner"> 
		<!-- banner-text -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<?php 
					$banner_data=$dbobj->fetchAll("Select * from banner");
					foreach ($banner_data as $banner_value) {
					?>
					<li>
						<div class="">
						<div class="banner-dott" style="background: url('<?php echo BASEURL."admin/public/images/$banner_value[image]";?>')">
							<div class="container">
								<div data-aos="fade-left" class="agileits-banner-info">
									<h3><?php echo $banner_value['title']; ?></h3>
									<p><?php echo $banner_value['description']; ?></p>
								</div>	
							</div>
						</div>
						</div>
					</li>
					<?php 
					}
					?>
				</ul>
			</div>
			<div class="clearfix"> </div>
			
			<!--banner Slider starts Here-->
		</div>
		    <div class="thim-click-to-bottom">
				<div class="rotate">
					<a href="#about" class="scroll">
						<i class="fa fa-long-arrow-down" aria-hidden="true"></i>
					</a>
				</div>
			</div>
 
</div>	
<!-- //banner --> 
<?php include "modules/about/index.php";?>
<?php include "modules/services/index.php";?>

<!-- team -->
		<div class="team" id="team">
			<div class="container">
				<div class="heading">
					<h3 data-aos="zoom-in" >Team</h3>
				</div>
				<div class="agile_team_grids">
					<?php
					$team_data=$dbobj->fetchAll("select * from team");
					foreach ($team_data as $team_value) {
					?>
					<div data-aos="fade-up" class="col-md-3 agile_team_grid">
						<div class="ih-item circle effect1">
							<div class="spinner"></div>
							<div class="img"><img src="<?php echo BASEURL."admin/public/images/$team_value[photo]";?>" alt=" " class="img-responsive" /></div>
						</div>
						<h4><?php echo $team_value['name'];?></h4>
						<p><?php echo $team_value['title']; ?></p> 
					</div>	
					<?php } ?>
				</div>
					<div class="clearfix"> </div> 
			</div>
		</div>
<!--//team-->



<?php include "modules/food/index.php";?>
<?php include "modules/contact/index.php";?>


