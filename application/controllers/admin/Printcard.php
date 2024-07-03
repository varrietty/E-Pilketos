<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Printcard extends CI_Controller
{

    public function index()
    {

        $idkelas = $this->input->post('cetakKelas');

        if ($idkelas != '') {
            $this->db->where('idkelas', $idkelas);
        }
        $this->db->order_by('kelas', 'asc');
        $this->db->order_by('nama', 'asc');
        $data['data_pemilih_data'] = $this->db->get('data_pemilih')->result();

        $this->load->view('back/kartu', $data);
    }
}

/* End of file Printt.php */