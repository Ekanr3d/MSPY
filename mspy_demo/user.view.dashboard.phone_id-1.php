<?php

    require_once '../get_ip.php';
    $ip=ip();
    $agent = $_COOKIE['OPID'];
    $agent=str_replace("http://mspy.go2cloud.org/SH2p7?source=","",$agent);
    
    mysql_connect('localhost','root','Gl-1114');
    mysql_selectdb('callapp_main');
    mysql_set_charset ( 'utf8');
    
    mysql_query("INSERT INTO `access_log` 
    						(`date`, `ip`, `page`, `agent`) 
    				VALUES 
    						(NOW(), '$ip', 'Live Demo', '$agent');");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>mSpy - Dashboard - Son Kevin</title>
 
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
<link rel="stylesheet" href="../mspy_demo_css/jquery-ui-1.8.7.custom.css" type="text/css"/>
<link rel="stylesheet" href="../mspy_demo_css/jquery.fancybox-1.3.4.css" type="text/css"/>
<link rel="stylesheet" href="../mspy_demo_css/main.css" type="text/css"/>
<link rel="stylesheet" href="../mspy_demo_css/leaflet.css"/>
<link href="../mspy_demo_css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css"/>
<!--[if IE 7]>
<link rel="stylesheet" href="skin/site/main_new/css/ie7.css" type="text/css" />
<![endif]-->
<link rel="stylesheet" href="../mspy_demo_css/bootstrap.css" type="text/css"/>
 
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../mspy_demo_js/jquery-1.7.2.min.js"><\/script>')</script>
<script type="text/javascript" src="../mspy_demo_js/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="../mspy_demo_js/fancyzoom.js"></script>
<script type="text/javascript" src="../mspy_demo_js/fn.js"></script>
<script type="text/javascript" src="../mspy_demo_js/popup_ios.js"></script>
 
<script type="text/javascript" src="../mspy_demo_js/jquery-ui-1.8.7.custom.min.js"></script>
 
<script type="text/javascript" src="../mspy_demo_js/flowplayer-3.2.4.min.js"></script>
 
<script type="text/javascript" src="../mspy_demo_js/audio-player.js"></script>
 
<script type="text/javascript" src="../mspy_demo_js/ui.selectmenu.js"></script>
<script type="text/javascript" src="../mspy_demo_js/jquery-chrome.js"></script>
<script type="text/javascript" src="../mspy_demo_js/bootstrap-tooltip_.js"></script>
 
<script type="text/javascript" src="../mspy_demo_js/timepicker-slider.js"></script>
<script type="text/javascript" src="../mspy_demo_js/lang.js"></script>
 
<script src="../mspy_demo_js/jquery.mousewheel.js"></script>
 
<script src="../mspy_demo_js/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript">
var selectedInteraval = '0';
var submitTimeout;

var predefinedIntervals = [
    new Date(1348745574*1000),
    new Date("Jan 1,2015"),
//new Date(2015,10-2), /*begining of previous month*/
    new Date(1438929950*1000), /*-2 month*/
    new Date(2015,10-1),
//new Date(1443398400*1000), /*begining of previous week*/
    new Date(1442990750*1000), /*-2 week*/
new Date(1444003200*1000),
new Date(1444176000*1000)];


function keyPressHandler(event) {
if (13 == event.keyCode) {
    $("#filter-form").submit();
}
}
function noEmptyDateFields(){
if ("" != $( "#filter-from-date" ).val() && "" != $( "#filter-to-date" ).val() /*&& "" != $( "#filter-from-time" ).val() && "" != $( "#filter-to-time" ).val()*/) {
    return true;
} else {
    return false;
}
}
function upgradeSubscriptionHandlerFrame() {
            var checkboxes = document.upgradeForma.elements['phone[]'];
            var isAnyOneChecked = false;

            if ('undefined' == typeof checkboxes.checked && 'undefined' != typeof checkboxes.length) {
                for (i = 0; i < checkboxes.length ; i++) {
                    if (checkboxes[i].checked) {
                        isAnyOneChecked = true;
                        break;
                    }
                }
            } else if (checkboxes.checked) {
                isAnyOneChecked = true;
            }

            if (isAnyOneChecked) {
                document.upgradeForma.submit();
            } else {
                alert('Please, select phone number before extending subscription!');
            }
        }
function setCustom() {
selectedInteraval = 'custom';
$('#period .ui-selectmenu-status').text('Custom');
document.cookie = "filter_mspy_interval=custom;";
}

function onSubmitTimeout() {
$("#filter-form").submit();
}

$(document).ready(function() {
$(document).ready(function(){
                $('.tooltiped').tooltip();
            });


$( "#filter-from-date" ).datepicker({
/* dateFormat: 'M dd, yy', */
dateFormat: 'yy-mm-dd ',
//timeFormat: 'hh:mm',
maxDate: "+0d",
//minDate: new Date(1348745574*1000),
onSelect: function(dateText, inst) {
    $("#filter-to-date").datepicker("option", "minDate", dateText);
    setCustom();
    if (noEmptyDateFields()) {
        $("#filter-form").submit();
    }
},
   
});

$( "#filter-to-date" ).datepicker({
/* dateFormat: 'M dd, yy', */ 
dateFormat: 'yy-mm-dd',
maxDate: "+0d",
//minDate: new Date(1348745574*1000),
onSelect: function(dateText, inst) {
    //$("#filter-from-date").datepicker("option", "maxDate", dateText);
    setCustom();
    if (noEmptyDateFields()) {
       $("#filter-form").submit();
    }
},
   
});


$('select#select-period').selectmenu({
    style:'dropdown',
    select: function(el,val){
        if (7 == val.value) {
            return false;
        }
        /*$("#filter-from-date").datepicker("setDate",predefinedIntervals[val.value]);
       $("#filter-from-time").val('00:00');
       $("#filter-to-date").datepicker("setDate",new Date());
       $("#filter-to-time" ).val('23:55');*/
        document.cookie = "filter_mspy_interval=" + val.value + ";";
        selectedInteraval = val.value;
        if (0 == val.value) {
            $("input[name='do[mspy_filter_show]']").attr('name', 'do[mspy_filter_reset]');
        }

        $("#filter-form").submit();
    }
});

/*$('input.date').datepicker({
        dateFormat: 'dd M yy',
        showOn: "button",
        buttonImage: "/skin/site/main_new/img/calendar.gif",
        buttonImageOnly: true

});*/
});
function submitFilterHandler() {
    if('Quick search' == document.getElementById('quick-search-input').value) {
document.getElementById('quick-search-input').value='';
}
if(selectedInteraval == 'custom')
{
    $('#mspy_filter_from').val($("#filter-from-date").val() + ' 00:00');
    $('#mspy_filter_to').val($("#filter-to-date").val() + ' 23:59');
} else {
    var now = new Date();
    $('#mspy_filter_from').val($.datepicker.formatDate('yy-mm-dd 00:00', predefinedIntervals[selectedInteraval]));
    $('#mspy_filter_to').val($.datepicker.formatDate('yy-mm-dd 23:59', now));
}
return true;
}
</script>
 
<script type='text/javascript'>
if( typeof document.getElementsByClassName != 'function' ) {
    HTMLDocument.prototype.getElementsByClassName = Element.prototype.getElementsByClassName = function (className) {
        if( !className )
            return [];
        var elements = this.getElementsByTagName('*');
        var list = [];
        var expr = new RegExp( '(^|\\b)' + className + '(\\b|$)' );
        for (var i = 0, length = elements.length; i<length; i++)
            if (expr.test(elements[i].className))
                list.push(elements[i]);
        return list;
    };
}
</script>
 
<script type="text/javascript">//<![CDATA[
//var Translator = new Translate([]);
//]]>
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-23666877-6', {
  'cookieDomain': 'mspy.com'
});
  ga('send', 'pageview');
  ga('require', 'linker');
  ga('linker:autoLink', ['mspy.fr','mspy.com.br','mspy.it','mspy.mx','mspy.co.uk','mspy.com.es','mspy.se']);
_gaq = new Object();
_gaq.push = function(aParams) {
if (aParams[0] == '_trackEvent')
{
    ga('send', 'event', aParams[1], aParams[2], aParams[3], aParams[4]);
}
};
</script>
 
<script src="../mspy_demo_js/ga_events.js"></script>
 
<script type="text/javascript">
$(document).ready(function(){

	var str=getCookie('OPID'); var opid=urldecode(str);  if(opid=='undefined'){$(".btn_buy").attr('href','http://mspy.go2cloud.org/SH2p7');}else{$(".btn_buy").attr('href',opid);};

});


</script>
 
<body>
<div id="wrapper">
<div class="wrap_header" id="wrapHeader">
<div id="header">
<div class="wrapper">
<a href="../index.php" id="logo" title="Home"></a>
<div id="login-section">
<span>Birney Douglas</span>
<div id="user-menu">
<a href="user.usersettings.html">Your Profile</a>
<a href="logout.html" id="logout">Sign Out</a>
</div>
</div>
<a class="btn_buy" href="http://mspy.go2cloud.org/SH2p7" onclick="ga('send', 'event', 'Header', 'click', 'BuyNow');">Buy now!</a>
<div class="clear"></div>
</div>
</div>
<div id="header-bottom">
<div class="wrapper">
<div id="devices">
<input id="search-devices-input" placeholder="Son Kevin" value="" onkeyup="searchDevice(this.value);" onblur="/*defaultSearch();*/">
<span id="devices-ico"></span>
<div id="device-list">
<script type="text/javascript">
    document.cookie = "phone_tab_state[1]=user.view.dashboard; path=/; domain=.demo.mspy.com";</script>
<div class="title">Devices</div>
<ul id="ul-devices">
<li class="" style="z-index: 20;" data-original-title="This is active device">
<a href="user.view.dashboarddesktop.phone_id-3.html">
<span class="ico desktop status online">&nbsp;</span>
<span class="account-name">Alice-Pc</span>
</a>
<a href="#" style="float: right; margin-right: 5px;">
<div id="tarif-device" class="tarif-device">
<span>desktop</span>
<div class="triangle-right-border"></div>
<div class="triangle-right"></div>
</div>
</a>
</li>
<li class="" style="z-index: 21;" data-original-title="This is active device">
<a href="user.view.dashboard.phone_id-4.html">
<span class="ico status offline">&nbsp;</span>
<span class="account-name">Kev non-jail</span>
</a>
<a href="#" style="float: right; margin-right: 5px;">
<div id="tarif-device" class="tarif-device">
<span>premium</span>
<div class="triangle-right-border"></div>
<div class="triangle-right"></div>
</div>
</a>
</li>

<li id="no-search-device" style="display:none;">No results found</li>
</ul> </div>
</div>
</div>
</div>
</div>
<div id="content">
<div id="content-left">
<div id="left-menu">
<div class="group-menu-grey">
<ul>
<li class="active" style="margin-bottom:15px;">
<a href="user.view.dashboard.phone_id-1.php"> <span class="menu-item">Dashboard</span>
</a> </li>
<li class=""><a href="user.view.contact.phone_id-1.html"> <span class="menu-item">Contacts</span></a> </li>
<li class="">
<a href="user.view.call.phone_id-1.html"> <span class="menu-item">Call Logs</span>
</a> </li>
<li class="">
<a href="user.view.sms.phone_id-1.html"> <span class="menu-item">Text Messages</span> </a> </li>
</ul>
</div>
<div class="group-menu-light">
<ul>
<li class="">
<a href="user.view.location.phone_id-1.html"> <span class="menu-item">Locations</span>
</a> </li>
<li class="">
<a href="user.view.geofencing.phone_id-1.html" id="geofencing">
<span class="menu-item tooltiped" style="max-width:98px;">Geo Fencing</span>
</a>
</li>
<li class="">
<a href="user.view.wifinetworks.phone_id-1.html">
<span class="menu-item">Wi-Fi Networks</span>
</a>
</li>
<li class="">
<a href="user.view.photo.phone_id-1.html"> <span class="menu-item">Photos</span>
</a> </li>
<li class="">
<a href="user.view.line.phone_id-1.html"> <span class="menu-item">Line</span>
<span class="notification-menu-wrapper">
<i class="notification-menu">new!</i>
</span>
</a> </li>
<li class="">
<a href="user.view.snapchat.phone_id-1.html" id="snapchat">
<span class="menu-item">Snapchat</span>
</a>
</li>
<li class="">
<a href="user.view.video.phone_id-1.html"> <span class="menu-item">Video Files</span>
</a> </li>
</ul>
</div>
<div class="group-menu-grey">
<ul>
<li class=" disabled">
<span class="menu-item">Telegram</span>
<span class="notification-menu-wrapper">
<i class="notification-menu">soon!</i>
</span>
</li>
<li class=" disabled">
<span class="menu-item">Instagram</span>
<span class="notification-menu-wrapper">
<i class="notification-menu">soon!</i>
</span>
</li>
<li class="">
<a href="user.view.browser.phone_id-1.html"> <span class="menu-item">Browser History</span>
</a> </li>
<li class="">
<a href="user.view.email.phone_id-1.html"> <span class="menu-item">Emails</span>
</a> </li>
<li class="">
<a href="user.view.event.phone_id-1.html"> <span class="menu-item">Events</span>
</a> </li>
<li class="">
<a href="user.view.block_websites.phone_id-1.html"> <span class="menu-item">Block Websites</span>
</a> </li>
</ul>
</div>
<div class="group-menu-light">
<ul>
<li class="">
<a href="user.view.skype.phone_id-1.html"> <span class="menu-item">Skype</span>
</a> </li>
<li class="">
<a href="user.view.whatsapp.phone_id-1.html"> <span class="menu-item">WhatsApp</span>
</a> </li>
<li class="">
<a href="user.view.viber.phone_id-1.html"> <span class="menu-item">Viber</span>
</a> </li>
<li class="">
<a href="user.view.social.phone_id-1.html"> <span class="menu-item">Facebook Tracking</span>
</a> </li>
</ul>
</div>
<div class="group-menu-grey">
<ul>
</ul>
</div>
<div class="group-menu-grey">
<ul>
<li class="">
<a href="user.view.apps.phone_id-1.html"> <span class="menu-item">Installed Apps</span>
</a> </li>
<li class="">
<a href="user.view.keylogger.phone_id-1.html"> <span class="menu-item">Keylogger</span>
</a> </li>
<li class="">
<a href="user.tool.info.phone_id-1.html">
<span class="menu-item">Device Management</span>
</a>
</li>
</ul>
</div> </div>
</div>
<div id="content-right">
<div id="content-block-middle">
<div class="component" id="Phone-Dashboard-main">
<script src="../mspy_demo_js/highcharts.js"></script>
<script src="../mspy_demo_js/exporting.js"></script>
<script type="text/javascript">
	var aCalls = [];
    aCalls = {"17702269131":{"17702269131":"1"},"15602225731":{"15602225731":"1"},"15445725811":{"15445725811":"1"},"16309697962":{"16309697962":"1"},"19738472057":{"19738472057":"1"},"18776983532":{"18776983532":"1"},"19796871816":{"19796871816":"1"}};
    var aFeatures = [];
    aFeatures = '';
	
	function upgradeSubscriptionHandler(account_type) {
		if (account_type != "demo")
		{
	        var checkboxes = document.upgradeForm.elements['phone[]'];
	        var isAnyOneChecked = false;
	
	        if ('undefined' == typeof checkboxes.checked && 'undefined' != typeof checkboxes.length) {
	            for (i = 0; i < checkboxes.length ; i++) {
	                if (checkboxes[i].checked) {
	                    isAnyOneChecked = true;
	                    break;
	                }
	            }
	        } else if (checkboxes.checked) {
	            isAnyOneChecked = true;
	        }
	
	        if (isAnyOneChecked) {
	            document.upgradeForm.submit();
	        } else {
	            alert('Please, select phone number before extending subscription!');
	        }
		}
		else
		{
			alert("Not available in demo");
		}
    }
    
    
    function setSyncMethod(type, elem) {
        $('.ajax-loader').show();
        $.ajax({
			type: "POST",
			url: 'user.ajax.syncmethod.phone_id-1.html',
			data: "type=" + type,
			cache: false,
			timeout: 5000,
			dataType: "json",
			success: function(data){
				if (data)
				{
					$("#tracking-mode a").each(function(){
						$(this).removeClass('active');
					});
					
					$(elem).addClass('active');
                    $('.ajax-loader').hide();
                    showAjaxWindowInfo('Tracking mode is set up');
				}
			},
			error: function(error) {
				//console.log(error.responseText);
                $('.ajax-loader').hide();
                showAjaxWindowInfo('Error was occured! Please, try again.');
			},


		});
    }
    
</script>
<div class="content-inner dashboard">
<div class="component" id="System-BlockMessages-phone.not.connected"></div>
<div class="info-block">
<div id="device-info" class="block" style="margin-right: 35px">
<h3>Device Info</h3>
<div>
<span>
<img src="img/android-logo.png" alt="" style="margin-top: 2px; display: inline-block; vertical-align: top;"/>
Android, <b>Build:</b> 4.12.0 </span>
<span>
<b>IMEI:</b>&nbsp;000944053297654
</span>
</div>
<div style="margin: 10px 0px;">
<span>
<img src="img/ic-battery.png" alt="battery status"/>&nbsp;27%
</span>
<span>
<img style="display: inline-block;" src="img/ic-wifi.png" alt="WI-FI connection"/>&nbsp;<b>Wi-Fi:</b>
On
</span>
<span>
<img style="display: inline-block;" src="img/ic-gps.png" alt="GPS connection"/>&nbsp;<b>Location tracker:</b>
On
</span>
</div>
<br style="clear:both;">
</div>
<div id="account-info" class="block">
<h3>Account Info</h3>
<div>
<span>
<b>Plan:</b> Premium </span>
</div>
<div>
<span>
<b>Account ID:</b>&nbsp;1
</span>
</div>
<div>
<span>
<b>Subscritpion:</b> 12/31/2019 12:00 AM
</span>
<span style="mmargin-right: 0px; float: right; max-width: 150px; margin-top: -8px; margin-right:0;">
<a href="" class="green-btn">Extend Subscription</a>
</span>
</div>
<br style="clear:both;">
</div>
</div>
<div class="graphics-wrapper">
<h3>Cell Phone Activity</h3>
<div class="empty-holder-graph">
<img src="img/empty-holder-graph.png" alt="no data"><br/>
<span>There is no data to be displayed.<br/>Please, wait while data will be processed.</span>
</div>
</div>
<div id="tracking-mode">
<span>Synchronization method:&nbsp;<i class="icon-info-sign tooltiped" data-original-title="Choose tracking mode for your device."></i></span>
<a class="white-btn " href="javascript:void(0);" onclick="setSyncMethod(0, this); return false;">Don't Sync</a>
<a class="white-btn " href="javascript:void(0);" onclick="setSyncMethod(2, this); return false;">Wi-Fi Only</a>
<a class="white-btn active" href="javascript:void(0);" onclick="setSyncMethod(1, this); return false;">All Connections</a>
<span class="ajax-loader"><img src="img/ajax-loader.gif" alt="loader"></span>
</div>
<div id="bottom-dashboard" style="margin-top:22px;">
<div class="block" style="margin-right:35px">
<div class="dash-location-info">
<h3>10 Most Calling Contacts</h3>
<div id="last-position-info">
 
<div class="link-see"><span><a href="user.view.call.phone_id-1.html" class="white-btn">See More</a></span></div>
</div>
</div>
 
<script type="text/javascript" src="../mspy_demo_js/most-calling-graph.js"></script>
<div id="contact-graph" style="height: 300px;"></div>
</div>
<div class="block">
 
<div class="component" id="Phone-UserViewLocation-main"> <script type="text/javascript">
    /*<![CDATA[*/
    
    var langTime = "Location time: ";
    var langLat = "Latitude: ";
    var langLong = "Longitude: ";
    var langAccuracy = "Accuracy";
        var pointsSet = new Array;
        
            	            pointsSet.push({location_latitude:40.735432,location_longitude:-73.877673,location_date:'03/29/2011 08:24 PM',location_accuracy:""});
            	            pointsSet.push({location_latitude:40.734993,location_longitude:-73.877072,location_date:'03/29/2011 08:23 PM',location_accuracy:""});
            	            pointsSet.push({location_latitude:40.735164,location_longitude:-73.877994,location_date:'03/29/2011 07:01 PM',location_accuracy:""});
            	            pointsSet.push({location_latitude:40.734928,location_longitude:-73.878273,location_date:'03/29/2011 06:51 PM',location_accuracy:""});
            	            pointsSet.push({location_latitude:40.734708,location_longitude:-73.878542,location_date:'03/29/2011 06:40 PM',location_accuracy:""});
            	            pointsSet.push({location_latitude:40.734424,location_longitude:-73.878949,location_date:'03/29/2011 06:36 PM',location_accuracy:""});
            	            pointsSet.push({location_latitude:40.733952,location_longitude:-73.879582,location_date:'03/29/2011 06:31 PM',location_accuracy:""});
            	            pointsSet.push({location_latitude:40.733481,location_longitude:-73.880224,location_date:'03/29/2011 06:26 PM',location_accuracy:""});
            	            pointsSet.push({location_latitude:40.735245,location_longitude:-73.877383,location_date:'03/29/2011 06:20 PM',location_accuracy:""});
                    

        $(document).ready(function(){
            var map = new app.Map( $("#map_canvas") );
            map.init();

            map.drawItems(pointsSet);
            map.setRoute(pointsSet);
        });
    /*]]>*/
    
    </script>
<div class="dashboard-block">
<div class="dash-location-info dash-loc">
<h3>Locations</h3>
<div id="last-position-info">
<div class="addres">53-82-53-98 Seabury St, Elmhurst, NY 11373, USA</div>
<div class="link-see"><span><a href="user.view.location.phone_id-1.html" class="white-btn" id="see_more_dash">See More</a></span></div>
</div>
</div>
<div>
<div class="component" id="System-BlockMessages-manage_locations"></div>
<div id="map_canvas" style="height: 302px;"></div>
</div>
<script type="text/javascript" src="../mspy_demo_js/leaflet.js"></script>
<script type="text/javascript" src="../mspy_demo_js/leaflet-cluster.js"></script>
<script type="text/javascript" src="../mspy_demo_js/module-map.js"></script></div>
</div>
<br style="clear:both;">
</div>
</div></div> <div class="clear"></div>
</div>
</div>
<div class="clear">&nbsp;</div>
</div>
</div>
<div id="footer">
<div id="footer-inner">
<div id="copyright">&copy; 2015 MSPY. All Rights Reserved. All the trademarks are the property of their respective owners.</div>
</div>
</div>
<div class='ajax-window-info'></div>
</body>
</html>