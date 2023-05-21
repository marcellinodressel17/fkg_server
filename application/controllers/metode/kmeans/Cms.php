<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cms extends CI_Controller
{

  public function __construct()
    {
        parent::__construct();
        // $this->load->library('form_validation');
        $this->load->model('m_kmeans');
    }

  public function index(){
    $data['title'] = 'Update Background';

    $this->load->view('metode/kmeans/layout/header', $data);
    $this->load->view('metode/kmeans/cms/v_background');
    $this->load->view('metode/kmeans/layout/footer');
  }
  
  public function update_background(){
    $id = $this->input->post('idbackground');
    $bg_name = $this->input->post('bg_name');
    $bg_color = $this->input->post('bg_color');
    $bg_color_second = $this->input->post('bg_color_second');

    $data = array(
        'idbackground' => $id,
        'bg_name' => $bg_name,
        'bg_color' => $bg_color,
        'bg_color_second' => $bg_color_second,
    );

    $where = array(
        'idbackground' => $id
    );

    $this->m_kmeans->update_data($where, $data, 'background');
    $this->session->set_flashdata('message', '<div class="alert-success" role="alert">Data Berhasil Diupdate...</div>');
    redirect('metode/kmeans/cms/index');
  }

}