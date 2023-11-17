<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_class extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('m_user');
    $this->load->library(array('session'));
    is_logged_in_school();
  }

  //menampilkan informasi kelas
  public function index(){

    $data['user'] = $this->db->get_where('user', ['username' =>
    $this->session->userdata('username')])->row_array();

    $data['title'] = "Informasi Sekolah";

    $this->db->where('status', 1);
    $this->db->order_by('name_class asc');
    $data_class['class'] = $this->db->get('class');

    $this->load->view('school/layout/header', $data);
    $this->load->view('school/master_class/v_master_class', $data_class);
    $this->load->view('school/layout/footer');

  }

  //menampilkan informasi untuk menambahkan data kelas
  public function add_class(){

    $data['user'] = $this->db->get_where('user', ['username' =>
    $this->session->userdata('username')])->row_array();

    $data['title'] = "Tambah Data Kelas";

    $this->load->view('school/layout/header', $data);
    $this->load->view('school/master_class/v_add_class');
    $this->load->view('school/layout/footer');

  }

  //proses penyimpanan data kelas
  public function proccess_add_class(){

    $this->form_validation->set_rules('name_class', 'Nama Kelas', 'required');
    
    if ($this->form_validation->run() == false) {
        $data['title'] = 'Tambah Data Kelas';
        
        $this->load->view('school/layout/header', $data);
        $this->load->view('school/master_class/v_add_class');
        $this->load->view('school/layout/footer');
    } else {
        $add_class = [
            'name_class'    => $this->input->post('name_class'),
            'status'        => 1,
        ];

        $this->db->insert('class', $add_class);
        $this->session->set_flashdata('message', '<div class="alert-success" role="alert">Selamat!!! Data Berhasil Ditambah.</div>');
        redirect('/project/school/administrator/master_class');
    }

  }

  //tampilan untuk mengedit kelas berdasarkan ID
  public function edit_class($id){

    $data['user'] = $this->db->get_where('user', ['username' =>
    $this->session->userdata('username')])->row_array();

    $data['title'] = 'Edit Data Kelas';

    $this->db->where('idclass', $id);
    $class['edit_class'] = $this->db->get('class')->result();

    $this->load->view('school/layout/header', $data);
    $this->load->view('school/master_class/v_edit_class', $class);
    $this->load->view('school/layout/footer');
  }

  //proses mengedit data kelas berdasarkan ID
  public function proccess_update_class(){
    $id = $this->input->post('idclass');
    $name_class = $this->input->post('name_class');

    $data = array(
        'idclass' => $id,
        'name_class' => $name_class,
        'status' => 1,
    );

    $this->db->where('idclass', $id);
    $this->db->update('class', $data);

    $this->session->set_flashdata('message', '<div class="alert-success" role="alert">Data Berhasil Diupdate...</div>');
    redirect('/project/school/administrator/master_class');

    }

  function delete_class($id){
    $this->db->where('idclass', $id);
    $this->db->delete('class');

    redirect('/project/school/administrator/master_class');
  }

}