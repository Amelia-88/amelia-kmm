<?php
class mcomment extends CI_Model{

	function get_comment(){
		        $this->db->select('*');
             $this->db->from('coment');
          $this->db->order_by("tanggal", "DESC");
          $this->db->limit(1,0);
        return $this->db->get()->result();
	}
}