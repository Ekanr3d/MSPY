var jsonData = '{"267":{"apps": [{"user": "267", "id": "54", "name": "Google Chrome", "time": "91728"}, {"user": "267", "id": "66", "name": "MS Word 2011", "time": "49626"}, {"user": "267", "id": "91", "name": "MS Excel", "time": "44905"}, {"user": "267", "id": "57", "name": "Firefox", "time": "25835"}, {"user": "267", "id": "48", "name": "Skype", "time": "16100"}, {"id": 0, "name": "Other", "time": 8526 }], "app_time": 236720, "app_count": "7", "keylog_count": "62", "active_time": "8145", "inactive_time": 62303 }}';
var jsonObj;
$(function () {
    var userId = $('#js-userSelect').find(":selected").val();

    try{
        jsonObj = JSON.parse(jsonData);
        drawColumngraph(jsonObj[userId]);
        }
    catch(err){
        console.log("Error description: " + err.message);
        $('#js-emptyGraph').css('display','block');
    }

    $('#js-userSelect').on('change',function(){
        try{
            jsonObj = JSON.parse(jsonData);
            userId = $('#js-userSelect').find(":selected").val();
            drawColumngraph(jsonObj[userId]);
            }
        catch(err){
            console.log("Error description: " + err.message);
            $('#js-emptyGraph').css('display','block');
        }
    });
});

function drawColumngraph(_jsonObj){          
    var arrNames = [],
        i = 0,
        seriesTotal={
            data: []
        };
    var arrTooltip = [];
    var colors = ['#1abc9c', '#3498db', '#2980b9', '#9b59b6', '#f1c40f', '#f39c12']; 

    $('#app_count').text(_jsonObj.app_count);
    $('#keylog_count').text(_jsonObj.keylog_count);
    $('#screenshot_count').text(_jsonObj.screenshot_count);
    $('#active_time').text(secondsToHms(_jsonObj.active_time));
    $('#inactive_time').text(secondsToHms(_jsonObj.inactive_time));

    for (var prop in _jsonObj.apps){
        var tmpobj = {
            time : secondsToHms(_jsonObj.apps[prop].time),
            y : Math.floor(_jsonObj.apps[prop].time / _jsonObj.app_time * 100),
            color: colors[i]
        }

        arrNames.push( _jsonObj.apps[prop].name );
        arrTooltip.push( tmpobj );
        seriesTotal.data.push( tmpobj ); 
        i++;      
    }

    var chart = $('#js-appActivity-graph').highcharts({
            chart: {
                type: 'bar',  
            },
            title: {
                style:{
                    display:'none'
                }

            },
            xAxis: {
                categories: arrNames,
                title: {
                    style: {color:'#aeb2b7'}
                }   
            },
            yAxis: {
                title: {
                    text: 'Hours',
                    align:'left',
                    style:{
                        color: '#adadb0',
                        fontWeight: 'normal',
                        fontSize: '14px'
                    },
                },
                gridLineColor: '#ecedee',
                gridLineWidth: "1px",
                labels: {
                    style: {
                        color: '#dadcde',
                        fontWeight: 'normal'
                    }
                },
            },
            legend: {
                enabled: false
            },
            tooltip: {
                formatter: function() {
                    var txt = "<b>Time</b>: " + this.point.options.time;
                    txt += "<br />" + "<b>Percentage</b>: " + this.y +"%";
                    return txt;
                }
            },
            credits: { enabled: false},
            series: [seriesTotal]
        });
}
