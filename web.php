<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
    
    public function about() {
        // Set data untuk judul halaman
        $data['judul'] = "Halaman About";
        
        // Load view untuk header, halaman utama, dan footer
        $this->load->view('v_header', $data);
        $this->load->view('v_about', $data);
        $this->load->view('v_footer', $data);
    }
}
