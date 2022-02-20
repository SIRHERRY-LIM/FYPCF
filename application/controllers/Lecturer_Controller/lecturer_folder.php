<?php
defined('BASEPATH') or exit('No direct script access allowed');

class lecturer_folder extends CI_Controller
{
	public function index()
	{
		$this->load->view('Lecturer_Dashboard/lecturer_folder');
	}
}
