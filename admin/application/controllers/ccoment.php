<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ccoment extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper(array('form',  'url'));
	    $this->load->library('form_validation');
		$this->load->model('coment_model');
		// $this->load->model('minuman_model');
		// $this->load->model('paket_model');
		$this->load->database();
	}

	
	public function get_coment()
        {
			$data['coment'] = $this->coment_model->get_all();
			$this->template->set('title', 'Coment');
			$this->template->load('template_admin2', 'contents' , 'pages/table_coment/view_table', $data);
        }
    }