<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('m_user');
    $this->load->library(array('session'));
    is_logged_in_school();
  }
  
  //menampilkan informasi dashboard
  public function index(){

    $data['user'] = $this->db->get_where('user', ['username' =>
    $this->session->userdata('username')])->row_array();

    $data['title'] = "Informasi Sekolah";

    $this->load->view('school/layout/header', $data);
    $this->load->view('school/v_school');
    $this->load->view('school/layout/footer');

  }

  //get data karyawan berdasarkan filter data
  // public function listdata(){
  //   $list = $this->m_user->get_datatables();
  //   $data = array();
  //   $no   = $_POST['start'];
  //   if (isset($_POST['start']) && isset($_POST['draw'])) {
  //       $no = $_POST['start'];
  //   } else {
  //       die();
  //   };

  //   foreach ($list as $dt) {
  //       $no++;
  //       $row   = array();
  //       $row[] = $no;
  //       $row[] = $dt->name_user;
  //       $data[] = $row;
  //   }

  //   $output = array(
  //       "draw"            => $_POST['draw'],
  //       "recordsTotal"    => $this->Custom->count_all(),
  //       "recordsFiltered" => $this->Custom->count_filtered(),
  //       "data"            => $data,
  //   );
  //   echo json_encode($output);
  // }

  //filter data karyawan
  // public function get_user(){
  //   $searchTerm = $this->input->post('searchTerm');
  //   $response = $this->m_user->getuser($searchTerm);
  //   echo json_encode($response);
  // }

}