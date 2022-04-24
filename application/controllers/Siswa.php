<?php

class Siswa extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('m_siswa');
    }

    public function index() {
        echo "HELLO DUDE";
    }

    public function get_data() {
        //RESULT
        //ROW ARRAY

        $data['data'] = $this->m_siswa->load_data()->result();
        
        $data['user'] = 'Harry';

        $this->load->view('v_daftar_siswa', $data);

    }

}

?>