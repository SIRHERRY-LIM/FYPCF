<?php
defined('BASEPATH') or exit('No direct script access allowed');

class lecturer_login extends CI_Controller
{

	public function index()

	{
		$this->load->view('auth/lecturer_login');
	}
}
