<!DOCTYPE html>
<html>
<head>
	<title>The Property - Liz Walsh: Shield of the Sky | June 6th - July 5th, 2015</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/shield-of-the-sky.css">
	
	<meta name="description" content="The Property: 440 Broadway, Mezzanine, Los Angeles, CA">
	<meta name="keywords" content="gallery, art gallery, artist space, The Property, art, Los Angeles, sculpture, painting, installation, video">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:title" content="The Property - Liz Walsh: Shield of the Sky | June 6th - July 5th, 2015" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://theproperty.gallery/shield-of-the-sky" />
	<meta property="og:image" content="http://theproperty.gallery/images/shield-of-the-sky/liz-walsh-shield-of-the-sky.jpg" />
	<meta property="og:description" content="440 Broadway, Mezzanine, Los Angeles, CA. 'Shield of the Sky', new work by Liz Walsh, June 6th - July 5th, 2015. Opening reception Saturday June 6th, 2015, 6-10pm, 8pm music featuring 200RYT and Case Hudson." />



	<?php require_once 'mobile_detect.php'; $detect = new Mobile_Detect; ?>
	<script>
		var isMobile = false;
		<?php if ( $detect->isMobile() ) { ?>
		// This is mobile
		isMobile = true;
		<?php } ?>
	</script>
</head>
<body id="sculpture-drawing" class="past <?php if ( $detect->isMobile() ) { ?>device<?php } else { ?>computer<?php } ?>">

<?php
$size;
if ( $detect->isMobile() )
{
	$size = 'mobile/';
}
?>

<section id="poster">
	<img src="images/shield-of-the-sky/<?php  echo $size ?>liz-walsh-shield-of-the-sky.jpg" alt="Liz Walsh, 'Shield the Sky'">

	<div class="pr">
		<h1>Liz Walsh: Shield of the Sky</h1>

		<p>June 6th - July 5th, 2015</p>
		<p>Opening Reception:  <b>Saturday June 6th, 2015, 6-10pm</b><br/>
			8pm music featuring 200RYT and Case Hudson
		</p>

		<p>Shield of the Sky is the latest collection of work by Liz Walsh opening at The Property Gallery in Los Angeles, CA. The show explores sources of natural entropy and an instinct to survive. The structures found in the wild, as well as our most civilized hierarchy contain the elements of destruction and inception. Through a set of rudimentary constructions and paintings, this dichotomy is analyzed.</p>
	</div>
</section>


<?php /*
<section id="documentation">
	<ul>
		<li>
			<img class="lazy" data-original="images/sculpture-drawing/<?php  echo $size ?>marty-schnapf-02.jpg" width="1200" height="600" alt="Marty Schnapf, 'Sculpture Drawing Sculpture Drawings'">
		</li>
		<li>
			<img class="lazy" data-original="images/sculpture-drawing/<?php  echo $size ?>marty-schnapf-03.jpg" width="1200" height="600" alt="Marty Schnapf, 'Sculpture Drawing Sculpture Drawings'">
		</li>
		<li>
			<img class="lazy" data-original="images/sculpture-drawing/<?php  echo $size ?>marty-schnapf-04.jpg" width="1200" height="600" alt="Marty Schnapf, 'Sculpture Drawing Sculpture Drawings'">
		</li>
		<li>
			<img class="lazy" data-original="images/sculpture-drawing/<?php  echo $size ?>marty-schnapf-05.jpg" width="1200" height="600" alt="Marty Schnapf, 'Sculpture Drawing Sculpture Drawings'">
		</li>
		<li>
			<img class="lazy" data-original="images/sculpture-drawing/<?php  echo $size ?>marty-schnapf-06.jpg" width="1200" height="600" alt="Marty Schnapf, 'Sculpture Drawing Sculpture Drawings'">
		</li>
		<li>
			<img class="lazy" data-original="images/sculpture-drawing/<?php  echo $size ?>marty-schnapf-07.jpg" width="1200" height="600" alt="Marty Schnapf, 'Sculpture Drawing Sculpture Drawings'">
		</li>
		<li>
			<img class="lazy" data-original="images/sculpture-drawing/<?php  echo $size ?>marty-schnapf-08.jpg" width="1200" height="600" alt="Marty Schnapf, 'Sculpture Drawing Sculpture Drawings'">
		</li>
		<li>
			<img class="lazy" data-original="images/sculpture-drawing/<?php  echo $size ?>marty-schnapf-09.jpg" width="1200" height="600" alt="Marty Schnapf, 'Sculpture Drawing Sculpture Drawings'">
		</li>
	</ul>
</section>
*/?>


<?php $showDate = 'june'; ?>
<?php include 'footer.php'; ?>

<?php /*
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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
*/ ?>

</body>
</html>