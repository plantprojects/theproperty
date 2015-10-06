<!DOCTYPE html>
<html>
<head>
	<title>The Property - Kill All Zombies | October 11th - November 14th, 2015</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/shield-of-the-sky.css">
	
	<meta name="description" content="The Property: 440 Broadway, Mezzanine, Los Angeles, CA">
	<meta name="keywords" content="gallery, art gallery, artist space, The Property, art, Los Angeles, sculpture, painting, installation, video">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:title" content="The Property - Kill All Zombies | October 11th - November 14th, 2015" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://theproperty.gallery/kill-all-zombies" />
	<meta property="og:image" content="http://theproperty.gallery/images/kill-all-zombies/zombies.jpg" />
	<meta property="og:description" content="440 Broadway, Mezzanine, Los Angeles, CA. 'Kill All Zombies', group exhibition, October 11th - November 14th, 2015." />



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
<body id="kill_all_zombies" class="past <?php if ( $detect->isMobile() ) { ?>device<?php } else { ?>computer<?php } ?>">

<?php
$size;
if ( $detect->isMobile() )
{
	$size = 'mobile/';
}
?>

<section id="poster">
	<h1><img src="images/kill-all-zombies/zombie.gif" alt="Kill All Zombies"></h1>

	<div class="pr">
		<p>October 11th - November 14th, 2015</p>
		<p>Opening Reception:  Sunday October 11th, 4-7pm</p>

        <p>In recent years, contemporary abstraction in painting has been dominated by an extreme formal reductive-ness known as Zombie Formalism or Zombie Abstraction. Zombie Abstraction has spread its anemic tendrils everywhere; creating a glut of conceptually and formally thin abstract work across all media. Slight, tasteful Zombie works that use regurgitated Modernist formats and styles have infested galleries and art fairs worldwide, overtaking the contemporary dialogue around abstraction.</p>
        <p>The show will include works by David Gilbert, Lilly Aldriedge, John Mills, Cameron Crone, Kirk Stoller, John Houck, David Zuttermeister, and Julia Haft-Candell.</p>

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

<?php //$showDate = 'oct'; ?>
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