<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Map Frend';
?>

<div class="row frame" id="frame1" style="display: none"   >
<h2 class="row col-lg-offset-3 col-lg-6">Найди соседа</h2>

	
	<div class="col-lg-offset-3 col-lg-6" >
		<div class="form-horizontal frame1-centr row " role="form">
	<p>
		<span>метро</span>
		<div class="btn-group">
			<button type="button" class="btn btn-primary  dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			метро <span class="caret"></span>
			</button>
			<ul class="dropdown-menu" role="menu">
				<li><a href="#">какоето метро</a></li>
				
			</ul>
		</div>
	</p>
	<p >
	<label class="radio-inline"><input type="radio" name="sex" value="men"> мужчины</label>
	<label class="radio-inline"><input  type="radio" name="sex" value="women"> женщины</label>
	</p>
	<p>
	
	<div  id="slider-box"></div>
	<label for="amount">цена:</label>
	<span  type="text" id="amount"  style=" font-weight:bold;"></span>

	</p>
	</div>
		<div class="person row">
			<div class="row">
				<div class=" col-lg-1">
		
					<a href="#"><img src="http://cs616525.vk.me/v616525371/13d8b/dkq5H3_x4ow.jpg" class="img-circle img-box "></a>
				</div>
				<div class="col-lg-2 col-lg-offset-1">
					<div>цена</div>
					<div>ищет</div>
					<div>адрес</div>
				</div>
		
			</div>
	
		<hr>
	
		</div>
	
	</div>
	<div class="col-lg-offset-1 col-lg-1 person">
		<div>
		
		<a href="#"><img src="http://cs616525.vk.me/v616525371/13d8b/dkq5H3_x4ow.jpg" class="img-circle img-box "></a>
	</div>
	<hr>
	<div>
		
		<a href="#"><img src="http://cs616525.vk.me/v616525371/13d8b/dkq5H3_x4ow.jpg" class="img-circle img-box "></a>
	</div>
	<hr>
	<div>
		
		<a href="#"><img src="http://cs616525.vk.me/v616525371/13d8b/dkq5H3_x4ow.jpg" class="img-circle img-box "></a>
	</div>
	</div>

</div>



<div class="row frame" id="frame2" style="display: none"  >
<h2 class="row col-lg-offset-3 col-lg-6">Подай объявление</h2>
	<div class="col-lg-offset-3 col-lg-6 " >
	<div class="person">
	<p>
		<label id="metro"></label>
	</p>
	<p>
	<span>кого вы ищите</span>
	<label class="radio-inline"><input type="radio" name="sex" value="men">мужчину</label>
	<label class="radio-inline"><input  type="radio" name="sex" value="women">женщину</label>
	</p>
	<p>
	
	<div  id="slider-box"></div>
	<p>
	<label class="input-medium" for="amount">цена:</label>
	<input type="text"  size="20">
	</p>
	<br>
	<br>
	<p>
		<label for="amount">адрес</label>
		
		<div class="row">
  <div class="col-xs-4 " >
    <input type="text" class="form-control " id="adress"  input="validate_adress('#adress')" >
  </div>
  <button type="button" class="btn btn-primary  "  id="button_address" >Ввод</button>
  </div>
		
			</p>
	<br>
	</p>
	</div>
	<div class="person" id="map-karta" style="height:500px;"></div>
</div>
</div>
<div  id="frame3" class="frame" >
<h2 class="row col-lg-offset-3 col-lg-6">Найди соседа</h2>
<div class="row">
	<div class="col-lg-offset-1 col-lg-6">
		<div   id="yandex_map">
		</div>
		
	</div>
	<div class="col-lg-3 col-lg-offset-1 right"   >
		<label>метро</label>
	<br>
		<select id="metroList"></select>
	<p>
	<div  id="slider-find"></div>
	<label for="find-price">цена:</label>
	<span  type="text" id="find-price"  style=" font-weight:bold;"></span>
	</p>
	<p>
	<label class="radio-inline"><input type="radio" name="sex" value="men">муж</label>
	<label class="radio-inline"><input  type="radio" name="sex" value="women">жен</label>
	</p>
	<br>
	
	<div id="information">
	</div>
		<div id="other_information" class="form-control ">
		</div>
		<p>
			<label for="radius">радиус поиска:</label>
			<span   id="radius"  style="border:0;  font-weight:bold;"></span>
		</p>
 
		<div id="slider-range-min"></div>
	</div>	
		
</div>
</div>
