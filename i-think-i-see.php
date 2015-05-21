<!DOCTYPE html>
<html>
<head>
	<title>The Property - I think I see... : March 21st-April 19th, 2015</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="css/i-think-i-see.css">
	
	<meta name="description" content="The Property: 440 Broadway, Mezzanine, Los Angeles, CA">
	<meta name="keywords" content="gallery, art gallery, artist space, The Property, art, Los Angeles, sculpture, painting, installation, video">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:title" content="The Property - I think I see...: March, 2015" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://theproperty.gallery/i-think-i-see" />
	<meta property="og:image" content="http://theproperty.gallery/images/i-think-i-see/Justin-fb.jpg" />
	<meta property="og:description" content="440 Broadway, Mezzanine, Los Angeles, CA. 'I think I see...', featuring the work of Justin John Greene, Dustin Metz, Becky Kolsrud, and Adam Novak. March 21st-April 19th, 2015, opening reception Saturday, January 17th, 7 - 10pm." />



	<?php require_once 'mobile_detect.php'; $detect = new Mobile_Detect; ?>
	<script>
		var isMobile = false;
		<?php if ( $detect->isMobile() ) { ?>
		// This is mobile
		isMobile = true;
		<?php } ?>
	</script>
</head>
<body id="i-think-i-see" class="past <?php if ( $detect->isMobile() ) { ?>device<?php } else { ?>computer<?php } ?>">


<section id="poster">

<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide one"><img src="images/i-think-i-see/Justin1.jpg" alt="Poster by Justin John Greene"></div>
        <div class="swiper-slide two"><img src="images/i-think-i-see/Dustin1.jpg" alt="Poster by Dustin Metz"></div>
        <div class="swiper-slide three"><img src="images/i-think-i-see/Adam1.jpg" alt="Poster by Adam Novak"></div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
    
    <!-- <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>-->

</div>

</section>

<section id="documentation">
	<p>The Property is pleased to present <i>I think I see...</i>  featuring the work of <b>Justin John Greene</b>, <b>Dustin Metz</b>, <b>Becky Kolsrud</b>, and <b>Adam Novak</b>. At a time when so much of the contemporary painting dialogue is dominated by a reductive abstract formalism, these four LA painters are finding a contemporary context for representational imagery.</p>
					
	<p>Opening reception: <b>Saturday, March 21st at 7-10 pm</b>. The show will run from March 21st-April 19th.</p>
	
	<ul>
		<li>
			<img class="lazy" data-original="images/i-think-i-see/documentation/justin-john-greene-2.jpg" width="2000" height="1500" alt="Justin John Greene: Trouble with the Communications">
			<div class="caption">Justin John Greene, <i>Trouble with the Communications</i>, 2014</div>
		<li>
			<img class="lazy" data-original="images/i-think-i-see/documentation/dustin-metz-5.jpg" width="2000" height="1500" alt="Dustin Metz: Yellow Still Life">
			<div class="caption">Dustin Metz, <i>Yellow Still Life</i>, 2014</div>
		</li>
		<li>
			<img class="lazy" data-original="images/i-think-i-see/documentation/dustin-metz-4.jpg" width="2000" height="1500" alt="Dustin Metz: Orange Conversation">
			<div class="caption">Dustin Metz, <i>Orange Conversation</i>, 2013</div>
		</li>
		<li>
			<img class="lazy" data-original="images/i-think-i-see/documentation/adam-novak-steve-drives.jpg" width="2000" height="1500" alt="Steve Drives">
			<div class="caption">Adam Novak, <i>Steve Drives</i>, 2015</div>
		</li>
		<li>
			<img class="lazy" data-original="images/i-think-i-see/documentation/dustin-metz-2.jpg" width="2000" height="1500" alt="Dustin Metz: Lamp Red Still Life">
			<div class="caption">Dustin Metz, <i>Lamp Red Still Life</i>, 2013</div>
		</li>
		<li>
			<img class="lazy" data-original="images/i-think-i-see/documentation/becky-kolsrud.jpg" width="2000" height="1500" alt="Becky Kolsrud: Security Gate">
			<div class="caption">Becky Kolsrud, <i>Security Gate</i>, 2015</div>
		</li>
		<li>
			<img class="lazy" data-original="images/i-think-i-see/documentation/adam-novak-1.jpg" width="2000" height="1500" alt="Adam Novak: Slice">
			<div class="caption">Adam Novak, <i>Slice</i>, 2015</div>
		</li>
		<li>
			<img class="lazy" data-original="images/i-think-i-see/documentation/justin-john-greene-1.jpg" width="2000" height="1500" alt="Justin John Greene: King">
			<div class="caption">Justin John Greene, <i>King</i>, 2014</div>
		</li>
		<li>
			<img class="lazy" data-original="images/i-think-i-see/documentation/dustin-metz-3.jpg" width="2000" height="1500" alt="Dustin Metz: Face Still Life">
			<div class="caption">Dustin Metz, <i>Face Still Life</i>, 2014</div>
		</li>
		<li>
			<img class="lazy" data-original="images/i-think-i-see/documentation/dustin-metz-1.jpg" width="2000" height="1500" alt="Dustin Metz: Purple Chair and Plant">
			<div class="caption">Dustin Metz, <i>Purple Chair and Plant</i>, 2013</div>
		</li>
	</ul>
</section>


<?php $showDate = 'mar'; ?>
<?php include 'footer.php'; ?>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="lib/swiper.min.js"></script>
<script src="lib/jquery.lazyload.min.js"></script>

<script>

	$(document).ready(function () {
	
		var swiper = new Swiper('.swiper-container', {
			autoplay: 3000,
			speed: 500,
			loop: true,
			pagination: '.swiper-pagination',
			paginationClickable: true,
			centeredSlides: true
		});
		
   
  
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
		
		imgResize();

	});
	
	$(window).resize(function()  {
		imgResize();
	});
	
	function imgResize() {
	
		if ($(window).width() > 400) {
			var winHeight= $(window).height() - 40;		
			$('.swiper-slide img').height(winHeight).width(winHeight * 0.808); 
		} else {
			$('.swiper-slide img').height('auto').width('100%'); 
		}
	}

</script>

</body>
</html>