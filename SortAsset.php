<?php 
namespace pceuropa\sort;

use yii\web\AssetBundle;

class SortAsset extends AssetBundle{
    public $sourcePath = '@vendor/pceuropa/yii2-sort/assets';
    public $baseUrl = '@web';
    public $js = [
        'js/Sortable.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
