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
	width: 75%;
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
	width: 25%;
}

.wizard li:after {
	content: " ";
	position: absolute;
	left: 47%;
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
	left: 47%;
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
					</ul>
				</div>

				<form role="form">
					<div class="tab-content">
						<div class="tab-pane active" role="tabpanel" id="step1">
							<h3>INFORMASI UMUM BANGUNAN GEDUNG</h3>
							<div class="row" style="margin-bottom: 20px;">
								<div class="col-md-12" style="margin-top: 20px">
									<img src="<?php echo base_url('assets/img/2.jpg'); ?>" width="50%">
								</div>
								<div class="col-md-12" style="margin-top: 20px">
									<label>Nama Pemilik</label>
									<div class="lbl">lorem</div>
								</div> 
								<div class="col-md-12" style="margin-top: 20px">
									<label>Lokasi</label>
									<div class="lbl">lorem</div>
								</div>   
								<div class="col-md-12" style="margin-top: 20px">
									<div class="row">
										<div class="col-md-6">
											<label>RT</label>
											<div class="lbl">1</div>
										</div>
										<div class="col-md-6">
											<label>RW</label>
											<div class="lbl">4</div>
										</div>
									</div>
								</div>
								<div class="col-md-12" style="margin-top: 20px">
									<div class="row">
										<div class="col-md-6">
											<label>Kelurahan</label>
											<div class="lbl">curug</div>
										</div>
										<div class="col-md-6">
											<label>Kecamatan</label>
											<div class="lbl">cimanggis</div>
										</div>
									</div>
								</div>
								<div class="col-md-12" style="margin-top: 20px">
									<div class="row">
										<div class="col-md-6">
											<label>Kota</label>
											<div class="lbl">depok</div>
										</div>
										<div class="col-md-6">
											<label>Kode Pos</label>
											<div class="lbl">16453</div>
										</div>
									</div>
								</div> 
								<div class="col-md-12" style="margin-top: 20px">
									<label>Email</label>
									<div class="lbl">asdsa@gmail.com</div>
								</div>
								<div class="col-md-12" style="margin-top: 20px">
									<label>Nomor Obyek Pajak (NOP)</label>
									<div class="lbl">0192381310</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" role="tabpanel" id="step2">
							<h3>DATA ADMINISTRASI BANGUNAN GEDUNG</h3>
							<div class="row" style="margin-bottom: 20px;">
								<div class="col-md-12" style="margin-top: 20px">
									<label>Luas Tanah</label>
									<div class="lbl">12 M<sup>2</sup></div>
								</div> 
								<div class="col-md-12" style="margin-top: 20px">
									<label>IMB :</label>
									<div class="row">
										<div class="col-md-6">
											<label>No.</label>
											<div class="lbl">12345678</div>
										</div>
										<div class="col-md-6">
											<label>Tanggal.</label>
											<div class="lbl">13/12/12</div>
										</div>
									</div>
								</div>  
							</div>	
						</div>
						<div class="tab-pane" role="tabpanel" id="step3">
							<h3>DATA TEKNIS BANGUNAN GEDUNG</h3>
							<div class="row" style="margin-bottom: 20px;">
								<div class="col-md-12" style="margin-top: 20px">
									<label>Ketinggian Bangunan :</label>
									<div class="lbl">13 Lantai</div>
								</div>
								<div class="col-md-12" style="margin-top: 20px;">
									<label>Penggunaan Lain</label>
									<div class="row funkyradio">
										<div class="col-md-6">
											<div class="funkyradio-primary">
												<input checked type="checkbox" value="perkantoran" id="jenisbang" disabled="">
												<label for="jenisbang">Praktek Dokter</label>
											</div>
										</div>
										<div class="col-md-6">
											<div class="funkyradio-primary">
												<input checked type="checkbox" value="kesehatan" id="kesehatan" disabled="">
												<label for="kesehatan">Kantor</label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12" style="margin-top: 20px">
									<label>Luas Lantai :</label>
									<div class="row">
										<div class="col-md-6">
											<label>A. Luas Lantai Dasar</label>
											<div class="lbl">13 M<sup>2</sup></div>
										</div>
										<div class="col-md-6">
											<label>B. Luas Lantai Total</label>
											<div class="lbl">13 M<sup>2</sup></div>
										</div>
									</div>
								</div>
								<div class="col-md-12" style="margin-top: 20px">
									<label>Total Penghuni :</label>
									<div class="lbl">12 Orang</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" role="tabpanel" id="step4">
							<h3>DATA KONSUMSI AIR DAN PENGOLAHAN AIR</h3>
							<div class="row" style="margin-bottom: 20px;">
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
									<label>Konsumsi Air :</label>
									<div class="row funkyradio">
										<div class="col-md-6">
											<div class="funkyradio-primary">
												<input checked type="checkbox" id="rumtang" disabled="">
												<label for="rumtang">Rumah Tangga</label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12" style="margin-top: 20px">
									<div style="width: 100%; height: 13px; border-bottom: 2px solid #999; text-align: center;margin-bottom: 18px;">
										<span style="font-size:18px;background-color:#fff;padding: 0 15px;">
											PENGOLAHAN AIR HUJAN
										</span>
									</div>
								</div>
								<div class="col-md-12" style="margin-bottom: 20px">
									<label>Pengelola Air :</label>
									<div class="row funkyradio">
										<div class="col-md-6">
											<div class="funkyradio-primary">
												<input checked type="checkbox" id="sumur" disabled="">
												<label for="sumur">Sumur Resapan</label>
											</div>
										</div>
									</div>
									<div class="row" style="margin-bottom: 10px">
										<div class="col-md-6">
											<label>Jumlah :</label>
											<div class="lbl">2 Titik</div>
										</div>
										<div class="col-md-6">
											<label>Kapasitas Total:</label>
											<div class="lbl">123 M<sup>3</sup>/Hari</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="funkyradio-primary funkyradio">
												<input checked type="checkbox" id="biopori" disabled="">
												<label for="biopori">Biopori</label>
											</div>
										</div>
										<div class="col-md-6">
											<div class="lbl">12 Titik</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
						<button class="btn btn-warning btn-block" style="margin-bottom: 30px;">Ubah</button>
					</div>
				</form>
			</div>
		</section>
	</div>
</div>