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
   <?= Html::jsFile('@web/js/src/bootstrap/js/transition.js') ?>
    <?= Html::jsFile('@web/js/src/bootstrap/js/alert.js') ?>
    <?= Html::jsFile('@web/js/src/bootstrap/js/modal.js') ?>
	<?= Html::jsFile('@web/js/src/bootstrap/js/dropdown.js') ?>
    <?= Html::jsFile('@web/js/src/bootstrap/js/scrollspy.js') ?>
	<?= Html::jsFile('@web/js/src/bootstrap/js/tab.js') ?>
    <?= Html::jsFile('@web/js/src/bootstrap/js/tooltip.js') ?>
    <?= Html::jsFile('@web/js/src/bootstrap/js/popover.js') ?>
   <?= Html::jsFile('@web/js/src/bootstrap/js/button.js') ?>
   <?= Html::jsFile('@web/js/src/bootstrap/js/collapse.js') ?>
    <?= Html::jsFile('@web/js/src/bootstrap/js/carousel.js') ?>
     <?= Html::jsFile('@web/js/jquery/jquery-ui.js') ?>
    <?= Html::jsFile('@web/js/src/script.js') ?>
  
    
    <!-- Le styles -->
    <?= Html::cssFile('@web/css/src/style.css') ?>
    <?= Html::cssFile('@web/css/src/bootstrap/css/bootstrap.css') ?>
    <?= Html::cssFile('@web/css/src/bootstrap/css/bootstrap-theme.css') ?>
    <?= Html::cssFile('@web/css/jquery/jquery-ui.css') ?>
    <?= Html::cssFile('@web/css/jquery/jquery-ui.theme.css') ?>
	

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
                    <li><a href="#">поиск по карте</a></li>
                    <li><a href="#">поиск по списку</a></li>
                  </ul>
                </li>           
            <li><a href="#">подать объявление</a></li>
            <li><a href="#">настройки</a></li>
            <form class="navbar-form navbar-right" role="form">
            
            <button type="submit" class="btn  btn-success " id="sigin">Sign in</button>
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

