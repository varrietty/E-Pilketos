<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Perolehan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('ion_auth', 'form_validation', 'session', 'form_helper');
        $this->load->model('Kandidat_model');
        $this->load->model('Data_pemilih_model');
        $this->load->helper('url', 'language', 'form', 'file');

        // Security check if the user is admin
        if (!$this->ion_auth->logged_in()) {
            // redirect them to the login page
            redirect('admin/auth/login', 'refresh');
        } else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
        {   // redirect them to the home page because they must be an administrator to view this
            show_error('You must be an administrator to view this page.');
        }
    }

    public function index()
    {
        $this->load->view('back/perolehan/perolehan');
    }

    public function update()
    {
        $perolehan = [];

        // Get jumlah pemilih
        $jumlahPemilih = $this->Data_pemilih_model->get_jumlah() ?: 0;

        // Get kandidat OSIS
        $osis = $this->Kandidat_model->get_kandidat_osis();

        foreach ($osis as $key => $value) {
            $jumlahSuara = $value->jumlahsuara ?: 0;

            $perolehan[] = (object) [
                'organisasi' => 'OSIS',
                'nama' => $value->nama,
                'jumlahSuara' => $jumlahSuara,
                'foto' => $value->foto,
                'nourut' => $value->nourut,
                'persen' => $jumlahPemilih == 0 ? 0 : $jumlahSuara/$jumlahPemilih*100,
                'jumlahPemilih' => $jumlahPemilih,
            ];
        }

        // Get kandidat MPK
        $mpk = $this->Kandidat_model->get_kandidat_mpk();

        foreach ($mpk as $key => $value) {
            $jumlahSuara = $value->jumlahsuara ?: 0;

            $perolehan[] = (object) [
                'organisasi' => 'MPK',
                'nama' => $value->nama,
                'jumlahSuara' => $jumlahSuara,
                'foto' => $value->foto,
                'nourut' => $value->nourut,
                'persen' => $jumlahPemilih == 0 ? 0 : $jumlahSuara/$jumlahPemilih*100,
                'jumlahPemilih' => $jumlahPemilih,
            ];
        }

        $data = [
            'perolehan' => $perolehan
        ];

        $this->load->view('back/perolehan/fragment', $data);
    }
}

/* End of file Sementara.php */
