<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
public function __construct(){
	parent::__construct();
	if(!isset($_SESSION['admin_masuk'])){
		redirect('administrator');
	}
	$this->load->model('m_home');
	$data['menu'] = $this->m_home->menu();
	$this->load->view('admin/master/v_menu',$data);
}

	 function index()//pengajuan terbaru
	{
		$level=$this->session->userdata('level');
		$idreg=$this->session->userdata('id_regional');
		$idcab=$this->session->userdata('id_cabang');
		if($level=='Pusat'){
		$data['pengajuan_baru']=$this->m_home->baru_pusat();
		$this->load->view('admin/v_dashboard',$data);
		}else if($level=='Regional'){
			$data['pengajuan_baru']=$this->m_home->baru_regional($idreg);
			$this->load->view('admin/v_dashboard',$data);
		}else if($level=='Cabang'){
			$data['pengajuan_baru']=$this->m_home->baru_cabang($idcab);
			$this->load->view('admin/v_dashboard',$data);
		}
	}
}
