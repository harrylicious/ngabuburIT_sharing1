<?php

class M_siswa extends CI_Model {
    public $table = 'siswa';

    function load_data() {
        return $this->db->get($this->table);
    }


}

?>