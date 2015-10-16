var dialogMap;

$(function () {
	var locArray = getLocations();

	var map = new app.Map( $("#map_canvas") );
	map.init();
	
	map.drawItems(locArray);

	$(dialogBox).dialog({
	  close: function( event, ui ) {
	  	dialogMap.removeMap();
	  }
	});

	$('#map_canvas').on('click','.switch',function(){
		var state = !$(this).hasClass('on');
		var id = $(this).data('id');

		doBlockUnblock(id,state,'',map);

	});

	$('body').on('click','#map_dialog .switch',function(){
		var state = !$(this).hasClass('on');
		var id = $(this).data('id');

		doBlockUnblock(id,state,'',[map,dialogMap]);

	});

	$('.content-table .switch').on('click', function(event) {
	    event.stopPropagation();

	    var networkId = $(this).data('id');
	    var state = $(this).hasClass('on');

	    doBlockUnblock(networkId, state, 'switch', map);
	});
});

var popupGMap = function (latitude,longitude,type,name,password,connected_at,duration,is_blocked,id,address) {
    $(dialogBox).dialog( "option", "title", 'Location Details' );
    $(dialogBox).dialog('open');
    $('.ui-widget-overlay').css({
        'height': $(document).height() + 'px'
    });
    isBlocked = $('tr#'+id+' .switch').hasClass('on');;

    dialogMap = new app.Map( $("#map_dialog") );

    var markerDialog = [];
    
    markerDialog.push({location_latitude: latitude,location_longitude: longitude, address: address, id: id, block: isBlocked, additional_info:{ type: type, start: connected_at, name: name, duration: duration, password: password}});

	dialogMap.init();

	dialogMap.drawItems(markerDialog);

}