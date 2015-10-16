var gaLinkerParam = '';
if (typeof ga != 'undefined')  {
    ga(function(tracker) {
        gaLinkerParam = tracker.get('linkerParam');
    });
}

$(document).ready(function() {

	var $body = $('body');
	var $htmlBody = $body.add('html');

	$('.feature-block .item:nth-child(3n)').addClass('child');

	/*------- DEFINITION IE -------*/
	var UserAg = navigator.userAgent;
	if ( /MSIE (\d+\.\d+);/.test(UserAg) ) {
		browserName = 'ie';
		var ieversion=new Number(RegExp.$1)
		browserVersion = Math.floor(ieversion);
		
		$body.addClass(browserName+' '+browserName+browserVersion)
	};
	if ( UserAg.match(/Trident/i) ) {
		$body.addClass('ie')
	};
	
	if ( $('.home-head').length && $body.hasClass('ie') ) {
		$('.feature-block').removeClass('animate');
	};

	/*------- AROW TO TOP -------*/
	$('.top_arow').on('click', function() {
		$htmlBody.animate({ scrollTop: '0' }, 500);
	});

	/*------- TEXTAREA AUTOSIZE -------*/
	if ( $('textarea').length ) {
		$('textarea').autosize();
	};

	/*------- TOP MENU ADD CLASS -------*/
	var ItemSum = $('#top_nav').children('.item').length;

	for (var i=0; i<ItemSum; i++) {
		var item = $('#top_nav').children('.item').eq(i);
		var ItemHref = item.attr('href');

		if ( ItemHref == '#login' ) {
			item.addClass('item_login');
		};
		if ( ItemHref == '#viewdemo') {
			item.addClass('view_demo');
		};
		if ( /buynow/.test(ItemHref) ) {
			item.addClass('important');
		};
	};

	/*------- TOP MENU LOGIN -------*/
	$('#top_nav').on('click', '.item_login', function(e) {
		$('#login_form').toggleClass('on');
		
		e.preventDefault();
	});

/* ToolTip
   -------------------------------------------------------------------------- */
    
    if ( $('.js-toolTip').length ) {
        $('.js-toolTip').each(function(index, val) {
            var data = $(this).data('tooltip');

            if ( data != undefined ) {
                $(this).append('&nbsp;<i class="tooltip"><div class="tooltip__wrap"><span class="tooltip__c">'+data+'</span></div></i>');
            };
        });
    };
/* /ToolTip
   -------------------------------------------------------------------------- */

	/*--------------- FAQ ---------------*/
	$('.broken_block').find('.item').prepend( '<i class="skew left"></i><i class="skew right"></i>' );
	
	$('.faq_list').on('click', '.item .title', function() {

		$(this).parent().find('.text').stop(true,false).slideToggle();
		$(this).parent().toggleClass('on');
		
		SendInfoGA( $(this), 'FaqList', '', $(this).text() );
	});

	/*--------------- SUBMIT DEMO BTN ---------------*/
	$('.view_demo, .js-viewDemo').on('click', function(e) {
		e.preventDefault();
		document.getElementById('form-view-demo').submit();
	});

	/*--------------- MENU ---------------*/
	var SiteHref = location.href;
	
	for (var i=0; i<$('#top_nav a').length; i++) {
		var item = $('#top_nav a').eq(i);
		var itemText = item.attr('href').replace(/\.html|\.php/, '');
		
		if ( /\.html|\.php/.test(SiteHref) ) {
			if ( SiteHref.indexOf(itemText)!=-1 ) {
				item.addClass('active')
			};
		} else {
			if ( itemText == './' ) {
				item.addClass('active');
			};
		};
	};

	/*--------------- FEEDBACK ---------------*/
	var capApos = Math.floor((Math.random()*40)+1);
	var capBpos = Math.floor((Math.random()*40)+1);
	
	$('.capA').css('transform', 'rotate('+capApos+'deg)' )
	$('.capB').css('transform', 'rotate(-'+capBpos+'deg)' )
	if (typeof capA != 'undefined') {
		$('.capA').html(capA);
	};
	if ( typeof capB != 'undefined' ) {
		$('.capB').html(capB);
	};
	$('#contact-section input, #contact-section textarea').keyup(function(event) {
		$(this).removeClass('invalid');
	});

/* Colum alignment
   -------------------------------------------------------------------------- */
	var colAlignment = [];

	$('.js-colAlignment .js-colAlignmentItem').each(function(index, val) {
		var itemHeight = $(this).height();

		colAlignment.push(itemHeight);
	});

	var maxHeightColAlignment = Math.max.apply(Math, colAlignment);

	$('.js-colAlignment .js-colAlignmentItem').height(maxHeightColAlignment);
	
	function readCookie( name ) {
		var nameEQ = name + '=';
		var ca = document.cookie.split(';');
		for (var i = 0; i < ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0) == ' ') c = c.substring(1, c.length);
			if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
		}
		return '';
	};

	/*--------------- Google Analytics event ---------------*/
	$('#top_nav').on('click', 'a', function() {
		var itemE = $(this);
		var group = 'TopNavigation';
		SendInfoGA(itemE, group);
	});

	$('.logo').on('click', function() {
		var itemE = $(this);
		var group = 'Logo';
		var marker = 'Top';
		SendInfoGA(itemE, group, '', marker);
	});

	$('.phone').on('click', function() {
		var itemE = $(this);
		var group = 'HeadPhone';
		SendInfoGA(itemE, group);
	});

	$('.social').on('click', 'a', function() {
		var itemE = $(this);
		var group = 'SocialBut';
		SendInfoGA(itemE, group);
	});

	$('.feature-block').on('click', '.item', function() {
		var itemE = $(this);
		var group = 'HomeFeatureBlock';
		var marker = itemE.find('.title').text();
		SendInfoGA(itemE, group, '', marker);
	});

	$('.address_block').on('click', 'a', function() {
		var itemE = $(this);
		var group = 'Contacts';
		SendInfoGA(itemE, group);
	});

	$('.feedback_form').on('click', '.btn', function() {
		var itemE = $(this);
		var group = 'Contacts';
		var marker = 'FeedbackFormSend';
		SendInfoGA(itemE, group, '', marker);
	});

	$('#BecomePartnerBtn').on('click', function() {
		var itemE = $(this);
		var group = 'Button';
		var marker = 'BecomePartner';
		SendInfoGA(itemE, group, '', marker);
	});

	$('#HomeBtnBuynow').on('click', function() {
		var itemE = $(this);
		var group = 'Button';
		var marker = 'HomeBtnBuynow';
		SendInfoGA(itemE, group, '', marker);
	});

	/*	--------------------------------------------------------------------------
		SPOILER ANIMATION
		-------------------------------------------------------------------------- */
	$('.js-spoiler').on('click', '.spoiler-title', function() {
		$(this).next('.spoiler-text').slideToggle(300);
		$(this).parent().toggleClass('__on');
		
		SendInfoGA('spoilerTrigger', (window.location.pathname.match(/\w+/)||'home') );
	});

	if ( $('.js-tabs').length ) {
		$('.js-tabs').tabify();
	}

/*  --------------------------------------------------------------------------
	BUYNOW
	-------------------------------------------------------------------------- */

/*  Set data on click radio lis in buynow page
	-------------------------------------------------------------------------- */
	$('#buyP .js-radioSubsList').on('click', '.js-item', function(event) {
		event.preventDefault();

		/* Fint all children block in parent colum */
		var blockCol = $(this).parents('.js-buyPcol').find('.js-radioSubsList');
		var indexCurItem = $(this).index();

		$.each(blockCol, function(index, val) {
			var selectedItem = $(this).find('.js-item').eq(indexCurItem);
			/* Get payments id for checkout */
			var paymentsID = selectedItem.find('.js-id').val();

			$(this).find('.js-item').removeClass('on');
			selectedItem.addClass('on');

			/* Set defult minilan price */
			var getCurrentPrice = selectedItem.find('.js-price').val();
			var getCurrentMonth = /[0-9]*/.exec( selectedItem.find('.js-text').text() )[0];
			var getCurrentDivider = blockCol.data('divider')||1;

			if ( blockCol.hasClass('js-radioSwitchPrice') ) {
				blockCol.parents('.js-buyPcol').find('.js-buyPcolW .js-price').html( priceDecimalPartition(getCurrentPrice, getCurrentMonth, getCurrentDivider) );
			}

			$(this).parents('.js-buyPcol').find('.js-packageID').val(paymentsID);

			printCurentMonths( selectedItem.find('.radio-list__period__t').text(), blockCol);
		});
	});

/*  Submit checkout
	-------------------------------------------------------------------------- */
	$('.js-buySubmit').on('click', function(event) {
		event.preventDefault();

		var form = $(this).parents('.js-buyPackageForm');
		var product_id = form.find('.js-packageID').val();

		checkoutUrl(
	    	'setLocation',
	    	[product_id],
	    	'USD',
	    	sequence,
	    	{
	    		providerId : 'payproglobal',
	    		_ga_linker: gaLinkerParam,
        		_ga: readCookie('_ga')
	    	}
    	);
	});

/*  Buy modal
	-------------------------------------------------------------------------- */
	$('.js-buyModal').on('click', function(event) {
		event.preventDefault();

		var modal = $(this).data('modal');
		var position = $(this).data('position');
		var diskont = $(this).data('diskont');

		modalOn( modal, position );
	});

	$('.js-modalOnClose').on('click', function() {
		modalOnDisable();
	});

	$('#overlay').on('click', function() {
		modalOnDisable();
	});

/*  Call to funftion - Alignment all cols
	-------------------------------------------------------------------------- */
	colAlignment2( $('.js-alignmentBuy'), 'js-buyList' );

/*  Switch tabs
	-------------------------------------------------------------------------- */
	$('.js-buyTab').on('click', 'a', function() {

		buyTabs( $(this).attr('href') );

		$('body').addClass('buyTab-animation');
	});

	/* Switch tabs in page load */
	if ( $('.js-buyTab').length != 0 ) {
		var idArray = [];
		var hash = window.location.hash;

		$('.js-buyTab a').each(function(index, val) {
			idArray.push( $(this).attr('href') )
		});

		var tagTabs = ( $.inArray(hash, idArray) != -1 ) ? hash : idArray[0];

		buyTabs(tagTabs);
	}

	function buyTabs(tag) {
		var id = tag.replace('#tab-', '');
		
		$('.js-buyTab a').each(function(index, val) {
			if ( $(this).attr('href') == tag ) {
				$(this).addClass('on');
			} else {
				$(this).removeClass('on');
			}
		});

		$('.js-buyPack').each(function(index, val) {
			var blockName = $(this).data('id');

			if (blockName == id) {
				$(this).addClass('on');
			} else {
				$(this).removeClass('on');
			}
		});
	}

/*  Add colum for move animation bundle subscription
	-------------------------------------------------------------------------- */
	moveBuyCol('phone-Premium', $('.js-moveBuyCol').eq(0) );
	moveBuyCol('desktop-Basic', $('.js-moveBuyCol').eq(1) );

	function moveBuyCol(colId, $target) {
		var colHtml = $('.js-buyPcol[data-product="'+colId+'"]').find('.js-buyPcolW').html();

		$target.find('.js-buyPcolW').html(colHtml);
	}

	/* Call to colum animation in hover element */
	$(document).on({
	    mouseenter: function(){
        	$('.js-moveBuyCol').addClass('on');
	    },
	    mouseleave: function(){
	        $('.js-moveBuyCol').removeClass('on');
	    }
	}, '.js-showBundleCol');

	/* Skip default */
	$(document).on('click', '.js-showBundleCol', function(event) {
		event.preventDefault();
	});

	$('#buyP [data-tooltip]').each(function(index, val) {
		var t = $(this);
		var data = t.data('tooltip');

		t.data('tooltip', '');
		t.addClass('tooltip-n-i')

		if ( data != undefined && data != '' ) {
			t.append('<span class="tooltip-n"><span class="tool-wrap">'+data+'</span></span>');
		}
	});

/*  Toogle more text
	-------------------------------------------------------------------------- */
	moreText();

});//doc ready


$(window).load(function() {
	$('body').addClass('load');

	/*------- SLIDER ON MAIN PAGE -------*/
	$('#home_slider').flexslider({
		animation: 'slide',
		useCSS: false,
		controlNav: false
	});

});

/*  --------------------------------------------------------------------------
    Modal
	-------------------------------------------------------------------------- */

/* Enable modal
	-------------------------------------------------------------------------- */
function modalOn(modal, position, yootubeVideoId) {
	var modal = $('#'+modal);
	var position = position||100;

	if (yootubeVideoId && modal.find('.js-wrap').children('iframe').length == 0 ) {
		modal.addClass('__video');

		var videoFrame = '<iframe width="853" height="480" src="//www.youtube.com/embed/'+yootubeVideoId+'?autoplay=1" frameborder="0" allowfullscreen></iframe>';

		modal.find('.js-wrap').append(videoFrame);
	}

	if ( modal.find('iframe') ) {
		modal.css('width', modal.find('iframe').attr('width') );
	}

	if ( modal != null ) {
		var modalWidth = modal.data('width')||modal.outerWidth();
		var windowPosition = $(document).scrollTop();

		modal.addClass('on');
		modal.fadeTo(300, 1);
		$('#overlay').fadeTo(300, 0.6);

		modal.css({
			'margin-left': -modalWidth/2,
			'top': windowPosition+position,
			'width': modalWidth
		});

	}
}
/*  Disable modal
	-------------------------------------------------------------------------- */
function modalOnDisable() {
	$('.js-modalOn').removeClass('on');
	$('.js-modalOn').fadeTo(300, 0);
	$('#overlay').fadeOut(200);

	if ( $('.js-modalOn').find('.js-wrap').children('iframe').length  != 0 ) {
		$('.js-modalOn').find('.js-wrap').empty();
	}
}

/*  --------------------------------------------------------------------------
    /Modal
	-------------------------------------------------------------------------- */

function priceDecimalPartition(price, month, divider) {
	divider = divider||1;

	Number.prototype.Crop = function (x) {
	    var s = this+'', a = s.split('.');
	    a[1]=a[1]||'';      
	    return parseFloat(a[0]+'.'+a[1].substring(0,x));
	}

	price = ( (price / month) / divider ).Crop(2).toString();

	var priceLength = price.length;

	var main = price.substring( 0, priceLength-2 ).replace('.', '');
	var num = price.substring( priceLength-2, priceLength );

	num = (num == 66) ? num - 1: num;

	price = main + "<sup>." + num + "</sup>";

	return price;
}

/*  Print select month in content colum - buypage
	-------------------------------------------------------------------------- */
function printCurentMonths(val, $parent) {
	var num = val.replace(/\D/g, '');
	var $block = $parent.parents('.js-buyPcol').find('.js-printCurentMonths');

	if ($block.length != 0) {
		$block.text(num);
	}
}

/*  Colum alignment
	-------------------------------------------------------------------------- */
function colAlignment2($block, childrenClass) {
	var children = childrenClass||'js-colAlignmentItem';

	$block.each(function(index, val) {
		var colAlignmentArray = [];

		$(this).find('.'+children).each(function(index, val) {
			var itemHeight = $(this).height();

			colAlignmentArray.push(itemHeight);
		});

		var maxHeightColAlignment = Math.max.apply(Math, colAlignmentArray);

		$(this).find('.'+children).height(maxHeightColAlignment);
	});
}

/*  Toogle more text
	-------------------------------------------------------------------------- */
function moreText() {
	var block = $('.js-ShowMore');

    var moreTextEllipses = '...';
    var moreTextMore = 'მეტი';
    var moreTextLess = 'ნაკლები';

	if (block.length) {
		var showChar = block.data('char')||100;

		block.each(function() {
		    var content = $(this).html();
		    var separator = content.indexOf('<u class="more"></u>');

		    var showChar = (separator != -1) ? separator : showChar;

		    if (content.length > showChar) {
		        var visibleContent = content.substr(0, showChar);
		        var hiddenContent = content.substr(showChar, content.length - showChar);

		        var html = visibleContent + '<span class="moreellipses">'+moreTextEllipses+'</span><span class="morecontent"><span style="display: none">'+hiddenContent+'</span>  <a href="#" class="js-more">'+moreTextMore+'</a></span>';

		        $(this).html(html);
		    }
		});

		block.on('click', '.js-more', function(event) {
		    event.preventDefault();

		    var block = $(this);

		    if( block.hasClass('less') ) {
		        block.removeClass('less').html(moreTextMore);
		    } else {
		        block.addClass('less').html(moreTextLess);
		    }

		    block.parent().prev().toggle();
		    block.prev().toggle();
		});
	}
}

//validate feedback form
var capA = Math.floor((Math.random()*10)+1);
var capB = Math.floor((Math.random()*10)+1);
var capRes = capA + capB;

function feedback() {
	var res = true;
	var pattern = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	var emailField = $('#email');
	str = emailField.val();
	
	$('.validate p').hide();
	$('.feedback_form .text-field').removeClass('invalid');

	if ( !$('#user-login').val() ) {
		$('p#login-validate').slideDown(300);
		$('#user-login').addClass('invalid');
		res = false;
	}
	if (!$('#message').val()) {
		$('p#message-validate').slideDown(300);
		$('#message').addClass('invalid');
		res = false;
	}
	if ($('#capcha').val() != capRes) {
		$('p#key-validate').slideDown(300);
		$('#capcha').addClass('invalid');
		res = false;
	}
	if (str.match( pattern ) == null && str) {
		emailField.addClass('invalid');
		$('p#mail-validate').slideDown(300);
		res = false;
	}
	if (!str) {
		emailField.addClass('invalid');
		$('p#email-validate').slideDown(300);
		res = false;
	}
	if (res == true){
		alert('Thank you for your enquiry. We will be in touch shortly. mSpy team');
	}
	return(res);
};


function createCookie(name,value,days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
    }
    else var expires = "";
    document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

function eraseCookie(name) {
    createCookie(name,"",-1);
}

function setLocation(url) {
    window.location = url;
}


var _gaq;
var ga;
var gaaq;

function SendInfoGA( itemE, group, metod, marker, gaa, gaaq ) {
	var marker = marker || itemE.attr('title');
	var metod = metod || 'Click';

	var gaaq = _gaq;
	var gaa = ga;
	
	if (marker == undefined) {
		var marker = itemE.text().replace(/\s/g, '-');
	} else {
		var marker = marker.toString()
		var marker = marker.replace(/\s/g, '-');
	};

	if (gaa) {
		ga('send', 'event', group, metod, marker );
	} else if (gaaq) {
		_gaq.push(['_trackEvent', group, metod, marker]);
	} else {
		return false
	};
};

/* jquery.tabify.js
   -------------------------------------------------------------------------- */
(function(a){a.fn.extend({tabify:function(e){function c(b){hash=a(b).find("a").attr("href");return hash=hash.substring(0,hash.length-4)}function f(b){a(b).addClass("active");a(c(b)).show();a(b).siblings("li").each(function(){a(this).removeClass("active");a(c(this)).hide()})}return this.each(function(){function b(){location.hash&&a(d).find("a[href="+location.hash+"]").length>0&&f(a(d).find("a[href="+location.hash+"]").parent())}var d=this,g={ul:a(d)};a(this).find("li a").each(function(){a(this).attr("href", a(this).attr("href")+"-tab")});location.hash&&b();setInterval(b,100);a(this).find("li").each(function(){a(this).hasClass("active")?a(c(this)).show():a(c(this)).hide()});e&&e(g)})}})})(jQuery);
