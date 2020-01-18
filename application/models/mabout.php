<?php
class mabout extends CI_Model{

	function get_about(){
		$hasil=$this->db->get('konten');
		return $hasil->result();
	}
}