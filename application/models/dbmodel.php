<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dbmodel extends CI_Model {


  function get_penilaian() {
          $query = $this->db->get('penilaian');
          if ($query->num_rows() > 0) {
              return $query->result_array();
          } else {
              return FALSE;
          }
      }

  function insert_csv($data) {
        $this->db->insert('penilaian', $data);
    }



    /*
      PROSES PERHITUNGAN ALGORITMA
      ========================
    */


    function m_sumbobotkriteria(){
      $this->db->select('sum(bobot) as score');
      $this->db->from('Bobot_Kriteria');
      $query = $this->db->get();
      $row=$query->row();
      $score=$row->score;
      return $result = $query->result();
    }

    function m_databobotkriteria(){
      $this->db->Select('bobot');
      $this->db->from('Bobot_Kriteria');
      $query = $this->db->get();
      return $result = $query->result();

    }


    //==================================== Database model for algorithm
    function m_getDataPenilaian(){

       $query = $this->db->get('penilaian');

       return $query->result();
    }

    function m_getDataTeori()
    {
      $this->db->Select('nilai_teori');
      $this->db->from('penilaian');
      $query = $this->db->get();
      return $result = $query->result();
    }

    function m_getDataPraktek()
    {
      $this->db->Select('nilai_praktek');
      $this->db->from('penilaian');
      $query = $this->db->get();
      return $result = $query->result();
    }

    function m_getDataWawancara()
    {
      $this->db->Select('nilai_wawancara');
      $this->db->from('penilaian');
      $query = $this->db->get();
      return $result = $query->result();
    }

    function m_getDataPresentasi()
    {
      $this->db->Select('nilai_presentasi');
      $this->db->from('penilaian');
      $query = $this->db->get();
      return $result = $query->result();
    }


        //==================================== Database model for algorithm



    /*

      ========================
    */






}







 ?>
