<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin_register extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}


	public function index()
	{

		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[admin.admin_email]');
		$this->form_validation->set_rules(
			'password',
			'Password',
			'required|trim|min_length[8]|matches[password1]',
			[
				'matches' => 'Password dont match!',
				'min_length' => 'Passport too short! minimum 8 characters'
			]
		);
		$this->form_validation->set_rules('password1', 'Password1', 'required|trim|min_length[8]|matches[password]');


		if ($this->form_validation->run() == false) {


			$this->load->view('Register/admin_register');
		} else {

			$data = [
				'admin_name' => htmlspecialchars($this->input->post('name', true)),
				'admin_email' => htmlspecialchars($this->input->post('email', true)),
				'admin_password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'is_active' => 1,
				'date_created' => date(DATE_ATOM)
			];

			$this->db->insert('admin', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Congratulation!</strong>  Your account has been created. Please Login
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
			
			');


			redirect('Auth');
		}
	}
}
