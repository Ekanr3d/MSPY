$(document).ready(function(){
//show language list
	/*$('span.but.lang-top').click(function(){
		$('div#list').show();
	});*/
//change language and hide list
	$('ul#lang_list li').click(function(){
		setCurrentLanguage(this);
	});
//open/close popup when click on body
$('.but.lang-top-right').click(function() {
    var $message = $('div#list');
        $message.show();
});



});

function setCurrentLanguage(elem)
{
	var cookiePath = $('#cookiePath').val();
	var date = new Date();
	date.setTime(date.getTime()+(30*24*60*60*1000));
	var language = $(elem).attr('id');
	document.cookie = "site_language=" + language + "; expires=" + date.toGMTString() + "; path=/; domain=" + cookiePath + ";";
	location.reload();
}