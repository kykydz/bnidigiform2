<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
				parent::__construct();
				$this->load->model('m_login');
			}

	 
	function logout(){
			$this->session->sess_destroy();
			$url=base_url('administrator');
			redirect($url);
		}

}
