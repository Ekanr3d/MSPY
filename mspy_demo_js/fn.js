function secondsToHms(d) {
	d = Number(d);
	var h = Math.floor(d / 3600);
	var m = Math.floor(d % 3600 / 60);
	var s = Math.floor(d % 3600 % 60);
	return ((h > 0 ? h + "h " : "") + (m > 0 ? (h > 0 && m < 10 ? "0" : "") + m + "m " : "0:") + (s < 10 ? "0" : "") + s+ 'sec'); 
}
//VARIABLES OF NOTIFICATION WONDOWS
var id_count = 0;
var bottom_of_window = 0;
//====SET COOCKIES FOR NOTIFICATION
function setCookieNotif(name, value) {
      var valueEscaped = escape(value);
      var expiresDate = new Date();
      //expiresDate.setTime(expiresDate.getTime() + 365 * 24 * 60 * 60 * 1000); // срок - 1 год, но его можно изменить
      var expires = expiresDate.toGMTString();
      var newCookie = name + "=" + valueEscaped + "; path=/;";
      if (valueEscaped.length <= 4000) document.cookie = newCookie + ";";
}


function getCookieNotif(name) {
      var prefix = name + "=";
      var cookieStartIndex = document.cookie.indexOf(prefix);
      if (cookieStartIndex == -1) return null;
      var cookieEndIndex = document.cookie.indexOf(";", cookieStartIndex + prefix.length);
      if (cookieEndIndex == -1) cookieEndIndex = document.cookie.length;
      return unescape(document.cookie.substring(cookieStartIndex + prefix.length, cookieEndIndex));
}

//SHOW NOTIFICATION WINDOW
function showModal(id){
var windowNotif = $('#window-'+id);

(id==0) ? top_of_window = 60 : top_of_window += windowNotif.outerHeight() + 30;

	windowNotif.animate({
		opacity:1,
		top: '+='+top_of_window,
		},
		{duration: 3000,
		 easing: 'easeInOutBack'});
}

//CLOSE NOTIFICAION WINDOW
function closeNotifWindow(obj_window){
	var form = $(obj_window);
	var phoneId = form.find('.white-btn')[0].getAttribute('rel'); // take a phone id from close window link
	var linkWindow = 'other_notif'; // make link equal link to record this info on coockie
	if (form.find('.white-btn').length == 2){
		linkWindow = form.find('.white-btn')[1].getAttribute('href');
	}

	var uid = phoneId+linkWindow;
	var notif_text = form.find('span').text();
	setCookieNotif(uid,notif_text);

		var height_form = form.outerHeight()+10;
		var count_form = document.getElementsByClassName('notification-window').length - 1;
		var last_window_id = document.getElementsByClassName('notification-window')[count_form].getAttribute('id');

		form.remove();
		if(form.attr('id') != last_window_id){
			$(".notification-window").each(function(){
				if( $(this).attr('id') != "window-0"){
				$(this).animate({
					top: '-='+height_form,
					},
					{duration: 800,
					 easing: 'easeInOutQuart'});
				}
			});
		}
}

//CREATE NOTIFICATION WINDOW
function notif_window(text,link,phoneId){
	var modal = "";
	var coockieLink = "other_notif";

	if(link != '' && link != undefined){
		modal = "<div class='notification-window' id='window-"+id_count+"'><span>"+text+"</span><div class='control-btn'><a href='javascript:void(0);' rel="+phoneId+" onclick='closeNotifWindow((this.parentNode).parentNode);' class='white-btn' rel='close-btn'>Close</a><a href='"+link+"' class='white-btn'>See More</a></div></div>";
		coockieLink = link;
	}
	else{
		modal = "<div class='notification-window' id='window-"+id_count+"'><span>"+text+"</span><div class='control-btn'><a href='javascript:void(0);' rel="+phoneId+" onclick='closeNotifWindow((this.parentNode).parentNode);' class='white-btn' rel='close-btn'>Close</a></div></div>";
	};

	var uid = phoneId+coockieLink;

	if (!getCookieNotif(uid) || getCookieNotif(uid) != text){
		$('body').append(modal); 
		showModal(id_count);
		id_count++;
	}
}

//==SHOW AJAX WINDOW INFO
function showAjaxWindowInfo(text){
	var ajax_window = $('.ajax-window-info');
	
	ajax_window.text(text);
	ajax_window.fadeIn('slow').delay(2000).fadeOut();
	//$('body .ajax-window-info').delay(2500).remove();
	//$('.ajax-window-info').delay(2000).fadeOut().remove('.ajax-window-info');
}
//===========SEARCH DEVICE====================
function searchDevice(search_value){
	var count = $('.account-name').length;
	var non_search = [];
	var correct_count = 0;
	//hide all items
	 $('#ul-devices li').each(function(){
	 	$(this).hide();
	 });
	 //show items than contains search value
    for(var i=0; i < count;i++){
    	inputText = document.getElementsByClassName('account-name')[i];
		var innerHTML = $(inputText).text();
	    var index = innerHTML.indexOf(search_value);
	    var tmpInnerHTML = innerHTML.toUpperCase();
	    var tmpIndex = tmpInnerHTML.indexOf(search_value.toUpperCase());
		if ( tmpIndex >= 0 ){ 
			correct_count++;
			document.getElementById('no-search-device').style.display = 'none';
	        innerHTML = innerHTML.substring(0,tmpIndex) + "<span class='highlight'>" + innerHTML.substring(tmpIndex,tmpIndex+search_value.length) + "</span>" + innerHTML.substring(tmpIndex + search_value.length);
	        $(inputText).html(innerHTML).parents('li').show(); 
	    }
	}
	if ( correct_count == 0){
		document.getElementById('no-search-device').style.display = 'block';
	}
	$('#device-list').show();
	$("#device-list").mCustomScrollbar("update"); 
}

var delay = (function(){
  var timer = 0;
  return function(callback, ms){
    clearTimeout (timer);
    timer = setTimeout(callback, ms);
  };
})();

//======== FILTER INPUT. ONLY NEMBERS. INPUT MUST HAVE CLASS .filter-numbers
function filterNumber(keyValue){
	if( ((keyValue>47) && (keyValue<58)) || 
		((keyValue>=96) && (keyValue<=105)) ||
		(keyValue == 8)  ||
		(keyValue == 37) ||
		(keyValue == 39) ||
		(keyValue == 46)){
		return true;
	}
}

$(window).load(function(){
	$("#device-list").mCustomScrollbar();    
 });

//=========DOCUMENT READY HEANDLERS
$('document').ready(function(){
	//left menu - height 100%
		var body = document.body,
	    html = document.documentElement;
		var height = Math.max( body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight);
		$('#content-left').css('height',height-100);

	//SEARCH HEADER
	$('#quick-search-input').val('');

	$('#quick-search-input').click(function(){
		$(this).addClass('active');
	});
	$('#quick-search-input').blur(function(){
		$(this).removeClass('active');
	});

	$('#search-ico').click(function(){
		var input_text = $('#quick-search-input');
		if(input_text.val() == ''){
			input_text.css({'border':'1px solid #FF786E','box-shadow': '0 0 2px #F7AFAA'});
		}
		else{
			$("#filter-form").submit();
		}
	});

	//CLICK ON DEVICE ICO
	$('#devices-ico').click(function(){
		$('#device-list').show();
		$("#device-list").mCustomScrollbar("update"); 
		$('#ul-devices li:not(#no-search-device)').each(function(){
			$(this).show();
		});
	});

//======= HIDE MODAL WINDOW ============
	$('body').bind('click', function(){
		$('#device-list, div#list').hide();
	});

	$('#devices,.but.lang-top-right').bind('click',function(e){
		e.stopPropagation();
	});
//=====sensors gadgets hide windows
	$('body').bind('touchstart', function(){
		$('#device-list').hide();
	});

	$('#devices, #user-menu').bind('touchstart',function(e){
		e.stopPropagation();
	});

	$('#user-menu a').bind('touchstart',function(e){
		window.location = $(this).attr("href");
	});
	/*
	$('#devices,#user-menu, #login-section').bind('touchstart',function(e){
		e.stopPropagation();
	});*/
	// call filter (only numbers)
	$('input.filter-numbers').on('keydown',function(event){
		if(!filterNumber(event.keyCode)) return false;
	});


	$('a.btn_viewall').hover(function(){
		$('.popup_keylogger').hide();
		var $message = $(this).prevAll('.popup_keylogger');
		var btn_top = $(this).offset().top;
		var pop_height = $message.outerHeight();
	    	$message.css('margin-top','-'+pop_height/2.5+'px');
	    	if(pop_height <30) $('.arrow').css('top','29%');
	    	else $('.arrow').css('top','41%');
	        $message.show();           
	});

	$('a.btn_viewall').mouseleave(function(){
		$('.popup_keylogger').hide();
	});

	$('.switch').on('click touchstart', function() {
		$(this).toggleClass('on');
	});

	$('select').addClass('noajax')
});