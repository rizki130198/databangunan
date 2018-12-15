<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function input()
	{
		$this->load->view('include/head');
		$this->load->view('admin/input');
		$this->load->view('include/foot');
	}
	public function proses_input()
	{
		$this->M_back->proses_input();
	}
	public function views()
	{
		$data['info'] = $this->db->get_where('info_bangunan',array('id_user'=>$this->session->userdata('id')));
		$data['pemilik'] = $this->db->get_where('data_pemilik',array('id_user'=>$this->session->userdata('id')));
		$data['pengelola'] = $this->db->get_where('data_pengelola',array('id_user'=>$this->session->userdata('id')));
		$data['admin'] = $this->db->query("SELECT * FROM data_admin p INNER JOIN data_imb i ON p.id_pengelola=i.id_admin_imb where p.id_user='$this->session->userdata('id')'");
		$data['teknis'] = $this->db->get_where('data_teknis',array('id_user'=>$this->session->userdata('id')));
		$data['konsumsi'] = $this->db->query("SELECT * FROM data_air p INNER JOIN data_sumur i ON p.id_air=i.id_data_sumur where p.id_air_unik='$this->session->userdata('id')'");
		$data['sketsa'] = $this->db->get_where('sketsa_lokasi',array('id_user'=>$this->session->userdata('id')));
		$data['permasalahan'] = $this->db->get_where('permasalahan',array('id_user'=>$this->session->userdata('id')));
		$this->load->view('include/head');
		$this->load->view('admin/view',$data);
		$this->load->view('include/foot');

	}
}
