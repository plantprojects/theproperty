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
	<meta property="og:image" content="http://theproperty.gallery/images/property_logo.jpg" />
	<meta property="og:description" content="440 Broadway, Mezzanine, Los Angeles, CA. Opening Reception: Thursday, October 9th, 2014, 7-10pm. The Property is pleased to announce its second exhibition: 'Four Painters', including the work of Daniel Ingroff, Karla Wozniak, Adam Novak, and Katie Herzog." />



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
		<div id="four-painters">
	
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
					7-10 pm
				</p>
			</div>
		</div>

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
					<p><i>The Property</i> is pleased to announce its second exhibition: <i>Four Painters</i>, including the work of Daniel Ingroff, Karla Wozniak, Adam Novak, and Katie&nbsp;Herzog.</p>

					<p><i>The Property</i> is an artist run exhibition space dedicated to the promotion of contemporary visual art, print and performance in and around the greater Los Angeles area.</p>
					
					<p>We are located at <a href="https://goo.gl/maps/WUxJp" target="_blank">440 Broadway</a> (2nd Floor)
						in downtown Los&nbsp;Angeles. Enter the building through the street level garage and take the stairs by the elevator to the buildings mezzanine level to visit the gallery. Garage parking is available at 440 Broadway, $5.50 cash&nbsp;only. </p>
		
					<p><b>Opening Reception: Thursday, October 9th, 2014, 7-10pm.</b></p>
					<p>Hours are 11-5 Saturday/Sunday and by appointment.</p>
					<p><a href='&#109;&#97;il&#116;o&#58;thep%72%&#54;Fpe&#37;72&#37;74%79&#37;2Egalle%&#55;2&#121;%2Ela&#64;&#103;%6D%61%69&#108;%2E%63om'>&#116;h&#101;propert&#121;&#46;g&#97;l&#108;e&#114;y&#46;la&#64;gmail&#46;c&#111;m</a></p>
				</li>
				
				<li id="exhibitions">
					<ul class="show-list">
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

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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