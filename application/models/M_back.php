<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_back extends CI_Model {

	public function proses_input()
	{
		$nama_bang = $this->input->post('nama_bangunan');
		$lokasi = $this->input->post('lokasi');
		$rt_info = $this->input->post('rt_info');
		$rw_info = $this->input->post('rw_info');
		$kelurahan_info = $this->input->post('kelurahan_info');
		$kecamatan_info = $this->input->post('kecamatan_info');
		$kota_info = $this->input->post('kota_info');
		$kode_info = $this->input->post('kode_info');
		$nop = $this->input->post('nop');
		$nbt = $this->input->post('nbt');
		$nama_bang = $this->input->post('nama_bangunan');
		$nama_bang = $this->input->post('nama_bangunan');
		$nama_bang = $this->input->post('nama_bangunan');
		$nama_bang = $this->input->post('nama_bangunan');
		$nama_bang = $this->input->post('nama_bangunan');
		$nama_bang = $this->input->post('nama_bangunan');
		$nama_bang = $this->input->post('nama_bangunan');
		$nama_bang = $this->input->post('nama_bangunan');
		$nama_bang = $this->input->post('nama_bangunan');
		$this->db->insert('info_bangunan',array(
			'id_user'=>$this->session->userdata('id'),
			'nama_bangunan'=>$nama_bang,
			'lokasi'=>$lokasi,
			'rt'=>$rt_info,
			'rw'=>$rw_info,
			'kelurahan'=>$kelurahan_info,
			'kecamatan'=>$kecamatan_info,
			'kota'=>$kota_info,
			'kode_pos'=>$kode_pos,
			'NOP'=>$nop,
			'mulai_operasi'=>$nbt,
			'created_at'=>date('Y-m-d H:i:s')
		));
		
	}
	

}

/* End of file M_back.php */
/* Location: ./application/models/M_back.php */