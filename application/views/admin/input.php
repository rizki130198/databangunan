<style type="text/css">
body{ 
	margin-top:40px; 
}

.stepwizard-step p {
	margin-top: 10px;
}

.stepwizard-row {
	display: table-row;
}

.stepwizard {
	display: table;
	width: 100%;
	position: relative;
}

.stepwizard-step button[disabled] {
	opacity: 1 !important;
	filter: alpha(opacity=100) !important;
}

.stepwizard-row:before {
	top: 14px;
	bottom: 0;
	position: absolute;
	content: " ";
	width: 100%;
	height: 1px;
	background-color: #ccc;
	z-order: 0;

}

.stepwizard-step {
	display: table-cell;
	text-align: center;
	position: relative;
}

.btn-circle {
	width: 30px;
	height: 30px;
	text-align: center;
	padding: 6px 0;
	font-size: 12px;
	line-height: 1.428571429;
	border-radius: 15px;
}
.margin-input .col-sm-1,.margin-input .col-sm-2,.margin-input .col-sm-3,.margin-input .col-sm-4,.margin-input .col-sm-6,.margin-input .col-sm-7,.margin-input .col-sm-10,.margin-input .col-sm-8,.margin-input .col-sm-9,.margin-input .col-sm-12{
	margin-top: 20px;
}
.margin-input-row .col-sm-1, .margin-input-row .col-sm-5{
	margin-top: 20px;
}
.ui-datepicker {
	z-index: 2 !important;
}
/*.ui-datepicker-calendar {
	display: none;
}
.ui-datepicker-month {
	display: none;
}
.ui-datepicker-prev{
	display: none;
}
.ui-datepicker-next{
	display: none;
	}*/

	.funkyradio div {
		/*clear: both;*/
		overflow: hidden;
	}

	.funkyradio label {
		width: 100%;
		border-radius: 3px;
		border: 1px solid #D1D3D4;
		font-weight: normal;
	}

	.funkyradio input[type="radio"]:empty,
	.funkyradio input[type="checkbox"]:empty {
		display: none;
	}

	.funkyradio input[type="radio"]:empty ~ label,
	.funkyradio input[type="checkbox"]:empty ~ label {
		position: relative;
		line-height: 2.5em;
		text-indent: 3.25em;
		cursor: pointer;
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
	}

	.funkyradio input[type="radio"]:empty ~ label:before,
	.funkyradio input[type="checkbox"]:empty ~ label:before {
		position: absolute;
		display: block;
		top: 0;
		bottom: 0;
		left: 0;
		content: '';
		width: 2.5em;
		background: #D1D3D4;
		border-radius: 3px 0 0 3px;
	}

	.funkyradio input[type="radio"]:hover:not(:checked) ~ label,
	.funkyradio input[type="checkbox"]:hover:not(:checked) ~ label {
		color: #888;
	}

	.funkyradio input[type="radio"]:hover:not(:checked) ~ label:before,
	.funkyradio input[type="checkbox"]:hover:not(:checked) ~ label:before {
		content: '\2714';
		text-indent: .9em;
		color: #C2C2C2;
	}

	.funkyradio input[type="radio"]:checked ~ label,
	.funkyradio input[type="checkbox"]:checked ~ label {
		color: #777;
	}

	.funkyradio input[type="radio"]:checked ~ label:before,
	.funkyradio input[type="checkbox"]:checked ~ label:before {
		content: '\2714';
		text-indent: .9em;
		color: #333;
		background-color: #ccc;
	}

	.funkyradio input[type="radio"]:focus ~ label:before,
	.funkyradio input[type="checkbox"]:focus ~ label:before {
		box-shadow: 0 0 0 3px #999;
	}

	.funkyradio-primary input[type="radio"]:checked ~ label:before,
	.funkyradio-primary input[type="checkbox"]:checked ~ label:before {
		color: #fff;
		background-color: #337ab7;
	}
	.active{
		display: block;
	}
	#sipa1{
		display: none;
	}
	#sipa2{
		display: none;
	}
	#sipa3{
		display: none;
	}
	#sipa4{
		display: none;
	}
	#sipa5{
		display: none;
	}
	#sipa6{
		display: none;
	}
	#sipapantek1{
		display: none;
	}
	#sipapantek2{
		display: none;
	}
	#sipapantek3{
		display: none;
	}
	#sipapantek4{
		display: none;
	}
	#sipapantek5{
		display: none;
	}
	#sipapantek6{
		display: none;
	}
	#ground1{
		display: none;
	}
	#ground2{
		display: none;
	}
	#ground3{
		display: none;
	}
	#ground4{
		display: none;
	}
	#ground5{
		display: none;
	}
	#ground6{
		display: none;
	}
	#roof1{
		display: none;
	}
	#roof2{
		display: none;
	}
	#roof3{
		display: none;
	}
	#roof4{
		display: none;
	}
	#roof5{
		display: none;
	}
	#roof6{
		display: none;
	}
</style>
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
			</div>
		</div>
		<form role="form" method="post" action="<?php echo site_url('main/proses_input') ?>"  enctype="multipart/form-data">
			<div class="row setup-content" id="step-1">
				<div class="col-xs-12">
					<div class="col-md-12">
						<h3> INFORMASI UMUM BANGUNAN GEDUNG</h3>
						<div class="row">
							<div class="form-group margin-input">
								<label class="col-sm-2">Nama Bangunan :</label>
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
								<label class="col-sm-2">Nomor Obyek Pajak :</label>
								<div class="col-sm-10">
									<input  maxlength="100" name="nop" type="text" required="required" class="form-control" placeholder="Masukan Nomor Obyek Pajak"/>
								</div> 
							</div>
							<div class="form-group margin-input">
								<label class="col-sm-2">Mulai Beroperasi Tahun</label>
								<div class="col-sm-10">
									<input name="startYear" name="nbt" id="startYear" class="date-picker-year form-control" placeholder="Masukan Tahun" /> 
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
						<h3> DATA KEPEMILIKAN BANGUNAN GEDUNG</h3>
						<div class="row">
							<div class="form-group margin-input">
								<label class="col-sm-2">Nama Pemilik :</label>
								<div class="col-sm-10">
									<input name="nama_pemilik" maxlength="100" type="text" required="required" class="form-control" placeholder="Masukan Nama Pemilik"/>
								</div> 
							</div>
							<div class="form-group margin-input">
								<label class="col-sm-2">Alamat :</label>
								<div class="col-sm-10">
									<textarea maxlength="100" name="alamat" required="required" class="form-control" placeholder="Masukan Alamat"/></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10 margin-input-row">
									<div class="row">
										<label class="col-sm-1">RT :</label>
										<div class="col-sm-5">
											<input  name="rt_pemilik" maxlength="100" type="text" required="required" class="form-control" placeholder="Masukan RT"  />
										</div>
										<label class="col-sm-1">RW :</label>
										<div class="col-sm-5">
											<input  name="rw_pemilik" maxlength="100" type="text" required="required" class="form-control" placeholder="Masukan RW"  />
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10 margin-input">
									<div class="row">
										<label class="col-sm-2">Kelurahan :</label>
										<div class="col-sm-10">
											<input  name="kelurahan_pemilik" maxlength="100" type="text" required="required" class="form-control" placeholder="Masukan Kelurahan"/>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10 margin-input">
									<div class="row">
										<label class="col-sm-2">Kecamatan :</label>
										<div class="col-sm-10">
											<input  name="kecamatan_pemilik" maxlength="100" type="text" required="required" class="form-control" placeholder="Masukan Kecamatan"/>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10 margin-input">
									<div class="row">
										<label class="col-sm-2">Kota :</label>
										<div class="col-sm-10">
											<input  name="kota_pemilik" maxlength="100" type="text" required="required" class="form-control" placeholder="Masukan Kota"/>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10 margin-input">
									<div class="row">
										<label class="col-sm-2">Kode Pos :</label>
										<div class="col-sm-10">
											<input name="kode_pemilik" maxlength="100" type="text" required="required" class="form-control" placeholder="Masukan Kode Pos"/>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10 margin-input">
									<div class="row">
										<label class="col-sm-2">Provinsi :</label>
										<div class="col-sm-10">
											<input name="provinsi" maxlength="100" type="text" required="required" class="form-control" placeholder="Masukan Provinsi"/>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group margin-input">
								<label class="col-sm-2">Nomor Telepon :</label>
								<div class="col-sm-10">
									<input  name="no_hp" maxlength="100" type="text" required="required" class="form-control" placeholder="Kantor"/>
								</div> 
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10 margin-input">
									<div class="row">
										<div class="col-sm-12">
											<input  name="no_telp" maxlength="100" type="text" required="required" class="form-control" placeholder="HP"/>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group margin-input">
								<label class="col-sm-2">Email :</label>
								<div class="col-sm-10">
									<input  name="email" maxlength="100" type="email" required="required" class="form-control" placeholder="Masukan Email"/>
								</div> 
							</div>
							<div class="form-group margin-input">
								<label class="col-sm-2" style="margin-top: 14px;margin-bottom: 0;">Penanggung Jawab (Person in Charge) :</label>
								<div class="col-sm-10">
									<input  name="tanggung" maxlength="100" type="text" required="required" class="form-control" placeholder="Masukan Penanggung Jawab"/>
								</div> 
							</div>
							<div class="form-group margin-input">
								<label class="col-sm-2">Jabatan :</label>
								<div class="col-sm-10">
									<input  name="jabatan" maxlength="100" type="text" required="required" class="form-control" placeholder="Masukan Jabatan"/>
								</div> 
							</div>
							<div class="form-group margin-input">
								<label class="col-sm-2">Nomor Telepon :</label>
								<div class="col-sm-10">
									<input  name="telp_jabatan" maxlength="100" type="text" required="required" class="form-control" placeholder="Kantor"/>
								</div> 
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10 margin-input">
									<div class="row">
										<div class="col-sm-12">
											<input  name="no_jabatan" maxlength="100" type="text" required="required" class="form-control" placeholder="HP"/>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group margin-input">
								<label class="col-sm-2">Email :</label>
								<div class="col-sm-10">
									<input  name="email_jabatan" maxlength="100" type="email" required="required" class="form-control" placeholder="Masukan Email"/>
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
						<h3> DATA PENGELOLA BANGUNAN GEDUNG</h3>
						<div class="row">
							<div class="form-group margin-input">
								<label class="col-sm-2">Kategori Pengelola :</label>
								<div class="col-sm-10">
									<div class="row">
										<div class="funkyradio">
											<div class="col-md-5">
												<div class="funkyradio-primary">
													<input type="radio" name="kat_pengelola" value="inhouse" id="inhouse"/>
													<label for="inhouse">inhouse</label>
												</div>
											</div>
											<div class="col-md-5">
												<div class="funkyradio-primary">
													<input type="radio" name="kat_pengelola" value="outsourcing" id="outsourcing"/>
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
									<input  name="pengelola" maxlength="100" type="text" required="required" class="form-control" placeholder="Masukan Pengelola"/>
								</div> 
							</div>
							<div class="form-group margin-input">
								<label class="col-sm-2">Penanggung Jawab :</label>
								<div class="col-sm-10">
									<input  name="peng_jawab" maxlength="100" type="text" required="required" class="form-control" placeholder="Masukan Pengelola"/>
								</div> 
							</div>
							<div class="form-group margin-input">
								<label class="col-sm-2">Jabatan :</label>
								<div class="col-sm-10">
									<input  name="jabatan_peng" maxlength="100" type="text" required="required" class="form-control" placeholder="Masukan Pengelola"/>
								</div> 
							</div>
							<div class="form-group margin-input">
								<label class="col-sm-2">Alamat :</label>
								<div class="col-sm-10">
									<textarea name="alamat_peng" maxlength="100" required="required" class="form-control" placeholder="Masukan Alamat"/></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10 margin-input-row">
									<div class="row">
										<label class="col-sm-1">RT :</label>
										<div class="col-sm-5">
											<input  name="rt_peng" maxlength="100" type="text" required="required" class="form-control" placeholder="Masukan RT"  />
										</div>
										<label class="col-sm-1">RW :</label>
										<div class="col-sm-5">
											<input  name="rw_peng" maxlength="100" type="text" required="required" class="form-control" placeholder="Masukan RW"  />
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10 margin-input">
									<div class="row">
										<label class="col-sm-2">Kelurahan :</label>
										<div class="col-sm-10">
											<input  name="kelurahan_peng" maxlength="100" type="text" required="required" class="form-control" placeholder="Masukan Kelurahan"/>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10 margin-input">
									<div class="row">
										<label class="col-sm-2">Kecamatan :</label>
										<div class="col-sm-10">
											<input name="kecamatan_peng" maxlength="100" type="text" required="required" class="form-control" placeholder="Masukan Kecamatan"/>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10 margin-input">
									<div class="row">
										<label class="col-sm-2">Kota :</label>
										<div class="col-sm-10">
											<input  name="kota_peng" maxlength="100" type="text" required="required" class="form-control" placeholder="Masukan Kota"/>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10 margin-input">
									<div class="row">
										<label class="col-sm-2">Kode Pos :</label>
										<div class="col-sm-10">
											<input name="kode_peng" maxlength="100" type="text" required="required" class="form-control" placeholder="Masukan Kode Pos"/>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10 margin-input">
									<div class="row">
										<label class="col-sm-2">Provinsi :</label>
										<div class="col-sm-10">
											<input name="provinsi_peng" maxlength="100" type="text" required="required" class="form-control" placeholder="Masukan Kode Pos"/>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group margin-input">
								<label class="col-sm-2">Nomor Telepon :</label>
								<div class="col-sm-10">
									<input  name="no_telp_peng" maxlength="100" type="text" required="required" class="form-control" placeholder="Kantor"/>
								</div> 
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10 margin-input">
									<div class="row">
										<div class="col-sm-12">
											<input  name="no_hp_peng" maxlength="100" type="text" required="required" class="form-control" placeholder="HP"/>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group margin-input">
								<label class="col-sm-2">Email :</label>
								<div class="col-sm-10">
									<input  name="email_peng" maxlength="100" type="Email" required="required" class="form-control" placeholder="Masukan Email"/>
								</div> 
							</div>
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
							<div class="form-group margin-input">
								<label class="col-sm-2">SIPPT/IPPR :</label>
								<label class="col-sm-1">No.</label>
								<div class="col-sm-4">
									<input name="no_sippt" maxlength="100" type="text" required="required" class="form-control" placeholder="Masukan Nomor"/>
								</div> 
								<label class="col-sm-1">Tgl.</label>
								<div class="col-sm-4">
									<input name="tgl_sippt" type="text" id="datepicker" required="required" class="form-control" placeholder="Masukan Tanggal"/>
								</div> 
							</div>
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
									<input  name="no_imb[]" maxlength="100" type="text" required="required" class="form-control" placeholder="Masukan Nomor"/>
								</div> 
								<label class="col-sm-1">Tgl.</label>
								<div class="col-sm-4">
									<input name="tgl_imb[]" type="text" id="date_imb" required="required" class="form-control" placeholder="Masukan Tanggal"/>
								</div> 
							</div>
							<div class="form-group margin-input">
								<label class="col-sm-2"></label>
								<label class="col-sm-1">No.</label>
								<div class="col-sm-4">
									<input  name="no_imb[]" maxlength="100" type="text" required="required" class="form-control" placeholder="Masukan Nomor"/>
								</div> 
								<label class="col-sm-1">Tgl.</label>
								<div class="col-sm-4">
									<input name="tgl_imb[]" type="text" id="date_imb2" required="required" class="form-control" placeholder="Masukan Tanggal"/>
								</div> 
							</div>
							<div class="form-group margin-input">
								<label class="col-sm-2">KMB/SLF Terakhir :</label>
								<label class="col-sm-1">No.</label>
								<div class="col-sm-4">
									<input  name="no_kmb" maxlength="100" type="text" required="required" class="form-control" placeholder="Masukan Nomor"/>
								</div> 
								<label class="col-sm-1">Tgl.</label>
								<div class="col-sm-4">
									<input name="tgl_kmb" type="text" id="date_kmb" required="required" class="form-control" placeholder="Masukan Tanggal"/>
								</div> 
							</div>
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
							<div class="form-group margin-input">
								<label class="col-sm-2">Jumlah Tower<sup>1</sup> :</label>
								<div class="col-sm-4">
									<input  name="tower" maxlength="100" type="number" required="required" class="form-control" placeholder="Masukan Jumlah Tower"/>
								</div> 
								<label class="col-sm-2">Jumlah Unit<sup>2</sup></sub>.</label>
								<div class="col-sm-4">
									<input name="unit" type="number" required="required" class="form-control" placeholder="Masukan Jumlah Unit"/>
								</div> 
							</div>
							<div class="form-group margin-input">
								<label class="col-sm-2">Ketinggian Bangunan :</label>
								<label class="col-sm-2">a. Tower</label>
								<div class="col-sm-8">
									<div class="input-group">
										<input name="tinggi_tower" type="text" required="required" class="form-control" placeholder="Masukan Tinggi Lantai">
										<span class="input-group-addon" id="basic-addon2">Lantai</span>
									</div>
								</div>
							</div>
							<div class="form-group margin-input">
								<label class="col-sm-2"></label>
								<label class="col-sm-2">b. Podium</label>
								<div class="col-sm-8">
									<div class="input-group">
										<input name="tinggi_podium" type="text" required="required" class="form-control" placeholder="Masukan Tinggi Lantai">
										<span class="input-group-addon" id="basic-addon2">Lantai</span>
									</div>
								</div>
							</div>
							<div class="form-group margin-input">
								<label class="col-sm-2">Jenis Bangunan :</label>
								<div class="col-sm-10">
									<div class="row">
										<div class="funkyradio">
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-6">
														<div class="funkyradio-primary">
															<input type="checkbox"  name="jenis_bang[]" value="inhouse" id="inhouse"/>
															<label for="inhouse">Perkantoran</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="funkyradio-primary">
															<input type="checkbox" name="jenis_bang[]" value="kesehatan" id="kesehatan"/>
															<label for="kesehatan">Sarana Kesehatan</label>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-6">
														<div class="funkyradio-primary">
															<input type="checkbox" name="jenis_bang[]" value="apartemen" id="apartemen"/>
															<label for="apartemen">Apartemen</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="funkyradio-primary">
															<input type="checkbox" name="jenis_bang[]" value="perdagangan" id="perdagangan"/>
															<label for="perdagangan">Sarana Perdagangan</label>
														</div>
													</div>	
												</div>
											</div>
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-6">
														<div class="funkyradio-primary">
															<input type="checkbox" name="jenis_bang[]" hunian="hunian" id="hunian"/>
															<label for="hunian">Hunian</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="funkyradio-primary">
															<input type="checkbox" id="lainnya_jenisbangunan1"/>
															<label for="lainnya_jenisbangunan1"><input name="jenis_bang[]" value="....." style="padding-left: 45px;" disabled id="txtjenisbang" type="text" class="form-control" name="lainnya_jenisbangunan"></label>
														</div>
													</div>	
												</div>
											</div>
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-6">
														<div class="funkyradio-primary">
															<input type="checkbox" name="jenis_bang[]" value="hotel" id="hotel"/>
															<label for="hotel">Hotel</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="funkyradio-primary">
															<input type="checkbox"  id="lainnya_jenisbangunan2"/>
															<label for="lainnya_jenisbangunan2"><input name="jenis_bang[]" value="....." style="padding-left: 45px;" disabled id="txtjenisbang2" type="text" class="form-control" name="lainnya_jenisbangunan2"></label>
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
								<label class="col-sm-2" style="margin-top: 14px;margin-bottom: 0;">a. Luas Lantai Dasar / Lantai Terluas</label>
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
								<label class="col-sm-2">Tingkat Okupansi :</label>
								<div class="col-sm-10">
									<div class="input-group">
										<input name="tk_okupansi" type="text" required="required" class="form-control" placeholder="Masukan Tingkat Okupansi">
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
													<input type="radio" name="ket" value="Apabila berbentuk gedung" id="radio1"/>
													<label for="radio1">Apabila berbentuk gedung</label>
												</div>
											</div>
											<div class="col-md-5">
												<div class="funkyradio-primary">
													<input type="radio" name="ket" value="Apabila berupa hunian / real estate" id="radio2"/>
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
										<input name="op1" type="text" required="required" class="form-control" placeholder="Masukan Tinggi Lantai">
										<span class="input-group-addon" id="basic-addon2">jam/minggu</span>
									</div>
								</div>
							</div>
							<div class="form-group margin-input">
								<label class="col-sm-2"></label>
								<label class="col-sm-4" style="margin-top: 14px;margin-bottom: 0;">b. Rata-rata jumlah hari dan minggu operasional per tahun :</label>
								<div class="col-sm-3">
									<div class="input-group">
										<input name="op2" type="text" required="required" class="form-control" placeholder="Masukan Tinggi Lantai">
										<span class="input-group-addon" id="basic-addon2">hari</span>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="input-group">
										<input name="op3" type="text" required="required" class="form-control" placeholder="Masukan Tinggi Lantai">
										<span class="input-group-addon" id="basic-addon2">minggu</span>
									</div>
								</div>
							</div>
							<div class="form-group margin-input">
								<label class="col-sm-2"></label>
								<label class="col-sm-4" style="margin-top: 14px;margin-bottom: 0;">c. Jumlah jam operasional per tahun :</label>
								<div class="col-sm-6">
									<div class="input-group">
										<input name="op4" type="text" required="required" class="form-control" placeholder="Masukan Tinggi Lantai">
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
												<input name="senin1" type="number" required="required" class="form-control jumlah" placeholder="">
											</td>
											<td class="jum-puncak">
												<input name="senin2" type="number" required="required" class="form-control jumlahpuncak" placeholder="">
											</td>
										</tr>
										<tr>
											<td style="text-align: center;">
												Selasa
											</td>
											<td class="jum-rata">
												<input name="selasa1" type="number" required="required" class="form-control jumlah" placeholder="">
											</td>
											<td class="jum-puncak">
												<input name="selasa2" type="number" required="required" class="form-control jumlahpuncak" placeholder="">
											</td>
										</tr>
										<tr>
											<td style="text-align: center;">
												Rabu
											</td>
											<td class="jum-rata">
												<input name="rabu1" type="number" required="required" class="form-control jumlah" placeholder="">
											</td>
											<td class="jum-puncak">
												<input name="rabu2" type="number" required="required" class="form-control jumlahpuncak" placeholder="">
											</td>
										</tr>
										<tr>
											<td style="text-align: center;">
												Kamis
											</td>
											<td class="jum-rata">
												<input name="kamis1" type="number" required="required" class="form-control jumlah" placeholder="">
											</td>
											<td class="jum-puncak">
												<input name="kamis2" type="number" required="required" class="form-control jumlahpuncak" placeholder="">
											</td>
										</tr>
										<tr>
											<td style="text-align: center;">
												Jumat
											</td>
											<td class="jum-rata">
												<input name="jumat1" type="number" required="required" class="form-control jumlah" placeholder="">
											</td>
											<td class="jum-puncak">
												<input name="jumat2" type="number" required="required" class="form-control jumlahpuncak" placeholder="">
											</td>
										</tr>
										<tr>
											<td style="text-align: center;">
												Sabtu
											</td>
											<td class="jum-rata">
												<input name="sabtu1" type="number" required="required" class="form-control jumlah" placeholder="">
											</td>
											<td class="jum-puncak">
												<input name="sabtu2" type="number" required="required" class="form-control jumlahpuncak" placeholder="">
											</td>
										</tr>
										<tr>
											<td style="text-align: center;">
												Minggu
											</td>
											<td class="jum-rata">
												<input name="minggu1" type="number" required="required" class="form-control jumlah" placeholder="">
											</td>
											<td class="jum-puncak">
												<input name="minggu2" type="number" required="required" class="form-control jumlahpuncak" placeholder="">
											</td>
										</tr>
										<tr>
											<td style="text-align: center;">
												Total Per Minggu
											</td>
											<td>
												<input type="number"  class="form-control" required="required" name="totalminggu[]" placeholder="">
											</td>
											<td>
												<input type="number"  class="form-control" required="required" name="totalminggu[]" placeholder="">
											</td>
										</tr>
									</tbody>
								</table>
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
							<div class="form-group margin-input">
								<label class="col-sm-2">Sumber air yang digunakan* :</label>
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
															<input type="checkbox" name="kons_air[]" value="pengelola_sendiri" id="pengelola_sendiri"/>
															<label for="pengelola_sendiri">Pengolahan air sendiri</label>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-6">
														<div class="funkyradio-primary">
															<input type="checkbox" name="kons_air[]" value="sumur dalam" id="sumur"/>
															<label for="sumur">Sumur Bor/ Sumur Dalam</label>
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
															<input type="checkbox"  name="kons_air[]"  value="Sumur Pantek"/>
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
								<label class="col-sm-2">Jumlah Sumur Bor :</label>
								<div class="col-sm-10">
									<div class="input-group">
										<input name="jumlah_sumur" type="number" min="0" max="6" id="jumlahsumur" required="required" class="form-control" placeholder="Masukan Jumlah Titik">
										<span class="input-group-addon" id="basic-addon2">Titik</span>
									</div>
								</div>
							</div>
							<div class="form-group margin-input" id="sipa1">
								<label class="col-sm-2"></label>
								<label class="col-sm-2">SIPA 1 NO:</label>
								<div class="col-sm-3">
									<input  name="no_sipa[]" maxlength="100" type="text" class="form-control" placeholder="Masukan Nomor"/>
								</div>
								<label class="col-sm-1">Tanggal</label>
								<div class="col-sm-4">
									<input name="tgl_sipa[]" type="text" id="date_bor" class="form-control" placeholder="Masukan Tanggal"/>
								</div>
							</div>
							<div class="form-group margin-input" id="sipa2">
								<label class="col-sm-2"></label>
								<label class="col-sm-2">SIPA 2 NO:</label>
								<div class="col-sm-3">
									<input  name="no_sipa[]" maxlength="100" type="text" class="form-control" placeholder="Masukan Nomor"/>
								</div>
								<label class="col-sm-1">Tanggal</label>
								<div class="col-sm-4">
									<input name="tgl_sipa[]" type="text" id="date_bor2" class="form-control" placeholder="Masukan Tanggal"/>
								</div>
							</div>
							<div class="form-group margin-input" id="sipa3">
								<label class="col-sm-2"></label>
								<label class="col-sm-2">SIPA 3 NO:</label>
								<div class="col-sm-3">
									<input  name="no_sipa[]" maxlength="100" type="text" class="form-control" placeholder="Masukan Nomor"/>
								</div>
								<label class="col-sm-1">Tanggal</label>
								<div class="col-sm-4">
									<input name="tgl_sipa[]" type="text" id="date_bor3" class="form-control" placeholder="Masukan Tanggal"/>
								</div>
							</div>
							<div class="form-group margin-input" id="sipa4">
								<label class="col-sm-2"></label>
								<label class="col-sm-2">SIPA 4 NO:</label>
								<div class="col-sm-3">
									<input  name="no_sipa[]" maxlength="100" type="text" class="form-control" placeholder="Masukan Nomor"/>
								</div>
								<label class="col-sm-1">Tanggal</label>
								<div class="col-sm-4">
									<input name="tgl_sipa[]" type="text" id="date_bor4" class="form-control" placeholder="Masukan Tanggal"/>
								</div>
							</div>
							<div class="form-group margin-input" id="sipa5">
								<label class="col-sm-2"></label>
								<label class="col-sm-2">SIPA 5 NO:</label>
								<div class="col-sm-3">
									<input  name="no_sipa[]" maxlength="100" type="text" class="form-control" placeholder="Masukan Nomor"/>
								</div>
								<label class="col-sm-1">Tanggal</label>
								<div class="col-sm-4">
									<input name="tgl_sipa[]" type="text" id="date_bor4" class="form-control" placeholder="Masukan Tanggal"/>
								</div>
							</div>
							<div class="form-group margin-input" id="sipa6">
								<label class="col-sm-2"></label>
								<label class="col-sm-2">SIPA 6 NO:</label>
								<div class="col-sm-3">
									<input  name="no_sipa[]" maxlength="100" type="text" class="form-control" placeholder="Masukan Nomor"/>
								</div>
								<label class="col-sm-1">Tanggal</label>
								<div class="col-sm-4">
									<input name="tgl_sipa[]" type="text" id="date_bor4" class="form-control" placeholder="Masukan Tanggal"/>
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
								<label class="col-sm-2">Jumlah Ground Tank :</label>
								<div class="col-sm-10">
									<div class="input-group">
										<input name="jumlah_ground" type="number" min="0" max="6" id="jumlahground"  class="form-control" placeholder="Masukan Jumlah Unit">
										<span class="input-group-addon" id="basic-addon2">Unit</span>
									</div>
								</div>
							</div>
							<div class="form-group margin-input" id="ground1">
								<label class="col-sm-2"></label>
								<label class="col-sm-3">Kapasitas Ground Tank 1 NO:</label>
								<div class="col-sm-7">
									<input name="kaps_ground[]" type="text"  class="form-control" placeholder="Masukan Nomor"/>
								</div>
							</div>
							<div class="form-group margin-input" id="ground2">
								<label class="col-sm-2"></label>
								<label class="col-sm-3">Kapasitas Ground Tank 2 NO:</label>
								<div class="col-sm-7">
									<input name="kaps_ground[]" type="text"  class="form-control" placeholder="Masukan Nomor"/>
								</div>
							</div>
							<div class="form-group margin-input" id="ground3">
								<label class="col-sm-2"></label>
								<label class="col-sm-3">Kapasitas Ground Tank 3 NO:</label>
								<div class="col-sm-7">
									<input  name="kaps_ground[]" type="text"  class="form-control" placeholder="Masukan Nomor"/>
								</div>
							</div>
							<div class="form-group margin-input" id="ground4">
								<label class="col-sm-2"></label>
								<label class="col-sm-3">Kapasitas Ground Tank 4 NO:</label>
								<div class="col-sm-7">
									<input  name="kaps_ground[]" type="text"  class="form-control" placeholder="Masukan Nomor"/>
								</div>
							</div>
							<div class="form-group margin-input" id="ground5">
								<label class="col-sm-2"></label>
								<label class="col-sm-3">Kapasitas Ground Tank 5 NO:</label>
								<div class="col-sm-7">
									<input  name="kaps_ground[]" type="text"  class="form-control" placeholder="Masukan Nomor"/>
								</div>
							</div>
							<div class="form-group margin-input" id="ground6">
								<label class="col-sm-2"></label>
								<label class="col-sm-3">Kapasitas Ground Tank 6 NO:</label>
								<div class="col-sm-7">
									<input  name="kaps_ground[]" type="text"  class="form-control" placeholder="Masukan Nomor"/>
								</div>
							</div>

							<div class="form-group margin-input">
								<label class="col-sm-2">Jumlah Roof Tank:</label>
								<div class="col-sm-10">
									<div class="input-group">
										<input name="jumlah_roof" type="number" min="0" max="6" id="jumlahroof"  class="form-control" placeholder="Masukan Jumlah Unit">
										<span class="input-group-addon" id="basic-addon2">Unit</span>
									</div>
								</div>
							</div>
							<div class="form-group margin-input" id="roof1">
								<label class="col-sm-2"></label>
								<label class="col-sm-3">Kapasitas Roof Tank 1 NO:</label>
								<div class="col-sm-7">
									<input name="kaps_roof[]" type="text"  class="form-control" placeholder="Masukan Nomor"/>
								</div>
							</div>
							<div class="form-group margin-input" id="roof2">
								<label class="col-sm-2"></label>
								<label class="col-sm-3">Kapasitas Roof Tank 2 NO:</label>
								<div class="col-sm-7">
									<input name="kaps_roof[]" type="text"  class="form-control" placeholder="Masukan Nomor"/>
								</div>
							</div>
							<div class="form-group margin-input" id="roof3">
								<label class="col-sm-2"></label>
								<label class="col-sm-3">Kapasitas Roof Tank 3 NO:</label>
								<div class="col-sm-7">
									<input  name="kaps_roof[]" type="text"  class="form-control" placeholder="Masukan Nomor"/>
								</div>
							</div>
							<div class="form-group margin-input" id="roof4">
								<label class="col-sm-2"></label>
								<label class="col-sm-3">Kapasitas Roof Tank 4 NO:</label>
								<div class="col-sm-7">
									<input name="kaps_roof[]" type="text"  class="form-control" placeholder="Masukan Nomor"/>
								</div>
							</div>
							<div class="form-group margin-input" id="roof5">
								<label class="col-sm-2"></label>
								<label class="col-sm-3">Kapasitas Roof Tank 5 NO:</label>
								<div class="col-sm-7">
									<input name="kaps_roof[]" type="text"  class="form-control" placeholder="Masukan Nomor"/>
								</div>
							</div>
							<div class="form-group margin-input" id="roof6">
								<label class="col-sm-2"></label>
								<label class="col-sm-3">Kapasitas Roof Tank 6 NO:</label>
								<div class="col-sm-7">
									<input  name="kaps_roof[]" type="text"  class="form-control" placeholder="Masukan Nomor"/>
								</div>
							</div>

							<div class="form-group margin-input">
								<label class="col-sm-2">Konsumsi Air Rata-rata</label>
								<label class="col-sm-2">a. Occupant Area :</label>
								<div class="col-sm-8">
									<div class="input-group">
										<input name="rata_kon[]" type="text"  class="form-control" placeholder="Masukan Occupant Area">
										<span class="input-group-addon" id="basic-addon2">M<sup>3</sup>/org/hari</span>
									</div>
								</div>
							</div>
							<div class="form-group margin-input">
								<label class="col-sm-2"></label>
								<label class="col-sm-2">b. Service Area :</label>
								<div class="col-sm-8">
									<div class="input-group">
										<input name="rata_kon[]" type="text"  class="form-control" placeholder="Masukan Service Area">
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
													<input type="checkbox" name="air_bersih" value="Water Treatment Plant" id="water_treatment">
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
									<input name="sistem_air" type="text"  class="form-control" placeholder="Masukan Sistem">
								</div>
							</div>
							<div class="form-group margin-input">
								<label class="col-sm-2"></label>
								<label class="col-sm-3">Kapasitas :</label>
								<div class="col-sm-7">
									<div class="input-group">
										<input type="text" name="kaps_bersih"  class="form-control" placeholder="Masukan Kapasitas">
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
													<input type="checkbox" name="checkbox" id="lainnya_airbersih"/>
													<label for="lainnya_airbersih"><input name="air_bersih2" value="....." style="padding-left: 45px;" disabled id="txtairbersih" type="text" class="form-control" name="lainnya_airbersih"></label>
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
										<input name="kaps_bersih2" type="text" disabled id="txtkapasitasair"  class="form-control" placeholder="Masukan Kapasitas">
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
										<input name="jumlah_hujan2" type="text" required="required" class="form-control" placeholder="Masukan Jumlah Titik">
										<span class="input-group-addon" id="basic-addon2">Titik</span>
									</div>
								</div>
								<label class="col-sm-2">Kapasitas Total :</label>
								<div class="col-sm-3">
									<div class="input-group">
										<input name="kaps_hujan2" type="text" required="required" class="form-control" placeholder="Masukan Kapasitas Total">
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
													<input type="checkbox" name="air_hujan3" value="Water Trap" id="water_trap">
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
													<input type="checkbox" name="air_bekas" value="Water Treatment Plant" id="water_treatment_plant">
													<label for="water_treatment_plant">Water Treatment Plant</label>
												</div>
											</div>
										</div>
										<label class="col-sm-2" style="margin:0;">Kapasitas :</label>
										<div class="col-sm-5">
											<div class="input-group">
												<input name="kaps_bekas" type="text" required="required" class="form-control" placeholder="Masukan Kapasitas">
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
													<input type="checkbox" name="checkbox" id="lainnya_airbekas"/>
													<label for="lainnya_airbekas"><input name="air_bekas2" value="....." style="padding-left: 45px;" disabled id="txtairbekas" type="text" class="form-control" name="lainnya_airbekas"></label>
												</div>
											</div>
										</div>
										<label class="col-sm-2" style="margin:0;">Kapasitas :</label>
										<div class="col-sm-5">
											<div class="input-group">
												<input name="kaps_bekas2" type="text" disabled id="txtkapasitasbekas" required="required" class="form-control" placeholder="Masukan Kapasitas">
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
													<input type="checkbox" name="air_limbah" value="IPAL/Sewage Treatment Plant (STP)" id="ipal">
													<label for="ipal">IPAL/Sewage Treatment Plant (STP)</label>
												</div>
											</div>
										</div>
										<label class="col-sm-2" style="margin:0;">Kapasitas :</label>
										<div class="col-sm-5">
											<div class="input-group">
												<input name="kaps_limbah" type="text" required="required" class="form-control" placeholder="Masukan Kapasitas">
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
													<input type="checkbox" name="air_limbah2" value="PD PAL" id="pdpal">
													<label for="pdpal">PD PAL</label>
												</div>
											</div>
										</div>
										<label class="col-sm-2" style="margin:0;">Kapasitas :</label>
										<div class="col-sm-5">
											<div class="input-group">
												<input name="kaps_limbah2" type="text" required="required" class="form-control" placeholder="Masukan Kapasitas">
												<span class="input-group-addon" id="basic-addon2">M<sup>3</sup></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<br>
							<div class="col-md-12">
								<div class="panel panel-default" style="margin-top: 20px;box-shadow: 0 2px 2px rgba(0,0,0,0.1);">
									<div class="panel-body">
										<h5>SKETSA LOKASI SUMUR RESAPAN, KOLAM RESAPAN, SUMUR BOR, SUMUR PANTEK DAN WATERTRAP PADA SITEPLAN</h5>
									</div>
								</div>
							</div>
							<div class="form-group margin-input">
								<label class="col-sm-2" style="margin-top: 14px;margin-bottom: 0;">File Sketsa</label>
								<div class="col-sm-10">
									<div class="input-group">
										<input type="file"  class="form-control" name="foto_sketsa">
									</div>
								</div>
							</div>
							<div class="form-group margin-input">
								<label class="col-sm-2">Nama Bangunan</label>
								<div class="col-sm-10">
									<input name="nama_bang_sketsa" type="text"  name="nama_bangunan" class="form-control" placeholder="Masukan Nama Bangunan">
								</div>
							</div>
							<div class="form-group margin-input">
								<label class="col-sm-2">Lokasi Bangunan</label>
								<div class="col-sm-10">
									<input name="lokasi_sketsa" type="text"  name="lokasi_bangunan" class="form-control" placeholder="Masukan Lokasi Bangunan">
								</div>
							</div>
						</div>
						<br>	
						<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
					</div>
				</div>
			</div>
			<div class="row setup-content" id="step-7">
				<div class="col-xs-12">
					<div class="col-md-12">
						<h3> PERMASALAHAN / KENDALA</h3>
						<div class="row">
							<div class="form-group margin-input">
								<label class="col-sm-2" style="margin-top: 14px;margin-bottom: 0;">Sumur Resapan / Kolam Resapan</label>
								<div class="col-sm-10">
									<textarea name="sumur_resap" style="height: 100px;" name="permasalahan_sumur_resapan" class="form-control" placeholder="Masukan Permasalahan Sumur Resapan"></textarea>
								</div>
							</div>
							<div class="form-group margin-input">
								<label class="col-sm-2" style="margin-top: 14px;margin-bottom: 0;">Sumur Dalam / Sumur Pantek</label>
								<div class="col-sm-10">
									<textarea name="sumur_dalam" style="height: 100px;" name="permasalahan_sumur_dalam" class="form-control" placeholder="Masukan Permasalahan Sumur Dalam"></textarea>
								</div>
							</div>
							<div class="form-group margin-input">
								<label class="col-sm-2" style="margin-top: 14px;margin-bottom: 0;">Pengolahan Air Limbah</label>
								<div class="col-sm-10">
									<textarea name="peng_air" style="height: 100px;" name="pengolahan_air" class="form-control" placeholder="Masukan Permasalahan Pengolahan Air Limbah"></textarea>
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