<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_shift extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('m_user');
    $this->load->library(array('session'));
    is_logged_in_school();
  }

  //menampilkan informasi shift kerja
  public function index(){

    $data['user'] = $this->db->get_where('user', ['username' =>
    $this->session->userdata('username')])->row_array();

    $data['title'] = "Informasi Jadwal Shift";

    $data_shift['shift'] = $this->db->get('shift');

    $this->load->view('school/layout/header', $data);
    $this->load->view('school/master_shift/v_master_shift', $data_shift);
    $this->load->view('school/layout/footer');

  }

  //menampilkan informasi untuk menambahkan data shift kerja
  public function add_shift(){

    $data['user'] = $this->db->get_where('user', ['username' =>
    $this->session->userdata('username')])->row_array();

    $data['title'] = "Tambah Data Shift";

    $this->load->view('school/layout/header', $data);
    $this->load->view('school/master_shift/v_add_shift');
    $this->load->view('school/layout/footer');

  }

  //proses penyimpanan data shift kerja
  public function proccess_add_shift(){

    $this->form_validation->set_rules('name_shift', 'Nama Shift Kerja', 'required');
    $this->form_validation->set_rules('day', 'Hari Shift Kerja', 'required');
    $this->form_validation->set_rules('start_shift', 'Mulai Shift Kerja', 'required');
    $this->form_validation->set_rules('end_shift', 'Selesai Shift Kerja', 'required');
    
    if ($this->form_validation->run() == false) {
        $data['title'] = 'Tambah Data Shift';
        
        $this->load->view('school/layout/header', $data);
        $this->load->view('school/master_shift/v_add_shift');
        $this->load->view('school/layout/footer');
    } else {
        $add_shift = [
            'name_shift'    => $this->input->post('name_shift'),
            'day'           => $this->input->post('day'),
            'start_shift'   => $this->input->post('start_shift'),
            'end_shift'     => $this->input->post('end_shift'),
        ];

        $this->db->insert('shift', $add_shift);
        $this->session->set_flashdata('message', '<div class="alert-success" role="alert">Selamat!!! Data Berhasil Ditambah.</div>');
        redirect('/project/school/administrator/master_shift');
    }

  }

  //tampilan untuk mengedit shift kerja berdasarkan ID
  public function edit_shift($id){

    $data['user'] = $this->db->get_where('user', ['username' =>
    $this->session->userdata('username')])->row_array();

    $data['title'] = 'Edit Data Kelas';

    $this->db->where('idshift', $id);
    $shift['edit_shift'] = $this->db->get('shift')->result();

    $this->load->view('school/layout/header', $data);
    $this->load->view('school/master_shift/v_edit_shift', $shift);
    $this->load->view('school/layout/footer');
  }

  //proses mengedit data shift kerja berdasarkan ID
  public function proccess_update_shift(){
    $id = $this->input->post('idshift');
    $name_shift = $this->input->post('name_shift');
    $day = $this->input->post('day');
    $start_shift = $this->input->post('start_shift');
    $end_shift = $this->input->post('end_shift');

    $data = array(
        'idshift' => $id,
        'name_shift' => $name_shift,
        'day' => $day,
        'start_shift' => $start_shift,
        'end_shift' => $end_shift,
    );

    $this->db->where('idshift', $id);
    $this->db->update('shift', $data);

    $this->session->set_flashdata('message', '<div class="alert-success" role="alert">Data Berhasil Diupdate...</div>');
    redirect('/project/school/administrator/master_shift');

    }

  //proses menghapus data pada master pelajaran
  function delete_shift($id){
    $this->db->where('idshift', $id);
    $this->db->delete('shift');

    redirect('/project/school/administrator/master_shift');
  }

}