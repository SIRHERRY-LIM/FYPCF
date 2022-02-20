<?php
defined('BASEPATH') or exit('No direct script access allowed');

class batch extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{

		$data['batch'] = $this->batch_model->show_data('batch')->result();

		$this->load->view('Dashboard/batch', $data);
	}

	public function add_new_batch()
	{
		$this->load->view('Dashboard/batch_form');
	}

	public function batch_action()
	{
		$this->form_validation->set_rules('Year', 'year', 'required');
		$this->form_validation->set_rules('Semester', 'semester', 'required');

		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('message_add_batch', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Add new batch fail
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
			$this->add_new_batch();
		} else {

			$year = $this->input->post('Year');
			$semester = $this->input->post('Semester');

			$data = [
				'Year' => $year,
				'Semester' => $semester

			];

			$this->batch_model->insert_data($data, 'batch');
			$this->session->set_flashdata('message_add_batch', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            You have successfully add new batch
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
			redirect('Admin_Controller/batch/add_new_batch');
		}
	}

	public function edit($id_batch = 'id_batch')
	{

		$this->load->model('batch_model');
		$data['batch'] = $this->batch_model->edit_data($id_batch);
		$this->load->view('Dashboard/batch_form_update', $data);
	}

	public function update($id_batch = 'id_batch')
	{
		$data = [
			'year' => $this->input->post('year'),
			'semester' => $this->input->post('semester')
		];
		$this->load->model('batch_model');
		$this->batch_model->update_data($data, $id_batch);
		$this->load->view('Dashboard/batch_form_update', $data);
	}
}
