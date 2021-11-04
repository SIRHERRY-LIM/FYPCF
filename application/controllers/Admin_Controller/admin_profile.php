<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin_profile extends CI_Controller
{

	public function index()
	{

		$data['admin'] = $this->db->get_where(
			'admin',
			[

				'admin_email' => $this->session->userdata('email'),


			]
		)->row_array();
		$this->load->view('Dashboard/admin_profile', $data);
	}

	public function input()
	{
		$data = array(

			'admin_id' => set_value('admin_id'),
			'image' => 'default.png',
			'admin_name' => set_value('admin_name'),

			'admin_email' => set_value('admin_email'),
			'admin_password' => set_value('admin_password'),
			'is_active' => set_value('is_active'),
			'date_created' => set_value('date_created')

		);

		$this->load->view('Dashboard/admin_profile_form', $data);
	}
}
