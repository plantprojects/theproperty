<!DOCTYPE html>
<html>
<head>
	<title>The Property - Willem Henri Lucas: Error | July 18th, 2015 - August 16th</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/error.css">
	
	<meta name="description" content="The Property: 440 Broadway, Mezzanine, Los Angeles, CA">
	<meta name="keywords" content="gallery, art gallery, artist space, The Property, art, Los Angeles, sculpture, painting, installation, video">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:title" content="The Property - Willem Henri Lucas: Error | July 18th - August 16th, 2015" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://theproperty.gallery/errors" />
	<meta property="og:image" content="http://theproperty.gallery/errors/willem-henri-lucas-error.jpg" />
	<meta property="og:description" content="440 Broadway, Mezzanine, Los Angeles, CA. 'Error', new work by Willem Henri Lucas, July 18th - August 16th, 2015. Opening reception Saturday July 25th, 2015" />



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
	$size = 'small/';
}
?>

<section id="poster">
	<img id="poster-img" src="images/error/<?php  echo $size ?>willem-henri-lucas-error.jpg" alt="Willem Henri Lucas: Errors'">

	<div id="poster-txt" class="pr">
		<h1>Willem Henri Lucas: Error</h1>

		<p>July 16th - August 16th, 2015</p>
		<p>Opening Reception:  <b>Saturday July 25th, 2015, 6-8pm</b>
		</p>

		<p>This series by Willem Henri Lucas started with a collection of video stills capturing crashing planes, exploding and sinking ships, etc. that he then manipulated by offsetting the RGB channels, running the images through bad quality printers and scanning these images back into the computer. He was interested in having these images fall apart as much as possible. The low res pdf's were then sent to an online weaving company resulting in a change of the color pallet.</p>
		
        <p>Willem Henri Lucas studied at the Academy of Visual Arts in Arnhem in the Netherlands and did his post academic studies at the Sandberg institute (Rietveld Academy) in Amsterdam. From 1990 to 2002 he served as a professor and chair of the Utrecht School of the Arts' Graphic Design department. He collaborates with individuals and institutions in the field of Culture and Art. In 1998 he designed holiday postage stamps for the PTT (Dutch Post and telecom company). He won several book design awards in the Netherlands and the US. Primarily a book designer (exploring sensibility of printed matter; in material as well as content), Lucas is interested in addressing social issues and bringing design back 'to the street,' and 'humanity' back into design, encouraging future designers to be a valuable part of their communities. His body of work deals with issues of 'war' and 'love', and 'the human condition.'</p>
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


<?php $showDate = 'july'; ?>
<?php include 'footer.php'; ?>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
  $(function() {

    $('#poster-img').click(function() {

      $('html, body').delay(500).animate({
        scrollTop: $("#poster-txt").offset().top
      }, 500);

    });
  });
</script>

<?php /*
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