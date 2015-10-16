var map;
$(function () {

  map = new app.Map( $("#map") );
  map.init();
 

});


$(window).load(function(){
      var data = {"coordinates":{"Mens club":{"lat":"40.637514","lng":"-74.136971","allowed":false,"radius":"150","id":"25"},"Pocker club":{"lat":"40.633064","lng":"-74.090123","allowed":false,"radius":"150","id":"27"},"Tom's house":{"lat":"40.629330","lng":"-74.110560","allowed":true,"radius":"500","id":"22"},"Work":{"lat":"40.635778","lng":"-74.105410","allowed":true,"radius":"238","id":"23"}},"centerCoordinates":{"lat":"40.637514","lng":"-74.136971"}}

      map.drawItems(data.coordinates,1);
});