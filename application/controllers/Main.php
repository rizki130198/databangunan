<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function jsonWal()
	{
		echo "<option value='' >-- SILAHKAN PILIH KOTA --</option>";
		echo "<option value=''  disabled></option>";
		$x = $this->M_front->jsonWal();
		foreach ($x as $v) {
			echo '<option value='.$v->id.'>'.$v->name.'</option>';
		}
	}

	public function jsonKec()
	{
		echo "<option value=''>-- SILAHKAN PILIH KECAMATAN --</option>";
		echo "<option value='' disabled></option>";
		$x = $this->M_front->jsonKec();
		foreach ($x as $v) {
			echo '<option value='.$v->regency_id.'>'.$v->name.'</option>';
		}
	}

	public function input()
	{
		// $cek =  $this->db->get_where('info_bangunan',array('id_user'=>$this->session->userdata('id')))->row();
		// if (count($cek) > 0) {
		// 	$this->session->set_flashdata('gagal', 'Anda sudah masukan data 1 akun hanya 1');
		// 	redirect('main/bang_tinggi');
		// }else{
		$data['title'] = "Halaman Input Bangunan Tinggi";
		$data['kelurahan'] = $this->M_front->getkel();
		$this->load->view('include/head',$data);
		$this->load->view('admin/input',$data);
		$this->load->view('include/foot');
		//}

	}
	public function bang_tinggi()
	{
		$data['title'] = "Halaman Data Bangunan Tinggi";
		$this->db->select('*');
		$this->db->from('info_bangunan');
		$this->db->join('data_pemilik','data_pemilik.id_info_unik = info_bangunan.id_info');
		$this->db->join('data_pengelola', 'data_pengelola.id_peng_unik = info_bangunan.id_info');
		$this->db->where('info_bangunan.id_user',$this->session->userdata('id'));
		$data['pemilik'] = $this->db->get();
		$this->load->view('include/head',$data);
		$this->load->view('admin/bang_tinggi',$data);
		$this->load->view('include/foot');
	}
	public function viewdata($id)
	{
		$data['cek'] = $this->db->get_where('info_bangunan',array('id_info'=>$id));	
		if ($data['cek']->num_rows() > 0) {
			$data['title'] = "Halaman Lihat Data Bangunan Tinggi";		
			$data['info'] = $this->db->get_where('info_bangunan',array('id_info'=>$id))->result();
			foreach ($data['info'] as $info) {
				if ($info->id_user!=$this->session->userdata('id')) {
					redirect('main/bang_tinggi');
					$this->session->set_flashdata('gagal', 'Data yang anda cari tidak ada');
				}
			}
			$data['pemilik'] = $this->db->get_where('data_pemilik',array('id_info_unik'=>$id))->result();
			$data['pengelola'] = $this->db->get_where('data_pengelola',array('id_peng_unik'=>$id))->result();
			$data['admin'] = $this->db->get_where("data_admin",array('id_admin_unik'=>$id))->result();
			foreach ($data['admin'] as $key) {
				$data['imb'] = $this->db->get_where("data_imb",array('id_admin_imb'=>$key->id_admin))->result();
			}
			$data['teknis'] = $this->db->get_where('data_teknis',array('id_teknis_unik'=>$id))->result();
			foreach ($data['teknis'] as $teknis) {
				$data['hari'] = $this->db->get_where('penggunan_bangunan',array('id_join'=>$teknis->id_teknis))->result();
				$data['jenis'] = $this->db->get_where('jenis_bangunan',array('id_admin_teknis'=>$teknis->id_teknis))->result();
			}
			$data['konsumsi'] = $this->db->get_where('data_air',array('id_air_unik'=>$id))->result();
			foreach ($data['konsumsi'] as $sumur) {
				$data['sumur'] = $this->db->get_where('data_sumur',array('id_data_sumur'=>$sumur->id_air))->result();
				$data['bulan'] = $this->db->get_where('data_konsumsi',array('id_data_air'=>$sumur->id_air))->result();
				$data['sumber'] = $this->db->get_where('sumber_air',array('id_sumber_air'=>$sumur->id_air))->result();
			}
			$data['sketsa'] = $this->db->get_where('sketsa_lokasi',array('id_sketsa_unik'=>$id))->result();
			$data['permasalahan'] = $this->db->get_where('permasalahan',array('id_unik_masalah'=>$id))->result();
			$this->load->view('include/head',$data);
			$this->load->view('admin/view_data');
			$this->load->view('include/foot');
		}else{
			redirect('main/bang_tinggi');
			$this->session->set_flashdata('gagal', 'Data yang anda cari kosong');
		}

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
		$this->load->view('admin/rum_tinggal');
		$this->load->view('include/foot');
	}
	public function viewdatarum()
	{
		$data['title'] = "Halaman Lihat Data Rumah Tinggal";
		$this->load->view('include/head',$data);
		$this->load->view('admin/view_datarum');
		$this->load->view('include/foot');
	}
	public function proses_input()
	{
		$this->M_back->proses_input();
	}
	public function proses_edit()
	{
		$this->M_back->proses_edit();
	}
	public function editdata($id)
	{
		$data['cek'] = $this->db->get_where('info_bangunan',array('id_info'=>$id));	
		if ($data['cek']->num_rows() > 0) {
			$data['title'] = "Edit data Bangunan";	
			$data['info'] = $this->db->get_where('info_bangunan',array('id_info'=>$id))->result();
			foreach ($data['info'] as $info) {
				if ($info->id_user!=$this->session->userdata('id')) {
					redirect('main/bang_tinggi');
					$this->session->set_flashdata('gagal', 'Data yang anda cari tidak ada');
				}
			}	
			$data['pemilik'] = $this->db->get_where('data_pemilik',array('id_info_unik'=>$id))->result();
			$data['pengelola'] = $this->db->get_where('data_pengelola',array('id_peng_unik'=>$id))->result();
			$data['admin'] = $this->db->get_where("data_admin",array('id_admin_unik'=>$id))->result();
			foreach ($data['admin'] as $key) {
				$data['imb'] = $this->db->get_where("data_imb",array('id_admin_imb'=>$key->id_admin))->result();
			}
			$data['teknis'] = $this->db->get_where('data_teknis',array('id_teknis_unik'=>$id))->result();
			foreach ($data['teknis'] as $teknis) {
				$data['hari'] = $this->db->get_where('penggunan_bangunan',array('id_join'=>$teknis->id_teknis))->result();
				$data['jenis'] = $this->db->get_where('jenis_bangunan',array('id_admin_teknis'=>$teknis->id_teknis))->result();
			}
			$data['konsumsi'] = $this->db->get_where('data_air',array('id_air_unik'=>$id))->result();
			foreach ($data['konsumsi'] as $sumur) {
				$data['sumur'] = $this->db->get_where('data_sumur',array('id_data_sumur'=>$sumur->id_air))->result();
				$data['bulan'] = $this->db->get_where('data_konsumsi',array('id_data_air'=>$sumur->id_air))->result();
				$data['sumber'] = $this->db->get_where('sumber_air',array('id_sumber_air'=>$sumur->id_air))->result();
			}
			$data['sketsa'] = $this->db->get_where('sketsa_lokasi',array('id_sketsa_unik'=>$id))->result();
			$data['permasalahan'] = $this->db->get_where('permasalahan',array('id_unik_masalah'=>$id))->result();
			$this->load->view('include/head',$data);
			$this->load->view('admin/edit',$data);
			$this->load->view('include/foot');
		}else{
			redirect('main/bang_tinggi');
			$this->session->set_flashdata('gagal', 'Data yang anda cari kosong');
		}
	}
	public function logout()
	{
		$sess = $this->session->sess_destroy();
		redirect('welcome/login');
	}
}
