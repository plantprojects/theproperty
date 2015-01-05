<!DOCTYPE html>
<html>
<head>
	<title>The Property - Open House: August, 2014</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/open-house.css">
	<meta name="description" content="The Property: 440 Broadway, Mezzanine, Los Angeles, CA">
	<meta name="keywords" content="gallery, art gallery, artist space, The Property, art, Los Angeles, sculpture, painting, installation, video">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:title" content="The Property - Open House" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://theproperty.gallery/past/open-house" />
	<meta property="og:image" content="http://theproperty.gallery/images/property_logo.jpg" />
	<meta property="og:description" content="August, 2014, The Property's inaugural exhibition 'Open House' featured the work of Chris Oliveria, Liz Walsh, Jon-Paul Villegas, Sarah Bostwick, Amy Sarkisian, Karen Lofgren, Bettina Hubby, Dave Hughes and Evan Jourdan." />



	<?php require_once 'mobile_detect.php'; $detect = new Mobile_Detect; ?>
	<script>
		var isMobile = false;
		<?php if ( $detect->isMobile() ) { ?>
		// This is mobile
		isMobile = true;
		<?php } ?>
	</script>
</head>
<body id="open-house" class="past <?php if ( $detect->isMobile() ) { ?>device<?php } else { ?>computer<?php } ?>">

	<section id="poster">
		<div class="modal">
			
			<div class="centered page-2">
				<h1>Open &nbsp;House</h1>
				<p>
					August 28, 2014 &nbsp;7:00 PM - 10:00 PM<br>
					440 Broadway Mezzanine Level <br>
					Enter through parking garage
				</p>
				</p>
			</div>
			
		</div>
		
		<img style="display: none;" src="images/open-house/sprites.png"/>
		
		<?php if ( $detect->isMobile() ) { ?>
			<img id="fireworks" src="images/open-house/firework.gif" alt="Open House" width="100%" height="auto">
		<?php } else { ?>
			<video class="video-container fillwidth" id="fireworks" loop autoplay>
				<source src="images/open-house/video/open_house.webm" type="video/webm">
				<source src="images/open-house/video/open_house.m4v" type="video/mp4">
				<source src="images/open-house/video/open_house.ogv" type="video/ogg">
			</video>
		<?php } ?>
	</section>
	
	<?php 
	
		$size = 'large';
		if ( $detect->isMobile() ) 
		{
			$size = 'small';
		} 
	?>
	
	<section id="documentation">
		<ul>
			<li>
				<img class="lazy" data-original="images/open-house/<?php  echo $size ?>/01-InstallationView.jpg" width="640" height="427">
			</li>
			<li>
				<img class="lazy" data-original="images/open-house/<?php  echo $size ?>/02-InstallationView.jpg" width="640" height="427">
				<div class="caption">Amy Sarkisian, Chris Oliveria, Bettina Hubby</div>
			</li>
			<li>
				<img class="lazy" data-original="images/open-house/<?php  echo $size ?>/03-ChrisOliveria.jpg" width="640" height="960">
				<div class="caption">Chris Oliveria</div>
			</li>
			<li>
				<img class="lazy" data-original="images/open-house/<?php  echo $size ?>/04-ChrisOliveria.jpg" width="640" height="960">
				<div class="caption">Chris Oliveria</div>
			</li>
			<li>
				<img class="lazy" data-original="images/open-house/<?php  echo $size ?>/05-AmySarkisian.jpg" width="640" height="427">
				<div class="caption">Amy Sarkisian</div>
			</li>
			<li>
				<img class="lazy" data-original="images/open-house/<?php  echo $size ?>/06-AmySarkisian.jpg" width="640" height="427">
				<div class="caption">Amy Sarkisian</div>
			</li>
			<li>
				<img class="lazy" data-original="images/open-house/<?php  echo $size ?>/07-BettinaHubby.jpg" width="640" height="960">
				<div class="caption">Bettina Hubby</div>
			</li>
			<li>	
				<img class="lazy" data-original="images/open-house/<?php  echo $size ?>/08-BettinaHubby.jpg" width="640" height="427">
				<div class="caption">Bettina Hubby</div>
			</li>
			<li>
				<img class="lazy" data-original="images/open-house/<?php  echo $size ?>/09-InstallationView.jpg" width="640" height="427">
				<div class="caption">Bettina Hubby, Karen Lofgren and Sarah Bostwick</div>
			</li>
			<li>
				<img class="lazy" data-original="images/open-house/<?php  echo $size ?>/10-KarenLofgren.jpg" width="640" height="991">
				<div class="caption">Karen Lofgren</div>
			</li>
			<li>
				<img class="lazy" data-original="images/open-house/<?php  echo $size ?>/11-KarenLofgren.jpg" width="640" height="960">
				<div class="caption">Karen Lofgren</div>
			</li>
			<li>
				<img class="lazy" data-original="images/open-house/<?php  echo $size ?>/12-KarenLofgren.jpg" width="640" height="427">
				<div class="caption">Karen Lofgren</div>
			</li>
			<li>
				<img class="lazy" data-original="images/open-house/<?php  echo $size ?>/13-SarahBostwick.jpg" width="640" height="427">
				<div class="caption">Sarah Bostwick</div>
			</li>
			<li>
				<img class="lazy" data-original="images/open-house/<?php  echo $size ?>/14-SarahBostwick.jpg" width="640" height="427">
				<div class="caption">Sarah Bostwick</div>
			</li>
			<li>
				<img class="lazy" data-original="images/open-house/<?php  echo $size ?>/15-EvanEllsworthJourden.jpg" width="640" height="427">
				<div class="caption">Evan Ellsworth Jourden</div>
			</li>
			<li>
				<img class="lazy" data-original="images/open-house/<?php  echo $size ?>/16-EvanEllsworthJourden.jpg" width="640" height="427">
				<div class="caption">Evan Ellsworth Jourden</div>
			</li>
			<li>
				<img class="lazy" data-original="images/open-house/<?php  echo $size ?>/16.5-InstallationView.jpg" width="640" height="427">
				<div class="caption">Evan Ellsworth Jourden and Jon-Paul Villegas</div>
			</li>
			<li>
				<img class="lazy" data-original="images/open-house/<?php  echo $size ?>/17-Jon-PaulVillegas.jpg" width="640" height="960">
				<div class="caption">Jon-Paul Villegas</div>
			</li>
			<li>
				<img class="lazy" data-original="images/open-house/<?php  echo $size ?>/18-Jon-PaulVillegas.jpg" width="640" height="960">
				<div class="caption">Jon-Paul Villegas</div>
			</li>
			<li>
				<img class="lazy" data-original="images/open-house/<?php  echo $size ?>/19-Jon-PaulVillegas.jpg" width="640" height="427">
				<div class="caption">Jon-Paul Villegas</div>
			</li>
			<li>
				<img class="lazy" data-original="images/open-house/<?php  echo $size ?>/20-Jon-PaulVillegas.jpg" width="640" height="427">
				<div class="caption">Jon-Paul Villegas</div>
			</li>
			<li>
				<img class="lazy" data-original="images/open-house/<?php  echo $size ?>/21-DaveHughes.jpg" width="640" height="427">
				<div class="caption">Dave Hughes</div>
			</li>
			<li>
				<img class="lazy" data-original="images/open-house/<?php  echo $size ?>/22-DaveHughes.jpg" width="640" height="427">
				<div class="caption">Dave Hughes</div>
			</li>
			<li>
				<img class="lazy" data-original="images/open-house/<?php  echo $size ?>/23-LizWalsh.jpg" width="640" height="427">
				<div class="caption">Liz Walsh</div>
			</li>
			<li>
				<img class="lazy" data-original="images/open-house/<?php  echo $size ?>/24-LizWalsh.jpg" width="640" height="427">
				<div class="caption">Liz Walsh</div>
			</li>
		</ul>
	</section>

	<?php $showDate = 'aug'; ?>
	<?php include 'footer.php'; ?>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="lib/jquery.easing.1.3.js"></script>
	<script src="lib/jquery.lazyload.min.js"></script>
	
	<script>
		// if documentation is at top stop video
		var distance = $('#documentation').offset().top,
		    $window = $(window),
		    has_fired = false;
		
		$window.scroll(function() {
		    if ( $window.scrollTop() >= distance && has_fired === false) {
		        $('#fireworks').get(0).pause();
		        
		        has_fired = true;
		    }
		});
		
		$(document).ready(function () {
			$("img.lazy")
		    	.lazyload({
		        	event: "lazyload",
		            effect: "fadeIn",
		            effectspeed: 2000
		        })
		        .trigger("lazyload");
		        
		        
		        setTimeout(function() {
		        	$('.caption').css('opacity', 1);
		        });
		       
		});
				
		$('#open-house #poster .centered').click(function()
		{
			$('#fireworks').get(0).paused ? $('#fireworks').get(0).play() : $('#fireworks').get(0).pause();
			
			$('html, body').delay(500).animate({
				scrollTop: $("#documentation").offset().top
			}, 500);

		});
	</script>

</body>
</html>