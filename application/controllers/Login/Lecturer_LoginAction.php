<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lecturer_LoginAction extends CI_Controller
{

	public function index()
	{

		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');


		if ($this->form_validation->run() == false) {
			$this->load->view('Auth/lecturer_login');
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');

		$password = $this->input->post('password');

		$lecturer = $this->db->get_where('lecturer', [
			'lecturer_email' => $email,

		])->row_array();

		if ($lecturer) {

			if ($lecturer['is_active'] == 1) {

				if (password_verify($password, $lecturer['lecturer_password'])) {

					$data = [

						'email' => $lecturer['lecturer_email'],

					];

					$this->session->set_userdata($data);
					redirect('lecturer/dashboard');
				} else {
					$this->session->set_flashdata('lecturer_message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Wrong password!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');

					redirect('Login/Lecturer_LoginAction');
				}
			} else {

				$this->session->set_flashdata('lecturer_message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Email is not activated!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
				redirect('Login/Lecturer_LoginAction');
			}
		} else {
			$this->session->set_flashdata('lecturer_message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Email is not registered!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
			redirect('Login/Lecturer_LoginAction');
		}
	}
}
