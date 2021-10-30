<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin_profile extends CI_Controller
{

	public function index()
	{
		$data['admin'] = $this->admin_profile_model->show_data()->result();
		$this->load->view('Dashboard/admin_profile', $data);
	}
}
