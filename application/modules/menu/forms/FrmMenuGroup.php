<?php 
Class menu_Form_FrmMenuGroup extends Zend_Dojo_Form {
	protected $tr;
	public function init()
	{
		$this->tr = Application_Form_FrmLanguages::getCurrentlanguage();
	}
	public function FrmMenu($data=null){
		$menu_code = new Zend_Form_Element_Text('menu_code');
		$menu_code->setAttribs(array(
				'class'=>'form-control',
		));
		$description = new Zend_Form_Element_Text('description');
		$description->setAttribs(array(
				'class'=>'form-control',
		));
		$lang_1 = new Zend_Form_Element_Text('lang_1');
		$lang_1->setAttribs(array(
				'class'=>'form-control',
		));
		$lang_2 = new Zend_Dojo_Form_Element_TextBox('lang_2');
		$lang_2->setAttribs(array(
				'dojoType'=>'dijit.form.CheckBox',
				'checked'=>'checked','class'=>'form-control'
		));
		$lang_3 = new Zend_Dojo_Form_Element_TextBox('lang_3');
		$lang_3->setAttribs(array(
				'dojoType'=>'dijit.form.CheckBox',
				'checked'=>'checked','class'=>'form-control'
		));
		if($data!=null){
// 			print_r($data);
		}
		$show_description = new Zend_Dojo_Form_Element_FilteringSelect('show_description');
		$show_description->setAttribs(array(
				'dojoType'=>'dijit.form.CheckBox',
				'class'=>'form-control'
		));
		$description_opt = array( ""=>$this->tr->translate("SELECT_DESCRIPTION"));
		$show_description->setMultiOptions($description_opt);
		$photo = new Zend_Form_Element_File('photo');
		$background = new Zend_Form_Element_Text('background');
		$background->setAttribs(array(
				'class'=>'form-control color-picker-rgba'
		));
		$font_color = new Zend_Form_Element_Text('font_color');
		$font_color->setAttribs(array(
				'class'=>'form-control','id'=>"selected-color1"
		));
		$font_size = new Zend_Form_Element_Text('demo4');
		$font_size->setAttribs(array(
				'class'=>'form-control','id'=>"demo4",'value'=>12
		));
		
		$this->addElements(array($menu_code,$description,$lang_1,$lang_2,$lang_3,$show_description,$background,$font_color,$font_size));
		return $this;
		
	}	
}