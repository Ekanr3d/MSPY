var user,  
    periodHours = [];
var periodDays = [];
var chartPreiod, chartDayHours, chartDayMin;
var jsonData;
var scroolHeight;

$(function () {
    drawColumngraph();

    $('#js-userSelect').on('change',function(){
       $('#js-user').val( $('#js-userSelect').find(":selected").text() );
       drawColumngraph(); 
    });

    $('.switch').on('click touchstart', function() {
        if( $(this).hasClass('on') ){
            $('#js-dayAnalMin').hide();
            $('#js-dayAnalHours').show();
        }else{
            $('#js-dayAnalMin').show();
            $('#js-dayAnalHours').hide();
        };

    });

});

function returnJSON() {
    var jsonStr = '{"08\/01\/2014":{"active":5.005,"inactive":2.2975,"detail":{"active":[[10.488055555556,10.508055555556],[10.871388888889,11.005555555556],[11.114722222222,11.488055555556],[11.639166666667,12.474722222222],[12.6975,12.708333333333],[12.829444444444,12.890555555556],[13.004166666667,13.505555555556],[14.139166666667,15.091111111111],[15.180833333333,15.238055555556],[15.358611111111,16.442777777778],[16.568055555556,17.198888888889],[17.445555555556,17.79]],"inactive":[[10.4875,10.488055555556],[10.508055555556,10.871388888889],[11.005555555556,11.114722222222],[11.488055555556,11.639166666667],[12.474722222222,12.6975],[12.708333333333,12.829444444444],[12.890555555556,13.004166666667],[13.505555555556,14.139166666667],[15.091111111111,15.180833333333],[15.238055555556,15.358611111111],[16.442777777778,16.568055555556],[17.198888888889,17.445555555556]]},"hours":[{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":9,"inactive":22},{"active":44,"inactive":16},{"active":33,"inactive":27},{"active":30,"inactive":30},{"active":52,"inactive":8},{"active":46,"inactive":14},{"active":53,"inactive":7},{"active":33,"inactive":14},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0}],"begin":1406840400},"08\/02\/2014":{"active":0,"inactive":0,"detail":{"active":[],"inactive":[]},"hours":[{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0}],"begin":1406926800},"08\/03\/2014":{"active":0,"inactive":0,"detail":{"active":[],"inactive":[]},"hours":[{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0}],"begin":1407013200},"08\/04\/2014":{"active":5.3997222222222,"inactive":7.7911111111111,"detail":{"active":[[10.810833333333,11.084166666667],[11.267777777778,11.485833333333],[11.639444444444,11.691666666667],[11.835,12.553333333333],[12.687222222222,13.080833333333],[14.094444444444,14.640555555556],[14.786111111111,16.300833333333],[16.42,17.580277777778],[17.7375,18.260555555556]],"inactive":[[10.809166666667,10.810833333333],[11.084166666667,11.267777777778],[11.485833333333,11.639444444444],[11.691666666667,11.835],[12.553333333333,12.687222222222],[13.080833333333,14.094444444444],[14.640555555556,14.786111111111],[16.300833333333,16.42],[17.580277777778,17.7375],[18.260555555556,24]]},"hours":[{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":11,"inactive":0},{"active":31,"inactive":29},{"active":52,"inactive":8},{"active":5,"inactive":55},{"active":46,"inactive":14},{"active":60,"inactive":0},{"active":53,"inactive":7},{"active":51,"inactive":9},{"active":16,"inactive":44},{"active":0,"inactive":60},{"active":0,"inactive":60},{"active":0,"inactive":60},{"active":0,"inactive":60},{"active":0,"inactive":60}],"begin":1407099600},"08\/05\/2014":{"active":5.1188888888889,"inactive":2.3058333333333,"detail":{"active":[[10.625,10.837777777778],[11.214166666667,11.656111111111],[11.857222222222,12.110555555556],[12.211944444444,12.8875],[12.976388888889,14.258333333333],[15.095555555556,16.061944444444],[16.248055555556,16.706388888889],[16.950555555556,17.779166666667]],"inactive":[[0,0.26888888888889],[10.623611111111,10.625],[10.837777777778,11.214166666667],[11.656111111111,11.857222222222],[12.110555555556,12.211944444444],[12.8875,12.976388888889],[14.258333333333,15.095555555556],[16.061944444444,16.248055555556],[16.706388888889,16.950555555556],[17.779166666667,17.779444444444]]},"hours":[{"active":0,"inactive":16},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":13,"inactive":10},{"active":36,"inactive":24},{"active":49,"inactive":11},{"active":60,"inactive":0},{"active":16,"inactive":44},{"active":54,"inactive":6},{"active":35,"inactive":25},{"active":47,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0}],"begin":1407186000},"08\/06\/2014":{"active":6.5455555555556,"inactive":1.2283333333333,"detail":{"active":[[11.026944444444,12.266666666667],[12.351666666667,12.386111111111],[12.818333333333,13.276111111111],[13.363333333333,13.501944444444],[13.594166666667,15.142777777778],[15.230833333333,17.606944444444],[17.721944444444,17.721944444444],[17.837222222222,18.056944444444],[18.267777777778,18.798333333333]],"inactive":[[11.024444444444,11.026944444444],[12.266666666667,12.351666666667],[12.386111111111,12.818333333333],[13.276111111111,13.363333333333],[13.501944444444,13.594166666667],[15.142777777778,15.230833333333],[17.606944444444,17.721944444444],[17.721944444444,17.837222222222],[18.056944444444,18.267777777778]]},"hours":[{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":58,"inactive":1},{"active":29,"inactive":31},{"active":49,"inactive":11},{"active":60,"inactive":0},{"active":55,"inactive":5},{"active":60,"inactive":0},{"active":46,"inactive":14},{"active":35,"inactive":13},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0}],"begin":1407272400},"08\/07\/2014":{"active":5.18,"inactive":7.72,"detail":{"active":[[11.103333333333,11.901666666667],[13.829166666667,13.846388888889],[14.075555555556,14.950833333333],[15.065277777778,16.014166666667],[16.101111111111,16.992777777778],[17.096944444444,17.9425],[18.054444444444,18.2925],[18.685,19.197777777778],[19.395555555556,19.447777777778]],"inactive":[[11.1,11.103333333333],[11.901666666667,13.829166666667],[13.846388888889,14.075555555556],[14.950833333333,15.065277777778],[16.014166666667,16.101111111111],[16.992777777778,17.096944444444],[17.9425,18.054444444444],[18.2925,18.685],[19.197777777778,19.395555555556],[19.447777777778,24]]},"hours":[{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":48,"inactive":6},{"active":0,"inactive":60},{"active":1,"inactive":59},{"active":53,"inactive":7},{"active":56,"inactive":4},{"active":55,"inactive":5},{"active":51,"inactive":9},{"active":33,"inactive":27},{"active":15,"inactive":45},{"active":0,"inactive":60},{"active":0,"inactive":60},{"active":0,"inactive":60},{"active":0,"inactive":60}],"begin":1407358800},"08\/08\/2014":{"active":4.9997222222222,"inactive":2.3736111111111,"detail":{"active":[[0.71722222222222,0.73083333333333],[11.266388888889,11.2925],[11.418333333333,11.952777777778],[12.513611111111,12.720555555556],[12.805555555556,13.0025],[13.216944444444,13.823055555556],[13.946944444444,15.769166666667],[16.218888888889,17.551944444444],[17.646944444444,17.907222222222]],"inactive":[[0,0.71722222222222],[0.73083333333333,0.73111111111111],[11.265277777778,11.266388888889],[11.2925,11.418333333333],[11.952777777778,12.513611111111],[12.720555555556,12.805555555556],[13.0025,13.216944444444],[13.823055555556,13.946944444444],[15.769166666667,16.218888888889],[17.551944444444,17.646944444444],[17.907222222222,17.9075]]},"hours":[{"active":1,"inactive":43},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":34,"inactive":10},{"active":24,"inactive":36},{"active":39,"inactive":21},{"active":60,"inactive":0},{"active":46,"inactive":14},{"active":47,"inactive":13},{"active":49,"inactive":5},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0},{"active":0,"inactive":0}],"begin":1407445200}}';
    return jsonStr;
}

function drawColumngraph(){
    $('#js-loader').show();

    var categories = [],
        seriesTotal = [];

        $('#js-detaailGraph').hide();

        try{
            jsonData = JSON.parse(returnJSON());
        }
        catch(err){
            console.log("Error description: " + err.message);
        }
               

        if(!jsonData){
            $('#js-loader').hide();
            $('#js-emptyGraph').css('display','block');
        }else{
            var arrAct = [],
                arrPass = [];
   
            for (var prop in jsonData){   
                arrAct.push( jsonData[prop].active );
                arrPass.push( jsonData[prop].inactive );

                categories.push(prop);
            }

            chartPreiod = $('#js-dayPeriod').highcharts({
                    chart: {
                        renderTo: $('#js-dayPeriod'),
                        type: 'column',
                        spacingTop: 0,
                        events: {
                        load: function(event) {
                            $('#js-loader').hide();
                            },
                        },
                        alignTicks: false,        
                    },
                    title: {
                        style:{
                            display:'none'
                        }

                    },
                    colors: ['#c7c7c7','#1abc9c'],
                    xAxis: {
                        labels: { y: 15},
                        title: {
                            text: 'Date',
                            style: {color:'#aeb2b7'}
                        },
                    },
                    yAxis: {
                        title: {
                            text: 'Activity Hours',
                            style:{
                                color: '#adadb0',
                                fontWeight: 'normal',
                                fontSize: '14px'
                            }
                        },
                        endOnTick: false,
                        min: 0,
                        gridLineColor: '#ecedee',
                        gridLineWidth: "1px",
                        labels: {
                            style: {
                                color: '#dadcde',
                                fontWeight: 'normal'
                            }
                        },
                    },
                    tooltip: {
                        formatter: function() {
                            var minutesInt = Math.floor((this.y.toFixed(2) -  Math.floor(this.y))*60);
                            var hourInt = Math.floor((this.point.stackTotal.toFixed(2) -  Math.floor(this.point.stackTotal))*60);

                            if( minutesInt<10 ){ 
                                minutesInt = "0" + minutesInt;
                            }

                            var txt = "<b>" + this.series.name+"</b>"+ ": " + Math.floor(this.y) +':'+ minutesInt;
                            txt += "<br />" + "Total: " + Math.floor(this.point.stackTotal) + ':'+ hourInt;
                            return txt;
                        }
                    },
                    credits: { enabled: false},
                    series: [{name:'Inactive', data: arrPass},{name:'Active', data: arrAct}],
                    legend: {
                        layout: 'vertical',
                        align: 'center',
                        verticalAlign: 'top',
                        floating: true,
                        backgroundColor: '#FFFFFF',
                        labelFormatter: function() {
                            var txt = this.name;
                            if( this.name == 'Active'){
                                txt = 'User moves mouse or types on keyboard';
                            }else{
                                txt = 'No user activity but computer still on';
                            }
                            return txt;
                        }
                    },
                    plotOptions: {
                        column: {
                            stacking: 'normal',
                        },
                        series: {
                            cursor: 'pointer',
                            point: {
                                events: {
                                    click: function(){
                                           $('#js-detaailGraph').show();
                                           drawColumngraphMinutes(this.category, jsonData[this.category].hours);
                                           drawStackedgraph(this.category, jsonData[this.category].detail, jsonData[this.category].hours); 
                                    }
                                }
                            }
                        }
                    },
                })
                .highcharts(); // return chart
            
            chartPreiod.xAxis[0].setCategories(categories);
            //chart1.redraw();
    }
}

function drawStackedgraph(_title,_jsonData,_HoursData){
    $('#js-loader').show();
    var categories = [],
        seriesTotal = [];

    for (var prop in _jsonData){   
            seriesTotal.push(_jsonData[prop]);
        }


    chartDayHours = $('#js-dayAnalHours').highcharts({
        chart: {
            type: 'columnrange',
            inverted: true,
            events: {
                load: function(event) {
                    $('#js-loader').hide();
                    },
            }, 
        },
        
        title: {
            text: _title,
            align: 'left',
            style: {color:'#aeb2b7'}
        },
    
        xAxis: {labels:{enabled:false}},
        
        yAxis: {
            title: {
                text: 'Hours',
                style: {color:'#aeb2b7'}
            },
            min: $('#js-rangeStartHours').val(), 
            max: $('#js-rangeEndHours').val(),
            tickInterval:1,
            endOnTick: true,
        },
    
        tooltip: {
            formatter: function() {
                            var txt;
                            var highMin = Math.floor( (this.point.high -  Math.floor(this.point.high))*60 );
                            var lowMin  = Math.floor( (this.point.low.toFixed(2) -  Math.floor(this.point.low) )*60);
                            var tmpStr, tmpStr2;

                            ( highMin < 10 ) ? tmpStr = "0" + highMin : tmpStr = highMin;
                            ( lowMin < 10 ) ?  tmpStr2 = "0" + lowMin : tmpStr2 = lowMin;

                            txt = "<b>"+this.point.series.name+"</b>"+": "+Math.floor(this.point.low)+":"+tmpStr2+"-"+Math.floor(this.point.high)+":"+tmpStr;
                            return txt;
                        }
        },       
        legend: {enabled: false},
        credits: { enabled: false},
        series: [{
                name: 'Inactive',
                color:  '#c7c7c7',
                data: seriesTotal[1]
                },{
                name: 'Active',
                color:  '#1abc9c',
                data: seriesTotal[0] 
            }]          
    });
}

function drawColumngraphMinutes(_title,_jsonData){
    $('#js-loader').show();
    var categories = [],
        seriesTotal = [];

    var arrAct = [],
        arrPass = [];
   
            for (var prop in _jsonData){   
                arrAct.push( _jsonData[prop].active );
                arrPass.push( _jsonData[prop].inactive );

                categories.push(prop);
            }
            chartDayMin = $('#js-dayAnalMin').highcharts({
                    chart: {
                        renderTo: $('#js-dayPeriod'),
                        type: 'column',
                        spacingTop: 0,
                        events: {
                        load: function(event) {
                            $('#js-loader').hide();
                            //resizeMenu();
                            scrollHeight = $('.content-inner').outerHeight();
                            $('html,body').animate({
                                scrollTop: scrollHeight
                            },'slow');
                            },
                        },
                        alignTicks: false,        
                    },
                    title: {
                        text: _title,
                        align: 'left',
                        style: {color:'#aeb2b7'}
                    },
                    colors: ['#c7c7c7','#1abc9c'],
                    xAxis: {
                        labels: { y: 15, x: -15},
                        title: {
                            text: 'Hours',
                            style: {color:'#aeb2b7'}
                        },
                        min: $('#js-rangeStartHours').val(), 
                        max: $('#js-rangeEndHours').val(),
                        tickInterval:1,
                        endOnTick: true,
                    },
                    yAxis: {
                        title: {
                            text: 'Minutes',
                            style:{
                                color: '#adadb0',
                                fontWeight: 'normal',
                                fontSize: '14px'
                            }
                        },
                        endOnTick: true,
                        min: 0,
                        gridLineColor: '#ecedee',
                        gridLineWidth: "1px",
                        labels: {
                            style: {
                                color: '#dadcde',
                                fontWeight: 'normal'
                            }
                        },
                    },
                    tooltip: {
                        formatter: function() {
                            var txt = "<b>" + this.series.name+"</b>"+ ": " + this.y + " min";
                            txt += "<br />" + "Total: " + this.point.stackTotal + " min";
                            return txt;
                        }
                    },
                    credits: { enabled: false},
                    series: [{name:'Inactive', data: arrPass},{name:'Active', data: arrAct}],
                    legend: {enabled: false},
                    plotOptions: {
                        column: {
                            stacking: 'normal',
                        },
                        series: {
                            cursor: 'pointer',
                            point: {
                                events: {
                                   /* click: function(){
                                           $('#js-detaailGraph').show();
                                           drawStackedgraph(this.category, jsonData[this.category].detail, jsonData[this.category].hours); 
                                    }*/
                                }
                            }
                        }
                    },
                })
                .highcharts(); // return chart
            
            chartDayMin.xAxis[0].setCategories(categories);
            //chart1.redraw();
    }

function resizeMenu(){
    var body = document.body,
        html = document.documentElement;
        var height = Math.max( body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight);
        $('#content-left').css('height',height-100);
}