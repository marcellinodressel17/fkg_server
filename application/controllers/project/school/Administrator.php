<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

  public function index(){

    $data['title'] = "Informasi Sekolah";

    $this->load->view('school/layout/header', $data);
    $this->load->view('school/v_school');
    $this->load->view('school/layout/footer');

  }

}