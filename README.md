# yii2-sort
Sorting Drag Drop AJAX Save

## Instalation

```
composer require pceuropa/yii2-sort
```

##Configure
```
<php

	use pceuropa\sort\SortWidget;
?>
		
			<?= SortWidget::widget([
				'image_url' => '',
				'table' => '',
			]) ?>
			
```		
### Action code
```
public function actionIndex(){
    
	$model = new ModelName;
	$request = Yii::$app->request;
	
	if ($request->isAjax && $request->post('serialize')){
	
		$array = $request->post('array');
		
		foreach ($array as $key => $val){
			$m = $this->findModel($val);
			$m->serialize = $key;
			$m->save();
		}
	return  \yii\helpers\Json::encode(['success' => true,]);
	}
}
```

## Usage
