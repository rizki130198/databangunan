var url = 'http://'+location.hostname+'/data_bangunan';
function getKecInfo() {
	$.ajax({
		url: url+'/main/jsonKec/',
		type: 'get',
		dataType: 'html',
		data: {id: $('#kel').val()},
	})
	.done(function(x) {
		$('#kec').html(x);
	})
	.fail(function() {
		console.log("error");
	})

}
function getKotaInfo() {
	$.ajax({
		url: url+'/main/jsonWal/',
		type: 'get',
		dataType: 'html',
		data: {id: $('#kec').val()},
	})
	.done(function(x) {
		$('#kota').html(x);
	})
	.fail(function() {
		console.log("error");
	})

}