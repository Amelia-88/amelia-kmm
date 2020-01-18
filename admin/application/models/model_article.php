<?php 

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class model_article extends CI_Model {

	public function get_all()
        {	
			$query = $this->db->get('article');
			return $query->result();
        }
        public function get_k()
        {   
            $query = $this->db->get('kategori_article');
            return $query->result();
        }
    public function get_article(){
        return $this->db->query('SELECT * FROM article WHERE status ="publish" ORDER BY id DESC')->result();
    }
   public function insert($data)
        {	
                $this->db->insert('article', $data);
        }
        public function insert_kategori($data)
        {   
                $this->db->insert('kategori_article', $data);
        }
        public function get_join($status){
        $this->db->select('*');
                $this->db->from('article');
                $this->db->join('kategori_article', 'article.id_kategori = kategori_article.id_kategori');
                $this->db->where('status',$status);
                $query = $this->db->get();
            
                return $query->result();
    }
    public function get_join2(){
        $this->db->select('*');
                $this->db->from('article');
                $this->db->join('kategori_article', 'article.id_kategori = kategori_article.id_kategori');
                
                $query = $this->db->get();
            
                return $query->result();
    }
        public function get_detail_article($id)
        {
                $this->db->select('*');
                $this->db->from('article');
                $query = $this->db->get_where('', array('id' => $id));
                return $query;
        }
         public function get_by_id($id)
  {
    $this->db->where('id', $id);
    return $this->db->get('article')->row();
  }
        public function update($where,$data,$table){
            $this->db->where($where);
            $this->db->update($table,$data);
        }       
        public function editarticle($where,$table){        
            return $this->db->get_where($table,$where);
        }
        public function delete($id)
        {
                $query=$this->db->delete('article', array('id'=>$id));
                return $query;
        }
        public function get_jumlahartikle(){
    $query=$this->db->get('article');
    if ($query->num_rows() > 0) {
        return $query->num_rows();
    }else{
        return 0;
    }
  }
  public function get_status(){
        $status='draft';
        $this->db->where('status',$status);
        $query=$this->db->get('article');
        if ($query->num_rows() > 0) {
        return $query->num_rows();
    }else{
        return 0;
    }
    }
}