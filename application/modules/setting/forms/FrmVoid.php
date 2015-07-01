<?php 
Class setting_Form_FrmVoid extends Zend_Form {
	protected $tr;
	public function init()
	{
		$this->tr = Application_Form_FrmLanguages::getCurrentlanguage();
	}
	public function FrmVoid($data=null){
		$date = new Zend_Form_Element_Text('$date');
		$date->setAttribs(array(
				'class'=>'form-control',
		));
		
		$type = new Zend_Form_Element_Select('type');
		$type->setAttribs(array(
				'class'=>'form-control',
		));
		
		$this->addElements(array($date));
				
		return $this;
		
	}	
}