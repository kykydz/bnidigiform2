<?php
  class M_bunga extends CI_Model{
    function bunga_pensiun(){
      $this->datatables->select('id_bunga, jumlah_tahun, suku_bunga');
      $this->datatables->from('tbl_suku_bunga');
      
      $this->datatables->add_column('aksi','<a href="javascript:void(0);" class="edit_record btn btn-info btn-xs" data-id_bunga="$1" data-jumlah_tahun="$2" data-suku_bunga="$3">Edit</a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-xs" data-kode="$1">Hapus</a>','id_bunga,jumlah_tahun,suku_bunga');
      $this->db->order_by('id_bunga','ASC');
      return $this->datatables->generate();
    }

  }
