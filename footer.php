</div>
<!-- copyright -->
<div class="copyright">
	<div class="copyrighttop">
		
		
	</div>
	<div class="copyrightbottom">
		<p>© 2021 Food Chef. All rights reserved | Developed by <a href="https://www.instagram.com/sankhala_rohit/">Rohit Sankhla</a></p>
	</div>
	<div class="clearfix"></div>
</div>
<!-- //copyright -->
<script src="<?php echo BASEURL;?>public/js/lightbox-plus-jquery.min.js"> </script><!-- for gallery js -->
 
<!-- js -->
	<script type="text/javascript" src="<?php echo BASEURL;?>public/js/jquery-2.1.4.min.js"></script>
	<!-- for bootstrap working -->
	<script src="<?php echo BASEURL;?>public/js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
<!-- //js -->

 <!-- /Responsive slides js -->
						<script src="<?php echo BASEURL;?>public/js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
			</script>
			<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:false,
									nav:true,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>

 <!-- Responsive slides js -->
 
<!-- animation effects-js files-->
	<script src="<?php echo BASEURL;?>public/js/aos.js"></script><!-- //animation effects-js-->
	<script src="<?php echo BASEURL;?>public/js/aos1.js"></script><!-- //animation effects-js-->
<!-- animation effects-js files-->

<!-- //here starts scrolling icon -->
<script src="<?php echo BASEURL;?>public/js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="<?php echo BASEURL;?>public/js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo BASEURL;?>public/js/easing.js"></script>
	<!-- here stars scrolling script -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling script -->
<!-- //here ends scrolling icon -->

<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- //scrolling script -->
</body>
</html>
