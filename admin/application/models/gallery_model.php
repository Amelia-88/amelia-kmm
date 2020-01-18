<?php 

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class gallery_model extends CI_Model {

	public function get_all()
        {	
			 $query = $this->db->get('gallery');
            return $query->result();
        }
    public function get_jenis()
        {   
            return $this->db->get('jenis_gallery')->result();
        }
    public function get_gallery()
        {   
            return $this->db->get('gambar_gallery')->result_array();
        }
   public function insert($data)
        {	
            $query=$this->db->insert('gallery', $data);
            return $query;
        }
        public function insert_gambar($data = array()){
        $insert = $this->db->insert_batch('gambar_gallery',$data);
        return $insert?true:false;
    }    
    public function get_join($id){
        $this->db->select('*');
                $this->db->from('gallery');
                $this->db->join('gambar_gallery', 'gallery.id = gambar_gallery.id');
                $this->db->where('gambar_gallery.id',$id);
                $this->db->limit(1,0);
                $query = $this->db->get();
                return $query->result();
    }
    public function get_id($tanggal){
    $this->db->select('id');
    $this->db->where('tanggal', $tanggal);
    return $this->db->get('gallery')->row();
        }
        public function get_detail_gallery($id)
        {
                $this->db->select('*');
                $this->db->from('gallery');
                $query = $this->db->get_where('', array('id' => $id));
                return $query;
        }
         public function get_by_id($id)
  {
    $this->db->where('id', $id);
    return $this->db->get('gallery')->row();
  }
  public function get_gambar($id)
  {
    $this->db->select('gambar_gallery.gambar,gambar_gallery.id_gambar');
    $this->db->where('id', $id);
    return $this->db->get('gambar_gallery')->result_array();
  }
  public function get_id_gambar($id)
  {
    $this->db->select('gambar_gallery.gambar,gambar_gallery.id_gambar');
    $this->db->where('id_gambar', $id);
    return $this->db->get('gambar_gallery')->result();
  }
  public function get_gambarid($namagambar)
  {
    $this->db->select('gambar_gallery.id_gambar');
    $this->db->where('gambar', $namagambar);
    return $this->db->get('gambar_gallery')->result_array();
  }
  public function get_idgambar($id)
  {
    $this->db->where('id', $id);
    return $this->db->get('gambar_gallery')->row();
  }
  public function multiple_images($image = array()){

     return $this->db->insert_batch('gallery',$image);
             }
        public function update($where,$data,$table){
            $this->db->where($where);
            return $this->db->update($table,$data);
        }
        public function update_banyak($table,$data = array(),$where){
            $this->db->where($where);
            return $this->db->update_batch($table,$data);
        }       
        public function editgallery($where,$table){        
            return $this->db->get_where($table,$where);
        }
        public function delete($id)
        {
                $query=$this->db->delete('gallery', array('id'=>$id));
                return $query;
        }
        // public function delete_gambar($id)
        // {
        //         $query=$this->db->delete('gambar_gallery', array('id'=>$id));
        //         return $query;
        // }
        public function deletegambar($id)
        {
                $query=$this->db->delete('gambar_gallery', array('id'=>$id));
                return $query;
        }
    public function get_jumlahgallery(){
    $query=$this->db->get('gallery');
    if ($query->num_rows() > 0) {
        return $query->num_rows();
    }else{
        return 0;
    }
  }
  public function get_gambargallery(){
    $query=$this->db->get('gambar_gallery');
    if ($query->num_rows() > 0) {
        return $query->num_rows();
    }else{
        return 0;
    }
  }
}