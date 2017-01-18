<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class CoreModel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database($this->databaseConfig());
	}
	
	public function signUp($data)
	{
		$dbResult=$this->db->select("*")->from("users")->where("email",$data["email"])->limit(1)->get();
		if($dbResult->num_rows()>0)
			return array("status"=>false,
					 	"message"=>"This email is already registered");

		$this->db->flush_cache();
		$dbResult=$this->db->select("*")->from("users")->where("contact",$data["contact"])->limit(1)->get();
		if($dbResult->num_rows()>0)
			return array("status"=>false,
					 	"message"=>"This contact is already registered");

		$this->db->flush_cache();
		
		
		if($this->db->insert('users', $data))
			return array("status"=>true);
		else
			return array("status"=>false,
					 	"message="=>"Something went wrong");
		
	}
	public function addAdmin($data)
	{
		$dbResult=$this->db->select("*")->from("admins")->where("email",$data["email"])->get();
		if($dbResult->num_rows()>0)
			return array("status"=>false,
					 	"message"=>"This email is already registered");

		$this->db->flush_cache();
		if($this->db->insert('admins', $data))
			return array("status"=>true);
		else
			return array("status"=>false,
					 	"message="=>"Something went wrong");
		
	}
	public function getReports()
	{
		$this->db->flush_cache();
		$dbResult=$this->db->query('SELECT * FROM reports ORDER BY reportid ASC');

		if($dbResult->num_rows()==0)
			return array("status"=>false);
		else
			return array("status"=>true,"reports"=>$dbResult->result());
	}
	public function facebookLogin($data)
	{
		$dbResult=$this->db->select("*")->from("users")->where("email",$data["email"])->limit(1)->get();
		if($dbResult->num_rows()==0)
		{
			if($this->db->insert('users', $data))
				return array("status"=>true);
			else
				return array("status"=>false);
		}
		else if ($dbResult->result()[0]->sociallogin === $data["sociallogin"]) {
			return array("status"=>true);
		}
	}
	public function getLastUserId()
	{
		$this->db->flush_cache();
		$dbResult=$this->db->query('SELECT * FROM users ORDER BY userid DESC LIMIT 1');

		if($dbResult->num_rows())
			$previousId=(int) str_split($dbResult->result()[0]->userid,8)[1];
		else
			$previousId=0;
		return $previousId;
	}

	public function getLastReportId()
	{
		$this->db->flush_cache();
		$dbResult=$this->db->query('SELECT * FROM reports ORDER BY userid DESC LIMIT 1');

		if($dbResult->num_rows())
			$previousId=(int) str_split($dbResult->result()[0]->userid,8)[1];
		else
			$previousId=0;
		return $previousId;
	}
	private function databaseConfig()
	{
		$config['hostname'] = 'localhost';
		$config['username'] = 'root';
		$config['password'] = '';
		$config['database'] = 'crimereport';
		$config['dbdriver'] = 'mysqli';
		$config['dbprefix'] = '';
		$config['pconnect'] = FALSE;
		$config['db_debug'] = TRUE;
		$config['cache_on'] = FALSE;
		$config['cachedir'] = '';
		$config['char_set'] = 'utf8';
		$config['dbcollat'] = 'utf8_general_ci';
		return $config;
	}
	

	public function login($data)
	{

		$this->db->flush_cache(); //Flush the database cache from previous query
		$dbResult=$this->db->select("*")->from("users")->where("email",$data["email"])->get();
		if($dbResult->num_rows()==0) //Check is there is any row with the same email
			return array("status"=>false,
					 	"message"=>"Email is not registered"); //if not exit with returning message
		else 
		{
			$dbData=$dbResult->result()[0];
			if( password_verify($data["password"],$dbData->password)) //if row with email exist check for the password
				return array("status"=>true,
						"firstname"=>$dbData->firstname,
						"email"=>$dbData->email,
						"gender"=>$dbData->gender,
						"userid"=>$dbData->userid,
						); //if password matches return the data required for the session
			else
				return array("status"=>false,
					 	"message"=>"username or password doesn't match.");//if not exit with returning message

		}

	}


	public function adminlogin($data)
	{

		$this->db->flush_cache(); //Flush the database cache from previous query
		$dbResult=$this->db->select("*")->from("admins")->where("email",$data["email"])->get();
		if($dbResult->num_rows()==0) //Check is there is any row with the same email
			return array("status"=>false,
					 	"message"=>"Email is not registered"); //if not exit with returning message
		else 
		{
			$dbData=$dbResult->result()[0];
			if( password_verify($data["password"],$dbData->password)) //if row with email exist check for the password
				return array("status"=>true,
						"username"=>$dbData->username,
						"email"=>$dbData->email
						); //if password matches return the data required for the session
			else
				return array("status"=>false,
					 	"message"=>"username or password doesn't match.");//if not exit with returning message

		}

	}

	public function checkMultipleSignup()
	{
		$previousSignups=$this->db->select("*")->from("users")->where("ip",$_SERVER['REMOTE_ADDR'])->get()->num_rows();
		return ($previousSignups>=2)? true : false;
	}
	public function report($data)
	{
		$this->db->flush_cache();
		if($this->db->insert('reports', $data))
			return array("status"=>true);
		else
			return array("status"=>false);
	}
}
?>