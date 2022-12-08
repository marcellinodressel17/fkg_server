<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

  public function index(){

    $this->db->select('*');
    $data['data_cluster'] = $this->db->get('data_example');

    $this->load->view('metode/cluster/data', $data);
  }

}