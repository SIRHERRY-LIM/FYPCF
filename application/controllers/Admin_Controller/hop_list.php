<?php
defined('BASEPATH') or exit('No direct script access allowed');

class hop_list extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->model('hop_model');
		$data['hop'] = $this->hop_model->getHOP();
		$this->load->view('Dashboard/hop_list', $data);
	}

	public function input()
	{
		$this->load->view('Dashboard/add_hop_form');
	}

	public function store()
	{

		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[hop.hop_email]');
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
				'hop_name' => htmlspecialchars($this->input->post('name', true)),
				'image' => 'default.png',
				'hop_email' => htmlspecialchars($this->input->post('email', true)),
				'hop_password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'is_active' => 1,
				'date_created' => date(DATE_ATOM)
			];

			$this->load->model('hop_model');
			$this->hop_model->insertHOP($data);

			$this->session->set_flashdata('message_hopadd', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Congratulation!</strong>  HOP account has successfully created
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
			
			');
			redirect(base_url('hop'));
		} else {
			$this->session->set_flashdata('message_hopadd', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                HOP information is invalid
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
			
			');
			redirect(base_url('hop/add'));
		}
	}


	public function edit($hop_id)
	{
		$this->load->model('hop_model');
		$data['hop'] = $this->hop_model->editHOP($hop_id);
		$this->load->view('Dashboard/hop_update', $data);
	}

	public function update($hop_id)
	{
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		// $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[hop.hop_email]');

		if ($this->form_validation->run()) {
			$data = [
				'hop_name' => htmlspecialchars($this->input->post('name', true)),

				'hop_email' => htmlspecialchars($this->input->post('email', true)),

				'is_active' => $this->input->post('status')

			];
			$this->load->model('hop_model');
			$this->hop_model->updateHOP($data, $hop_id);

			$this->session->set_flashdata('message_hopupdate', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Congratulation!</strong>  HOP account has successfully update
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
			
			');
			redirect(base_url('hop'));
		} else {
			$this->session->set_flashdata('message_hopupdate', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                HOP update is unsuccessful 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
			
			');


			redirect(base_url('hop/edit/' . $hop_id));
		}
	}

	public function delete($hop_id)
	{
		$this->load->model('hop_model');
		$this->hop_model->deleteHOP($hop_id);
		$this->session->set_flashdata('message_hopdelete', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            HOP account is deleted
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');

		redirect(base_url('hop'));
	}
}
