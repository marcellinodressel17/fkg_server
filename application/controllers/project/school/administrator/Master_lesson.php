<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_lesson extends CI_Controller {

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

    $data['title'] = "Informasi Pelajaran";

    $this->db->where('status', 1);
    $data_lesson['lesson'] = $this->db->get('lesson');

    $this->load->view('school/layout/header', $data);
    $this->load->view('school/master_lesson/v_master_lesson', $data_lesson);
    $this->load->view('school/layout/footer');

  }

  //menampilkan informasi untuk menambahkan data kelas
  public function add_lesson(){

    $data['user'] = $this->db->get_where('user', ['username' =>
    $this->session->userdata('username')])->row_array();

    $data['title'] = "Tambah Data Pelajaran";

    $this->load->view('school/layout/header', $data);
    $this->load->view('school/master_lesson/v_add_lesson');
    $this->load->view('school/layout/footer');

  }

  //proses penyimpanan data kelas
  public function proccess_add_lesson(){

    $this->form_validation->set_rules('name_lesson', 'Nama Kelas', 'required');
    
    if ($this->form_validation->run() == false) {
        $data['title'] = 'Tambah Data Pelajaran';
        
        $this->load->view('school/layout/header', $data);
        $this->load->view('school/master_lesson/v_add_lesson');
        $this->load->view('school/layout/footer');
    } else {
        $add_lesson = [
            'name_lesson'   => $this->input->post('name_lesson'),
            'status'        => 1,
        ];

        $this->db->insert('lesson', $add_lesson);
        $this->session->set_flashdata('message', '<div class="alert-success" role="alert">Selamat!!! Data Berhasil Ditambah.</div>');
        redirect('/project/school/administrator/master_lesson');
    }

  }

  //tampilan untuk mengedit kelas berdasarkan ID
  public function edit_lesson($id){

    $data['user'] = $this->db->get_where('user', ['username' =>
    $this->session->userdata('username')])->row_array();

    $data['title'] = 'Edit Data Pelajaran';

    $this->db->where('idlesson', $id);
    $lesson['edit_lesson'] = $this->db->get('lesson')->result();

    $this->load->view('school/layout/header', $data);
    $this->load->view('school/master_lesson/v_edit_lesson', $lesson);
    $this->load->view('school/layout/footer');
  }

  //proses mengedit data kelas berdasarkan ID
  public function proccess_update_lesson(){
    $id = $this->input->post('idlesson');
    $name_lesson = $this->input->post('name_lesson');

    $data = array(
        'idlesson' => $id,
        'name_lesson' => $name_lesson,
        'status' => 1,
    );

    $this->db->where('idlesson', $id);
    $this->db->update('lesson', $data);

    $this->session->set_flashdata('message', '<div class="alert-success" role="alert">Data Berhasil Diupdate...</div>');
    redirect('/project/school/administrator/master_lesson');

    }

  //proses menghapus data pada master pelajaran
  function delete_lesson($id){
    $this->db->where('idlesson', $id);
    $this->db->delete('lesson');

    redirect('/project/school/administrator/master_lesson');
  }

}