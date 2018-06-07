<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Pensiun extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('m_pensiun');
    $this->load->model('m_griya');
    $this->load->library('upload');
  }

  function dokumen_pensiun(){
      $config['upload_path']   = './assets/images/pensiun/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg|PNG';


      $this->upload->initialize($config);
      if(!empty($_FILES['foto_ktp']['name'])){
         $this->upload->do_upload('foto_ktp');
         $upload = $this->upload->data();
                          $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/pensiun/'.$upload['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        //$config['quality']= '80%';
	                        //$config['width']= 700;
	                        //$config['height']= 700;
	                        $config['new_image']= './assets/images/pensiun/'.$upload['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();
				 $ktp =  $upload['file_name'];
			 }else{
         $ktp ='';
       }
      if(!empty($_FILES['foto_kk']['name'])){
         $this->upload->do_upload('foto_kk');
         $upload = $this->upload->data();
                          $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/pensiun/'.$upload['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '80%';
	                        //$config['width']= 700;
	                        //$config['height']= 700;
	                        $config['new_image']= './assets/images/pensiun/'.$upload['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();
				 $kk =  $upload['file_name'];
			 }else{
         $kk ='';
       }
      if(!empty($_FILES['foto_buku_tabungan']['name'])){
         $this->upload->do_upload('foto_buku_tabungan');
         $upload = $this->upload->data();
                          $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/pensiun/'.$upload['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '80%';
	                        //$config['width']= 700;
	                        //$config['height']= 700;
	                        $config['new_image']= './assets/images/pensiun/'.$upload['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();
				 $foto_bukutabungan =  $upload['file_name'];
			 }else{
         $foto_bukutabungan ='';
       }
       if(!empty($_FILES['foto_slipgaji']['name'])){
          $this->upload->do_upload('foto_slipgaji');
          $upload = $this->upload->data();
                           $config['image_library']='gd2';
                          $config['source_image']='./assets/images/pensiun/'.$upload['file_name'];
                          $config['create_thumb']= FALSE;
                          $config['maintain_ratio']= FALSE;
                         // $config['quality']= '80%';
                          //$config['width']= 700;
                          //$config['height']= 700;
                          $config['new_image']= './assets/images/pensiun/'.$upload['file_name'];
                          $this->load->library('image_lib', $config);
                          $this->image_lib->resize();
         $slipgaji =  $upload['file_name'];
       }else{
          $slipgaji ='';
        }
       if(!empty($_FILES['foto_npwp']['name'])){
          $this->upload->do_upload('foto_npwp');
          $upload = $this->upload->data();
                           $config['image_library']='gd2';
                          $config['source_image']='./assets/images/pensiun/'.$upload['file_name'];
                          $config['create_thumb']= FALSE;
                          $config['maintain_ratio']= FALSE;
                          $config['quality']= '80%';
                          $config['width']= 700;
                          $config['height']= 700;
                          $config['new_image']= './assets/images/pensiun/'.$upload['file_name'];
                          $this->load->library('image_lib', $config);
                          $this->image_lib->resize();
         $npwp =  $upload['file_name'];
       }else{
          $npwp ='';
        }
        if(!empty($_FILES['foto_rc']['name'])){
           $this->upload->do_upload('foto_rc');
           $upload = $this->upload->data();
                            $config['image_library']='gd2';
                            $config['source_image']='./assets/images/pensiun/'.$upload['file_name'];
                            $config['create_thumb']= FALSE;
                            $config['maintain_ratio']= FALSE;
                            $config['quality']= '80%';
                            $config['width']= 700;
                            $config['height']= 700;
                            $config['new_image']= './assets/images/pensiun/'.$upload['file_name'];
                            $this->load->library('image_lib', $config);
                            $this->image_lib->resize();
           $foto_rc =  $upload['file_name'];
         }else{
           $foto_rc ='';
         }
         if(!empty($_FILES['foto_kgb']['name'])){
            $this->upload->do_upload('foto_kgb');
            $upload = $this->upload->data();
                             $config['image_library']='gd2';
                            $config['source_image']='./assets/images/pensiun/'.$upload['file_name'];
                            $config['create_thumb']= FALSE;
                            $config['maintain_ratio']= FALSE;
                            $config['quality']= '80%';
                            $config['width']= 700;
                            $config['height']= 700;
                            $config['new_image']= './assets/images/pensiun/'.$upload['file_name'];
                            $this->load->library('image_lib', $config);
                            $this->image_lib->resize();
           $foto_kgb =  $upload['file_name'];
         }else{
            $foto_kgb ='';
          }
          if(!empty($_FILES['foto_sk_pertama']['name'])){
             $this->upload->do_upload('foto_sk_pertama');
             $upload = $this->upload->data();
                              $config['image_library']='gd2';
                              $config['source_image']='./assets/images/pensiun/'.$upload['file_name'];
                              $config['create_thumb']= FALSE;
                              $config['maintain_ratio']= FALSE;
                              $config['quality']= '80%';
                              $config['width']= 700;
                              $config['height']= 700;
                              $config['new_image']= './assets/images/pensiun/'.$upload['file_name'];
                              $this->load->library('image_lib', $config);
                              $this->image_lib->resize();
             $foto_sk_pertama =  $upload['file_name'];
           }else{
             $foto_sk_pertama ='';
           }
          if(!empty($_FILES['foto_sk_terakhir']['name'])){
             $this->upload->do_upload('foto_sk_terakhir');
             $upload = $this->upload->data();
                              $config['image_library']='gd2';
                              $config['source_image']='./assets/images/pensiun/'.$upload['file_name'];
                              $config['create_thumb']= FALSE;
                              $config['maintain_ratio']= FALSE;
                              $config['quality']= '80%';
                              $config['width']= 700;
                              $config['height']= 700;
                              $config['new_image']= './assets/images/pensiun/'.$upload['file_name'];
                              $this->load->library('image_lib', $config);
                              $this->image_lib->resize();
             $foto_sk_terakhir =  $upload['file_name'];
           }else{
             $foto_sk_terakhir ='';
           }
          if(!empty($_FILES['foto_sk_pensiun']['name'])){
             $this->upload->do_upload('foto_sk_pensiun');
             $upload = $this->upload->data();
                              $config['image_library']='gd2';
                              $config['source_image']='./assets/images/pensiun/'.$upload['file_name'];
                              $config['create_thumb']= FALSE;
                              $config['maintain_ratio']= FALSE;
                              $config['quality']= '80%';
                              $config['width']= 700;
                              $config['height']= 700;
                              $config['new_image']= './assets/images/pensiun/'.$upload['file_name'];
                              $this->load->library('image_lib', $config);
                              $this->image_lib->resize();
             $foto_sk_pensiun =  $upload['file_name'];
           }else{
             $foto_sk_pensiun ='';
           }
          if(!empty($_FILES['foto_terbaru']['name'])){
             $this->upload->do_upload('foto_terbaru');
             $upload = $this->upload->data();
                              $config['image_library']='gd2';
                              $config['source_image']='./assets/images/pensiun/'.$upload['file_name'];
                              $config['create_thumb']= FALSE;
                              $config['maintain_ratio']= FALSE;
                              $config['quality']= '80%';
                              $config['width']= 700;
                              $config['height']= 700;
                              $config['new_image']= './assets/images/pensiun/'.$upload['file_name'];
                              $this->load->library('image_lib', $config);
                              $this->image_lib->resize();
             $foto_terbaru =  $upload['file_name'];
           }else{
             $foto_terbaru ='';
           }
          if(!empty($_FILES['foto_bukti']['name'])){
             $this->upload->do_upload('foto_bukti');
             $upload = $this->upload->data();
                              $config['image_library']='gd2';
                              $config['source_image']='./assets/images/pensiun/'.$upload['file_name'];
                              $config['create_thumb']= FALSE;
                              $config['maintain_ratio']= FALSE;
                              $config['quality']= '80%';
                              $config['width']= 700;
                              $config['height']= 700;
                              $config['new_image']= './assets/images/pensiun/'.$upload['file_name'];
                              $this->load->library('image_lib', $config);
                              $this->image_lib->resize();
             $foto_bukti =  $upload['file_name'];
           }else{
             $foto_bukti ='';
           }

       $kode=$this->uri->segment(3);
       $this->db->select('id');
       $this->db->from('tbl_produk');
       $this->db->where('form_simulasi',$kode);
       $query=$this->db->get();
      $hsl= $query->row_array();
      $idproduk=$hsl['id'];

      $id_nasabah=strip_tags($this->input->post('id_nasabah'));


      $this->db->select('nomor_pengajuan');
      $this->db->from('pengajuan');
      $this->db->where('id_produk',3);
      $this->db->order_by('id_pengajuan','DESC');
      $this->db->limit(1);
      $ambil_last_number=$this->db->get();
      $hasil=$ambil_last_number->row_array();
      $last_nomor=$hasil['nomor_pengajuan'];
        $unik=rand(100,999);
      if($last_nomor!=NULL){
      $angka=(int) substr($last_nomor,13,5);
      $angka++;

      $char="PENSIUN-$unik-";
      $kode_pengajuan = $char . sprintf("%05s",$angka);

    }else{
      $kode_pengajuan="PENSIUN-$unik-00001";

    }

      $datapengajuan=array(
        'nomor_pengajuan'=>$kode_pengajuan,
        'id_nasabah'=>$id_nasabah,
        'id_produk'=>$idproduk,
        'id_cabang'=>'',
        'status'=>'Belum Diperiksa'
      );

       $pengajuan=$this->m_griya->save_pengajuan($datapengajuan);


         $dokumen_pensiun=array(
           'id_pengajuan'=>$pengajuan,
           'ktp'=>$ktp,
           'kk'=>$kk,
           'buku_tabungan'=>$foto_bukutabungan,
           'slip_gaji'=>$slipgaji,
           'npwp'=>$npwp,
           'rc_pinjaman'=>$foto_rc,
           'sk_kgb'=>$foto_kgb,
           'sk_pengangkatan'=>$foto_sk_pertama,
           'sk_terakhir'=>$foto_sk_terakhir,
           'sk_pensiun'=>$foto_sk_pensiun,
           'pas_photo'=>$foto_terbaru,
           'foto_bukti'=>$foto_bukti
         );
         $save_dokumen=$this->m_pensiun->save_dokumenpensiun($dokumen_pensiun);
         if($save_dokumen){
           redirect("home/lokasi/".$kode_pengajuan);
         }else{
           redirect('home/dokumen/'.$kode);
         }

     }
  function pilihlokasi(){
       $id_bank = $this->uri->segment(3);
       $kode_pengajuan = $this->uri->segment(4);
       $lokasi=$this->m_griya->pilih_lokasi($id_bank,$kode_pengajuan);
       if($lokasi){
         redirect('home/selesai/'.$kode_pengajuan);
       }else{
         redirect('home/lokasi'.$kode_pengajuan);
       }
     }



}
