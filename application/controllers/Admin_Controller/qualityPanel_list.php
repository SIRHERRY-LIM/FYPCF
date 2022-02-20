<?php
defined('BASEPATH') or exit('No direct script access allowed');

class qualityPanel_list extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function qualitypanelview()
	{

		$this->load->view('Dashboard/qualitypanel_list');
	}

	public function index()
	{
		$this->load->model('qualityPanel_model');
		$data['qualityPanel'] = $this->qualityPanel_model->getQualityPanel();
		$this->load->view('Dashboard/qualityPanel_list', $data);
	}

	public function input()
	{
		$this->load->view('Dashboard/add_lecturer_form');
	}

	public function store()
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

		if ($this->form_validation->run()) {
			$data = [
				'lecturer_name' => htmlspecialchars($this->input->post('name', true)),
				'image' => 'default.png',
				'lecturer_email' => htmlspecialchars($this->input->post('email', true)),
				'lecturer_password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'is_active' => 1,
				'date_created' => date(DATE_ATOM)
			];

			$this->load->model('lecturer_model');
			$this->lecturer_model->insertLecturer($data);

			$this->session->set_flashdata('message_lectureradd', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Congratulation!</strong>  Lecturer account has successfully created
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
			
			');
			redirect(base_url('lecturer'));
		} else {
			$this->session->set_flashdata('message_lectureradd', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Lecturer information is invalid
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
			
			');
			redirect(base_url('lecturer/add_form'));
		}
	}


	public function edit($lecturer_id)
	{
		$this->load->model('lecturer_model');
		$data['lecturer'] = $this->lecturer_model->editLecturer($lecturer_id);
		$this->load->view('Dashboard/lecturer_update', $data);
	}

	public function update($lecturer_id)
	{
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[admin.admin_email]');

		if ($this->form_validation->run()) {
			$data = [
				'lecturer_name' => htmlspecialchars($this->input->post('name', true)),

				'lecturer_email' => htmlspecialchars($this->input->post('email', true)),

				'is_active' => $this->input->post('status')

			];
			$this->load->model('lecturer_model');
			$this->lecturer_model->updateLecturer($data, $lecturer_id);

			$this->session->set_flashdata('message_lecturerupdate', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Congratulation!</strong>  Lecturer account has successfully update
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
			
			');
			redirect(base_url('lecturer/edit/' . $lecturer_id));
		} else {
			$this->session->set_flashdata('message_lecturerupdate', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Lecturer update is unsuccessful 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
			
			');

			redirect(base_url('lecturer/edit'));
		}
	}

	public function delete($lecturer_id)
	{
		$this->load->model('lecturer_model');
		$this->lecturer_model->deleteLecturer($lecturer_id);
		$this->session->set_flashdata('message_lecturerdelete', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Lecturer account is deleted
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');

		redirect(base_url('lecturer'));
	}
}
