<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_front extends CI_Model {

	public function proses_log($u,$p)
	{
		$log = $this->db->get_where('users',array('username' =>$u,'password' => md5($p)));
		if ($log->num_rows() > 0) {
			$x = $log->row();
			$sessi = array(
				'id' => $x->id, 
				'email' => $x->email, 
				'nama' => $x->username, 
				'level' => $x->level
			);
			$this->session->set_userdata($sessi);
			redirect('main/input');
		}else{
			$this->session->set_flashdata('gagal', 'Tidak dapat login, harap periksa kembali username dan password anda');
			redirect('welcome/login');
		}
	}	// Lokasi
	function getKecamatan(){
		$q = $this->db->query("SELECT 
			d.id,d.name AS kecName, r.name AS kabName, p.name AS provName 
			FROM districts d 
			INNER JOIN regencies r ON r.id = d.regency_id 
			INNER JOIN provinces p ON p.id=r.province_id
			WHERE p.id=31");
		return $q->result();
	}
	public function getkel(){
		$q = $this->db->query("SELECT v.district_id AS id, v.name AS kel
			FROM districts d 
			INNER JOIN villages v ON v.district_id = d.id
			WHERE d.regency_id=3101 OR d.regency_id=3171 OR d.regency_id=3172 OR d.regency_id=3173 OR d.regency_id=3174 OR d.regency_id=3175");
		return $q->result();
	}

	public function jsonWal()
	{
		$id = $this->input->get('id');
		return $this->db->query("SELECT * FROM `regencies` WHERE id = $id")->result();
	}

	public function jsonKec()
	{
		$id = $this->input->get('id');
		return $this->db->query("SELECT * FROM `districts` WHERE id = $id")->result();
	}

}

/* End of file M_front.php */
/* Location: ./application/models/M_front.php */