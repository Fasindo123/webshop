<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * items_category_id_option_list Model Action
     * @return array
     */
	function items_category_id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT DISTINCT id AS value , id AS label FROM categories ORDER BY label ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * users_username_value_exist Model Action
     * @return array
     */
	function users_username_value_exist($val){
		$db = $this->GetModel();
		$db->where("username", $val);
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

	/**
     * favorites_user_id_option_list Model Action
     * @return array
     */
	function favorites_user_id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT DISTINCT id AS value , name AS label FROM users ORDER BY label ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * favorites_item_id_option_list Model Action
     * @return array
     */
	function favorites_item_id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT DISTINCT id AS value , name AS label FROM items ORDER BY label ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * in_cart_items_user_id_option_list Model Action
     * @return array
     */
	function in_cart_items_user_id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT DISTINCT id AS value , name AS label FROM users ORDER BY label ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * in_cart_items_item_id_option_list Model Action
     * @return array
     */
	function in_cart_items_item_id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT DISTINCT id AS value , name AS label FROM items ORDER BY label ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

}
