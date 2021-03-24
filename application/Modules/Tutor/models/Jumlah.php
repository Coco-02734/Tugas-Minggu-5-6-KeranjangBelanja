<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Jumlah extends CI_Model
{
  function total_rows() {
    return $this->db->get('user')->num_rows();
  }
}
