<?
class nation_model extends CI_Model{

		public function get_province(){
		$this->load->database();
		$this->db->select('PROVINCE_NAME');
		$this->db->from('province');
		$query = $this->db->get();
		return $query->result_array();
			}
			
		
}


?>
