<!DOCTYPE html>
<html>
<head>
	<title>The Property - The Awful Truth: November, 2014</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/the-awful-truth.css">
	<meta name="description" content="The Property: 440 Broadway, Mezzanine, Los Angeles, CA">
	<meta name="keywords" content="gallery, art gallery, artist space, The Property, art, Los Angeles, sculpture, painting, installation, video">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:title" content="The Property - The Awful Truth" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://theproperty.gallery/past/the-awful-truth" />
	<meta property="og:image" content="http://theproperty.gallery/images/property_logo.jpg" />
	<meta property="og:description" content="November, 2014, The Property is pleased to announce the opening of The Awful Truth, a solo exhibition by Los Angeles based sculptor and installation artist, Jon-Paul Villegas." />



	<?php require_once 'mobile_detect.php'; $detect = new Mobile_Detect; ?>
	<script>
		var isMobile = false;
		<?php if ( $detect->isMobile() ) { ?>
		// This is mobile
		isMobile = true;
		<?php } ?>
	</script>
</head>
<body id="the-awful-truth" class="past <?php if ( $detect->isMobile() ) { ?>device<?php } else { ?>computer<?php } ?>">


<section id="poster">
	<img src="images/the-awful-truth/villegas_poster_theproperty.jpg" width="100%" height="auto" id="the-awful-truth-poster" alt="The Awful Truth: Installations by Jon-Paul Villegas">

	<div class="below-fold">
		<div class="center">
			OPENING RECEPTION: <span class="sm"></span>SATURDAY, NOVEMBER 22ND, 2014, 6pm - 9pm<br>
			440 BROADWAY, 2ND FLOOR, LOS ANGELES, CA
		</div>
	</div>

</section>

<?php

$size = 'large';
if ( $detect->isMobile() )
{
	$size = 'small';
}
?>

<?php /* <section id="documentation">
	<ul>
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

	</ul>
</section> */ ?>
<div id="footer">
	<ul id="footer-nav">
		<li><a class="active" href="<?php echo "http://" . $_SERVER['SERVER_NAME'] ?>/open-house">AUG 2014</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] ?>/4-painters">OCT 2014</a></li>
	</ul>

	<a class="home" href="<?php echo "http://" . $_SERVER['SERVER_NAME'] ?>"><div class="small-logo"></div></a>

</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="lib/jquery.easing.1.3.js"></script>
<script src="lib/jquery.lazyload.min.js"></script>

<script>
	// if documentation is at top stop video
	/*var distance = $('#documentation').offset().top,
		$window = $(window);*/


	/*$(document).ready(function () {
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

	});*/

	// Background image FIT WINDOW
	function videoResize()
	{
		// 2048/1536 1.33  .75
		var winWidth = $(window).width(),
			winHeight = $(window).height();

		if ( winWidth/winHeight > 1.33 )
		{
			$('#the-awful-truth-poster').height(winHeight).width( winHeight /.75).css('position', 'static');

		} else if (winWidth/winHeight < 1.33 && winWidth <= 400 )
		{
			$('#the-awful-truth-poster').height('auto').width('100%').css('position', 'absolute');
		} else
		{
			$('#the-awful-truth-poster').height('auto').width('100%').css('position', 'static');
		}

		if ( winWidth/(winHeight - 80) > 1.33 )
		{
			$('.below-fold').hide();
		} else {
			$('.below-fold').show();

		}

	}

	$(function()
	{
		videoResize();
	});

	$(window).resize(function()
	{
		videoResize();
	});

	/*$('#poster').click(function()
	{

		$('html, body').delay(500).animate({
			scrollTop: $("#documentation").offset().top
		}, 500);

	});*/
</script>

</body>
</html>