app = window.app || {};
app.Map = window.app.Map || {};

app.Map = function($mapWrapper, mOptions) {
	//icons
	var iconBase = '/skin/site/main_new/img/';
	var icons = {
	  "primary": {
	    icon: L.icon({
			    iconUrl: iconBase + 'blue_marker.png',
			    iconSize:     [45, 30], // size of the icon
			})
	  },
	  "block": {
	    icon: L.icon({
			    iconUrl: iconBase + 'red_marker.png',
			    iconSize:     [45, 30], // size of the icon
			})
	  },
	  "last": {
	    icon: L.icon({
			    iconUrl: iconBase + 'last_marker.png',
			    iconSize:     [45, 30], // size of the icon
			})
	  }
	};

	//object for cluster 
	var itemList = L.markerClusterGroup();
	//items array
	var itemArray = {};
	//object for path
	var latLongArray = [];

	var popupContent = {};

	var map = {};

	var updatePopup = function(){

	};

	var setMarkers = function(data) {
		$.each(data.markers, function(i,item){   
			var a = data.markers[i];
			var title = a.id;
			var markerLatLong = new L.LatLng(a.lat, a.long)
			var marker = L.marker(markerLatLong, { id: a.id });

			latLongArray.push(markerLatLong);

			itemArray[a.id] = marker;
			//bind popup
			var popText = '';

			for(var val in a.additional_info){
				popText += '<b>'+val+':</b> '+a.additional_info[val]+'<br/>';
			}
			marker.bindPopup(popText);

			marker.setIcon(icons['primary'].icon);
			//set danger marker if block val == 1
			if( a.block )
			{
				marker.setIcon(icons['block'].icon);
			}


			itemList.addLayer(marker);
		});
	};

	var setMarkersbyArray = function(data) {
		var lastItem;

		$.each(data, function(i,item){   
			var a = data[i];
			var title = a.id;
			var markerLatLong = new L.LatLng(a.location_latitude, a.location_longitude)
			var marker = L.marker(markerLatLong, { id: a.id, block: a.block });

			latLongArray.push(markerLatLong);

			itemArray[a.id] = marker;
			//bind popup
			var popText = "";
			var addressTxt = "";

			if (a.location_address != "" && a.location_address !== undefined)
	        {
	        	addressTxt = "<br/><b>Address</b>: " + a.location_address;
	        }

	        if( !a.additional_info ) {
				popText = "<b>"+langTime+": </b>"+a.location_date.toString()+"<br/><b>"+langLat+": </b>"+a.location_latitude+"<br/><b>"+langLong+": </b> "+a.location_longitude+addressTxt+"<br/><b>"+langAccuracy+": </b>"+a.location_accuracy;
			}
			else {
				for(var val in a.additional_info){
				popText += '<b>'+val+':</b> '+a.additional_info[val]+'<br/>';
				}
			}

			popupContent[a.id] = popText;

			marker.setIcon(icons['primary'].icon);
			//set danger marker if block val == 1
			if( marker.options.block || marker.options.block == "") {	

				if( marker.options.block == true ){
					marker.setIcon(icons['block'].icon);
					popText +="<b>Block: </b><div class='switch switch-danger on' data-id="+a.id+"></div>";
				}
				else {
					popText +="<b>Block: </b><div class='switch switch-danger' data-id="+a.id+"></div>";
				}
			}

			marker.bindPopup(popText);


			itemList.addLayer(marker);
			
			/*if(i == 0){
				lastItem = marker;	
			}*/
			
		});

		//lastItem.setIcon(icons['last'].icon);

		map.addLayer( itemList );
		map.fitBounds(itemList.getBounds());
	};

	var setFences = function(data) {

		for(var prop in data){
			var a = data[prop];

			var fence = L.circle(new L.LatLng(a.lat, a.lng)
						, a.radius
						,{
							id: a.id,
							color: (a.allowed) ? '#34FFAA' : '#FF825D',
							fillColor: (a.allowed) ? '#34FFAA' : '#FF825D',
			    			fillOpacity: 0.5
						});


			itemArray[a.id] = fence;
			
			//bind popup
			//var popText = a.name;

			//fence.bindPopup(popText);

			itemList.addLayer(fence);
		}

		map.addLayer( itemList );
		map.fitBounds(itemList.getBounds());

		/*$.each(data, function(i,item){   
			var a = data[i];
			var title = a.id;

			var fence = L.circle(new L.LatLng(a.lat, a.long)
						, a.radius
						,{ 
							id: a.id,
							color: (a.block) ? '#f00' : '#0f0',
							fillColor: (a.block) ? '#f00' : '#0f0',
			    			fillOpacity: 0.5
						});


			itemArray[a.id] = fence;
			//bind popup
			var popText = a.name;

			fence.bindPopup(popText);

			itemList.addLayer(fence);
		});*/
	};

	var loadItems = function(url, get_fence){
    	var is_fence = get_fence || false;

    	//if pass url - array of markers object
    	if( url instanceof Array )
    	{
    		setMarkersbyArray(url);
    	}
    	else
    	{			
				if( is_fence )
				{
					setFences(url);
				}
				else
				{
					setMarkers(url);
				}
    	}

    };
//Public Methods
	pub = {
		init : function(coords) {
			var tiles = L.tileLayer('http://otile1.mqcdn.com/tiles/1.0.0/map/{z}/{x}/{y}.png', {
				maxZoom: 18,
				attribution: '&copy; Tiles Courtesy of <a href="http://www.mapquest.com/" target="_blank">MapQuest</a> <img src="http://developer.mapquest.com/content/osm/mq_logo.png"> <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
			});

			

			latlng = ( coords !== undefined && coords != "" ) ? L.latLng(coords.lat, coords.lng) : L.latLng(41.145495, -73.994901);

			map = L.map($mapWrapper[0].id, {center: latlng, zoom: 10, layers: [tiles]});

		},
		click :function(callback){
			map.on('click', callback);
		},
		dragFence: function(callback){
			addedFence.on('dragend',callback);
		},
		drawItems : function(url, get_fence) {
			loadItems(url, get_fence);
		},
		blockUnblockMarker: function(id,state) {
			var marker = itemArray[id];
			var text = popupContent[id];
			marker.options.block = state;

			if( marker.options.block == true ){
				text +="<b>Block: </b><div class='switch switch-danger on' data-id="+id+"></div>";
			}
			else {
				text +="<b>Block: </b><div class='switch switch-danger' data-id="+id+"></div>";
			}

			marker._popup.setContent(text);

			( state == true ) ? marker.setIcon(icons['block'].icon) : marker.setIcon(icons['primary'].icon);			
		},
		drawEditableFence: function(opt){
			if( addedFence ) {
				map.removeLayer(addedFence);
			} 

			addedFence = L.circle(
						opt.latlng
						, opt.rad
						,{
							id : opt.id,
							draggable: true,
							color: (opt.allowed) ? '#0f0' : '#f00',
							fillColor: (opt.allowed) ? '#0f0' : '#f00',
			    			fillOpacity: 0.5
						});

			//bind popup
			var popText = "You can drag this fence to any place you want";

			addedFence.bindPopup(popText);

			addedFence.on('mouseover',function(e){
				this.openPopup();
			});

			map.addLayer( addedFence );

		},
		changeCircle: function(fence, opt) {
			fence.setRadius(opt.rad);
			fence.setStyle({
				color: (opt.allowed) ? '#0f0' : '#f00',
				fillColor: (opt.allowed) ? '#0f0' : '#f00',
			});

		},
		removeItem: function(id) {
			map.removeLayer(itemArray[id]);
		},
		setRoute: function(){
			var firstpolyline = new L.Polyline(latLongArray, {
				color: 'green',
				weight: 3,
				opacity: 0.5,
				smoothFactor: 1

			});
			firstpolyline.addTo(map);
		},
		removeMap: function(){
			map.remove();
		}

	}

	return pub;
}