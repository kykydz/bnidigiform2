<?php
  class m_fleksi extends CI_Model{

      function save_dokumenfleksi($dokumen_fleksi){
        $query=$this->db->insert('dok_fleksi',$dokumen_fleksi);
        return $query;
      }

      function pilih_lokasi($id_bank,$kode_pengajuan){
        $this->db->set('id_cabang',$id_bank);
        $this->db->where('nomor_pengajuan',$kode_pengajuan);
        $query=$this->db->update('pengajuan');
        return $query;
      }

  }
