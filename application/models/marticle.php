<?php
class marticle extends CI_Model{

	function get_article(){
		$hasil=$this->db->get('article');
		return $hasil->result();
	}

	function get_article_per_page($limit, $start){
		$hasil=$this->db->get('article', $limit, $start);
		return $hasil->result();
	}

	function get_detail($id){
		$hasil=$this->db->where('id', $id);
		$hasil=$this->db->get('article');
		return $hasil->row();
	}
}