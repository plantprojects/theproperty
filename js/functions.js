var animation_complete = false,
	winWidth,
	winHeight,
	bgWidth,
	bgHeight,
	logoHeight,
	logoWidth,
	marginTop,
	marginLeft,
	logoSrc = 'images/property_logo.jpg',
	logoSrcHover = 'images/property_logo_hover.jpg',
	vidWidth = 1900,
	vidHeight = 1140,
	vidHeightRatio = vidHeight/vidWidth,
	vidWidthRatio = vidWidth/vidHeight,
	start_logo_resize = true;

// Desktop only Stop/Start video and hover effects
if ( !isMobile )
{
	// Pause video when leave focus of web page
	/*$(window).blur(function()
	{
		if ($('#fireworks').length === 1 )
		{
		$('#fireworks').get(0).pause();
		}
	});*/
	// Play video when return focus
	/*$(window).focus(function()
	{
		if ($('#fireworks').length === 1 )
		{
		$('#fireworks').get(0).play();
		}
	});*/

	//Hove effect on logo

	$('#home h1 a img').hover(function() {
		if (animation_complete)
		{
			$(this).attr('src', logoSrcHover);
		}
	}, function()
	{
		$(this).attr('src', logoSrc);
	});

}

// Background image FIT WINDOW
function videoResize()
{
	// 2048/1536 1.33  .75
	winWidth = $(window).width();
	winHeight = $(window).height();

	console.log('window ratio = ' + (winWidth/winHeight));

	if ( winWidth/winHeight > 1.33 )
	{
		$('#the-awful-truth').height(winHeight).width( winHeight /.75).css('position', 'static');

	} else if (winWidth/winHeight < 1.33 && winWidth <= 400 )
	{
		$('#the-awful-truth').height('auto').width('100%').css('position', 'absolute');
	} else
	{
		$('#the-awful-truth').height('auto').width('100%').css('position', 'static');
	}

	if ( winWidth/(winHeight - 80) > 1.33 )
	{
		$('.below-fold').hide();
	} else {
		$('.below-fold').show();

	}


}


// CENTER LOGO
function logoCenter()
{

		winHeight = $(window).height();
		winWidth = $(window).width();
		logoHeight = $('#home h1 a img').height();
		logoWidth = $('#home h1 a img').width();
		marginTop = (winHeight - logoHeight) / 2;
		marginLeft = (winWidth - logoWidth ) / 2;

		if (!isMobile)
		{
			$('#home h1 a').css({
				'margin-top': marginTop,
				'margin-left': marginLeft
			})
		} else {
			// logo
			//1.05932203389831
			//0.944
			$('#home h1 a').css({
				'background-size': (winWidth *.8) + 'px ' + ((winWidth *.8) * 0.944) + 'px'
			});
		}

}

// ANIMATE LOGO IN TO FIT SCREEN
function logoResize()
{
	winWidth = $(window).width();
	bgWidth = winWidth * .5;
	bgHeight = bgWidth * 0.944;

	marginTop = (winHeight - bgHeight) / 2;
	marginLeft = (winWidth - bgWidth ) / 2;

	if (!isMobile && start_logo_resize === true)
	{
		$('#home h1 a').animate({
			width: bgWidth,
			height: bgHeight,
			'margin-top': marginTop,
			'margin-left': marginLeft
		}, {duration: 1000, easing: 'easeOutBack'});
	} else if (!isMobile)
	{
		$('#home h1 a').css({
			width: bgWidth,
			height: bgHeight,
			'margin-top': marginTop,
			'margin-left': marginLeft
		});
	}

}

$(window).load(function()
{

	$('body').width($(window).width());

	$('.start').click(function()
	{
		$('#home').css({'left': '0', 'right': '0'}).animate({'left': '-100%', 'right': '100%'}, 500);
		$('#current-show').css({'left': '100%', 'right': '-100%'}).animate({'left': 0, 'right': 0}, 500);


		start_logo_resize = false;

	});

	$('.page-2').click(function()
	{

		$('#info').css({'left': '100%', 'right': '-100%'})
			.animate({'left': 0, 'right': 0}, 500);
		$('#current-show').animate({'left': '-100%', 'right': '100%'}, 500)
			.css({'left': '100%', 'right': '-100%'});
	});

	$('.small-logo').click(function(e)
	{
		if( e.target !== this )
			return;

		$('#home').css({'left': '100%', 'right': '-100%'})
			.animate({'left': 0, 'right': 0}, 500);
		$('#info').animate({'left': '-100%', 'right': '100%'}, 500)
			.css({'left': '100%', 'right': '-100%'});
	});
	
	// NAV CHANGE PAGES    
    $('#nav li a').click(function()
    {	
    	var active = $(this).attr('href');
    	$('#content li.active, #nav li.active').removeClass('active');
    	$(this).parent('li').addClass('active');
    	$('#content li' + active).addClass('active');
    });

	logoCenter();

	$('#home h1 a img ').css({
		opacity: 1,
		filter: 'alpha(opacity=100)'
	});
	setTimeout(function()
	{
		logoResize();
		animation_complete = true;
	}, 800);


	//videoResize();
});

window.onresize = function(event) {
	logoResize();
	//videoResize();
};
