<!DOCTYPE html>
<html>
<head>
	<title>The Property</title>

	<link rel="stylesheet" type="text/css" href="lib/fancybox/jquery.fancybox.css">
	<link rel="stylesheet" type="text/css" href="css/on-broadway.css">
	<meta name="description" content="The Property: 440 Broadway, Mezzanine, Los Angeles, CA">
	<meta name="keywords" content="gallery, art gallery, artist space, The Property, art, Los Angeles, sculpture, painting, installation, video">
	<meta name="viewport" content="width=device-width">

	<meta property="og:title" content="The Property: On Broadway" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://theproperty.gallery/on-broadway" />
	<meta property="og:image" content="http://theproperty.gallery/images/on-broadway/OnBroadwayPosterShare.jpg" />
	<meta property="og:description" content="440 Broadway, Mezzanine, Los Angeles, CA. 'On Broadway' Friday, December 12th - Sunday December 14th, 2014, 6pm - 11pm.
	The Property is pleased bring you the multi-media exhibition 'On Broadway', featuring the work of Endia Beal, Benjamin Bergery, Jim Campbell, Jasper Fung, Clay Dean, Marcus Herse, Plastic Hand, and Theresa Sterner." />

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

<section id="poster">

	<div id="intro">

		<a id="lightbox-poster" class="fancybox" rel="group" href="images/on-broadway/OnBroadwayPoster.jpg"><img id="on-broadway-poster" src="images/on-broadway/OnBroadwayPoster.jpg" alt="On Broadway Poster"/></a>
		<img id="mobile-on-broadway-poster" src="images/on-broadway/OnBroadwayPoster.jpg" alt="On Broadway Poster"/>

		<div class="info">

			<h2>On Broadway</h2>

			<div id="pr" class="center">
				<p>The Property hosted the multi-media exhibition <i>On Broadway</i>, featuring the work of <a href="#endia-beal">Endia Beal</a>, <a href="#benjamin-bergery">Benjamin Bergery</a>,
					<a href="#jim-campbell">Jim Campbell</a>, <a href="#clay-dean">Clay Dean</a>, <a href="#jasper-fung">Jasper Fung</a>, <a href="#marcus-herse">Marcus Herse</a>,
					<a href="#plastic-hand">Plastic Hand</a>, and <a href="#theresa-sterner">Theresa Sterner</a> the nights of December 12th, 13th and 14th, 2014, with special
					musical performances on December 13th by Remainderless and Plastic Hand.</p>
				<p><i>On Broadway</i> was a presentation of projected, lit and amplified works housed in each of the storefronts of the 440 Broadway arcade mezzanine.  Viewers can expect an experience that falls somewhere in between after-hours museum browsing and window shopping, glimpsing each of the works through a glass wall with the option of entering each store-cum-gallery space for a closer look and listen.</p>
				<p>The Property would like to thank SRG Group, Parallel Acquisitions, Capital Insight, Bridge Real Estate, Brian Abdi of Bridge Real Estate, James Plannette, and <a target="_blank" href="http://civiccenterstudios.com/">Civic Center Studios</a> for their generous support.</p>
			</div>

		</div>
	</div>

</section>

<?php /*<img src="images/on-broadway/440broadway_inside_karate.jpg" alt="The Property, 440 Broadway, Los Angeles" width="100%" height="auto">*/?>
<img src="images/on-broadway/endia-beal/office_scene_install.jpg" alt="Endia Beal: Office Scene installation view" width="100%" height="auto">
<section id="endia-beal">

	<div class="artist">
		<div class="center">
			<h2>Endia Beal</h2>

			<div class="caption">
				<i>Office Scene</i>, 2013<br/>
				3:31 min video, New Haven, Connecticut
			</div>

			<div class="bio">
				<p>Endia Beal is a North Carolina based artist known for her photographic imagery and video installations. She explores the relationships of minority women within the corporate space based on her personal experiences.</p>
				<p>Beal obtained a dual BA in Studio Art with a concentration in Photography and a BA in Art History from the University of North Carolina at Chapel Hill. She graduated from Yale University School of Art with a Master of Fine Arts in Photography. Beal was included in group exhibitions at the Charles H. Wright Museum of African American History in Detroit, The Caribbean Cultural Center African Diaspora Institute in NYC, and the Milton Rhodes Center for the Arts in Winston-Salem, North Carolina.</p>
				<a href="http://endiabeal.com/#!/home" target="_blank">endiabeal.com</a>
			</div>
		</div>
	</div>
</section>

<?php /*<img src="images/on-broadway/440broadway_L1_L2_L3.jpg" alt="The Property, 440 Broadway, Los Angeles" width="100%" height="auto">*/ ?>
<img src="images/on-broadway/benjamin-bergery/french-kiss.jpg" alt="Benjamin Bergery: French Kiss" width="100%" height="auto">
<img src="images/on-broadway/benjamin-bergery/big-french-kiss-exterior.jpg" alt="Benjamin Bergery: Big French Kiss, exterior view" width="100%" height="auto">
<img src="images/on-broadway/benjamin-bergery/the-bed.jpg" alt="Benjamin Bergery: The Bed installation view" width="100%" height="auto">

<section id="benjamin-bergery">

	<div class="artist">
		<div class="center">
			<h2>Benjamin Bergery</h2>

			<div class="caption">
				<i>French Kiss</i>, 2014<br/>
				<i>Big French Kiss</i>, 2014<br/>
				<i>The Bed</i>, 2014<br/>
				Fresnel lights, custom electronics by Jim Campbell

			</div>

			<div class="bio">
				<p>Benjamin Bergery's work in the beginning of video and interactive art was supported by the US National Endowment for the Arts, and the Council for the Arts in Massachusetts and California. He made a dozen video pieces, with airings on PBS and screenings in video art venues. With Jan Crocker, he was one of the pioneers of music videos, shooting groups like The Cure, The Buzzcocks, and others in Boston clubs.</p>
				<p>Bergery has taught at MIT and USC, and has worked at Atari, Lucasfilm and Panavision. After a career in the movie industry, Bergery returned to media installation art, applying his experience acquired with cinematography and cinematic lighting. Benjamin has exhibited in the church of Saint-Sulpice, Paris Nuit Blanche, Perth International Art Festival in Australia, and venues in Europe and the US, including a solo show at the LUMA museum in Chicago. His light and video work explores sacred art, primitive cinema, and the philosophy of media.</p>
				<p>Bergery currently lives and works in Paris, France.</p>
				<a href="http://benjaminbergery.com" target="_blank">benjaminbergery.com</a>
			</div>
		</div>
	</div>
</section>

<?php /*<img src="images/on-broadway/440broadway_Karate_looking_in_close.jpg" alt="The Property, 440 Broadway, Los Angeles" width="100%" height="auto">*/?>
<?php /*<img src="images/on-broadway/jim-campbell/glimpse-install.jpg" alt="Jim Campbell: Glimpse, installation view" width="100%" height="auto">*/ ?>
<img src="images/on-broadway/jim-campbell/glimpse.jpg" alt="Jim Campbell: Glimpse" width="100%" height="auto">

<section id="jim-campbell">

	<div class="artist">
		<div class="center">
			<h2>Jim Campbell</h2>

			<div class="caption">
				<i>Glimpse</i>, 2007<br/>
				Video Projector, DVD Player, slide projector, blank slides, custom electronics.
			</div>

			<div class="artwork">
				<p>A slide projector and a video projector point to the same spot on a wall. The superimposed projections from the two formats cause the video projection of found home movies to be washed out and nearly indecipherable. Every time a new image or edit point occurs in the video stream, the slide projector moves to the next slide so only the first second of every new camera shot from the home movies is visible.</p>
			</div>

			<blockquote>
				About 5 years ago I started making works that incorporated found home movie footage in a liminal way.  As the movies were presented in extremely low resolution, none of the details of the images were visible to the viewers, giving them a somewhat "universal" home movie feel. Glimpse, which also uses found home movies, presents the films obscured/washed out by the light of a slide projector such that only the beginning of each camera shot is visible.  This structure makes Glimpse liminal in a different perceptual dimension compared to my other home movie based works.   One needs to use short term memory and edge recognition to comprehend the moving imagery of Glimpse.

				<cite>Jim Campbell</cite>
			</blockquote>

			<div class="bio">
				<p>Jim Campbell (b. 1956). Campbell's work has been exhibited internationally and throughout North America in institutions such as the Whitney Museum of American Art, New York; the San Francisco Museum of Modern Art; The International Center for Photography, New York; The J. Paul Getty Museum, Los Angeles and the Museum of Contemporary Art, Sydney, Australia. His electronic art work is included in the permanent collections of the Museum of Modern Art, New York; the Smithsonian American Art Museum, Washington, DC; the Whitney Museum of American Art; the Metropolitan Museum of Art, New York; the San Francisco Museum of Modern Art; the de Young Museum, San Francisco and the Berkeley Art Museum. In 2012, he was the recipient of the San Francisco Museum of Modern Art's 13th Annual Bay Area Treasure Award. Previous honors include a Rockefeller Foundation Fellowship Award in Multimedia, three Langlois Foundation Grants and a Guggenheim Fellowship Award. He has two Bachelor of Science Degrees in Mathematics and Engineering from MIT and as an engineer holds nearly twenty patents in the field of video image processing. A monograph of his work, Material Light, was published by Hatje Cantz in 2010.</p>
				<a href="http://jimcampbell.tv" target="_blank">jimcampbell.tv</a>
			</div>
		</div>
	</div>
</section>

<?php /*<img src="images/on-broadway/440broadway_R1_R2.jpg" alt="The Property, 440 Broadway, Los Angeles" width="100%" height="auto">*/ ?>
<img src="images/on-broadway/clay-dean/not-west-of-western-scientology.jpg" alt="Clay Dean: Not West of Western install" width="100%" height="auto">

<section id="clay-dean">

	<div class="artist">
		<div class="center">
			<h2>Clay Dean</h2>

			<div class="caption">
				<i>Not West of Western</i>, 2011<br/>
				16mm, b/w, sound, 13.5 min
			</div>

			<div class="artwork">
				<p>Walking within parameters that define the heart of Los Angeles, <i>Not West of Western</i> explores the cross section of still photography and cinema
					while at the same time calling attention to the unique cross-cultural landscape of the city.
					The short will be shown on film with a 16mm looping projector, mixing the hum of mechanical projection with the film's ambient soundtrack of the Los Angeles landscape. Dean highlights the pedestrian's view of the city's center, pausing on neighborhood scenes before blinking and traveling on to the next tableau.  Not West of Western is an honest view of Los Angeles, the Los Angeles that just woke up and forgot to put on its make-up, or maybe even its pants.</p>
			</div>

			<div class="bio">
				<p>Clay Dean is a visual artist who takes a methodological and metaphysical approach toward the understanding of material and environment. This results in images and objects that are born from process and an exploration of the formal qualities of medium. His most recent work looks at the intersection of the still and moving image by re-contextualizing the remnants of urban spaces. His work has been shown at Film Forum (Los Angeles), Dhaka International Film Festival (Bangladesh), STARZ Film Center (Denver), Museum of Contemporary Art (Los Angeles), and most recently as a solo exhibition at WEEKEND Gallery (Los Angeles). Clay Dean lives and works in Los Angeles, California.</p>

				<a href="http://www.weekendspace.org/Clay%20Dean%20Exhibition%20Page.htm" target="_blank">www.weekendspace.org</a>
			</div>
		</div>
	</div>
</section>

<?php /*<img src="images/on-broadway/440broadway_R1_looking_in_far_crop.jpg" alt="The Property, 440 Broadway, Los Angeles" width="100%" height="auto">*/ ?>
<img src="images/on-broadway/jasper-fung/many-small-people.jpg" alt="Jasper Fung: Many small people" width="100%" height="auto">

<section id="jasper-fung">

	<div class="artist">
		<div class="center">
			<h2>Jasper Fung</h2>

			<div class="caption">
				<i>Many small people</i>, 2014<br/>
				A recording composition as an audio diary.<br/>
				Footage: East side gallery, Berlin, Deutschland (21.6.2014 ) & 7.1 Demonstration on the street (1.7.2014), Hong Kong
			</div>

			<div class="artwork">
				<p><i>Many small people</i> is a sound piece comprised of audio collected from protest events in Hong Kong and the site of the former Berlin wall in Germany, superimposed on one another, bringing the audience to an unrealistic place representing the artist's imagination. After the handover of Hong Kong to China in 1997,  the democracy and freedom formerly experienced by its citizens has been challenged by the Chinese Communists through excessive assimilation. By superimposing the ambient sounds of Berlin, which Fung believes has a history similar to present day Hong Kong, <i>Many small people </i>hints at what the artist is yearning for in post-colonial Hong&nbsp;Kong.</p>
			</div>

			<div class="bio">
				<p>Jasper Fung (b.1988), is a Hong Kong based artist and keyboardist. His work intertwines installation, music and sonic composition in a way that significantly arouses introspection into today's often coarse and discourteous world in an era of rapidly declining social interaction. Fung's work explores the terrain over classical, alternative, sound and space, rooted in his determination to challenge prevailing models of traditional discipline.</p>
				<p>In 2012, Fung received his Bachelor Degree in School of Creative Media, City University of Hong Kong. He finished his first exhibition, "Discordia", 10 Chancery Lane Gallery with various Hong Kong young artists. in the same year, Fung co-organized the project DIODE, a platform to explore the unique experiences in sound art performance. In June 2014, Fung was invited to Goldsmiths, University of London for the international conference for New Interfaces Musical Expression.</p>
				<a href="http://jasperfungty.com/" target="_blank">jasperfungty.com</a>
			</div>
		</div>
	</div>
</section>

<?php /*<img src="images/on-broadway/mall_elevators.png" alt="The Property, 440 Broadway, Los Angeles" width="100%" height="auto">*/ ?>
<img src="images/on-broadway/marcus-herse/training.jpg" alt="Marcus Herse: Training" width="100%" height="auto">

<section id="marcus-herse">

	<div class="artist">
		<div class="center">
			<h2>Marcus Herse</h2>

			<div class="caption">
				<i>Training</i>, 2014<br/>
				Hd video-loop, monitor, chairs<br/>
				dimensions variable<br/>
			</div>

			<div class="bio">
				<p>Marcus Herse is a Los Angeles based artist. Born in 1975 in Dinslaken, Germany, he studied painting at the Kunstakademie in D&uuml;sseldorf,
					where he received the Meistersch&uuml;ler Title in 2001 and the Akademiebrief in 2004. He was awarded a DAAD postgraduate grant and studied at the
					University of California, Los Angeles, in 2002 and 2003. He is a recipient of the dHCS Studio Stipend hosted by the Kunstverein D&uuml;sseldorf (2007 - 2009),
					and a fellowship artist of the Contemporary Collectors Orange County (2014). Recent solo shows include Galleria at Greene Exhibitions, Los Angeles (2013),
					Almost ther at Commonwealth & Council, Los Angeles (2014), Agent at Ginerva Gambino, Cologne (2014), and an upcoming Solo Show at Greene Exhibitions in
					January 2015. His work has been included i.a. in the exhibitions Talking to Rocks, Villa Romana, Florence, Italy (2010); Love Letter to a Surrogate,
					MUHKA, Antwerp, Belgium (2011); Jendreiko fragt WAS NUN?, Schmela Haus, Kunstsammlung NRW, Germany (2010); Another Cats Show, 356 Mission Los Angeles CA (2014);
					Von Wanderern, Wilderern & Dilettanten, dHCS Grant Exhibition, and  St&auml;dtische B&uuml;hne, Kunstverein D&uuml;sseldorf, Germany (2007, 2009, 2013);
					Without Kubrick..., Lothringer 13 - St&auml;dtische Kunsthalle M&uuml;nchen, Germany (2009). Herse is represented by Greene Exhibitions in Los Angeles and G&iacute;nerva Gambino in Cologne.</p>
				<a href="http://marcusherse.com" target="_blank">marcusherse.com</a>
			</div>
		</div>
	</div>
</section>

<?php /*<img src="images/on-broadway/440broadway_R1_w_people.jpg" alt="The Property, 440 Broadway, Los Angeles" width="100%" height="auto">*/ ?>
<img src="images/on-broadway/plastic-hand/projection-install.jpg" alt="Plastic Hand" width="100%" height="auto">

<section id="plastic-hand">

	<div class="artist">
		<div class="center">
			<h2>Plastic Hand</h2>

			<div class="bio">
				<p>Plastic Hand is a synth/drum project from Los Angeles comprised of Eric Landmark, Alex Theodoropulos, Kurt Keppeler and Liz Walsh. Their sound is a blend of multiple analog synths, enhanced by the use of echo, fuzz, and driving percussion. The sound is further defined by the interplay of three distinct vocal styles. Echoes of Krautrock, synth punk, and 80's horror soundtracks can be heard. All members of the group have origins in San Francisco, having performed in the bands Numbers, Condor, Arms and Legs and Shygrape.</p>

				<p>Live performances include mixed visual projections incorporating hand drawn animation, geometrics, and heavy video effects. All four members have an extensive film and video background and collaborate to create a lavish optical environment rife with mythical, and natural iconography.</p>


				<a href="https://soundcloud.com/plastic-hand-1" target="_blank">soundcloud page</a><br>

				<a href="https://www.facebook.com/PlasticHand" target="_blank">www.facebook.com/PlasticHand</a>
			</div>
		</div>
	</div>
</section>


<?php /*<img src="images/on-broadway/440broadway_07_L5_lawyers_office.jpg" alt="The Property, 440 Broadway, Los Angeles" width="100%" height="auto">*/ ?>
<img src="images/on-broadway/theresa-sterner/a-collection-of-banished-spaces-2.jpg" alt="Theresa Sterner: A collection of banished spaces" width="100%" height="auto">
<img src="images/on-broadway/theresa-sterner/a-collection-of-banished-spaces-1.jpg" alt="Theresa Sterner: A collection of banished spaces" width="100%" height="auto">

<section id="theresa-sterner">

	<div class="artist">
		<div class="center">
			<h2>Theresa Sterner</h2>

			<div class="caption">
				<i>A collection of banished spaces</i>, 2014<br/>
				Two channel projected video installation
			</div>

			<!--<div class="artwork">
			</div>-->

			<div class="bio">
				<p>Sterner's sculptural video installations present the experience of moving through an everyday landscape as seen through a lens, a veil, and possibly yet another screen. The viewer is engulfed in a familiar landscape, but twice or three times removed, to create a meta, almost ghost-like experience where the landscape is real and the viewer is the apparition.</p>

				<p>Theresa Sterner (b.1985) received her BFA from the University of Oregon and her MFA from Tyler School of Art in Philadelphia.  Growing up amidst a backdrop of open farmland and blue-collar towns in the Pacific Northwest, and traveling throughout the deserts of the southwestern United States has influenced her interest in how environment and physical structures affect one's sense of identity and agency within a place.   Based in Brooklyn, New York, she makes sculpture and video that explores perception and landscape through physical casts and digital impressions.</p>
				<p>She has exhibited in Portland, Philadelphia, New York, Los Angeles, Sweden and Mexico and has been a part of numerous projects, such as a collaboration with the Royal Institute of Art in Stockholm for a residency at the Stripa Mine, a historic iron ore mine in Bergslagen Sweden. She is currently working on a collaborative article about ornamentation and the construction of individual identity with a specialist in Southwestern US Archaeology at the University of New Mexico.</p>
				<a href="http://www.theresasterner.com/" target="_blank">www.theresasterner.com</a>
			</div>
		</div>
	</div>
</section>



	<?php $showDate = 'dec'; ?>
	<?php include 'footer.php'; ?>


	

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="lib/fancybox/jquery.fancybox.js"></script>
	<!--<script src="lib/jquery.easing.1.3.js"></script>-->
	<!--<script src="lib/modernizr.custom.js"></script>-->

<script>
	$(function()
	{
		$(".fancybox").fancybox();

		$('h1').click(function()
		{
			$('html,body').animate({scrollTop: $('#intro').offset().top}, 500);
		});

		$('#pr a').click(function(){
			$('html, body').animate({
				scrollTop: $( $.attr(this, 'href') ).offset().top
			}, 500);
			return false;
		});

	});

	$(window).load(function()
	{
		titlePosition();
	});

	$(window).resize(function()
	{
		titlePosition();
	});

	function titlePosition()
	{
		if ($(window).height() < $('.header img').height() )
		{
			$('.center-wrapper').css('bottom', ($('.header img').height() - $(window).height()) - 50);
		} else {
			$('.center-wrapper').css('bottom', 0);
		}
	}

</script>

</body>
</html>