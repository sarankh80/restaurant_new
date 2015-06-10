<?php 
Class table_Form_FrmTable extends Zend_Dojo_Form {
	protected $tr;
	public function init()
	{
		$this->tr = Application_Form_FrmLanguages::getCurrentlanguage();
	}
	public function FrmTable($data=null){
		$name = new Zend_Form_Element_Text('name');
		$name->setAttribs(array(
				'checked'=>'checked','class'=>'form-control'
		));
		$password = new Zend_Form_Element_Text('password');
		$password->setAttribs(array(
				'checked'=>'checked','class'=>'form-control'
		));
		$lang_1 = new Zend_Form_Element_Text('lang_1');
		$lang_1->setAttribs(array(
				'checked'=>'checked','class'=>'form-control'
		));
		$lang_2 = new Zend_Form_Element_Text('lang_2');
		$lang_2->setAttribs(array(
				'checked'=>'checked','class'=>'form-control'
		));
		$lang_3 = new Zend_Form_Element_Text('lang_3');
		$lang_3->setAttribs(array(
				'checked'=>'checked','class'=>'form-control'
		));
		if($data!=null){
// 			print_r($data);
		}
		$show_description = new Zend_Form_Element_Select('show_description');
		$show_description->setAttribs(array(
				'checked'=>'checked','class'=>'form-control'
		));
		$description_opt = array(
				1=>$this->tr->translate("ACTIVE"),
				0=>$this->tr->translate("DACTIVE"));
		$show_description->setMultiOptions($description_opt);
		$this->addElements(array($name,$password,$lang_1,$lang_2,$lang_3,$show_description));
		return $this;
		
	}	
}