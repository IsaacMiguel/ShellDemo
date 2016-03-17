<?php
/**
* 
*/
class Home extends CI_Controller
{
	
	public function index(){
		$data['refused'] = false;
		$this->load->view('login', $data);
	}
}
?>