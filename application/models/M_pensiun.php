<?php
  class m_pensiun extends CI_Model{

      function save_dokumenpensiun($dokumen_pensiun){
        $query=$this->db->insert('dok_pensiun',$dokumen_pensiun);
        return $query;
      }

      function pilih_lokasi($id_bank,$kode_pengajuan){
        $this->db->set('id_cabang',$id_bank);
        $this->db->where('nomor_pengajuan',$kode_pengajuan);
        $query=$this->db->update('pengajuan');
        return $query;
      }

  }
