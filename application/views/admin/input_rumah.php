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
					<a href="#step-2" type="button" class="btn btn-default btn-circle">2</a>
					<p>Step 2</p>
				</div>
				<div class="stepwizard-step">
					<a href="#step-3" type="button" class="btn btn-default btn-circle">3</a>
					<p>Step 3</p>
				</div>
				<div class="stepwizard-step">
					<a href="#step-4" type="button" class="btn btn-default btn-circle">4</a>
					<p>Step 4</p>
				</div>
				<div class="stepwizard-step">
					<a href="#step-5" type="button" class="btn btn-default btn-circle">5</a>
					<p>Step 5</p>
				</div>
			</div>
		</div>
		<form role="form" method="post" action="https://jakartasatu.jakarta.go.id/pengawasanair/main/proses_input"  enctype="multipart/form-data">
			<div class="row setup-content" id="step-1">
				<div class="col-xs-12">
					<div class="col-md-12">
						<h3> INFORMASI UMUM BANGUNAN GEDUNG</h3>
						<div class="row">
							<div class="form-group margin-input">
								<label class="col-sm-2">Nama Pemilik :</label>
								<div class="col-sm-10">
									<input  maxlength="100" name="nama_bangunan" type="text" required="required" class="form-control" placeholder="Masukan Nama Bangunan"  />
								</div>
							</div>
							<div class="form-group margin-input">
								<label class="col-sm-2">Lokasi :</label>
								<div class="col-sm-10">
									<textarea maxlength="100" name="lokasi" required="required" class="form-control" placeholder="Masukan Lokasi"  /></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10 margin-input-row">
									<div class="row">
										<label class="col-sm-1">RT :</label>
										<div class="col-sm-5">
											<input  maxlength="100" name="rt_info" type="text" required="required" class="form-control" placeholder="Masukan RT"  />
										</div>
										<label class="col-sm-1">RW :</label>
										<div class="col-sm-5">
											<input  maxlength="100" name="rw_info" type="text" required="required" class="form-control" placeholder="Masukan RW"  />
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10 margin-input">
									<div class="row">
										<label class="col-sm-2">Kelurahan :</label>
										<div class="col-sm-10">
											<input  maxlength="100" name="kelurahan_info" type="text" required="required" class="form-control" placeholder="Masukan Kelurahan"/>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10 margin-input">
									<div class="row">
										<label class="col-sm-2">Kecamatan :</label>
										<div class="col-sm-10">
											<input  maxlength="100" name="kecamatan_info" type="text" required="required" class="form-control" placeholder="Masukan Kecamatan"/>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10 margin-input">
									<div class="row">
										<label class="col-sm-2">Kota :</label>
										<div class="col-sm-10">
											<input  maxlength="100" name="kota_info" type="text" required="required" class="form-control" placeholder="Masukan Kota"/>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10 margin-input">
									<div class="row">
										<label class="col-sm-2">Kode Pos :</label>
										<div class="col-sm-10">
											<input maxlength="100" name="kode_info" type="text" required="required" class="form-control" placeholder="Masukan Kode Pos"/>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group margin-input">
								<label class="col-sm-2">Email :</label>
								<div class="col-sm-10">
									<input  maxlength="100" name="email" type="text" required="required" class="form-control" placeholder="Masukan Email"/>
								</div> 
							</div>
							<div class="form-group margin-input">
								<label class="col-sm-2">Nomor Obyek Pajak (NOP) :</label>
								<div class="col-sm-10">
									<input  maxlength="100" name="nop" type="text" required="required" class="form-control" placeholder="Masukan Nomor Obyek Pajak"/>
								</div> 
							</div>
						</div>
						<br>
						<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
					</div>
				</div>
			</div>
			<div class="row setup-content" id="step-2">
				<div class="col-xs-12">
					<div class="col-md-12">
						<h3> DATA ADMINISTRASI BANGUNAN GEDUNG</h3>
						<div class="row">
							<div class="form-group margin-input">
								<label class="col-sm-2">Luas Tanah :</label>
								<div class="col-sm-10">
									<div class="input-group">
										<input name="luas_tanah" type="text" required="required" class="form-control" placeholder="Masukan Luas Tanah">
										<span class="input-group-addon" id="basic-addon2">M<sup>2</sup></span>
									</div>
								</div> 
							</div>
							<div class="form-group margin-input">
								<label class="col-sm-2">IMB :</label>
								<label class="col-sm-1">No.</label>
								<div class="col-sm-4">
									<input name="no_imb" maxlength="100" type="text" required="required" class="form-control" placeholder="Masukan Nomor"/>
								</div> 
								<label class="col-sm-1">Tgl.</label>
								<div class="col-sm-4">
									<input name="tgl_imb" type="text" id="datepicker" required="required" class="form-control" placeholder="Masukan Tanggal"/>
								</div> 
							</div>
						</div>
						<br>
						<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
					</div>
				</div>
			</div>
			<div class="row setup-content" id="step-3">
				<div class="col-xs-12">
					<div class="col-md-12">
						<h3> DATA TEKNIS BANGUNAN GEDUNG</h3>
						<div class="row">
							<div class="form-group margin-input">
								<label class="col-sm-2">Ketinggian Bangunan :</label>
								<div class="col-sm-10">
									<div class="input-group">
										<input name="tinggi_tower" type="text" required="required" class="form-control" placeholder="Masukan Tinggi Lantai">
										<span class="input-group-addon" id="basic-addon2">Lantai</span>
									</div>
								</div>
							</div>
							<div class="form-group margin-input">
								<label class="col-sm-2">Penggunaan Lain<span style="color: red;">*</span> :</label>
								<div class="col-sm-10">
									<div class="row">
										<div class="funkyradio">
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-6">
														<div class="funkyradio-primary">
															<input type="checkbox"  name="penggunaan_bang[]" value="praktek" id="praktek"/>
															<label for="praktek">Praktek Dokter</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="funkyradio-primary">
															<input type="checkbox" name="penggunaan_bang[]" value="salon/spa" id="salon"/>
															<label for="salon">Salon/Spa</label>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-6">
														<div class="funkyradio-primary">
															<input type="checkbox" name="penggunaan_bang[]" value="kantor" id="kantor"/>
															<label for="kantor">Kantor</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="funkyradio-primary">
															<input type="checkbox" name="penggunaan_bang[]" value="klinik" id="klinik"/>
															<label for="klinik">Klinik</label>
														</div>
													</div>	
												</div>
											</div>
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-6">
														<div class="funkyradio-primary">
															<input type="checkbox" name="penggunaan_bang[]" hunian="toko" id="toko"/>
															<label for="toko">Toko</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="funkyradio-primary">
															<input type="checkbox" name="penggunaan_bang[]" value="restoran" id="restoran"/>
															<label for="restoran">Restoran</label>
														</div>
													</div>		
												</div>
											</div>
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-6">
														<div class="funkyradio-primary">
															<input type="checkbox" name="penggunaan_bang[]" value="apotek" id="apotek"/>
															<label for="apotek">Apotek</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="funkyradio-primary">
															<input type="checkbox"  id="lainnya_jenisbangunan2"/>
															<label for="lainnya_jenisbangunan2"><input name="penggunaan_bang[]" value="....." style="padding-left: 45px;" disabled id="txtjenisbang2" type="text" class="form-control" name="lainnya_penggunaanbangunan1"></label>
														</div>
													</div>	
												</div>
											</div>
										</div>
									</div>
								</div> 
							</div>
							<div class="form-group margin-input">
								<label class="col-sm-2">Luas Lantai :</label>
								<label class="col-sm-2" style="margin-top: 14px;margin-bottom: 0;">a. Luas Lantai Dasar</label>
								<div class="col-sm-8">
									<div class="input-group">
										<input name="luas_lantai" type="text" required="required" class="form-control" placeholder="Masukan Tinggi Lantai">
										<span class="input-group-addon" id="basic-addon2">M<sup>2</sup></span>
									</div>
								</div>
							</div>
							<div class="form-group margin-input">
								<label class="col-sm-2"></label>
								<label class="col-sm-2">b. Luas Lantai Total</label>
								<div class="col-sm-8">
									<div class="input-group">
										<input name="luas_total" type="text" required="required" class="form-control" placeholder="Masukan Tinggi Lantai">
										<span class="input-group-addon" id="basic-addon2">M<sup>2</sup></span>
									</div>
								</div>
							</div>
							<div class="form-group margin-input">
								<label class="col-sm-2">Total Penghuni :</label>
								<div class="col-sm-10">
									<div class="input-group">
										<input type="number" name="total_peng" required="required" class="form-control" placeholder="Masukan Total Penghuni">
										<span class="input-group-addon" id="basic-addon2">Orang (perkiraan)</span>
									</div>
								</div> 
							</div>
						</div>
						<br>
						<button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
					</div>
				</div>
			</div>
			<div class="row setup-content" id="step-4">
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
							<div class="form-group margin-input">
								<label class="col-sm-2">Sumber air yang digunakan<span style="color: red;">*</span> :</label>
								<div class="col-sm-10">
									<div class="row">
										<div class="funkyradio">
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-6">
														<div class="funkyradio-primary">
															<input type="checkbox" name="kons_air[]" value="pdam" id="pdam"/>
															<label for="pdam">PDAM</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="funkyradio-primary">
															<input type="checkbox"id="lainnya_sumberair"/>
															<label for="lainnya_sumberair"><input  name="kons_air[]"  value="Lain-lain, sebutkan ..." style="padding-left: 45px;border-color: #ccc;box-shadow: none;" disabled id="txtsumberair" type="text" class="form-control" name="lainnya_sumberair"></label>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-6">
														<div class="funkyradio-primary">
															<input type="checkbox"  name="kons_air[]" id="sumur_pantek" value="Sumur Pantek"/>
															<label for="sumur_pantek">Sumur Pantek</label>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div> 
							</div>

							<div class="form-group margin-input">
								<label class="col-sm-2" style="margin-top: 14px;margin-bottom: 0;">Jumlah Sumur Pantek (Jet Pump) :</label>
								<div class="col-sm-10">
									<div class="input-group">
										<input name="jumlah_pantek" type="number" min="0" max="6" id="jumlahsumurpantek" class="form-control" placeholder="Masukan Jumlah Titik">
										<span class="input-group-addon" id="basic-addon2">Titik</span>
									</div>
								</div>
							</div>
							<div class="form-group margin-input" id="sipapantek1">
								<label class="col-sm-2"></label>
								<label class="col-sm-2">SIPA 1 NO:</label>
								<div class="col-sm-3">
									<input name="no_sipa_pantek[]" type="text"  class="form-control" placeholder="Masukan Nomor"/>
								</div>
								<label class="col-sm-1">Tanggal</label>
								<div class="col-sm-4">
									<input name="tgl_sipa_pantek[]" type="text" id="date_jet"  class="form-control" placeholder="Masukan Tanggal"/>
								</div>
							</div>
							<div class="form-group margin-input" id="sipapantek2">
								<label class="col-sm-2"></label>
								<label class="col-sm-2">SIPA 2 NO:</label>
								<div class="col-sm-3">
									<input name="no_sipa_pantek[]" type="text"  class="form-control" placeholder="Masukan Nomor"/>
								</div>
								<label class="col-sm-1">Tanggal</label>
								<div class="col-sm-4">
									<input name="tgl_sipa_pantek[]" type="text" id="date_jet2"  class="form-control" placeholder="Masukan Tanggal"/>
								</div>
							</div>
							<div class="form-group margin-input" id="sipapantek3">
								<label class="col-sm-2"></label>
								<label class="col-sm-2">SIPA 3 NO:</label>
								<div class="col-sm-3">
									<input  name="no_sipa_pantek[]" type="text"  class="form-control" placeholder="Masukan Nomor"/>
								</div>
								<label class="col-sm-1">Tanggal</label>
								<div class="col-sm-4">
									<input name="tgl_sipa_pantek[]" type="text" id="date_jet3"  class="form-control" placeholder="Masukan Tanggal"/>
								</div>
							</div>
							<div class="form-group margin-input" id="sipapantek4">
								<label class="col-sm-2"></label>
								<label class="col-sm-2">SIPA 4 NO:</label>
								<div class="col-sm-3">
									<input name="no_sipa_pantek[]" type="text"  class="form-control" placeholder="Masukan Nomor"/>
								</div>
								<label class="col-sm-1">Tanggal</label>
								<div class="col-sm-4">
									<input name="tgl_sipa_pantek[]" type="text" id="date_jet4"  class="form-control" placeholder="Masukan Tanggal"/>
								</div>
							</div>
							<div class="form-group margin-input" id="sipapantek5">
								<label class="col-sm-2"></label>
								<label class="col-sm-2">SIPA 5 NO:</label>
								<div class="col-sm-3">
									<input name="no_sipa_pantek[]" type="text"  class="form-control" placeholder="Masukan Nomor"/>
								</div>
								<label class="col-sm-1">Tanggal</label>
								<div class="col-sm-4">
									<input name="tgl_sipa_pantek[]" type="text" id="date_jet4"  class="form-control" placeholder="Masukan Tanggal"/>
								</div>
							</div>
							<div class="form-group margin-input" id="sipapantek6">
								<label class="col-sm-2"></label>
								<label class="col-sm-2">SIPA 6 NO:</label>
								<div class="col-sm-3">
									<input name="no_sipa_pantek[]" type="text"  class="form-control" placeholder="Masukan Nomor"/>
								</div>
								<label class="col-sm-1">Tanggal</label>
								<div class="col-sm-4">
									<input name="tgl_sipa_pantek[]" type="text" id="date_jet4"  class="form-control" placeholder="Masukan Tanggal"/>
								</div>
							</div>

							<div class="form-group margin-input">
								<label class="col-sm-2">Konsumsi Air :</label>
								<div class="col-sm-10">
									<div class="row">
										<div class="funkyradio">
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-6">
														<div class="funkyradio-primary">
															<input type="checkbox" name="konsumsi_air[]" value="rumah tangga" id="rumahtang"/>
															<label for="rumahtang">Rumah Tangga</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="funkyradio-primary">
															<input type="checkbox" name="konsumsi_air[]" value="fasilitas / penggunaan bangunan selain hunian" id="fasilitas"/>
															<label for="fasilitas">Fasilitas / penggunaan bangunan selain hunian</label>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-6">
														<div class="funkyradio-primary">
															<input type="checkbox"  name="konsumsi_air[]" id="kolam" value="kolam renang"/>
															<label for="kolam">Kolam Renang</label>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div> 
							</div>
							
						</div>
						<br>
						<div style="width: 100%; height: 13px; border-bottom: 2px solid #999; text-align: center;margin-bottom: 18px;">
						  	<span style="font-size:18px;background-color:#fff;padding: 0 15px;">
						    	PENGOLAHAN AIR HUJAN<span style="color: red;"> *</span>
						  	</span>
						</div>
						<div class="row">
							<div class="form-group margin-input">
								<label class="col-sm-2">Pengelola Air :</label>
								<div class="col-sm-10">
									<div class="row">
										<div class="funkyradio">
											<div class="col-md-5">
												<div class="funkyradio-primary">
													<input type="checkbox" name="air_hujan" value="Sumur Resapan" id="air_hujan">
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
										<input name="jumlah_hujan" type="text" class="form-control" placeholder="Masukan Jumlah Titik">
										<span class="input-group-addon" id="basic-addon2">Titik</span>
									</div>
								</div>
								<label class="col-sm-2">Kapasitas Total :</label>
								<div class="col-sm-3">
									<div class="input-group">
										<input name="kaps_hujan" type="text" required="required" class="form-control" placeholder="Masukan Total Kapasitas">
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
													<input type="checkbox" name="air_hujan2" value="Kolam Resapan" id="kolam">
													<label for="kolam">Biopori</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group margin-input">
								<label class="col-sm-2"></label>
								<label class="col-sm-1">Jumlah :</label>
								<div class="col-sm-9">
									<div class="input-group">
										<input name="jumlah_hujan2" type="text" required="required" class="form-control" placeholder="Masukan Jumlah Titik">
										<span class="input-group-addon" id="basic-addon2">Titik</span>
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
													<input type="checkbox" name="air_hujan3" value="Water Trap" id="water_trap">
													<label for="water_trap">Water Trap</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<br>	
						<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
					</div>
				</div>
			</div>
			<div class="row setup-content" id="step-5">
				<div class="col-xs-12">
					<div class="col-md-12">
						<h3> SKETSA LOKASI SUMUR RESAPAN, SUMUR PANTEK DAN WATERTRAP PADA SITEPLAN</h3>
						<div class="row">
							<div class="form-group margin-input">
								<label class="col-sm-2" style="margin-top: 14px;margin-bottom: 0;">File Sketsa</label>
								<div class="col-sm-10">
									<div class="input-group">
										<input type="file"  class="form-control" name="foto_sketsa">
									</div>
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
						</div>
						<br>	
						<button disabled id="btnselesai" class="btn btn-success btn-lg pull-right" type="submit">Submit</button>
					</div>
				</div>
			</div>	
			</form>
		</div>