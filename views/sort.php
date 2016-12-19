<?php 
pceuropa\sort\SortAsset::register($this);
use yii\helpers\Html;
use yii\helpers\Url;

$return = '';
$el = '';

foreach ($list as $item){

	if ($item['image'] != null){
		$el = Html::img( $config['image_url']  .$item['image'], ['class' => 'img-responsive', 'alt' => $item['name']]);
	} else {
		$el = Html::a ( $item['name'], $item['url'] );
	}
			
$row = 	'<div class="row">
			<div class="col-md-9">'.$el.'</div>
			<div class="col-md-1 edit-icon">'
				.Html::a('<span class="glyphicon glyphicon-pencil"></span>', Url::to(['update', 'id' => $item['id']])).'<br/>'
				.Html::a('<span class="glyphicon glyphicon-trash"></span>', Url::to(['delete', 'id' => $item['id']]), [ 'data-confirm' => Yii::t('app', 'Are you sure you want to delete this item?'), 'data-method'=> 'post']).'
			</div>
		<div class="col-md-1">
				<span class="glyphicon glyphicon-resize-vertical big" aria-hidden="true"></span>
			</div>
		</div>';		
			
	$return .= Html::tag('li', $row, ['id' => $item['id']]);
		
}; //end foreach

echo "<div id='baners_scrolls'><ul id='lista'>".$return."</ul></div>";
	

$this->registerCss("
	#baners_scrolls ul { margin: 0; padding: 0; list-style-type: none; }
	#baners_scrolls ul li{ padding: 5px; border:solid 1px #ccc; cursor:grab;}
	#baners_scrolls ul li:hover { border:solid 1px #5CB85C;}

	#baners_scrolls ul li img{ max-height:75px; }

	#baners_scrolls .big {
		font-size:200%;
		color:#eee;
		margin-top:25px;
	}
	#baners_scrolls .edit-icon a span { margin-top:15px}
	#baners_scrolls .edit-icon a span.glyphicon-trash { color: #D75555}

}");
	 
$this->registerJs('var config = {
	group: "nav",
	animation: 0,
	ghostClass: "ghost",
	onUpdate: function () {
		var a = [];
	
		$("#lista li").each(function (){ a.push($(this)[0].id) }) 
	
		$.ajax({
		  url: document.URL,
		  type: "post",
		  dataType:"JSON",
		  data: { serialize: true, array: a },
		  success: function (r) {
					if (r.success === false) {console.log(r.message);}
				},
			error: function (XMLHttpRequest, textStatus, errorThrown) {
				alert(textStatus);
			}
		}); 
	
	
	},
}  
Sortable.create(lista, config);', 3);
?>
