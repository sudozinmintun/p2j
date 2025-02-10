<?php 
/**
 * Personal_access_tokens Page Controller
 * @category  Controller
 */
class Personal_access_tokensController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "personal_access_tokens";
	}
	/**
     * List page records
     * @param $fieldname (filter record by a field) 
     * @param $fieldvalue (filter field value)
     * @return BaseView
     */
	function index($fieldname = null , $fieldvalue = null){
		$request = $this->request;
		$db = $this->GetModel();
		$tablename = $this->tablename;
		$fields = array("id", 
			"tokenable_type", 
			"tokenable_id", 
			"name", 
			"token", 
			"abilities", 
			"last_used_at", 
			"expires_at", 
			"created_at", 
			"updated_at");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				personal_access_tokens.id LIKE ? OR 
				personal_access_tokens.tokenable_type LIKE ? OR 
				personal_access_tokens.tokenable_id LIKE ? OR 
				personal_access_tokens.name LIKE ? OR 
				personal_access_tokens.token LIKE ? OR 
				personal_access_tokens.abilities LIKE ? OR 
				personal_access_tokens.last_used_at LIKE ? OR 
				personal_access_tokens.expires_at LIKE ? OR 
				personal_access_tokens.created_at LIKE ? OR 
				personal_access_tokens.updated_at LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "personal_access_tokens/search.php";
		}
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("personal_access_tokens.id", ORDER_TYPE);
		}
		if($fieldname){
			$db->where($fieldname , $fieldvalue); //filter by a single field name
		}
		$tc = $db->withTotalCount();
		$records = $db->get($tablename, $pagination, $fields);
		$records_count = count($records);
		$total_records = intval($tc->totalCount);
		$page_limit = $pagination[1];
		$total_pages = ceil($total_records / $page_limit);
		$data = new stdClass;
		$data->records = $records;
		$data->record_count = $records_count;
		$data->total_records = $total_records;
		$data->total_page = $total_pages;
		if($db->getLastError()){
			$this->set_page_error();
		}
		$page_title = $this->view->page_title = "Personal Access Tokens";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("personal_access_tokens/list.php", $data); //render the full page
	}
// No View Function Generated Because No Field is Defined as the Primary Key on the Database Table
	/**
     * Insert new record to the database table
	 * @param $formdata array() from $_POST
     * @return BaseView
     */
	function add($formdata = null){
		if($formdata){
			$db = $this->GetModel();
			$tablename = $this->tablename;
			$request = $this->request;
			//fillable fields
			$fields = $this->fields = array("tokenable_type","tokenable_id","name","token","abilities","last_used_at","expires_at","created_at","updated_at");
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'tokenable_type' => 'required',
				'tokenable_id' => 'required|numeric',
				'name' => 'required',
				'token' => 'required',
				'abilities' => 'required',
				'last_used_at' => 'required',
				'expires_at' => 'required',
				'created_at' => 'required',
				'updated_at' => 'required',
			);
			$this->sanitize_array = array(
				'tokenable_type' => 'sanitize_string',
				'tokenable_id' => 'sanitize_string',
				'name' => 'sanitize_string',
				'token' => 'sanitize_string',
				'abilities' => 'sanitize_string',
				'last_used_at' => 'sanitize_string',
				'expires_at' => 'sanitize_string',
				'created_at' => 'sanitize_string',
				'updated_at' => 'sanitize_string',
			);
			$this->filter_vals = true; //set whether to remove empty fields
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
				$rec_id = $this->rec_id = $db->insert($tablename, $modeldata);
				if($rec_id){
					$this->set_flash_msg("Record added successfully", "success");
					return	$this->redirect("personal_access_tokens");
				}
				else{
					$this->set_page_error();
				}
			}
		}
		$page_title = $this->view->page_title = "Add New Personal Access Tokens";
		$this->render_view("personal_access_tokens/add.php");
	}
// No Edit Function Generated Because No Field is Defined as the Primary Key
// No Delete Function Generated Because No Field is Defined as the Primary Key on the Database Table/View
}
