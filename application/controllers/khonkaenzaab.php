<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Khonkaenzaab extends CI_Controller {
	public $data ;
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 public function __construct()
	{
		parent::__construct();
		$this->load->helper( 'url');
			$this->load->helper('form');
			//$this->load->helper(array('form', 'url'));
			$this->load->model('facebook_model');
			$this->load->model('member_model');
			$this->load->model('nation_model');
			$this->load->library('form_validation');
			$this->load->library('parser');
			$this->load->library('session');
			$this->data['loginurl'] =$this->facebook_model->login_url();
			$this->data['user']=$this->session->userdata('user');
			
		}
		
	public function index()
	{
	
		if ($this->agent->is_mobile('iphone'))
		{
		    $this->load->view('iphone/home');
		}
		else if ($this->agent->is_mobile())
		{
		    $this->load->view('mobile/home');
		}
		else
		{  
		
			//$this->data['logouturl']=$this->facebook_model->logout_url();
			
			$this->load->view('header/header',$this->data);
			$this->load->view('main/bodymain');
			$this->load->view('footer/footer');
		}
	}


	
		 function facebook_login(){
		$this->facebook_model->login();
		$this->data['user']=$this->facebook_model->username();
	 	$this->data['loginurl'] =$this->facebook_model->login_url();
		$this->data['logouturl'] = $this->facebook_model->logout_url();
			$this->load->view('header/header',$this->data);
			$this->load->view('main/bodymain');
			$this->load->view('footer/footer');
	 }
	 	public function logout(){
	
	$this->data['loginurl'] =$this->facebook_model->login_url();
	$this->data['user']="";
	$this->session->unset_userdata('userid');
	$this->load->view('header/header',$this->data);
			$this->load->view('main/bodymain');
			$this->load->view('footer/footer');
	}
	
	 
	public function rest()
	{
		$this->data["a"] ="12345";
		$this->data["b"] ="12345";
		$this->load->view('header/header',$this->data);
		$this->load->view('main/rest');
 
		$this->load->view('footer/footer' );
	}

	public function viewdetail()
	{
		$this->data["a"] ="12345";
		$this->data["b"] ="12345";
		$this->load->view('header/header',$this->data);
		$this->load->view('main/viewdetail');
 
		$this->load->view('footer/footer' );
	}


public function profile()
	{
		$this->data["a"] ="12345";
		$this->data["b"] ="12345";
		$this->load->view('header/header',$this->data);
		$this->load->view('main/profile');
 
		$this->load->view('footer/footer' );
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
