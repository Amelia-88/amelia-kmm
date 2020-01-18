<?php 

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class konten_model extends CI_Model {

	public function get_all()
        {	
			$query = $this->db->get('konten');
			return $query->result();
        }
   public function insert($data)
        {	
                $this->db->insert('konten', $data);
        }
        public function get_detail_konten($id)
        {
                $this->db->select('*');
                $this->db->from('konten');
                $query = $this->db->get_where('', array('id' => $id));
                return $query;
        }
         public function get_by_id($id)
  {
    $this->db->where('id', $id);
    return $this->db->get('konten')->row();
  }
        public function update($where,$data,$table){
            $this->db->where($where);
            $this->db->update($table,$data);
        }       
        public function editkonten($where,$table){        
            return $this->db->get_where($table,$where);
        }
        public function delete($id)
        {
                $query=$this->db->delete('konten', array('id'=>$id));
                return $query;
        }
}