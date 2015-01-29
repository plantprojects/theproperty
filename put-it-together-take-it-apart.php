<!DOCTYPE html>
<html>
<head>
	<title>The Property - Put It Together Take It Apart: January, 2014</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/put-together-apart.css">
	<meta name="description" content="The Property: 440 Broadway, Mezzanine, Los Angeles, CA">
	<meta name="keywords" content="gallery, art gallery, artist space, The Property, art, Los Angeles, sculpture, painting, installation, video">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:title" content="The Property - Put It Together Take It Apart: January, 2014" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://theproperty.gallery/past/put-it-together-take-it-apart" />
	<meta property="og:image" content="http://theproperty.gallery/images/put-it-together-take-it-apart/chris-oliveria-poster.jpg" />
	<meta property="og:description" content="440 Broadway, Mezzanine, Los Angeles, CA. 'Put it together take it apart', new paintings by Christopher Oliveria, January 17th - February 7th, 2015, opening reception Saturday, January 17th, 7 - 10pm." />



	<?php require_once 'mobile_detect.php'; $detect = new Mobile_Detect; ?>
	<script>
		var isMobile = false;
		<?php if ( $detect->isMobile() ) { ?>
		// This is mobile
		isMobile = true;
		<?php } ?>
	</script>
</head>
<body id="put-it-together-take-it-apart" class="past <?php if ( $detect->isMobile() ) { ?>device<?php } else { ?>computer<?php } ?>">


<section id="poster">
	<img src="images/put-it-together-take-it-apart/chris-oliveria-poster.jpg" width="100%" height="auto" id="chris-oliveria-poster" alt="Put It Together Take It Apart: New paintings by Chris Oliveria">

	<div class="below-fold">
		<div class="center">
			<i>Put It Together Take It Apart</i><br>
			New paintings by <b>Christopher Oliveria</b><br>
			January 17th through February 7th, 2015
		</div>
	</div>

</section>


<section id="documentation">
	<ul>
		<li>
			<img class="lazy" data-original="images/put-it-together-take-it-apart/large/chris-oliveria-4.jpg" width="1200" height="900" alt="Christopher Oliveria: Put It Together Take It Apart">
		</li>
		<li>
			<img class="lazy" data-original="images/put-it-together-take-it-apart/large/chris-oliveria-2.jpg" width="1200" height="900" alt="Christopher Oliveria: Put It Together Take It Apart">
		</li>
		<li>
			<img class="lazy" data-original="images/put-it-together-take-it-apart/large/chris-oliveria-3.jpg" width="1200" height="900" alt="Christopher Oliveria: Put It Together Take It Apart">
		</li>
		<li>
			<img class="lazy" data-original="images/put-it-together-take-it-apart/large/chris-oliveria-4.jpg" width="1200" height="900" alt="Christopher Oliveria: Put It Together Take It Apart">
		</li>
	</ul>
</section>
<?php $showDate = 'jan'; ?>
<?php include 'footer.php'; ?>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="lib/jquery.easing.1.3.js"></script>
<script src="lib/jquery.lazyload.min.js"></script>

<script>

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

</script>

</body>
</html>