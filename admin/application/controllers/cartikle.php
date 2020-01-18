<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cartikle extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper(array('form',  'url'));
	    $this->load->library('form_validation');
		$this->load->model('model_article');
		// $this->load->model('minuman_model');
		// $this->load->model('paket_model');
		$this->load->database();
	}

	
	public function get_artikle()
        {
			$data['artikle'] = $this->model_article->get_join2();
			$this->template->set('title', 'Artikle');
			$this->template->load('template_admin2', 'contents' , 'pages/table_artikle/view_table', $data);
        }
    public function form_artikle()
    {
    $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
      $this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
      $config = array(
                        'upload_path' => './assets2/img/Artikle',
                        'allowed_types' => 'jpeg|jpg|png',
                        'max_size' => '6000',
                        'max_width' => '6000',
                        'max_height' => '6000'
                );
         $this->load->library('upload', $config);
         //$this->upload->initialize($config);
                if (!$this->upload->do_upload('gambar'))
                {
          $data['kategori'] = $this->model_article->get_k();
          //$data['jenis']=$this->menu_model->get_jenis();
          $this->template->set('title', 'Input Artikle');
          $this->template->load('template_admin2', 'contents' , 'pages/table_artikle/form_artikle' , $data);  
          
        }else {
        $file = $this->upload->data();
        $tanggal = date("Y-m-d H:i:s");
        $data = array(
          'judul' => $this->input->post('judul'),
          'penulis' => $this->input->post('penulis'),
          'id_kategori' => $this->input->post('id_kategori'),
          'deskripsi' => $this->input->post('deskripsi'),
          'nama_gambar' => $this->input->post('nama_gambar'),
          'gambar' => $file['file_name'],
          'status' => $this->input->post('status'),                  
          'tanggal' => $tanggal
                        );
          $this->model_article->insert($data);
          redirect('cartikle/get_artikle');
                }	
    }
		public function form_kategori()
        {
			
			$this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'trim|required');
                if ($this->form_validation->run() == FALSE)
                {
					$this->template->set('title', 'Input Kategori Artikle');
					$this->template->load('template_admin2', 'contents' , 'pages/table_artikle/form_kategori');	
					
				}else {
				
				$data = array(
				'nama_kategori' => $this->input->post('nama_kategori'));
					$this->model_article->insert_kategori($data);
					redirect('cartikle/get_artikle');
                }
                	
		}  
		public function ubah($id)
        {
			$where = array('id' => $id);
			//$data['jenis'] = $this->buku_model->get_jenis();
			$data['artikle'] = $this->model_article->editarticle($where,'article')->result();
			$data['kategori']=$this->model_article->get_k();
			$this->template->set('title', 'Edit Data artikle');
			$this->template->load('template_admin2', 'contents' , 'pages/table_artikle/form_update', $data);
        }
		public function update()
        {
			$where = array('id' => $this->input->post('id'));
			$this->form_validation->set_rules('judul', 'judul', 'trim|required');
			 $tanggal = date("Y-m-d H:i:s");
			$foto = $this->db->get_where('article',$where);
			//$this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');

		    if($foto->num_rows()>0){
		      $pros=$foto->row();
		      $name=$pros->gambar;
		     
		      if(file_exists($lok=FCPATH.'/assets2/img/Artikle/'.$name)){
		        unlink($lok);
		      }
		      // if(file_exists($lok=FCPATH.'/uploads/thumbnail/'.$name)){
		      //   unlink($lok);
		      // }
		  	}
			$config = array(
                        'upload_path' => './assets2/img/Artikle',
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
					$data['artikle'] = $this->model_article->get_artikle();
					$this->template->set('title', 'Input artikle');
					$this->template->load('template_admin2', 'contents' , 'pages/table_artikle/form_update',$data);	
					
				}elseif($this->upload->do_upload('gambar')) {
				$file = $this->upload->data();
				$id = $this->input->post('id');
				$where = array('id' => $id);
				$data = array(
					'judul' => $this->input->post('judul'),
					'id_kategori' => $this->input->post('id_kategori'),
					'penulis' => $this->input->post('penulis'),
                   'nama_gambar' => $this->input->post('nama_gambar'),
                   'gambar' => $file['file_name'],
                   'deskripsi' => $this->input->post('deskripsi'),
                   'tanggal' => $tanggal,
                   'status' => $this->input->post('status')
                   
                        );
					
                }elseif(!$this->upload->do_upload('gambar')){
                	$id = $this->input->post('id');
				$where = array('id' => $id);
				$data = array(
					'judul' => $this->input->post('judul'),
					'id_kategori' => $this->input->post('id_kategori'),
					'penulis' => $this->input->post('penulis'),
                  
                   'deskripsi' => $this->input->post('deskripsi'),
                   'tanggal' => $tanggal,
                   'status' => $this->input->post('status')
                   
                   
                        );
                }
                $this->model_article->update($where,$data,'article');
					redirect('cartikle/get_artikle');	
		}   
		public function detail_artikle($id='')
	{
		$row = $this->model_article->get_by_id($id);
		$data = array(
                 
                 'judul' => $row->judul,
                'penulis' => $row->penulis,
                 'kategori' => $row->kategori,
                 'deskripsi' => $row->deskripsi,
                  'nama_gambar' => $row->nama_gambar,
                      'gambar' => $row->gambar
                );
		// $data['makanan'] = $this->makanan_model->get_detail_makanan($id_makanan);
		$this->template->set('title', 'Detail Data Minuman');
		$this->template->load('template_admin', 'contents' , 'pages/table_artikle/view_detail', $data);
	}
	public function delete($id = NULL)
    {
    	$row = $this->model_article->get_by_id($id);
		// $data = array(
  //                     'file_foto' => $row->file_foto
  //               );
    	unlink('assets2/img/Artikle/'.$row->gambar);
    	$query=$this->model_article->delete($id);
    	if ($query>0) {
    		$url=base_url("cartikle/get_artikle");
    		redirect($url);
    	}
    }        
}
