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

	public function getReting($suc, $fi, $ff){
		$db = $this->load->database($suc, true);

		$data = $db->query("select max(convert(char, fecha, 103)) as fecha , max(turno) as turno , max(dmedio) as Moneda, sum(monto) as monto from reting where fecha>='".$fi."' and fecha<='".$ff."' and tipo='R' group by fecha, dmedio, turno order by turno");

		if ($data->num_rows != 0) {
			return $data->result();
		}else{
			return false;
		}
	}

	public function getPactivos($suc, $fi){
		$db = $this->load->database($suc, true);

		$data = $db->query("select max(Left(fa_nume,4)) as Punto, max(fa_tipo) as Letra,  max(right(fa_nume,8)) as Comprobante, max(fa_fecha) as Fecha from fact where fa_fiscal=1 and year(fa_fecha)>='2015' group by left(fa_nume,4) , fa_tipo");

		if ($data->num_rows != 0) {
			return $data->result();
		}else{
			return false;
		}
	}

	public function getMetrics($suc, $fi, $ff){

		$db = $this->load->database($suc, true);

		$data = $db->query("select sum(convert( int, turno2.dife)) as value, sum(turno2.dife* turno2.precio) as Pesos, rtrim(max(convert(char, turno1.fecha_a, 23))) as date, max(surtidores.cod_combus) as interno  , max(st_combustible) as cod_comb  , max(Combustibles.Nombre) as NomComb from turno2 left join turno1 on turno2.id_turno2=turno1.id_turno1 left join surtidores on turno2.surtidor=surtidores.codigo left join stock on surtidores.cod_combus=stock.st_interno left join Combustibles on Combustibles.codigo=stock.st_combustible	where convert(char,turno1.fecha_A,111)>= '".$fi."' and convert(char,turno1.fecha_A,111)<= '".$ff."'	group by convert(char,surtidores.cod_combus,103)+convert(char,turno1.fecha_A,103) order by NomComb, date");

		return $data->result();
	}

	public function getFuelClient($suc, $name){
		$db = $this->load->database($suc, true);

		$data = $db->query("select cl_nume, cl_apel, cl_cuit from clientes where cl_apel like '%".$name."%'");

		return $data->result();
	}
}
?>