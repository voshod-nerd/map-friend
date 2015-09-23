var moscow_map,map2;
var myPlacemark;
var maxPrice,minPrice;
var town = "Москва ";

$( document ).ready(function() {
    
   ymaps.ready(function(){
	YMaps.load("metro");
        moscow_map = new ymaps.Map("map-karta", {
            center: [55.76, 37.64],
            zoom: 11
        });		
        map2 = new ymaps.Map("yandex_map", {
            center: [55.76, 37.64],
            zoom: 11
        });       

        $("#button_address").on("click",function(){get_coordinates("#adress");});
    moscow_map.events.add('click', function (e) {
        var coords = e.get('coords');
        if (myPlacemark) {
            myPlacemark.geometry.setCoordinates(coords);
        }
        else {
            myPlacemark = createPlacemark(coords);
            moscow_map.geoObjects.add(myPlacemark);
            myPlacemark.events.add('dragend', function () {
                getAddress(myPlacemark.geometry.getCoordinates());
            });
        }
	 getMetro(coords);
        getAddress(coords);
    }); 
	getMetroList();
   });

$("#metroList").selectmenu({
      change: function( event, data ) {
	var myGeocoder = ymaps.geocode(town+data.item.label);
		myGeocoder.then(
    			function (res) {
        			creatCirclemark.cordsCircl = res.geoObjects.get(0).geometry.getCoordinates();
				var radius =  $("#slider-range-min").slider("value");
				ethentCircleLabel(creatCirclemark.cordsCircl,radius); 
    			});
      }
     });
$.ajax({
  url: "index.php?r=site/pricerange",
  success: function(msg){
    var out = JSON.parse(msg);
	minPrice =10000/*out[0].min*/;
	maxPrice =40000/*out[0].max*/;
	$( "#slider-find" ).slider({
      	range: true,
      	min:minPrice,
      	max:maxPrice,
      	values: [ 0, 0],
      slide: function( event, ui ) {
        $( "#find-price" ).text(  ui.values[ 0 ] + " - " + ui.values[ 1 ] );
      }
    });
}
});

$( "#slider-find" ).on( "slidechange", function( event, ui ) {
	var min = $( "#slider-find").slider( "values", 0 );
	var max = $( "#slider-find" ).slider( "values", 1 );
	get_label_for_map(min,max);
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
      max: 5000,
      slide: function( event, ui ) {
        $( "#radius" ).text( ui.value +"м" );
	var radius =  $("#slider-range-min").slider("value");
	setRadiusCircleLabel(radius);
      }
    });
 });
});

 function choice_frame(frame_id){
	var qw = $(".frame");
	qw.hide();
	 $(frame_id).show();  
 }




