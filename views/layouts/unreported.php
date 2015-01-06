<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
     <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

 
  <?= Html::jsFile('@web/bootstrap/js/transition.js') ?>
    <?= Html::jsFile('@web/bootstrap/js/alert.js') ?>
    <?= Html::jsFile('@web/bootstrap/js/modal.js') ?>
	<?= Html::jsFile('@web/bootstrap/js/dropdown.js') ?>
    <?= Html::jsFile('@web/bootstrap/js/scrollspy.js') ?>
	<?= Html::jsFile('@web/bootstrap/js/tab.js') ?>
    <?= Html::jsFile('@web/bootstrap/js/tooltip.js') ?>
    <?= Html::jsFile('@web/bootstrap/js/popover.js') ?>
   <?= Html::jsFile('@web/bootstrap/js/button.js') ?>
   <?= Html::jsFile('@web/bootstrap/js/collapse.js') ?>
    <?= Html::jsFile('@web/bootstrap/js/carousel.js') ?>
     <?= Html::jsFile('@web/jquery/jquery-ui.js') ?>
    <?= Html::jsFile('@web/script.js') ?>
  
    
 
    <?= Html::cssFile('@web/style.css') ?>
    <?= Html::cssFile('@web/bootstrap/css/bootstrap.css') ?>
    <?= Html::cssFile('@web/bootstrap/css/bootstrap-theme.css') ?>
    <?= Html::cssFile('@web/jquery/jquery-ui.css') ?>
    <?= Html::cssFile('@web/jquery/jquery-ui.theme.css') ?>
	
  
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
   <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Map Frends</a>
        </div>
        
        <div class="navbar-collapse collapse">
        
          <ul class="nav navbar-nav navbar-right">
          
          
          
         <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="dropdownMenu1">поиск по <b class="caret"></b></a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" role="menu">
                    <li><a href="#" onclick="choice_frame('#frame3')">поиск по карте</a></li>
                    <li><a href="#" onclick="choice_frame('#frame1')">поиск по списку</a></li>
                  </ul>
                </li>           
            <li><a href="#" onclick="choice_frame('#frame2')">подать объявление</a></li>
            
            <form class="navbar-form navbar-right" role="form">
            
            <div class="btn-group">
				<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
    Вход <span class="caret"></span>
				</button>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Вконтакте</a></li>
						<li><a href="#">Facebook</a></li>
						
					</ul>
			</div>
            
          </form>
          </ul>
          
        </div>
      </div>
    </div>
   

            <?= $content ?>
      

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

