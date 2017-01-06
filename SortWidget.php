<?php
namespace pceuropa\sort;

use Yii;
class SortWidget extends \yii\base\Widget{

	public $config;
	public $image_url;
	public $data;
	public $table;

	public function init(){
			parent::init();
			
			if ($this->image_url === null){
				$this->image_url = '/images/';
			}
			
			if ($this->data === null){
				$this->data = [
					['id' => 1, 'name' => 'no data', 'url' => '', 'image' => ''],
					['id' => 2, 'name' => 'default data', 'url' => '', 'image' => '']
				];
			}
			
			$this->config = [
				'image_url' => $this->image_url
			];
		}
	
	public function run(){
			return $this->renderWidget();
		}
	
	public function renderWidget(){
		return $this->render('sort' , ['list' => $this->data, 'config' => $this->config]);
	
	}
	
}
