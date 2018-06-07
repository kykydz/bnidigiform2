<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Administrator extends CI_Controller{
    public function __construct(){
      parent::__construct();
      $this->load->model('m_login');
    }

function index(){
  $this->load->view('admin/v_login');
}

function auth(){
		$email = strip_tags(str_replace("'","", $this->input->post('email',TRUE)));
		$password = strip_tags(str_replace("'","", $this->input->post('password',TRUE)));

		$cek_user = $this->m_login->auth_admin($email);
		$data=$cek_user->row_array();
	if(password_verify($password,$data['password'])){

			$sesdata = array(
				'admin_masuk' => TRUE,
				'username' => $data['username'],
				'email' => $data['email'],
				'phone'=> $data['phone'],
				'level' => $data['level'],
				'id_cabang'=>$data['id_cabang'],
				'id_regional' => $data['id_regional'],
			);
			$this->session->set_userdata($sesdata);

			redirect('admin/dashboard');


		}else{
			echo $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Username Atau Password Salah</div>');
			redirect('admin');
		}
	}
}
