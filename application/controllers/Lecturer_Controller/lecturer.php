

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lecturer extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		if (!isset($this->session->userdata['email'])) {
			redirect('Admin_Controller');
		}
	}

	public function index()
	{
		$data['lecturer'] = $this->db->get_where(
			'lecturer',
			[

				'lecturer_email' => $this->session->userdata('email'),


			]
		)->row_array();

		$this->load->view('Lecturer_Dashboard/lecturer_dashboard', $data);
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
