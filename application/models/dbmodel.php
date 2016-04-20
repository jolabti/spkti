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

    /*Ambil data bobot Criteria*/

      function m_databobotPraktek( ){

          $query=$this->db->select('bobot')->from('Kriteria_Praktek');
          return $query->result();
      }

      function m_kosongkanData(){

        $this->db->query('DELETE from penilaian');

      }

      function m_databobotTeori(){

        $this->db->Select('bobot');
        $this->db->from('Teori');
        $query = $this->db->get();
        return $result = $query->result();
      }



    /*=============================*/

    public function removeQuote()
        {
            $this->db->empty_table('penilaian');
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

    function m_dataKriteriaTeori(){
        return $this->db->get('Teori')->result();
    }

    function m_dataKriteriaPraktek(){
      // $this->db->Select('bobot');
      // $this->db->from('Kriteria_Praktek');
      // $query = $this->db->get();
      // return $result = $query->result();

      return $this->db->get('Kriteria_Praktek')->result();
    }

    function m_dataKriteriaWawancara(){
      // $this->db->Select('bobot');
      // $this->db->from('Kriteria_Wawancara');
      // $query = $this->db->get();
      return $this->db->get('Kriteria_Wawancara')->result();
    }
    function m_dataKriteriaPresentasi(){
      //$this->db->Select('bobot');
      // $this->db->from('Kriteria_Presentasi');
      // $query = $this->db->get();
      // return $result = $query->result();
      return $this->db->get('Kriteria_Presentasi')->result();
    }


    //==================================== Database model for algorithm
    function m_getDataPenilaian( ){

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
