<?php

class Kategori extends CI_Controller
{
	public function elektronik()
	{
		$data ['elektronik']=$this->model_kategori->data_elektronik()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('kategori/elektronik',$data);
		$this->load->view('templates/footer');
	}

	public function kamera()
	{
		$data ['kamera']=$this->model_kategori->data_kamera()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('kategori/kamera',$data);
		$this->load->view('templates/footer');
	}

	public function hp()
	{
		$data ['hp']=$this->model_kategori->data_hp()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('kategori/hp',$data);
		$this->load->view('templates/footer');
	}

	public function aksesoris()
	{
		$data ['aksesoris']=$this->model_kategori->data_aksesoris()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('kategori/aksesoris',$data);
		$this->load->view('templates/footer');
	}

}