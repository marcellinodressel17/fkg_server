<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Access extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('m_user');
    $this->load->library(array('session'));
    is_logged_in_school();
  }
  
  //menampilkan informasi hak akses
  public function index(){

    $data['user'] = $this->db->get_where('user', ['username' =>
    $this->session->userdata('username')])->row_array();

    $data['title'] = "Hak Akses";

    $access['role'] = $this->db->get('role')->result();

    $this->load->view('school/layout/header', $data);
    $this->load->view('school/access/v_access', $access);
    $this->load->view('school/layout/footer');

  }

  public function edit_access(){

    $data['user'] = $this->db->get_where('user', ['username' =>
    $this->session->userdata('username')])->row_array();

    $data['title'] = "Edit Hak Akses";

    $this->load->view('school/layout/header', $data);
    $this->load->view('school/access/v_modal_access');
    $this->load->view('school/layout/footer');
  } 

}