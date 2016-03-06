<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dbmodel extends CI_Model {


  function get_addressbook() {
          $query = $this->db->get('addressbook');
          if ($query->num_rows() > 0) {
              return $query->result_array();
          } else {
              return FALSE;
          }
      }

  function insert_csv($data) {

        $this->db->insert('addressbook', $data);

    }


}







 ?>
