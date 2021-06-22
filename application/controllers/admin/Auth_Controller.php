<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/Auth_Model');
    }

	public function index() {
        if($this->session->userdata('penyihir')['role'] == 'superAdmin') {
            redirect('admin/dashboard');
        }
		$this->load->view('admin/pages/login');
	}

    public function auth() {
        $post = $this->input->post();
        $results = $this->Auth_Model->auth($post);
        if($results->accountRole != 'superAdmin') {
            $this->session->set_userdata(['message' => alertRMY('anda bukan admin', false)]);
            $this->session->keep_flashdata('message');
            redirect('admin/login');
        }else {
            if($results->status) {
                $session_data = [
                    'email' => $results->email,
                    'token' => $results->token,
                    'role' => $results->accountRole,
                    'status' => $results->accountStatus,
                ];
                $this->session->set_userdata(['penyihir' => $session_data]);
                redirect('admin/dashboard/');
            }else {
                $this->session->set_userdata(['message' => alertRMY('username atau password salah', false)]);
                $this->session->keep_flashdata('message');
                redirect('admin/login');
            }
        }
    }

    public function logout() {
        $this->session->unset_userdata('penyihir');
        redirect('admin/login');
    }
}
