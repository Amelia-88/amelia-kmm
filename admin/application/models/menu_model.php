<?php 

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class menu_model extends CI_Model {


	public function get_all()
        {	
			$query = $this->db->get('menu');
			return $query->result();
        }
    public function get_jenis()
        {	
			return $this->db->get('jenis_menu')->result();
        }

	public function get_join()
        {	
        	 $this->db->select('jenis_menu.*,menu.nama_menu,menu.harga,menu.id_jenis,menu.deskripsi,menu.file_foto,menu.nama_file,menu.id_menu');
             $this->db->from('menu');
             $this->db->join('jenis_menu', 'menu.id_jenis = jenis_menu.id_jenis');
			$query = $this->db->get();
			return $query->result();
        }
    public function get_databydate(){
        $this->db->select('*');
             $this->db->from('menu');
          $this->db->order_by("tanggal", "DESC");
          $this->db->limit(3,0);
        return $this->db->get()->result();
    }
    public function insert($data)
        {   
                $query=$this->db->insert('menu', $data);
                return $query;
        }
    public function update($where,$data,$table){
            $this->db->where($where);
            $this->db->update($table,$data);
        }       
    public function editmenu($where,$table){        
            return $this->db->get_where($table,$where);
        }
        public function get_by_id($id_menu)
  {
    $this->db->where('id_menu', $id_menu);
    return $this->db->get('menu')->row();
  }
  public function get_idmenu($tanggal)
  {
    $this->db->where('tanggal', $tanggal);
    return $this->db->get('menu')->row();
  }
  public function insert_gambar($image = array()){
$insert = $this->db->insert_batch('gambar_menu',$data);
        return $insert?true:false;
             }
  public function delete($id_menu)
        {
                $query=$this->db->delete('menu', array('id_menu'=>$id_menu));
                return $query;
        }
  public function get_jumlahmenu(){
    $query=$this->db->get('menu');
    if ($query->num_rows() > 0) {
        return $query->num_rows();
    }else{
        return 0;
    }
  }


}