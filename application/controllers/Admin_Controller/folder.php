<?php
defined('BASEPATH') or exit('No direct script access allowed');

class folder extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('Dashboard/folder');
	}
}
