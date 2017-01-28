<?php
# @Copyright 2017 Rafal Marguzewicz pceuropa.net

namespace pceuropa\sort;

use Yii;
class SortWidget extends \yii\base\Widget{

	public $config = [];
	public $image_url = '';
	public $controller = 'document.URL';
	public $data;

	public function init(){
			parent::init();
			
			if ($this->image_url === null){
				$this->image_url = '/images/';
			}
			
			if ($this->data === null){
				$this->data = [
					['id' => 1, 'image_name' => 'no data'],
					['id' => 2, 'image_name' => 'default data']
				];
			}
			
			if ($this->controller === null && $this->controller === ''){
				$this->controller = 'document.URL';
			}
			$this->config = [
				'image_url' => $this->image_url,
				'controller' => $this->controller,
			];
		}
	
	public function run(){
			return $this->renderWidget();
		}
	
	public function renderWidget(){
		return $this->render('sort' , ['items' => $this->data, 'config' => $this->config]);
	
	}
	
}
