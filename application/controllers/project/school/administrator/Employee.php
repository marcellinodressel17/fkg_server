<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('m_user');
    $this->load->library(array('session'));
    is_logged_in_school();
  }

  //tampilan untuk menampilkan data karyawan
  public function index(){

    $data['user'] = $this->db->get_where('user', ['username' =>
    $this->session->userdata('username')])->row_array();

    $data['title'] = "Informasi Karyawan";

    $this->db->where('user.status', 1);
    $this->db->where('user_type', 2);
    $this->db->join('lesson', 'lesson.idlesson = user.idlesson');
    $data_employee['employee'] = $this->db->get('user');

    $this->load->view('school/layout/header', $data);
    $this->load->view('school/employee/v_employee', $data_employee);
    $this->load->view('school/layout/footer');
  }

  //tampilan untuk menambahkan data karyawan
  public function add_employee(){

    $data['user'] = $this->db->get_where('user', ['username' =>
    $this->session->userdata('username')])->row_array();

    $data['title'] = "Tambah Data Karyawan";

    $this->db->where('status', 1);
    $data_lesson['lesson'] = $this->db->get('lesson')->result();

    $this->load->view('school/layout/header', $data);
    $this->load->view('school/employee/v_add_employee', $data_lesson);
    $this->load->view('school/layout/footer');

  }

  //proses untuk menambahkan data karyawan
 public function proccess_add_employee(){
    $name         = $this->input->post('name');
    $address      = $this->input->post('address');
    $email        = $this->input->post('email');
    $phone        = $this->input->post('phone');
    $user_type    = 2;
    $idlesson     = $this->input->post('idlesson');
    $username     = $this->input->post('username');
    $password     = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
    $photo        = "user.png";
    $createdby    = "administrator";
    $updatedby    = "administrator";
    $status       = 1;

    $add_employee = [
      'name'      => $name,
      'address'   => $address,
      'email'     => $email,
      'phone'     => $phone,
      'photo'     => $photo,
      'user_type' => $user_type,
      'idlesson'  => $idlesson,
      'username'  => $username,
      'password'  => $password,
      'createdby' => $createdby,
      'updatedby' => $updatedby,
      'status'    => $status,
    ];

    $this->db->insert('user', $add_employee);
    $this->session->set_flashdata('message', '<div class="alert-success" role="alert">Selamat!!! Data Berhasil Disimpan.</div>');
    redirect('/project/school/administrator/employee');
  }
  
  //tampilan untuk mengedit data karyawan berdasarkan ID
  public function edit_employee($id){

    $data['user'] = $this->db->get_where('user', ['username' =>
    $this->session->userdata('username')])->row_array();

    $data['title'] = 'Edit Data Karyawan';

    $this->db->where('iduser', $id);
    $this->db->join('lesson', 'lesson.idlesson = user.idlesson');
    $employee['edit_employee'] = $this->db->get('user')->result();
    
    $this->db->where('status', 1);
    $employee['lesson'] = $this->db->get('lesson')->result();

    $this->load->view('school/layout/header', $data);
    $this->load->view('school/employee/v_edit_employee', $employee);
    $this->load->view('school/layout/footer');
  }

  //proses mengedit data employee berdasarkan ID
  public function proccess_update_employee(){
    $id           = $this->input->post('iduser');
    $name         = $this->input->post('name');
    $address      = $this->input->post('address');
    $email        = $this->input->post('email');
    $phone        = $this->input->post('phone');
    $user_type    = 2;
    $idlesson     = $this->input->post('idlesson');
    $username     = $this->input->post('username');
    $password     = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
    $createdby    = "administrator";
    $updatedby    = "administrator";
    $status       = 1;

    $data = array(
      'iduser'    => $id,
      'name'      => $name,
      'address'   => $address,
      'email'     => $email,
      'phone'     => $phone,
      'user_type' => $user_type,
      'idlesson'  => $idlesson,
      'username'  => $username,
      'password'  => $password,
      'createdby' => $createdby,
      'updatedby' => $updatedby,
      'status'    => $status,
    );

    $this->db->where('iduser', $id);
    $this->db->update('user', $data);

    $this->session->set_flashdata('message', '<div class="alert-success" role="alert">Data Berhasil Diupdate...</div>');
    redirect('/project/school/administrator/employee');

  }

  function delete_employee($id){
    $this->db->where('iduser', $id);
    $this->db->delete('user');

    redirect('/project/school/administrator/employee');
  }

}