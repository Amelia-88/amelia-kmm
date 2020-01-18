<?php 

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class coment_model extends CI_Model {

	public function get_all()
        {	
			$query = $this->db->get('coment');
			return $query->result();
        }
     }