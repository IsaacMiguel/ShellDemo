<?php
/**
* 
*/
class Querys extends CI_Model
{
	public function getOil($suc, $fi, $ff){
		$db = $this->load->database($suc, true);

		$data = $db->query("select sum(importe) as imptot, sum(litros) as ltstot, max(productos.ctrl) as id_prod, max(productos.detalle) as producto, max(r) as r, max(g) as g, max(b) as b from ventadiaria left join productos on productos.ctrl = ventadiaria.id_producto where convert(varchar, fecha, 111) >= '".$fi."' and convert(varchar, fecha, 111) <= '".$ff."' group by id_producto");

		if ($data->num_rows != 0) {
			return $data->result();
		}else{
			return false;
		}
	}

}
?>