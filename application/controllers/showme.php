<?
/**
* 
*/
class Showme extends CI_Controller
{
	public function index(){
		$suc = "";
		$this->load->model('show');
		$data['data'] = $this->show->get($suc);

		print_r($data);
	}
}
?>
