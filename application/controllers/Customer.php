<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
   }

   public function index(){
    $data['title'] = "Data Paket 1";

    $this->load->view('customer/layout/header', $data);
    $this->load->view('customer/v_customer');
    $this->load->view('customer/layout/footer');
   }

   public function eresta_studying(){
        $data['title'] = "Paket Eresta Studying";

        $this->load->view('dashboard/layout2/header', $data);
        $this->load->view('dashboard/v_eresta_studying');
        $this->load->view('dashboard/layout2/footer');       
    }

    //proses tambah studying
    public function tambah_studying(){

        $this->form_validation->set_rules('customer_name', 'customer_name', 'required|trims');
        $this->form_validation->set_rules('phone', 'phone', 'required|trims');
        $this->form_validation->set_rules('project_name', 'project_name', 'required|trims');
        $this->form_validation->set_rules('metode', 'metode', 'required|trims');
        $this->form_validation->set_rules('deadline', 'deadline', 'required|trims');
        $this->form_validation->set_rules('jasa_cash', 'jasa_cash', 'required|trims');
        $this->form_validation->set_rules('metode_cash', 'metode_cash', 'required|trims');
        $this->form_validation->set_rules('diskon_cash', 'diskon_cash', 'required|trims');
        $this->form_validation->set_rules('tambahan_cash', 'tambahan_cash', 'required|trims');
        $this->form_validation->set_rules('subtotal', 'subtotal', 'required|trims');
        if ($this->form_validation->run() == false) {
            $data['title'] = "Paket Eresta Studying";
            $this->load->view('dashboard/layout2/header', $data);
            $this->load->view('dashboard/v_eresta_studying');
            $this->load->view('dashboard/layout2/footer');
        } else {
            $datacustomer = [
                'customer_name'     => $this->input->post('customer_name'),
                'phone'             => $this->input->post('phone'),
                'project_name'      => $this->input->post('project_name'),
                'metode'            => $this->input->post('metode'),
                'metode1'           => "Belum Diisi",
                'metode2'           => "Belum Diisi",
                'deadline'          => $this->input->post('deadline'),
                'jasa_cash'         => $this->input->post('jasa_cash'),
                'metode_cash'       => $this->input->post('metode_cash'),
                'diskon_cash'       => $this->input->post('diskon_cash'),
                'tambahan_cash'     => $this->input->post('tambahan_cash'),
                'subtotal'          => $this->input->post('subtotal'),
                'created'           => $this->input->post('created'),
                'status'            => 1
            ];

            $this->db->insert('customer', $datacustomer);
            $this->session->set_flashdata('message', '<div class="alert-success" role="alert">Selamat!!! Data Berhasil Ditambah.</div>');
            redirect('/');
        }
    }

}