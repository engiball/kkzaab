<?
class restaurant_model extends CI_Model{


public function newRest($data){
$this->load->database();
$this->db->insert('resturant',$data); 
}
		
}


?>
