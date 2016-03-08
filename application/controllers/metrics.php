<?php
/**
* 
*/
class Metrics extends CI_Controller
{
	public function index(){
		if ($this->session->userdata('log')) {
			$this->load->view('admin/headerG');
			$this->load->view('admin/metrics');
			$this->load->view('admin/footer');
		}else{
			$this->load->view('login');
		}
	}

	public function getMetrics($fi, $ff){
		if ($this->session->userdata('log')) {
			$suc = $this->session->userdata('branch');

			$fi = date("Y/m/d", strtotime($fi));
			$ff = date("Y/m/d", strtotime($ff));

			$this->load->model('querys');
			$data = $this->querys->getMetrics($suc, $fi, $ff);

			$rows = array();
			$flag = false;
			//$first_value = reset($data); //get first row
			//$fValue = $first_value->NomComb; //get first value of array $data
			//array_push($rows, $fValue); //push for initializated the fuel array

			foreach ($data as $d) {
				if ($d->NomComb != '') {
					array_push($rows, $d);
			 	}
			}

			
			$v = '';
			$index = 0;

			foreach ($rows as $r) {
				if ($v != $r->NomComb) {					
					$v = $r->NomComb;

					$index++;
					$arr[$index] = array();
					
					array_push($arr[$index], $r);

				}else{
					array_push($arr[$index], $r);
				}
			}

			echo "[";
			for ($i=1; $i < count($arr); $i++) {
				echo json_encode($arr[$i]);
				if ($i+1 != count($arr)) {
					echo ",";
				}
			}
			echo "]";

		}else{
			$this->load->view('login');
		}
	}

}
?>