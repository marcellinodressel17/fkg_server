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

}