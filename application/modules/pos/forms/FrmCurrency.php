<?php 
Class customer_Form_FrmCurrency extends Zend_Form {
	protected $tr;
	public function init()
	{
		$this->tr = Application_Form_FrmLanguages::getCurrentlanguage();
	}
	public function FrmCurrency($data=null){
		$currency_code = new Zend_Form_Element_Text('currency_code');
		$currency_code->setAttribs(array(
				'class'=>'form-control',
		));
		$currency_text = new Zend_Form_Element_Text('currency_text');
		$currency_text->setAttribs(array(
				'class'=>'form-control',
		));
		$currency_sy= new Zend_Form_Element_Text('currency_sy');
		$currency_sy->setAttribs(array(
				'class'=>'form-control',
		));
		$decimal = new Zend_Form_Element_Text('decimal ');
		$decimal ->setAttribs(array(
			    'class'=>'form-control'
		));
		$exchange = new Zend_Form_Element_Text('exchange');
		$exchange->setAttribs(array(
				'class'=>'form-control'
		));
		
		$combo = new Zend_Form_Element_Checkbox('combo');
		$combo->setAttribs(array(
				'class'=>'red',
		));
		$active = new Zend_Form_Element_Checkbox('active');
		$active->setAttribs(array(
				'class'=>'yellow',
		));
	
		$photo = new Zend_Form_Element_File('photo');
		$background = new Zend_Form_Element_Text('background');
		$background->setAttribs(array(
				'class'=>'form-control color-picker-rgba'
		));
		
		$phone_2 = new Zend_Form_Element_Text('$phone_2');
		$phone_2 ->setAttribs(array(
				'class'=>'form-control'
		));
		
		$currency = new Zend_Form_Element_Checkbox('currency');
		$currency->setAttribs(array(
				'class'=>'red',
		));
		$base = new Zend_Form_Element_Checkbox('base');
		$base ->setAttribs(array(
				'class'=>'red',
		));
		$format = new Zend_Form_Element_Text('demo4');
		$format->setAttribs(array(
				'class'=>'form-control','id'=>"demo4",'value'=>12,'placeholder'=>'12'
		));
		$setting = new Zend_Form_Element_Select('setting');
		$setting->setAttribs(array(
				'class'=>'form-control'
		));
		$setting_opt = array( ""=>$this->tr->translate("SELECT_SETTING"));		
		$setting->setMultiOptions($setting_opt);
		
		$arrange = new Zend_Form_Element_Text('arrange');
		$arrange->setAttribs(array(
				'class'=>'form-control'
		));		
		$resize = new Zend_Form_Element_Text('resize');
		$resize->setAttribs(array(
				'class'=>'form-control','id'=>"resize",'value'=>12,'placeholder'=>'12'
		));
		$note = new Zend_Form_Element_Textarea('note');
		$note->setAttribs(array(
				'class'=>'form-control','style'=>"margin-top: 0px; margin-bottom: 0px; height: 100px;"
		));
		$this->addElements(array($currency_code,$currency_text,$currency_sy,$decimal,$exchange,$currency,$base,$format,$setting,$arrange,$resize,$note));
		return $this;
		
	}	
}