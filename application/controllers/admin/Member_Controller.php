<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if($this->session->userdata('penyihir')['role'] != 'superAdmin') {
            redirect('admin/login');
        }
        // $this->load->model('Auth_Model');
    }

	public function index() {
        $data['title']      = 'Member';
        $data['js_plugins'] = 'admin/pages/member/js/plugins_list';
        $data['script']     = 'admin/pages/member/js/list';
		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/pages/member/list');
		$this->load->view('admin/template/footer');
	}

    public function create_form() {
        $data['title']      = 'Member';
        $data['css_plugins'] = 'admin/pages/member/css/plugins_create';
        $data['js_plugins'] = 'admin/pages/member/js/plugins_create';
        $data['script']     = 'admin/pages/member/js/create';
		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/pages/member/create');
		$this->load->view('admin/template/footer');
	}
}
