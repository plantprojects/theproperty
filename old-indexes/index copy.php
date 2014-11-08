<!DOCTYPE html>
<html>
<head>
	<title>The Property</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<meta name="description" content="The Property: 440 Broadway, Mezzanine, Los Angeles, CA">
	<meta name="keywords" content="gallery, art gallery, artist space, The Property, art, Los Angeles, sculpture, painting, installation, video">
	<meta name="viewport" content="width=device-width">

	<meta property="og:title" content="The Property" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://theproperty.gallery" />
	<meta property="og:image" content="http://theproperty.gallery/images/property_logo.jpg" />
	<meta property="og:description" content="440 Broadway, Mezzanine, Los Angeles, CA. Opening Reception: Thursday, August 28th, 2014, 7-10pm. The Property is pleased to announce 'Open House' featuring the work of Chris Oliveria, Liz Walsh, Jon-Paul Villegas, Sarah Bostwick, Amy Sarkisian, Karen Lofgren, Bettina Hubby, Dave Hughes and Evan Jourdan." />



	<?php require_once 'mobile_detect.php'; $detect = new Mobile_Detect; ?>
	<script>
		var isMobile = false;
		<?php if ( $detect->isMobile() ) { ?>
		// This is mobile
		isMobile = true;
		<?php } ?>
	</script>
</head>
<body class="<?php if ( $detect->isMobile() ) { ?>device<?php } else { ?>computer<?php } ?>">


	<section id="home">
		<h1><a href="javascript:void(0);" class="start"><?php if ( !$detect->isMobile() ) { ?><img src="../images/property_logo.jpg" alt="The Property"/><?php } ?></a></h1>
	</section>

	<section id="open-house">
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

		<?php if ( $detect->isMobile() ) { ?>
			<img id="fireworks" src="../images/firework.gif" alt="Open House" width="100%" height="auto">
		<?php } else { ?>
			<video class="video-container fillwidth" id="fireworks" loop>
				<source src="../video/property_opening.webm" type="video/webm">
				<source src="../video/property_opening.m4v" type="video/mp4">
				<source src="../video/property_opening.ogv" type="video/ogg">
			</video>
		<?php } ?>

	</section>

	<section id="press-release">
		<div class="centered page-3">
			<div class="small-logo"></div>
			<p><i>The Property</i> is pleased to announce <i>Open House</i>, the organization's inaugural group exhibition, featuring the work of Chris Oliveria, Liz Walsh, Jon-Paul Villegas, Sarah Bostwick, Amy Sarkisian,
				Karen Lofgren, Bettina Hubby, Dave Hughes and Evan&nbsp;Jourdan.</p>

			<p><i>The Property</i> is a five person artist-run gallery co-directed by Jon-Paul Villegas, Chris Oliveria, Sarah Bostwick,
				Liz&nbsp;Walsh, and Adam Novak.  Our aim is to provide engagingly diverse, aesthetically rigorous programming that is simultaneously
				high minded and&nbsp;DIY.</p>
			<p>We are located at <a href="https://goo.gl/maps/WUxJp" target="_blank">440 Broadway</a> (2nd Floor)
				in downtown Los&nbsp;Angeles. Garage parking is available at 440 Broadway, $5.50 cash&nbsp;only. </p>

			<p><b>Opening Reception: Thursday, August 28th, 2014, 7-10pm.</b></p>
			<p>Hours are 11-5 Saturday/Sunday and by appointment.</p>
			<p><a href='&#109;&#97;il&#116;o&#58;thep%72%&#54;Fpe&#37;72&#37;74%79&#37;2Egalle%&#55;2&#121;%2Ela&#64;&#103;%6D%61%69&#108;%2E%63om'>&#116;h&#101;propert&#121;&#46;g&#97;l&#108;e&#114;y&#46;la&#64;gmail&#46;c&#111;m</a></p>
		</div>
	</section>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="../lib/jquery.easing.1.3.js"></script>
	<script src="../js/functions.js"></script>
	<!--<script src="lib/modernizr.custom.js"></script>-->

</body>
</html>