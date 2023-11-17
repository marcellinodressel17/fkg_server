<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule_employee extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('m_user');
    $this->load->library(array('session'));
    is_logged_in_school();
  }

  //menampilkan informasi jadwal karyawan
  public function index(){
    $data['user'] = $this->db->get_where('user', ['username' =>
    $this->session->userdata('username')])->row_array();

    $data['title'] = "Jadwal Mengajar";

    $this->db->join('class', 'class.idclass = schedule.idclass');
    $this->db->join('lesson', 'lesson.idlesson = schedule.idlesson');
    $this->db->join('shift', 'shift.idshift = schedule.idshift');
    $this->db->join('user', 'user.iduser = schedule.iduser');
    $data_schedule['schedule'] = $this->db->get('schedule');

    $this->load->view('school/layout/header', $data);
    $this->load->view('school/schedule_employee/v_schedule', $data_schedule);
    $this->load->view('school/layout/footer');
  }

  //menampilkan informasi untuk menambahkan data jadwal kelas
  public function add_schedule(){

    $data['user'] = $this->db->get_where('user', ['username' =>
    $this->session->userdata('username')])->row_array();

    $data['title'] = "Tambah Data Jadwal Karyawan";

    $this->db->where('status', 1);
    $data_schedule['class'] = $this->db->get('class');

    $data_schedule['shift'] = $this->db->get('shift');

    $this->load->view('school/layout/header', $data);
    $this->load->view('school/schedule_employee/v_add_schedule', $data_schedule);
    $this->load->view('school/layout/footer');

  }

  //get data lesson
  public function getdatalesson(){
    $searchTerm = $this->input->post('searchTerm');

    $this->db->select('idlesson, name_lesson');
    $this->db->where("name_lesson like '%". $searchTerm . "%' ");
    $this->db->order_by('idlesson', 'asc');
    $fetched_records = $this->db->get('lesson');
    $datalesson = $fetched_records->result_array();

    $data = array();
    foreach ($datalesson as $lesson){
      $data[] = array("id" => $lesson['idlesson'], "text" => $lesson['name_lesson']);
    }

    echo json_encode($data);
  }

  //get data user
  public function getdatauser($idlesson){
    $searchTerm = $this->input->post('searhTerm');

    $this->db->select('iduser, name');
    $this->db->where('idlesson', $idlesson);
    $this->db->where("name like '%" . $searchTerm . "%' ");
    $this->db->order_by('iduser', 'asc');
    $fetched_records = $this->db->get('user');
    $datauser = $fetched_records->result_array();

    $data = array();
    foreach ($datauser as $user){
      $data[] = array("id" => $user['iduser'], "text" => $user['name']);
    }

    echo json_encode($data);
  }

  //proses penyimpanan jadwal karyawan
  public function proccess_add_schedule(){

    $this->form_validation->set_rules('idclass', 'Nama Kelas', 'required');
    $this->form_validation->set_rules('idlesson', 'Mata Pelajaran', 'required');
    $this->form_validation->set_rules('idshift', 'Shift', 'required');
    $this->form_validation->set_rules('iduser', 'Karyawan', 'required');

    if ($this->form_validation->run() == false){
      $data['title'] = "Tambah Data Jadwal Karyawan";

      $this->db->where('status', 1);
      $data_schedule['class'] = $this->db->get('class');

      $data_schedule['shift'] = $this->db->get('shift');

      $this->load->view('school/layout/header', $data);
      $this->load->view('school/schedule_employee/v_add_schedule', $data_schedule);
      $this->load->view('school/layout/footer');
    }else{
      $add_schedule = [
        'idclass'     => $this->input->post('idclass'),
        'idlesson'    => $this->input->post('idlesson'),
        'idshift'     => $this->input->post('idshift'),
        'iduser'      => $this->input->post('iduser'),
      ];

      $this->db->insert('schedule', $add_schedule);
      $this->session->set_flashdata('message', '<div class="alert-success" role="alert">Selamat!!! Data Berhasil Ditambah.</div>');
      redirect('/project/school/administrator/schedule_employee');
    }

  }

  //menampilkan informasi untuk mengedit data jadwal karyawan
  public function edit_schedule($id){

    $data['user'] = $this->db->get_where('user', ['username' =>
    $this->session->userdata('username')])->row_array();

    $data['title'] = "Edit Data Karyawan";

    $this->db->where('idschedule', $id);
    $this->db->join('class', 'class.idclass = schedule.idclass');
    $this->db->join('lesson', 'lesson.idlesson = schedule.idlesson');
    $this->db->join('shift', 'shift.idshift = schedule.idshift');
    $this->db->join('user', 'user.iduser = schedule.iduser');
    $data_schedule['schedule'] = $this->db->get('schedule')->result();

    $this->db->where('status', 1);
    $data_schedule['class'] = $this->db->get('class');

    $data_schedule['shift'] = $this->db->get('shift');

    $this->load->view('school/layout/header', $data);
    $this->load->view('school/schedule_employee/v_edit_schedule', $data_schedule);
    $this->load->view('school/layout/footer');

  } 

  //proses mengedit data kelas berdasarkan ID
  public function proccess_update_schedule(){
    $id         = $this->input->post('idschedule');
    $idclass    = $this->input->post('idclass');
    $idlesson   = $this->input->post('idlesson');
    $idshift    = $this->input->post('idshift');
    $iduser     = $this->input->post('iduser');

    $data = array(
        'idschedule'  => $id,
        'idclass'     => $idclass,
        'idlesson'    => $idlesson,
        'idshift'     => $idshift,
        'iduser'      => $iduser,
    );

    $this->db->where('idschedule', $id);
    $this->db->update('schedule', $data);

    $this->session->set_flashdata('message', '<div class="alert-success" role="alert">Data Berhasil Diupdate...</div>');
    redirect('/project/school/administrator/schedule_employee');

    }

  //proses menghapus data jadwal karyawan
  function delete_schedule($id){
    $this->db->where('idschedule', $id);
    $this->db->delete('schedule');

    redirect('/project/school/administrator/schedule_employee');
  }

}