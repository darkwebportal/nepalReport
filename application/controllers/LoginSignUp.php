<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginSignUp extends CI_Controller {
	function __construct() //load the required library in constructor
	{
		parent::__construct();
		$this->load->library("session"); //for session handelling
		$this->load->model("CoreModel"); //main model 
	}
	public function index() 
	{
		redirect(' '); //redirect if nothing 
	}
	public function addadmin($token,$username,$email,$password)
	{	
		if($token==="softx")
		$data=array(
					"username"=>strtolower($username),
					"email"=>strtolower( $email ),
					"password"=>password_hash($password, PASSWORD_DEFAULT));
		if($this->CoreModel->addAdmin($data)["status"])
		{
			echo json_encode(array("status"=>"success"));
			var_dump($data);
			var_dump($password);
		}
		else
			echo json_encode(array("status"=>"failed"));
	}

	private function generateNewUserId() //generate iunique id for each user
	{
		
		$previousId=$this->CoreModel->getLastUserId();
		return date("ym")*10e8+($previousId+1) ;
	}





	public function adminloginvalidation()
	{
		if(empty($_POST) || !$this->session->validation) 
	{
		 redirect(' '); //if not post data or validation token is not set redirect to homapage
		return;
	}
	 $this->load->helper(array('form', 'url','email'));
     $this->load->library('form_validation');
	 $config = array(
			        array(
		                'field' => 'email',
		                'label' => 'Email',
		                'rules' => array('required', 'valid_email'),
		                ),
			        array(
			                'field' => 'password',
			                'label' => 'Password',
			                'rules' => array('required', 'min_length[7]','max_length[31]'),
			                )
					); //validation requirements
	$this->form_validation->set_rules($config);
	if($this->form_validation->run() == true)  //if valoidation is success check for email and password match in database
	{
		$data=array(
					"password"=>$this->input->post("password"),
					"email"=>strtolower( $this->input->post("email")),
					);
		$dbQueryReturn=$this->CoreModel->adminlogin($data);
		
		if($dbQueryReturn["status"])
		{
			echo json_encode(array("status"=>"success"));
			$this->session->set_userdata(array(
											"adminusername"=>$dbQueryReturn["username"],
											"email"=>$dbQueryReturn["email"]
											)); //set session data
		}
		else
			echo json_encode(array("status"=>"fail",
								   "message" => $dbQueryReturn["message"]
									)); //didnt match
	}
	else
		echo json_encode(array("status"=>"fail",
								"message"=> "something isn't right."
								)); //validation is not matched
	}






	public function signupvalidation() //validate the data during signup
	{
		if(empty($_POST) || !$this->session->validation) //if no post request or validation token is not there redirect to homepage
		{
			 redirect(' ');
			return;
		}
		$this->load->helper(array('form', 'url'));
         $this->load->library('form_validation');
		$config = array(
				        array(
				                'field' => 'firstname',
				                'label' => 'firstname',
				                'rules' => array('required', 'min_length[4]','max_length[20]'), 
				        ),
				        array(
				                'field' => 'lastname',
				                'label' => 'lastname',
				                'rules' => array('required', 'min_length[4]','max_length[20]'),
				        ),
				        array(
				                'field' => 'email',
				                'label' => 'Email',
				                'rules' => array('required', 'valid_email'),
				                ),
				        array(
				                'field' => 'password',
				                'label' => 'Password',
				                'rules' => array('required', 'min_length[7]','max_length[31]'),
				                )
				        
				        
						); //validation requirements for each field
		$this->form_validation->set_rules($config);
		if($this->form_validation->run() == true)  //if validation successful signup via putting in  database
		{
			$data=array(
						"firstname"=>strtolower( $this->input->post("firstname") ),
						"lastname"=>strtolower( $this->input->post("lastname") ),
						"contact"=>strtolower( $this->input->post("contact") ),
						"address"=>strtolower($this->input->post("address")),
						"password"=>password_hash($this->input->post("password"), PASSWORD_DEFAULT),
						"email"=>strtolower( $this->input->post("email")),
						"gender"=>strtolower($this->input->post("gender")),
						"userid"=>$this->generateNewUserId(),
						"ip"=>$_SERVER['REMOTE_ADDR']
						);
			$dbQueryReturn=$this->CoreModel->signUp($data);
			if($dbQueryReturn["status"]) //check for database insertion status
			{

				echo json_encode(array("status"=>"success")); //if success write success in json
				$this->session->set_userdata(array(
												"firstname"=>$data["firstname"],
												"email"=>$data["email"],
												"gender"=>$data["gender"],
												"userid"=>$data["userid"]
												)); //set the session data
			}
			else
				echo json_encode(array("status"=>"fail",
									   "message" => $dbQueryReturn["message"]
										)); //if database error occurred return error json data
			
		}
		else
			echo json_encode(array("status"=>"fail",
									"firstname" => form_error("firstname"),
									"lastname" => form_error("lastname"),
									"password" => form_error("password"),
									"contact" => form_error("contact"),
									"email" => form_error("email"),
									"address" => form_error("address")
									)); //validation is unsuccessful
	}
public function userloginvalidation() //check for login validation
{
	if(empty($_POST) || !$this->session->validation) 
	{
		 redirect(' '); //if not post data or validation token is not set redirect to homapage
		return;
	}
	 $this->load->helper(array('form', 'url','email'));
     $this->load->library('form_validation');
	 $config = array(
			        array(
		                'field' => 'email',
		                'label' => 'Email',
		                'rules' => array('required', 'valid_email'),
		                ),
			        array(
			                'field' => 'password',
			                'label' => 'Password',
			                'rules' => array('required', 'min_length[7]','max_length[31]'),
			                )
					); //validation requirements
	$this->form_validation->set_rules($config);
	if($this->form_validation->run() == true)  //if valoidation is success check for email and password match in database
	{
		$data=array(
					"password"=>$this->input->post("password"),
					"email"=>strtolower( $this->input->post("email"))
					);
			$data["username"]=strtolower( $this->input->post("username"));
		$dbQueryReturn=$this->CoreModel->login($data);
		
		if($dbQueryReturn["status"])
		{
			echo json_encode(array("status"=>"success"));
			$this->session->set_userdata(array(
											"firstname"=>$dbQueryReturn["firstname"],
											"email"=>$dbQueryReturn["email"],
											"gender"=>$dbQueryReturn["gender"],
											"userid"=>$dbQueryReturn["userid"]
											)); //set session data
		}
		else
			echo json_encode(array("status"=>"fail",
								   "message" => $dbQueryReturn["message"]
									)); //didnt match
	}
	else
		echo json_encode(array("status"=>"fail",
								"message"=> "something isn't right."
								)); //validation is not matched

}
public function fblogin()
{
	if(empty($_POST) || !$this->session->validation) //if no post request or validation token is not there redirect to homepage
	{
		 redirect(' ');
		return;
	}

	if (!$this->verifyFacebookSignRequest($this->input->post("signedRequest")))
	{
		echo json_encode(array("status"=>"fail"));
		return;
	}

	$this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');
	$config = array(
			        array(
			                'field' => 'firstname',
			                'label' => 'firstname',
			                'rules' => array('required', 'min_length[4]','max_length[32]'), 
			        ),
			        array(
			                'field' => 'lastname',
			                'label' => 'lastname',
			                'rules' => array('required', 'min_length[4]','max_length[32]'),
			        ),
			        array(
			                'field' => 'email',
			                'label' => 'Email',
			                'rules' => array('required', 'valid_email'),
			                ),
			         array(
			                'field' => 'id',
			                'label' => 'id',
			                'rules' => array('required'),
			                ),

					); //validation requirements for each field
		$this->form_validation->set_rules($config);
		if($this->form_validation->run() == true)  //if validation successful signup via putting in  database
		{
			$data=array(
						"firstname"=>strtolower( $this->input->post("firstname") ),
						"lastname"=>strtolower( $this->input->post("lastname") ),
						"address"=>strtolower($this->input->post("address")),
						"email"=>strtolower( $this->input->post("email")),
						"gender"=>strtolower($this->input->post("gender")),
						"sociallogin"=>$this->input->post("id"),
						"userid"=>$this->generateNewUserId(),
						"ip"=>$_SERVER['REMOTE_ADDR']
						);
			$dbQueryReturn=$this->CoreModel->facebookLogin($data);
			if($dbQueryReturn["status"])
			{
				$this->session->set_userdata(array(
												"firstname"=>$data["firstname"],
												"email"=>$data["email"],
												"gender"=>$data["gender"],
												"userid"=>$data["userid"]
												));
				echo json_encode(array("status"=>"success"));
				return;
			}
			else
				echo json_encode(array("status"=>"fail")); //validation is not matched
			

	  }
	  else
	 echo json_encode(array("status"=>"fail"));  //validation is not matched
}


function verifyFacebookSignRequest($signed_request) {
	$secret="871ed64a71d899b7c12e62ea8584a288";
  list($encoded_sig, $payload) = explode('.', $signed_request, 2); 

  // decode the data
  $sig = $this->base64_url_decode($encoded_sig);
  $data = json_decode($this->base64_url_decode($payload), true);

  if (strtoupper($data['algorithm']) !== 'HMAC-SHA256') {
    return null;
  }

  // check sig
  $expected_sig = hash_hmac('sha256', $payload, $secret, $raw = true);

  if ($sig !== $expected_sig)
  	return false;

  return true;
}

private function base64_url_decode($input) {
  return base64_decode(strtr($input, '-_', '+/'));
}


}
