<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cgallery extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper(array('form',  'url'));
	    $this->load->library('form_validation');
		$this->load->model('gallery_model');
		// $this->load->model('minuman_model');
		// $this->load->model('paket_model');
		$this->load->database();
	}

	
	public function get_gallery()
        {
			$data['gallery'] = $this->gallery_model->get_all();
			$this->template->set('title', 'Gallery');
			$this->template->load('template_admin2', 'contents' , 'pages/table_gallery/view_table', $data);
        }
    public function form_gallery()
        {
		$this->load->library('upload');
  		$image = array();
  		$tanggal = date("Y-m-d H:i:s");
  		if(!empty($_FILES['gambar']['name'])){
  		$filesCount = count($_FILES['gambar']['name']);
      $data = array(
          'judul' => $this->input->post('judul'),
          'id_gallery'=>$this->input->post('id_gallery'),
          'deskripsi' => $this->input->post('deskripsi'),
          'tanggal' => $tanggal
                        );
          $query=$this->gallery_model->insert($data);
  		for($i = 0; $i < $filesCount; $i++){ 
  			$_FILES['upload_File']['name'] = $_FILES['gambar']['name'][$i];
  			 $_FILES['upload_File']['type'] = $_FILES['gambar']['type'][$i]; 
  			 $_FILES['upload_File']['tmp_name'] = $_FILES['gambar']['tmp_name'][$i]; 
  			 $_FILES['upload_File']['error'] = $_FILES['gambar']['error'][$i]; 
  			 $_FILES['upload_File']['size'] = $_FILES['gambar']['size'][$i]; $uploadPath = 'assets2/img/Gallery/'; 
  			 $config['upload_path'] = $uploadPath; 
  			 $config['allowed_types'] = 'gif|jpg|png'; 
  			 $this->load->library('upload', $config);
  			 $this->upload->initialize($config);
					if(!empty($query)){
                if($this->upload->do_upload('upload_File')){
                    $fileData = $this->upload->data();
                    $row=$this->gallery_model->get_id($tanggal);
                    $id=$row->id;
                    $uploadData[$i]['id'] = $id;
                    $uploadData[$i]['gambar'] = $fileData['file_name'];
                }}
            }
            if(!empty($uploadData)){
                //Insert file information into the database
                $insert = $this->gallery_model->insert_gambar($uploadData);
                $statusMsg = $insert?'Files uploaded successfully.':'Some problem occurred, please try again.';
                $this->session->set_flashdata('statusMsg',$statusMsg);
                if($insert > 0){
                	redirect('cgallery/get_gallery');
                }
            }
  		}else{
  			$data['gallery'] = $this->gallery_model->get_all();
					$data['jenis'] = $this->gallery_model->get_jenis();
					$this->template->set('title', 'Input Gallery');
					$this->template->load('template_admin2', 'contents' , 'pages/table_gallery/form_gallery' , $data);
  		}
  		}
                	
		 
		public function ubah($id)
        {
			$where = array('id' => $id);
			//$data['jenis'] = $this->buku_model->get_jenis();
			$data['gallery'] = $this->gallery_model->get_join($id);
      // $data['gambar'] = $this->gallery_model->get_gambar($id);
      // $data['jenis'] = $this->gallery_model->get_jenis();
			$this->template->set('title', 'Edit Data Gallery');
			$this->template->load('template_admin2', 'contents' , 'pages/table_gallery/form_update', $data);
        }
    public function ubah_gambar($id)
        {
      $where = array('id' => $id);
      //$data['jenis'] = $this->buku_model->get_jenis();
      $data['gallery'] = $this->gallery_model->get_join($id);
      $data['gambar'] = $this->gallery_model->get_gambar($id);
      $data['jenis'] = $this->gallery_model->get_jenis();
      $this->template->set('title', 'Edit Data Gallery');
      $this->template->load('template_admin2', 'contents' , 'pages/table_gallery/form_update_gambar', $data);
        }
    public function update_gambar($id_gambar){
      $where = array('id_gambar' => $id_gambar);
       $tanggal = date("Y-m-d H:i:s");
      $foto = $this->db->get_where('gambar_gallery',$where);
        if($foto->num_rows()>0){
          $pros=$foto->row();
          $name=$pros->gambar;
         
          if(file_exists($lok=FCPATH.'/assets2/img/Gallery/'.$name)){
            unlink($lok);
          }
        }
      $config = array(
                        'upload_path' => './assets2/img/Gallery',
                        'allowed_types' => 'jpeg|jpg|png',
                        'max_size' => '6000',
                        'max_width' => '6000',
                        'max_height' => '6000'
                );
         $this->load->library('upload', $config);
      
      if(!$this->upload->do_upload('gambar')){
      $data['gambar'] = $this->gallery_model->get_id_gambar($id_gambar);
      $this->template->set('title', 'Edit Data Gallery');
      $this->template->load('template_admin2', 'contents' , 'pages/table_gallery/form_update_gambar_id', $data);
      }else{
      $file = $this->upload->data();
      //$where = array('gambar_gallery.id_gambar' => $this->input->post('id_gambar'));
      //$id=$this->input->post('id_gambar');
      $data=array(
         'gambar' => $file['file_name']
      );
      $query=$this->gallery_model->update($where,$data,'gambar_gallery');
          if($query > 0 ){
          redirect('cgallery/get_gallery');
          }
    }
    }
    public function ubah_form($id){
      $where = array('id' => $id);
      //$data['jenis'] = $this->buku_model->get_jenis();
      $data['gallery'] = $this->gallery_model->get_join($id);
      $data['jenis'] = $this->gallery_model->get_jenis();
      $this->template->set('title', 'Edit Data Gallery');
      $this->template->load('template_admin2', 'contents' , 'pages/table_gallery/form_updateform', $data);
        }
    public function updateform(){
    $this->form_validation->set_rules('judul', 'judul', 'trim|required');
    $this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
    if($this->form_validation->run() == FALSE){
      $where = array('id' => $id);
      //$data['jenis'] = $this->buku_model->get_jenis();
      $data['gallery'] = $this->gallery_model->get_join($id);
      $data['jenis'] = $this->gallery_model->get_jenis();
      $this->template->set('title', 'Edit Data Gallery');
      $this->template->load('template_admin2', 'contents' , 'pages/table_gallery/form_updateform', $data);
    }else{
      $tanggal = date("Y-m-d H:i:s");
      $where = array('id' => $this->input->post('id'));
      $data = array(
          'judul' => $this->input->post('judul'),
          'id_gallery'=>$this->input->post('id_gallery'),
          'deskripsi' => $this->input->post('deskripsi'),
          'tanggal' => $tanggal
          );
          $query=$this->gallery_model->update($where,$data,'gallery');
          if($query > 0 ){
          redirect('cgallery/get_gallery');
          }
    }   
    } 
		public function update()
    {
      $this->form_validation->set_rules('judul', 'judul', 'trim|required');
      $this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
      $where = array('id' => $this->input->post('id'));
      $foto = $this->db->get_where('gambar_gallery',$where); 
      if($foto->num_rows()>0){
          $pros=$foto->row();
          $name=$pros->gambar;
         
          if(file_exists($lok=FCPATH.'/assets2/img/Gallery/'.$name)){
            unlink($lok);
          }
        }
      
			$this->load->library('upload');
      $image = array();
      $tanggal = date("Y-m-d H:i:s");
      if(!empty($_FILES['gambar']['name'])){
          $filesCount = count($_FILES['gambar']['name']);
          $where = array('id' => $this->input->post('id'));
          $data = array(
          'judul' => $this->input->post('judul'),
          'id_gallery'=>$this->input->post('id_gallery'),
          'deskripsi' => $this->input->post('deskripsi'),
          'tanggal' => $tanggal
          );
          $query=$this->gallery_model->update($where,$data,'gallery');
          if($query > 0 ){
          $req=$this->gallery_model->get_gallery();
        for($i = 0; $i < $filesCount; $i++){ 
        $_FILES['upload_File']['name'] = $_FILES['gambar']['name'][$i];
         $_FILES['upload_File']['type'] = $_FILES['gambar']['type'][$i]; 
         $_FILES['upload_File']['tmp_name'] = $_FILES['gambar']['tmp_name'][$i]; 
         $_FILES['upload_File']['error'] = $_FILES['gambar']['error'][$i]; 
         $_FILES['upload_File']['size'] = $_FILES['gambar']['size'][$i]; 
         $uploadPath = 'assets2/img/Gallery/'; 
         $config['upload_path'] = $uploadPath; 
         $config['allowed_types'] = 'gif|jpg|png'; 
         $this->load->library('upload', $config);
         $this->upload->initialize($config);
                if($this->upload->do_upload('upload_File')){
                    $fileData = $this->upload->data();
                    $namagambar=$fileData['file_name'];
                    $uploadData[$i]['gambar'] = $fileData['file_name'];
                }
            }
          }
            if(!empty($uploadData)){
                $row=$this->gallery_model->get_gambarid($namagambar);
                $where=$row['id_gambar'];
                for ($i=0; $i < $req ; $i++) { 
                  if($row[$i]['id_gambar']==$req[$i]['id_gambar']){
                //Insert file information into the database
                $update = $this->gallery_model->update_banyak('gambar_gallery',$uploadData,$where);
                $statusMsg = $update?'Files uploaded successfully.':'Some problem occurred, please try again.';
                $this->session->set_flashdata('statusMsg',$statusMsg);
                if($update > 0){
                  echo "Berhasil";
                }else{
                  echo "input form dengan gambar error";
                }
            }//if
          }//for
        }
      }elseif ($this->form_validation->run() == TRUE && empty($_FILES['gambar']['name'])){
        $data = array(
          'judul' => $this->input->post('judul'),
          'id_gallery'=>$this->input->post('id_gallery'),
          'deskripsi' => $this->input->post('deskripsi'),
          'tanggal' => $tanggal
          );
          $query=$this->gallery_model->update($where,$data,'gallery');
          if($query > 0 ){
            redirect('cgallery/get_gallery');
          }
      } elseif($this->form_validation->run() == FALSE && empty($_FILES['gambar']['name'])){
        $data['gallery'] = $this->gallery_model->get_all();
          $data['jenis'] = $this->gallery_model->get_jenis();
          $this->template->set('title', 'Input Gallery');
          $this->template->load('template_admin2', 'contents' , 'pages/table_gallery/form_gallery' , $data);
      }
		}   
	// 	public function detail_gallery($id='')
	// {
	// 	$row = $this->gallery_model->get_by_id($id);
	// 	$data = array(
                 
 //                 'judul' => $row->judul,
 //                 'deskripsi' => $row->deskripsi,
 //                  'nama_gambar' => $row->nama_gambar,
 //                      'gambar' => $row->gambar
 //                );
	// 	// $data['makanan'] = $this->makanan_model->get_detail_makanan($id_makanan);
	// 	$this->template->set('title', 'Detail Data Minuman');
	// 	$this->template->load('template_admin2', 'contents' , 'pages/table_gallery/view_detail', $data);
	// }
	public function delete($id = NULL)
    {
    	$row = $this->gallery_model->get_gambar($id);
      for ($i=0; $i < $row ; $i++) { 
        foreach ($row as $row) {
          unlink('assets2/img/Gallery/'.$row['gambar']);
        }
      }
      $query=$this->gallery_model->deletegambar($id);
      if($query > 0 ){
        $data=$this->gallery_model->delete($id);
        if($data > 0){
        $url=base_url("cgallery/get_gallery");
        redirect($url);
      }
      }
    }
}