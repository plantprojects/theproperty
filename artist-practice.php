<!DOCTYPE html>
<html>
<head>
	<title>Artist Practice book launch at The Property</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/artist-practice.css">
	<meta name="description" content="The Property: 440 Broadway, Mezzanine, Los Angeles, CA">
	<meta name="keywords" content="gallery, art gallery, artist space, The Property, art, Los Angeles, sculpture, painting, installation, video">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:title" content="'Artist Practice' book launch at The Property" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://theproperty.gallery/artist-practice" />
	<meta property="og:image" content="http://theproperty.gallery/images/artist-practice/artist-practice-book.jpg" />
	<meta property="og:description" content="'Artist Practice', book launch and reading at The Property February 5, 2015" />



	<?php require_once 'mobile_detect.php'; $detect = new Mobile_Detect; ?>
	<script>
		var isMobile = false;
		<?php if ( $detect->isMobile() ) { ?>
		// This is mobile
		isMobile = true;
		<?php } ?>
	</script>
</head>
<body id="artist-practice" class="past <?php if ( $detect->isMobile() ) { ?>device<?php } else { ?>computer<?php } ?>">


<section id="poster">
	<img src="images/artist-practice/artist-practice-book.jpg" width="100%" height="auto" id="artist-practice" alt="'Artist Practice', the book">

	<div class="below-fold">
		<div class="center">
			<h1>Artist Practice</h1>
			Book Release Event<br>
			February 5th, 2015 @ 8pm<br>
			<br>
			Musical performance by Corey Fogel
			<br>
			Selections from the book read by Madison Brookshire, Jay Erker, Stuart Krimko, John Mills, and Mark So



			<p>
				<i>Artist Practice</i> is a collection of personal essays written by thirteen Los Angeles based artists. Their work ranges from painter to poet, sculptor to filmmaker. The artists were asked to write with a focus on three things: their practice in the sense of how they work and how they make that a part of their life, how they understand the medium in which they work, and their specific creative process. The manner in which this manifested to paper was left up to each individual to approach however they felt most comfortable.
				The result is a selection of deeply honest and revealing texts written from distinctly different perspectives, providing great insight into the practice and process of the working artist.
			</p>
			<p>
				<br>
				Contributing Artists:<br>
<br>
				Sarah Bostwick<br>
				Madison Brookshire<br>
				Kate Brown<br>
				Jay Erker<br>
				Corey Fogel<br>
				Hannah Greely<br>
				Stuart Krimko<br>
				John Mills<br>
				Mark So<br>
				Tucker Stilley<br>
				Julie Tolentino<br>
				Jon Paul Villegas<br>
				Liat Yossifor
			</p>

			<br>
			<br>
			Curated and conceptualized by Clay Dean
			<br>
			<br>
			Edited by Tuni Chatterji and Clay Dean
			<br>
			<br>
			Limited Edition of 25<br>
			Paperback: 308 pages<br>
		</div>
	</div>

</section>


<?php $showDate = 'feb'; ?>
<?php include 'footer.php'; ?>


</body>
</html>