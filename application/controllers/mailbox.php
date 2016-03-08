<?php 
/**
* 
*/
class Mailbox extends CI_Controller
{
	public function index(){
		if ($this->session->userdata('log')) {
			$this->load->view('admin/header');
			$this->load->view('admin/mailbox');
			$this->load->view('admin/footer');
		}
	}

	public function queryMailBox(){
		if ($this->session->userdata('log')) {
			$suc = $this->session->userdata('branch');
			$fi = $this->input->post('fi');
			$ff = $this->input->post('ff');

			$fi = date("Y/m/d", strtotime($fi));
			$ff = date("Y/m/d", strtotime($ff));

			$this->load->model('querys');

			$data['datos'] = $this->querys->getReting($suc, $fi, $ff);

			if ($data['datos'] == false) {
				echo "<p style='text-align: center;'>No hay datos entre esas fechas</p>";
			}else{
				foreach ($data['datos'] as $d) {
					echo "<div class='col-sm-4'>";
	          echo "<div class='panel panel-primary'>";
              echo "<div class='panel-heading'>";
                echo "<div class='row'>";
                  echo "<div class='col-xs-3'>";
                    echo "<h2><i class='glyphicon glyphicon-usd'></i></h2>";
                  echo "</div>";
                  echo "<div class='col-xs-9 text-right'>";
                    echo "<div><h3>Fecha " . $d->fecha . "</h3></div>";
                    echo "<div><h4>Turno " . $d->turno . "</h4></div>";
                    echo "<div><h4>" . $d->Moneda . "</h4></div>";
                    echo "<div><h4>$ " . $d->monto . "</h4></div>";
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

		}else{
			$this->load->view('login');
		}
	}
}
?>