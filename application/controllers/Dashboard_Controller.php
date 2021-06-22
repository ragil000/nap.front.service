<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

	public function index() {
        if($this->session->userdata('penyihir')) {
            $data['js_plugins'] = 'pages/js/plugins';
            $data['script']     = 'pages/js/script';
            $this->load->view('template/header', $data);
            $this->load->view('template/footer');
        }else {
            $this->load->view('template/header');
            $this->load->view('pages/dashboard-noauth');
            $this->load->view('template/footer');
        }
	}

    public function create_form() {
        $data['title']      = 'Tugas';
        $data['css_plugins'] = 'admin/pages/schedule/css/plugins_create';
        $data['js_plugins'] = 'admin/pages/schedule/js/plugins_create';
        $data['script']     = 'admin/pages/schedule/js/create-user';
		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/pages/schedule/create');
		$this->load->view('admin/template/footer');
	}
}
