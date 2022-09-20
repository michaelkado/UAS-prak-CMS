<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // digunakan untuk memastikan bahwa halaman ini dapat diakses jika session bernilai TRUE
        if ($this->session->userdata("login_status") == FALSE) {
            redirect("admin/login", 'refresh');
        }

    }

    public function index() {
        $data['judul'] = 'H O M E';
        $tmp['konten'] = $this->load->view('admin/home/home', $data, TRUE);
        $this->load->view('admin/template', $tmp);
    }
}


 ?>