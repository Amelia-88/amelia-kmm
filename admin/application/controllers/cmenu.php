<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cmenu extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper(array('form',  'url'));
	    $this->load->library('form_validation');
		$this->load->model('menu_model');
		// $this->load->model('jenis_model');
		// $this->load->model('peminjaman_model');
		$this->load->database();
	}
	public function get_menu()
        {
			$data['menu'] = $this->menu_model->get_join();
			$this->template->set('title', 'Artikle');
			$this->template->load('template_admin2', 'contents' , 'pages/table_menu/view_table', $data);
        }
    public function form_menu()
        {
			
			$this->form_validation->set_rules('nama_menu', 'Nama Menu', 'trim|required');
			$this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
			$config = array(
                        'upload_path' => './assets2/img/Menu',
                        'allowed_types' => 'jpeg|jpg|png',
                        'max_size' => '6000',
                        'max_width' => '6000',
                        'max_height' => '6000'
                );
				 $this->load->library('upload', $config);
				 //$this->upload->initialize($config);
                if (!$this->upload->do_upload('file_foto'))
                {
					$data['menu'] = $this->menu_model->get_all();
					$data['jenis']=$this->menu_model->get_jenis();
					$this->template->set('title', 'Input Artikle');
					$this->template->load('template_admin2', 'contents' , 'pages/table_menu/form_menu' , $data);	
				}else {
				$file = $this->upload->data();
				$tanggal = date("Y-m-d H:i:s");
				$data = array(
					'nama_menu' => $this->input->post('nama_menu'),
					'harga' => $this->input->post('harga'),
					'id_jenis' => $this->input->post('id_jenis'),
					'deskripsi' => $this->input->post('deskripsi'),
					'nama_file' => $this->input->post('nama_file'),
					'file_foto' => $file['file_name'],                  
                   'tanggal' => $tanggal
                        );
					$this->menu_model->insert($data);
					redirect('cmenu/get_menu');
                }
                	
		}
		public function ubah($id_menu)
        {
			$where = array('id_menu' => $id_menu);
			//$data['jenis'] = $this->buku_model->get_jenis();
			$data['menu'] = $this->menu_model->editmenu($where,'menu')->result();
			$data['jenis']=$this->menu_model->get_jenis();
			$this->template->set('title', 'Edit Data Menu');
			$this->template->load('template_admin2', 'contents' , 'pages/table_menu/form_update', $data);
        }
		public function update()
        {
        	$id_menu = $this->input->post('id_menu');
			$where = array('id_menu' => $id_menu);
			$this->form_validation->set_rules('nama_menu', 'nama_menu', 'trim|required');
			$foto = $this->db->get_where('menu',$where);
			$this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');

		    if($foto->num_rows()>0){
		      $pros=$foto->row();
		      $tanggal = date("Y-m-d H:i:s");
		      $name=$pros->file_foto;
		     
		      if(file_exists($lok=FCPATH.'/assets2/img/Menu/'.$name)){
		        unlink($lok);
		      }
		      // if(file_exists($lok=FCPATH.'/uploads/thumbnail/'.$name)){
		      //   unlink($lok);
		      // }
		  	}
			$config = array(
                        'upload_path' => './assets2/img/Menu',
                        'allowed_types' => 'jpeg|jpg|png',
                        'max_size' => '6000',
                        'max_width' => '6000',
                        'max_height' => '6000'
                );
				 $this->load->library('upload', $config);
				 //$this->upload->initialize($config);
				 //!$this->upload->do_upload('file_foto')
				 
                if ($this->form_validation->run() == FALSE && !$this->upload->do_upload('file_foto'))
                {
					// $data['query'] = $this->makanan_model->editmakanan($where,'makanan')->result();
					$data['menu'] = $this->menu_model->get_menu();
					$this->template->set('title', 'Input artikle');
					$this->template->load('template_admin', 'contents' , 'pages/table_menu/form_update',$data);	
					
				}elseif($this->upload->do_upload('file_foto')) {
				$file = $this->upload->data();
				$id_menu = $this->input->post('id_menu');
				$where = array('id_menu' => $id_menu);
				$data = array(
					'nama_menu' => $this->input->post('nama_menu'),
					'harga' => $this->input->post('harga'),
					'id_jenis' => $this->input->post('id_jenis'),
                   'nama_file' => $this->input->post('nama_file'),
                   'file_foto' => $file['file_name'],
                   'deskripsi' => $this->input->post('deskripsi'),
                   'tanggal' => $tanggal
                   
                        );
					
                }elseif(!$this->upload->do_upload('file_fotoile')){
                	$id_menu = $this->input->post('id_menu');
				$where = array('id_menu' => $id_menu);
				$data = array(
					'nama_menu' => $this->input->post('nama_menu'),
					'harga' => $this->input->post('harga'),
					'id_jenis' => $this->input->post('id_jenis'),
                   
                   'deskripsi' => $this->input->post('deskripsi'),
                   'tanggal' => $tanggal
                   
                   
                        );
                }
                $this->menu_model->update($where,$data,'menu');
					redirect('cmenu/get_menu');	
		}
		public function delete($id_menu = NULL)
    {
    	$row = $this->menu_model->get_by_id($id_menu);
		// $data = array(
  //                     'file_foto' => $row->file_foto
  //               );
    	unlink('assets2/img/Menu'.$row->file_foto);
    	$query=$this->menu_model->delete($id_menu);
    	if ($query>0) {
    		$url=base_url("cmenu/get_menu");
    		redirect($url);
    	}
    }
}