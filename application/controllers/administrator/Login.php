<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    var $template = 'admin/pages/login/template';
    var $title = 'Login Page';

    function __construct() {
        parent::__construct();
        $this->load->model('admin/Login_m', 'mlogin');
    }
    
    function index(){
        $data['title'] = $this->title;
        $data['content'] = 'admin/pages/login/index';
        $this->load->view($this->template, $data);
    }
    
    function auth(){
		$username = $this->input->post('admin_username');
		$password = $this->input->post('admin_password');
		$where = array(
			'admin_user_username' => $username,
			'admin_user_password' => md5($password)
        );
		$result = $this->mlogin->authCheck($where)->num_rows();
        $getData = $this->mlogin->authCheck($where)->result_array();
		if($result > 0){ 
			$data_session = array(
				'username' => $getData[0]['admin_user_profile'],
				'status' => true
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("admin"));
 
		}else{
			redirect(base_url("auth/login"));
		}
	}
    
    function logout(){
		$this->session->sess_destroy();
		redirect(base_url('auth/login'));
	}

}
