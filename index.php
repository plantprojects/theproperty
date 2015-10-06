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
	<meta property="og:image" content="http://theproperty.gallery/images/i-was-there/i-was-there.jpg" />
    <meta property="og:description" content="440 Broadway, Mezzanine, Los Angeles, CA." />


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
			<li class="active"><a href="#press-release">Current</a></li>
			<li><a href="#exhibitions">Past</a></li>
		</ul>

		<div class="centered page-3">
		
			<div class="small-logo"></div>
			
			<ul id="content">
				<li id="press-release" class="active">

					<p>Upcoming: <a href="/kill-all-zombies"><i>Kill All Zombies</i></a></p>
                    <p>In recent years, contemporary abstraction in painting has been dominated by an extreme formal reductive-ness known as Zombie Formalism or Zombie Abstraction. Zombie Abstraction has spread its anemic tendrils everywhere; creating a glut of conceptually and formally thin abstract work across all media. Slight, tasteful Zombie works that use regurgitated Modernist formats and styles have infested galleries and art fairs worldwide, overtaking the contemporary dialogue around abstraction.</p>
                    <p>The show will include works by <b>David Gilbert</b>, <b>Lilly Aldriedge</b>, <b>John Mills</b>, <b>Cameron Crone</b>, <b>Kirk Stoller</b>, <b>John Houck</b>, <b>David Zuttermeister</b>, and <b>Julia Haft-Candell</b>.</p>


                    <p>Opening Reception: <b>Sunday, 10/11/15 from 4-7pm</b></p>

					<p>Hours: Saturday/Sunday, 12am-5pm and by appointment.</p>

					<p>The Property is an artist run exhibition space dedicated to the promotion of contemporary visual art, print and performance in and around the greater Los Angeles area. We are located at <a href="https://goo.gl/maps/WUxJp" target="_blank">440 Broadway</a> (2nd Floor)
						in downtown Los&nbsp;Angeles. Garage parking is available at 440 Broadway, $5.50 cash&nbsp;only. </p><br/>

					<p>Facebook: <a href="https://www.facebook.com/thepropertylosangeles" target="_blank">facebook.com/thepropertylosangeles</a></p>
					<p>Instagram: <a href="https://instagram.com/thepropertylosangeles/" target="_blank">@thepropertylosangeles</a></p>
					
					<p>Email: <a href='&#109;&#97;il&#116;o&#58;thep%72%&#54;Fpe&#37;72&#37;74%79&#37;2Egalle%&#55;2&#121;%2Ela&#64;&#103;%6D%61%69&#108;%2E%63om'>&#116;h&#101;propert&#121;&#46;g&#97;l&#108;e&#114;y&#46;la&#64;gmail&#46;c&#111;m</a></p>
					
					<!-- Begin MailChimp Signup Form -->
					<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
					<style type="text/css">
						#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
						/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
						   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
					</style>
					<div id="mc_embed_signup">
					<form action="//gallery.us9.list-manage.com/subscribe/post?u=e36d50cf8468e8592c060fab7&amp;id=b7bdd4fa8a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					    <div id="mc_embed_signup_scroll">
						<h2>The Property mailing list</h2>
					<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
					<div class="mc-field-group">
						<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
					</label>
						<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
					</div>
					<div class="mc-field-group">
						<label for="mce-FNAME">First Name </label>
						<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
					</div>
					<div class="mc-field-group">
						<label for="mce-LNAME">Last Name </label>
						<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
					</div>
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					    <div style="position: absolute; left: -5000px;"><input type="text" name="b_e36d50cf8468e8592c060fab7_b7bdd4fa8a" tabindex="-1" value=""></div>
					    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
					    </div>
					</form>
					</div>
					<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
					<!--End mc_embed_signup-->
				</li>
				
				<li id="exhibitions">
					<ul class="show-list">
                        <li>
                            <a href="error">
                                <h2>Error</h2>
                                <div class="date">July, 2015</div>
                                <p class="show-body">
                                    <i>Error</i> is a series of woven photographs by Willem Henri Lucas which started as a collection of video stills
                                    capturing crashing planes, and exploding and sinking ships that he then manipulated and degraded through multiple printing and scanning processes.</p></a>
                        </li>
						<li>
							<a href="shield-of-the-sky">
								<h2>Shield of the Sky</h2>
								<div class="date">June, 2015</div>
								<p class="show-body">
									<i>Shield of the Sky</i> is the latest collection of work by Liz Walsh which explores sources of natural entropy and an instinct to survive. On view June 6th through July 18th, 2015</p>
							</a>
						</li>
						<li>
							<a href="sculpture-drawing-sculpture-drawings">
								<h2>Sculpture Drawing Sculpture Drawings</h2>
								<div class="date">Apr<span class="shorten">il</span>, 2015</div>
								<p class="show-body">
									<i>Sculpture Drawing Sculpture Drawings</i>, new work by Los Angeles based artist Marty Schnapf on view April 25th - May 24th, 2015.</p>
								</p>
							</a>
						</li>
						<li>
							<a href="i-think-i-see">
								<h2>I think I see...</h2>
								<div class="date">Mar<span class="shorten">ch</span>, 2015</div>
								<p class="show-body"><i>I think I see...</i>  featuring the work of Justin John Greene, Dustin Metz, Becky Kolsrud, and Adam Novak, March 21st-April 19th, 2015. At a time when so much of the contemporary painting dialogue is dominated by a reductive abstract formalism, these four LA painters are finding a contemporary context for representational imagery.</p>
							</a>
						</li>

						<li>
							<a href="forests-hills-and-the-moon">
								<h2>Forests, Hills, and the Moon</h2>
								<div class="date">Feb<span class="shorten">ruary</span>, 2015</div>
								<p class="show-body"><i>Forests, Hills and the Moon</i>, new work by Emily Sevier, Shane Aslan Selzer and Liz Walsh, three artists whose work embodies the thrill of the chase, February 15th through March 15th, 2015.</p>
							</a>
						</li>
						
						<li>
							<a href="put-it-together-take-it-apart">
								<h2>Put It Together Take It Apart</h2>
								<div class="date">Jan<span class="shorten">uary</span>, 2015</div>
								<p class="show-body"><i>Put It Together Take It Apart</i>, new paintings by Los Angeles based artist Christopher Oliveria, January 17th - February 7th, 2015.</p>
							</a>
						</li>

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
								<p class="show-body">The Property is pleased to announce the opening of <i>The Awful Truth</i>, a solo exhibition by Los Angeles based sculptor and installation artist, Jon-Paul Villegas.</p>
							</a>
						</li>

						<li>
							<a href="4-painters">
								<h2>4 Painters</h2>
								<div class="date">Oct<span class="shorten">ober</span>, 2014</div>
								<p class="show-body">The Property is pleased to announce its second exhibition: <i>Four Painters</i>,
									including the work of Daniel Ingroff, Karla Wozniak, Adam Novak, and Katie&nbsp;Herzog. <i>Four Painters</i> will be on view through November 2nd.</p>
							</a>
						</li>

						<li>
							<a class="show-index" href="open-house">
								<h2>Open House</h2>
								<div class="date">Aug<span class="shorten">ust</span>, 2014</div>
								<p class="show-body">The Property's inaugural exhibition <i>Open House</i> featured the work of Chris Oliveria, Liz Walsh, Jon-Paul Villegas, Sarah Bostwick, Amy Sarkisian, Karen Lofgren, Bettina Hubby, Dave Hughes and Evan Jourdan.</p>
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