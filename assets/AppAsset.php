<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;


class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "template/plugins/morris/morris.css",
        "template/css/bootstrap.min.css",
        "template/css/core.css",
        "template/css/components.css",
        "template/css/icons.css",
        "template/css/pages.css",
        "template/css/menu.css",
        "template/css/responsive.css",
    ];
    public $js = [
        'template/js/modernizr.min.js',
        'template/js/bootstrap.min.js',
        'template/js/detect.js',
        'template/js/fastclick.js',
        'template/js/jquery.slimscroll.js',
        'template/js/jquery.blockUI.js',
        'template/js/waves.js',
        'template/js/wow.min.js',
        'template/js/jquery.nicescroll.js',
        'template/js/jquery.scrollTo.min.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}