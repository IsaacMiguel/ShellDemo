<?php
/**
* 
*/
class Pactivos extends CI_Controller
{
	public function index(){
		if ($this->session->userdata('log')) {
			$suc = $this->session->userdata('branch');
			$fi = date('Y-m-d',strtotime('-30 day'));

			$this->load->model('querys');

			$data['data'] = $this->querys->getPactivos($suc, $fi);

			$this->load->view('admin/header');
			$this->load->view('admin/pactivos', $data);
			$this->load->view('admin/footer');
		}else{
			$this->load->view('login');
		}
	}
}
?>