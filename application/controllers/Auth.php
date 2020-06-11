<?php

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username harus diisi']);
		$this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Password harus diisi']);

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('auth/login');


			$this->load->helper('url');
		} else {
			$auth = $this->model_akun->cek_login();

			if ($auth == FALSE) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
				 Username atau Password salah!
			  </div>');
				redirect(base_url("auth/login"));
			} else {
				$this->session->set_userdata('username', $auth->username);
				$this->session->set_userdata('role_id', $auth->role_id);

				switch ($auth->role_id) {
					case 1:
						redirect(base_url("/admin/dashboard_admin"));
						break;
					case 2:
						redirect(base_url("welcome"));
						break;
					default:
						break;
				}
			}
		}
	}
	public function registrasi()
	{
		$this->form_validation->set_rules('name', 'Nama', 'required', [
			'required' => 'Nama Harus Diisi'
		]);
		$this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username Harus Diisi']);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
			'required' => 'Password Harus Diisi',
			'matches' => 'Password harus sama!',
			'min_length' => 'password terlalu pendek!'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required |matches[password1]');
		if ($this->form_validation->run() == false) {

			$this->load->view('templates/header');
			$this->load->view('auth/registrasi');
		} else {
			$data = [

				'nama'			=> htmlspecialchars($this->input->post('name', true)),
				'username'		=> htmlspecialchars($this->input->post('username', true)),
				'password'		=> password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'role_id'		=> 2,
			];

			$this->db->insert('tb_user', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Akun Berhasil Terdaftar!
		  </div>');
			redirect(base_url("auth/login"));
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth/login');
	}
}
