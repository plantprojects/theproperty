<!DOCTYPE html>
<html>
<head>
	<title>The Property</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/four-painters.css">
	<meta name="description" content="The Property: 440 Broadway, Mezzanine, Los Angeles, CA">
	<meta name="keywords" content="gallery, art gallery, artist space, The Property, art, Los Angeles, sculpture, painting, installation, video">
	<meta name="viewport" content="width=device-width">

	<meta property="og:title" content="The Property - Open House" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://theproperty.gallery/past/open-house" />
	<meta property="og:image" content="http://theproperty.gallery/images/property_logo.jpg" />
	<meta property="og:description" content="October, 2014, The Property's second exhibition: 'Four Painters', included the work of Daniel Ingroff, Karla Wozniak, Adam Novak, and Katie Herzog." />

	<?php require_once 'mobile_detect.php'; $detect = new Mobile_Detect; ?>
	<script>
		var isMobile = false;
		<?php if ( $detect->isMobile() ) { ?>
		// This is mobile
		isMobile = true;
		<?php } ?>
	</script>
</head>
<body id="four-painters" class="past <?php if ( $detect->isMobile() ) { ?>device<?php } else { ?>computer<?php } ?>">

<section id="poster">

		<h1 class="pos-5">Four &nbsp;Painters</h1>

		<ul class="names">
			<li>Katie Herzog</li>
			<li>Adam Novak</li>
			<li>Karla Wozniak</li>
			<li>Daniel Ingroff</li>
		</ul>

		<div class="modal">
			<p>
				The Property Gallery<br>
				440 Broadway<br>
				Mezzanine Level<br>
				Los Angeles, CA
			</p>

			<p>
				Opening<br>
				October 9th<br>
				2014
			</p>
		</div>

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
			<img src="images/open-house/<?php  echo $size ?>/01-InstallationView.jpg">
			<div class="caption">Karla</div>
		</li>
		<li>
			<img src="images/open-house/<?php  echo $size ?>/02-InstallationView.jpg">
			<div class="caption">Daniel</div>
		</li>
		<li>
			<img src="images/open-house/<?php  echo $size ?>/03-ChrisOliveria.jpg">
			<div class="caption">Katie</div>
		</li>
		<li>
			<img src="images/open-house/<?php  echo $size ?>/04-ChrisOliveria.jpg">
			<div class="caption">Adam</div>
		</li>
	</ul>
</section>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="lib/jquery.easing.1.3.js"></script>

<script>

	$(function()
	{
		$('#documentation').css('margin-top', $('#poster').height());
	});

	$(window).resize(function()
	{
		$('#documentation').css('margin-top', $('#poster').height());
	});


</script>

</body>
</html>