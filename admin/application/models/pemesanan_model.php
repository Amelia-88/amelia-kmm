<?php 

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class pemesanan_model extends CI_Model {


	public function get_join()
        {	
        	 $this->db->select('*');
             $this->db->from('detail_pemesanan');
             $this->db->join('pemesanan', 'detail_pemesanan.id_pemesanan = pemesanan.id_pemesanan');
             $this->db->join('menu', 'detail_pemesanan.id_menu = menu.id_menu');
			$query = $this->db->get();
			return $query->result();
        }

     public function update($where,$data,$table){
            $this->db->where($where);
            $this->db->update($table,$data);
        }    
    public function get_status(){
        $status='belum';
        $this->db->where('status',$status);
        $query=$this->db->get('detail_pemesanan');
        if ($query->num_rows() > 0) {
        return $query->num_rows();
    }else{
        return 0;
    }
    }
}