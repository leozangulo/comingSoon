<!DOCTYPE html>
<!--[if lt IE 7]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class='no-js' lang='es'>
	<!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<title>Próximamente</title>
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="apple-touch-icon" href="images/favicon.png" />
	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js'></script>
	<script src="js/jquery.easing.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/jquery.cycle.all.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/jquery.maximage.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/jquery.fullscreen.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/jquery.ba-hashchange.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/main.js" type="text/javascript" charset="utf-8"></script>
	<link rel="stylesheet" href="css/maximage.css" type="text/css" media="screen" charset="utf-8" />
	<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" charset="utf-8" />
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
	<!--[if IE 6]>
		<style type="text/css" media="screen">
			.gradient {display:none;}
		</style>
	<![endif]-->
<script type="text/javascript" charset="utf-8">
	$(function(){
		$('#maximage').maximage({
			cycleOptions: {
				fx: 'fade',
				speed: 1000, // Has to match the speed for CSS transitions in jQuery.maximage.css (lines 30 - 33)
				timeout: 5000,
				prev: '#arrow_left',
				next: '#arrow_right',
				pause: 0,
				before: function(last,current){
					if(!$.browser.msie){
						// Start HTML5 video when you arrive
						if($(current).find('video').length > 0) $(current).find('video')[0].play();
					}
				},
				after: function(last,current){
					if(!$.browser.msie){
						// Pauses HTML5 video when you leave it
						if($(last).find('video').length > 0) $(last).find('video')[0].pause();
					}
				}
			},
			onFirstImageLoaded: function(){
				jQuery('#cycle-loader').hide();
				jQuery('#maximage').fadeIn('fast');
			}
		});

		// Helper function to Fill and Center the HTML5 Video
		jQuery('video,object').maximage('maxcover');

	});
</script>
</head>
<body>
	<nav class="social-nav">
		<ul>
			<li><a href="https://www.facebook.com/GrupoCosmic"><img src="images/icon-facebook.png" /></a></li>
			<li><a href="https://twitter.com/cosmic_mexico"><img src="images/icon-twitter.png" /></a></li>
			<li><a href="https://www.linkedin.com/pub/grupo-cosmic/a0/526/a19"><img src="images/icon-linkedin.png" /></a></li>
		</ul>
	</nav>	

	<!-- Site Logo -->
	<div id="logo">
		<img src="images/logo_ic.png">
		<h2>Próximamente</h2>
	</div>

		<!-- Background Slides -->
		<div id="maximage">
			<div>
				<img src="images/uno.jpg" alt="" />
				
			</div>
			<div>
				<img src="images/dos.jpg" alt="" />
			</div>
		</div>
		

</body>
</html>