<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() {
		parent::__construct();
		$this->load->helper(array('form',  'url'));
	    $this->load->library('form_validation');
	    $this->load->library('simple_login');
		$this->load->model('menu_model');
		$this->load->model('model_article');
		$this->load->model('gallery_model');
		$this->load->model('pemesanan_model');
		$this->simple_login->cek_login();
		$this->load->database();
	}
	public function index()
	{
		$status="publish";
		$data['images']=$this->menu_model->get_databydate();
		$data['artikle']=$this->model_article->get_join($status);
		$data['total_menu']=$this->menu_model->get_jumlahmenu();
		$data['total_gallery']=$this->gallery_model->get_jumlahgallery();
		$data['total_artikle']=$this->model_article->get_jumlahartikle();
		$data['status_art']=$this->model_article->get_status();
		$data['status']=$this->pemesanan_model->get_status();
		$this->template->set('title', 'Home');
		$this->template->load('template_admin2', 'contents' , 'pages/view_index',$data);
	}
}
