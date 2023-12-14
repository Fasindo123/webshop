<?php 
/**
 * Index Page Controller
 * @category  Controller
 */
class IndexController extends BaseController{
	function __construct(){
		parent::__construct(); 
		$this->tablename = "users";
	}
	/**
     * Index Action 
     * @return null
     */
	function index(){
		if(user_login_status() == true){
			$this->redirect(HOME_PAGE);
		}
		else{
			$this->render_view("index/index.php");
		}
	}
	private function login_user($username , $password_text, $rememberme = false){
		$db = $this->GetModel();
		$username = filter_var($username, FILTER_SANITIZE_STRING);
		$db->where("username", $username)->orWhere("email", $username);
		$tablename = $this->tablename;
		$user = $db->getOne($tablename);
		if(!empty($user)){
			//Verify User Password Text With DB Password Hash Value.
			//Uses PHP password_verify() function with default options
			$password_hash = $user['password'];
			$this->modeldata['password'] = $password_hash; //update the modeldata with the password hash
			if(password_verify($password_text,$password_hash)){
				// Check If User Email Is Verified
				if(strtolower($user['email_status']) != "verified"){
					//send verification email to user
					return $this->redirect("index/send_verify_email_link/$user[email]");
				}
				$date_to_expire = $user['password_expire_date'];
				$password_has_expired =  new DateTime($date_to_expire) < new DateTime();
				if($password_has_expired){
					$this->view->page_error = "Your password has expired. Please reset your password to continue.";
					return $this->render_view("index/login.php", null, "main_layout.php");
				}
        		unset($user['password']); //Remove user password. No need to store it in the session
				set_session("user_data", $user); // Set active user data in a sessions
				//if Remeber Me, Set Cookie
				if($rememberme == true){
					$sessionkey = time().random_str(20); // Generate a session key for the user
					//Update user session info in database with the session key
					$db->where("id", $user['id']);
					$res = $db->update($tablename, array("login_session_key" => hash_value($sessionkey)));
					if(!empty($res)){
						set_cookie("login_session_key", $sessionkey); // save user login_session_key in a Cookie
					}
				}
				else{
					clear_cookie("login_session_key");// Clear any previous set cookie
				}
				$redirect_url = get_session("login_redirect_url");// Redirect to user active page
				if(!empty($redirect_url)){
					clear_session("login_redirect_url");
					return $this->redirect($redirect_url);
				}
				else{
					return $this->redirect(HOME_PAGE);
				}
			}
			else{
				//password is not correct
				return $this->login_fail("Username or password not correct");
			}
		}
		else{
			//user is not registered
			return $this->login_fail("Username or password not correct");
		}
	}
	/**
     * Display login page with custom message when login fails
     * @return BaseView
     */
	private function login_fail($page_error = null){
		$this->set_page_error($page_error);
		$this->render_view("index/login.php");
	}
	/**
     * Login Action
     * If Not $_POST Request, Display Login Form View
     * @return View
     */
	function login($formdata = null){
		if($formdata){
			$modeldata = $this->modeldata = $formdata;
			$username = trim($modeldata['username']);
			$password = $modeldata['password'];
			$rememberme = (!empty($modeldata['rememberme']) ? $modeldata['rememberme'] : false);
			$this->login_user($username, $password, $rememberme);
		}
		else{
			$this->set_page_error("Invalid request");
			$this->render_view("index/login.php");
		}
	}
	/**
     * Insert new record into the user table
	 * @param $formdata array from $_POST
     * @return BaseView
     */
	function register($formdata = null){
		if($formdata){
			$request = $this->request;
			$db = $this->GetModel();
			$tablename = $this->tablename;
			$fields = $this->fields = array("name","username","email","password","img","role"); //registration fields
			$postdata = $this->format_request_data($formdata);
			$cpassword = $postdata['confirm_password'];
			$password = $postdata['password'];
			if($cpassword != $password){
				$this->view->page_error[] = "Your password confirmation is not consistent";
			}
			$this->rules_array = array(
				'name' => 'required',
				'username' => 'required',
				'email' => 'required|valid_email',
				'password' => 'required',
				'img' => 'required',
				'role' => 'required',
			);
			$this->sanitize_array = array(
				'name' => 'sanitize_string',
				'username' => 'sanitize_string',
				'email' => 'sanitize_string',
				'img' => 'sanitize_string',
				'role' => 'sanitize_string',
			);
			$this->filter_vals = true; //set whether to remove empty fields
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			$password_text = $modeldata['password'];
			//update modeldata with the password hash
			$modeldata['password'] = $this->modeldata['password'] = password_hash($password_text , PASSWORD_DEFAULT);
			$date_to_expire = format_date("1 week");
			$modeldata['password_expire_date'] = $date_to_expire;
			$modeldata['email_status'] = "Not Verified";
			//Check if Duplicate Record Already Exit In The Database
			$db->where("username", $modeldata['username']);
			if($db->has($tablename)){
				$this->view->page_error[] = $modeldata['username']." Already exist!";
			}
			//Check if Duplicate Record Already Exit In The Database
			$db->where("email", $modeldata['email']);
			if($db->has($tablename)){
				$this->view->page_error[] = $modeldata['email']." Already exist!";
			}
			if($this->validated()){
				$rec_id = $this->rec_id = $db->insert($tablename, $modeldata);
				if($rec_id){
				$this->redirect("index/send_verify_email_link/$modeldata[email]");
					return;
				}
				else{
					$this->set_page_error();
				}
			}
		}
		$page_title = $this->view->page_title = "Add New Users";
		return $this->render_view("index/register.php");
	}
	/**
     * Logout Action
     * Destroy All Sessions And Cookies
     * @return View
     */
	function logout($arg=null){
		Csrf::cross_check();
		session_destroy();
		clear_cookie("login_session_key");
		$this->redirect("");
	}
	/**
     * Page To Display After Email Verification
     * @return View
     */
	function emailverified(){
		$this->render_view("index/emailverified.php", null, "info_layout.php");
	}
	/**
     * Send Verify Email Link to user Action 
     * @return View
     */
	function send_verify_email_link($email = null){
		if(!empty($email)){
			$db = $this->GetModel();
			$tablename = $this->tablename;
			$db->where ('email', $email);
			$user = $db->getOne($tablename);
			if(!empty($user)){
				if(strtolower($user['email']) != 'verified'){
					$hashvalue = hash_value($user['id']);
					$verify_link = SITE_ADDR."index/verifyemail/" . md5($user['id']) . "?h=$hashvalue";
					$user_name = $user['username'];
					$email = $user['email'];
					$mailtitle = "Email Address Verification";
					$sitename = SITE_NAME;
					//Password reset template
					$mailbody = file_get_contents(PAGES_DIR . "index/emailverify_template.html");
					$mailbody = str_ireplace("{{username}}", $user_name, $mailbody);
					$mailbody = str_ireplace("{{link}}", $verify_link, $mailbody);
					$mailbody = str_ireplace("{{sitename}}", $sitename, $mailbody);
					$mailer = new Mailer;
					if($mailer->send_mail($email, $mailtitle, $mailbody) == true){
						$view_data = array("status"=>true, "user_email" => $email, "mailbody" => $mailbody);
						$this->render_view("index/emailverification.php" , $view_data, "info_layout.php");
					}
					else{
						$view_data = array("status" => false,"user_email" => $email);
						$this->render_view("index/emailverification.php", $view_data, "info_layout.php");
					}
				}
				else{
					$this->render_view("errors/error_general.php", "Email address is already verified", "info_layout.php");
				}
			}
			else{
				$this->render_view("errors/error_general.php", "Email address is not registered", "info_layout.php");
			}
		}
		else{
			$this->redirect("index/login");
		}
	}
	/**
     * Verify Email Action 
     * Get User By Hashed User Id
     * Compare User Hashed Value ($_GET['h']) With Server Hashed Value
     * @param $user_id MD5 Hashed String of the user_id
     * @param $_GET['h'] Server hashed user_id Hashed With Salt Text
     * @return View
     */
	function verifyemail($user_id = null){
		if(!empty($user_id)){
			$db = $this->GetModel();
			$tablename = $this->tablename;
			$db->where ("md5(id)", $user_id);//get user by userid hash value
			$user = $db->getOne($tablename);
			$hashed_user_id = $this->request->h; // get User Hashed Value
			if(!empty($user)){
				$server_hash_id = hash_value($user['id']);
				if($server_hash_id == $hashed_user_id){
					$db->where("id", $user["id"]);
					$db->update($tablename , array("email_status"=>"verified"));
					//set_session("user_data" , $user); to login user automatically after email verified
					$this->render_view("index/emailverified.php" , null , "info_layout.php");
				}
				else{
					$this->render_view("errors/error_general.php", "The email verification link is not valid", "info_layout.php");
				}
			}
			else{
				$this->render_view("errors/error_general.php", "The email verification link is not valid","info_layout.php");
			}
		}
		else{
			$this->redirect("index/login");
		}
	}
}
