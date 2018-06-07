<?php
  class m_griya extends CI_Model{
  function save_griya($datagriya){
        $query = $this->db->insert('nasabah',$datagriya);
        $id_nasabah = $this->db->insert_id();
        return $id_nasabah;
      }

      function save_pengajuan($datapengajuan){
        $this->db->insert('pengajuan',$datapengajuan);
        $idpengajuan=$this->db->insert_id();
        return $idpengajuan;

      }
      function save_dokumengriya($dokumen_griya){
        $query=$this->db->insert('dok_griya',$dokumen_griya);
        return $query;
      }

      function pilih_lokasi($id_bank,$kode_pengajuan){
        $this->db->set('id_cabang',$id_bank);
        $this->db->where('nomor_pengajuan',$kode_pengajuan);
        $query=$this->db->update('pengajuan');
        return $query;
      }

  }
