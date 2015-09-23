<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css','style.css','bootstrap/css/bootstrap.css','bootstrap/css/bootstrap-theme.css','jquery/jquery-ui.css','jquery/jquery-ui.theme.css'
    ];
    public $js = ['bootstrap/js/transition.js','bootstrap/js/alert.js','bootstrap/js/modal.js','bootstrap/js/dropdown.js','bootstrap/js/scrollspy.js','bootstrap/js/tab.js','bootstrap/js/tooltip.js','bootstrap/js/popover.js','bootstrap/js/button.js','bootstrap/js/collapse.js','bootstrap/js/carousel.js','jquery/jquery-ui.js','addAdvert.js','script.js','search_by_label.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
