<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css',
        'css/site.css',
        'https://cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css',
        'https://cdn.bootcss.com/admin-lte/2.3.3/css/AdminLTE.min.css',
        'https://cdn.bootcss.com/admin-lte/2.3.3/css/skins/_all-skins.min.css',
    ];
    public $js = [
        'https://cdn.bootcss.com/jquery/2.2.4/jquery.min.js',
        'https://cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js',
        'https://cdn.bootcss.com/admin-lte/2.3.3/js/app.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
