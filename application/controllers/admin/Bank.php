<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bank extends CI_Controller {
	public function __construct(){
			parent::__construct();
			if(!isset($_SESSION['admin_masuk'])){
				redirect('Login');
			}
			$this->load->model('m_home');
			$this->load->model('m_bank');
				$this->load->library('datatables');
		}

	 function regional(){
		 $dt['menu'] = $this->m_home->menu();
		 $this->load->view('admin/master/v_menu',$dt);
		$this->load->view('admin/v_bank');
		$this->load->view('admin/master/v_footer');
	}
	function cabang(){

		$dt['menu'] = $this->m_home->menu();
		$this->load->view('admin/master/v_menu',$dt);
		$this->load->view('admin/v_bankcabang');

	}
	function data_cabang(){
		header("Content-Type: application/json");
		echo $this->m_bank->ambil_cabang_all();
	}
}
