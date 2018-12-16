<?php $this->load->view('include/navbar'); ?>	
<body>
	<style type="text/css">
	.btn-active{
		background-color: #999999 !important;
		box-shadow: 0 2px 2px 0 rgba(153, 153, 153, 0.14), 0 3px 1px -2px rgba(153, 153, 153, 0.2), 0 1px 5px 0 rgba(153, 153, 153, 0.12) !important;
	}
	.scrollbar{
		overflow-y: hidden;
		overflow-x: scroll;		
	}
	.scrollbar::-webkit-scrollbar {
		width: 8px;
		height: 8px;
	}

	.thin::-webkit-scrollbar {
		width: 2px;
	}

	::-webkit-scrollbar-track {
		border-radius: 10px;
		background: #eee;
	}

	::-webkit-scrollbar-thumb {
		border-radius: 10px;
		background: #888;
	}
	::-webkit-scrollbar-thumb:window-inactive {
		background: rgba(100,100,100,0.4); 
	}
</style>	
<div class="container">	
	<div class="col-md-12">
		<div class="row">
			<div class="btn-group" style="margin-bottom:20px;margin-top: 2%;">
				<button type="button" id="table" class="btn btn-info btn-active"><a href="javascript:;" style="color:#fff;text-decoration:none;"><i class="glyphicon glyphicon-th-list"></i> Table</a></button>
				<button type="button" id="grid" class="btn btn-info" style="border-right: solid 1px #fff;"><a href="javascript:;" style="color:#fff;text-decoration:none;"><i class="glyphicon glyphicon-th-large"></i> Grid</a></button>
			</div>
		</div>
		<div class="row" id="tableview">
			<div class="scrollbar" style="margin-bottom: 50px;">
				<table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width: 100%;">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Pemilik</th>
							<th>Nama Bangunan</th>
							<th>Lokasi</th>
							<th>Kategori Pengelola</th>
							<th>Jenis Bangunan</th>	
							<th>Sumber Air</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>No</td>
							<td>Jordan</td>
							<td>Queen</td>
							<td>Depok</td>
							<td>Inhouse</td>
							<td>Perkantoran</td>
							<td>PDAM</td>
							<td>
								<a href="<?php echo site_url('#'); ?>"><button class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></button></a>
								<a href="<?php echo site_url('main/viewdata'); ?>"><button class="btn btn-info"><span class="glyphicon glyphicon-eye-open"></span></button></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row" id="gridview">
			Comming Soon!
		</div>		
	</div>
</div>