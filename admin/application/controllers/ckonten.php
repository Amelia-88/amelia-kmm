<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ckonten extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper(array('form',  'url'));
	    $this->load->library('form_validation');
		$this->load->model('konten_model');
		// $this->load->model('minuman_model');
		// $this->load->model('paket_model');
		$this->load->database();
	}

	
	public function get_konten()
        {
			$data['konten'] = $this->konten_model->get_all();
			$this->template->set('title', 'Konten');
			$this->template->load('template_admin2', 'contents' , 'pages/table_konten/view_table', $data);
        }
    public function form_konten()
        {
			
			$this->form_validation->set_rules('nama_konten', 'Nama Konten', 'trim|required');
			$this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
			$config = array(
                        'upload_path' => './assets2/img/Konten',
                        'allowed_types' => 'jpeg|jpg|png',
                        'max_size' => '6000',
                        'max_width' => '6000',
                        'max_height' => '6000'
                );
				 $this->load->library('upload', $config);
				 //$this->upload->initialize($config);
                if (!$this->upload->do_upload('gambar'))
                {
					$data['konten'] = $this->konten_model->get_all();
					
					$this->template->set('title', 'Input Konten');
					$this->template->load('template_admin2', 'contents' , 'pages/table_konten/form_konten' , $data);	
					
				}else {
				$file = $this->upload->data();
				$data = array(
					'nama_konten' => $this->input->post('nama_konten'),
                   'nama_gambar' => $this->input->post('nama_gambar'),
                   'gambar' => $file['file_name'],
                   'deskripsi' => $this->input->post('deskripsi')
                  
                        );
					$this->konten_model->insert($data);
					redirect('ckonten/get_konten');
                }
                	
		}  
		public function ubah($id)
        {
			$where = array('id' => $id);
			//$data['jenis'] = $this->buku_model->get_jenis();
			$data['konten'] = $this->konten_model->editkonten($where,'konten')->result();
			$this->template->set('title', 'Edit Data Konten');
			$this->template->load('template_admin2', 'contents' , 'pages/table_konten/form_update', $data);
        }
		public function update()
        {
			$where = array('id' => $id);
			$this->form_validation->set_rules('judul', 'judul', 'trim|required');
			$foto = $this->db->get_where('konten',$where);
			//$this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');

		    if($foto->num_rows()>0){
		      $pros=$foto->row();
		      $name=$pros->file_foto;
		     
		      if(file_exists($lok=FCPATH.'/assets2/img/Konten/'.$name)){
		        unlink($lok);
		      }
		      // if(file_exists($lok=FCPATH.'/uploads/thumbnail/'.$name)){
		      //   unlink($lok);
		      // }
		  	}
			$config = array(
                        'upload_path' => './assets2/img/Konten',
                        'allowed_types' => 'jpeg|jpg|png',
                        'max_size' => '6000',
                        'max_width' => '6000',
                        'max_height' => '6000'
                );
				 $this->load->library('upload', $config);
				 //$this->upload->initialize($config);
				 //!$this->upload->do_upload('file_foto')
				 
                if ($this->form_validation->run() == FALSE && !$this->upload->do_upload('gambar'))
                {
					// $data['query'] = $this->makanan_model->editmakanan($where,'makanan')->result();
					$data['konten'] = $this->konten_model->get_konten();
					$this->template->set('title', 'Input Konten');
					$this->template->load('template_admin2', 'contents' , 'pages/table_konten/form_update',$data);	
					
				}elseif($this->upload->do_upload('gambar')) {
				$file = $this->upload->data();
				$id = $this->input->post('id');
				$where = array('id' => $id);
				$data = array(
					'nama_konten' => $this->input->post('nama_konten'),
					
                   'nama_gambar' => $this->input->post('nama_gambar'),
                   'gambar' => $file['file_name'],
                   'deskripsi' => $this->input->post('deskripsi')
                   
                        );
					
                }elseif(!$this->upload->do_upload('gambar')){
                	$id = $this->input->post('id');
				$where = array('id' => $id);
				$data = array(
					'nama_konten' => $this->input->post('nama_konten'),
					
                   'deskripsi' => $this->input->post('deskripsi')
                   
                   
                        );
                }
                $this->konten_model->update($where,$data,'konten');
					redirect('ckonten/get_konten');	
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
	// 	$this->template->load('template_admin2', 'contents' , 'pages/table_konten/view_detail', $data);
	// }
	public function delete($id = NULL)
    {
    	$row = $this->konten_model->get_by_id($id);
		// $data = array(
  //                     'file_foto' => $row->file_foto
  //               );
    	unlink('assets2/img/Konten/'.$row->gambar);
    	$query=$this->konten_model->delete($id);
    	if ($query>0) {
    		$url=base_url("ckonten/get_konten");
    		redirect($url);
    	}
    }        
}
