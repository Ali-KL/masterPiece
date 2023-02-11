<!-- footer-->	
<div class="agileits_w3layouts-footer">
	<div class="agileits-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387145.86654334463!2d-74.25818682528057!3d40.70531100753592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1491897561113" style="border:0" allowfullscreen></iframe>
	</div>
	<div class="copy-right text-center">
		<span class="agileits-copy fa fa-plus" aria-hidden="true"></span>
		<p>&copy; 2017 Medicate. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
	</div>	
</div>	
<!-- footer-->	
<script src="{{asset('mainTemplate/js/jarallax.js')}}"></script>
<script src="{{asset('mainTemplate/js/SmoothScroll.min.js')}}"></script>
<script type="text/javascript">
	/* init Jarallax */
	$('.jarallax').jarallax({
		speed: 0.5,
		imgWidth: 1366,
		imgHeight: 768
	})
</script>
<!-- here starts scrolling icon -->
		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="{{asset('mainTemplate/js/move-top.js')}}"></script>
		<script type="text/javascript" src="{{asset('mainTemplate/js/easing.js')}}"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		<!-- /ends-smoth-scrolling -->
	<!-- //here ends scrolling icon -->
	<!--start-date-piker-->
		<link rel="stylesheet" href="{{asset('mainTemplate/css/jquery-ui.css')}}" />
		<script src="{{asset('mainTemplate/js/jquery-ui.js')}}"></script>
			<script>
				$(function() {
				$( "#datepicker,#datepicker1" ).datepicker();
				});
			</script>
<!-- //End-date-piker -->	
<!-- here starts scrolling icon -->
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
<!--tabs-->
		<script src="{{asset('mainTemplate/js/easy-responsive-tabs.js')}}"></script>
		<script>
		$(document).ready(function () {
		$('#horizontalTab').easyResponsiveTabs({
		type: 'default', //Types: default, vertical, accordion           
		width: 'auto', //auto or any width like 600px
		fit: true,   // 100% fit in a container
		closed: 'accordion', // Start closed if in accordion view
		activate: function(event) { // Callback function if tab is switched
		var $tab = $(this);
		var $info = $('#tabInfo');
		var $name = $('span', $info);
		$name.text($tab.text());
		$info.show();
		}
		});
		$('#verticalTab').easyResponsiveTabs({
		type: 'vertical',
		width: 'auto',
		fit: true
		});
		});
		</script>
<!--//tabs-->
</body>
</html>