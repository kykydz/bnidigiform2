<?php
  class M_bank extends CI_Model{
    function bank_regional(){
      $query=$this->db->get('bank_regional');
      return $query->result();
    }
    function cabang_all(){
      $this->db->select('*');
      $this->db->from('bank_cabang');
      $this->db->join('bank_regional','bank_cabang.id_regional=bank_regional.id','left');
      $query=$this->db->get();
      return $query->result();
    }
    function cabang_regional($id_regional){
      $this->db->select('*');
      $this->db->from('bank_cabang');
      $this->db->join('bank_regional','bank_cabang.id_regional=bank_regional.id','left');
      $this->db->where('bank_cabang.id_regional',$id_regional);
      $query=$this->db->get();
      return $query->result();
    }
    function cabang_cabang($id_cabang){
      $this->db->select('*');
      $this->db->from('bank_cabang');
      $this->db->join('bank_regional','bank_cabang.id_regional=bank_regional.id','left');
      $this->db->where('bank_cabang.id',$id_cabang);
      $query=$this->db->get();
      return $query->result();
    }
    function ambil_cabang_all(){
      $this->datatables->select('bank_cabang.id, bank_cabang.nama_cabang, bank_cabang.alamat, bank_cabang.kab_kot');
      $this->datatables->from('bank_cabang');
      $this->datatables->join('bank_regional','bank_cabang.id_regional=bank_regional.id','left');
    return $query=$this->datatables->generate();
      //return $query->result();
    }
  }
