<?php

class Login extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->library('simple_login');
                $this->load->library('template');
        }

        public function index()
        {
                $valid= $this->form_validation;
                $username=$this->input->post('username');
                $password=$this->input->post('password');
                $valid->set_rules('username','Username','required');
                $valid->set_rules('password','Password','required');
                if($valid->run()) 
                {
                        if($username=='admin'){
                        $this->simple_login->login($username,$password);
                        }
                }
                //End function login
                // $data=array('title'=> 'Halaman Login Administrator');
                // $this->load->view('view_login', $data);
                $this->template->set('title', 'Login Bimbelku');
                $this->template->load('login_layout', 'contents' , 'pages/view_login');
        }

        public function logout()
        {
                $this->simple_login->logout();
        }


}
// http://localhost/pemweblan/CIform/index.php/form