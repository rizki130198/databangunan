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
	public function views()
	{
		$data['title'] = "Edit data Bangunan";
		$id = $this->session->userdata('id');
		$data['info'] = $this->db->get_where('info_bangunan',array('id_user'=>$id))->result();
		$data['pemilik'] = $this->db->get_where('data_pemilik',array('id_user'=>$id))->result();
		$data['pengelola'] = $this->db->get_where('data_pengelola',array('id_users'=>$id))->result();
		$data['admin'] = $this->db->get_where("data_admin",array('id_user'=>$id))->result();
		foreach ($data['admin'] as $key) {
			$data['imb'] = $this->db->get_where("data_imb",array('id_admin_imb'=>$key->id_admin))->result();
			}
		$data['teknis'] = $this->db->get_where('data_teknis',array('id_user'=>$id))->result();
		$data['konsumsi'] = $this->db->query("SELECT * FROM data_air p INNER JOIN data_sumur i ON p.id_air=i.id_data_sumur where p.id_air_unik='$id'")->result();
		$data['sketsa'] = $this->db->get_where('sketsa_lokasi',array('id_user'=>$id))->result();
		$data['permasalahan'] = $this->db->get_where('permasalahan',array('id_user'=>$id))->result();
		$this->load->view('include/head',$data);
		$this->load->view('admin/edit',$data);
		$this->load->view('include/foot');
	}
	public function logout()
	{
		$sess = $this->session->sess_destroy();
		redirect('welcome/login');
	}
}
