<?
/**
* 
*/
class Showme extends CI_Controller
{
	public function index(){
		$suc = "aida";
		$this->load->model('show');
		$data['data'] = $this->show->get($suc);

		print_r($data);

		/*$conexion = mssql_connect('200.59.36.112', 'sa', 'pumitas', 'asuper') or die('Error al intentar conectarse a la base de datos.');
		echo 'Conectado correctemente';
		mssql_close($conexion);*/
	}
}
?>