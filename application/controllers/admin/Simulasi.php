<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simulasi extends CI_Controller {
	public function __construct(){
			parent::__construct();
			if(!isset($_SESSION['admin_masuk'])){
				redirect('administrator');
			}
			$this->load->model('m_home');

			$data['menu'] = $this->m_home->menu();
			$this->load->view('admin/master/v_menu',$data);

		}

	 function griya(){

		$data['simulasi']='Griya';
		$this->load->view('admin/v_simulasi',$data);
		$this->load->view('admin/master/v_footer');
	}
	function fleksi(){

	 $data['simulasi']='Fleksi';
	 $this->load->view('admin/v_simulasi',$data);
	 $this->load->view('admin/master/v_footer');
 }
 function pensiun(){

	$data['simulasi']='Fleksi Pensiun';
	$this->load->view('admin/v_simulasi',$data);
	$this->load->view('admin/master/v_footer');
}
}
