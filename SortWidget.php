<?php
namespace pceuropa\sort;

use Yii;

class SortWidget extends \yii\base\Widget{

public $model;
public $image_url;
public $table;

public function init(){
		parent::init();
		if ($this->image_url === null){
			$this->image_url = '/images/';
		}
	}
	
	
public function run(){
		return $this->sort();
	}
	
public function sort(){
	
	return $this->render('sort' , ['list' => self::findAllAsArray(), 'config' => ['image_url' => $this->image_url]]);
	
}
	
public function findAllAsArray(){
		
    	$array =  Yii::$app->db->createCommand('SELECT * FROM banners_footer ORDER BY `serialize` ASC')
           ->bindValue(':table', 'banners_footer')
           ->queryAll();
    	return $array;
    }
    

	
}
