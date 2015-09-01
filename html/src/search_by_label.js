function get_label_for_map(){
$.ajax({
  url: "http://10.211.55.10/basic/web/index.php?r=site/label",
  success: function(msg){
    alert( "Прибыли данные: " + msg );
  }
});
}