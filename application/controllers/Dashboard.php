<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
   }

    public function index(){

        $data['title'] = "Home";

        $this->load->view('dashboard/layout/header', $data);
        $this->load->view('dashboard/v_dashboard');
        $this->load->view('dashboard/layout/footer');
    }

    public function add_customer1(){
        $this->form_validation->set_rules('full_name' , 'Nama Lengkap' , 'trim|required');
        $this->form_validation->set_rules('telp' , 'Nomor Telp' , 'trim|required');
        $this->form_validation->set_rules('website_name' , 'Nama Website' , 'trim|required');
        
        if($this->form_validation->run()== FALSE) {
            $this->index();
        }else {
            $data = [
                'full_name' => htmlspecialchars($this->input->post('full_name', true)),
                'telp' => htmlspecialchars($this->input->post('telp', true)),
                'website_name' => htmlspecialchars($this->input->post('website_name', true)),
                'status' => 1,
            ];

            $this->db->insert('eresta_customer',$data);
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('customer/index');
        }
    }

}