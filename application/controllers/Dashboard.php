<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index(){

        $data['title'] = "Home";

        $this->load->view('dashboard/layout/header', $data);
        $this->load->view('dashboard/v_dashboard');
        $this->load->view('dashboard/layout/footer');
    }

}