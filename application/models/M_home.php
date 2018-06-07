<?php

  class M_home extends CI_Model{
    function menu(){
      $query = $this->db->query("SELECT * FROM tbl_produk");
      return $query;
    }
    function baru_pusat(){
      $this->db->select('*');
      $this->db->from('pengajuan');
      $this->db->join('tbl_produk','tbl_produk.id=pengajuan.id_produk');
      $this->db->join('nasabah','nasabah.id=pengajuan.id_nasabah');
      $this->db->order_by('pengajuan.id_pengajuan','desc');
      $this->db->limit(6);
      $query=$this->db->get();

      return $query;
    }

    function baru_regional($idreg){
      $this->db->select('*');
      $this->db->from('pengajuan');
      $this->db->join('tbl_produk','tbl_produk.id=pengajuan.id_produk');
      $this->db->join('nasabah','nasabah.id=pengajuan.id_nasabah');
      $this->db->join('bank_cabang','bank_cabang.id=pengajuan.id_cabang');
      $this->db->join('bank_regional','bank_regional.id=bank_cabang.id_regional');
      $this->db->where('bank_regional.id',$idreg);
        $this->db->order_by('pengajuan.id_pengajuan','desc');
      $this->db->limit(6);
      $query=$this->db->get();
      return $query;
    }

    function baru_cabang($idcab){
      $this->db->select('*');
      $this->db->from('pengajuan');
      $this->db->join('tbl_produk','tbl_produk.id=pengajuan.id_produk');
      $this->db->join('nasabah','nasabah.id=pengajuan.id_nasabah');
      $this->db->join('bank_cabang','bank_cabang.id=pengajuan.id_cabang');
    //  $this->db->join('bank_regional','bank_regional.id=bank_cabang.id_regional');
      $this->db->where('bank_cabang.id',$idcab);
        $this->db->order_by('pengajuan.id_pengajuan','desc');
      $this->db->limit(6);
      $query=$this->db->get();
      return $query;
    }

    //fungsi Home Username
    function tampil_produk(){
      $this->db->select('*');
      $this->db->from('tbl_produk');
      $query=$this->db->get();
      return $query;
    }

    function list_bank(){
      $this->db->select('*');
      $this->db->from('bank_cabang');
      $this->db->where('longlat !=',NULL);
        $this->db->where('id_regional',31);
      $this->db->order_by('rand()');
      $this->db->limit(30);
      $query=$this->db->get();
      return $query;

    }

    function suku_bunga_pensiun(){
      $this->db->select('id_bunga');
      $this->db->select( 'jumlah_tahun');
      $this->db->from('tbl_suku_bunga');
      $this->db->where('id_produk',3);
      return $this->db->get();
    }
    function get_bunga($id_bunga){
      $this->db->select('*');
      $this->db->from('tbl_suku_bunga');
      $this->db->where('id_bunga >= ',$id_bunga);
      $this->db->limit(5);
      return $this->db->get();
    }
  }
?>
