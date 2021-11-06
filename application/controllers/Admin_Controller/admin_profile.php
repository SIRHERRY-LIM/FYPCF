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

	public function edit_profile()
	{
		$data['admin'] = $this->db->get_where(
			'admin',
			[

				'admin_email' => $this->session->userdata('email'),


			]
		)->row_array();

		$this->form_validation->set_rules('name', 'Full Name', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Update unsuccessful please try again
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');

			$this->load->view('Dashboard/admin_edit_profile', $data);
		} else {
			$name = $this->input->post('name');
			$email = $this->input->post('email');

			$upload_image = $_FILES['image']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'jpeg|jpg|png';
				$config['max_size']     = '2048';
				$config['upload_path'] = './assets/images/profile';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('image')) {
					$old_image = $data['admin']['image'];
					if ($old_image != 'default.png') {
						unlink(FCPATH . '/assets/images/profile/' . $old_image);
					}

					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}



			$this->db->set('admin_name', $name);
			$this->db->where('admin_email', $email);
			$this->db->update('admin');

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Congratulation!</strong>  Your profile has been updated
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
			
			');
			redirect('Admin_Controller/admin_profile');
		}
	}
}
