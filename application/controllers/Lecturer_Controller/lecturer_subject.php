<?php
defined('BASEPATH') or exit('No direct script access allowed');

class lecturer_subject extends CI_Controller
{


	public function Network_Security()
	{
		$this->load->view('Lecturer_Dashboard/network_security');
	}

	public function Net_Sec_CSI()
	{

		$data['error'] = ' ';
		$data = array('upload_date' => date(DATE_ATOM));
		$this->load->view('Lecturer_Dashboard/net_sec_csi', $data);
	}

	public function Net_Sec_CSI_View()
	{
		$data['csi'] = $this->net_sec_csi_model->get_csi_file()->result();

		$this->load->view('Lecturer_Dashboard/net_sec_csi_file', $data);
	}

	public function Net_Sec_CSI_upload()
	{
		$config['upload_path']          = './assets/FileSubject/Net_Sec/';
		$config['allowed_types']        = 'pdf|doc|docx|ppt|pptx|xls|xlsx';
		$config['max_size']             = 20480;
		$config['overwrite'] = TRUE;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('userfile')) {
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('Lecturer_Dashboard/net_sec_csi', $error);
		} else {
			//$data = array('upload_data' => $this->upload->data());
			$upload_data = $this->upload->data();
			$name = $upload_data['file_name'];

			$insert = $this->net_sec_csi_model->insert_csi_file($name);

			if ($insert) {
				$this->session->set_flashdata('message_csi', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            You have successfully upload new file
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
				$this->load->view('Lecturer_Dashboard/net_sec_csi');
			} else {
				echo "file upload failed";
			}

			//$this->load->view('Lecturer_Dashboard/net_sec_csi_file', $data);
		}
	}

	public function delete_csi($id)
	{
		$delete = $this->net_sec_csi_model->delete_csi_file($id);
		$data = $this->net_sec_csi_model->get_data_id($id)->row();
		$name = base_url('assets/FileSubject/Net_Sec' . $data->file);

		if (is_readable('./assets/FileSubject/Net_Sec/' . $name)) {
			unlink('./assets/FileSubject/Net_Sec/' . $name);
		} else {
			echo "file not found";
		}

		redirect('Net_Sec/CSI/view');
	}
}
