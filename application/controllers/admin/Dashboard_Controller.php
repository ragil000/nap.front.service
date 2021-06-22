<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if($this->session->userdata('penyihir')['role'] != 'superAdmin') {
            redirect('admin/login');
        }
        // $this->load->model('Auth_Model');
    }

	public function index() {
        $data['js_plugins']     = 'admin/pages/dashboard/js/js_plugins';
        $data['script']         = 'admin/pages/dashboard/js/script';
		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/pages/dashboard/dashboard');
		$this->load->view('admin/template/footer');
	}
}
