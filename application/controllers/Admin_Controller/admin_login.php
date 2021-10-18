<?php

class admin_login extends CI_Controller
{
	public function index()
	{

		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');


		if ($this->form_validation->run() == false) {
			$this->load->view('Auth/admin_login');
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$admin = $this->db->get_where('admin', ['admin_email' => $email])->row_array();

		if ($admin) {

			if ($admin['is_active'] == 1) {

				if (password_verify($password, $admin['admin_password'])) {

					$data = [

						'email' => $admin['admin_email']
					];

					$this->session->set_userdata($data);
					redirect('Admin_Controller/admin');
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Wrong password!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');

					redirect('Admin_Controller/auth');
				}
			} else {

				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Email is not activated!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
				redirect('Admin_Controller/auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Email is not registered!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
			redirect('Admin_Controller/auth');
		}
	}
}
