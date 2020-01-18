<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cpemesanan extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper(array('form',  'url'));
	    $this->load->library('form_validation');
		$this->load->model('pemesanan_model');
		// $this->load->model('jenis_model');
		// $this->load->model('peminjaman_model');
		$this->load->database();
	}
	public function get_pemesanan()
        {
			$data['pemesanan'] = $this->pemesanan_model->get_join();
			$this->template->set('title', 'Artikle');
			$this->template->load('template_admin2', 'contents' , 'pages/table_pemesanan/view_table', $data);
        }
    public function ubah($id_pemesanan)
        {
        	$where = array('id_pemesanan' => $id_pemesanan);
			$data=array(
			'status'=>"sudah"
			);
			$this->pemesanan_model->update($where,$data,'detail_pemesanan');
					redirect('cpemesanan/get_pemesanan');	

        }
    
		public function delete($id_pemesanan = NULL)
    {
    	$query=$this->pemesanan_model->delete($id_pemesanan);
    	if ($query>0) {
    		$url=base_url("cpemesanan/get_pemesanan");
    		redirect($url);
    	}
    }
}