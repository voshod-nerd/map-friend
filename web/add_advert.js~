

 function createPlacemark(coords) {
        return new ymaps.Placemark(coords);
    }

function get_coordinates(tag){
 var t =town + $(tag).val();
 var myGeocoder = ymaps.geocode(t,{results:1});
 myGeocoder.then( function (res) {
	var coords = res.geoObjects.get(0).geometry.getCoordinates();
        if (myPlacemark) {
            myPlacemark.geometry.setCoordinates(coords);
        }
        else {
            myPlacemark = res.geoObjects.get(0);
            moscow_map.geoObjects.add(myPlacemark);
            myPlacemark.events.add('dragend', function () {
                getAddress(myPlacemark.geometry.getCoordinates());
            });
		} 
 });
 }


    function getAddress(coords) {
        ymaps.geocode(coords).then(function (res) {
            var firstGeoObject = res.geoObjects.get(0);
            $("#adress").val(firstGeoObject.properties.get('name'));
        });
    }


function getMetro(object){
var metro = new YMaps.Metro.Closest(new YMaps.GeoPoint.(object), { results: 1 });
YMaps.Events.observe(metro, metro.Events.Load, function () {
    if (this.length()) {
        var metro = this.get(0);
	return metro.properties.get('name');
    } else {
        alert("Ничего не найдено")
    }
});
YMaps.Events.observe(metro, metro.Events.Fault, function (metro, errorMessage) {
    alert("Произошла ошибка: " + errorMessage)
}); 
}
