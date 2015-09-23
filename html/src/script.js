var moscow_map,map2;
var myPlacemark;
var town = "Москва ";

$( document ).ready(function() {
    ymaps.ready(function(){
        moscow_map = new ymaps.Map("map-karta", {
            center: [55.76, 37.64],
            zoom: 11
        });
		
        map2 = new ymaps.Map("yandex_map", {
            center: [55.76, 37.64],
            zoom: 11
        });       
        $("#button_address").on("click",function(){get_coordinates("#adress")});

        // Слушаем клик на карте
    moscow_map.events.add('click', function (e) {
        var coords = e.get('coords');

        // Если метка уже создана – просто передвигаем ее
        if (myPlacemark) {
            myPlacemark.geometry.setCoordinates(coords);
        }
        // Если нет – создаем.
        else {
            myPlacemark = createPlacemark(coords);
            moscow_map.geoObjects.add(myPlacemark);
            // Слушаем событие окончания перетаскивания на метке.
            myPlacemark.events.add('dragend', function () {
                getAddress(myPlacemark.geometry.getCoordinates());
            });
        }
        getAddress(coords);
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



 function choice_frame(frame_id){
	var qw = $(".frame");
	qw.hide();
	 $(frame_id).show();  
 }



