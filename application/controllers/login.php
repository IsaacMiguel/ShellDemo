<?php
/**
* 
*/
class Login extends CI_Controller
{
	public function index(){
		$acount = $this->input->post('user');
		$password = $this->input->post('password');
		$dbs = $this->input->post('branch');

		$acount = strtoupper($acount);
		$password = strtoupper($password);

		$this->load->model('log');

		$data = $this->log->auth($acount, $dbs);

		if ($data != '') {
			if ($data->pass == $password) {
			$sesData = array(
				'user' => $acount,
				'num_oferta' => -1,
				'branch' => $dbs,
				'log' => TRUE);

			$this->session->set_userdata($sesData);

			$this->load->view('admin/header');
			$this->load->view('admin/home');
			$this->load->view('admin/footer');

			}else{
				$data['refused'] = true;
				$this->load->view('login', $data);
			}
		}else{
			$data['refused'] = true;
			$this->load->view('login', $data);
		}

	}

	public function signOut(){
		$this->session->sess_destroy();
		$this->load->view('login');
	}
}
?>