<?php 
	use yii\helpers\html;

?>
<?php

    echo('hello');

	$this->registerCss("
		#baners_scrolls ul { margin: 0; padding: 0; list-style-type: none; }
		#baners_scrolls ul li{ padding: 5px; border:solid 1px #ccc; cursor:grab;}
		#baners_scrolls ul li:hover{ border:solid 1px #5CB85C;}
	
		#baners_scrolls ul li img{ max-height:75px; }
	
		#baners_scrolls .big{
			font-size:200%;
			color:#eee;
			margin-top:25px;
		}
		#baners_scrolls .edit-icon a span { margin-top:15px}
		#baners_scrolls .edit-icon a span.glyphicon-trash { color: #D75555}
	
	}"); 
	$this->registerJsFile('/panelx/js/Sortable.min.js', ['position' => 3, 'depends' => 'yii\web\YiiAsset']);
	$this->registerJsFile('/panelx/js/yii2-upload/index.js', ['position' => 3, 'depends' => 'yii\web\YiiAsset']);
?>
