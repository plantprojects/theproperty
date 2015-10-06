<!DOCTYPE html>
<html>
<head>
	<title>The Property - I Was There | September 12th - October 4th, 2015</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/shield-of-the-sky.css">
	
	<meta name="description" content="The Property: 440 Broadway, Mezzanine, Los Angeles, CA">
	<meta name="keywords" content="gallery, art gallery, artist space, The Property, art, Los Angeles, sculpture, painting, installation, video">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:title" content="The Property - I Was There | September 12th - October 4th, 2015" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://theproperty.gallery/i-was-there" />
	<meta property="og:image" content="http://theproperty.gallery/images/i-was-there/i-was-there-poster.jpg" />
	<meta property="og:description" content="440 Broadway, Mezzanine, Los Angeles, CA. 'I Was There', group exhibition, September 12th - October 4th, 2015." />



	<?php require_once 'mobile_detect.php'; $detect = new Mobile_Detect; ?>
	<script>
		var isMobile = false;
		<?php if ( $detect->isMobile() ) { ?>
		// This is mobile
		isMobile = true;
		<?php } ?>
	</script>

    <style>
        h1 {
            margin: 0 auto 20px;
        }
    </style>
</head>
<body id="shield_of_the_sky" class="past <?php if ( $detect->isMobile() ) { ?>device<?php } else { ?>computer<?php } ?>">

<?php
$size;
if ( $detect->isMobile() )
{
	$size = 'mobile/';
}
?>

<section id="poster">
	<h1><img src="images/i-was-there/i-was-there-poster.jpg" alt="I Was There"></h1>

	<div class="pr">
		<p>September 12th - October 4th 2015</p>
		<p>Opening Reception:  Saturday September 12th, 6-9pm</p>

        <p><i>I Was There</i> is a small-scale survey documenting contemporary takes on landscape, media, portraiture and place.  Culled from an eclectic mix of artists from a variety of backgrounds including painting, photography, sculpture, and comedy, <i>I Was There</i> seeks to provide a fleeting glimpse into the immense variety of strategies utilized by contemporary artists to explore issues of identity, representation and self-location in this second, increasingly dematerialized decade of the 21st century.   By selecting a handful of artists who approach this cultural landscape with a wide array of archly specific perspectives ranging from meditative immersion, to formal perspectival experimentation, to quasi-narcissistic self-insinuation and media appropriation, the exhibition seeks to softly accumulate a furtive, wispily temporary consensus on how we see, interpret and re-depict the world that surrounds us at this moment in our cultural history.</p>
        <p>Hayley Barker, Jonathon Hornedo, Rachael Neubauer, Jon-Paul Villegas, Kim Weller, Alex Sanchez, Mike Upchurch & Chris Fairbanks, Matthew Steven Arnone, and Nick Ackerman.</p>

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

<?php $showDate = 'sept'; ?>
<?php include 'footer.php'; ?>


<?php /*<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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
</script>*/ ?>

</body>
</html>