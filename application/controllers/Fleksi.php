<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Fleksi extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('m_fleksi');
    $this->load->model('m_griya');
    $this->load->library('upload');
  }

  function dokumen_fleksi(){
      $config['upload_path']   = './assets/images/users/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg|PNG';


      $this->upload->initialize($config);
      if(!empty($_FILES['foto_ktppemohon']['name'])){
         $this->upload->do_upload('foto_ktppemohon');
         $upload = $this->upload->data();
                          $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/users/'.$upload['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        //$config['quality']= '80%';
	                       // $config['width']= 700;
	                        //$config['height']= 700;
	                        $config['new_image']= './assets/images/users/'.$upload['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();
				 $ktppemohon =  $upload['file_name'];
			 }else{
         $ktppemohon ='';
       }
      if(!empty($_FILES['foto_npwp']['name'])){
         $this->upload->do_upload('foto_npwp');
         $upload = $this->upload->data();
                          $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/users/'.$upload['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '80%';
	                        //$config['width']= 700;
	                        //$config['height']= 700;
	                        $config['new_image']= './assets/images/users/'.$upload['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();
				 $npwp =  $upload['file_name'];
			 }else{
         $npwp ='';
       }
      if(!empty($_FILES['foto_rekening']['name'])){
         $this->upload->do_upload('foto_rekening');
         $upload = $this->upload->data();
                          $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/users/'.$upload['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '80%';
	                        $config['width']= 700;
	                        $config['height']= 700;
	                        $config['new_image']= './assets/images/users/'.$upload['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();
				 $foto_rekening =  $upload['file_name'];
			 }else{
         $foto_rekening ='';
       }
       if(!empty($_FILES['foto_slipgaji']['name'])){
          $this->upload->do_upload('foto_slipgaji');
          $upload = $this->upload->data();
                           $config['image_library']='gd2';
                          $config['source_image']='./assets/images/users/'.$upload['file_name'];
                          $config['create_thumb']= FALSE;
                          $config['maintain_ratio']= FALSE;
                          $config['quality']= '80%';
                          $config['width']= 700;
                          $config['height']= 700;
                          $config['new_image']= './assets/images/users/'.$upload['file_name'];
                          $this->load->library('image_lib', $config);
                          $this->image_lib->resize();
         $slipgaji =  $upload['file_name'];
       }else{
          $slipgaji ='';
        }
        if(!empty($_FILES['foto_pasfoto']['name'])){
           $this->upload->do_upload('foto_pasfoto');
           $upload = $this->upload->data();
                            $config['image_library']='gd2';
                            $config['source_image']='./assets/images/users/'.$upload['file_name'];
                            $config['create_thumb']= FALSE;
                            $config['maintain_ratio']= FALSE;
                            $config['quality']= '80%';
                            $config['width']= 700;
                            $config['height']= 700;
                            $config['new_image']= './assets/images/users/'.$upload['file_name'];
                            $this->load->library('image_lib', $config);
                            $this->image_lib->resize();
           $pasfoto =  $upload['file_name'];
         }else{
           $pasfoto ='';
         }
         if(!empty($_FILES['foto_surat_sk']['name'])){
            $this->upload->do_upload('foto_surat_sk');
            $upload = $this->upload->data();
                             $config['image_library']='gd2';
                            $config['source_image']='./assets/images/users/'.$upload['file_name'];
                            $config['create_thumb']= FALSE;
                            $config['maintain_ratio']= FALSE;
                            $config['quality']= '80%';
                            $config['width']= 700;
                            $config['height']= 700;
                            $config['new_image']= './assets/images/users/'.$upload['file_name'];
                            $this->load->library('image_lib', $config);
                            $this->image_lib->resize();
           $sk =  $upload['file_name'];
         }else{
            $sk ='';
          }
          if(!empty($_FILES['foto_surat_payroll']['name'])){
             $this->upload->do_upload('foto_surat_payroll');
             $upload = $this->upload->data();
                              $config['image_library']='gd2';
                              $config['source_image']='./assets/images/users/'.$upload['file_name'];
                              $config['create_thumb']= FALSE;
                              $config['maintain_ratio']= FALSE;
                              $config['quality']= '80%';
                              $config['width']= 700;
                              $config['height']= 700;
                              $config['new_image']= './assets/images/users/'.$upload['file_name'];
                              $this->load->library('image_lib', $config);
                              $this->image_lib->resize();
             $payroll =  $upload['file_name'];
           }else{
             $payroll ='';
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
      $this->db->where('id_produk',1);
      $this->db->order_by('id_pengajuan','DESC');
      $this->db->limit(1);
      $ambil_last_number=$this->db->get();
      $hasil=$ambil_last_number->row_array();
      $last_nomor=$hasil['nomor_pengajuan'];
        $unik=rand(100,999);
      if($last_nomor!=NULL){
      $angka=(int) substr($last_nomor,12,5);
      $angka++;

      $char="FLEKSI-$unik-";
      $kode_pengajuan = $char . sprintf("%05s",$angka);

    }else{
      $kode_pengajuan="FLEKSI-$unik-00001";

    }

      $datapengajuan=array(
        'nomor_pengajuan'=>$kode_pengajuan,
        'id_nasabah'=>$id_nasabah,
        'id_produk'=>$idproduk,
        'id_cabang'=>'',
        'status'=>'Belum Diperiksa'
      );

       $pengajuan=$this->m_griya->save_pengajuan($datapengajuan);


         $dokumen_fleksi=array(
           'id_pengajuan'=>$pengajuan,
           'ktp'=>$ktppemohon,
           'npwp_sph'=>$npwp,
           'rekening'=>$foto_rekening,
           'slip_gaji'=>$slipgaji,
           'pas_photo'=>$pasfoto,
           'surat_pernyataan'=>$payroll,
           'surat_masakerja'=>$sk
         );
         $save_dokumen=$this->m_fleksi->save_dokumenfleksi($dokumen_fleksi);
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
