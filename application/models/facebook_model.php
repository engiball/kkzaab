<?
class facebook_model extends CI_Model{
	 //public $facebook;
	 var $user;
	 var $data;
	  var $token;
	  var $appid;
	  var $params = array();
	  var $paramsOut=array();
	  var $LoginUrl;
	  var $LogoutUrl;
	   var $facebook;
	 
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		 require 'facebook.php';
		$params['scope'] ='read_stream,email,user_birthday';
		$params['redirect_uri'] =current_url();
		$paramsOut = array( 'next' => base_url() );
		$this->facebook = new Facebook(array(
		'appId'  => '377185465635859',
		'secret' => 'a8d91b8a13d56082f1f7b89fdbf0bfa0',
		));
			$facebook = new Facebook(array(
		'appId'  => '377185465635859',
		'secret' => 'a8d91b8a13d56082f1f7b89fdbf0bfa0',
		));
		$this->user = $facebook->getUser();
		$this->token=$facebook->getAccessToken();
		$this->appid =$facebook->getAppId();
		$this->LoginUrl=$facebook->getLoginUrl($params);
		$this->LogoutUrl=$facebook->getLogoutUrl($paramsOut);
    }
	
			public function username(){
			 $user_profile = $this->facebook->api('/me');
			 return $user_profile['first_name'];
			}
			public function login(){
		if ($this->user) {
		try {
    // Proceed knowing you have a logged in user who's authenticated.
    $user_profile = $this->facebook->api('/me');
	$this->data['user']= $user_profile['first_name'];
	$this->data['user_profile']= $user_profile;
	 	
	//$this->data['test']	= 
	$birth_string=explode("/",@$user_profile['birthday']);
	$user_data['user_type']=1;
	$user_data['username']=$user_profile['first_name'];
	$user_data['sex']=$user_profile['gender'];
	$user_data['email']=@$user_profile['email'];
	$user_data['fb_id']=$user_profile['id'];
	$user_data['user_birthday']=($birth_string[2]+543).'-'.$birth_string[0].'-'.$birth_string[1];
//	echo $user_data['user_birthday'];
	$this->adduser($user_data);
	$userid=$this->get_user_id($user_data['fb_id']);
	$this->session->set_userdata('userid', $userid);
	$this->session->set_userdata('user', $user_profile['first_name']);
	return $this->user;
	} catch (FacebookApiException $e) {
 // echo '<pre>'.htmlspecialchars(print_r($e, true)).'</pre>';
    $user = null;
	//return  $user;
  }
  
}
else{
$this->data['user']= "";
return $this->data['user'];
}
			}
	public function login_url(){
		return $this->LoginUrl;
	}
	public function logout_url(){
		return $this->LogoutUrl;
	}
	
		public function adduser($data){
		$this->load->database();
		if($this->check_user($data['fb_id'])<1){
		
		$this->db->insert('member', $data); 
		}
		return true;
			 
			}
			
			
			
		public function check_user($data){
		$this->load->database();
		$this->db->select("*");
		$this->db->from("member");
		//$this->db->where("product_status = "."'1'");	
	
			$this->db->where('fb_id',$data);				
	
       return $this->db->count_all_results();
			 
			}
			
				public function get_user_id($data){
		$this->load->database();
		$this->db->select("member_id");
		$this->db->from("member");
		$this->db->where('fb_id',$data);
$q=$this->db->get();	
	     return  $q->row()->member_id;
			 
			}
			
			
		
}


?>
