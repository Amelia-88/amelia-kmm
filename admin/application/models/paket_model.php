<?php 

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class paket_model extends CI_Model {

	public function get_all()
        {	
			$query = $this->db->get('paket');
			return $query->result();
        }
   public function insert($data)
        {	
                $this->db->insert('paket', $data);
        }
        public function get_detail_paket($id_paket)
        {
                $this->db->select('*');
                $this->db->from('paket');
                $query = $this->db->get_where('', array('id_paket' => $id_paket));
                return $query;
        }
         public function get_join($id_paket)
            {
                $this->db->select('paket.deskripsi','paket.file_foto','paket.nama_paket');
                $this->db->from('paket');
                $this->db->join('makanan', 'paket.id_makanan = makanan.id_makanan');
                $this->db->join('minuman', 'paket.id_minuman = minuman.id_minuman');
                $query = $this->db->get_where('', array('id_paket' => $id_paket))->row();
                return $query;
                //return $query;
    // $this->db->where('id_paket', $id_paket);
    // return $this->db->get('paket')->row();
             }
             public function get_by_id($id_paket)
  {
    $this->db->where('id_paket', $id_paket);
    return $this->db->get('paket')->row();
  }
             public function get_makanan()
        {   
            $query = $this->db->get('makanan');
            return $query->result();
        }
        public function get_minuman()
        {   
            $query = $this->db->get('minuman');
            return $query->result();
        }
        public function update($where,$data,$table){
            $this->db->where($where);
            $this->db->update($table,$data);
        }       
        public function editpaket($where,$table){        
            return $this->db->get_where($table,$where);
        }
        public function delete($id_paket)
        {
                $query=$this->db->delete('paket', array('id_paket'=>$id_paket));
                return $query;
        }
}