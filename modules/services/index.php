<!-- services -->
<div class="services" id="services">
		<div class="container">
		<div class="heading">
			<h3 data-aos="zoom-in" >Our Services</h3>
		</div>
			<div class="w3-agileits-services-grids">
				<div data-aos="fade-down" class="col-md-6 agile-services-left">
					<div class="agile-services-left-grid">
						<div class="services-icon">
							<?php 
							$services_data=$dbobj->fetchAll("select * from services");
							foreach ($services_data as $services_value) {
							?>
								<div class="col-md-4 services-icon-info">
									<i class="<?php echo stripslashes($services_value['icon']); ?>"></i>
								</div>
								<div class="col-md-8 services-icon-text">
								<?php echo $services_value['description'];?>
								</div>
								<div class="clearfix"> </div>
							<?php } ?>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-6 w3-agile-services-right">
					<div data-aos="zoom-in" class="col-md-6 service1">
						<img src="<?php echo BASEURL;?>public/images/c1.png" alt="" />
					</div>
					<div data-aos="zoom-in" class="col-md-6 serviceimg">
						<img src="<?php echo BASEURL;?>public/images/service1.jpg" alt="" />
						<img src="<?php echo BASEURL;?>public/images/service2.jpg" alt="" />
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
</div>
<!-- //services -->
