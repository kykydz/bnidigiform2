<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bunga extends CI_Controller {
	public function __construct(){
			parent::__construct();
			if(!isset($_SESSION['admin_masuk'])){
				redirect('administrator');
			}
			$this->load->model('m_home');
			$this->load->model('M_bunga');
			$this->load->library('datatables');
		}

	 function pensiun(){
		 $data['menu'] = $this->m_home->menu();
 		$this->load->view('admin/master/v_menu',$data);
 		$this->load->view('admin/v_bunga_pensiun');
	}

	function get_bunga_pensiun() { //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->M_bunga->bunga_pensiun();
  }
	function pensiun_edit(){
			$id_bunga=strip_tags($this->input->post('id_bunga'));
		$data=array(

			'jumlah_tahun'=>strip_tags($this->input->post('jumlah_tahun')),
			'suku_bunga'=>strip_tags($this->input->post('suku_bunga')),
		);
		$this->db->where('id_bunga',$id_bunga);
		$this->db->update('tbl_suku_bunga',$data);
		redirect('admin/bunga/pensiun');
	}

	function pensiun_delete(){
		$id_bunga=strip_tags($this->input->post('id_bunga'));
		$this->db->where('id_bunga',$id_bunga);
		$this->db->delete('tbl_suku_bunga');
		redirect('admin/bunga/pensiun');
	}




}
