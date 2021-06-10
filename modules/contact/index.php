<!-- contact -->
	<div class="contact" id="contact">
		<div class="container">
			<div class="heading">
				<h3 data-aos="zoom-in" >Get In Touch</h3>
			</div>
		</div>
			<div class="w3layouts-grids">
				<div data-aos="flip-left" class="col-md-6 contact-left">
					<h3 data-aos="zoom-in" >Contact information</h3>
					<div class="contact-info">
						<div class="contact-info-left">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
						<div class="contact-info-right">
							<h5>Address</h5>
							<p>Extended Stay Restaurant<br>
								<span>87th St, Ansul City</span>
								BKN (Raj.).
							</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="contact-info">
						<div class="contact-info-left">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</div>
						<div class="contact-info-right">
							<h5>Mobile</h5>
							<ul>
								<li>+91 7792956100</li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="contact-info">
						<div class="contact-info-left">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="contact-info-right">
							<h5>E-Mail</h5>
							<ul>
								<li><a href="mailto:rohitsankhla1999@gmail.com">rohitsankhla1999@gmail.com</a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div data-aos="flip-right" class="col-md-6 contact-form">
					<?php if(isset($_SESSION['msg'])){
						// echo "hello";exit;
						// print_r($_SESSION);exit;

						?>
						<div style="min-height: 300px;color: #040; font-size: +2;">
							Thank you for contacting us we will response soon!
						</div>
				<?php 
						unset($_SESSION['msg']);
				
			}elseif(isset($_POST['name'])){
						// echo "hello1";exit;

						$dbobj->addEdit('contact',$_POST);
						$_SESSION['msg']="true";
						?>


						
						<script type="text/javascript">
							location.href="index";
						</script>
						<?php 
					}else{
					
					?>
						<form  method="post">
						<input type="text" name="name" placeholder="Name" required="">
						<input type="email" class="email" name="email" placeholder="Email" required="">
						<div class="clearfix"> </div>
						<input type="text" class="phone" name="mobileno" placeholder="Phone Number" required="">
						<textarea placeholder="Message" name="msg" required=""></textarea>
						<input type="submit" value="SUBMIT">
					</form>
					<?php
				}
				?>
				</div>
				<div class="clearfix"> </div>
			</div>
	</div>
<!-- //contact -->
