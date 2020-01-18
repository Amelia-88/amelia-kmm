<?php 

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class diskon_model extends CI_Model {


	public function get_all()
        {	
			$query = $this->db->get('promo');
			return $query->result();
        }
   //  public function get_jenis()
   //      {	
			// $query = $this->db->get('promo');
			// return $query->result();
   //      }

	public function get_join()
        {	
        	 $this->db->select('jenis.*,menu.nama_menu,menu.harga,menu.id_jenis,menu.deskripsi,menu.file_foto,menu.nama_file,menu.id_menu');
             $this->db->from('menu');
             $this->db->join('jenis', 'menu.id_jenis = jenis.id_jenis');
			$query = $this->db->get();
			return $query->result();
        }
    public function insert($data)
        {   
                $this->db->insert('promo', $data);
        }
    public function update($where,$data,$table){
            $this->db->where($where);
            $this->db->update($table,$data);
        }       
    public function editdiskon($where,$table){        
            return $this->db->get_where($table,$where);
        }
        public function get_by_id($id_promo)
  {
    $this->db->where('id_promo', $id_promo);
    return $this->db->get('promo')->row();
  }
  public function delete($id_menu)
        {
                $query=$this->db->delete('promo', array('id_promo'=>$id_promo));
                return $query;
        }


}