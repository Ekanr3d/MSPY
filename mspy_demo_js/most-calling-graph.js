$(function () {
        var colors = Highcharts.getOptions().colors;
		var aName = [];
		var series = [];
		
		var col = 0;
		for (var i in aCalls)
		{
			aName.push(i);
			for (var j in aCalls[i])
			{
				aData = {
						data: {y: 0, color:'', name:''},
				}
				aData.data.y = parseInt(aCalls[i][j]);
				aData.data.color = colors[col];
				aData.data.name = j;
				col++;
				series.push(aData.data);
			}
		}
	    
		var chart = $('#contact-graph').highcharts({
        	 chart: {
                 type: 'bar'
             },
            title: {
                 style:{
                    display:'none'
                }
             },
             subtitle: {
                 text: ''
             },
             xAxis: {
                 categories: aName,
                 title: {
                     text: null
                 }
             },
             yAxis: {
                 min: 0,
                 title: {
                    text: 'Calls',
                    align: 'low',
                    style:{
                        color: '#adadb0',
                        fontWeight: 'normal',
                        fontSize: '12px'
                    }
                 },
                 labels: {
                     overflow: 'justify',
                     enabled: false,
                 },
                 gridLineColor: '#FFFFFF',
             },
             tooltip: {
                 valueSuffix: ' calls'
             },
             plotOptions: {
                 bar: {
                     dataLabels: {
                         enabled: true
                     }
                 }
             },
             legend: {
                 layout: 'vertical',
                 align: 'right',
                 verticalAlign: 'bottom',
                 x: -100,
                 y: 100,
                 floating: true,
                 borderWidth: 1,
                 backgroundColor: '#FFFFFF',
                 shadow: true
             },
             credits: {
                 enabled: false
             },
             series: [{
            	 name: 'count',
            	 data: series,
            	 color: 'black',
             }],
        })
        .highcharts(); // return chart
		});

