<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * clients_category_id_option_list Model Action
     * @return array
     */
	function clients_category_id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT DISTINCT id AS value , title AS label FROM categories ORDER BY label ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * users_name_value_exist Model Action
     * @return array
     */
	function users_name_value_exist($val){
		$db = $this->GetModel();
		$db->where("name", $val);
		$exist = $db->has("users");
		return $exist;
	}

	/**
     * users_email_value_exist Model Action
     * @return array
     */
	function users_email_value_exist($val){
		$db = $this->GetModel();
		$db->where("email", $val);
		$exist = $db->has("users");
		return $exist;
	}

}
