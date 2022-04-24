<?php

class makanan extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('m_makanan');
    }

    public function get_data() {
        $data['data'] = $this->m_makanan->load_data()->result();

        $this->load->view('v_daftar_makanan', $data);

    }
}

?>