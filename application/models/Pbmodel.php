<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pbmodel extends CI_Model {

    function getData()
    {
        $q = $this->db->get('t_produk');
        return $q;
    }

}

/* End of file Pbmodel.php */
