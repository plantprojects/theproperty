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
	vidWidth = 1280,
	vidHeight = 720,
	vidHeightRatio = vidHeight/vidWidth,
	vidWidthRatio = vidWidth/vidHeight;

// Desktop only Stop/Start video and hover effects
if ( !isMobile )
{
	// Pause video when leave focus of web page
	$(window).blur(function()
	{
		if ($('#fireworks').length === 1 )
		{
		$('#fireworks').get(0).pause();
		}
	});
	// Play video when return focus
	$(window).focus(function()
	{
		if ($('#fireworks').length === 1 )
		{
		$('#fireworks').get(0).play();
		}
	});

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

// VIDEO FIT WINDOW
function videoResize()
{
	winWidth = $(window).width();
	winHeight = $(window).height();

	if ( winHeight > winWidth * vidHeightRatio )
	{
	// center the video
	$('#fireworks').height(winHeight)
		.width( Math.round(winHeight * vidWidthRatio) )
		.css({
			'margin-left': - ($('#fireworks').width() - winWidth) / 2,
			'margin-top': 0
		});

	} else
	{
		$('#fireworks').height('auto').width('100%').css('margin-left', 0);

		// center video vertically
		if ( $('#fireworks').height() > winHeight)
		{
		$('#fireworks').css('margin-top', - ($('#fireworks').height() - winHeight) /2 );
		} else
		{
			$('#fireworks').css('margin-top', 0 );
		}
	}

	// center the text
	$('.centered.page-2').css('margin-top', (winHeight - $('.centered.page-2').height()) / 2);

	if ( winHeight > $('.centered.page-3').height() )
	{
		console.log('hi');

		$('.centered.page-3').css('margin-top', (winHeight - $('.centered.page-3').height() - 100) / 2);
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

	if (!isMobile)
	{
		$('#home h1 a').animate({
			width: bgWidth,
			height: bgHeight,
			'margin-top': marginTop,
			'margin-left': marginLeft
		}, {duration: 1000, easing: 'easeOutBack'});
	}

}

$(window).load(function()
{
	if (isMobile) {
		//$('.start').addClass('bounce')
	}

	$('body').width($(window).width());

	$('.start').click(function()
	{
		$('#home').css({'left': '0', 'right': '0'}).animate({'left': '-100%', 'right': '100%'}, 500);
		$('#open-house').css({'left': '100%', 'right': '-100%'}).animate({'left': 0, 'right': 0}, 500);

		if ( !isMobile )
		{
			if ($('#fireworks').length === 1 )
			{
				$('#fireworks').get(0).play();
			}
		}

	});

	$('.centered.page-2').click(function()
	{
		if ( !isMobile )
		{
			$('#fireworks').get(0).pause();
		}

		$('#press-release').css({'left': '100%', 'right': '-100%'})
			.animate({'left': 0, 'right': 0}, 500);
		$('#open-house').animate({'left': '-100%', 'right': '100%'}, 500)
			.css({'left': '100%', 'right': '-100%'});
	});

	$('.small-logo').click(function(e)
	{
		if( e.target !== this )
			return;

		if ( !isMobile )
		{
			$('#fireworks').get(0).pause();
		}
		$('#home').css({'left': '100%', 'right': '-100%'})
			.animate({'left': 0, 'right': 0}, 500);
		$('#press-release').animate({'left': '-100%', 'right': '100%'}, 500)
			.css({'left': '100%', 'right': '-100%'});
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


	videoResize();

});

window.onresize = function(event) {
	logoResize();
	videoResize();
};
