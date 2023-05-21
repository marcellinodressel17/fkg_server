<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

  public function index(){

      $data['title'] = 'Dashboard';

    //   $wilayah['vaksin'] = $this->m_daerah->total_vaksin1()->result();
    //   $wilayah['vaksin1'] = $this->m_daerah->total_vaksin2()->result();
    //   $wilayah['vaksin2'] = $this->m_daerah->total_vaksin3()->result();

    //   $wilayah['bitung'] = $this->m_daerah->zkuning();
    //   $wilayah['bitung2'] = $this->m_daerah->zmerah();
    //   $wilayah['bitung3'] = $this->m_daerah->zhijau();
      
    //   $wilayah['bitungdata'] = $this->m_daerah->data_puskesmas1();
    //   $wilayah['bitungdata1'] = $this->m_daerah->data_puskesmas2();
    //   $wilayah['bitungdata2'] = $this->m_daerah->data_puskesmas3();
    //   $wilayah['area'] = $this->m_daerah->get_rumahsakit();

      // var_dump($wilayah['bitung']);
      // die();
      $this->load->view('metode/kmeans/layout/header', $data);
      $this->load->view('metode/kmeans/dashboard/v_dashboard');
      $this->load->view('metode/kmeans/layout/footer');

  }

  //menampilkan data zona hijau

  public function zona_hijau()
  {

      $data['user'] = $this->db->get_where('user', ['email' =>
      $this->session->userdata('email')])->row_array();

      $data['title'] = 'Home';
      $wilayah['lowokwaru'] = $this->m_daerah->zhijau();
      $wilayah['vaksin'] = $this->m_daerah->graph1();
      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/hijau', $wilayah);
      $this->load->view('admin/templates/footer');
  }

  //menampilkan data zona kuning

  public function zona_kuning()
  {

      $data['user'] = $this->db->get_where('user', ['email' =>
      $this->session->userdata('email')])->row_array();

      $data['title'] = 'Home';
      $wilayah['lowokwaru'] = $this->m_daerah->zkuning();
      $wilayah['vaksin'] = $this->m_daerah->graph2();
      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/kuning', $wilayah);
      $this->load->view('admin/templates/footer');
  }

  //menampilkan data zona merah

  public function zona_merah()
  {

      $data['user'] = $this->db->get_where('user', ['email' =>
      $this->session->userdata('email')])->row_array();

      $data['title'] = 'Home';
      $wilayah['lowokwaru'] = $this->m_daerah->zmerah();
      $wilayah['vaksin'] = $this->m_daerah->graph3();
      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/merah', $wilayah);
      $this->load->view('admin/templates/footer');
  }
  
}