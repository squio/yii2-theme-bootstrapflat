<?php
/*
 * 2016-03-08
 * @author Squio <info@squio.nl>
 * https://bootflat.github.io/
 */
namespace squio\theme\bootstrapflat;

use yii\web\AssetBundle;
class BootstrapflatAsset extends AssetBundle
{
    public $sourcePath='@vendor/squio/yii2-theme-bootstrapflat/assets';
    public $baseUrl = '@web';
    
    public $css=[
        'css/bootstrap-flat.min.css',
        'css/bootstrap-flat-extras.min.css',
    ];
        
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
    
    public function init() {
        parent::init();
    }
}
