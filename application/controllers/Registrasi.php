<?php

class Registrasi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
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


			$this->load->view('auth/registrasi');
		} else {
			$data = array(

				'nama'			=> $this->input->post('nama', true),
				'username'		=> $this->input->post('username', true),
				'password1'		=> password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'role_id'		=> 2,
			);

			$this->model_akun->daftar($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Akun Berhasil Terdaftar!
		  </div>');
			redirect(base_url('login'));
		}
	}
}
