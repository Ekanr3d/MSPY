function sendInfoGA(group, lable, metod) {
	var metod = metod||'Click';
	var lable = lable.replace(/\s/g, '-');

    ga('send', 'event', group, metod, lable);
}

function getPageName() {
	var href = location.href;

	var result = /user\.view\.[a-z-0-9-_]*/.exec(href);
	result = result[0].replace('user.view.', '');

	return result;
}

var getPageName = getPageName();

$(document).ready(function() {
	$('#left-menu').on('click', 'a', function() {
		sendInfoGA( 'DemoPage', $(this).text() );
	});

	$('#header').on('click', '.btn_buy', function() {
		sendInfoGA( 'DemoPage', 'Buynow', getPageName );
	});

	$('.btn-group').on('click', '.white-btn', function() {
		var lable = $(this).text();

		sendInfoGA('DemoPage', lable, getPageName);
	});

	$('.dash-location-info').on('click', '.link-see a', function() {
		var indexNum = $(this).index();

		switch (indexNum) {
		  case 1:
		    sendInfoGA('DemoPage', '10MostCallingContacts_SeeMore');
		    break
		  case 2:
		    sendInfoGA('DemoPage', '10MostCallingContacts_Locations');
		    break
		}
	});
});