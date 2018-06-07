<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('m_home');
  }
  function index(){

    $data['dataproduk']=$this->m_home->tampil_produk();
    $data['datapensiun']=$this->m_home->suku_bunga_pensiun();
    $this->load->view('v_menu');
    $this->load->view('v_home',$data);
  }

  function simulasi(){

    $this->load->view('v_menu');
    $this->load->view('v_rekomendasi');
  }

  function pensiun(){
        $data['datapensiun']=$this->m_home->suku_bunga_pensiun();
        $penghasilan=str_replace(".","",strip_tags($this->input->post('penghasilan')));
        if(  $penghasilan!=NULL){
          $id_bunga = $this->input->post('masa_kredit');
          if($id_bunga!=NULL){
  				$data['data_bunga']=$this->m_home->get_bunga($id_bunga);
  			}else{
  				$data['data_bunga']=$this->m_home->get_bunga(1);
  			}
            $data['dsr']=70/100;
            $data['produk']='pensiun';
            $data['id_bunga']=$id_bunga;
            $data['penghasilan']=$penghasilan;
            $this->load->view('v_menu');
            $this->load->view('v_rekomendasi_pensiun_max',$data);
        }else {
            $data['max_kredit']=str_replace(".","",strip_tags($this->input->post('max_pinjaman')));
            $data['dsr']=70/100;
            $data['produk']='pensiun';
            $id_bunga = $this->input->post('masa_kredit');
            if($id_bunga!=NULL){
    				$data['data_bunga']=$this->m_home->get_bunga($id_bunga);
    			}else{
    				$data['data_bunga']=$this->m_home->get_bunga(1);
    			}
            $data['id_bunga']=$id_bunga;
            $this->load->view('v_menu');
            $this->load->view('v_rekomendasi_pensiun_penghasilan',$data);
        }
  }

  function form(){
    // if($this->session->userdata('user_masuk')!=TRUE){
				// 		$url=base_url('home');
				// 		redirect($url);
    //       }
      $this->load->view('v_menu');
      $this->load->view('v_datanasabah');
  }

  function map(){
    $this->load->view('v_menu');
    $this->load->view('v_map');
  }

function dokumen(){
  // if($this->session->userdata('user_masuk')!=TRUE){
  //         $url=base_url('home');
  //         redirect($url);
  //       }

    if($this->uri->segment(3)=='griya'){
    $this->load->view('v_menu');
    $this->load->view('v_dokgriya');
    }else if($this->uri->segment(3)=='fleksi'){
    $this->load->view('v_menu');
    $this->load->view('v_dokfleksi');
    }else if($this->uri->segment(3)=='pensiun'){
    $this->load->view('v_menu');
    $this->load->view('v_dokpensiun');
    }
  }

  function lokasi(){
    if($this->session->userdata('user_masuk')!=TRUE){
            $url=base_url('home');
            redirect($url);
          }
    $kodepengajuan=$this->uri->segment(3);
    $ambil_bank=$this->m_home->list_bank();

  //  $cabang="Jakarta";
		error_reporting(0);
		$this->load->library('googlemaps');

		        $config=array();
            $config['center']="-6.2171983,106.7852656";
            $config['zoom']=11;
            $config['map_height']="500px";
            $this->googlemaps->initialize($config);
              foreach($ambil_bank->result() as $bank):
                $nama_bank=$bank->nama_cabang;
                $idbank=$bank->id;
            $marker=array();
            $marker['position']="$bank->longlat";
            $link=  base_url('griya/pilihlokasi/'.$idbank.'/'.$kodepengajuan);
            $marker['onclick'] = "var txt;
                  var r = confirm('BNI Cabang $nama_bank');
                    if (r == true) {
                        window.location='$link';
                        } else {
                          txt = '';
                        }";
            $this->googlemaps->add_marker($marker);
          endforeach;
            $data['map']=$this->googlemaps->create_map();

    $this->load->view('v_menu');
    $this->load->view('v_lokasi',$data);
  }



function selesai(){
  if($this->session->userdata('user_masuk')!=TRUE){
          $url=base_url('home');
          redirect($url);
        }
  $nomor_pengajuan=$this->uri->segment(3);
  $this->db->select('nomor_pengajuan');
  $this->db->from('pengajuan');
  $this->db->where('nomor_pengajuan',$nomor_pengajuan);
  $nomor=$this->db->get()->row_array();
  $data['nopengajuan']=$nomor['nomor_pengajuan'];
  $this->load->view('v_menu');
  $this->load->view('v_pesan',$data);
  }

function login(){
  $this->load->view('v_login');
}

function bukarekening(){
  $this->load->view('v_menu');
  $this->load->view('v_bukarekening');
}

function carousel(){
	$this->load->view('v_carousel');
}

function profiluser(){
  $this->load->view('v_menu');
  $this->load->view('v_profiluser');
}

}
