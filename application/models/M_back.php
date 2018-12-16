<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_back extends CI_Model {

	public function proses_input()
	{
		$cek =  $this->db->get('info_bangunan',array('id_user'=>$this->session->userdata('id')))->num_rows();
		if ($cek > 1) {
			$this->session->set_flashdata('gagal', 'Anda sudah masukan data 1 akun hanya 1');
		}else{

		//Data Bangunan
			$nama_bang = $this->input->post('nama_bangunan');
			$lokasi = $this->input->post('lokasi');
			$rt_info = $this->input->post('rt_info');
			$rw_info = $this->input->post('rw_info');
			$kelurahan_info = strtoupper($this->input->post('kelurahan_info'));
			$kecamatan_info = strtoupper($this->input->post('kecamatan_info'));
			$kota_info = strtoupper($this->input->post('kota_info'));
			$kode_info = $this->input->post('kode_info');
			$nop = $this->input->post('nop');
			$nbt = $this->input->post('startYear');
			$tanggal = date('Y-m-d H:i:s');
			$this->db->insert('info_bangunan',array(
				'id_user'=>$this->session->userdata('id'),
				'nama_bangunan'=>$nama_bang,
				'lokasi'=>$lokasi,
				'rt'=>$rt_info,
				'rw'=>$rw_info,
				'kelurahan'=>$kelurahan_info,
				'kecamatan'=>$kecamatan_info,
				'kota'=>$kota_info,
				'kode_pos'=>$kode_info,
				'NOP'=>$nop,
				'mulai_operasi'=>date('Y',strtotime($nbt)),
				'created_at'=>$tanggal
			));

		// Data Kepemilikan 
			$nama_pemilik = $this->input->post('nama_pemilik');
			$alamat = $this->input->post('alamat');
			$rt_pemilik = $this->input->post('rt_pemilik');
			$rw_pemilik = $this->input->post('rw_pemilik');
			$kelurahan_pemilik = strtoupper($this->input->post('kelurahan_pemilik'));
			$kecamatan_pemilik = strtoupper($this->input->post('kecamatan_pemilik'));
			$kota_pemilik = strtoupper($this->input->post('kota_pemilik'));
			$kode_pemilik = $this->input->post('kode_pemilik');
			$provinsi = strtoupper($this->input->post('provinsi'));
			$no_hp = $this->input->post('no_hp');
			$no_telp = $this->input->post('no_telp');
			$email = $this->input->post('email');
			$tanggung = $this->input->post('tanggung');
			$jabatan = $this->input->post('jabatan');
			$telp_jabatan = $this->input->post('telp_jabatan');
			$no_jabatan = $this->input->post('no_jabatan');
			$email_jabatan = $this->input->post('email_jabatan');
			$id = $this->db->insert_id();
			$this->db->insert('data_pemilik', array(
				'id_user'=>$this->session->userdata('id'),
				'id_info_unik'=>$id,
				'nama_pemilik'=>$nama_pemilik,
				'alamat'=>$alamat,
				'rt'=>$rt_pemilik,
				'rw'=>$rw_pemilik,
				'kelurahan'=>$kelurahan_pemilik,
				'kecamatan'=>$kecamatan_pemilik,
				'kota'=>$kota_pemilik,
				'kode_pos'=>$kode_pemilik,
				'provinsi'=>$provinsi,
				'no_kantor'=>$no_telp,
				'no_hp'=>$no_hp,
				'email'=>$email,
				'tanggung_jawab'=>$tanggung,
				'jabatan'=>$jabatan,
				'no_jabatan'=>$no_jabatan,
				'telp_jabatan'=>$telp_jabatan,
				'email_jabatan'=>$email_jabatan,
				'created_at'=>$tanggal,
			));

		//Data Pengelola
			$kat_pengelola = $this->input->post('kat_pengelola');
			$pengelola = $this->input->post('pengelola');
			$peng_jawab = $this->input->post('peng_jawab');
			$jabatan_peng = $this->input->post('jabatan_peng');
			$alamat_pengelola = $this->input->post('alamat_peng');
			$rt_peng = $this->input->post('rt_peng');
			$rw_peng = $this->input->post('rw_peng');
			$kelurahan_peng = strtoupper($this->input->post('kelurahan_peng'));
			$kecamatan_peng = strtoupper($this->input->post('kecamatan_peng'));
			$kota_peng = strtoupper($this->input->post('kota_peng'));
			$kode_peng = $this->input->post('kode_peng');
			$provinsi_peng = strtoupper($this->input->post('provinsi_peng'));
			$no_telp_peng = $this->input->post('no_telp_peng');
			$no_hp_peng = $this->input->post('no_hp_peng');
			$email_peng = $this->input->post('email_peng');
			$this->db->insert('data_pengelola', array(
				'id_users'=>$this->session->userdata('id'),
				'id_peng_unik'=>$id,
				'kategori_pengelola'=>$kat_pengelola,
				'pengelola'=>$pengelola,
				'tanggung_jawab'=>$peng_jawab,
				'jabatan'=>$jabatan_peng,
				'alamat'=>$alamat_pengelola,
				'rt'=>$rt_peng,
				'rw'=>$rw_peng,
				'kelurahan'=>$kelurahan_peng,
				'kecamatan'=>$kecamatan_peng,
				'kota'=>$kota_peng,
				'kode_pos'=>$kode_peng,
				'provinsi'=>$provinsi_peng,
				'no_kantor'=>$no_telp_peng,
				'no_hp'=>$no_hp_peng,
				'email'=>$email_peng,
				'created_at'=>$tanggal
			));

		//Data Admin
			$no_sippt = $this->input->post('no_sippt');
			$tgl_sippt = date('Y-m-d',strtotime($this->input->post('tgl_sippt')));
			$luas_tanah = $this->input->post('luas_tanah');

			$no_imb = $this->input->post('no_imb');
			$tgl_imb = $this->input->post('tgl_imb');

			$no_kmb = $this->input->post('no_kmb');
			$tgl_kmb = date('Y-m-d',strtotime($this->input->post('tgl_kmb')));
			$jabatan_peng = $this->input->post('jabatan_peng');

			$queryimb = $this->db->insert('data_admin', array(
				'id_user'=>$this->session->userdata('id'),
				'id_admin_unik'=>$id,
				'sippt' => $no_sippt.','.$tgl_sippt,
				'luas_tanah' => $luas_tanah,
				'kmb' => $no_kmb.','.$tgl_kmb,
				'created_at' => $tanggal
			));
			if ($queryimb==TRUE) {
				$idimb = $this->db->insert_id();
				for ($i=0; $i < count($no_imb) ; $i++) { 
					$this->db->insert('data_imb', array(
						'id_admin_imb'=>$idimb,
						'no_imb'=> $no_imb[$i],
						'tanggal_imb'=>date('Y-m-d',strtotime($tgl_imb[$i])),
					));
				}
			}
		// Data Teknis
			$jml_tower = $this->input->post('tower');
			$jml_unit = $this->input->post('unit');
			$tg_tower = $this->input->post('tinggi_tower');
			$tg_podium = $this->input->post('tinggi_podium');
			$js_bangunan = $this->input->post('jenis_bang');
			$nmo = "";
			for ($i=0; $i <count($js_bangunan) ; $i++) { 
				$abc = $js_bangunan[$i].',';
				$nmo .=$abc;
			}
			$jenis_bang = substr($nmo, 0, -1);
			$luas_lantai = $this->input->post('luas_lantai');
			$luas_total = $this->input->post('luas_total');
			$tk_okupansi = $this->input->post('tk_okupansi');
			$ket = $this->input->post('ket');
			$op1 = $this->input->post('op1');
			$op2 = $this->input->post('op2');
			$op3 = $this->input->post('op3');
			$op4 = $this->input->post('op4');
			$senin1 = $this->input->post('senin1');
			$senin2 = $this->input->post('senin2');
			$selasa1 = $this->input->post('selasa1');
			$selasa2 = $this->input->post('selasa2');
			$rabu1 = $this->input->post('rabu1');
			$rabu2 = $this->input->post('rabu2');
			$kamis1 = $this->input->post('kamis1');
			$kamis2 = $this->input->post('kamis2');
			$jumat1 = $this->input->post('jumat1');
			$jumat2 = $this->input->post('jumat2');
			$sabtu1 = $this->input->post('sabtu1');
			$sabtu2 = $this->input->post('sabtu2');
			$minggu1 = $this->input->post('minggu1');
			$minggu2 = $this->input->post('minggu2');
			$total_minggu = $this->input->post('totalminggu');
			$abc = "";
			for ($i=0; $i <count($total_minggu) ; $i++) { 
				$def = $total_minggu[$i].',';
				$abc .=$def;
			}
			$tot_minggu = substr($abc, 0, -1);
			$total_peng = $this->input->post('total_peng');
			$datapeng = $this->db->insert('data_teknis', array(
				'id_user'=>$this->session->userdata('id'),
				'id_teknis_unik'=>$id,
				'jumlah_tower'=>$jml_tower,
				'jumlah_unit'=>$pengelola,
				'ketinggian'=>$tg_tower.','.$tg_podium,
				'jenis_bangunan'=>$jenis_bang,
				'luas_lantai'=>$luas_lantai.','.$luas_total,
				'tingkat_okupansi'=>$tk_okupansi,
				'ket_okupansi'=>$ket,
				'operasional_gedung'=>$op1.','.$op2.','.$op3.','.$op4,
				'peng_bangunan'=>$senin1.','.$senin2.','.$selasa1.','.$selasa2.','.$rabu1.','.$rabu2.','.$kamis1.','.$kamis2.','.$jumat1.','.$jumat2.','.$sabtu1.','.$sabtu2.','.$minggu1.','.$minggu2.','.$tot_minggu,
				'total_penghuni'=>$total_peng,
			));
			if ($datapeng==TRUE) {
				$penggunaan = $this->db->insert_id();
				$this->db->insert('penggunan_bangunan', array(
					'id_join'=>$penggunaan,
					'senin'=>$senin1.','.$senin2,
					'selasa'=>$selasa1.','.$selasa2,
					'rabu'=>$rabu1.','.$rabu2,
					'kamis'=>$kamis1.','.$kamis2,
					'jumat'=>$jumat1.','.$jumat2,
					'sabtu'=>$sabtu1.','.$sabtu2,
					'minggu'=>$minggu1.','.$minggu2,
					'total'=>$tot_minggu,
				));
			}

		//Data Konsumsi
			$kon_air = $this->input->post('kons_air');
			$rata_kon = $this->input->post('rata_kon');
			$jkl = "";
			$fgh = "";
			for ($i=0; $i <count($kon_air) ; $i++) { 
				$def = $kon_air[$i].',';
				$fgh .=$def;
			}
			for ($i=0; $i <count($rata_kon) ; $i++) { 
				$def = $kon_air[$i].',';
				$jkl .=$def;
			}
			$kons_air = substr($fgh, 0, -1);
			$rata_air = substr($jkl, 0, -1);

		// $kaps_kon = $this->input->post();
		// $kaps_kon2 = $this->input->post();

			$air_bersih = $this->input->post('air_bersih');
			$air_bersih2 = $this->input->post('air_bersih2');
			$sistem = $this->input->post('sistem_air');
			$kaps_bersih = $this->input->post('kaps_bersih');
			$kaps_bersih2 = $this->input->post('kaps_bersih2');
			$air_hujan = $this->input->post('air_hujan');
			$air_hujan2 = $this->input->post('air_hujan2');
			$air_hujan3 = $this->input->post('air_hujan3');
			$jml_hujan = $this->input->post('jumlah_hujan');
			$jml_hujan2 = $this->input->post('jumlah_hujan');
			$kaps_hujan = $this->input->post('kaps_hujan');
			$kaps_hujan2 = $this->input->post('kaps_hujan2');
			$air_bekas = $this->input->post('air_bekas');
			$air_bekas2 = $this->input->post('air_bekas2');
			$kaps_bekas = $this->input->post('kaps_bekas');
			$kaps_bekas2 = $this->input->post('kaps_bekas2');
			$limbah = $this->input->post('air_limbah');
			$limbah2 = $this->input->post('air_limbah2');
			$kaps_limbah = $this->input->post('kaps_limbah');
			$kaps_limbah2 = $this->input->post('kaps_limbah2');

			$queryair = $this->db->insert('data_air', array(
				'id_air_unik'=>$this->session->userdata('id'),
				'konsumsi_air'=>$kons_air,
				'rata_konsumsi'=>$rata_air,
			// 'kapasitas_konsumsi'=>$kaps_kon.','.$kaps_kon2,
				'air_bersih'=>$air_bersih.','.$air_bersih2,
				'sistem_water'=>$sistem,
				'kapasitas_bersih'=>$kaps_bersih.','.$kaps_bersih2,
				'air_hujan'=>$air_hujan.','.$air_hujan2.','.$air_hujan3,
				'jml_hujan'=>$jml_hujan.','.$jml_hujan2,
				'kapasitas_hujan'=>$kaps_hujan.','.$kaps_hujan2,
				'air_bekas'=>$air_bekas.','.$air_bekas2,
				'kapasitas_bekas'=>$kaps_bekas.','.$kaps_bekas2,
				'air_limbah'=>$limbah.','.$limbah2,
				'kapasitas_limbah'=>$kaps_limbah.','.$kaps_limbah2,
				'created_at'=>$tanggal
			));
			if ($queryair==TRUE) {
			//Sumur Bor
				$idair = $this->db->insert_id();
				$jml_smr = $this->input->post('jumlah_sumur');
				$no_sipa = $this->input->post('no_sipa');
				$tgl_sipa = $this->input->post('tgl_sipa');
				for ($i=0; $i < count($no_sipa); $i++) { 
					$this->db->insert('data_sumur', array(
						'id_data_sumur'=>$idair,
						'jenis'=>'sumur bor',
						'unit'=>$jml_smr,
						'sipa'=>$no_sipa[$i],
						'tanggal'=>date('Y-m-d',strtotime($tgl_sipa[$i]))
					));
				}

			//Sumur Pantek
				$jml_pantek = $this->input->post('jumlah_pantek');
				$no_sipa_pantek = $this->input->post('no_sipa_pantek');
				$tgl_sipa_pantek = $this->input->post('tgl_sipa_pantek');
				for ($i=0; $i < count($no_sipa_pantek); $i++) { 
					$this->db->insert('data_sumur', array(
						'id_data_sumur'=>$idair,
						'jenis'=>'sumur pantek',
						'unit'=>$jml_pantek,
						'sipa'=>$no_sipa_pantek[$i],
						'tanggal'=>date('Y-m-d',strtotime($tgl_sipa_pantek[$i]))
					));
				}

			//Ground Tank
				$jml_ground = $this->input->post('jumlah_ground');
				$kaps_ground = $this->input->post('kaps_ground');
				for ($i=0; $i < count($kaps_ground); $i++) { 
					$this->db->insert('data_sumur', array(
						'id_data_sumur'=>$idair,
						'jenis'=>'GROUND',
						'unit'=>$jml_ground,
						'kapasitas'=>$kaps_ground[$i],
					));
				}

			//Roof Tank
				$jml_roof = $this->input->post('jumlah_roof');
				$kaps_roof = $this->input->post('kaps_roof');
				for ($i=0; $i < count($kaps_roof); $i++) { 
					$this->db->insert('data_sumur', array(
						'id_data_sumur'=>$idair,
						'jenis'=>'Roof Tank',
						'unit'=>$jml_roof,
						'kapasitas'=>$kaps_roof[$i],
					));
				}
			}

		//Data Sketsa
			$this->load->library('upload');
			$config['upload_path']          = './assets/images/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['remove_spaces']        = TRUE;
			$config['encrypt_name']        = TRUE;

			$this->upload->initialize($config);
			if( ! $this->upload->do_upload('foto_sketsa'))
			{
				$error = array('error' => $this->upload->display_errors());
			}else{
				$this->upload->do_upload('foto_sketsa');
				$f = $this->upload->data();
				$file_sketsa = $f['file_name'];
			}
			$nama_bang_sketsa = $this->input->post('nama_bang_sketsa');
			$lokasi_sketsa = $this->input->post('lokasi_sketsa');
			$this->db->insert('sketsa_lokasi', array(
				'id_sketsa_unik'=>$id,
				'id_user'=>$this->session->userdata('id'),
				'nama_bangunan'=>$nama_bang_sketsa,
				'lokasi'=>$lokasi_sketsa,
				'file_sketsa'=>$file_sketsa,
				'created_at' =>$tanggal,
			));

		// Permasalahan 
			$smr_resap =  $this->input->post('sumur_resap');
			$smr_dalam =  $this->input->post('sumur_dalam');
			$peng_air =  $this->input->post('peng_air');

			$this->db->insert('permasalahan', array(
				'id_unik_masalah'=>$id,
				'id_user'=>$this->session->userdata('id'),
				'sumur_resapan'=>$smr_resap,
				'sumur_dalam'=>$smr_dalam,
				'pengelolaan_limbah'=>$peng_air,
				'persetujuan'=>1,
				'created_at'=>$tanggal
			));
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
}

/* End of file M_back.php */
/* Location: ./application/models/M_back.php */