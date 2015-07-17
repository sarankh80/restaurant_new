<?php
class Menu_GroupController extends Zend_Controller_Action {
	const REDIRECT_URL = '/group/index';
	public function init()
	{
		header('content-type: text/html; charset=utf8');
		defined('BASE_URL')	|| define('BASE_URL', Zend_Controller_Front::getInstance()->getBaseUrl());
	}
	public function indexAction(){
		//$this->_helper->layout()->disableLayout();
		$frm = new menu_Form_FrmMenuGroup();
		$this->view->form = $frm->FrmMenu();
	/*	$db = new menu_Model_DbTable_DbMenuGroup();
		$this->view->showtable=$db->getMenuGrop();
		$id = $this->getRequest()->getParam('id');
		if($id==""){
			if($this->getRequest()->isPost()){
				$data = $this->getRequest()->getPost();
				//print_r($data);exit();
				$db->addMuneGroup($data);
				Application_Form_FrmMessage::message("កាលុបប្រភេទអ្នកប្រើប្រាស់បានជោគជ័យ");
				Application_Form_FrmMessage::redirectUrl('/menu/group');
			}
		}elseif ($id !=""){
			print_r($id);
			$show = $db->getMenuGropByid($id);
			$this->view->form = $frm->FrmMenu($show);
		}	*/	
	}
	
	
}

