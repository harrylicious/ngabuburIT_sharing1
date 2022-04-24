<?php

class M_makanan extends CI_Model {
    public $table = 'makanan';

    function load_data() {
        return $this->db->get($this->table);
    }
}
?>