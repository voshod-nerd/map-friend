var moscow_map,map2;
$( document ).ready(function() {

  
        
        
    ymaps.ready(function(){
        moscow_map = new ymaps.Map("map-karta", {
            center: [55.76, 37.64],
            zoom: 11
        });
      moscow_map.geoObjects.add(new ymaps.Placemark([55.833436, 37.715175], {
            balloonContent: '<strong>серобуромалиновый</strong> цвет'
        }, {
            preset: 'islands#dotIcon',
            iconColor: '#735184'
        }));
        
        map2 = new ymaps.Map("yandex_map", {
            center: [55.76, 37.64],
            zoom: 11
        });
      
        
    });


$( "#slider-find" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 75, 300 ],
      slide: function( event, ui ) {
        $( "#find-price" ).text(  ui.values[ 0 ] + " - " + ui.values[ 1 ] );
      }
    });


$(function() {
    $( "#slider-box" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 75, 300 ],
      slide: function( event, ui ) {
        $( "#amount" ).text(  ui.values[ 0 ] + " - " + ui.values[ 1 ] );
      }
    });
  });
  
   $(function() {
    $( "#slider-range-min" ).slider({
      range: "min",
      value: 0,
      min: 0,
      max: 1000,
      slide: function( event, ui ) {
        $( "#radius" ).text( ui.value +"м" );
      }
    });
 });
});

 function get_coordinates(){
 var t =$("#adres").val();
 var objects = ymaps.geoQuery(ymaps.geocode(t)).addToMap(moscow_map);

 }
 
 function choice_frame(frame_id){
	var qw = $(".frame");
	qw.hide();
	 $(frame_id).show();
	
	  
 }

