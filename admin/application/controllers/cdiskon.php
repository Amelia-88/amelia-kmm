<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cdiskon extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper(array('form',  'url'));
	    $this->load->library('form_validation');
		$this->load->model('diskon_model');
		// $this->load->model('jenis_model');
		// $this->load->model('peminjaman_model');
		$this->load->database();
	}
	public function get_diskon()
        {
			$data['diskon'] = $this->diskon_model->get_all();
			$this->template->set('title', 'Diskon');
			$this->template->load('template_admin2', 'contents' , 'pages/table_diskon/view_table', $data);
        }
    public function form_diskon()
        {
			
			$this->form_validation->set_rules('nama_promo', 'Nama Promo', 'trim|required');
			$this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
			$config = array(
                        'upload_path' => './assets2/img/Diskon',
                        'allowed_types' => 'jpeg|jpg|png',
                        'max_size' => '6000',
                        'max_width' => '6000',
                        'max_height' => '6000'
                );
				 $this->load->library('upload', $config);
				 //$this->upload->initialize($config);
                if (!$this->upload->do_upload('file_foto'))
                {
					$data['promo'] = $this->diskon_model->get_all();
					//$data['jenis']=$this->menu_model->get_jenis();
					$this->template->set('title', 'Input Promo');
					$this->template->load('template_admin2', 'contents' , 'pages/table_diskon/form_diskon' , $data);	
					
				}else {
				$file = $this->upload->data();
				// $tb=$this->input->post('tanggal_berlaku');
				// $ts=$this->input->post('tanggal_selesai');
				$tanggal = date("Y-m-d H:i:s");
				// $tanggal_berlaku= date("Y-m-d H:i:s",strtotime($tb));
				// $tanggal_selesai= date("Y-m-d H:i:s",strtotime($ts));
				$data = array(
					'nama_promo' => $this->input->post('nama_promo'),
					'jumlah_promo' => $this->input->post('jumlah_promo'),
					'tanggal_berlaku' => $this->input->post('tanggal_berlaku'),
					'tanggal_selesai' => $this->input->post('tanggal_selesai'),
					'tanggal' => $tanggal,
					'nama_file' => $this->input->post('nama_file'),
					'file_foto' => $file['file_name'],                  
					'deskripsi' => $this->input->post('deskripsi')
                   
                        );
					$this->diskon_model->insert($data);
					redirect('cdiskon/get_diskon');
                }
                	
		}
		public function ubah($id_promo)
        {
			$where = array('id_promo' => $id_promo);
			//$data['jenis'] = $this->buku_model->get_jenis();
			$data['promo'] = $this->diskon_model->editdiskon($where,'promo')->result();
			//$data['jenis']=$this->menu_model->get_jenis();
			$this->template->set('title', 'Edit Data Promo');
			$this->template->load('template_admin2', 'contents' , 'pages/table_diskon/form_update', $data);
        }
		public function update()
        {
        	$id_promo = $this->input->post('id_promo');
			$where = array('id_promo' => $id_promo);
			$tanggal = date("Y-m-d H:i:s");
			$this->form_validation->set_rules('nama_promo', 'nama_promo', 'trim|required');
			$foto = $this->db->get_where('promo',$where);
			$this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');

		    if($foto->num_rows()>0){
		      $pros=$foto->row();
		      $tanggal = date("Y-m-d H:i:s");
		      $name=$pros->file_foto;
		     
		      if(file_exists($lok=FCPATH.'/assets2/img/Diskon/'.$name)){
		        unlink($lok);
		      }
		      // if(file_exists($lok=FCPATH.'/uploads/thumbnail/'.$name)){
		      //   unlink($lok);
		      // }
		  	}
		  	
			$config = array(
                        'upload_path' => './assets2/img/Diskon',
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
					$data['promo'] = $this->diskon_model->get_menu();
					$this->template->set('title', 'Input Promo');
					$this->template->load('template_admin2', 'contents' , 'pages/table_diskon/form_update',$data);	
					
				}elseif($this->upload->do_upload('file_foto')) {
				$file = $this->upload->data();
				$id_promo = $this->input->post('id_promo');
				$where = array('id_promo' => $id_promo);
				$data = array(
					'nama_promo' => $this->input->post('nama_promo'),
					'jumlah_promo' => $this->input->post('jumlah_promo'),
					'tanggal_berlaku' => $this->input->post('tanggal_berlaku'),
					'tanggal_selesai' => $this->input->post('tanggal_selesai'),
					'tanggal' => $tanggal,
					'nama_file' => $this->input->post('nama_file'),
					'file_foto' => $file['file_name'],                  
					'deskripsi' => $this->input->post('deskripsi')
                   
                        );
					
                }elseif(!$this->upload->do_upload('file_fotoile')){
                	$id_promo = $this->input->post('id_promo');
				$where = array('id_promo' => $id_promo);
				$data = array(
					'nama_promo' => $this->input->post('nama_promo'),
					'jumlah_promo' => $this->input->post('jumlah_promo'),
					'tanggal_berlaku' => $this->input->post('tanggal_berlaku'),
					'tanggal_selesai' => $this->input->post('tanggal_selesai'),
					'tanggal' => $tanggal,
					'deskripsi' => $this->input->post('deskripsi')
                   
                   
                        );
                }
                $this->diskon_model->update($where,$data,'promo');
					redirect('cdiskon/get_diskon');	
		}
		public function delete($id_promo = NULL)
    {
    	$row = $this->diskon_model->get_by_id($id_promo);
		// $data = array(
  //                     'file_foto' => $row->file_foto
  //               );
    	unlink('assets2/img/Diskon/'.$row->file_foto);
    	$query=$this->diskon_model->delete($id_promo);
    	if ($query>0) {
    		$url=base_url("cdiskon/get_diskon");
    		redirect($url);
    	}
    }
}