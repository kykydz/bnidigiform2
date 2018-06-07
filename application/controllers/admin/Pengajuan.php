<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan extends CI_Controller {
	public function __construct(){
			parent::__construct();
			if(!isset($_SESSION['admin_masuk'])){
				redirect('administrator');
			}
			$this->load->model('m_home');
			$this->load->model('m_pengajuan');
			$data['menu'] = $this->m_home->menu();
			$this->load->view('admin/master/v_menu',$data);

		}

	 function index()
	{
		$level = $this->session->userdata('level');
		$id_regional = $this->session->userdata('id_regional');
		$id_cabang = $this->session->userdata('id_cabang');
			if($level=='Pusat'){
			$data['dataproduk']=$this->m_pengajuan->semua();
			$this->load->view('admin/v_pengajuan',$data);
			$this->load->view('admin/master/v_footer');

			}else if($level=='Regional'){

			$data['dataproduk']=$this->m_pengajuan->semua_regional($id_regional);
			$this->load->view('admin/v_pengajuan',$data);
			$this->load->view('admin/master/v_footer');

			}else if($level=='Cabang'){

			$data['dataproduk']=$this->m_pengajuan->semua_cabang($id_cabang);
			$this->load->view('admin/v_pengajuan',$data);
			$this->load->view('admin/master/v_footer');
			}

	}

	 function produk(){
	 $id_cabang = $this->session->userdata('id_cabang');
	 $level = $this->session->userdata('level');
	 $id_regional = $this->session->userdata('id_regional');
		if($level=='Pusat'){
		$idproduk=$this->uri->segment(4);
		$data['dataproduk']=$this->m_pengajuan->produk($idproduk);
		$this->load->view('admin/v_pengajuan',$data);
		$this->load->view('admin/master/v_footer');
		}
		else if($level=='Regional'){

		$idproduk=$this->uri->segment(4);
 		$data['dataproduk']=$this->m_pengajuan->produk_regional($idproduk,$id_regional);
 		$this->load->view('admin/v_pengajuan',$data);
 		$this->load->view('admin/master/v_footer');
		}
		else if($level=='Cabang'){
			$idproduk=$this->uri->segment(3);
			$data['dataproduk']=$this->m_pengajuan->produk_cabang($idproduk,$id_cabang);
			$this->load->view('admin/v_pengajuan',$data);
			$this->load->view('admin/master/v_footer');
		}

	}

	function verifikasi(){
		$idpengajuan=$this->uri->segment(4);
		$produk=$this->m_pengajuan->cek_produk($idpengajuan);
		$idp=$produk->row_array();
		$tabel=$idp['tabel_dokumen'];
		$data['jenis']=$tabel;
		$data['datapengajuan']=$this->m_pengajuan->verifikasi($idpengajuan,$tabel);
		if($tabel=='dok_fleksi'){
		$this->load->view('admin/v_fleksi',$data);
	}else if($tabel=='dok_griya'){
		$this->load->view('admin/v_griya',$data);
	}else if($tabel=='dok_pensiun'){
		$this->load->view('admin/v_pensiun',$data);
	}
		$this->load->view('admin/master/v_footer');
	}


}
