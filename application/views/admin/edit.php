<?php $this->load->view('include/navbar'); ?>	
<body>
	<div class="container" style="margin-bottom: 50px;">
		<div class="stepwizard">
			<div class="stepwizard-row setup-panel">
				<div class="stepwizard-step">
					<a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
					<p>Step 1</p>
				</div>
				<div class="stepwizard-step">
					<a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
					<p>Step 2</p>
				</div>
				<div class="stepwizard-step">
					<a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
					<p>Step 3</p>
				</div>
				<div class="stepwizard-step">
					<a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
					<p>Step 4</p>
				</div>
				<div class="stepwizard-step">
					<a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
					<p>Step 5</p>
				</div>
				<div class="stepwizard-step">
					<a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>
					<p>Step 6</p>
				</div>
				<div class="stepwizard-step">
					<a href="#step-7" type="button" class="btn btn-default btn-circle" disabled="disabled">7</a>
					<p>Step 7</p>
				</div>
				<div class="stepwizard-step">
					<a href="#step-8" type="button" class="btn btn-default btn-circle" disabled="disabled">8</a>
					<p>Step 8</p>
				</div>
			</div>
		</div>
		<form role="form" method="post" action="https://jakartasatu.jakarta.go.id/pengawasanair/main/proses_edit"  enctype="multipart/form-data">
			<div class="row setup-content" id="step-1">
				<div class="col-xs-12">
					<div class="col-md-12">
						<h3> INFORMASI UMUM BANGUNAN GEDUNG</h3>
						<div class="row">
							<?php foreach ($info as $datainfo): ?>
								
								<input type="hidden" name="idinput" value="<?=$datainfo->id_info?>">
								<div class="form-group margin-input">
									<label class="col-sm-2">Nama Bangunan :</label>
									<div class="col-sm-10">
										<input  maxlength="100" value="<?=($datainfo->nama_bangunan==NULL)?NULL:$datainfo->nama_bangunan?>" name="nama_bangunan" type="text" class="form-control" placeholder="Masukan Nama Bangunan"  />
									</div>
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2">Lokasi :</label>
									<div class="col-sm-10">
										<textarea maxlength="100" name="lokasi" class="form-control" placeholder="Masukan Lokasi"  /><?=
										($datainfo->lokasi==NULL)?NULL:$datainfo->lokasi?></textarea>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10 margin-input-row">
										<div class="row">
											<label class="col-sm-1">RT :</label>
											<div class="col-sm-5">
												<input  maxlength="100" value="<?=$datainfo->rt?>" name="rt_info" type="text" class="form-control" placeholder="Masukan RT"  />
											</div>
											<label class="col-sm-1">RW :</label>
											<div class="col-sm-5">
												<input  maxlength="100" value="<?=$datainfo->rw?>" name="rw_info" type="text" class="form-control" placeholder="Masukan RW"  />
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10 margin-input">
										<div class="row">
											<label class="col-sm-2">Kelurahan :</label>
											<div class="col-sm-10">
												<select name="kelurahan_info" class="selectpicker form-control" data-show-subtext="true" data-live-search="true" id="kel" onchange="getKecInfo();">
													<option value="<?=$datainfo->kelurahan?>"><?=$datainfo->kelurahan?></option>
													<option value="" disabled>-- SILAHKAN PILIH KELURAHAN --</option>
													<?php foreach ($kelurahan as $kel): ?>
														<option value="<?=$kel->id?>"><?=$kel->kel?></option>
													<?php endforeach ?>
												</select>
												<input name="kelurahan_info" id="inputkelinf" type="hidden"  class="form-control" placeholder="Masukan Kelurahan"/>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10 margin-input">
										<div class="row">
											<label class="col-sm-2">Kecamatan :</label>
											<div class="col-sm-10">
												<select id="kec" class="form-control" onchange="getKotaInfo()" name="kecamatan_info">
													<option  value="<?=$datainfo->kecamatan?>"><?=$datainfo->kecamatan?></option>
													<option value="" disabled>-- SILAHKAN PILIH KELURAHAN TERLEBIH DAHULU --</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10 margin-input">
										<div class="row">
											<label class="col-sm-2">Kota :</label>
											<div class="col-sm-10">
												<!-- <input  maxlength="100" value="<?=$datainfo->kota?>" name="kota_info" type="text" class="form-control" placeholder="Masukan Kota"/> -->
												<select id="kota" name="kota_info" class="form-control" onchange="getNameInfo()">
													<option value="<?=$datainfo->kota?>"><?=$datainfo->kota?></option>
													<option value="" disabled="">-- SILAHKAN PILIH KECAMATAN TERLEBIH DAHULU --</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10 margin-input">
										<div class="row">
											<label class="col-sm-2">Kode Pos :</label>
											<div class="col-sm-10">
												<input maxlength="100" value="<?=$datainfo->kode_pos?>" name="kode_info" type="text" class="form-control" placeholder="Masukan Kode Pos"/>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2">Nomor Obyek Pajak :</label>
									<div class="col-sm-10">
										<input  maxlength="100" value="<?=$datainfo->NOP?>" name="nop" type="text" class="form-control" placeholder="Masukan Nomor Obyek Pajak"/>
									</div> 
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2">Mulai Beroperasi Tahun</label>
									<div class="col-sm-10">
										<input name="startYear" value="<?=$datainfo->mulai_operasi?>" id="startYear" class="date-picker-year form-control" placeholder="Masukan Tahun" /> 
									</div>
								</div>
							<?php endforeach ?>
						</div>
						<br>
						<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
					</div>
				</div>
			</div>
			<div class="row setup-content" id="step-2">
				<div class="col-xs-12">
					<div class="col-md-12">
						<h3> DATA KEPEMILIKAN BANGUNAN GEDUNG</h3>
						<div class="row">
							<?php foreach ($pemilik as $datamilik): ?>
								<div class="form-group margin-input">
									<label class="col-sm-2">Nama Pemilik :</label>
									<div class="col-sm-10">
										<input name="nama_pemilik" maxlength="100" value="<?=$datamilik->nama_pemilik?>" type="text" class="form-control" placeholder="Masukan Nama Pemilik"/>
									</div> 
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2">Alamat :</label>
									<div class="col-sm-10">
										<textarea maxlength="100" name="alamat" class="form-control" placeholder="Masukan Alamat"/><?=$datamilik->alamat?></textarea>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10 margin-input-row">
										<div class="row">
											<label class="col-sm-1">RT :</label>
											<div class="col-sm-5">
												<input  name="rt_pemilik" maxlength="100" value="<?=$datamilik->rt?>" type="text" class="form-control" placeholder="Masukan RT"  />
											</div>
											<label class="col-sm-1">RW :</label>
											<div class="col-sm-5">
												<input  name="rw_pemilik" maxlength="100" value="<?=$datamilik->rw?>" type="text" class="form-control" placeholder="Masukan RW"  />
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10 margin-input">
										<div class="row">
											<label class="col-sm-2">Kelurahan :</label>
											<div class="col-sm-10">
												<select name="kelurahan_pemilik" class="selectpicker form-control" data-show-subtext="true" data-live-search="true" id="kelmilik" onchange="getKecMilik();">
													<option value="<?=$datamilik->kelurahan?>"><?=$datamilik->kelurahan?></option>
													<option value="" disabled="">-- SILAHKAN PILIH KELURAHAN --</option>
													<?php foreach ($kelurahan as $kel): ?>
														<option value="<?=$kel->id?>"><?=$kel->kel?></option>
													<?php endforeach ?>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10 margin-input">
										<div class="row">
											<label class="col-sm-2">Kecamatan :</label>
											<div class="col-sm-10">
												<select name="kecamatan_pemilik" id="kecmilik" class="form-control" onchange="getKotaMilik()">
													<option value="<?=$datamilik->kecamatan?>"><?=$datamilik->kecamatan?></option>
													<option value="" disabled="">-- SILAHKAN PILIH KELURAHAN TERLEBIH DAHULU --</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10 margin-input">
										<div class="row">
											<label class="col-sm-2">Kota :</label>
											<div class="col-sm-10">
												<select id="kotamilik" class="form-control" onchange="getNameMilik()">
													<option value="<?=$datamilik->kota?>"><?=$datamilik->kota?></option>
													<option value="" disabled="">-- SILAHKAN PILIH KECAMATAN TERLEBIH DAHULU --</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10 margin-input">
										<div class="row">
											<label class="col-sm-2">Kode Pos :</label>
											<div class="col-sm-10">
												<input name="kode_pemilik" maxlength="100" value="<?=$datamilik->kode_pos?>" type="text" class="form-control" placeholder="Masukan Kode Pos"/>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10 margin-input">
										<div class="row">
											<label class="col-sm-2">Provinsi :</label>
											<div class="col-sm-10">
												<input name="provinsi" maxlength="100" value="<?=$datamilik->provinsi?>" type="text" class="form-control" placeholder="Masukan Provinsi"/>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2">Nomor Telepon :</label>
									<div class="col-sm-10">
										<input  name="no_hp" maxlength="100" value="<?=$datamilik->no_kantor?>" type="text" class="form-control" placeholder="Kantor"/>
									</div> 
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10 margin-input">
										<div class="row">
											<div class="col-sm-12">
												<input  name="no_telp" maxlength="100" value="<?=$datamilik->no_hp?>" type="text" class="form-control" placeholder="HP"/>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2">Email :</label>
									<div class="col-sm-10">
										<input  name="email" maxlength="100" value="<?=$datamilik->email?>" type="email" class="form-control" placeholder="Masukan Email"/>
									</div> 
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2" style="margin-top: 14px;margin-bottom: 0;">Penanggung Jawab (Person in Charge) :</label>
									<div class="col-sm-10">
										<input  name="tanggung" maxlength="100" value="<?=$datamilik->tanggung_jawab?>" type="text" class="form-control" placeholder="Masukan Penanggung Jawab"/>
									</div> 
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2">Jabatan :</label>
									<div class="col-sm-10">
										<input  name="jabatan" maxlength="100" value="<?=$datamilik->jabatan?>" type="text" class="form-control" placeholder="Masukan Jabatan"/>
									</div> 
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2">Nomor Telepon :</label>
									<div class="col-sm-10">
										<input  name="telp_jabatan" maxlength="100" value="<?=$datamilik->telp_jabatan?>" type="text" class="form-control" placeholder="Kantor"/>
									</div> 
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10 margin-input">
										<div class="row">
											<div class="col-sm-12">
												<input  name="no_jabatan" maxlength="100" value="<?=$datamilik->no_jabatan?>" type="text" class="form-control" placeholder="HP"/>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2">Email :</label>
									<div class="col-sm-10">
										<input  name="email_jabatan" maxlength="100" value="<?=$datamilik->email_jabatan?>" type="email" class="form-control" placeholder="Masukan Email"/>
									</div> 
								</div>

								
							<?php endforeach ?>
						</div>
						<br>
						<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
					</div>
				</div>
			</div>
			<div class="row setup-content" id="step-3">
				<div class="col-xs-12">
					<div class="col-md-12">
						<h3> DATA PENGELOLA BANGUNAN GEDUNG</h3>
						<div class="row">
							<?php foreach ($pengelola as $datapeng): ?>
								
								<div class="form-group margin-input">
									<label class="col-sm-2">Kategori Pengelola <span style="color: red;">*</span>:</label>
									<div class="col-sm-10">
										<div class="row">
											<div class="funkyradio">
												<div class="col-md-5">
													<div class="funkyradio-primary">
														<input type="radio" name="kat_pengelola" <?=($datapeng->kategori_pengelola=='inhouse')?'checked':''?> id="inhouse" value="inhouse"/>
														<label for="inhouse">inhouse</label>
													</div>
												</div>
												<div class="col-md-5">
													<div class="funkyradio-primary">
														<input type="radio" name="kat_pengelola" <?=($datapeng->kategori_pengelola=='outsourcing')?'checked':''?> id="outsourcing" value="outsourcing"/>
														<label for="outsourcing">outsourcing</label>
													</div>
												</div>
											</div>
										</div>
									</div> 
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2">Pengelola :</label>
									<div class="col-sm-10">
										<input  name="pengelola" maxlength="100" value="<?=$datapeng->pengelola?>" type="text" class="form-control" placeholder="Masukan Pengelola"/>
									</div> 
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2">Penanggung Jawab :</label>
									<div class="col-sm-10">
										<input  name="peng_jawab" maxlength="100" value="<?=$datapeng->tanggung_jawab?>" type="text" class="form-control" placeholder="Penanggung Jawab"/>
									</div> 
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2">Jabatan :</label>
									<div class="col-sm-10">
										<input  name="jabatan_peng" maxlength="100" value="<?=$datapeng->jabatan?>" type="text" class="form-control" placeholder="Jabatan"/>
									</div> 
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2">Alamat :</label>
									<div class="col-sm-10">
										<textarea name="alamat_peng" maxlength="100" class="form-control" placeholder="Masukan Alamat"/><?=$datapeng->alamat?></textarea>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10 margin-input-row">
										<div class="row">
											<label class="col-sm-1">RT :</label>
											<div class="col-sm-5">
												<input  name="rt_peng" maxlength="100" value="<?=$datapeng->rt?>" type="text" class="form-control" placeholder="Masukan RT"  />
											</div>
											<label class="col-sm-1">RW :</label>
											<div class="col-sm-5">
												<input  name="rw_peng" maxlength="100" value="<?=$datapeng->rw?>" type="text" class="form-control" placeholder="Masukan RW"  />
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10 margin-input">
										<div class="row">
											<label class="col-sm-2">Kelurahan :</label>
											<div class="col-sm-10">
												<select name="kelurahan_peng" class="selectpicker form-control" data-show-subtext="true" data-live-search="true" id="kelpeng" onchange="getKecPeng();">
													<option value="<?=$datapeng->kelurahan?>"><?=$datapeng->kelurahan?></option>
													<option value="" disabled="">-- SILAHKAN PILIH KELURAHAN --</option>
													<?php foreach ($kelurahan as $kel): ?>
														<option value="<?=$kel->id?>"><?=$kel->kel?></option>
													<?php endforeach ?>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10 margin-input">
										<div class="row">
											<label class="col-sm-2">Kecamatan :</label>
											<div class="col-sm-10">
												<select id="kecpeng" name="kecamatan_peng" class="form-control" onchange="getKotaPeng()">
													<option value="<?=$datapeng->kecamatan?>"><?=$datapeng->kecamatan?></option>
													<option value="" disabled="">-- SILAHKAN PILIH KELURAHAN TERLEBIH DAHULU --</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10 margin-input">
										<div class="row">
											<label class="col-sm-2">Kota :</label>
											<div class="col-sm-10">
												<select name="kota_peng" id="kotapeng" class="form-control" onchange="getNamePeng()">
													<option value="<?=$datapeng->kota?>"><?=$datapeng->kota?></option>
													<option value="" disabled="">-- SILAHKAN PILIH KECAMATAN TERLEBIH DAHULU --</option>
													<option value="" disabled></option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10 margin-input">
										<div class="row">
											<label class="col-sm-2">Kode Pos :</label>
											<div class="col-sm-10">
												<input name="kode_peng" maxlength="100" value="<?=$datapeng->kode_pos?>" type="text" class="form-control" placeholder="Masukan Kode Pos"/>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10 margin-input">
										<div class="row">
											<label class="col-sm-2">Provinsi :</label>
											<div class="col-sm-10">
												<input name="provinsi_peng" maxlength="100" value="<?=$datapeng->provinsi?>" type="text" class="form-control" placeholder="Masukan Kode Pos"/>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2">Nomor Telepon :</label>
									<div class="col-sm-10">
										<input  name="no_telp_peng" maxlength="100" value="<?=$datapeng->no_kantor?>" type="text" class="form-control" placeholder="Kantor"/>
									</div> 
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10 margin-input">
										<div class="row">
											<div class="col-sm-12">
												<input  name="no_hp_peng" maxlength="100" value="<?=$datapeng->no_hp?>" type="text" class="form-control" placeholder="HP"/>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2">Email :</label>
									<div class="col-sm-10">
										<input  name="email_peng" maxlength="100" value="<?=$datapeng->email?>" type="Email" class="form-control" placeholder="Masukan Email"/>
									</div> 
								</div>
							<?php endforeach ?>
						</div>
						<br>
						<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
					</div>
				</div>
			</div>
			<div class="row setup-content" id="step-4">
				<div class="col-xs-12">
					<div class="col-md-12">
						<h3> DATA ADMINISTRASI BANGUNAN GEDUNG</h3>
						<div class="row">
							<?php foreach ($admin as $dataadmin): ?>
								<?php $sippt = explode(',', $dataadmin->sippt) ?>
								<?php $kmb = explode(',', $dataadmin->kmb) ?>
								<div class="form-group margin-input">
									<label class="col-sm-2">SIPPT/IPPR :</label>
									<label class="col-sm-1">No.</label>
									<div class="col-sm-4">
										<input name="no_sippt" maxlength="100" value="<?=($sippt[0]==NULL)?NULL:$sippt[0]?>" type="text" class="form-control" placeholder="Masukan Nomor"/>
									</div> 
									<label class="col-sm-1">Tgl.</label>
									<div class="col-sm-4">
										<input name="tgl_sippt" type="text" id="datepicker" value="<?=($sippt[1]==NULL)?NULL:$sippt[1]?>" class="form-control" placeholder="Masukan Tanggal"/>
									</div> 
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2">Luas Tanah :</label>
									<div class="col-sm-10">
										<div class="input-group">
											<input name="luas_tanah" value="<?=$dataadmin->luas_tanah?>" type="text" class="form-control" placeholder="Masukan Luas Tanah">
											<span class="input-group-addon" id="basic-addon2">M<sup>2</sup></span>
										</div>
									</div> 
								</div>
								<?php foreach ($imb as $dataimb): ?>
									<div class="form-group margin-input">
										<label class="col-sm-2">IMB :</label>

										<label class="col-sm-1">No.</label>
										<div class="col-sm-4">
											<input  name="no_imb[]" value="<?=$dataimb->no_imb?>" maxlength="100" type="text" class="form-control" placeholder="Masukan Nomor"/>
										</div> 
										<label class="col-sm-1">Tgl.</label>
										<div class="col-sm-4">
											<input name="tgl_imb[]" value="<?=$dataimb->tanggal_imb?>" type="text" id="date_imb" class="form-control" placeholder="Masukan Tanggal"/>
										</div> 
									</div>
								<?php endforeach ?>
								<div class="form-group margin-input">
									<label class="col-sm-2">KMB/SLF Terakhir :</label>
									<label class="col-sm-1">No.</label>
									<div class="col-sm-4">
										<input  name="no_kmb" value="<?=($kmb[0]==NULL)?NULL:$kmb[0]?>" maxlength="100" type="text" class="form-control" placeholder="Masukan Nomor"/>
									</div> 
									<label class="col-sm-1">Tgl.</label>
									<div class="col-sm-4">
										<input name="tgl_kmb" type="text" value="<?=($kmb[1]==NULL)?NULL:$kmb[1]?>" id="date_kmb" class="form-control" placeholder="Masukan Tanggal"/>
									</div> 
								</div>

							<?php endforeach ?>
						</div>
						<br>
						<button class="btn btn-primary nextBtn btn-lg pull-right"  type="button">Next</button>
					</div>
				</div>
			</div>
			<div class="row setup-content" id="step-5">
				<div class="col-xs-12">
					<div class="col-md-12">
						<h3> DATA TEKNIS BANGUNAN GEDUNG</h3>
						<div class="row">
							<?php foreach ($teknis as $datateknis): ?>
								<?php $podium = explode(',', $datateknis->ketinggian)?>
								<div class="form-group margin-input">
									<label class="col-sm-2">Jumlah Tower<sup>1</sup> :</label>
									<div class="col-sm-4">
										<input  name="tower" maxlength="100" value="<?=$datateknis->jumlah_tower?>" type="number" class="form-control" placeholder="Masukan Jumlah Tower"/>
									</div> 
									<label class="col-sm-2">Jumlah Unit<sup>2</sup></sub>.</label>
									<div class="col-sm-4">
										<input name="unit" type="number" value="<?=$datateknis->jumlah_unit?>" class="form-control" placeholder="Masukan Jumlah Unit"/>
									</div> 
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2">Ketinggian Bangunan :</label>
									<label class="col-sm-2">a. Tower</label>
									<div class="col-sm-8">
										<div class="input-group">
											<input name="tinggi_tower" type="text" value="<?=($podium[0]==NULL)?NULL:$podium[0]?>" class="form-control" placeholder="Masukan Tinggi Lantai">
											<span class="input-group-addon" id="basic-addon2">Lantai</span>
										</div>
									</div>
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2"></label>
									<label class="col-sm-2">b. Podium</label>
									<div class="col-sm-8">
										<div class="input-group">
											<input name="tinggi_podium" value="<?=($podium[1]==NULL)?NULL:$podium[1]?>" type="text" class="form-control" placeholder="Masukan Tinggi Lantai">
											<span class="input-group-addon" id="basic-addon2">Lantai</span>
										</div>
									</div>
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2">Jenis Bangunan <span style="color: red;">*</span>:</label>
									<div class="col-sm-10">

										<?php foreach ($jenis as $jenisbang): ?>
											<div class="row">
												<div class="funkyradio">
													<div class="col-md-12">
														<div class="row">
															<div class="col-md-6">
																<div class="funkyradio-primary">
																	<input type="checkbox" name="perkantoran" <?=($jenisbang->perkantoran!=NULL)?'checked':''?> value="perkantoran" id="jenisbang"/>
																	<label for="jenisbang">Perkantoran</label>
																</div>
															</div>
															<div class="col-md-6">
																<div class="funkyradio-primary">
																	<input type="checkbox" name="kesehatan" <?=($jenisbang->sarana_kesehatan!=NULL)?'checked':''?> value="kesehatan" id="kesehatan"/>
																	<label for="kesehatan">Sarana Kesehatan</label>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-12">
														<div class="row">
															<div class="col-md-6">
																<div class="funkyradio-primary">
																	<input type="checkbox" name="apartemen" <?=($jenisbang->apartemen!=NULL)?'checked':''?> value="apartemen" id="apartemen"/>
																	<label for="apartemen">Apartemen</label>
																</div>
															</div>
															<div class="col-md-6">
																<div class="funkyradio-primary">
																	<input type="checkbox" name="perdagangan" <?=($jenisbang->sarana_perdagangan!=NULL)?'checked':''?>  value="perdagangan" id="perdagangan"/>
																	<label for="perdagangan">Sarana Perdagangan</label>
																</div>
															</div>	
														</div>
													</div>
													<div class="col-md-12">
														<div class="row">
															<div class="col-md-6">
																<div class="funkyradio-primary">
																	<input type="checkbox" name="hunian" <?=($jenisbang->hunian!=NULL)?'checked':''?>  value="hunian" id="hunian"/>
																	<label for="hunian">Hunian</label>
																</div>
															</div>
															<div class="col-md-6">
																<div class="funkyradio-primary">
																	<input type="checkbox" <?=($jenisbang->lainnya!=NULL)?'checked':''?> id="lainnya_jenisbangunan1"/>
																	<label for="lainnya_jenisbangunan1"><input name="lainnya"  style="padding-left: 45px;" disabled id="txtjenisbang" type="text" class="form-control" name="lainnya_jenisbangunan"></label>
																</div>
															</div>	
														</div>
													</div>
													<div class="col-md-12">
														<div class="row">
															<div class="col-md-6">
																<div class="funkyradio-primary">
																	<input type="checkbox" name="hotel" <?=($jenisbang->hotel!=NULL)?'checked':''?> lainnyavalue="hotel" id="hotel"/>
																	<label for="hotel">Hotel</label>
																</div>
															</div>
															<div class="col-md-6">
																<div class="funkyradio-primary">
																	<input type="checkbox" <?=($jenisbang->lainnya2!=NULL)?'checked':''?>  id="lainnya_jenisbangunan2"/>
																	<label for="lainnya_jenisbangunan2"><input name="lainnya2" style="padding-left: 45px;" disabled id="txtjenisbang2" type="text" class="form-control" name="lainnya_jenisbangunan2"></label>
																</div>
															</div>	
														</div>
													</div>
												</div>
											</div>
										<?php endforeach ?>
									</div> 
								</div>
								<div class="form-group margin-input">
									<?php $lantai = explode(',', $datateknis->luas_lantai)?>
									<?php $operasi = explode(',', $datateknis->operasional_gedung)?>
									<?php $hari = explode(',', $datateknis->peng_bangunan)?>
									<label class="col-sm-2">Luas Lantai :</label>
									<label class="col-sm-2" style="margin-top: 14px;margin-bottom: 0;">a. Luas Lantai Dasar / Lantai Terluas</label>
									<div class="col-sm-8">
										<div class="input-group">
											<input name="luas_lantai" value="<?=$datateknis->luas_lantai?>" type="text" class="form-control" placeholder="Masukan Tinggi Lantai">
											<span class="input-group-addon" id="basic-addon2">M<sup>2</sup></span>
										</div>
									</div>
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2"></label>
									<label class="col-sm-2">b. Luas Lantai Total</label>
									<div class="col-sm-8">
										<div class="input-group">
											<input name="luas_total" value="<?=$datateknis->luas_total?>" type="text" class="form-control" placeholder="Masukan Tinggi Lantai">
											<span class="input-group-addon" id="basic-addon2">M<sup>2</sup></span>
										</div>
									</div>
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2">Tingkat Okupansi :</label>
									<div class="col-sm-10">
										<div class="input-group">
											<input name="tk_okupansi" value="<?=$datateknis->tingkat_okupansi?>" type="text" class="form-control" placeholder="Masukan Tingkat Okupansi">
											<span class="input-group-addon" id="basic-addon2">% (perkiraan)</span>
										</div>
									</div> 
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2">Ket :</label>
									<div class="col-sm-10">
										<div class="row">
											<div class="funkyradio">
												<div class="col-md-5">
													<div class="funkyradio-primary">
														<input type="radio" <?=($datateknis->ket_okupansi=='Apabila berbentuk gedung')?'checked':''?> name="ket" value="Apabila berbentuk gedung" id="radio1"/>
														<label for="radio1">Apabila berbentuk gedung</label>
													</div>
												</div>
												<div class="col-md-5">
													<div class="funkyradio-primary">
														<input type="radio" name="ket" <?=($datateknis->ket_okupansi=='Apabila berupa hunian / real estate')?'checked':''?> id="radio2"/>
														<label for="radio2">Apabila berupa hunian / real estate</label>
													</div>
												</div>
											</div>
										</div>
									</div> 
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2" style="margin-top: 14px;margin-bottom: 0;">Waktu Operasional bangunan gedung :</label>
									<label class="col-sm-4" style="margin-top: 14px;margin-bottom: 0;">a. Rata-rata jumlah jam operasional perminggu :</label>
									<div class="col-sm-6">
										<div class="input-group">
											<input name="op1" value="<?=($operasi[0]==NULL)?NULL:$operasi[0]?>" type="text" class="form-control" placeholder="Masukan Tinggi Lantai">
											<span class="input-group-addon" id="basic-addon2">jam/minggu</span>
										</div>
									</div>
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2"></label>
									<label class="col-sm-4" style="margin-top: 14px;margin-bottom: 0;">b. Rata-rata jumlah hari dan minggu operasional per tahun :</label>
									<div class="col-sm-3">
										<div class="input-group">
											<input name="op2" type="text" value="<?=($operasi[1]==NULL)?NULL:$operasi[1]?>" class="form-control" placeholder="Masukan Tinggi Lantai">
											<span class="input-group-addon" id="basic-addon2">hari</span>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="input-group">
											<input name="op3" type="text" value="<?=($operasi[2]==NULL)?NULL:$operasi[2]?>" class="form-control" placeholder="Masukan Tinggi Lantai">
											<span class="input-group-addon" id="basic-addon2">minggu</span>
										</div>
									</div>
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2"></label>
									<label class="col-sm-4" style="margin-top: 14px;margin-bottom: 0;">c. Jumlah jam operasional per tahun :</label>
									<div class="col-sm-6">
										<div class="input-group">
											<input name="op4" type="text" value="<?=($operasi[3]==NULL)?NULL:$operasi[3]?>" class="form-control" placeholder="Masukan Tinggi Lantai">
											<span class="input-group-addon" id="basic-addon2">jam/minggu</span>
										</div>
									</div>
								</div>
								<br>
								<div class="col-md-12">
									<table class="table table table-striped table-bordered" style="margin-top: 20px;">
										<tbody>
											<thead>
												<tr>
													<th><center>Hari/Minggu</center></th>
													<th><center>Jumlah rata-rata pengguna saat jam kerja (perkiraan),(orang)</center></th>
													<th><center>Jumlah puncak penggunaan (perkiraan),(orang)</center></th>
												</tr>
											</thead>
											<tr>
												<td style="text-align: center;">
													Senin
												</td>
												<td class="jum-rata">
													<input name="senin1" type="number" value="<?=($hari[0]==NULL)?NULL:$hari[0]?>" class="form-control jumlah" placeholder="">
												</td>
												<td class="jum-puncak">
													<input name="senin2" type="number" value="<?=($hari[1]==NULL)?NULL:$hari[1]?>" class="form-control jumlahpuncak" placeholder="">
												</td>
											</tr>
											<tr>
												<td style="text-align: center;">
													Selasa
												</td>
												<td class="jum-rata">
													<input name="selasa1" type="number" value="<?=($hari[2]==NULL)?NULL:$hari[2]?>" class="form-control jumlah" placeholder="">
												</td>
												<td class="jum-puncak">
													<input name="selasa2" type="number" value="<?=($hari[3]==NULL)?NULL:$hari[3]?>" class="form-control jumlahpuncak" placeholder="">
												</td>
											</tr>
											<tr>
												<td style="text-align: center;">
													Rabu
												</td>
												<td class="jum-rata">
													<input name="rabu1" type="number" value="<?=($hari[4]==NULL)?NULL:$hari[4]?>" class="form-control jumlah" placeholder="">
												</td>
												<td class="jum-puncak">
													<input name="rabu2" type="number" value="<?=($hari[5]==NULL)?NULL:$hari[5]?>" class="form-control jumlahpuncak" placeholder="">
												</td>
											</tr>
											<tr>
												<td style="text-align: center;">
													Kamis
												</td>
												<td class="jum-rata">
													<input name="kamis1" type="number" value="<?=($hari[6]==NULL)?NULL:$hari[6]?>" class="form-control jumlah" placeholder="">
												</td>
												<td class="jum-puncak">
													<input name="kamis2" type="number" value="<?=($hari[7]==NULL)?NULL:$hari[7]?>" class="form-control jumlahpuncak" placeholder="">
												</td>
											</tr>
											<tr>
												<td style="text-align: center;">
													Jumat
												</td>
												<td class="jum-rata">
													<input name="jumat1" type="number" value="<?=($hari[8]==NULL)?NULL:$hari[8]?>" class="form-control jumlah" placeholder="">
												</td>
												<td class="jum-puncak">
													<input name="jumat2" type="number" value="<?=($hari[9]==NULL)?NULL:$hari[9]?>" class="form-control jumlahpuncak" placeholder="">
												</td>
											</tr>
											<tr>
												<td style="text-align: center;">
													Sabtu
												</td>
												<td class="jum-rata">
													<input name="sabtu1" type="number" value="<?=($hari[10]==NULL)?NULL:$hari[10]?>" class="form-control jumlah" placeholder="">
												</td>
												<td class="jum-puncak">
													<input name="sabtu2" type="number" value="<?=($hari[11]==NULL)?NULL:$hari[11]?>" class="form-control jumlahpuncak" placeholder="">
												</td>
											</tr>
											<tr>
												<td style="text-align: center;">
													Minggu
												</td>
												<td class="jum-rata">
													<input name="minggu1" type="number" value="<?=($hari[12]==NULL)?NULL:$hari[12]?>" class="form-control jumlah" placeholder="">
												</td>
												<td class="jum-puncak">
													<input name="minggu2" type="number" value="<?=($hari[13]==NULL)?NULL:$hari[13]?>" class="form-control jumlahpuncak" placeholder="">
												</td>
											</tr>
											<tr>
												<td style="text-align: center;">
													Total Per Minggu
												</td>
												<td>
													<input readonly type="number" value="<?=($hari[14]==NULL)?NULL:$hari[14]?>" class="form-control result" name="totalminggu" placeholder="">
												</td>
												<td>
													<input readonly type="number"  value="<?=($hari[15]==NULL)?NULL:$hari[15]?>" class="form-control resultpuncak" name="totalminggu2" placeholder="">
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2">Total Penghuni :</label>
									<div class="col-sm-10">
										<div class="input-group">
											<input type="number" name="total_peng" value="<?=$datateknis->total_penghuni?>" class="form-control" placeholder="Masukan Total Penghuni">
											<span class="input-group-addon" id="basic-addon2">Orang (perkiraan)</span>
										</div>
									</div> 
								</div>

							<?php endforeach ?>
						</div>
						<br>
						<button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
					</div>
				</div>
			</div>
			<div class="row setup-content" id="step-6">
				<div class="col-xs-12">
					<div class="col-md-12">
						<h3>DATA KONSUMSI AIR DAN PENGOLAHAN AIR</h3>
						<br>
						<div style="width: 100%; height: 13px; border-bottom: 2px solid #999; text-align: center;margin-bottom: 18px;">
							<span style="font-size:18px;background-color:#fff;padding: 0 15px;">
								KONSUMSI AIR
							</span>
						</div>
						<div class="row">
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
								<div class="form-group margin-input">
									<label class="col-sm-2">Sumber air yang digunakan <span style="color: red;">*</span>:</label>
									<div class="col-sm-10">
										<div class="row">
											<?php foreach ($sumber as $datasumber): ?>
												<div class="funkyradio">
													<div class="col-md-12">
														<div class="row">
															<div class="col-md-6">
																<div class="funkyradio-primary">
																	<input type="checkbox" name="pdam" <?=($datasumber->pdam==NULL)?'':'checked'?> value="pdam" id="pdam"/>
																	<label for="pdam">PDAM</label>
																</div>
															</div>
															<div class="col-md-6">
																<div class="funkyradio-primary">
																	<input type="checkbox" name="sendiri" <?=($datasumber->air_sendiri==NULL)?'':'checked'?> value="pengelola_sendiri" id="pengelola_sendiri"/>
																	<label for="pengelola_sendiri">Pengolahan air sendiri</label>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-12">
														<div class="row">
															<div class="col-md-6">
																<div class="funkyradio-primary">
																	<input type="checkbox" name="dalam" <?=($datasumber->bor==NULL)?'':'checked'?> value="sumur dalam" id="sumur"/>
																	<label for="sumur">Sumur Bor/ Sumur Dalam</label>
																</div>
															</div>
															<div class="col-md-6">
																<div class="funkyradio-primary">
																	<input type="checkbox" <?=($datasumber->lainnya==NULL)?'':'checked'?> id="lainnya_sumberair"/>
																	<label for="lainnya_sumberair"><input  name="sumberlainnya"  value="<?=($datasumber->lainnya==NULL)?'':$datasumber->lainnya?>" style="padding-left: 45px;border-color: #ccc;box-shadow: none;" readonly id="txtsumberair" type="text" class="form-control"></label>
																</div>
															</div>	
														</div>
													</div>
													<div class="col-md-12">
														<div class="row">
															<div class="col-md-6">
																<div class="funkyradio-primary">
																	<input type="checkbox"  name="pantek" <?=($datasumber->pantek==NULL)?'':'checked'?> value="Sumur Pantek" id="sumur_pantek" />
																	<label for="sumur_pantek">Sumur Pantek</label>
																</div>
															</div>
														</div>
													</div>
												</div>
											<?php endforeach ?>
										</div>
									</div> 
								</div>
								<?php foreach ($sumur as $datasumur): ?>
									<?php if ($datasumur->jenis=='sumur bor'): ?>
										<?php if ($datasumur->unit!=NULL): ?>
											<div class="form-group margin-input">
												<label class="col-sm-2">Jumlah Sumur Bor :</label>
												<div class="col-sm-10">
													<div class="input-group">
														<input name="jumlah_sumur" type="number" value="<?=$datasumur->unit?>" min="0" max="6" class="form-control" placeholder="Masukan Jumlah Titik">
														<input type="hidden" value="<?=$datasumur->id_sumur?>" name="id_bor">
														<span class="input-group-addon" id="basic-addon2">Titik</span>
													</div>
												</div>
											<?php endif ?>
											<div class="form-group margin-input">
												<label class="col-sm-2"></label>
												<label class="col-sm-2">SIPA:</label>
												<div class="col-sm-3">
													<input  name="no_sipa[]" value="<?=$datasumur->sipa?>" maxlength="100" type="text" class="form-control" placeholder="Masukan Nomor"/>
												</div>
												<label class="col-sm-1">Tanggal</label>
												<div class="col-sm-4">
													<input name="tgl_sipa[]" value="<?=$datasumur->tanggal?>" type="text" id="date_bor" class="form-control" placeholder="Masukan Tanggal"/>
												</div>
											</div>
										</div>
									<?php endif ?>
									<?php if ($datasumur->jenis=='sumur pantek'): ?>

										<?php if ($datasumur->unit!=NULL): ?>
											<div class="form-group margin-input">
												<label class="col-sm-2" style="margin-top: 14px;margin-bottom: 0;">Jumlah Sumur Pantek (Jet Pump) :</label>
												<div class="col-sm-10">
													<div class="input-group">
														<input name="jumlah_pantek" type="number" value="<?=$datasumur->unit?>" min="0" max="6" class="form-control" placeholder="Masukan Jumlah Titik">
														<input type="hidden" value="<?=$datasumur->id_sumur?>" name="id_pantek">
														<span class="input-group-addon" id="basic-addon2">Titik</span>
													</div>
												</div>
											<?php endif ?>
											<div class="form-group margin-input">
												<label class="col-sm-2"></label>
												<label class="col-sm-2">SIPA 1 NO:</label>
												<div class="col-sm-3">
													<input name="no_sipa_pantek[]" value="<?=$datasumur->sipa?>" type="text"  class="form-control" placeholder="Masukan Nomor"/>
												</div>
												<label class="col-sm-1">Tanggal</label>
												<div class="col-sm-4">
													<input name="tgl_sipa_pantek[]" value="<?=$datasumur->tanggal?>" type="text" id="date_jet"  class="form-control" placeholder="Masukan Tanggal"/>
												</div>
											</div>
										</div>
									<?php endif ?>
									<?php if ($datasumur->jenis=='GROUND'): ?>

										<?php if ($datasumur->unit!=NULL): ?>
											<div class="form-group margin-input">
												<label class="col-sm-2">Jumlah Ground Tank :</label>
												<div class="col-sm-10">
													<div class="input-group">
														<input name="jumlah_ground" value="<?=$datasumur->unit?>" type="number" min="0" max="6" class="form-control" placeholder="Masukan Jumlah Unit">
														<input type="hidden" value="<?=$datasumur->id_sumur?>" name="id_ground">
														<span class="input-group-addon" id="basic-addon2">Unit</span>
													</div>
												</div>
											<?php endif ?>
											<div class="form-group margin-input" >
												<label class="col-sm-2"></label>
												<label class="col-sm-3">Kapasitas Ground Tank</label>
												<div class="col-sm-7">
													<input name="kaps_ground[]" value="<?=$datasumur->kapasitas?>" type="text"  class="form-control" placeholder="Masukan Nomor"/>
												</div>
											</div>
										</div>
									<?php endif ?>
									<?php if ($datasumur->jenis=='Roof Tank'): ?>
										<?php if ($datasumur->unit!=NULL): ?>

											<div class="form-group margin-input">
												<label class="col-sm-2">Jumlah Roof Tank:</label>
												<div class="col-sm-10">
													<div class="input-group">
														<input name="jumlah_roof" value="<?=$datasumur->unit?>" type="number" min="0" max="6" class="form-control" placeholder="Masukan Jumlah Unit">
														<input type="hidden" value="<?=$datasumur->id_sumur?>" name="id_roof">
														<span class="input-group-addon" id="basic-addon2">Unit</span>
													</div>
												</div>
											<?php endif ?>									
											<div class="form-group margin-input" >
												<label class="col-sm-2"></label>
												<label class="col-sm-3">Kapasitas Roof Tank</label>
												<div class="col-sm-7">
													<input name="kaps_roof[]" value="<?=$datasumur->kapasitas?>" type="text"  class="form-control" placeholder="Masukan Nomor"/>
												</div>
											</div>
										</div>
									<?php endif ?>
								<?php endforeach ?>
								<a href="#" class="btn btn-primary" id="btnshow" onclick="showsumur()">Tambah Data Sumur</a>
								<a href="#" class="btn btn-primary" id="btnhide" onclick="hidesumur()">Tutup Data Sumur</a>
								<div id="sumurinput">
									<div class="form-group margin-input">
										<div class="col-sm-12">
											<label class="col-sm-2">Jumlah Sumur Bor:</label>
											<div class="input-group">
												<input name="edit_sumur" type="number" min="0" max="6" id="jumlahsumur" class="form-control" placeholder="Masukan Jumlah Titik">
												<span class="input-group-addon" id="basic-addon2">Titik</span>
											</div>
										</div>
										<div class="form-group margin-input" id="sipa1">
											<label class="col-sm-2"></label>
											<label class="col-sm-2">SIPA 1 NO:</label>
											<div class="col-sm-3">
												<input  name="no_sipa_sumur[]" maxlength="100" type="text" class="form-control" placeholder="Masukan Nomor"/>
											</div>
											<label class="col-sm-1">Tanggal</label>
											<div class="col-sm-4">
												<input name="tgl_sipa_sumur[]" type="text" id="date_bor" class="form-control" placeholder="Masukan Tanggal"/>
											</div>
										</div>
										<div class="form-group margin-input" id="sipa2">
											<label class="col-sm-2"></label>
											<label class="col-sm-2">SIPA 2 NO:</label>
											<div class="col-sm-3">
												<input  name="no_sipa_sumur[]" maxlength="100" type="text" class="form-control" placeholder="Masukan Nomor"/>
											</div>
											<label class="col-sm-1">Tanggal</label>
											<div class="col-sm-4">
												<input name="tgl_sipa_sumur[]" type="text" id="date_bor2" class="form-control" placeholder="Masukan Tanggal"/>
											</div>
										</div>
										<div class="form-group margin-input" id="sipa3">
											<label class="col-sm-2"></label>
											<label class="col-sm-2">SIPA 3 NO:</label>
											<div class="col-sm-3">
												<input  name="no_sipa_sumur[]" maxlength="100" type="text" class="form-control" placeholder="Masukan Nomor"/>
											</div>
											<label class="col-sm-1">Tanggal</label>
											<div class="col-sm-4">
												<input name="tgl_sipa_sumur[]" type="text" id="date_bor3" class="form-control" placeholder="Masukan Tanggal"/>
											</div>
										</div>
										<div class="form-group margin-input" id="sipa4">
											<label class="col-sm-2"></label>
											<label class="col-sm-2">SIPA 4 NO:</label>
											<div class="col-sm-3">
												<input  name="no_sipa_sumur[]" maxlength="100" type="text" class="form-control" placeholder="Masukan Nomor"/>
											</div>
											<label class="col-sm-1">Tanggal</label>
											<div class="col-sm-4">
												<input name="tgl_sipa_sumur[]" type="text" id="date_bor4" class="form-control" placeholder="Masukan Tanggal"/>
											</div>
										</div>
										<div class="form-group margin-input" id="sipa5">
											<label class="col-sm-2"></label>
											<label class="col-sm-2">SIPA 5 NO:</label>
											<div class="col-sm-3">
												<input  name="no_sipa_sumur[]" maxlength="100" type="text" class="form-control" placeholder="Masukan Nomor"/>
											</div>
											<label class="col-sm-1">Tanggal</label>
											<div class="col-sm-4">
												<input name="tgl_sipa_sumur[]" type="text" id="date_bor4" class="form-control" placeholder="Masukan Tanggal"/>
											</div>
										</div>
										<div class="form-group margin-input" id="sipa6">
											<label class="col-sm-2"></label>
											<label class="col-sm-2">SIPA 6 NO:</label>
											<div class="col-sm-3">
												<input  name="no_sipa_sumur[]" maxlength="100" type="text" class="form-control" placeholder="Masukan Nomor"/>
											</div>
											<label class="col-sm-1">Tanggal</label>
											<div class="col-sm-4">
												<input name="tgl_sipa_sumur[]" type="text" id="date_bor4" class="form-control" placeholder="Masukan Tanggal"/>
											</div>
										</div>
									</div>
									<div class="form-group margin-input">
										<div class="col-sm-12">
											<label class="col-sm-2" style="margin-top: 14px;margin-bottom: 0;">Jumlah Sumur Pantek (Jet Pump) :</label>
											<div class="input-group">
												<input name="edit_pantek" type="number" min="0" max="6" id="jumlahsumurpantek" class="form-control" placeholder="Masukan Jumlah Titik">
												<span class="input-group-addon" id="basic-addon2">Titik</span>
											</div>
										</div>
									</div>
									<div class="form-group margin-input" id="sipapantek1">
										<label class="col-sm-2"></label>
										<label class="col-sm-2">SIPA 1 NO:</label>
										<div class="col-sm-3">
											<input name="no_pantek_sipa[]" type="text"  class="form-control" placeholder="Masukan Nomor"/>
										</div>
										<label class="col-sm-1">Tanggal</label>
										<div class="col-sm-4">
											<input name="tgl_pantek_sipa[]" type="text" id="date_jet"  class="form-control" placeholder="Masukan Tanggal"/>
										</div>
									</div>
									<div class="form-group margin-input" id="sipapantek2">
										<label class="col-sm-2"></label>
										<label class="col-sm-2">SIPA 2 NO:</label>
										<div class="col-sm-3">
											<input name="no_pantek_sipa[]" type="text"  class="form-control" placeholder="Masukan Nomor"/>
										</div>
										<label class="col-sm-1">Tanggal</label>
										<div class="col-sm-4">
											<input name="tgl_pantek_sipa[]" type="text" id="date_jet2"  class="form-control" placeholder="Masukan Tanggal"/>
										</div>
									</div>
									<div class="form-group margin-input" id="sipapantek3">
										<label class="col-sm-2"></label>
										<label class="col-sm-2">SIPA 3 NO:</label>
										<div class="col-sm-3">
											<input  name="no_pantek_sipa[]" type="text"  class="form-control" placeholder="Masukan Nomor"/>
										</div>
										<label class="col-sm-1">Tanggal</label>
										<div class="col-sm-4">
											<input name="tgl_pantek_sipa[]" type="text" id="date_jet3"  class="form-control" placeholder="Masukan Tanggal"/>
										</div>
									</div>
									<div class="form-group margin-input" id="sipapantek4">
										<label class="col-sm-2"></label>
										<label class="col-sm-2">SIPA 4 NO:</label>
										<div class="col-sm-3">
											<input name="no_pantek_sipa[]" type="text"  class="form-control" placeholder="Masukan Nomor"/>
										</div>
										<label class="col-sm-1">Tanggal</label>
										<div class="col-sm-4">
											<input name="tgl_pantek_sipa[]" type="text" id="date_jet4"  class="form-control" placeholder="Masukan Tanggal"/>
										</div>
									</div>
									<div class="form-group margin-input" id="sipapantek5">
										<label class="col-sm-2"></label>
										<label class="col-sm-2">SIPA 5 NO:</label>
										<div class="col-sm-3">
											<input name="no_pantek_sipa[]" type="text"  class="form-control" placeholder="Masukan Nomor"/>
										</div>
										<label class="col-sm-1">Tanggal</label>
										<div class="col-sm-4">
											<input name="tgl_pantek_sipa[]" type="text" id="date_jet4"  class="form-control" placeholder="Masukan Tanggal"/>
										</div>
									</div>
									<div class="form-group margin-input" id="sipapantek6">
										<label class="col-sm-2"></label>
										<label class="col-sm-2">SIPA 6 NO:</label>
										<div class="col-sm-3">
											<input name="no_pantek_sipa[]" type="text"  class="form-control" placeholder="Masukan Nomor"/>
										</div>
										<label class="col-sm-1">Tanggal</label>
										<div class="col-sm-4">
											<input name="tgl_pantek_sipa[]" type="text" id="date_jet4"  class="form-control" placeholder="Masukan Tanggal"/>
										</div>
									</div>
									<div class="form-group margin-input">
										<label class="col-sm-2">Jumlah Ground Tank :</label>
										<div class="col-sm-10">
											<div class="input-group">
												<input name="edit_ground" type="number" min="0" max="6" id="jumlahground"  class="form-control" placeholder="Masukan Jumlah Unit">
												<span class="input-group-addon" id="basic-addon2">Unit</span>
											</div>
										</div>
									</div>
									<div class="form-group margin-input" id="ground1">
										<label class="col-sm-2"></label>
										<label class="col-sm-3">Kapasitas Ground Tank 1 NO:</label>
										<div class="col-sm-7">
											<input name="kaps_ground_edit[]" type="number"  class="form-control" placeholder="Masukan Nomor"/>
										</div>
									</div>
									<div class="form-group margin-input" id="ground2">
										<label class="col-sm-2"></label>
										<label class="col-sm-3">Kapasitas Ground Tank 2 NO:</label>
										<div class="col-sm-7">
											<input name="kaps_ground_edit[]" type="number"  class="form-control" placeholder="Masukan Nomor"/>
										</div>
									</div>
									<div class="form-group margin-input" id="ground3">
										<label class="col-sm-2"></label>
										<label class="col-sm-3">Kapasitas Ground Tank 3 NO:</label>
										<div class="col-sm-7">
											<input  name="kaps_ground_edit[]" type="number"  class="form-control" placeholder="Masukan Nomor"/>
										</div>
									</div>
									<div class="form-group margin-input" id="ground4">
										<label class="col-sm-2"></label>
										<label class="col-sm-3">Kapasitas Ground Tank 4 NO:</label>
										<div class="col-sm-7">
											<input  name="kaps_ground_edit[]" type="number"  class="form-control" placeholder="Masukan Nomor"/>
										</div>
									</div>
									<div class="form-group margin-input" id="ground5">
										<label class="col-sm-2"></label>
										<label class="col-sm-3">Kapasitas Ground Tank 5 NO:</label>
										<div class="col-sm-7">
											<input  name="kaps_ground_edit[]" type="number"  class="form-control" placeholder="Masukan Nomor"/>
										</div>
									</div>
									<div class="form-group margin-input" id="ground6">
										<label class="col-sm-2"></label>
										<label class="col-sm-3">Kapasitas Ground Tank 6 NO:</label>
										<div class="col-sm-7">
											<input  name="kaps_ground_edit[]" type="number"  class="form-control" placeholder="Masukan Nomor"/>
										</div>
									</div>

									<div class="form-group margin-input">
										<label class="col-sm-2">Jumlah Roof Tank:</label>
										<div class="col-sm-10">
											<div class="input-group">
												<input name="edit_roof" type="number" min="0" max="6" id="jumlahroof"  class="form-control" placeholder="Masukan Jumlah Unit">
												<span class="input-group-addon" id="basic-addon2">Unit</span>
											</div>
										</div>
									</div>
									<div class="form-group margin-input" id="roof1">
										<label class="col-sm-2"></label>
										<label class="col-sm-3">Kapasitas Roof Tank 1 NO:</label>
										<div class="col-sm-7">
											<input name="kaps_roof_edit[]" type="text"  class="form-control" placeholder="Masukan Nomor"/>
										</div>
									</div>
									<div class="form-group margin-input" id="roof2">
										<label class="col-sm-2"></label>
										<label class="col-sm-3">Kapasitas Roof Tank 2 NO:</label>
										<div class="col-sm-7">
											<input name="kaps_roof_edit[]" type="text"  class="form-control" placeholder="Masukan Nomor"/>
										</div>
									</div>
									<div class="form-group margin-input" id="roof3">
										<label class="col-sm-2"></label>
										<label class="col-sm-3">Kapasitas Roof Tank 3 NO:</label>
										<div class="col-sm-7">
											<input  name="kaps_roof_edit[]" type="text"  class="form-control" placeholder="Masukan Nomor"/>
										</div>
									</div>
									<div class="form-group margin-input" id="roof4">
										<label class="col-sm-2"></label>
										<label class="col-sm-3">Kapasitas Roof Tank 4 NO:</label>
										<div class="col-sm-7">
											<input name="kaps_roof_edit[]" type="text"  class="form-control" placeholder="Masukan Nomor"/>
										</div>
									</div>
									<div class="form-group margin-input" id="roof5">
										<label class="col-sm-2"></label>
										<label class="col-sm-3">Kapasitas Roof Tank 5 NO:</label>
										<div class="col-sm-7">
											<input name="kaps_roof_edit[]" type="text"  class="form-control" placeholder="Masukan Nomor"/>
										</div>
									</div>
									<div class="form-group margin-input" id="roof6">
										<label class="col-sm-2"></label>
										<label class="col-sm-3">Kapasitas Roof Tank 6 NO:</label>
										<div class="col-sm-7">
											<input  name="kaps_roof_edit[]" type="text"  class="form-control" placeholder="Masukan Nomor"/>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="table-responsive">
										<table class="table table table-striped table-bordered" style="margin-top: 20px;">
											<tbody>
												<thead>
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
												<?php foreach ($bulan as $databulan): ?>

													<?php $januari = explode(',', $databulan->januari) ?>
													<?php $febuari = explode(',', $databulan->febuari) ?>
													<?php $maret = explode(',', $databulan->maret) ?>
													<?php $april = explode(',', $databulan->april) ?>
													<?php $mei = explode(',', $databulan->mei) ?>
													<?php $juni = explode(',', $databulan->juni) ?>
													<?php $juli = explode(',', $databulan->juli) ?>
													<?php $agustus = explode(',', $databulan->agustus) ?>
													<?php $september = explode(',', $databulan->september) ?>
													<?php $oktober = explode(',', $databulan->oktober) ?>
													<?php $november = explode(',', $databulan->november) ?>
													<?php $desember = explode(',', $databulan->desember) ?>
													<?php $total = explode(',', $databulan->total) ?>
													<tr>
														<td style="text-align: center;">
															Januari
														</td>
														<td class="rowpdam">
															<input name="januaripdam" type="number" value="<?=($januari[0]==NULL)?NULL:$januari[0]?>" class="form-control pdam" placeholder="">
														</td>
														<td class="rowbor">
															<input name="januarisumurbor" type="number" value="<?=($januari[1]==NULL)?NULL:$januari[1]?>" class="form-control sumurbor" placeholder="">
														</td>
														<td class="rowrecycle">
															<input name="januarirecycle" type="number" value="<?=($januari[2]==NULL)?NULL:$januari[2]?>" class="form-control recycle" placeholder="">
														</td>
														<td class="rowlain">
															<input name="januarilain" type="number" value="<?=($januari[3]==NULL)?NULL:$januari[3]?>" class="form-control lainlain" placeholder="">
														</td>
													</tr>
													<tr>
														<td style="text-align: center;">
															Febuari
														</td>
														<td class="rowpdam">
															<input name="febuaripdam" type="number" value="<?=($febuari[0]==NULL)?NULL:$febuari[0]?>" class="form-control pdam" placeholder="">
														</td>
														<td class="rowbor">
															<input name="febuarisumurbor" type="number" value="<?=($febuari[1]==NULL)?NULL:$febuari[1]?>" class="form-control sumurbor" placeholder="">
														</td>
														<td class="rowrecycle">
															<input name="febuarirecycle" type="number" value="<?=($febuari[2]==NULL)?NULL:$febuari[2]?>" class="form-control recycle" placeholder="">
														</td>
														<td class="rowlain">
															<input name="febuarilain" type="number" value="<?=($febuari[3]==NULL)?NULL:$febuari[3]?>" class="form-control lainlain" placeholder="">
														</td>
													</tr>
													<tr>
														<td style="text-align: center;">
															Maret
														</td>
														<td class="rowpdam">
															<input name="maretpdam" type="number" value="<?=($maret[0]==NULL)?NULL:$maret[0]?>" class="form-control pdam" placeholder="">
														</td>
														<td class="rowbor">
															<input name="maretsumurbor" type="number" value="<?=($maret[1]==NULL)?NULL:$maret[1]?>" class="form-control sumurbor" placeholder="">
														</td>
														<td class="rowrecycle">
															<input name="maretrecycle" type="number" value="<?=($maret[2]==NULL)?NULL:$maret[2]?>" class="form-control recycle" placeholder="">
														</td>
														<td class="rowlain">
															<input name="maretlain" type="number" value="<?=($maret[3]==NULL)?NULL:$maret[3]?>" class="form-control lainlain" placeholder="">
														</td>
													</tr>
													<tr>
														<td style="text-align: center;">
															April
														</td>
														<td class="rowpdam">
															<input name="aprilpdam" type="number" value="<?=($april[0]==NULL)?NULL:$april[0]?>" class="form-control pdam" placeholder="">
														</td>
														<td class="rowbor">
															<input name="aprilsumurbor" type="number" value="<?=($april[1]==NULL)?NULL:$april[1]?>" class="form-control sumurbor" placeholder="">
														</td>
														<td class="rowrecycle">
															<input name="aprilrecycle" type="number" value="<?=($april[2]==NULL)?NULL:$april[2]?>" class="form-control recycle" placeholder="">
														</td>
														<td class="rowlain">
															<input name="aprillain" type="number" value="<?=($april[3]==NULL)?NULL:$april[3]?>" class="form-control lainlain" placeholder="">
														</td>
													</tr>
													<tr>
														<td style="text-align: center;">
															Mei
														</td>
														<td class="rowpdam">
															<input name="meipdam" type="number" value="<?=($mei[0]==NULL)?NULL:$mei[0]?>" class="form-control pdam" placeholder="">
														</td>
														<td class="rowbor">
															<input name="meisumurbor" type="number" value="<?=($mei[1]==NULL)?NULL:$mei[1]?>" class="form-control sumurbor" placeholder="">
														</td>
														<td class="rowrecycle">
															<input name="meirecycle" type="number" value="<?=($mei[2]==NULL)?NULL:$mei[2]?>" class="form-control recycle" placeholder="">
														</td>
														<td class="rowlain">
															<input name="meilain" type="number" value="<?=($mei[3]==NULL)?NULL:$mei[3]?>" class="form-control lainlain" placeholder="">
														</td>
													</tr>
													<tr>
														<td style="text-align: center;">
															Juni
														</td>
														<td class="rowpdam">
															<input name="junipdam" type="number" value="<?=($juni[0]==NULL)?NULL:$juni[0]?>" class="form-control pdam" placeholder="">
														</td>
														<td class="rowbor">
															<input name="junisumurbor" type="number" value="<?=($juni[1]==NULL)?NULL:$juni[1]?>" class="form-control sumurbor" placeholder="">
														</td>
														<td class="rowrecycle">
															<input name="junirecycle" type="number" value="<?=($juni[2]==NULL)?NULL:$juni[2]?>" class="form-control recycle" placeholder="">
														</td>
														<td class="rowlain">
															<input name="junilain" type="number" value="<?=($juni[3]==NULL)?NULL:$juni[3]?>" class="form-control lainlain" placeholder="">
														</td>
													</tr>
													<tr>
														<td style="text-align: center;">
															Juli
														</td>
														<td class="rowpdam">
															<input name="julipdam" type="number" value="<?=($juli[0]==NULL)?NULL:$juli[0]?>" class="form-control pdam" placeholder="">
														</td>
														<td class="rowbor">
															<input name="julisumurbor" type="number" value="<?=($juli[1]==NULL)?NULL:$juli[1]?>" class="form-control sumurbor" placeholder="">
														</td>
														<td class="rowrecycle">
															<input name="julirecycle" type="number" value="<?=($juli[2]==NULL)?NULL:$juli[2]?>" class="form-control recycle" placeholder="">
														</td>
														<td class="rowlain">
															<input name="julilain" type="number" value="<?=($juli[3]==NULL)?NULL:$juli[3]?>" class="form-control lainlain" placeholder="">
														</td>
													</tr>
													<tr>
														<td style="text-align: center;">
															Agustus
														</td>
														<td class="rowpdam">
															<input name="agustuspdam" type="number" value="<?=($agustus[0]==NULL)?NULL:$agustus[0]?>" class="form-control pdam" placeholder="">
														</td>
														<td class="rowbor">
															<input name="agustussumurbor" type="number" value="<?=($agustus[1]==NULL)?NULL:$agustus[1]?>" class="form-control sumurbor" placeholder="">
														</td>
														<td class="rowrecycle">
															<input name="agustusrecycle" type="number" value="<?=($agustus[2]==NULL)?NULL:$agustus[2]?>" class="form-control recycle" placeholder="">
														</td>
														<td class="rowlain">
															<input name="agustuslain" type="number" value="<?=($agustus[3]==NULL)?NULL:$agustus[3]?>" class="form-control lainlain" placeholder="">
														</td>
													</tr>
													<tr>
														<td style="text-align: center;">
															September
														</td>
														<td class="rowpdam">
															<input name="septemberpdam" type="number" value="<?=($september[0]==NULL)?NULL:$september[0]?>" class="form-control pdam" placeholder="">
														</td>
														<td class="rowbor">
															<input name="septembersumurbor" type="number" value="<?=($september[1]==NULL)?NULL:$september[1]?>" class="form-control sumurbor" placeholder="">
														</td>
														<td class="rowrecycle">
															<input name="septemberrecycle" type="number" value="<?=($september[2]==NULL)?NULL:$september[2]?>" class="form-control recycle" placeholder="">
														</td>
														<td class="rowlain">
															<input name="septemberlain" type="number" value="<?=($september[3]==NULL)?NULL:$september[3]?>" class="form-control lainlain" placeholder="">
														</td>
													</tr>
													<tr>
														<td style="text-align: center;">
															Oktober
														</td>
														<td class="rowpdam">
															<input name="oktoberpdam" type="number" value="<?=($oktober[0]==NULL)?NULL:$oktober[0]?>" class="form-control pdam" placeholder="">
														</td>
														<td class="rowbor">
															<input name="oktobersumurbor" type="number" value="<?=($oktober[1]==NULL)?NULL:$oktober[1]?>" class="form-control sumurbor" placeholder="">
														</td>
														<td class="rowrecycle">
															<input name="oktoberrecycle" type="number" value="<?=($oktober[2]==NULL)?NULL:$oktober[2]?>" class="form-control recycle" placeholder="">
														</td>
														<td class="rowlain">
															<input name="oktoberlain" type="number" value="<?=($oktober[3]==NULL)?NULL:$oktober[3]?>" class="form-control lainlain" placeholder="">
														</td>
													</tr>
													<tr>
														<td style="text-align: center;">
															November
														</td>
														<td class="rowpdam">
															<input name="novemberpdam" type="number" value="<?=($november[0]==NULL)?NULL:$november[0]?>" class="form-control pdam" placeholder="">
														</td>
														<td class="rowbor">
															<input name="novembersumurbor" type="number" value="<?=($november[1]==NULL)?NULL:$november[1]?>" class="form-control sumurbor" placeholder="">
														</td>
														<td class="rowrecycle">
															<input name="novemberrecycle" type="number" value="<?=($november[2]==NULL)?NULL:$november[2]?>" class="form-control recycle" placeholder="">
														</td>
														<td class="rowlain">
															<input name="novemberlain" type="number" value="<?=($november[3]==NULL)?NULL:$november[3]?>" class="form-control lainlain" placeholder="">
														</td>
													</tr>
													<tr>
														<td style="text-align: center;">
															Desember
														</td>
														<td class="rowpdam">
															<input name="desemberpdam" type="number" value="<?=($desember[0]==NULL)?NULL:$desember[0]?>" class="form-control pdam" placeholder="">
														</td>
														<td class="rowbor">
															<input name="desembersumurbor" type="number" value="<?=($desember[1]==NULL)?NULL:$desember[1]?>" class="form-control sumurbor" placeholder="">
														</td>
														<td class="rowrecycle">
															<input name="desemberrecycle" type="number" value="<?=($desember[2]==NULL)?NULL:$desember[2]?>" class="form-control recycle" placeholder="">
														</td>
														<td class="rowlain">
															<input name="desemberlain" type="number" value="<?=($desember[3]==NULL)?NULL:$desember[3]?>" class="form-control lainlain" placeholder="">
														</td>
													</tr>
													<tr>
														<td style="text-align: center;">
															Total Konsumsi (M<sup>3</sup>)
														</td>
														<td>
															<input readonly type="number" value="<?=($total[0]==NULL)?NULL:$total[0]?>" class="form-control resultpdam" name="totalkonsumsi[]" placeholder="">
														</td>
														<td>
															<input readonly type="number" value="<?=($total[1]==NULL)?NULL:$total[1]?>"  class="form-control resultbor" name="totalkonsumsi[]" placeholder="">
														</td>
														<td>
															<input readonly type="number" value="<?=($total[2]==NULL)?NULL:$total[2]?>" class="form-control resultrecycle" name="totalkonsumsi[]" placeholder="">
														</td>
														<td>
															<input readonly type="number" value="<?=($total[3]==NULL)?NULL:$total[3]?>"  class="form-control resultlain" name="totalkonsumsi[]" placeholder="">
														</td>
													</tr>
												<?php endforeach ?>
											</tbody>
										</table>
									</div>	
								</div>

								<div class="form-group margin-input">
									<label class="col-sm-2">Konsumsi Air Rata-rata</label>
									<label class="col-sm-2">a. Occupant Area :</label>
									<div class="col-sm-8">
										<div class="input-group">
											<input name="rata_kon[]" value="<?=($rata[0]==NULL)?NULL:$rata[0]?>" type="text"  class="form-control" placeholder="Masukan Occupant Area">
											<span class="input-group-addon" id="basic-addon2">M<sup>3</sup>/org/hari</span>
										</div>
									</div>
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2"></label>
									<label class="col-sm-2">b. Service Area :</label>
									<div class="col-sm-8">
										<div class="input-group">
											<input name="rata_kon[]" value="<?=($rata[1]==NULL)?NULL:$rata[1]?>" type="text"  class="form-control" placeholder="Masukan Service Area">
											<span class="input-group-addon" id="basic-addon2">M<sup>3</sup>/hari</span>
										</div>
									</div>
								</div>
							</div>
							<br>
							<div style="width: 100%; height: 13px; border-bottom: 2px solid #999; text-align: center;margin-bottom: 18px;">
								<span style="font-size:18px;background-color:#fff;padding: 0 15px;">
									PENGOLAHAN AIR<span style="color: red;"> *</span>
								</span>
							</div>
							<div class="row">
								<div class="form-group margin-input">
									<label class="col-sm-2">Air Bersih :</label>
									<div class="col-sm-10">
										<div class="row">
											<div class="funkyradio">
												<div class="col-md-5">
													<div class="funkyradio-primary">
														<input type="checkbox" <?=($air[0]=='Water Treatment Plant')?'checked':''?> name="air_bersih" value="Water Treatment Plant" id="water_treatment">
														<label for="water_treatment">Water Treatment Plant</label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2"></label>
									<label class="col-sm-3">Sistem yang digunakan :</label>
									<div class="col-sm-7">
										<input name="sistem_air" type="text" value="<?=$datakonsumsi->sistem_water;?>" class="form-control" placeholder="Masukan Sistem">
									</div>
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2"></label>
									<label class="col-sm-3">Kapasitas :</label>
									<div class="col-sm-7">
										<div class="input-group">
											<input type="text" name="kaps_bersih" value="<?=($kapasitas[0]!=NULL)?$kapasitas[0]:''?>" class="form-control" placeholder="Masukan Kapasitas">
											<span class="input-group-addon" id="basic-addon2">M<sup>3</sup>/hari</span>
										</div>
									</div>
								</div>

								<div class="form-group margin-input">
									<div class="col-sm-2"></div>
									<div class="col-sm-10">
										<div class="row">
											<div class="funkyradio">
												<div class="col-md-5">
													<div class="funkyradio-primary">
														<input type="checkbox" <?=($kapasitas[1]!=NULL)?'checked':''?> name="checkbox" id="lainnya_airbersih"/>
														<label for="lainnya_airbersih"><input name="air_bersih2" value="<?=($kapasitas[1]!=NULL)?$kapasitas[1]:''?>" style="padding-left: 45px;" disabled id="txtairbersih" type="text" class="form-control" name="lainnya_airbersih"></label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2"></label>
									<label class="col-sm-3">Kapasitas :</label>
									<div class="col-sm-7">
										<div class="input-group">
											<input name="kaps_bersih2" type="text" value="<?=($kapasitas[1]!=NULL)?'$kapasitas[1]':''?>" disabled id="txtkapasitasair"  class="form-control" placeholder="Masukan Kapasitas">
											<span class="input-group-addon" id="basic-addon2">M<sup>3</sup>/hari</span>
										</div>
									</div>
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2">Air Hujan :</label>
									<div class="col-sm-10">
										<div class="row">
											<div class="funkyradio">
												<div class="col-md-5">
													<div class="funkyradio-primary">
														<input type="checkbox" <?=($hujan[0]=='Sumur Resapan')?'checked':''?> name="air_hujan" value="Sumur Resapan" id="air_hujan">
														<label for="air_hujan">Sumur Resapan</label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2"></label>
									<label class="col-sm-1">Jumlah :</label>
									<div class="col-sm-4">
										<div class="input-group">
											<input name="jumlah_hujan" value="<?=($jml[0]==NULL)?'':$jml[0]?>" type="text" class="form-control" placeholder="Masukan Jumlah Titik">
											<span class="input-group-addon" id="basic-addon2">Titik</span>
										</div>
									</div>
									<label class="col-sm-2">Kapasitas Total :</label>
									<div class="col-sm-3">
										<div class="input-group">
											<input name="kaps_hujan" value="<?=($kaps[0]==NULL)?'':$kaps[0]?>" type="text" class="form-control" placeholder="Masukan Total Kapasitas">
											<span class="input-group-addon" id="basic-addon2">M<sup>3</sup></span>
										</div>
									</div>
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2"></label>
									<div class="col-sm-10">
										<div class="row">
											<div class="funkyradio">
												<div class="col-md-5">
													<div class="funkyradio-primary">
														<input type="checkbox" name="air_hujan2" <?=($hujan[1]=='Kolam Resapan')?'checked':''?> value="Kolam Resapan" id="kolam">
														<label for="kolam">Kolam Resapan</label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2"></label>
									<label class="col-sm-1">Jumlah :</label>
									<div class="col-sm-4">
										<div class="input-group">
											<input name="jumlah_hujan2" type="text" value="<?=($jml[1]==NULL)?'':$jml[1]?>" class="form-control" placeholder="Masukan Jumlah Titik">
											<span class="input-group-addon" id="basic-addon2">Titik</span>
										</div>
									</div>
									<label class="col-sm-2">Kapasitas Total :</label>
									<div class="col-sm-3">
										<div class="input-group">
											<input name="kaps_hujan2" value="<?=($kaps[1]==NULL)?'':$kaps[1]?>" type="text" class="form-control" placeholder="Masukan Kapasitas Total">
											<span class="input-group-addon" id="basic-addon2">M<sup>2</sup></span>
										</div>
									</div>
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2"></label>
									<div class="col-sm-10">
										<div class="row">
											<div class="funkyradio">
												<div class="col-md-5">
													<div class="funkyradio-primary">
														<input type="checkbox" <?=($hujan[2]==NULL)?'':'checked'?> name="air_hujan3" value="Water Trap" id="water_trap">
														<label for="water_trap">Water Trap</label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="form-group margin-input">
									<label class="col-sm-2">Air Bekas / Recycle :</label>
									<div class="col-sm-10">
										<div class="row">
											<div class="funkyradio">
												<div class="col-md-5">
													<div class="funkyradio-primary">
														<input type="checkbox" name="air_bekas" <?=($bekas[0]==NULL)?'':'checked'?> value="Water Treatment Plant" id="water_treatment_plant">
														<label for="water_treatment_plant">Water Treatment Plant</label>
													</div>
												</div>
											</div>
											<label class="col-sm-2" style="margin:0;">Kapasitas :</label>
											<div class="col-sm-5">
												<div class="input-group">
													<input name="kaps_bekas" value="<?=($kaps_bekas[0]==NULL)?'':$kaps_bekas[0]?>" type="text" class="form-control" placeholder="Masukan Kapasitas">
													<span class="input-group-addon" id="basic-addon2">M<sup>3</sup></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2"></label>
									<div class="col-sm-10">
										<div class="row">
											<div class="funkyradio">
												<div class="col-md-5">
													<div class="funkyradio-primary">
														<input type="checkbox" <?=($bekas[1]==NULL)?'':'checked'?> name="checkbox" id="lainnya_airbekas"/>
														<label for="lainnya_airbekas"><input name="air_bekas2" value="<?=$bekas[1]?>" style="padding-left: 45px;" disabled id="txtairbekas" type="text" class="form-control" name="lainnya_airbekas"></label>
													</div>
												</div>
											</div>
											<label class="col-sm-2" style="margin:0;">Kapasitas :</label>
											<div class="col-sm-5">
												<div class="input-group">
													<input name="kaps_bekas2" value="<?=($kaps_bekas[1]==NULL)?'':$kaps_bekas[1]?>" type="text" disabled id="txtkapasitasbekas" class="form-control" placeholder="Masukan Kapasitas">
													<span class="input-group-addon" id="basic-addon2">M<sup>3</sup></span>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="form-group margin-input">
									<label class="col-sm-2">Air Limbah :</label>
									<div class="col-sm-10">
										<div class="row">
											<div class="funkyradio">
												<div class="col-md-5">
													<div class="funkyradio-primary">
														<input type="checkbox" name="air_limbah" <?=($limbah[0]=='IPAL/Sewage Treatment Plant (STP)')?'checked':''?> value="IPAL/Sewage Treatment Plant (STP)" id="ipal">
														<label for="ipal">IPAL/Sewage Treatment Plant (STP)</label>
													</div>
												</div>
											</div>
											<label class="col-sm-2" style="margin:0;">Kapasitas :</label>
											<div class="col-sm-5">
												<div class="input-group">
													<input name="kaps_limbah" type="text" value="<?=($kaps_limbah[0]==NULL)?'':$kaps_limbah[0]?>" class="form-control" placeholder="Masukan Kapasitas">
													<span class="input-group-addon" id="basic-addon2">M<sup>3</sup></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2"></label>
									<div class="col-sm-10">
										<div class="row">
											<div class="funkyradio">
												<div class="col-md-5">
													<div class="funkyradio-primary">
														<input type="checkbox" name="air_limbah2"  <?=($limbah[1]=='PD PAL')?'checked':''?> value="PD PAL" id="pdpal">
														<label for="pdpal">PD PAL</label>
													</div>
												</div>
											</div>
											<label class="col-sm-2" style="margin:0;">Kapasitas :</label>
											<div class="col-sm-5">
												<div class="input-group">
													<input name="kaps_limbah2" type="text" value="<?=($kaps_limbah[1]==NULL)?'':$kaps_limbah[1]?>" class="form-control" placeholder="Masukan Kapasitas">
													<span class="input-group-addon" id="basic-addon2">M<sup>3</sup></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						<?php endforeach ?>
						<br>	
						<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
					</div>
				</div>
			</div>
		</div>
			<div class="row setup-content" id="step-7">
				<div class="col-xs-12">
					<div class="col-md-12">
						<h3> SKETSA LOKASI SUMUR RESAPAN, KOLAM RESAPAN, SUMUR BOR, SUMUR PANTEK DAN WATERTRAP PADA SITEPLAN</h3>
						<div class="row">
							<?php foreach ($sketsa as $datasketsa): ?>

								<div class="form-group margin-input">
									<div class="col-md-12" style="margin-top: 20px">
										<img src="<?= base_url('assets/images/'.$datasketsa->file_sketsa); ?>" width="50%">
									</div>
									<label class="col-sm-2" style="margin-top: 14px;margin-bottom: 0;">Ubah File Sketsa</label>
									<div class="col-sm-10">
										<div class="input-group">
											<input type="file" value="<?=$datasketsa->file_sketsa?>" class="form-control" name="foto_sketsa">
											<input type="hidden" value="<?=$datasketsa->file_sketsa?>" class="form-control" name="file_old">
										</div>
									</div>
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2">Nama Bangunan</label>
									<div class="col-sm-10">
										<input name="nama_bang_sketsa" value="<?=$datasketsa->nama_bangunan?>" type="text" value=""  class="form-control" placeholder="Masukan Nama Bangunan">
									</div>
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2">Lokasi Bangunan</label>
									<div class="col-sm-10">
										<input name="lokasi_sketsa" value="<?=$datasketsa->lokasi?>" type="text" class="form-control" placeholder="Masukan Lokasi Bangunan">
									</div>
								</div>

							<?php endforeach ?>
						</div>
						<br>	
						<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
					</div>
				</div>
			</div>

			<div class="row setup-content" id="step-8">
				<div class="col-xs-12">
					<div class="col-md-12">
						<h3> PERMASALAHAN / KENDALA</h3>
						<div class="row">
							<?php foreach ($permasalahan as $masalah):?>
								<div class="form-group margin-input">
									<label class="col-sm-2" style="margin-top: 14px;margin-bottom: 0;">Sumur Resapan / Kolam Resapan</label>
									<div class="col-sm-10">
										<textarea name="sumur_resap" style="height: 100px;" class="form-control" placeholder="Masukan Permasalahan Sumur Resapan"><?=$masalah->sumur_resapan?></textarea>
									</div>
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2" style="margin-top: 14px;margin-bottom: 0;">Sumur Dalam / Sumur Pantek</label>
									<div class="col-sm-10">
										<textarea name="sumur_dalam" style="height: 100px;" class="form-control" placeholder="Masukan Permasalahan Sumur Dalam"><?=$masalah->sumur_dalam?></textarea>
									</div>
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2" style="margin-top: 14px;margin-bottom: 0;">Pengolahan Air Limbah</label>
									<div class="col-sm-10">
										<textarea name="peng_air" style="height: 100px;" class="form-control" placeholder="Masukan Permasalahan Pengolahan Air Limbah"><?=$masalah->pengelolaan_limbah?></textarea>
									</div>
								</div>
								<div class="form-group margin-input">
									<label class="col-sm-2"></label>
									<div class="col-sm-10">
										<div class="row">
											<div class="funkyradio">
												<div class="col-md-8">
													<div class="funkyradio-primary">
														<input type="checkbox" name="checkbox" id="selesai"/>
														<label for="selesai">Dengan ini saya menyatakan bahwa data yang saya isi pada formulir ini adalah benar</label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php endforeach ?>
						</div>
						<br>	
						<button disabled id="btnselesai" class="btn btn-success btn-lg pull-right" type="submit">Ubah</button>
					</div>
				</div>
			</div>	
		</form>
	</div>