<?php
class mmenu extends CI_Model{

	function get_all_menu($data){
		$this->db->where('id_jenis',$data);
		$hasil=$this->db->get('menu');
		return $hasil->result();
	}
	function get_all(){
		$hasil=$this->db->get('menu');
		return $hasil->result();
	}
}