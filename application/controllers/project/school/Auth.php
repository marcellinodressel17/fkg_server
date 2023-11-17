<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_user');
    }

    public function index()
    {
        if ($this->session->userdata('username')) { //fungsi session adalah fungsi untuk menyeleksi setiap user yang melakukan login/register
            redirect('/project/school/auth');
        }
        $this->form_validation->set_rules('username', 'Username', 'trim|required'); //untuk validasi user yang melakukan login sesuai id yang terdaftar sesuai username
        $this->form_validation->set_rules('password', 'Password', 'trim|required'); //untuk validasi user yang melakukan login sesuai id yang terdaftar sesuai password
        if ($this->form_validation->run() == false) { //jika data salah maka akan terarah ke login/tampilan login
            $data['title'] = 'Form Login';
            $this->load->view('auth_school/layout/header', $data);
            $this->load->view('auth_school/login');
            $this->load->view('auth_school/layout/footer');
        } else {
            $this->_login(); //variabel jika data login benar
        }
    }

    private function _login()
    { // validasi misalkan login benar/data saat login benar
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($user) {
            if ($user['status'] == 1) { // jika akun masih aktif maka bernilai 1
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['username'],
                        'user_type' => $user['user_type']
                    ];
                    
                    $this->session->set_userdata($data);
                    if ($user['user_type'] == 1) { //jika role id 1 yang terpanggil maka tampilan admin yang akan ditampilkan
                        redirect('/project/school/administrator/dashboard');
                    } else {
                        redirect('/project/school/administrator/dashboard');
                    }
                } else { //misal data tidak sesuai ketika login maupun registrasi
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Password Salah!!! </div>');
                    redirect('/project/school/auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Akun Tidak Aktif!!! </div>');
                redirect('/project/school/auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Akun Tidak Ada!!! </div>');
            redirect('/project/school/auth');
        }

        
    }

    //fungsi untuk logout
    public function logout()
    { 
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('user_type');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kamu berhasil Log Out</div>');
        redirect('/project/school/auth');
    }

    public function blocked(){
        echo 'access blocked';
    }
}