<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function input()
	{
		$data['title'] = "Halaman Input Bangunan Tinggi";
		$this->load->view('include/head',$data);
		$this->load->view('admin/input');
		$this->load->view('include/foot');
	}
	public function bang_tinggi()
	{
		$data['title'] = "Halaman Data Bangunan Tinggi";
		$this->load->view('include/head',$data);
		$this->load->view('admin/bang_tinggi');
		$this->load->view('include/foot');
	}
	public function viewdata()
	{
		$data['title'] = "Halaman Lihat Data Bangunan Tinggi";
		$this->load->view('include/head',$data);
		$this->load->view('admin/view_data');
		$this->load->view('include/foot');
	}
	public function input_rumah()
	{
		$data['title'] = "Halaman Input Rumah Tinggal";
		$this->load->view('include/head',$data);
		$this->load->view('admin/input_rumah');
		$this->load->view('include/foot');
	}
	public function rum_tinggal()
	{
		$data['title'] = "Halaman Data Rumah Tinggal";
		$this->load->view('include/head',$data);
		$this->load->view('admin/input');
		$this->load->view('include/foot');
	}
	public function proses_input()
	{
		$this->M_back->proses_input();
	}
	public function logout()
	{
		$sess = $this->session->sess_destroy();
		redirect('welcome/login');
	}
}
