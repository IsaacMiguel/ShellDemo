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

		}else{
			header('Location: ' . base_url());
		}
	}

	public function getPrices(){
		if ($this->session->userdata('user')) {
			$suc = $this->session->userdata('branch');

			$fi = $this->input->post('fi');
			$ff = $this->input->post('ff');
			$client = $this->input->post('name');

			$this->load->model('querys');
			$data = $this->querys->pricesClient($suc, $fi, $ff, $client);

			echo "<div class='col-sm-1'>";
				echo "<p>Interno</p>";
			echo "</div>";

			echo "<div class='col-sm-2'>";
				echo "<p>CdShell</p>";
			echo "</div>";

			echo "<div class='col-sm-2'>";
				echo "<p>Nombre </p>";
			echo "</div>";

			echo "<div class='col-sm-2'>";
				echo "<p>Cantidad</p>";
			echo "</div>";

			echo "<div class='col-sm-2'>";
				echo "<p>Punitario</p>";
			echo "</div>";

			echo "<div class='col-sm-2'>";
				echo "<p>FechaFc </p>";
			echo "</div>";

			echo "<div class='col-sm-1'>";
				echo "<p>Interno</p>";
			echo "</div>";

			foreach ($data as $d) {
				echo "<div class='row'>";
					echo "<div class='col-sm-1'>";
						echo $d->CdInterno;
					echo "</div>";

					echo "<div class='col-sm-2'>";
						echo $d->CdShell;
					echo "</div>";

					echo "<div class='col-sm-2'>";
						echo $d->Nombre ;
					echo "</div>";

					echo "<div class='col-sm-2'>";
						echo $d->Cantidad;
					echo "</div>";

					echo "<div class='col-sm-2'>";
						echo $d->Punitario;
					echo "</div>";

					echo "<div class='col-sm-2'>";
						echo $d->FechaFc ;
					echo "</div>";

					echo "<div class='col-sm-1'>";
						echo $d->Interno;
					echo "</div>";
				echo "</div>";
			}
		}
	}
}
?>