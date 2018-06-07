<?php

  class M_pengajuan extends CI_Model{

    function semua(){
      $this->db->select('*');
      $this->db->from('pengajuan');
      $this->db->join('tbl_produk','tbl_produk.id=pengajuan.id_produk','left');
      $this->db->join('nasabah','nasabah.id=pengajuan.id_nasabah','left');
      $this->db->join('bank_cabang','bank_cabang.id=pengajuan.id_cabang','left');
      $query=$this->db->get();
      return $query;
    }
    function semua_regional($id_regional){
      $this->db->select('*');
      $this->db->from('pengajuan');
      $this->db->join('tbl_produk','tbl_produk.id=pengajuan.id_produk','left');
      $this->db->join('nasabah','nasabah.id=pengajuan.id_nasabah','left');
      $this->db->join('bank_cabang','bank_cabang.id=pengajuan.id_cabang','left');
      $this->db->join('bank_regional','bank_regional.id=bank_cabang.id_regional');
      $this->db->where('bank_regional.id',$id_regional);
      $query=$this->db->get();
      return $query;
    }

    function semua_cabang($id_cabang){
      $this->db->select('*');
      $this->db->from('pengajuan');
      $this->db->join('tbl_produk','tbl_produk.id=pengajuan.id_produk','left');
      $this->db->join('nasabah','nasabah.id=pengajuan.id_nasabah','left');
      $this->db->join('bank_cabang','bank_cabang.id=pengajuan.id_cabang','left');
      $this->db->where('bank_cabang.id',$id_cabang);
      $query=$this->db->get();
      return $query;
    }

    function produk($idproduk){
      $this->db->select('*');
      $this->db->from('pengajuan');
      $this->db->join('tbl_produk','tbl_produk.id=pengajuan.id_produk','left');
      $this->db->join('nasabah','nasabah.id=pengajuan.id_nasabah','left');
      $this->db->join('bank_cabang','bank_cabang.id=pengajuan.id_cabang');
      $this->db->where('pengajuan.id_produk',$idproduk);
      $query=$this->db->get();
      return $query;
    }

    function produk_regional($idproduk,$id_regional){
      $this->db->select('*');
      $this->db->from('pengajuan');
      $this->db->join('tbl_produk','tbl_produk.id=pengajuan.id_produk','left');
      $this->db->join('nasabah','nasabah.id=pengajuan.id_nasabah','left');
      $this->db->join('bank_cabang','bank_cabang.id=pengajuan.id_cabang');
      $this->db->join('bank_regional','bank_regional.id=bank_cabang.id_regional');
      $this->db->where('pengajuan.id_produk',$idproduk);
      $this->db->where('bank_regional.id',$id_regional);
      $query=$this->db->get();
      return $query;
    }

    function produk_cabang($idproduk,$id_cabang){
      $this->db->select('*');
      $this->db->from('pengajuan');
      $this->db->join('tbl_produk','tbl_produk.id=pengajuan.id_produk');
      $this->db->join('nasabah','nasabah.id=pengajuan.id_nasabah');
      $this->db->join('bank_cabang','bank_cabang.id=pengajuan.id_cabang');
      $this->db->where('pengajuan.id_produk',$idproduk);
      $this->db->where('bank_cabang.id',$id_cabang);
      $query=$this->db->get();
      return $query;
    }

    function cek_produk($idpengajuan){
      $this->db->select('id_produk');
      $this->db->from('pengajuan');
      $this->db->where('id_pengajuan',$idpengajuan);
      $idproduk=$this->db->get()->row_array();

      $produk=$idproduk['id_produk'];
      $this->db->select('tabel_dokumen');
      $this->db->from('tbl_produk');
      $this->db->where('id',$produk);
      $query=$this->db->get();
    //  $query=$this->db->query("SELECT tabel_dokumen FROM tbl_produk WHERE id= $produk");
      return $query;

    }

    function verifikasi($idpengajuan,$tabel){
      $this->db->select('*');
      $this->db->from('pengajuan');
      $this->db->join('tbl_produk','tbl_produk.id=pengajuan.id_produk');
      $this->db->join('nasabah','nasabah.id=pengajuan.id_nasabah');
      $this->db->join('bank_cabang','bank_cabang.id=pengajuan.id_cabang');
      $this->db->join($tabel,"$tabel.id_pengajuan=pengajuan.id_pengajuan");
      $this->db->where('pengajuan.id_pengajuan',$idpengajuan);
      $query=$this->db->get();
      return $query;
    }




  }
