<!DOCTYPE html>
<html>
<head>
	<title>The Property</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/four-painters.css">
	<meta name="description" content="The Property: 440 Broadway, Mezzanine, Los Angeles, CA">
	<meta name="keywords" content="gallery, art gallery, artist space, The Property, art, Los Angeles, sculpture, painting, installation, video">
	<meta name="viewport" content="width=device-width, initial-scale=1">

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
			<img src="images/fourpainters/<?php  echo $size ?>/Karla_Wozniak_and_Adam_Novak.jpg">
			<div class="caption">Karla Wozniak and Adam Novak</div>
		</li>
		<li>
			<img src="images/fourpainters/<?php  echo $size ?>/Katie_Herzog_and_Daniel_Ingroff.jpg">
			<div class="caption">Katie Herzog and Daniel Ingroff</div>
		</li>
		<li>
			<img src="images/fourpainters/<?php  echo $size ?>/Katie_Herzog_and_Karla_Wozniak.jpg">
			<div class="caption">Katie Herzog and Karla Wozniak</div>
		</li>
		<li>
			<img src="images/fourpainters/<?php  echo $size ?>/Daniel_Ingroff_and_Adam_Novak.jpg">
			<div class="caption">Daniel Ingroff and Adam Novak</div>
		</li>
	</ul>
</section>

<?php $showDate = 'oct'; ?>
<?php include 'footer.php'; ?>

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

	//FOUR PAINTERS CENTER NAMES
	function namesCenter()
	{
		var newTop = ($(window).height() - $('.names').height()) / 1.4;
		$('.names').css('top', newTop );
	}

	//FOUR PAINTERS MOVE H1
	var about_slide = $('#poster h1'),
		counter = 1,
		counterStop = 'false';

	setInterval(function() {
		about_slide.removeClass();
		about_slide.addClass('pos-'+counter);
		
		if (counterStop === 'false' )
		{
		
			if (counter === 5) {
				counter = 1;
			} else {
				counter++;
			}
		}
	}, 500);

	$('#poster').click(function()
		{
			counterStop = 'true';
			
			$('html, body').delay(1000).animate({
				scrollTop: $("#documentation").offset().top
			}, 500);

	});
	
	$(window).scroll(function() {
	    var height = $(window).scrollTop();
	
	    if(height  === 0) {
	        // do something
	        counterStop = 'false';

	    }
	});


</script>

</body>
</html>