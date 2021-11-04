<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_Form extends CI_Controller
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

			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Admin information is invalid
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
			
			');

			$this->load->view('Dashboard/admin_profile_form');
		} else {

			$data = [
				'admin_name' => htmlspecialchars($this->input->post('name', true)),
				'image' => 'default.png',
				'admin_email' => htmlspecialchars($this->input->post('email', true)),
				'admin_password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'is_active' => 1,
				'date_created' => date(DATE_ATOM)

			];

			$this->db->insert('admin', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Congratulation!</strong>  Admin account has successfully created
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
			
			');


			redirect('Admin_Controller/Admin_Form/back');
		}
	}



	public function back()
	{

		$this->load->view('Dashboard/admin_profile_form');
	}
}
