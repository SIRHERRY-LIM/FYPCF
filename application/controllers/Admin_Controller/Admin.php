<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function index()
	{
		$data['admin'] = $this->db->get_where(
			'admin',
			[

				'admin_email' => $this->session->userdata('email'),


			]
		)->row_array();

		$this->load->view('Dashboard/admin_dashboard', $data);
	}


	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            You have successfully <strong>LogOut</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
		redirect('Admin_Controller/Auth');
	}
}
