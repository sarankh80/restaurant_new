<?php
class inventory_ItemSupplierController extends Zend_Controller_Action {
	const REDIRECT_URL = '/group/index';
	public function init()
	{
		header('content-type: text/html; charset=utf8');
		defined('BASE_URL')	|| define('BASE_URL', Zend_Controller_Front::getInstance()->getBaseUrl());
	}
	public function indexAction(){
		$frm = new inventory_Form_FrmItemSupplier();
		$this->view->form = $frm->FrmItem();
	}
	
	
}

