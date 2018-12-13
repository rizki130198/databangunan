<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_back extends CI_Model {

	public function proses_input()
	{
		//Data Bangunan
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
			'kode_pos'=>$kode_pos,
			'NOP'=>$nop,
			'mulai_operasi'=>$nbt,
			'created_at'=>$tanggal
		));

		// Data Kepemilikan 
		$nama_pemilik = $this->input->post('nama_pemilik');
		$alamat = $this->input->post('alamat');
		$rt_pemilik = $this->input->post('rt_pemilik');
		$rw_pemilik = $this->input->post('rw_pemilik');
		$kelurahan_pemilik = $this->input->post('kelurahan_pemilik');
		$kecamatan_pemilik = $this->input->post('kecamatan_pemilik');
		$kota_pemilik = $this->input->post('kota_pemilik');
		$kode_pemilik = $this->input->post('kode_pemilik');
		$provinsi = $this->input->post('provinsi');
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
		$kelurahan_peng = $this->input->post('kelurahan_peng');
		$kecamatan_peng = $this->input->post('kecamatan_peng');
		$kota_peng = $this->input->post('kota_peng');
		$kode_peng = $this->input->post('kode_peng');
		$provinsi_peng = $this->input->post('provinsi_peng');
		$no_telp_peng = $this->input->post('no_telp_peng');
		$no_hp_peng = $this->input->post('no_hp_peng');
		$email_peng = $this->input->post('email');
		$this->db->insert('data_pengelola', array(
			'id_users'=>$this->session->userdata('id'),
			'id_peng_unik'=>$id,
			'kategori_pengelola'=>$kategori_pengelola,
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
		$tgl_imb = date('Y-m-d',strtotime($this->input->post('tgl_imb')));
		$no_kmb = $this->input->post('no_kmb');
		$tgl_kmb = date('Y-m-d',strtotime($this->input->post('tgl_kmb')));
		$jabatan_peng = $this->input->post('jabatan_peng');

		$queryimb = $this->db->insert('data_admin', array(
			'id_user'=>$this->session->userdata('id'),
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
					'tanggal_imb'=>$tgl_imb[$i],
				));
			}
		}
		// Data Teknis
		$jml_tower = $this->input->post('tower');
		$jml_unit = $this->input->post('unit');
		$tg_tower = $this->input->post('tinggi_tower');
		$tg_podium = $this->input->post('tinggi_podium');
		$js_bangunan = $this->input->post('jenis_bang');
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
		$total_peng = $this->input->post('total_peng');
		$datapeng = $this->db->insert('data_pengelola', array(
			'id_user'=>$this->session->userdata('id'),
			'id_teknis_unik'=>$id,
			'jumlah_tower'=>$jml_tower,
			'jumlah_unit'=>$pengelola,
			'ketinggian'=>$tg_tower.','.$tg_podium,
			'jenis_bangunan'=>$js_bangunan,
			'luas_lantai'=>$luas_lantai.','.$luas_total,
			'tingkat_okupansi'=>$tk_okupansi,
			'ket_okupansi'=>$ket,
			'opersional_gedung'=>$op1.','.$op2.','.$op3.','.$op4,
			'peng_bangunan'=>$senin1.','.$senin2.','.$selasa1.','.$selasa2.','.$rabu1.','.$rabu2.','.$kamis1.','.$kamis2.','.$jumat1.','.$jumat2.','.$sabtu1.','.$sabtu2.','.$minggu1.','.$minggu2.','.$total_minggu,
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
				'total'=>$total_minggu,
			));
		}

		//Data Konsumsi
		$kon_air = ;
		$rata_kon = ;
		$kaps_kon = ;
		$kaps_kon2 = ;
		$air_bersih = ;
		$air_bersih2 = ;
		$sistem = ;
		$kaps_bersih = ;
		$kaps_bersih2 = ;
		$air_hujan = ;
		$air_hujan2 = ;
		$jml_hujan = ;
		$jml_hujan2 = ;
		$kaps_hujan = ;
		$kaps_hujan2 = ;
		$air_bekas = ;
		$air_bekas2 = ;
		$kaps_bekas = ;
		$kaps_bekas2 = ;
		$limbah = ;
		$limbah2 = ;
		$kaps_limbah = ;
		$kaps_limbah2 = ;

		$queryair = $this->db->insert('data_air', array(
			'id_air_unik'=>$id,
			'konsumsi_air'=>$kon_air,
			'rata_konsumsi'=>$rata_kon,
			'kapasitas_konsumsi'=>$kaps_kon.','.$kaps_kon2,
			'air_bersih'=>$air_bersih.','.$air_bersih2,
			'sistem_water'=>$sistem,
			'kapasitas_bersih'=>$kaps_bersih.','.$kaps_bersih2,
			'air_hujan'=>$air_hujan.','.$air_hujan2,
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
					'id_data_sumur'=>$id_air,
					'jenis'=>'sumur bor',
					'unit'=>$jml_smr,
					'sipa'=>$no_sipa,
					'tanggal'=>$tgl_sipa
				));
			}

			//Sumur Pantek
			$jml_pantek = $this->input->post('jumlah_pantek');
			$no_sipa_pantek = $this->input->post('no_sipa_pantek');
			$tgl_sipa_pantek = $this->input->post('tgl_sipa_pantek');
			for ($i=0; $i < count($no_sipa_pantek); $i++) { 
				$this->db->insert('data_sumur', array(
					'id_data_sumur'=>$id_air,
					'jenis'=>'sumur pantek',
					'unit'=>$jml_pantek,
					'sipa'=>$no_sipa_pantek,
					'tanggal'=>$tgl_sipa_pantek
				));
			}

			//Ground Tank
			$jml_pantek = $this->input->post('jumlah_pantek');
			$no_sipa_pantek = $this->input->post('no_sipa_pantek');
			$tgl_sipa_pantek = $this->input->post('tgl_sipa_pantek');
			for ($i=0; $i < count($no_sipa_pantek); $i++) { 
				$this->db->insert('data_sumur', array(
					'id_data_sumur'=>$id_air,
					'jenis'=>'sumur pantek',
					'unit'=>$jml_pantek,
					'sipa'=>$no_sipa_pantek,
					'tanggal'=>$tgl_sipa_pantek
				));
			}

			//Roof Tank
			$jml_pantek = $this->input->post('jumlah_pantek');
			$no_sipa_pantek = $this->input->post('no_sipa_pantek');
			$tgl_sipa_pantek = $this->input->post('tgl_sipa_pantek');
			for ($i=0; $i < count($no_sipa_pantek); $i++) { 
				$this->db->insert('data_sumur', array(
					'id_data_sumur'=>$id_air,
					'jenis'=>'sumur pantek',
					'unit'=>$jml_pantek,
					'sipa'=>$no_sipa_pantek,
					'tanggal'=>$tgl_sipa_pantek
				));
			}
		}
		//Data Sketsa
		$this->load->library('upload');
		$config['upload_path']          = './public/images/';
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
		$lokasi_sketsa = $this->input->post('lokasi_sketsa');
		$this->db->insert('sketsa_lokasi', array(
			'id_sketsa_unik'=>$id,
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
			'id_inuk_masalah'=>$id,
			'sumur_resapan'=>$smr_resap,
			'sumur_dalam'=>$smr_dalam,
			'pengelolaan_limbah'=>$peng_air,
			'persetujuan'=>1,
			'created_at'=>$tanggal
		));
	}


}

/* End of file M_back.php */
/* Location: ./application/models/M_back.php */