<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CoreController extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library("session");
		$this->load->model("CoreModel");
	}
	public function index()
	{
		$this->session->set_userdata( array("validation"=>true) );
      	$data=array("data"=> array('fbloginurl' => $this->fbLoginRedirectUrl())  );
		$this->load->view('home',$data);
	}
	public function signup()
	{
		if($this->session->userid)
			redirect("userhome");

		$this->session->set_userdata( array("validation"=>true) );
      	$data=array("data"=> array('fbloginurl' => $this->fbLoginRedirectUrl())  );
		$this->load->view('signup',$data);
	}

	private function generateNewReportd() //generate iunique id for each user
	{
		
		$previousId=$this->CoreModel->getLastReportId();
		return date("ym")*10e8+($previousId+1) ;
	}
	public function userhome()
	{
		if($this->session->userid)
			$this->load->view('userhome',array("data"=>array("firstname"=>$this->session->firstname,
															  "lastname"=>$this->session->lastname)));
		else
			redirect("");
	}
	public function login()
	{
		if($this->session->userid)
			redirect("userhome");
		
		$this->session->set_userdata( array("validation"=>true) );
    	$data=array("page"=> "user"  );
		$this->load->view('userlogin',$data);
	}
	public function adminlogin()
	{
		if($this->session->adminusername)
			redirect("dashboard");

		$data=array("page"=> "admin"  );
		$this->session->set_userdata( array("validation"=>true) );
		$this->load->view('userlogin',$data);
	}
	public function signout()
	{
		if($this->session->userid)
			$this->session->unset_userdata(array("firstname","lastname","userid"));

		redirect("");
	}
	public function adminsignout()
	{
		if($this->session->adminusername)
			$this->session->unset_userdata(array("adminusername"));

		redirect("");
	}
	public function dashboard()
	{
		if(!$this->session->adminusername || !$this->session->validation)
			redirect("adminlogin");
		else
		{
			$dbreports=$this->CoreModel->getReports();
			if($dbreports["status"])
			{
				$data=array("data"=>array("reports"=>$dbreports["reports"],
										  "adminUsername"=>$this->session->adminusername
										));
				$this->load->view('dashboard',$data);
			}
				
			else
				redirect("homepage");

		}

	}
	public function submitreport()
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
				                'field' => 'zone',
				                'label' => 'zone',
				                'rules' => array('required'), 
				        ),
				     	array(
				                'field' => 'location',
				                'label' => 'location',
				                'rules' => array('required'), 
				        ),
				        array(
				                'field' => 'catagory',
				                'label' => 'catagory',
				                'rules' => array('required'), 
				        ),
				        array(
				                'field' => 'priority',
				                'label' => 'priority',
				                'rules' => array('required'), 
				        ),
				        array(
				                'field' => 'time',
				                'label' => 'time',
				                'rules' => array('required'), 
				        ),
				        array(
				                'field' => 'phone',
				                'label' => 'phone',
				                'rules' => array('required'), 
				        ),
				        array(
				                'field' => 'name',
				                'label' => 'name',
				                'rules' => array('required'), 
				        ),
						); //validation requirements for each field
		$this->form_validation->set_rules($config);
		if($this->form_validation->run() == true)  //if validation successful signup via putting in  database
		{
			$data=array(
						"zone"=>strtolower( $this->input->post("zone") ),
						"location"=>strtolower( $this->input->post("location") ),
						"priority"=>strtolower($this->input->post("priority")),
						"time"=>$this->input->post("time"),
						"phone"=>$this->input->post("phone"),
						"reporton"=>strtolower($this->input->post("reporton")),
						"reportid"=>$this->generateNewReportd(),
						"name"=>strtolower($this->input->post("name")),
						"message"=>$this->input->post("message"),
						"catagory"=>str_replace("  ","",$this->input->post("catagory")),
						"userid"=>$this->session->userid,
						"ip"=>$_SERVER['REMOTE_ADDR']
						);
			$dbQueryReturn=$this->CoreModel->report($data);
			if($dbQueryReturn["status"]) //check for database insertion status
				echo json_encode(array("status"=>"success")); //if success write success in json
			else
				echo json_encode(array("status"=>"fail")); //if database error occurred return error json data
		}
		else
			echo json_encode(array("status"=>"faail")); //validation is unsuccessful
	}

	public function report()
	{
		if(!$this->session->userid)
			redirect("");
		else
		{
			$this->load->view("report");
		}

		
	}

	private function fbLoginRedirectUrl()
	{
		require_once APPPATH."libraries/Facebook/autoload.php";
	     $fb = new Facebook\Facebook([
	        'app_id' => '1995734153993273',
	        'app_secret' => 'f4e4a33ef404467d9b405e3169def0a1',
	        'default_graph_version' => 'v2.8',
	        ]);
      	$helper = $fb->getRedirectLoginHelper();

     	 $permissions = ['email']; // Optional permissions
      	$loginUrl = $helper->getLoginUrl('http://nepalreports.cf/fblogin', $permissions);

      	return htmlspecialchars($loginUrl);
      	
	}
	
}
