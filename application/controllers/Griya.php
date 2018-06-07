<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Griya extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('m_griya');
    $this->load->library('upload');
  }
  function savenasabahgriya(){
    $urls=$this->uri->segment(3);
    $datagriya = array(
        'id_user' => $id_user=strip_tags(str_replace("'", "", $this->input->post('id_user'))),
        'nama_nasabah' => $nama=strip_tags(str_replace("'", "", $this->input->post('griya_nama'))),
        'nik' => $nik=strip_tags(str_replace("'", "", $this->input->post('griya_nik'))),
        'nohp' =>   $hp=strip_tags(str_replace("'", "", $this->input->post('griya_handphone'))),
        'tgl_lahir' => $tgl_lahir=strip_tags(str_replace("'", "", $this->input->post('griya_tanggal_lahir'))),
        'tempat_lahir' => $tempat_lahir=strip_tags(str_replace("'", "", $this->input->post('griya_tempat_lahir'))),
        'pekerjaan' => '',
        'jenis_pekerjaan' => $jenis_pekerjaan=strip_tags(str_replace("'", "", $this->input->post('griya_jenis_pekerjaan'))),
        'no_npwp' =>   $griya_npwp=strip_tags(str_replace("'", "", $this->input->post('griya_npwp'))),
        'alamat_ktp' => $alamatktp=strip_tags(str_replace("'", "", $this->input->post('griya_alamatktp'))),
        'alamat_domisili' => $alamat_sekarang=strip_tags(str_replace("'", "", $this->input->post('griya_alamat_sekarang'))),
        'status_perkawinan' => $status_kawin=strip_tags(str_replace("'", "", $this->input->post('griya_status_perkawinan'))),
        'payroll_bni' => $status_kawin=strip_tags(str_replace("'", "", $this->input->post('payroll_bni'))),
        'telepon' =>$telepon=strip_tags(str_replace("'", "", $this->input->post('griya_telepon'))),

  );
    $save = $this->m_griya->save_griya($datagriya);
    if($save){
      redirect('home/dokumen/'.$urls);
    }else{
      $urlx=$this->agent->referrer();
      redirect($urlx);
    }
  }

  function dokumen_griya(){
      $config['upload_path']   = './assets/images/griya/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg|PNG';


      $this->upload->initialize($config);
      if(!empty($_FILES['foto_ktpsuami']['name'])){
         $this->upload->do_upload('foto_ktpsuami');
         $upload = $this->upload->data();
							$config['image_library']='gd2';
	                        $config['source_image']='./assets/images/griya/'.$upload['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '80%';
	                        //$config['width']= 700;
	                        //$config['height']= 700;
	                        $config['new_image']= './assets/images/griya/'.$upload['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();
				 $ktpsuami =  $upload['file_name'];
			 }else{
         $ktpsuami ='';
       }
      if(!empty($_FILES['foto_ktpistri']['name'])){
         $this->upload->do_upload('foto_ktpistri');
         $upload = $this->upload->data();
                          $config['image_library']='gd2';
                         $config['source_image']='./assets/images/griya/'.$upload['file_name'];
                         $config['create_thumb']= FALSE;
                         $config['maintain_ratio']= FALSE;
                         $config['quality']= '80%';
                         //$config['width']= 700;
                         //$config['height']= 700;
                         $config['new_image']= './assets/images/griya/'.$upload['file_name'];
                         $this->load->library('image_lib', $config);
                         $this->image_lib->resize();
				 $ktpistri = $upload['file_name'];
			 }else{
         $ktpistri='';
       }
      if(!empty($_FILES['foto_kk']['name'])){
         $this->upload->do_upload('foto_kk');
         $upload = $this->upload->data();
                          $config['image_library']='gd2';
                         $config['source_image']='./assets/images/griya/'.$upload['file_name'];
                         $config['create_thumb']= FALSE;
                         $config['maintain_ratio']= FALSE;
                         $config['quality']= '80%';
                         //$config['width']= 700;
                        // $config['height']= 700;
                         $config['new_image']= './assets/images/griya/'.$upload['file_name'];
                         $this->load->library('image_lib', $config);
                         $this->image_lib->resize();
				 $kk = $upload['file_name'];
			 }else{
         $kk='';
       }
      if(!empty($_FILES['foto_suratnikah']['name'])){
         $this->upload->do_upload('foto_suratnikah');
         $upload = $this->upload->data();
                          $config['image_library']='gd2';
                         $config['source_image']='./assets/images/griya/'.$upload['file_name'];
                         $config['create_thumb']= FALSE;
                         $config['maintain_ratio']= FALSE;
                         $config['quality']= '80%';
                        // $config['width']= 700;
                         //$config['height']= 700;
                         $config['new_image']= './assets/images/griya/'.$upload['file_name'];
                         $this->load->library('image_lib', $config);
                         $this->image_lib->resize();
				 $suratnikah = $upload['file_name'];
			 }else{
         $suratnikah='';
       }
      if(!empty($_FILES['foto_npwp']['name'])){
         $this->upload->do_upload('foto_npwp');
         $upload = $this->upload->data();
                          $config['image_library']='gd2';
                         $config['source_image']='./assets/images/griya/'.$upload['file_name'];
                         $config['create_thumb']= FALSE;
                         $config['maintain_ratio']= FALSE;
                         $config['quality']= '80%';
                        // $config['width']= 700;
                        // $config['height']= 700;
                         $config['new_image']= './assets/images/griya/'.$upload['file_name'];
                         $this->load->library('image_lib', $config);
                         $this->image_lib->resize();
				 $npwp = $upload['file_name'];
			 }else{
         $npwp='';
       }
       if(!empty($_FILES['foto_rekgaji']['name'])){
          $this->upload->do_upload('foto_rekgaji');
          $upload = $this->upload->data();
                           $config['image_library']='gd2';
                           $config['source_image']='./assets/images/griya/'.$upload['file_name'];
                           $config['create_thumb']= FALSE;
                           $config['maintain_ratio']= FALSE;
                           $config['quality']= '80%';
                          // $config['width']= 700;
                          // $config['height']= 700;
                           $config['new_image']= './assets/images/griya/'.$upload['file_name'];
                           $this->load->library('image_lib', $config);
                           $this->image_lib->resize();
 				 $rekgaji = $upload['file_name'];
 			 }else{
         $rekgaji='';
       }
       if(!empty($_FILES['foto_rekkoran']['name'])){
          $this->upload->do_upload('foto_rekkoran');
          $upload = $this->upload->data();
                           $config['image_library']='gd2';
                           $config['source_image']='./assets/images/griya/'.$upload['file_name'];
                           $config['create_thumb']= FALSE;
                           $config['maintain_ratio']= FALSE;
                           $config['quality']= '80%';
                          // $config['width']= 700;
                          // $config['height']= 700;
                           $config['new_image']= './assets/images/griya/'.$upload['file_name'];
                           $this->load->library('image_lib', $config);
                           $this->image_lib->resize();
 				 $rekkoran = $upload['file_name'];
 			 }else{
         $rekkoran='';
       }
       if(!empty($_FILES['foto_sk']['name'])){
          $this->upload->do_upload('foto_sk');
          $upload = $this->upload->data();
                           $config['image_library']='gd2';
                           $config['source_image']='./assets/images/griya/'.$upload['file_name'];
                           $config['create_thumb']= FALSE;
                           $config['maintain_ratio']= FALSE;
                           $config['quality']= '80%';
                          // $config['width']= 700;
                          // $config['height']= 700;
                           $config['new_image']= './assets/images/griya/'.$upload['file_name'];
                           $this->load->library('image_lib', $config);
                           $this->image_lib->resize();
 				 $sk = $upload['file_name'];
 			 }else{
         $sk='';
       }
       if(!empty($_FILES['foto_izin_praktek']['name'])){
          $this->upload->do_upload('foto_izin_praktek');
          $upload = $this->upload->data();
                           $config['image_library']='gd2';
                           $config['source_image']='./assets/images/griya/'.$upload['file_name'];
                           $config['create_thumb']= FALSE;
                           $config['maintain_ratio']= FALSE;
                           $config['quality']= '80%';
                          // $config['width']= 700;
                          // $config['height']= 700;
                           $config['new_image']= './assets/images/griya/'.$upload['file_name'];
                           $this->load->library('image_lib', $config);
                           $this->image_lib->resize();
 				 $ijinparaktek = $upload['file_name'];
 			 }else{
         $ijinparaktek='';
       }
       if(!empty($_FILES['foto_legalitas_usaha']['name'])){
          $this->upload->do_upload('foto_legalitas_usaha');
          $upload = $this->upload->data();
                           $config['image_library']='gd2';
                           $config['source_image']='./assets/images/griya/'.$upload['file_name'];
                           $config['create_thumb']= FALSE;
                           $config['maintain_ratio']= FALSE;
                           $config['quality']= '80%';
                          // $config['width']= 700;
                         //  $config['height']= 700;
                           $config['new_image']= './assets/images/griya/'.$upload['file_name'];
                           $this->load->library('image_lib', $config);
                           $this->image_lib->resize();
 				 $legalitasusaha = $upload['file_name'];
 			 }else{
         $legalitasusaha='';
       }
       if(!empty($_FILES['foto_pasphoto_pemohonsuami']['name'])){
          $this->upload->do_upload('foto_pasphoto_pemohonsuami');
          $upload = $this->upload->data();
                           $config['image_library']='gd2';
                           $config['source_image']='./assets/images/griya/'.$upload['file_name'];
                           $config['create_thumb']= FALSE;
                           $config['maintain_ratio']= FALSE;
                           $config['quality']= '80%';
                          // $config['width']= 700;
                          // $config['height']= 700;
                           $config['new_image']= './assets/images/griya/'.$upload['file_name'];
                           $this->load->library('image_lib', $config);
                           $this->image_lib->resize();
 				 $foto_suami = $upload['file_name'];
 			 }else{
         $foto_suami='';
       }
       if(!empty($_FILES['foto_pasphoto_pemohonistri']['name'])){
          $this->upload->do_upload('foto_pasphoto_pemohonistri');
          $upload = $this->upload->data();
                           $config['image_library']='gd2';
                           $config['source_image']='./assets/images/griya/'.$upload['file_name'];
                           $config['create_thumb']= FALSE;
                           $config['maintain_ratio']= FALSE;
                           $config['quality']= '80%';
                          // $config['width']= 700;
                          // $config['height']= 700;
                           $config['new_image']= './assets/images/griya/'.$upload['file_name'];
                           $this->load->library('image_lib', $config);
                           $this->image_lib->resize();
 				 $foto_istri = $upload['file_name'];
 			 }else{
         $foto_istri='';
       }
       if(!empty($_FILES['dokumen_jaminan']['name'])){
          $this->upload->do_upload('dokumen_jaminan');
          $upload = $this->upload->data();
                           $config['image_library']='gd2';
                           $config['source_image']='./assets/images/griya/'.$upload['file_name'];
                           $config['create_thumb']= FALSE;
                           $config['maintain_ratio']= FALSE;
                           $config['quality']= '80%';
                           //$config['width']= 700;
                          // $config['height']= 700;
                           $config['new_image']= './assets/images/griya/'.$upload['file_name'];
                           $this->load->library('image_lib', $config);
                           $this->image_lib->resize();
 				 $dokumen_jaminan = $upload['file_name'];
 			 }else{
         $dokumen_jaminan='';
       }
       if(!empty($_FILES['laporan_keuangan']['name'])){
          $this->upload->do_upload('laporan_keuangan');
          $upload = $this->upload->data();
                           $config['image_library']='gd2';
                           $config['source_image']='./assets/images/griya/'.$upload['file_name'];
                           $config['create_thumb']= FALSE;
                           $config['maintain_ratio']= FALSE;
                           $config['quality']= '80%';
                          // $config['width']= 700;
                           //$config['height']= 700;
                           $config['new_image']= './assets/images/griya/'.$upload['file_name'];
                           $this->load->library('image_lib', $config);
                           $this->image_lib->resize();
 				 $laporan_keuangan = $upload['file_name'];
 			 }else{
         $laporan_keuangan='';
       }
       if(!empty($_FILES['foto_slipgaji']['name'])){
          $this->upload->do_upload('foto_slipgaji');
          $upload = $this->upload->data();
                           $config['image_library']='gd2';
                           $config['source_image']='./assets/images/griya/'.$upload['file_name'];
                           $config['create_thumb']= FALSE;
                           $config['maintain_ratio']= FALSE;
                           $config['quality']= '80%';
                         //  $config['width']= 700;
                         //  $config['height']= 700;
                           $config['new_image']= './assets/images/griya/'.$upload['file_name'];
                           $this->load->library('image_lib', $config);
                           $this->image_lib->resize();
 				 $slip_gaji = $upload['file_name'];
 			 }else{
         $slip_gaji='';
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
      $this->db->where('id_produk',2);
      $this->db->order_by('id_pengajuan','DESC');
      $this->db->limit(1);
      $ambil_last_number=$this->db->get();
      $hasil=$ambil_last_number->row_array();
      $last_nomor=$hasil['nomor_pengajuan'];
        $unik=rand(100,999);
      if($last_nomor!=NULL){
      $angka=(int) substr($last_nomor,11,5);
      $angka++;

      $char="GRIYA-$unik-";
      $kode_pengajuan = $char . sprintf("%05s",$angka);

    }else{
      $kode_pengajuan="GRIYA-$unik-00001";

    }

      $datapengajuan=array(
        'nomor_pengajuan'=>$kode_pengajuan,
        'id_nasabah'=>$id_nasabah,
        'id_produk'=>$idproduk,
        'id_cabang'=>'',
        'status'=>'Belum Diperiksa'
      );

       $pengajuan=$this->m_griya->save_pengajuan($datapengajuan);


         $dokumen_griya=array(
           'id_pengajuan' => $pengajuan,
           'ktp_suami' => $ktpsuami,
           'ktp_istri' => $ktpistri,
           'surat_nikah' => $suratnikah,
           'npwp_spt' => $npwp,
           'rek_gaji' => $rekgaji,
           'rek_koran' => $rekkoran,
           'keterangan_kerja' => $sk,
           'slip_gaji' => $slip_gaji,
           'ijin_praktek' => $ijinparaktek,
           'siu_lu_sku' => $legalitasusaha,
           'pas_photo_suami' => $foto_suami,
           'pas_photo_istri' => $foto_istri,
           'dokumen_jaminan' => $dokumen_jaminan,
           'laporan_keuangan' => $laporan_keuangan,
           'kk' => $kk
         );
         $save_dokumen=$this->m_griya->save_dokumengriya($dokumen_griya);
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
