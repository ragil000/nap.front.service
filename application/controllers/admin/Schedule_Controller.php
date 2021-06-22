<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if($this->session->userdata('penyihir')['role'] != 'superAdmin') {
            redirect('admin/login');
        }
        // $this->load->model('Auth_Model');
    }

	public function index() {
        $data['title']      = 'Tugas';
        $data['js_plugins'] = 'admin/pages/schedule/js/plugins_list';
        $data['script']     = 'admin/pages/schedule/js/list';
		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/pages/schedule/list');
		$this->load->view('admin/template/footer');
	}

    public function create_form() {
        $data['title']      = 'Tugas';
        $data['css_plugins'] = 'admin/pages/schedule/css/plugins_create';
        $data['js_plugins'] = 'admin/pages/schedule/js/plugins_create';
        $data['script']     = 'admin/pages/schedule/js/create';
		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/pages/schedule/create');
		$this->load->view('admin/template/footer');
	}
}
