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
		$data['csi_file'] = $this->net_sec_csi_model->get_csi_file()->result();
		$data['error'] = ' ';
		$this->load->view('Lecturer_Dashboard/net_sec_csi', $data);
		$this->load->view('Lecturer_Dashboard/net_sec_csi_file', $data);
	}

	public function Net_Sec_CSI_upload()
	{
		$config['upload_path']          = './assets/FileSubject/Net_Sec/';
		$config['allowed_types']        = 'pdf|doc|docx|ppt|pptx|xls|xlsx';
		$config['max_size']             = 20480;


		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('userfile')) {
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('Lecturer_Dashboard/net_sec_csi', $error);
		} else {
			$data = array('upload_data' => $this->upload->data());

			$this->load->view('Lecturer_Dashboard/net_sec_csi', $data);
		}
	}
}
