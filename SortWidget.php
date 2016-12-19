<?php
namespace pceuropa\sort;

use Yii;

class SortWidget extends \yii\base\Widget{

public $side;

public function init(){
		parent::init();
		if ($this->side === null) {
			$this->side = 'right';
		}
	}
	
	
public function run(){
		return $this->sort();
	}
	
public function sort(){
	
	
	return $this->render('sort');
	
}
	

	
}
