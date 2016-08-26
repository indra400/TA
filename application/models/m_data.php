<?php 
 
class M_data extends CI_Model{
	//function ambil_data(){
	//	return $this->db->get('t_id_buah');
	//}
	//function input_data($data,$table){
	//	$this->db->insert($table,$data);
	//}
	//function getAll($tabel) {
	//	$q = $this->db->query("SELECT * FROM $tabel");
	//	return $q->result();
	//}
	
	
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
}