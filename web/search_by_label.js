
var myCircle;
function getAnatation(option){
var obj = option ;
var fun = function (){
	var tag = '<div><div class="col-lg-4"><label>цена:'+obj.price+'</label><label>ищет:'+obj.information+'</label><label><a href = "'+obj.page+'" target="_blank">профиль</a></label></div><div class="col-lg-1 col-lg-offset-4"><img src="'+obj.foto+'" class="img-rounded img-box "></div></div>';
	$("#information").html(tag);
	}
return fun; 
}

function anatation(option){
var tag = '<div><div class="col-lg-4"><label>цена:'+option.price+'</label><label>ищет:'+option.information+'</label><label><a href = "'+option.page+'" target="_blank">профиль</a></label></div><div class="col-lg-1 col-lg-offset-4"><img src="'+option.foto+'" class="img-rounded img-box "></div></div>';
$("#information").html(tag);
}

function getFunc(option){
var street = option.street;
var func =  function(){
var tag =  $('<div/>');
var a = $('<a/>',{text:street}).click(function(){anatation(option);});
$(tag).append(a);
$("#other_information").append(tag);
	}
return func;
}


/*Создает метку круга.*/
function creatCirclemark(cords,rad){

	myCircle = new ymaps.GeoObject({
    	geometry: {
        	type: "Circle",
        	coordinates: cords,
        	radius: rad
    		}},
		{
		draggable:true
		}
	);
	 myCircle.f = function () {
	var objects = ymaps.geoQuery(map2.geoObjects);
        // Объекты, попадающие в круг,станут видны.
        var objectsInsideCircle = objects.searchInside(myCircle);
	$("#other_information").html("");
	objectsInsideCircle.setOptions('visible', true);
	for(var i = 0 ; i < objectsInsideCircle.getLength(); i++){
		var obj = objectsInsideCircle.get(i);
	obj.annotationOn();
	}
	objectsInsideCircle = objectsInsideCircle.remove(myCircle);
        objects.remove(objectsInsideCircle).remove(myCircle).setOptions('visible', false);
    }
	myCircle.events.add('drag', function () {
   		myCircle.f();
    });
return myCircle;
}


/*Запрос списка метро для города.
*/

function getMetroList(){
$.ajax({
  url: "index.php?r=site/metro&sity="+town,
  success: function(msg){
    var out = JSON.parse(msg);
    var options=$("#metroList").prop('options');
	for(var i=0; i<out.length;i++){
			options[options.length]=new Option(out[i].metro,out[i].metro);	
	}
}
});
}
/*
 Помещает метки из базы на карту. Данные приходят в JSON.
*/

function get_label_for_map(min,max){
	$.ajax({
 	 	url: "index.php?r=site/label&minPrice="+min+"&maxPrice="+max,
  		success: function(msg){
		for(i in get_label_for_map.labelInMap){
			var obj = get_label_for_map.labelInMap[i];
			map2.geoObjects.remove(get_label_for_map.labelInMap[i]);		
		}
		get_label_for_map.labelInMap={};
   		var out = JSON.parse(msg);
		for(var i=0; i<out.length;i++){
 			myGeoObject = new ymaps.Placemark([out[i].coordinate_x, out[i].coordinate_y],{	hintContent: out[i].street });
			myGeoObject.option =out[i];
			myGeoObject.events.add('click', getAnatation(out[i]));
 			myGeoObject.annotationOn = getFunc(out[i]);
			get_label_for_map.labelInMap[out[i].id]=myGeoObject;
			myGeoObject.options.set('visible', false);
			map2.geoObjects.add(myGeoObject); 
		}
  	}
});
}

function ethentCircleLabel(cords,radius){
	if(myCircle){
		myCircle.geometry.setCoordinates(cords);
		myCircle.geometry.setRadius(radius);
		myCircle.f();
	} else {
		map2.geoObjects.add(creatCirclemark(cords,radius));
		myCircle.f();
	}
}

function setRadiusCircleLabel(radius){
	if(myCircle){
		myCircle.geometry.setRadius(radius);
		myCircle.f();
	}
}


