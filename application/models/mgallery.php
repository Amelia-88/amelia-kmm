<?php
class mgallery extends CI_Model{

	function get_gallery(){
		$this->db->select('gambar_gallery.gambar,gallery.deskripsi');
        	$this->db->from('gallery');
        	$this->db->join('gambar_gallery', 'gallery.id = gambar_gallery.id');
          	$this->db->order_by("tanggal", "DESC");
			return $this->db->get()->result();
	}

	function get_gallery_per_page($limit, $start){
		$hasil=$this->db->select('gallery.id, gambar_gallery.gambar,gallery.deskripsi')
        			->from('gallery')
        			->join('gambar_gallery', 'gallery.id = gambar_gallery.id')
          			->order_by("gallery.tanggal", "DESC")
          			->group_by('gallery.id')
          			->limit($limit, $start)
          			->get();
		return $hasil->result();
	}
}