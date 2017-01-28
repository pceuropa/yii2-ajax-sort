<?php 
namespace pceuropa\sort;

class SortAsset extends \yii\web\AssetBundle {
    public $sourcePath = '@vendor/pceuropa/yii2-ajax-sort/assets';
    public $baseUrl = '@web';
    public $js = [
        'js/Sortable.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
