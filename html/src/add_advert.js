
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
 
  // Создание метки
 function createPlacemark(coords) {
        return new ymaps.Placemark(coords);
    }
     
 // Определяем адрес по координатам (обратное геокодирование)
    function getAddress(coords) {
        ymaps.geocode(coords).then(function (res) {
            var firstGeoObject = res.geoObjects.get(0);
            $("#adress").val(firstGeoObject.properties.get('name'));
        });
    }