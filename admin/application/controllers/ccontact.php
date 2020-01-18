<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ccontact extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper(array('form',  'url'));
	    $this->load->library('form_validation');
		$this->load->model('contact_model');
		// $this->load->model('minuman_model');
		// $this->load->model('paket_model');
		$this->load->database();
	}

	
	public function get_contact()
        {
			$data['contact'] = $this->contact_model->get_all();
			$this->template->set('title', 'Gallery');
			$this->template->load('template_admin2', 'contents' , 'pages/table_contact/view_table', $data);
        }
    public function form_contact()
        {
			
			$this->form_validation->set_rules('kontak', 'Kontak', 'trim|required');
			$this->form_validation->set_rules('jambuka', 'jambuka', 'trim|required');
			    if ($this->form_validation->run() == FALSE)
                {
					$data['contact'] = $this->contact_model->get_all();
					
					$this->template->set('title', 'Input Gallery');
					$this->template->load('template_admin2', 'contents' , 'pages/table_contact/form_contact' , $data);	
					
				}else {
				$data = array(
					'kontak' => $this->input->post('kontak'),
                   'jambuka' => $this->input->post('jambuka'),
                   'alamat' =>$this->input->post('alamat')
                        );
					$this->contact_model->insert($data);
					redirect('ccontact/get_contact');
                }
                	
		}  
		public function ubah($id)
        {
			$where = array('id' => $id);
			//$data['jenis'] = $this->buku_model->get_jenis();
			$data['contact'] = $this->contact_model->editcontact($where,'contact')->result();
			$this->template->set('title', 'Edit Data Cpntact');
			$this->template->load('template_admin2', 'contents' , 'pages/table_contact/form_update', $data);
        }
		public function update()
        {
        		$this->form_validation->set_rules('kontak', 'kontak', 'trim|required');
                if ($this->form_validation->run() == FALSE)
                {
					// $data['query'] = $this->makanan_model->editmakanan($where,'makanan')->result();
					$where = array('id' => $id);
			//$data['jenis'] = $this->buku_model->get_jenis();
					$data['contact'] = $this->contact_model->editcontact($where,'contact')->result();
					$this->template->set('title', 'Input Gallery');
					$this->template->load('template_admin2', 'contents' , 'pages/table_contact/form_update');	
					
				}else{
                	
				$data = array(
					'kontak' => $this->input->post('kontak'),
                   'jambuka' => $this->input->post('jambuka'),
                   'alamat' =>$this->input->post('alamat')
                   
                        );
              $id = $this->input->post('id');
				$where = array('id' => $id);
                $this->contact_model->update($where,$data,'contact');
					redirect('ccontact/get_contact');   
            }
		}
	public function delete($id = NULL)
    {
    	
    	$query=$this->contact_model->delete($id);
    	if ($query>0) {
    		$url=base_url("ccontact/get_contact");
    		redirect($url);
    	}
    }        
}
