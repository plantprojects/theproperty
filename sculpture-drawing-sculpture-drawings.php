<!DOCTYPE html>
<html>
<head>
	<title>The Property - Sculpture Drawing Sculpture Drawings: April 25th - May 24th, 2015</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="css/sculpture-drawing.css">
	
	<meta name="description" content="The Property: 440 Broadway, Mezzanine, Los Angeles, CA">
	<meta name="keywords" content="gallery, art gallery, artist space, The Property, art, Los Angeles, sculpture, painting, installation, video">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:title" content="The Property - Marty Schnapf: Sculpture Drawing Sculpture Drawings, April 25th - May 24th, 2015" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://theproperty.gallery/sculpture-drawing-sculpture-drawings" />
	<meta property="og:image" content="http://theproperty.gallery/images/sculpture-drawing/marty-schnapf-02.jpg" />
	<meta property="og:description" content="440 Broadway, Mezzanine, Los Angeles, CA. New work by Marty Schnapf on view April 25th - May 24th, 2015. Closing reception May 23rd, 2015." />



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
	<img src="images/sculpture-drawing/<?php  echo $size ?>marty-schnapf-01.jpg" alt="Marty Schnapf, 'Sculpture Drawing Sculpture Drawings'">
	<div class="caption">photo credit: Brica Wilcox </div>

	<div class="pr">
		<h1>Marty Schnapf: Sculpture Drawing Sculpture Drawings</h1>

		<p>April 25th - May 24th, 2015</p>
		<p>Opening Reception:  <b>Saturday, April 25th, 2015, 7-11pm</b><br/>
		Musical performance by Master Class at 8pm
		</p>

		<p>The Property is pleased to present new work by Los Angeles based artist Marty Schnapf and musical performance by Brooklyn based electronic duo Master Class.</p>

		<p><i>In </i>Sculpture Drawing Sculpture Drawings<i>, Marty Schnapf continues to explore the perceptual concurrence of individuality and indivisibility. Drawn while in a self-induced trance, Schnapf's ongoing Lineament series confronts the impossible task of willful release as he attempts to surrender his hand to the appearance of preternatural visages. Meanwhile, convoluting the navigability of the gallery, a room sized sculpture, Seven Brides For Seven Brothels, invites viewers to enter the post-coital curve of successive right angles.</i></p>

		<p>Based in Los Angeles, multidisciplinary artist Marty Schnapf has exhibited work throughout the US and internationally including at Vooruit, in Ghent, Kaaistudios in Brussels, 3rd Ward in Brooklyn, The Portland Institute of Contemporary Art, Ballhaus Ost in Berlin, and Caranza 25 in Mexico City.</p>

	</div>
</section>



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



<?php $showDate = 'apr'; ?>
<?php include 'footer.php'; ?>


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


</body>
</html>