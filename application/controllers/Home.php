<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        
        $data['data'] = $this->pbmodel->getData();
        $this->load->view('home', $data);
        
    }

    

}

/* End of file Home.php */
