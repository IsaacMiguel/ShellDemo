<?php
/**
* 
*/
class Show extends CI_Model
{
	public function get($suc){
		$db = $this->load->database($suc, true);

		$data = $this->db->query("select * from sectores where activo=1");
		return $data->result();
	}
}
?>