<!-- about -->
<div class="about" id="about">
	<div class="container">
		<div class="heading">
			<h2 data-aos="zoom-in">About Us</h2>
		</div>
		<?php 
		$about_data=$dbobj->fetchOne('about',1);
		// print_r($about_data);exit;
		?>
		<h4>About our restaurant</h4>
		<p><?php echo $about_data['description'];?></p>
	</div>
</div>
<!-- //about -->
