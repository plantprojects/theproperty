<!DOCTYPE html>
<html>
<head>
	<title>The Property</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="description" content="The Property: 440 Broadway, Mezzanine, Los Angeles, CA">
	<meta name="keywords" content="gallery, art gallery, artist space, The Property, art, Los Angeles, sculpture, painting, installation, video">
	<meta name="viewport" content="width=device-width">

	<meta property="og:title" content="The Property" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://theproperty.gallery" />
	<meta property="og:image" content="http://theproperty.gallery/images/put-it-together-take-it-apart/chris-oliveria-poster-lg.jpg" />
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
<body class="<?php if ( $detect->isMobile() ) { ?>device<?php } else { ?>computer<?php } ?>">


<section id="home">
	<h1><a href="javascript:void(0);" class="start"><?php if ( !$detect->isMobile() ) { ?><img src="images/property_logo.jpg" alt="The Property"/><?php } ?></a></h1>
</section>

<section id="current-show" class="page-2">

</section>

<section id="info">

	<ul id="nav">
		<li class="active"><a href="#press-release">Press Release</a></li>
		<li><a href="#exhibitions">Exhibitions</a></li>
	</ul>

	<div class="centered page-3">

		<div class="small-logo"></div>

		<ul id="content">
			<li id="press-release" class="active">

				<p>On view through February 7th: <i>Put It Together Take It Apart</i>, new paintings by Los Angeles based artist <b>Christopher Oliveria</b>.</p>

				<p>Hours: Saturday/Sunday, 11am-5pm and by appointment.</p>

				<p>The Property is an artist run exhibition space dedicated to the promotion of contemporary visual art, print and performance in and around the greater Los Angeles area. We are located at <a href="https://goo.gl/maps/WUxJp" target="_blank">440 Broadway</a> (2nd Floor)
					in downtown Los&nbsp;Angeles. Garage parking is available at 440 Broadway, $5.50 cash&nbsp;only. </p>

				<p><a href='&#109;&#97;il&#116;o&#58;thep%72%&#54;Fpe&#37;72&#37;74%79&#37;2Egalle%&#55;2&#121;%2Ela&#64;&#103;%6D%61%69&#108;%2E%63om'>&#116;h&#101;propert&#121;&#46;g&#97;l&#108;e&#114;y&#46;la&#64;gmail&#46;c&#111;m</a></p>
			</li>

			<li id="exhibitions">
				<ul class="show-list">
					<?php /* <li>
							<a href="the-awful-truth">
								<h2>The Awful Truth</h2>
								<div class="date">Nov<span class="shorten">ember</span>, 2014</div>
								<p class="show-body">The Property is pleased to announce the opening of <i>The Awful Truth</i>, a solo exhibition by Los Angeles based sculptor and installation artist, Jon-Paul Villegas. </p>
							</a>
						</li>*/ ?>

					<li>
						<a href="on-broadway">
							<h2>On Broadway</h2>
							<div class="date">Dec<span class="shorten">ember</span>, 2014</div>
							<p class="show-body">The Property is pleased to announce the multi-media exhibition <i>On Broadway</i>, featuring the work of Endia Beal, Benjamin Bergery, Jim Campbell, Clay Dean, Jasper Fung, Marcus Herse, Plastic Hand, and Theresa Sterner.
								The event will take place the nights of December 12th, 13th and 14th, from 6pm to 11pm, with special performances on December 13th by Remainderless at 9pm and Plastic Hand at 10pm.

							</p>
						</a>
					</li>

					<li>
						<a href="the-awful-truth">
							<h2>The Awful Truth</h2>
							<div class="date">Nov<span class="shorten">ember</span>, 2014</div>
							<p class="show-body">The Property is pleased to announce the opening of The Awful Truth, a solo exhibition by Los Angeles based sculptor and installation artist, Jon-Paul Villegas.</p>
						</a>
					</li>

					<li>
						<a href="4-painters">
							<h2>4 Painters</h2>
							<div class="date">Oct<span class="shorten">ober</span>, 2014</div>
							<p class="show-body"><i>The Property</i> is pleased to announce its second exhibition: <i>Four Painters</i>,
								including the work of Daniel Ingroff, Karla Wozniak, Adam Novak, and Katie&nbsp;Herzog. <i>Four Painters</i> will be on view through November 2nd.</p>
						</a>
					</li>

					<li>
						<a class="show-index" href="open-house">
							<h2>Open House</h2>
							<div class="date">Aug<span class="shorten">ust</span>, 2014</div>
							<p class="show-body">The Property's inaugural exhibition 'Open House' featured the work of Chris Oliveria, Liz Walsh, Jon-Paul Villegas, Sarah Bostwick, Amy Sarkisian, Karen Lofgren, Bettina Hubby, Dave Hughes and Evan Jourdan.</p>
						</a>
					</li>
				</ul>
			</li>
			<!--<li id="future">Future</li>-->
		</ul>
	</div>
</section>

<div id="past">
	<?php // include 'past/open-house.php'; ?>
</div>

<script src="lib/jquery.min.js"></script>
<script src="lib/jquery.easing.1.3.js"></script>
<script src="js/functions.js"></script>
<!--<script src="lib/modernizr.custom.js"></script>-->

<script>
	setTimeout(function() {
		if (location.hash) {
			window.scrollTo(0, 0);
		}
	}, 1);
</script>

</body>
</html>