var dialogMap;

$(function () {
	var locArray = getLocations();

	var map = new app.Map( $("#map_canvas") );
	map.init();

	map.drawItems(locArray);
	map.setRoute(locArray);


	$(dialogBox).dialog({
	  close: function( event, ui ) {
	  	dialogMap.removeMap();
	  }
	});
});

var popupGMap = function (latitude, longitude, timestamp,accuracy) {
    $(dialogBox).dialog( "option", "title", 'Location Details' );
    $(dialogBox).dialog('open');
    $('.ui-widget-overlay').css({
        'height': $(document).height() + 'px'
    });

    dialogMap = new app.Map( $("#map_dialog") );

    var date = new Date(timestamp*1000);

    var formattedTime = date.toLocaleString();

    var markerDialog = [];
    
    markerDialog.push({location_latitude: latitude,location_longitude: longitude,id: 0,location_date: formattedTime,location_accuracy: accuracy});

	dialogMap.init();

	dialogMap.drawItems(markerDialog);

}