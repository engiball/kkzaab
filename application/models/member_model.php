<?
class member_model extends CI_Model{

		public function add($data,$check){
		$this->load->database();
		if($this->check_exists($check)<1){
			$this->db->insert('member',$data); 
			return 1;
		}
		else
		{
		return 0;
	
		
			}
			}
			
			
		 function check_exists($check){
		$this->load->database();
		$this->db->select('*');
		$this->db->from('member');
		$this->db->where($check);
		return $this->db->count_all_results();
		
		}
		
		public	function login($check){
			if($this->check_exists($check)>0){
	
			return 1;
		}
		else
		{
		return 0;
		
		}
		}
		
			public function get_user_id($data){
		$this->load->database();
		$this->db->select("member_id");
		$this->db->from("member");
		$this->db->where($data);
		$this->db->where('user_type',0);
		$q=$this->db->get();	
	     return  $q->row()->member_id;
			 
			}
			
				public function get_user_name($data){
		$this->load->database();
		$this->db->select("username");
		$this->db->from("member");
		$this->db->where($data);
		$this->db->where('user_type',0);
		$q=$this->db->get();	
	     return  $q->row()->username;
			 
			}
		
		
			 function send_reset_email($check){
		$this->load->database();
		if($this->check_exists($check)>0){
			echo "send mail";
			return 1;
		}
		else
		{
		
			echo "invalid Email";
		return 0;
	
		
			}
	
		
		}
		
		
	
		
}


?>
