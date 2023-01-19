<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function index(){

    $data['title'] = "Home";

    $this->load->view('home/layout/header', $data);
    $this->load->view('home/v_home');
    $this->load->view('home/layout/footer');

  }

}