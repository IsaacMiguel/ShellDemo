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
			header('Location: ' . base_url());
		}
	}

	public function queryOil(){
		$suc = $this->session->userdata('branch');
		$fi = $this->input->post('fi');
		$ff = $this->input->post('ff');

		$fi = date("Y/m/d", strtotime($fi));
		$ff = date("Y/m/d", strtotime($ff));

		$this->load->model('querys');

		$data['datos'] = $this->querys->getOil($suc, $fi, $ff);
		
		if ($data['datos'] == false) {
			echo "<p style='text-align: center;'>No hay datos entre esas fechas</p>";
		}else{
			foreach ($data['datos'] as $d) {
				echo "<div class='col-sm-4'>";
	                echo "<div class='panel panel-primary'>";
	                    echo "<div class='panel-heading'>";
	                        echo "<div class='row'>";
	                            echo "<div class='col-xs-3'>";
	                                echo "<h2><i class='glyphicon glyphicon-scale'></i></h2>";
	                            echo "</div>";
	                            echo "<div class='col-xs-9 text-right'>";
	                                echo "<div><h2>$ " . $d->imptot . "</h2></div>";
	                                echo "<div><h4>" . $d->ltstot . " Lts.</h4></div>";
	                                echo "<div><h4>" . $d->producto . "</h4></div>";
	                            echo "</div>";
	                        echo "</div>";
	                    echo "</div>";
	                    echo "<a href='#'>";
	                        echo "<div class='panel-footer'>";
	                            echo "<span class='pull-left'>Ver Detalles</span>";
	                            echo "<span class='pull-right'><i class='glyphicon glyphicon-circle-arrow-right'></i></span>";
	                            echo "<div class='clearfix'></div>";
	                        echo "</div>";
	                    echo "</a>";
	                echo "</div>";
	            echo "</div>";
			}
		}
	}
}
?>