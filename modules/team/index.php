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
