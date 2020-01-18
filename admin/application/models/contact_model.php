    <?php 

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class contact_model extends CI_Model {

	public function get_all()
        {	
			$query = $this->db->get('contact');
			return $query->result();
        }
        public function get_contact()
        {   
            $query = $this->db->get('contact');
            return $query->result();
        }
   public function insert($data)
        {	
                $this->db->insert('contact', $data);
        }
        public function get_detail_contact($id)
        {
                $this->db->select('*');
                $this->db->from('contact');
                $query = $this->db->get_where('', array('id' => $id));
                return $query;
        }
         public function get_by_id($id)
  {
    $this->db->where('id', $id);
    return $this->db->get('contact')->row();
  }
        public function update($where,$data,$table){
            $this->db->where($where);
            $this->db->update($table,$data);
        }       
        public function editcontact($where,$table){        
            return $this->db->get_where($table,$where);
        }
        public function delete($id)
        {
                $query=$this->db->delete('contact', array('id'=>$id));
                return $query;
        }
}