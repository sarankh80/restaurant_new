<?php
class Table_timechargeController extends Zend_Controller_Action {
	const REDIRECT_URL = '/group/index';
	public function init()
	{
		header('content-type: text/html; charset=utf8');
		defined('BASE_URL')	|| define('BASE_URL', Zend_Controller_Front::getInstance()->getBaseUrl());
	}
	public function indexAction(){
		$frm = new table_Form_FrmTableTimecharge();
		$this->view->form = $frm->frm_table_time_charge();
	}
	
	
}

