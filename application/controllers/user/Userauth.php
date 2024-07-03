<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Userauth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Userauth_model');
        $this->load->library('session');
    }

    public function index()
    {
        if ($this->session->userdata('logged')) {
            redirect(base_url());
        } else {
            $data['title'] = 'E-Voting';
            $this->load->view('front/login', $data);
        }
    }

    public function ajax_login()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');

        if ($this->form_validation->run() == false) {
            echo 'td';
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $q_data = $this->Userauth_model->akses($username, $password);

            if ($q_data->num_rows() > 0) {
                $user_data = $q_data->row_array();
                if ($user_data['aktif'] != 1) {
                    echo 'ta';
                } elseif ($user_data['status'] == 'Sudah Memilih') {
                    echo 'nologin';
                } else {
                    $userdata = array(
                        "logged" => true,
                        "userid" => $user_data['id'],
                        "username" => $user_data['username'],
                        "nama" => $user_data['nama'],
                        "level" => 'siswa',
                        "status" => $user_data['status'],
                        "aktif" => $user_data['aktif'],
                    );
                    $this->session->set_userdata($userdata);
                    echo 'ok';
                }
            } else {
                echo 'td';
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}