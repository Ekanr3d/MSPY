function setCookie(name, value) {
      var valueEscaped = escape(value);
      var expiresDate = new Date();
      expiresDate.setTime(expiresDate.getTime() + 365 * 24 * 60 * 60 * 1000); // срок - 1 год, но его можно изменить
      var expires = expiresDate.toGMTString();
      var newCookie = name + "=" + valueEscaped + "; path=/; expires=" + expires;
      if (valueEscaped.length <= 4000) document.cookie = newCookie + ";";
}


function getCookie(name) {
      var prefix = name + "=";
      var cookieStartIndex = document.cookie.indexOf(prefix);
      if (cookieStartIndex == -1) return null;
      var cookieEndIndex = document.cookie.indexOf(";", cookieStartIndex + prefix.length);
      if (cookieEndIndex == -1) cookieEndIndex = document.cookie.length;
      return unescape(document.cookie.substring(cookieStartIndex + prefix.length, cookieEndIndex));
}


$('document').ready(function(){
	if(getCookie('ios_pop_coockie') == '1'){
		$('.ios_header').hide();
	};
//show popup and mask
	$('.ios_header a').click(function(){
		$('.popup_ios').fadeIn('slow');
		$('.mask').show();
	});
// close popup
	$('.popup_ios .close_ico_popup').click(function(){
		$('.popup_ios').hide();
		$('.mask').hide();
	});

	$('.popup_ios .close_btn_popup').click(function(){
		$('.popup_ios').hide();
		$('.mask').hide();
	});

	$('.popup_ios .dont_show_btn').click(function(){
		$('.popup_ios').hide();
		$('.mask').hide();
		$('.ios_header').hide();
		setCookie('ios_pop_coockie',1);
	});


});
function show_hide_popup(elem_click,popup,bflag_click){
var $message = $('"'+popup+'"');
var $height_document = $(document).height();
var $height_popup = $(elem_click).offset().top-50+$('"'+popup+'"').outerHeight();
var $top_popup = $(elem_click).offset().top-50;
var $left_popup = $(elem_click).offset().left+185;

	if($height_document-$height_popup < 20){
		$top_popup = $(elem_click).offset().top-150;
		$('.arrow-left').css('top','165px');
	}
	else{
		$top_popup = $(elem_click).offset().top-50;
		$('.arrow-left').css('top','65px');
	}

    if ($message.css('display') != 'block') {
        $message.show();
 		$message.css('top', $top_popup+"px");
 		$message.css('left',$left_popup+"px");
        var firstClick = bflag_click;
        $(document).bind('click.myEvent', function(e) {
            if (!firstClick && $(e.target).closest($message).length == 0) {
                $message.hide();
                $(document).unbind('click.myEvent');}
            firstClick = false;
        });
    }
}

$(document).ready(function(){
// POPUP NEW FEATURES
$('li a.in_progress.facebook').click(function() {
	show_hide_popup("li a.in_progress.facebook",".popup_feat.facebook",true);
	if($('.popup_feat.skype').css('display')=="block" || $('.popup_feat.viber').css('display')=="block" || $('.popup_feat.whatsup').css('display')=="block"){
		$('.popup_feat.skype').hide();
		$('.popup_feat.viber').hide();
		$('.popup_feat.whatsup').hide();
	}
});

$('li a.in_progress.viber').click(function() {
	show_hide_popup("li a.in_progress.viber",".popup_feat.viber",true);
	if($('.popup_feat.facebook').css('display')=="block" || $('.popup_feat.skype').css('display')=="block" || $('.popup_feat.whatsup').css('display')=="block"){
		$('.popup_feat.facebook').hide();
		$('.popup_feat.skype').hide();
		$('.popup_feat.whatsup').hide();
	}
});

$('li a.in_progress.skype').click(function() {
	show_hide_popup("li a.in_progress.skype",".popup_feat.skype",true);
	if($('.popup_feat.facebook').css('display')=="block" || $('.popup_feat.viber').css('display')=="block" || $('.popup_feat.whatsup').css('display')=="block"){
		$('.popup_feat.facebook').hide();
		$('.popup_feat.viber').hide();
		$('.popup_feat.whatsup').hide();
	}
});

$('li a.in_progress.whatsup').click(function() {
	show_hide_popup("li a.in_progress.whatsup",".popup_feat.whatsup",true);
	if($('.popup_feat.facebook').css('display')=="block" || $('.popup_feat.viber').css('display')=="block" || $('.popup_feat.skype').css('display')=="block"){
		$('.popup_feat.facebook').hide();
		$('.popup_feat.viber').hide();
		$('.popup_feat.skype').hide();
	}
});

$('.popup_feat.facebook .close_btn').click(function(){
	$('.popup_feat.facebook').hide();
})

$('.popup_feat.viber .close_btn').click(function(){
	$('.popup_feat.viber').hide();
})

$('.popup_feat.skype .close_btn').click(function(){
	$('.popup_feat.skype').hide();
})

$('.popup_feat.whatsup .close_btn').click(function(){
	$('.popup_feat.whatsup').hide();
})


/* contant info */
$('.info.active').click(function(){
	$('.additional_popup').hide();
	var $message = $(this).nextAll('.additional_popup');
    if ($message.css('display') != 'block') {
        $message.show();
        if($message.outerHeight()<70){ $message.css('margin-top',"-36px");}
        if($message.outerHeight()>71 && $message.outerHeight()< 100){ $message.css('margin-top',"-46px");}
        if($message.outerHeight()> 100){ $message.css('margin-top',"-55px");}

        var firstClick = true;
        $(document).bind('click.myEvent', function(e) {
            if (!firstClick && $(e.target).closest($message).length == 0) {
                $message.hide();
                $(document).unbind('click.myEvent');
            }
            firstClick = false;
        });
    }
 
    
});



});