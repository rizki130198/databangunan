<?php $this->load->view('include/navbar'); ?>
<style type="text/css">
.wizard {
	margin: 20px auto;
	background: #fff;
}

.wizard .nav-tabs {
	position: relative;
	margin: 40px auto;
	margin-bottom: 0;
	border-bottom-color: #e0e0e0;
}

.wizard > div.wizard-inner {
	position: relative;
}

.connecting-line {
	height: 2px;
	background: #e0e0e0;
	position: absolute;
	width: 84.5%;
	margin: 0 auto;
	left: 0;
	right: 0;
	top: 50%;
	z-index: 1;
}

.wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
	color: #555555;
	cursor: default;
	border: 0;
	border-bottom-color: transparent;
}

span.round-tab {
	width: 60px;
	height: 60px;
	line-height: 56px;
	display: inline-block;
	border-radius: 100px;
	background: #fff;
	border: 2px solid #e0e0e0;
	z-index: 2;
	position: absolute;
	left: 0;
	text-align: center;
	font-size: 25px;
}
span.round-tab i{
	color:#555555;
}
.wizard li.active span.round-tab {
	background: #fff;
	border: 2px solid #5fbae9;

}
.wizard li.active span.round-tab i{
	color: #5fbae9;
}

span.round-tab:hover {
	color: #333;
	border: 2px solid #333;
}

.wizard .nav-tabs > li {
	width: 12%;
}

.wizard li:after {
	content: " ";
	position: absolute;
	left: 43%;
	opacity: 0;
	margin: 0 auto;
	bottom: 0px;
	border: 5px solid transparent;
	border-bottom-color: #5fbae9;
	transition: 0.1s ease-in-out;
}

.wizard li.active:after {
	content: " ";
	position: absolute;
	left: 43%;
	opacity: 1;
	margin: 0 auto;
	bottom: 0px;
	border: 10px solid transparent;
	border-bottom-color: #5fbae9;
}

.wizard .nav-tabs > li a {
	width: 60px;
	height: 60px;
	margin: 20px auto;
	border-radius: 100%;
	padding: 0;
	color: #555;
}

.wizard .nav-tabs > li a:hover {
	background: transparent;
}

.wizard .tab-pane {
	position: relative;
	padding-top: 50px;
}

.wizard h3 {
	margin-top: 0;
}

@media( max-width : 585px ) {

	.wizard {
		width: 90%;
		height: auto !important;
	}

	span.round-tab {
		font-size: 16px;
		width: 50px;
		height: 50px;
		line-height: 50px;
	}

	.wizard .nav-tabs > li a {
		width: 50px;
		height: 50px;
		line-height: 50px;
	}

	.wizard li.active:after {
		content: " ";
		position: absolute;
		left: 35%;
	}
}
.lbl{    
	font-size: 14px;
	border: solid 1px #eee;
	background: rgba(238, 238, 238, 0.9);
	padding: 10px;
}    
</style>
<div class="container">
	<div class="row">
		<section>
			<div class="wizard">
				<div class="wizard-inner">
					<div class="connecting-line"></div>
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active">
							<a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
								<span class="round-tab">
									1
								</span>
							</a>
						</li>

						<li role="presentation">
							<a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
								<span class="round-tab">
									2
								</span>
							</a>
						</li>
						<li role="presentation">
							<a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
								<span class="round-tab">
									3
								</span>
							</a>
						</li>

						<li role="presentation">
							<a href="#step4" data-toggle="tab" aria-controls="step4" role="tab" title="step4">
								<span class="round-tab">
									4
								</span>
							</a>
						</li>

						<li role="presentation">
							<a href="#step5" data-toggle="tab" aria-controls="step5" role="tab" title="step5">
								<span class="round-tab">
									5
								</span>
							</a>
						</li>

						<li role="presentation">
							<a href="#step6" data-toggle="tab" aria-controls="step6" role="tab" title="step6">
								<span class="round-tab">
									6
								</span>
							</a>
						</li>

						<li role="presentation">
							<a href="#step7" data-toggle="tab" aria-controls="step7" role="tab" title="step7">
								<span class="round-tab">
									7
								</span>
							</a>
						</li>

						<li role="presentation">
							<a href="#step8" data-toggle="tab" aria-controls="step8" role="tab" title="step8">
								<span class="round-tab">
									8
								</span>
							</a>
						</li>
					</ul>
				</div>

				<form role="form">
					<div class="tab-content">
						<div class="tab-pane active" role="tabpanel" id="step1">
							<h3>INFORMASI UMUM BANGUNAN GEDUNG</h3>
							<div class="row" style="margin-bottom: 20px;">

								<?php foreach ($info as $datainfo): ?>

									<div class="col-md-12" style="margin-top: 20px">
										<label>Nama Bangunan</label>
										<div class="lbl"><?=$datainfo->nama_bangunan?></div>
									</div> 
									<div class="col-md-12" style="margin-top: 20px">
										<label>Lokasi</label>
										<div class="lbl"><?=$datainfo->lokasi?></div>
									</div>   
									<div class="col-md-12" style="margin-top: 20px">
										<div class="row">
											<div class="col-md-6">
												<label>RT</label>
												<div class="lbl"><?=$datainfo->rt?></div>
											</div>
											<div class="col-md-6">
												<label>RW</label>
												<div class="lbl"><?=$datainfo->rw?></div>
											</div>
										</div>
									</div>
									<div class="col-md-12" style="margin-top: 20px">
										<div class="row">
											<div class="col-md-6">
												<label>Kelurahan</label>
												<div class="lbl"><?=$datainfo->kelurahan?></div>
											</div>
											<div class="col-md-6">
												<label>Kecamatan</label>
												<div class="lbl"><?=$datainfo->kecamatan?></div>
											</div>
										</div>
									</div>
									<div class="col-md-12" style="margin-top: 20px">
										<div class="row">
											<div class="col-md-6">
												<label>Kota</label>
												<div class="lbl"><?=$datainfo->kota?></div>
											</div>
											<div class="col-md-6">
												<label>Kode Pos</label>
												<div class="lbl"><?=$datainfo->kode_pos?></div>
											</div>
										</div>
									</div> 
									<div class="col-md-12" style="margin-top: 20px">
										<label>Nomor Obyek Pajak</label>
										<div class="lbl"><?=$datainfo->NOP?></div>
									</div>
									<div class="col-md-12" style="margin-top: 20px">
										<label>Mulai Beroperasi Tahun</label>
										<div class="lbl"><?=$datainfo->mulai_operasi?></div>
									</div>

								<?php endforeach ?>
							</div>
						</div>
						<div class="tab-pane" role="tabpanel" id="step2">
							<h3>DATA KEPEMILIKAN BANGUNAN GEDUNG</h3>
							<div class="row" style="margin-bottom: 20px;">

								<?php foreach ($pemilik as $datamilik): ?>
									<div class="col-md-12" style="margin-top: 20px">
										<label>Nama Pemilik</label>
										<div class="lbl"><?=$datamilik->nama_pemilik?></div>
									</div> 
									<div class="col-md-12" style="margin-top: 20px">
										<label>Alamat</label>
										<div class="lbl"><?=$datamilik->alamat?></div>
									</div> 
									<div class="col-md-12" style="margin-top: 20px">
										<div class="row">
											<div class="col-md-6">
												<label>RT</label>
												<div class="lbl"><?=$datamilik->rt?></div>
											</div>
											<div class="col-md-6">
												<label>RW</label>
												<div class="lbl"><?=$datamilik->rw?></div>
											</div>
										</div>
									</div>
									<div class="col-md-12" style="margin-top: 20px">
										<div class="row">
											<div class="col-md-6">
												<label>Kelurahan</label>
												<div class="lbl"><?=$datamilik->kelurahan?></div>
											</div>
											<div class="col-md-6">
												<label>Kecamatan</label>
												<div class="lbl"><?=$datamilik->kecamatan?></div>
											</div>
										</div>
									</div>
									<div class="col-md-12" style="margin-top: 20px">
										<div class="row">
											<div class="col-md-6">
												<label>Kota</label>
												<div class="lbl"><?=$datamilik->kota?></div>
											</div>
											<div class="col-md-6">
												<label>Kode Pos</label>
												<div class="lbl"><?=$datamilik->kode_pos?></div>
											</div>
										</div>
									</div>
									<div class="col-md-12" style="margin-top: 20px">
										<label>Provinsi</label>
										<div class="lbl"><?=$datamilik->provinsi?></div>
									</div> 
									<div class="col-md-12" style="margin-top: 20px">
										<div class="row">
											<div class="col-md-6">
												<label>Nomor Telepon Kantor</label>
												<div class="lbl"><?=$datamilik->no_kantor?></div>
											</div>
											<div class="col-md-6">
												<label>Nomor Telepon HP</label>
												<div class="lbl"><?=$datamilik->no_hp?></div>
											</div>
										</div>
									</div> 
									<div class="col-md-12" style="margin-top: 20px">
										<label>Email</label>
										<div class="lbl"><?=$datamilik->email?></div>
									</div>
									<div class="col-md-12" style="margin-top: 20px">
										<label>Penanggung Jawab (Person in Charge) </label>
										<div class="lbl"><?=$datamilik->tanggung_jawab?></div>
									</div>
									<div class="col-md-12" style="margin-top: 20px">
										<label>Jabatan </label>
										<div class="lbl"><?=$datamilik->jabatan?></div>
									</div>
									<div class="col-md-12" style="margin-top: 20px">
										<div class="row">
											<div class="col-md-6">
												<label>Nomor Telepon Kantor</label>
												<div class="lbl"><?=$datamilik->telp_jabatan?></div>
											</div>
											<div class="col-md-6">
												<label>Nomor Telepon HP</label>
												<div class="lbl"><?=$datamilik->no_jabatan?></div>
											</div>
										</div>
									</div> 
									<div class="col-md-12" style="margin-top: 20px">
										<label>Email</label>
										<div class="lbl"><?=$datamilik->email_jabatan?></div>
									</div> 

								<?php endforeach ?>   
							</div>	
						</div>
						<div class="tab-pane" role="tabpanel" id="step3">
							<h3>DATA PENGELOLA BANGUNAN GEDUNG</h3>
							<div class="row" style="margin-bottom: 20px;">
								<?php foreach ($pengelola as $datapeng): ?>
									<div class="col-md-12" style="margin-top: 20px">
										<label>Kategori Pengelola</label>
										<div class="lbl"><?=$datapeng->kategori_pengelola?></div>
									</div>
									<div class="col-md-12" style="margin-top: 20px">
										<label>Pengelola</label>
										<div class="lbl"><?=$datapeng->pengelola?></div>
									</div>
									<div class="col-md-12" style="margin-top: 20px">
										<label>Penanggung Jawab</label>
										<div class="lbl"><?=$datapeng->tanggung_jawab?></div>
									</div>
									<div class="col-md-12" style="margin-top: 20px">
										<label>Jabatan</label>
										<div class="lbl"><?=$datapeng->jabatan?></div>
									</div>
									<div class="col-md-12" style="margin-top: 20px">
										<label>Alamat</label>
										<div class="lbl"><?=$datapeng->alamat?></div>
									</div>
									<div class="col-md-12" style="margin-top: 20px">
										<div class="row">
											<div class="col-md-6">
												<label>RT</label>
												<div class="lbl"><?=$datapeng->rt?></div>
											</div>
											<div class="col-md-6">
												<label>RW</label>
												<div class="lbl"><?=$datapeng->rw?></div>
											</div>
										</div>
									</div>
									<div class="col-md-12" style="margin-top: 20px">
										<div class="row">
											<div class="col-md-6">
												<label>Kelurahan</label>
												<div class="lbl"><?=$datapeng->kelurahan?></div>
											</div>
											<div class="col-md-6">
												<label>Kecamatan</label>
												<div class="lbl"><?=$datapeng->kecamatan?></div>
											</div>
										</div>
									</div>
									<div class="col-md-12" style="margin-top: 20px">
										<div class="row">
											<div class="col-md-6">
												<label>Kota</label>
												<div class="lbl"><?=$datapeng->kota?></div>
											</div>
											<div class="col-md-6">
												<label>Kode Pos</label>
												<div class="lbl"><?=$datapeng->kode_pos?></div>
											</div>
										</div>
									</div>
									<div class="col-md-12" style="margin-top: 20px">
										<label>Provinsi</label>
										<div class="lbl"><?=$datapeng->provinsi?></div>
									</div> 
									<div class="col-md-12" style="margin-top: 20px">
										<div class="row">
											<div class="col-md-6">
												<label>Nomor Telepon Kantor</label>
												<div class="lbl"><?=$datapeng->no_kantor?></div>
											</div>
											<div class="col-md-6">
												<label>Nomor Telepon HP</label>
												<div class="lbl"><?=$datapeng->no_hp?></div>
											</div>
										</div>
									</div> 
									<div class="col-md-12" style="margin-top: 20px">
										<label>Email</label>
										<div class="lbl"><?=$datapeng->email?></div>
									</div> 
								<?php endforeach ?>
							</div>
						</div>
						<div class="tab-pane" role="tabpanel" id="step4">
							<h3>DATA ADMINISTRASI BANGUNAN GEDUNG</h3>
							<div class="row" style="margin-bottom: 20px;">
								<?php foreach ($admin as $dataadmin): ?>
								<?php $sippt = explode(',', $dataadmin->sippt) ?>
								<?php $kmb = explode(',', $dataadmin->kmb) ?>
									<div class="col-md-12" style="margin-top: 20px">
										<label>SIPPT/IPPR :</label>
										<div class="row">
											<div class="col-md-6">
												<label>No.</label>
												<div class="lbl"><?=($sippt[0]==NULL)?NULL:$sippt[0]?></div>
											</div>
											<div class="col-md-6">
												<label>Tanggal.</label>
												<div class="lbl"><?=($sippt[1]==NULL)?NULL:$sippt[1]?></div>
											</div>
										</div>
									</div> 
									<div class="col-md-12" style="margin-top: 20px">
										<label>Luas Tanah</label>
										<div class="lbl">"<?=$dataadmin->luas_tanah?> M<sup>2</sup></div>
									</div> 
									<div class="col-md-12" style="margin-top: 20px">
										<label>IMB :</label>
										<div class="row">

											<?php foreach ($imb as $dataimb): ?>
												<div class="col-md-6">
													<label>No.</label>
													<div class="lbl"><?=$dataimb->no_imb?></div>
												</div>
												<div class="col-md-6">
													<label>Tanggal.</label>
													<div class="lbl"><?=$dataimb->tanggal_imb?></div>
												</div>

											<?php endforeach ?>
										</div>
									</div>
									<div class="col-md-12" style="margin-top: 20px">
										<label>KMB/SLF Terakhir :</label>
										<div class="row">
											<div class="col-md-6">
												<label>No.</label>
												<div class="lbl"><?=($kmb[0]==NULL)?NULL:$kmb[0]?></div>
											</div>
											<div class="col-md-6">
												<label>Tanggal.</label>
												<div class="lbl"><?=($kmb[1]==NULL)?NULL:$kmb[1]?></div>
											</div>
										</div>
									</div>
							<?php endforeach ?>
								</div>
							</div>
							<div class="tab-pane" role="tabpanel" id="step5">
								<h3>DATA TEKNIS BANGUNAN GEDUNG</h3>
								<div class="row" style="margin-bottom: 20px;">
							<?php foreach ($teknis as $datateknis): ?>
								<?php $podium = explode(',', $datateknis->ketinggian)?>
									<div class="col-md-12" style="margin-top: 20px">
										<div class="row">
											<div class="col-md-6">
												<label>Jumlah Tower<sup>1</sup></label>
												<div class="lbl"><?=$datateknis->jumlah_tower?></div>
											</div>
											<div class="col-md-6">
												<label>Jumlah Unit<sup>2</sup></label>
												<div class="lbl"><?=$datateknis->jumlah_unit?></div>
											</div>
										</div>
									</div> 
									<div class="col-md-12" style="margin-top: 20px">
										<label>Ketinggian Bangunan :</label>
										<div class="row">
											<div class="col-md-6">
												<label>A. Tower</label>
												<div class="lbl"><?=($podium[0]==NULL)?NULL:$podium[0]?> Lantai</div>
											</div>
											<div class="col-md-6">
												<label>B. Podium</label>
												<div class="lbl"><?=($podium[1]==NULL)?NULL:$podium[1]?> Lantai</div>
											</div>
										</div>
									</div>
									<div class="col-md-12" style="margin-top: 20px;">
										<label>Jenis Bangunan</label>
										<div class="row funkyradio">

										<?php foreach ($jenis as $jenisbang): ?>
											<div class="col-md-6">
												<div class="funkyradio-primary">
													<input checked type="checkbox" <?=($jenisbang->perkantoran!=NULL)?'checked':''?> value="perkantoran" id="jenisbang" disabled="">
													<label for="jenisbang">Perkantoran</label>
												</div>
											</div>
											<div class="col-md-6">
												<div class="funkyradio-primary">
													<input checked type="checkbox" <?=($jenisbang->sarana_kesehatan!=NULL)?'checked':''?> value="kesehatan" id="kesehatan" disabled="">
													<label for="kesehatan">Sarana Kesehatan</label>
												</div>
											</div>
											<div class="col-md-6">
												<div class="funkyradio-primary">
													<input checked type="checkbox" <?=($jenisbang->apartemen!=NULL)?'checked':''?> value="perkantoran" id="jenisbang" disabled="">
													<label for="jenisbang">Apartemen</label>
												</div>
											</div>
											<div class="col-md-6">
												<div class="funkyradio-primary">
													<input checked type="checkbox" <?=($jenisbang->sarana_perdagangan!=NULL)?'checked':''?> value="kesehatan" id="kesehatan" disabled="">
													<label for="kesehatan">Sarana Perdagangan</label>
												</div>
											</div>
											<div class="col-md-6">
												<div class="funkyradio-primary">
													<input checked type="checkbox" <?=($jenisbang->hunian!=NULL)?'checked':''?> value="kesehatan" id="kesehatan" disabled="">
													<label for="kesehatan">Sarana Perdagangan</label>
												</div>
											</div>
											<div class="col-md-6">
												<div class="funkyradio-primary">
													<input checked type="checkbox" <?=($jenisbang->lainnya!=NULL)?'checked':''?>value="kesehatan" id="kesehatan" disabled="">
													<label for="kesehatan">Sarana Perdagangan</label>
												</div>
											</div>
										<?php endforeach ?>
										</div>
									</div>
									<?php $lantai = explode(',', $datateknis->luas_lantai)?>
									<?php $operasi = explode(',', $datateknis->operasional_gedung)?>
									<?php $hari = explode(',', $datateknis->peng_bangunan)?>
									<div class="col-md-12" style="margin-top: 20px">
										<label>Luas Lantai :</label>
										<div class="row">
											<div class="col-md-6">
												<label>A. Luas Lantai Dasar / Lantai Terluas</label>
												<div class="lbl"><?=$datateknis->luas_lantai?> M<sup>2</sup></div>
											</div>
											<div class="col-md-6">
												<label>B. Luas Lantai Total</label>
												<div class="lbl"><?=$datateknis->luas_total?> M<sup>2</sup></div>
											</div>
										</div>
									</div>
									<div class="col-md-12" style="margin-top: 20px">
										<label>Tingkat Okupansi :</label>
										<div class="lbl"><?=$datateknis->tingkat_okupansi?>%</div>
									</div>
									<div class="col-md-12" style="margin-top: 20px">
										<label>Ket :</label>
										<div class="lbl"><?=$datateknis->ket_okupansi?></div>
									</div>
									<div class="col-md-12" style="margin-top: 20px">
										<label>Waktu Operasional bangunan gedung :</label>
										<div class="row">
											<div class="col-md-12">
												<label>A. Rata-rata jumlah jam operasional perminggu</label>
												<div class="lbl"><?=($operasi[0]==NULL)?NULL:$operasi[0]?> jam/minggu</div>
											</div>
											<div class="col-md-6">
												<label>B. Rata-rata jumlah hari dan minggu operasional per tahun</label>
												<div class="lbl"><?=($operasi[1]==NULL)?NULL:$operasi[1]?> Hari</div>
											</div>
											<div class="col-md-6">
												<label></label>
												<div class="lbl"><?=($operasi[2]==NULL)?NULL:$operasi[2]?> Minggu</div>
											</div>
											<div class="col-md-12">
												<label>C. Jumlah jam operasional per tahun</label>
												<div class="lbl"><?=($operasi[3]==NULL)?NULL:$operasi[3]?> jam/minggu</div>
											</div>
										</div>
									</div>
									<div class="col-md-12" style="margin-top: 20px">
										<table class="table table table-striped table-bordered">
											<tbody>
											</tbody><thead>
												<tr>
													<th><center>Hari/Minggu</center></th>
													<th><center>Jumlah rata-rata pengguna saat jam kerja (perkiraan),(orang)</center></th>
													<th><center>Jumlah puncak penggunaan (perkiraan),(orang)</center></th>
												</tr>
											</thead>
											<tbody><tr>
												<td style="text-align: center;">
													Senin
												</td>
												<td class="jum-rata">
													<div class="lbl"><?=($hari[0]==NULL)?NULL:$hari[0]?> </div>
												</td>
												<td class="jum-puncak">
													<div class="lbl"><?=($hari[1]==NULL)?NULL:$hari[1]?></div>
												</td>
											</tr>
											<tr>
												<td style="text-align: center;">
													Selasa
												</td>
												<td class="jum-rata">
													<div class="lbl"><?=($hari[2]==NULL)?NULL:$hari[2]?></div>
												</td>
												<td class="jum-puncak">
													<div class="lbl"><?=($hari[3]==NULL)?NULL:$hari[3]?></div>
												</td>
											</tr>
											<tr>
												<td style="text-align: center;">
													Rabu
												</td>
												<td class="jum-rata">
													<div class="lbl"><?=($hari[4]==NULL)?NULL:$hari[4]?></div>
												</td>
												<td class="jum-puncak">
													<div class="lbl"><?=($hari[5]==NULL)?NULL:$hari[5]?></div>
												</td>
											</tr>
											<tr>
												<td style="text-align: center;">
													Kamis
												</td>
												<td class="jum-rata">
													<div class="lbl"><?=($hari[6]==NULL)?NULL:$hari[6]?></div>
												</td>
												<td class="jum-puncak">
													<div class="lbl"><?=($hari[7]==NULL)?NULL:$hari[7]?></div>
												</td>
											</tr>
											<tr>
												<td style="text-align: center;">
													Jumat
												</td>
												<td class="jum-rata">
													<div class="lbl"><?=($hari[8]==NULL)?NULL:$hari[8]?></div>
												</td>
												<td class="jum-puncak">
													<div class="lbl"><?=($hari[9]==NULL)?NULL:$hari[9]?></div>
												</td>
											</tr>
											<tr>
												<td style="text-align: center;">
													Sabtu
												</td>
												<td class="jum-rata">
													<div class="lbl"><?=($hari[10]==NULL)?NULL:$hari[10]?></div>
												</td>
												<td class="jum-puncak">
													<div class="lbl"><?=($hari[11]==NULL)?NULL:$hari[11]?></div>
												</td>
											</tr>
											<tr>
												<td style="text-align: center;">
													Minggu
												</td>
												<td class="jum-rata">
													<div class="lbl"><?=($hari[12]==NULL)?NULL:$hari[12]?></div>
												</td>
												<td class="jum-puncak">
													<div class="lbl"><?=($hari[13]==NULL)?NULL:$hari[13]?></div>
												</td>
											</tr>
											<tr>
												<td style="text-align: center;">
													Total Per Minggu
												</td>
												<td>
													<div class="lbl"><?=($hari[14]==NULL)?NULL:$hari[14]?></div>
												</td>
												<td>
													<div class="lbl"><?=($hari[15]==NULL)?NULL:$hari[15]?></div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="col-md-12" style="margin-bottom: 20px">
									<label>Total Penghuni :</label>
									<div class="lbl"><?=$datateknis->total_penghuni?> Orang</div>
								</div>

							<?php endforeach ?>
							</div>
						</div>
						<div class="tab-pane" role="tabpanel" id="step6">
							<h3>DATA KONSUMSI AIR DAN PENGOLAHAN AIR</h3>
							<div class="row" style="margin-bottom: 20px;">

							<?php foreach ($konsumsi as $datakonsumsi): ?>
								<?php $rata = explode(',', $datakonsumsi->rata_konsumsi)?>
								<?php $air = explode(',', $datakonsumsi->air_bersih)?>
								<?php $kapasitas = explode(',', $datakonsumsi->kapasitas_bersih) ?>
								<?php $hujan = explode(',', $datakonsumsi->air_hujan) ?>
								<?php $jml = explode(',', $datakonsumsi->jml_hujan) ?>
								<?php $kaps = explode(',', $datakonsumsi->kapasitas_hujan) ?>
								<?php $bekas = explode(',', $datakonsumsi->air_bekas) ?>
								<?php $kaps_bekas = explode(',', $datakonsumsi->kapasitas_bekas) ?>
								<?php $limbah = explode(',', $datakonsumsi->air_limbah) ?>
								<?php $kaps_limbah = explode(',', $datakonsumsi->kapasitas_limbah) ?>
								<div class="col-md-12" style="margin-top: 20px">
									<div style="width: 100%; height: 13px; border-bottom: 2px solid #999; text-align: center;margin-bottom: 18px;">
										<span style="font-size:18px;background-color:#fff;padding: 0 15px;">
											KONSUMSI AIR
										</span>
									</div>
								</div>
								<div class="col-md-12" style="margin-bottom: 20px;">
									<label>Sumber air yang digunakan</label>
									<div class="row funkyradio">
										<div class="col-md-6">
											<div class="funkyradio-primary">
												<input checked type="checkbox" id="pdam" disabled="">
												<label for="pdam">PDAM</label>
											</div>
										</div>
										<div class="col-md-6">
											<div class="funkyradio-primary">
												<input checked type="checkbox" id="sumur" disabled="">
												<label for="sumur">Sumur Pantek</label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12" style="margin-bottom: 20px">
									<label>Jumlah Sumur Bor :</label>
									<div class="lbl">1 Titik</div>
									<div class="row">
										<div class="col-md-6">
											<label>SIPA 1 NO :</label>
											<div class="lbl">123125125</div>
										</div>
										<div class="col-md-6">
											<label>Tanggal :</label>
											<div class="lbl">12/12/12</div>
										</div>
									</div>
								</div>
								<div class="col-md-12" style="margin-bottom: 20px">
									<label>Jumlah Sumur Pantek (Jet Pump) :</label>
									<div class="lbl">1 Titik</div>
									<div class="row">
										<div class="col-md-6">
											<label>SIPA 1 NO :</label>
											<div class="lbl">123125125</div>
										</div>
										<div class="col-md-6">
											<label>Tanggal :</label>
											<div class="lbl">12/12/12</div>
										</div>
									</div>
								</div>
								<div class="col-md-12" style="margin-bottom: 20px">
									<label>Jumlah Ground Tank :</label>
									<div class="lbl">1 Titik</div>
									<div class="row">
										<div class="col-md-12">
											<label>Kapasitas Ground Tank 1 NO :</label>
											<div class="lbl">123125125</div>
										</div>
									</div>
								</div>
								<div class="col-md-12" style="margin-bottom: 20px">
									<label>Jumlah Roof Tank :</label>
									<div class="lbl">1 Titik</div>
									<div class="row">
										<div class="col-md-12">
											<label>Kapasitas Roof Tank 1 NO :</label>
											<div class="lbl">123125125</div>
										</div>
									</div>
								</div>
								<div class="col-md-12" style="margin-bottom: 20px;">
									<div class="table-responsive">
										<table class="table table table-striped table-bordered">
											<tbody>
											</tbody><thead>
												<tr>
													<th rowspan="2"><center>Bulan (Januari - Desember 2018)</center></th>
													<th colspan="4"><center>Jumlah Konsumsi</center></th>
												</tr>
												<tr>
													<th><center>PDAM</center></th>
													<th><center>Sumur Bor/ Pantek</center></th>
													<th><center>Pengolahan air sendiri / Recycle</center></th>
													<th><center>Lain-lain</center></th>
												</tr>
											</thead>
											<tbody><tr>
												<td style="text-align: center;">
													Januari
												</td>
												<td class="rowpdam">
													<div class="lbl">80</div>
												</td>
												<td class="rowbor">
													<div class="lbl">80</div>
												</td>
												<td class="rowrecycle">
													<div class="lbl">80</div>
												</td>
												<td class="rowlain">
													<div class="lbl">80</div>
												</td>
											</tr>
											<tr>
												<td style="text-align: center;">
													Febuari
												</td>
												<td class="rowpdam">
													<div class="lbl">80</div>
												</td>
												<td class="rowbor">
													<div class="lbl">80</div>
												</td>
												<td class="rowrecycle">
													<div class="lbl">80</div>
												</td>
												<td class="rowlain">
													<div class="lbl">80</div>
												</td>
											</tr>
											<tr>
												<td style="text-align: center;">
													Maret
												</td>
												<td class="rowpdam">
													<div class="lbl">80</div>
												</td>
												<td class="rowbor">
													<div class="lbl">80</div>
												</td>
												<td class="rowrecycle">
													<div class="lbl">80</div>
												</td>
												<td class="rowlain">
													<div class="lbl">80</div>
												</td>
											</tr>
											<tr>
												<td style="text-align: center;">
													April
												</td>
												<td class="rowpdam">
													<div class="lbl">80</div>
												</td>
												<td class="rowbor">
													<div class="lbl">80</div>
												</td>
												<td class="rowrecycle">
													<div class="lbl">80</div>
												</td>
												<td class="rowlain">
													<div class="lbl">80</div>
												</td>
											</tr>
											<tr>
												<td style="text-align: center;">
													Mei
												</td>
												<td class="rowpdam">
													<div class="lbl">80</div>
												</td>
												<td class="rowbor">
													<div class="lbl">80</div>
												</td>
												<td class="rowrecycle">
													<div class="lbl">80</div>
												</td>
												<td class="rowlain">
													<div class="lbl">80</div>
												</td>
											</tr>
											<tr>
												<td style="text-align: center;">
													Juni
												</td>
												<td class="rowpdam">
													<div class="lbl">80</div>
												</td>
												<td class="rowbor">
													<div class="lbl">80</div>
												</td>
												<td class="rowrecycle">
													<div class="lbl">80</div>
												</td>
												<td class="rowlain">
													<div class="lbl">80</div>
												</td>
											</tr>
											<tr>
												<td style="text-align: center;">
													Juli
												</td>
												<td class="rowpdam">
													<div class="lbl">80</div>
												</td>
												<td class="rowbor">
													<div class="lbl">80</div>
												</td>
												<td class="rowrecycle">
													<div class="lbl">80</div>
												</td>
												<td class="rowlain">
													<div class="lbl">80</div>
												</td>
											</tr>
											<tr>
												<td style="text-align: center;">
													Agustus
												</td>
												<td class="rowpdam">
													<div class="lbl">80</div>
												</td>
												<td class="rowbor">
													<div class="lbl">80</div>
												</td>
												<td class="rowrecycle">
													<div class="lbl">80</div>
												</td>
												<td class="rowlain">
													<div class="lbl">80</div>
												</td>
											</tr>
											<tr>
												<td style="text-align: center;">
													September
												</td>
												<td class="rowpdam">
													<div class="lbl">80</div>
												</td>
												<td class="rowbor">
													<div class="lbl">80</div>
												</td>
												<td class="rowrecycle">
													<div class="lbl">80</div>
												</td>
												<td class="rowlain">
													<div class="lbl">80</div>
												</td>
											</tr>
											<tr>
												<td style="text-align: center;">
													Oktober
												</td>
												<td class="rowpdam">
													<div class="lbl">80</div>
												</td>
												<td class="rowbor">
													<div class="lbl">80</div>
												</td>
												<td class="rowrecycle">
													<div class="lbl">80</div>
												</td>
												<td class="rowlain">
													<div class="lbl">80</div>
												</td>
											</tr>
											<tr>
												<td style="text-align: center;">
													November
												</td>
												<td class="rowpdam">
													<div class="lbl">80</div>
												</td>
												<td class="rowbor">
													<div class="lbl">80</div>
												</td>
												<td class="rowrecycle">
													<div class="lbl">80</div>
												</td>
												<td class="rowlain">
													<div class="lbl">80</div>
												</td>
											</tr>
											<tr>
												<td style="text-align: center;">
													Desember
												</td>
												<td class="rowpdam">
													<div class="lbl">80</div>
												</td>
												<td class="rowbor">
													<div class="lbl">80</div>
												</td>
												<td class="rowrecycle">
													<div class="lbl">80</div>
												</td>
												<td class="rowlain">
													<div class="lbl">80</div>
												</td>
											</tr>
											<tr>
												<td style="text-align: center;">
													Total Konsumsi (M<sup>3</sup>)
												</td>
												<td>
													<div class="lbl">960</div>
												</td>
												<td>
													<div class="lbl">960</div>
												</td>
												<td>
													<div class="lbl">960</div>
												</td>
												<td>
													<div class="lbl">960</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>	
							</div>
							<div class="col-md-12" style="margin-bottom: 20px">
								<label>Konsumsi Air Rata-rata :</label>
								<div class="row">
									<div class="col-md-6">
										<label>A. Occupant Area :</label>
										<div class="lbl"><?=($rata[0]==NULL)?'NULL':$rata[0]?> M<sup>3</sup>/org/hari</div>
									</div>
									<div class="col-md-6">
										<label>B. Service Area :</label>
										<div class="lbl"><?=($rata[1]==NULL)?'NULL':$rata[1]?> M<sup>3</sup>/hari</div>
									</div>
								</div>
							</div>
							<div class="col-md-12" style="margin-top: 20px">
								<div style="width: 100%; height: 13px; border-bottom: 2px solid #999; text-align: center;margin-bottom: 18px;">
									<span style="font-size:18px;background-color:#fff;padding: 0 15px;">
										PENGOLAHAN AIR
									</span>
								</div>
							</div>
							<div class="col-md-12" style="margin-bottom: 20px">
								<label>Air Bersih :</label>
								<div class="row funkyradio">
									<div class="col-md-6">
										<div class="funkyradio-primary">
											<input <?=($air[0]=='Water Treatment Plant')?'checked':''?>  type="checkbox" id="water" disabled="">
											<label for="water">Water Treatment Plant</label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<label>Sistem yang digunakan :</label>
										<div class="lbl"><?=$datakonsumsi->sistem_water;?></div>
									</div>
									<div class="col-md-6">
										<label>Kapasitas :</label>
										<div class="lbl"><?=($kapasitas[0]!=NULL)?$kapasitas[0]:''?> M<sup>3</sup>/Hari</div>
									</div>
								</div>
							</div>
							<div class="col-md-12" style="margin-bottom: 20px">
								<label>Air Hujan :</label>
								<div class="row funkyradio">
									<div class="col-md-6">
										<div class="funkyradio-primary">
											<input <?=($hujan[0]=='Sumur Resapan')?'checked':''?> type="checkbox" id="sumur" disabled="">
											<label for="sumur">Sumur Resapan</label>
										</div>
									</div>
								</div>
								<div class="row" style="margin-bottom: 10px;">
									<div class="col-md-6">
										<label>Jumlah :</label>
										<div class="lbl"><?=($jml[0]==NULL)?'':$jml[0]?> Titik</div>
									</div>
									<div class="col-md-6">
										<label>Kapasitas Total :</label>
										<div class="lbl"><?=($kaps[0]==NULL)?'':$kaps[0]?> M<sup>3</sup></div>
									</div>
								</div>
								<div class="row funkyradio">
									<div class="col-md-6">
										<div class="funkyradio-primary">
											<input <?=($hujan[1]=='Kolam Resapan')?'checked':''?>  type="checkbox" id="sumur" disabled="">
											<label for="sumur">Kolam Resapan</label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12" style="margin-bottom: 20px">
								<div class="row ">
									<div class="col-md-6">
										<label>Air Bekas / Recycle :</label>
										<div class="funkyradio-primary funkyradio">
											<input  <?=($bekas[0]==NULL)?'':'checked'?> type="checkbox" id="water" disabled="">
											<label for="water">Water Treatment Plant</label>
										</div>
									</div>
									<div class="col-md-6">
										<label>Kapasitas :</label>
										<div class="lbl"><?=($kaps_bekas[0]==NULL)?'':$kaps_bekas[0]?> M<sup>3</sup>/Hari</div>
									</div>
								</div>
							</div>
							<div class="col-md-12" style="margin-bottom: 20px">
								<div class="row ">
									<div class="col-md-6">
										<label>Air Limbah :</label>
										<div class="funkyradio-primary funkyradio">
											<input <?=($limbah[0]=='PD PAL')?'checked':''?> type="checkbox" id="water" disabled="">
											<label for="water">PD PAL</label>
										</div>
									</div>
									<div class="col-md-6">
										<label>Kapasitas :</label>
										<div class="lbl"><?=($kaps_limbah[1]==NULL)?'':$kaps_limbah[1]?> M<sup>3</sup>/Hari</div>
									</div>
								</div>
							</div>

								<?php endforeach ?>
						</div>
					</div>
					<div class="tab-pane" role="tabpanel" id="step7">
						<h3>SKETSA LOKASI SUMUR RESAPAN, KOLAM RESAPAN, SUMUR BOR, SUMUR PANTEK DAN WATERTRAP PADA SITEPLAN</h3>
						<div class="row" style="margin-bottom: 20px;">

							<?php foreach ($sketsa as $datasketsa): ?>
							<div class="col-md-12" style="margin-top: 20px">
								<img src="<?= base_url('assets/images/'.$datasketsa->file_sketsa); ?>" width="50%">
							</div>
							 	<div class="col-md-12" style="margin-top: 20px">
								<label>Nama Bangunan :</label>
								<div class="lbl"><?=$datasketsa->nama_bangunan?></div>
							</div>
							<div class="col-md-12" style="margin-top: 20px">
								<label>Lokasi Bangunan :</label>
								<div class="lbl"><?=$datasketsa->lokasi?></div>
							</div>

							<?php endforeach ?>
						</div>
					</div>
					<div class="tab-pane" role="tabpanel" id="step8">
						<h3>PERMASALAHAN / KENDALA</h3>
						<div class="row" style="margin-bottom: 20px;">
							<?php foreach ($permasalahan as $masalah):?>
							<div class="col-md-12" style="margin-top: 20px">
								<label>Sumur Resapan / Kolam Resapan</label>
								<div class="lbl"><?=$masalah->sumur_resapan?></div>	
							</div>
							<div class="col-md-12" style="margin-top: 20px">
								<label>Sumur Dalam / Sumur Pantek</label>
								<div class="lbl"><?=$masalah->sumur_dalam?></div>	
							</div>
							<div class="col-md-12" style="margin-top: 20px">
								<label>Pengolahan Air Limbah</label>
								<div class="lbl"><?=$masalah->pengelolaan_limbah?></div>	
							</div>

							<?php endforeach ?>
						</div>
					</div>

					<div class="clearfix"></div>
					<a href="<?= site_url('main/editdata') ?>" class="btn btn-warning btn-block" style="margin-bottom: 30px;">Ubah</a>
				</div>
			</form>
		</div>
	</section>
</div>
</div>