<?php

class Application_Form_FrmPopupGlobal extends Zend_Dojo_Form
{
	public function init()
	{
		
	}
// 	public function getArrCsType(){
// 		$arr_type = array(
// 				"fi_cs_type" => "CS-TYPE",
// 				"fi_cs_zone" => "CS-ZONE",
// 				"fi_cs_items" => "CS-ITEMS",
// 				"fi_cs_subject" => "CS-SUBJECT",
// 				"fi_cs_living_situation" => "CS-LIVING",
// 				"fi_cs_ass_provided" => "CS-ASS-PROVIDED",
// 				"fi_cs_ass_requested" => "CS-ASS-REQUESTED",
// 				"fi_cs_current_condition" => "CS-CONDITION",
// 				"fi_cs_referal" => "CS-REFERAL",
// 				"fi_cs_type_caller" => "CS-TYPE-CALLER",
// 				"fi_cs_type_case" => "CS-TYPE-CASE",
// 				"fi_cs_ar_category" => "CS-AR-CATEGORY",
				 
// 				"cs-refresh" => "CS-REFRESH",
// 				"cs-member" => "CS-MEMBER"
// 		);
// 		return $arr_type;
// 	}
// 	public function getForm($action, $method, $url_cancel, $elements, $legend = null, $hidenvalues = null, $type=null, $page=null, $tableadd=null,$id_popup){
// 		$tr = Application_Form_FrmLanguages::getCurrentlanguage();
// 		if($type!=null && $page!=null){
// 			$arr_type = $this->getArrCsType();
// 		}
		 
// 		$script= '<script type="text/javascript">
// 		jQuery(document).ready(function(){
// 		//binds form submission and fields to the validation engine
// 		jQuery("#frm").validationEngine();
// 	});
// 	</script>';
// 		$form="<div class='dijitHidden'>
// 				<div data-dojo-type='dijit.Dialog'  id='".$id_popup."' >";
// 		$form.= "<form  id=\"frm\" method='". $method ."' action='". $action ."' accept-charset=\"utf-8\" enctype=\"multipart/form-data\" style=\"position:relative;\"> ";
		 
// 		$form .= '<div class="btn" align="right">
// 		<button type="submit" class="positive">
// 		<img src="'.BASE_URL.'/images/icon/apply2.png" alt=""/>
// 		Save
// 		</button>
// 		<a href="'. $url_cancel .'" class="negative">
// 		<img src="'.BASE_URL.'/images/icon/cross.png" alt=""/>
// 		Cancel
// 		</a>
// 		</div>
// 		<fieldset>
// 		<legend>'.$tr->translate($legend).'</legend>
// 		<table>';
	
// 		foreach ($elements as $lbl => $element){
// 			$form .= '<tr>
// 			<td class="field">'. $tr->translate($lbl) .'</td>
// 			<td class="add-edit">'. $element .'</td>
// 			</tr>';
// 		}
// 		$form .= '</table>';
// 		if($tableadd!=null){
// 			$form .= $tableadd;
// 		}
// 		$form .= '</fieldset>';
// 		if(!empty($hidenvalues)){
// 			foreach ($hidenvalues as $i =>$h){
// 				$form .= $h;
// 			}
// 		}
		 
// 		$form .= "</form></div></div>";
// 		return $form ;
// 	}
	public function frmPopupClient(){
		$tr = Application_Form_FrmLanguages::getCurrentlanguage();
		$frmco = new Group_Form_FrmClient();
		$frm = $frmco->FrmAddClient();
		Application_Model_Decorator::removeAllDecorator($frm);
		$str='<div class="dijitHidden">
					<div data-dojo-type="dijit.Dialog"  id="frm_client" >
					<form id="form_client" name="form_client" />';
				$str.='<table style="margin: 0 auto; width: 100%;" cellspacing="7">
							<tr>
							       <td>Is Group</td>
									<td>'.$frm->getElement('is_group').'</td>
									<td>Client N</td>
									<td>'.$frm->getElement('client_no').'</td>
								</tr>
								<tr>
									<td>Name Khmer</td>
									<td>'.$frm->getElement('name_kh').'</td>
									<td>Name Eng</td>
									<td>'.$frm->getElement('name_en').'</td>
								</tr>
								<tr>
									<td>Sex</td>
									<td>'.$frm->getElement('sex').'</td>
									<td>Status</td>
									<td>'.$frm->getElement('situ_status').'</td>
								</tr>
								<tr>
									<td>Province</td>
									<td>'.$frm->getElement('province').'</td>
									<td>District</td>
									<td>'.$frm->getElement('district').'</td>
								</tr>
								<tr>
									<td>Commune</td>
									<td>'.$frm->getElement('commune').'</td>
									<td>'.$tr->translate("Village").'</td>
									<td>'.$frm->getElement('village').'</td>
								</tr>
								<tr>
									<td>Street</td>
									<td>'.$frm->getElement('street').'</td>
									<td>'.$tr->translate("House N.").'</td>
									<td>'.$frm->getElement('house').'</td>
									
								</tr>
								<tr>
									<td>ID Type</td>
									<td>'.$frm->getElement('id_type').'</td>
									<td>'.$tr->translate("ID Card").'</td>
									<td>'.$frm->getElement('id_no').'</td>
								</tr>
								<tr>
									<td>'.$tr->translate("Phone").'</td>
									<td>'.$frm->getElement('phone').'</td>
									<td>'.$tr->translate("Spouse Name").'</td>
									<td>'.$frm->getElement('spouse').'</td>
								</tr>
								<tr>
									<td>'.$tr->translate("Status").'</td>
									<td>'.$frm->getElement('status').'</td>
									<td>'.$tr->translate("Note").'</td>
									<td>'.$frm->getElement('desc').'</td>
								</tr>
								<tr>
									<td colspan="4" align="center">
									<input type="button" value="Save" label="Save" dojoType="dijit.form.Button" 
										 iconClass="dijitEditorIcon dijitEditorIconSave" onclick="addNewClient();"/>
									</td>
								</tr>
							</table>';	
							
		$str.='	</form>	</div>
				</div>';
		return $str;
	}
	public function frmPopupCO(){
		$tr = Application_Form_FrmLanguages::getCurrentlanguage();
		$frmclient = new Other_Form_FrmCO();
		$frm = $frmclient->FrmAddCO();
		Application_Model_Decorator::removeAllDecorator($frm);
		$str='<div class="dijitHidden">
				<div data-dojo-type="dijit.Dialog"  id="frm_co" >
					<form id="form_co" name="form_co" >';
			$str.='<table style="margin: 0 auto; width: 100%;" cellspacing="7">
					<tr>
						<td>Name Khmer</td>
						<td>'.$frm->getElement('namsdfse_kh').'</td>
					</tr>
					<tr>
						<td>First Name</td>
						<td>'.$frm->getElement('first_name').'</td>
					</tr>
					<tr>
						<td>Last Name</td>
						<td>'.$frm->getElement('last_name').'</td>
					</tr>
					<tr>
						<td>Sex</td>
						<td>'.$frm->getElement('co_sex').'</td>
					</tr>
					<tr>
						<td>Tel</td>
						<td>'.$frm->getElement('tel').'</td>
					</tr>
					<tr>
						<td>Email</td>
						<td>'.$frm->getElement('email').'</td>
					</tr>
					<tr>
						<td>Address</td>
						<td>'.$frm->getElement('address').'</td>
					</tr>
					<tr>
						<td colspan="4" align="center">
						<input type="button" value="Save" label="Save" dojoType="dijit.form.Button"
						iconClass="dijitEditorIcon dijitEditorIconSave" onclick="AddNewCo();"/>
						</td>
					</tr>						
		       </table>';
		$str.='</form>	</div>
		  </div>';
		return $str;								
	}
	public function frmPopupZone(){
		$tr = Application_Form_FrmLanguages::getCurrentlanguage();
		$frmzone = new Other_Form_FrmZone();
		$frm = $frmzone->FrmAddZone();
		Application_Model_Decorator::removeAllDecorator($frm);
		$str='<div class="dijitHidden">
				<div data-dojo-type="dijit.Dialog"  id="frm_zone" >
					<form id="form_zone" name="form_zone" >';
			$str.='<table style="margin: 0 auto; width: 100%;" cellspacing="7">
					<tr>
						<td>Zone Name</td>
						<td>'.$frm->getElement('zone_name').'</td>
					</tr>
					<tr>
						<td>Zone Number</td>
						<td>'.$frm->getElement('zone_number').'</td>
					</tr>
					<tr>
						<td colspan="4" align="center">
						<input type="button" value="Save" label="Save" dojoType="dijit.form.Button"
						iconClass="dijitEditorIcon dijitEditorIconSave" onclick="addNewZone();"/>
						</td>
					</tr>
				</table>';
		$str.='</form>		</div>
		</div>';
		return $str;
	}
	public function frmPopupDistrict(){
		$tr = Application_Form_FrmLanguages::getCurrentlanguage();
		$frm = new Other_Form_FrmDistrict();
		$frm = $frm->FrmAddDistrict();
		Application_Model_Decorator::removeAllDecorator($frm);
		$str='<div class="dijitHidden">
				<div data-dojo-type="dijit.Dialog"  id="frm_district" >
				<form id="form_district" >';
		$str.='<table style="margin: 0 auto; width: 100%;" cellspacing="7">
					<tr>
						<td>District Name</td>
						<td>'.$frm->getElement('pop_district_name').'</td>
					</tr>
					<tr>
						<td>Province Name</td>
						<td>'.$frm->getElement('province_name').'</td>
					</tr>
					<tr>
						<td colspan="2" align="center">
						<input type="button" value="Save" label="Save" dojoType="dijit.form.Button"
						iconClass="dijitEditorIcon dijitEditorIconSave" onclick="addNewDistrict();"/>
						</td>
				    </tr>
				</table>';
		$str.='</form></div>
		</div>';
		return $str;
	}
	public function frmPopupCommune(){
		$tr = Application_Form_FrmLanguages::getCurrentlanguage();
		$frm = new Other_Form_FrmCommune();
		$frm = $frm->FrmAddCommune();
		Application_Model_Decorator::removeAllDecorator($frm);
		$str='<div class="dijitHidden">
				<div data-dojo-type="dijit.Dialog"  id="frm_commune" >
					<form id="form_commune" >';
			$str.='<table style="margin: 0 auto; width: 100%;" cellspacing="7">
					<tr>
						<td>Commune Name</td>
						<td>'.$frm->getElement('commune_name').'</td>
					</tr>
					<tr>
						<td>District Name</td>
						<td>'.$frm->getElement('district_name').'</td>
					</tr>
					<tr>
						<td colspan="2" align="center">
						<input type="button" value="Save" label="Save" dojoType="dijit.form.Button"
						iconClass="dijitEditorIcon dijitEditorIconSave" onclick="addNewCommune();"/>
						</td>
					</tr>
				</table>';
		$str.='</form></div>
			</div>';
		return $str;
	}
	public function frmPopupVillage(){
		$tr = Application_Form_FrmLanguages::getCurrentlanguage();
		$frm = new Other_Form_FrmVillage();
		$frm = $frm->FrmAddVillage();
		Application_Model_Decorator::removeAllDecorator($frm);
		$str='<div class="dijitHidden">
				<div data-dojo-type="dijit.Dialog"  id="frm_village" >
					<form id="form_village" dojoType="dijit.form.Form" method="post" enctype="application/x-www-form-urlencoded">
		 <script type="dojo/method" event="onSubmit">			
			if(this.validate()) {
				return true;
			} else {
				return false;
			}
        </script>
		';
		$str.='<table style="margin: 0 auto; width: 95%;" cellspacing="10">
					    <tr>
							<td>'.$tr->translate("VILLAGE_KH").'</td>
							<td>'.$frm->getElement('village_namekh').'</td>
						</tr>
						<tr>
							<td>'.$tr->translate("VILLAGE_NAME").'</td>
							<td>'.$frm->getElement('village_name').'</td>
						</tr>
						<tr>
							<td>'. $tr->translate("DISPLAY_BY").'</td>
							<td>'.$frm->getElement('display').'</td>
						</tr>
						<tr>
							<td>'.$tr->translate("PROVINCE_NAME").'</td>
							<td>'. $frm->getElement('province_name').'</td>
						</tr>
						<tr>
							<td>'.$tr->translate("DISTRICT_NAME").'</td>
							<td>'.$frm->getElement('district_name').'
							</td>
						</tr>
						<tr>
							<td>'.$tr->translate("COMMUNE_NAME").'</td>
							<td>'.$frm->getElement('commune_name').'</td>
						</tr>
						<tr>
							<td>'.$tr->translate("STATUS").'</td>
							<td>'.$frm->getElement('statusd').'</td>
						</tr>
						<tr>
							<td colspan="2" align="center">
											<input type="reset" value="សំអាត" label='.$tr->translate('CLEAR').' dojoType="dijit.form.Button" iconClass="dijitIconClear"/>
											<input type="button" value="save_close" name="save_close" label="'. $tr->translate('SAVE').'" dojoType="dijit.form.Button" 
												iconClass="dijitEditorIcon dijitEditorIconSave" Onclick="alert(2);"  />
							</td>
						</tr>
					</table>';
		$str.='</form></div>
		</div>';
		return $str;
	}
}

