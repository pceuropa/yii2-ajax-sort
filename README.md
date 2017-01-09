# yii2-ajax-sort
Sorting items -> Drag Drop -> AJAX -> Save

## Instalation

```
composer require pceuropa/yii2-ajax-sort dev-master
```

##Configure
```
use pceuropa\sort\SortWidget;

echo SortWidget::widget([
	'image_url' => Url::to('@web/images/'),
	'data' => [
		['id' => 1, 'image_name'  => 'firefox.jpg', 'title' => 'text alternative'],
		['id' => 2, 'image_name'  => 'opera.jpg'],
		['id' => 6, 'title'  => 'text element', 'url' => 'https://'],
	], 
]); 
			
```		
[Yii2 sort list widget Demo and info](http://pceuropa.net/yii2-extensions/yii2-ajax-sort)
