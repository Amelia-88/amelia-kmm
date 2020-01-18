<?php
class mhome extends CI_Model{

	function get_home(){
		$hasil=$this->db->get('home');
		return $hasil->result();
	}
}