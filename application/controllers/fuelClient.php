<?php
/**
* 
*/
class FuelClient extends CI_Controller
{
	public function index(){
		if ($this->session->userdata('user')) {

			$this->load->view('admin/header');
			$this->load->view('admin/fuelClient');
			$this->load->view('admin/footer');
		}else{
			header('Location: ' . base_url());
		}
	}

	public function listClients(){
		if ($this->session->userdata('user')) {
			$suc = $this->session->userdata('branch');
			$name = $this->input->post('name');

			$this->load->model('querys');

			$data = $this->querys->getFuelClient($suc, $name);

			echo "<div class='row'>";
			echo "<div class='col-sm-4 col-sm-offset-4'>";
			echo "<center><select class='form-control' id='selectClient'>";
				echo "<option value='0' selected>Seleccione una opcion</option>";
				foreach ($data as $c) {
					echo "<option value='".$c->cl_nume."'>".$c->cl_apel."</option>";
				}
			echo "</select></center>";
			echo "</div>";
			echo "</div>";

			echo "<div class='row'>";
				echo "<hr>";
			echo "</div>";

			echo '<div class="row" style="padding-left:20%;">';
        echo '<div class="col-sm-12">';
            echo '<div class="col-sm-3">';
                echo '<input class="form-control" type="date" id="fechainicio" name="fechainicio">';
            echo '</div>';
            echo '<div class="col-sm-1">';
                echo '<p><strong>al</strong></p>';
            echo '</div>';
            echo '<div class="col-sm-3">';
                echo '<input class="form-control" type="date" id="fechafin" name="fechafin">';
            echo '</div>';
            echo '<div class="col-sm-2">';
                echo '<button type="button" class="btn btn-primary" id="btnBuscar"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>';
            echo '</div>';
        echo '</div>';
    echo '</div>';

		}else{
			header('Location: ' . base_url());
		}
	}
}
?>