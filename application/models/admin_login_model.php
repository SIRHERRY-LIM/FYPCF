<?php

class admin_login_model extends CI_Model
{

	public function check_login($email, $password)
	{
		$this->db->where("email", $email);
		$this->db->where("password", $password);
		return	$this->db->get('admin');
	}

	public function getLoginData($admin, $pass)
	{
		$a = $admin;
		$p = password_hash($pass, PASSWORD_DEFAULT);

		$query_checkLogin = $this->db->get_where('admin', array(
			'username' => $a,
			'password' => $p
		));

		if (count($query_checkLogin->result()) > 0) {
			foreach ($query_checkLogin->result() as $qck) {
				foreach ($query_checkLogin->result() as $ck) {
					$sess_data['logged_in'] = TRUE;
					$sess_data['email'] = $ck->email;
					$sess_data['password'] = $ck->password;

					$this->session->set_admindata($sess_data);
				}
				redirect('Admin/admin_dashboard');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
			redirect('WelcomePage/admin_login');
		}
	}
}
