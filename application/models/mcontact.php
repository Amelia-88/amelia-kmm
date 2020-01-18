<?php
class mcontact extends CI_Model{

	function get_contact(){
		$hasil=$this->db->get('contact');
		return $hasil->result();
	}

	public function insert($com)
        {	
			return $this->db->insert('coment', $com);
        }
        
}