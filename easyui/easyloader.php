<?php
Yii::import('ext.easyui.easyui');
class easyloader extends easyui{
	public function init(){
		$this->path();
		$this->_getCoreScript();
	}
	protected function path(){
		$path=dirname(__FILE__).DIRECTORY_SEPARATOR.'assets';
		$this->assets=Yii::app()->getAssetManager()->publish($path);
	}
	private function _getCoreScript(){
		$this->cs = Yii::app()->getClientScript();
		$this->cs->registerCssFile( $this->assets . '/default/easyui.css' );
		$this->cs->registerCssFile( $this->assets . '/icon.css' );
		$this->cs->registerScriptFile( $this->assets . '/easyloader.js');
	}
}
?>