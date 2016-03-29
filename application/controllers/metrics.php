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

	public function getMetricsGrid(){
		if ($this->session->userdata('log')) {
			$suc = $this->session->userdata('branch');

			$fi = $this->input->get('fi');
			$ff = $this->input->get('ff');

			$fi = date('Y/m/d', strtotime($fi));
			$ff = date('Y/m/d', strtotime($ff));

			$this->load->model('querys');
			$data = $this->querys->getMetrics($suc, $fi, $ff);

			$rows = array();

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


			$flag = false;
			echo "<div class='row'>";

			$l = 0;

			for ($i=0; $i < count($arr[1]); $i++) {
				for ($f=1; $f < count($arr); $f++) { 
					$dia = date('l', strtotime($arr[$f][$i]->date));

					if ($f == 1) {
						if ($dia == 'Monday') {

						echo "<div class='row'>";
							echo "<div class='col-xs-2'>";
							echo "<br>";
							echo "<br>";
							echo "<hr>";
								for ($j=1; $j < count($arr); $j++) { 
									echo "<div class='row'>";
										echo "<p>" . $arr[$j][$i]->NomComb . "</p>";
									echo "</div>";
								}
							echo "</div>";
							
							echo "<div class='col-xs-1'>";
								echo "<div class='row' style='background-color: orange;'>";
									$fecha = $arr[1][$i]->date;
									echo  "<p>" . date('d/m/y', strtotime($fecha)) . "</p>";
								echo "</div>";
							echo "<hr>";								
								echo "<div class='row'>";
									echo "<div class='col-xs-1'>";
										echo "<p>$-" . intval($arr[$f][$i]->Pesos) . "</p>";
									echo "</div>";		
								echo "</div>";

							$flag = true;
						}elseif ($flag == false) {
							
							if ($l == 0) {
								
								echo "<div class='col-xs-2'>";
								echo "<br>";
								echo "<br>";
								echo "<hr>";
									for ($j=1; $j < count($arr); $j++) { 
										echo "<div class='row'>";
											echo "<p>" . $arr[$j][$i]->NomComb . "</p>";
										echo "</div>";
									}
								echo "</div>";

							}
							
							echo "<div class='col-xs-1'>";
								echo "<div class='row' style='background-color: orange;'>";
									$fecha = $arr[1][$i]->date;
									echo  "<p>" . date('d/m/y', strtotime($fecha)) . "</p>";
								echo "</div>";
							echo "<hr>";								
								echo "<div class='row'>";
									echo "<p>$-" . intval($arr[$f][$i]->Pesos) . "</p>";
								echo "</div>";

								$l++;
						}else{
							echo "<div class='col-xs-1'>";
								echo "<div class='row' style='background-color: orange;'>";
									$fecha = $arr[1][$i]->date;
									echo "<p>" . date('d/m/y', strtotime($fecha)) . "</p>";
								echo "</div>";
							echo "<hr>";									
								echo "<div class='row'>";
									echo "<p>$-" . intval($arr[$f][$i]->Pesos) . "</p>";
								echo "</div>";
						}
					}

					if ($f == (count($arr) - 1)) {
						if ($dia == 'Sunday') {
								echo "<div class='row'>";
									echo "<p>$-" . intval($arr[$f][$i]->Pesos) . "</p>";
								echo "</div>";
							echo "</div>";
							echo "</div>";
							echo "<hr>";
						echo "</div>";

						}else{
							echo "<div class='row'>";
								echo "<p>$-" . intval($arr[$f][$i]->Pesos) . "</p>";
							echo "</div>";
							echo "</div>";
						}
					}

					if ($f != 1 && $f < (count($arr) - 1)) {
						echo "<div class='row'>";
							echo "<p>$-" . intval($arr[$f][$i]->Pesos) . "</p>";
						echo "</div>";
					}
				}
			}

			echo "</div>";
		}else{
			$this->load->view('login');
		}
	}

}
?>