<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_back extends CI_Model {

	public function proses_input()
	{
		$cek =  $this->db->get('info_bangunan',array('id_user'=>$this->session->userdata('id')))->row();
		if (count($cek) > 1) {
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
				'jumlah_unit'=>$jml_unit,
				'ketinggian'=>$tg_tower.','.$tg_podium,
				'luas_lantai'=>$luas_lantai,
				'luas_total'=>$luas_total,
				'tingkat_okupansi'=>$tk_okupansi,
				'ket_okupansi'=>$ket,
				'operasional_gedung'=>$op1.','.$op2.','.$op3.','.$op4,
				'peng_bangunan'=>$senin1.','.$senin2.','.$selasa1.','.$selasa2.','.$rabu1.','.$rabu2.','.$kamis1.','.$kamis2.','.$jumat1.','.$jumat2.','.$sabtu1.','.$sabtu2.','.$minggu1.','.$minggu2.','.$tot_minggu,
				'total_penghuni'=>$total_peng,
			));
			if ($datapeng==TRUE) {
				$penggunaan = $this->db->insert_id();
				$kantor = $this->input->post('perkantoran');
				$sehat = $this->input->post('kesehatan');
				$apart = $this->input->post('apartemen');
				$dagang = $this->input->post('perdagangan');
				$huni = $this->input->post('hunian');
				$lainnya = $this->input->post('lainnya');
				$hotel = $this->input->post('hotel');
				$lainnya2 = $this->input->post('lainnya2');

				$this->db->insert('jenis_bangunan', array(
					'perkantoran'=>$kantor,
					'apartemen'=>$apart,
					'hunian'=>$huni,
					'hotel'=>$hotel,
					'sarana_kesehatan'=>$sehat,
					'sarana_perdagangan'=>$dagang,
					'lainnya'=>$lainnya,
					'lainnya2'=>$lainnya2,
				));

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
			for ($i=0; $i < count($kon_air) ; $i++) { 
				$def = $kon_air[$i].',';
				$fgh .=$def;
			}
			for ($i=0; $i < count($rata_kon) ; $i++) { 
				$fih = $rata_kon[$i].',';
				$jkl .=$fih;
			}
			$kons_air = substr($fgh, 0, -1);
			$rata_air = substr($jkl, 0, -1);

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
				for ($i=0; $i < $jml_smr; $i++) { 
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
				for ($i=0; $i < $jml_pantek; $i++) { 
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
				for ($i=0; $i < $jml_ground; $i++) { 
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
				for ($i=0; $i < $jml_roof; $i++) { 
					$this->db->insert('data_sumur', array(
						'id_data_sumur'=>$idair,
						'jenis'=>'Roof Tank',
						'unit'=>$jml_roof,
						'kapasitas'=>$kaps_roof[$i],
					));
				}
			}

			//Bulan 

			$janurpd = $this->input->post('januaripdam');
			$janursum = $this->input->post('januarisumurbor');
			$janurrec = $this->input->post('januarirecycle');
			$janurlain = $this->input->post('januarilain');
			$febpd = $this->input->post('febuaripdam');
			$fbsum = $this->input->post('febuarisumurbor');
			$febrec = $this->input->post('febuarirecycle');
			$feblain = $this->input->post('febuarilain');
			$marpd = $this->input->post('maretpdam');
			$marsum = $this->input->post('maretsumurbor');
			$marrec = $this->input->post('maretrecycle');
			$marlain = $this->input->post('maretlain');
			$aprilpd = $this->input->post('aprilpdam');
			$aprilsum = $this->input->post('aprilsumurbor');
			$aprilrec = $this->input->post('aprilrecycle');
			$aprillain = $this->input->post('aprillain');
			$meipdam = $this->input->post('meipdam');
			$meisum = $this->input->post('meisumurbor');
			$meirec = $this->input->post('meirecycle');
			$meilain = $this->input->post('meilain');
			$junipdam = $this->input->post('junipdam');
			$junisum = $this->input->post('junisumurbor');
			$junirec = $this->input->post('junirecycle');
			$junilain = $this->input->post('junilain');
			$julipd = $this->input->post('julipdam');
			$julisum = $this->input->post('julisumurbor');
			$julirec = $this->input->post('julirecycle');
			$julilain = $this->input->post('julilain');
			$aguspd = $this->input->post('agustuspdam');
			$agussum = $this->input->post('agustussumurbor');
			$agusrec = $this->input->post('agustusrecycle');
			$aguslain = $this->input->post('agustuslain');
			$seppd = $this->input->post('septemberpdam');
			$sepsum = $this->input->post('septembersumurbor');
			$seprec = $this->input->post('septemberrecycle');
			$seplain = $this->input->post('septemberlain');
			$oktopd = $this->input->post('oktoberpdam');
			$oktosum = $this->input->post('oktobersumurbor');
			$oktorec = $this->input->post('oktoberrecycle');
			$oktolain = $this->input->post('oktoberlain');
			$novpd = $this->input->post('novemberpdam');
			$novsum = $this->input->post('novembersumurbor');
			$novrec = $this->input->post('novemberrecycle');
			$novlain = $this->input->post('novemberlain');
			$despd = $this->input->post('desemberpdam');
			$dessum = $this->input->post('desembersumurbor');
			$desrec = $this->input->post('desemberrecycle');
			$deslain = $this->input->post('desemberlain');
			$totsumsin = $this->input->post('totalkonsumsi');
			for ($i=0; $i <count($totsumsin) ; $i++) { 
				$das = $totsumsin[$i].',';
				$iop .=$das;
			}
			$sumsi = substr($iop, 0, -1);
			$this->db->insert('data_konsumsi', array(
				'id_data_air'=>$idair,
				'januari'=>$janurpd.','.$janursum.','.$janurrec.','.$janurlain,
				'febuari'=>$febpd.','.$fbsum.','.$febrec.','.$feblain,
				'maret'=>$marpd.','.$marsum.','.$marrec.','.$marlain,
				'april'=>$aprilpd.','.$aprilsum.','.$aprilrec.','.$aprillain,
				'mei'=>$meipdam.','.$meisum.','.$meirec.','.$meilain,
				'juni'=>$junipdam.','.$junisum.','.$junirec.','.$junilain,
				'juli'=>$julipd.','.$julisum.','.$julirec.','.$julilain,
				'agustus'=>$aguspd.','.$agussum.','.$agusrec.','.$aguslain,
				'september'=>$seppd.','.$sepsum.','.$seprec.','.$seplain,
				'oktober'=>$oktopd.','.$oktosum.','.$oktorec.','.$oktolain,
				'november'=>$novpd.','.$novsum.','.$novrec.','.$novlain,
				'desember'=>$despd.','.$dessum.','.$desrec.','.$deslain,
				'total'=>$sumsi,
			));
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
	public function jenis()
	{
		$id = $this->session->userdata('id');
		$satu = $this->db->query('SELECT * FROM  data_teknis t INNER JOIN jenis_bangunan j ON t.id_teknis=j.id_admin_teknis where t.id_user="$id"')->result();
		return $satu;
	}
	public function proses_edit()
	{		
		$idinput = $this->input->post('idinput');
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
		$this->db->update('info_bangunan',array(
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
		),array('id_info'=>$idinput));

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
		$this->db->update('data_pemilik', array(
			'id_user'=>$this->session->userdata('id'),
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
		),array('id_pemilik'=>$idinput));

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
		$this->db->update('data_pengelola', array(
			'id_users'=>$this->session->userdata('id'),
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
		),array('id_pengelola'=>$idinput));

		//Data Admin
		$no_sippt = $this->input->post('no_sippt');
		$tgl_sippt = date('Y-m-d',strtotime($this->input->post('tgl_sippt')));
		$luas_tanah = $this->input->post('luas_tanah');

		$no_imb = $this->input->post('no_imb');
		$tgl_imb = $this->input->post('tgl_imb');

		$no_kmb = $this->input->post('no_kmb');
		$tgl_kmb = date('Y-m-d',strtotime($this->input->post('tgl_kmb')));
		$jabatan_peng = $this->input->post('jabatan_peng');

		$queryimb = $this->db->update('data_admin', array(
			'id_user'=>$this->session->userdata('id'),
			'sippt' => $no_sippt.','.$tgl_sippt,
			'luas_tanah' => $luas_tanah,
			'kmb' => $no_kmb.','.$tgl_kmb,
			'created_at' => $tanggal
		),array('id_admin'=>$idinput));
		if ($queryimb==TRUE) {
			$idimb = $this->db->insert_id();
			for ($i=0; $i < count($no_imb) ; $i++) { 
				$this->db->update('data_imb', array(
					'id_admin_imb'=>$idimb,
					'no_imb'=> $no_imb[$i],
					'tanggal_imb'=>date('Y-m-d',strtotime($tgl_imb[$i])),
				),array('id_admin_imb'=>$idinput));
			}
		}
		// Data Teknis
		$jml_tower = $this->input->post('tower');
		$jml_unit = $this->input->post('unit');
		$tg_tower = $this->input->post('tinggi_tower');
		$tg_podium = $this->input->post('tinggi_podium');
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
		$datapeng = $this->db->update('data_teknis', array(
			'id_user'=>$this->session->userdata('id'),
			'jumlah_tower'=>$jml_tower,
			'jumlah_unit'=>$jml_unit,
			'ketinggian'=>$tg_tower.','.$tg_podium,
			'luas_lantai'=>$luas_lantai,
			'luas_total'=>$luas_total,
			'tingkat_okupansi'=>$tk_okupansi,
			'ket_okupansi'=>$ket,
			'operasional_gedung'=>$op1.','.$op2.','.$op3.','.$op4,
			'peng_bangunan'=>$senin1.','.$senin2.','.$selasa1.','.$selasa2.','.$rabu1.','.$rabu2.','.$kamis1.','.$kamis2.','.$jumat1.','.$jumat2.','.$sabtu1.','.$sabtu2.','.$minggu1.','.$minggu2.','.$tot_minggu,
			'total_penghuni'=>$total_peng,
		),array('id_teknis'=>$idinput));
		if ($datapeng==TRUE) {
			$penggunaan = $this->db->insert_id();
			$kantor = $this->input->post('perkantoran');
			$sehat = $this->input->post('kesehatan');
			$apart = $this->input->post('apartemen');
			$dagang = $this->input->post('perdagangan');
			$huni = $this->input->post('hunian');
			$lainnya = $this->input->post('lainnya');
			$hotel = $this->input->post('hotel');
			$lainnya2 = $this->input->post('lainnya2');

			$this->db->update('jenis_bangunan', array(
				'perkantoran'=>$kantor,
				'apartemen'=>$apart,
				'hunian'=>$huni,
				'hotel'=>$hotel,
				'sarana_kesehatan'=>$sehat,
				'sarana_perdagangan'=>$dagang,
				'lainnya'=>$lainnya,
				'lainnya2'=>$lainnya2,
			),array('id_admin_teknis'=>$idinput));

			$this->db->update('penggunan_bangunan', array(
				'id_join'=>$penggunaan,
				'senin'=>$senin1.','.$senin2,
				'selasa'=>$selasa1.','.$selasa2,
				'rabu'=>$rabu1.','.$rabu2,
				'kamis'=>$kamis1.','.$kamis2,
				'jumat'=>$jumat1.','.$jumat2,
				'sabtu'=>$sabtu1.','.$sabtu2,
				'minggu'=>$minggu1.','.$minggu2,
				'total'=>$tot_minggu,
			),array('id_penggunaan'=>$idinput));
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
			$fih = $rata_kon[$i].',';
			$jkl .=$fih;
		}
		$kons_air = substr($fgh, 0, -1);
		$rata_air = substr($jkl, 0, -1);

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

		$queryair = $this->db->update('data_air', array(
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
		),array('id_air'=>$idinput));
		if ($queryair==TRUE) {
			//Sumur Bor
			$idair = $this->db->insert_id();
			$jml_smr = $this->input->post('jumlah_sumur');
			$no_sipa = $this->input->post('no_sipa');
			$tgl_sipa = $this->input->post('tgl_sipa');
			for ($i=0; $i < $jml_smr; $i++) { 
				$this->db->update('data_sumur', array(
					'id_data_sumur'=>$idair,
					'jenis'=>'sumur bor',
					'unit'=>$jml_smr,
					'sipa'=>$no_sipa[$i],
					'tanggal'=>date('Y-m-d',strtotime($tgl_sipa[$i]))
				),array('id_data_sumur'=>$idinput));
			}

			//Sumur Pantek
			$jml_pantek = $this->input->post('jumlah_pantek');
			$no_sipa_pantek = $this->input->post('no_sipa_pantek');
			$tgl_sipa_pantek = $this->input->post('tgl_sipa_pantek');
			for ($i=0; $i < $jml_pantek; $i++) { 
				$this->db->update('data_sumur', array(
					'id_data_sumur'=>$idair,
					'jenis'=>'sumur pantek',
					'unit'=>$jml_pantek,
					'sipa'=>$no_sipa_pantek[$i],
					'tanggal'=>date('Y-m-d',strtotime($tgl_sipa_pantek[$i]))
				),array('id_data_sumur'=>$idinput));
			}

			//Ground Tank
			$jml_ground = $this->input->post('jumlah_ground');
			$kaps_ground = $this->input->post('kaps_ground');
			for ($i=0; $i < $jml_ground; $i++) { 
				$this->db->update('data_sumur', array(
					'id_data_sumur'=>$idair,
					'jenis'=>'GROUND',
					'unit'=>$jml_ground,
					'kapasitas'=>$kaps_ground[$i],
				),array('id_data_sumur'=>$idinput));
			}

			//Roof Tank
			$jml_roof = $this->input->post('jumlah_roof');
			$kaps_roof = $this->input->post('kaps_roof');
			for ($i=0; $i < $jml_roof; $i++) { 
				$this->db->update('data_sumur', array(
					'id_data_sumur'=>$idair,
					'jenis'=>'Roof Tank',
					'unit'=>$jml_roof,
					'kapasitas'=>$kaps_roof[$i],
				),array('id_data_sumur'=>$idinput));
			}
		}

			//Bulan 

		$janurpd = $this->input->post('januaripdam');
		$janursum = $this->input->post('januarisumurbor');
		$janurrec = $this->input->post('januarirecycle');
		$janurlain = $this->input->post('januarilain');
		$febpd = $this->input->post('febuaripdam');
		$fbsum = $this->input->post('febuarisumurbor');
		$febrec = $this->input->post('febuarirecycle');
		$feblain = $this->input->post('febuarilain');
		$marpd = $this->input->post('maretpdam');
		$marsum = $this->input->post('maretsumurbor');
		$marrec = $this->input->post('maretrecycle');
		$marlain = $this->input->post('maretlain');
		$aprilpd = $this->input->post('aprilpdam');
		$aprilsum = $this->input->post('aprilsumurbor');
		$aprilrec = $this->input->post('aprilrecycle');
		$aprillain = $this->input->post('aprillain');
		$meipdam = $this->input->post('meipdam');
		$meisum = $this->input->post('meisumurbor');
		$meirec = $this->input->post('meirecycle');
		$meilain = $this->input->post('meilain');
		$junipdam = $this->input->post('junipdam');
		$junisum = $this->input->post('junisumurbor');
		$junirec = $this->input->post('junirecycle');
		$junilain = $this->input->post('junilain');
		$julipd = $this->input->post('julipdam');
		$julisum = $this->input->post('julisumurbor');
		$julirec = $this->input->post('julirecycle');
		$julilain = $this->input->post('julilain');
		$aguspd = $this->input->post('agustuspdam');
		$agussum = $this->input->post('agustussumurbor');
		$agusrec = $this->input->post('agustusrecycle');
		$aguslain = $this->input->post('agustuslain');
		$seppd = $this->input->post('septemberpdam');
		$sepsum = $this->input->post('septembersumurbor');
		$seprec = $this->input->post('septemberrecycle');
		$seplain = $this->input->post('septemberlain');
		$oktopd = $this->input->post('oktoberpdam');
		$oktosum = $this->input->post('oktobersumurbor');
		$oktorec = $this->input->post('oktoberrecycle');
		$oktolain = $this->input->post('oktoberlain');
		$novpd = $this->input->post('novemberpdam');
		$novsum = $this->input->post('novembersumurbor');
		$novrec = $this->input->post('novemberrecycle');
		$novlain = $this->input->post('novemberlain');
		$despd = $this->input->post('desemberpdam');
		$dessum = $this->input->post('desembersumurbor');
		$desrec = $this->input->post('desemberrecycle');
		$deslain = $this->input->post('desemberlain');
		$totsumsin = $this->input->post('totalkonsumsi');
		for ($i=0; $i <count($totsumsin) ; $i++) { 
			$das = $totsumsin[$i].',';
			$iop .=$das;
		}
		$sumsi = substr($iop, 0, -1);
		$this->db->update('data_konsumsi', array(
			'id_data_air'=>$idair,
			'januari'=>$janurpd.','.$janursum.','.$janurrec.','.$janurlain,
			'febuari'=>$febpd.','.$fbsum.','.$febrec.','.$feblain,
			'maret'=>$marpd.','.$marsum.','.$marrec.','.$marlain,
			'april'=>$aprilpd.','.$aprilsum.','.$aprilrec.','.$aprillain,
			'mei'=>$meipdam.','.$meisum.','.$meirec.','.$meilain,
			'juni'=>$junipdam.','.$junisum.','.$junirec.','.$junilain,
			'juli'=>$julipd.','.$julisum.','.$julirec.','.$julilain,
			'agustus'=>$aguspd.','.$agussum.','.$agusrec.','.$aguslain,
			'september'=>$seppd.','.$sepsum.','.$seprec.','.$seplain,
			'oktober'=>$oktopd.','.$oktosum.','.$oktorec.','.$oktolain,
			'november'=>$novpd.','.$novsum.','.$novrec.','.$novlain,
			'desember'=>$despd.','.$dessum.','.$desrec.','.$deslain,
			'total'=>$sumsi,
		),array('id_konsumsi'=>$idinput));
		//Data Sketsa
		$this->load->library('upload');
		$config['upload_path']          = './assets/images/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['remove_spaces']        = TRUE;
		$config['encrypt_name']        = TRUE;

		$this->upload->initialize($config);
		if( ! $this->upload->do_upload('foto_sketsa'))
		{
			$file_sketsa = $this->input->post('file_old');
		}else{
			$this->upload->do_upload('foto_sketsa');
			$f = $this->upload->data();
			$file_sketsa = $f['file_name'];
		}
		$nama_bang_sketsa = $this->input->post('nama_bang_sketsa');
		$lokasi_sketsa = $this->input->post('lokasi_sketsa');
		$this->db->update('sketsa_lokasi', array(
			'id_user'=>$this->session->userdata('id'),
			'nama_bangunan'=>$nama_bang_sketsa,
			'lokasi'=>$lokasi_sketsa,
			'file_sketsa'=>$file_sketsa,
			'created_at' =>$tanggal,
		),array('id_sketsa'=>$idinput));

		// Permasalahan 
		$smr_resap =  $this->input->post('sumur_resap');
		$smr_dalam =  $this->input->post('sumur_dalam');
		$peng_air =  $this->input->post('peng_air');

		$this->db->update('permasalahan', array(
			'id_user'=>$this->session->userdata('id'),
			'sumur_resapan'=>$smr_resap,
			'sumur_dalam'=>$smr_dalam,
			'pengelolaan_limbah'=>$peng_air,
			'persetujuan'=>1,
			'created_at'=>$tanggal
		),array('id_masalah'=>$idinput));
		redirect($_SERVER['HTTP_REFERER']);
	}

}

/* End of file M_back.php */
/* Location: ./application/models/M_back.php */