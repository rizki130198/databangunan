<script type="text/javascript" src="<?php echo base_url('assets/js/jq.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
<script type="text/javascript">
	$(function() {
		$('.date-picker-year').datepicker({
			changeYear: true,
			showButtonPanel: true,
			dateFormat: 'yy',
			onClose: function(dateText, inst) { 
				var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
				$(this).datepicker('setDate', new Date(year, 1));
			}
		});
		$(".date-picker-year").focus(function () {
			$(".ui-datepicker-month").hide();
		});
	});

	$( function() {
		$( "#datepicker" ).datepicker();
		$( "#date_imb" ).datepicker();
		$( "#date_imb2" ).datepicker();
		$( "#date_kmb" ).datepicker();
		$( "#date_bor" ).datepicker();
		$( "#date_bor2" ).datepicker();
		$( "#date_bor3" ).datepicker();
		$( "#date_bor4" ).datepicker();
	} );
</script>
<script type="text/javascript">
	$('#lainnya_jenisbangunan1').change(function(){
		if ($('#lainnya_jenisbangunan1').is(':checked') == true){
			$('#txtjenisbang').val('').prop('disabled', false);
			console.log('checked');
		} else {
			$('#txtjenisbang').val('.....').prop('disabled', true);
			console.log('unchecked');
		}
	});
	$('#lainnya_jenisbangunan2').change(function(){
		if ($('#lainnya_jenisbangunan2').is(':checked') == true){
			$('#txtjenisbang2').val('').prop('disabled', false);
			console.log('checked');
		} else {
			$('#txtjenisbang2').val('.....').prop('disabled', true);
			console.log('unchecked');
		}
	});
	$('#lainnya_sumberair').change(function(){
		if ($('#lainnya_sumberair').is(':checked') == true){
			$('#txtsumberair').val('').prop('disabled', false);
			console.log('checked');
		} else {
			$('#txtsumberair').val('Lain-lain, sebutkan ...').prop('disabled', true);
			console.log('unchecked');
		}
	});
	$('#lainnya_airbersih').change(function(){
		if ($('#lainnya_airbersih').is(':checked') == true){
			$('#txtairbersih').val('').prop('disabled', false);
			$('#txtkapasitasair').val('').prop('disabled', false);
			console.log('checked');
		} else {
			$('#txtairbersih').val('.....').prop('disabled', true);
			$('#txtkapasitasair').val('Masukan Kapasitas').prop('disabled', true);
			console.log('unchecked');
		}
	});
	$('#lainnya_airbekas').change(function(){
		if ($('#lainnya_airbekas').is(':checked') == true){
			$('#txtairbekas').val('').prop('disabled', false);
			$('#txtkapasitasbekas').val('').prop('disabled', false);
			console.log('checked');
		} else {
			$('#txtairbekas').val('.....').prop('disabled', true);
			$('#txtkapasitasbekas').val('Masukan Kapasitas').prop('disabled', true);
			console.log('unchecked');
		}
	});
	$('#selesai').change(function(){
		if ($('#selesai').is(':checked') == true){
			$('#btnselesai').val('').prop('disabled', false);
			console.log('checked');
		} else {
			$('#btnselesai').val('.....').prop('disabled', true);
			console.log('unchecked');
		}
	});
</script>
<script type="text/javascript">
	$(function() {
		$('#jumlahsumur').change(function() {
			var input = $('#jumlahsumur').val();
			if (input == "1") {
				$('#sipa1').show();
				$('#sipa2').hide();
				$('#sipa3').hide();
				$('#sipa4').hide();
				$('#sipa5').hide();
				$('#sipa6').hide();
			}else if (input == "2"){
				$('#sipa1').show();
				$('#sipa2').show();
				$('#sipa3').hide();
				$('#sipa4').hide();
				$('#sipa5').hide();
				$('#sipa6').hide();
			}else if (input == "3"){
				$('#sipa1').show();
				$('#sipa2').show();
				$('#sipa3').show();
				$('#sipa4').hide();
				$('#sipa5').hide();
				$('#sipa6').hide();
			}else if (input == "4"){
				$('#sipa1').show();
				$('#sipa2').show();
				$('#sipa3').show();
				$('#sipa4').show();
				$('#sipa5').hide();
				$('#sipa6').hide();
			}else if (input == "5"){
				$('#sipa1').show();
				$('#sipa2').show();
				$('#sipa3').show();
				$('#sipa4').show();
				$('#sipa5').show();
				$('#sipa6').hide();
			}else if (input == "6"){
				$('#sipa1').show();
				$('#sipa2').show();
				$('#sipa3').show();
				$('#sipa4').show();
				$('#sipa5').show();
				$('#sipa6').show();
			}
		});
	});
	$(function() {
		$('#jumlahsumurpantek').change(function() {
			var input = $('#jumlahsumurpantek').val();
			if (input == "1") {
				$('#sipapantek1').show();
				$('#sipapantek2').hide();
				$('#sipapantek3').hide();
				$('#sipapantek4').hide();
				$('#sipapantek5').hide();
				$('#sipapantek6').hide();
			}else if (input == "2"){
				$('#sipapantek1').show();
				$('#sipapantek2').show();
				$('#sipapantek3').hide();
				$('#sipapantek4').hide();
				$('#sipapantek5').hide();
				$('#sipapantek6').hide();
			}else if (input == "3"){
				$('#sipapantek1').show();
				$('#sipapantek2').show();
				$('#sipapantek3').show();
				$('#sipapantek4').hide();
				$('#sipapantek5').hide();
				$('#sipapantek6').hide();
			}else if (input == "4"){
				$('#sipapantek1').show();
				$('#sipapantek2').show();
				$('#sipapantek3').show();
				$('#sipapantek4').show();
				$('#sipapantek5').hide();
				$('#sipapantek6').hide();
			}else if (input == "5"){
				$('#sipapantek1').show();
				$('#sipapantek2').show();
				$('#sipapantek3').show();
				$('#sipapantek4').show();
				$('#sipapantek5').show();
				$('#sipapantek6').hide();
			}else if (input == "6"){
				$('#sipapantek1').show();
				$('#sipapantek2').show();
				$('#sipapantek3').show();
				$('#sipapantek4').show();
				$('#sipapantek5').show();
				$('#sipapantek6').show();
			}
		});
	});

	$(function() {
		$('#jumlahground').change(function() {
			var input = $('#jumlahground').val();
			if (input == "1") {
				$('#ground1').show();
				$('#ground2').hide();
				$('#ground3').hide();
				$('#ground4').hide();
				$('#ground5').hide();
				$('#ground6').hide();
			}else if (input == "2"){
				$('#ground1').show();
				$('#ground2').show();
				$('#ground3').hide();
				$('#ground4').hide();
				$('#ground5').hide();
				$('#ground6').hide();
			}else if (input == "3"){
				$('#ground1').show();
				$('#ground2').show();
				$('#ground3').show();
				$('#ground4').hide();
				$('#ground5').hide();
				$('#ground6').hide();
			}else if (input == "4"){
				$('#ground1').show();
				$('#ground2').show();
				$('#ground3').show();
				$('#ground4').show();
				$('#ground5').hide();
				$('#ground6').hide();
			}else if (input == "5"){
				$('#ground1').show();
				$('#ground2').show();
				$('#ground3').show();
				$('#ground4').show();
				$('#ground5').show();
				$('#ground6').hide();
			}else if (input == "6"){
				$('#ground1').show();
				$('#ground2').show();
				$('#ground3').show();
				$('#ground4').show();
				$('#ground5').show();
				$('#ground6').show();
			}
		});
	});

	$(function() {
		$('#jumlahroof').change(function() {
			var input = $('#jumlahroof').val();
			if (input == "1") {
				$('#roof1').show();
				$('#roof2').hide();
				$('#roof3').hide();
				$('#roof4').hide();
				$('#roof5').hide();
				$('#roof6').hide();
			}else if (input == "2"){
				$('#roof1').show();
				$('#roof2').show();
				$('#roof3').hide();
				$('#roof4').hide();
				$('#roof5').hide();
				$('#roof6').hide();
			}else if (input == "3"){
				$('#roof1').show();
				$('#roof2').show();
				$('#roof3').show();
				$('#roof4').hide();
				$('#roof5').hide();
				$('#roof6').hide();
			}else if (input == "4"){
				$('#roof1').show();
				$('#roof2').show();
				$('#roof3').show();
				$('#roof4').show();
				$('#roof5').hide();
				$('#roof6').hide();
			}else if (input == "5"){
				$('#roof1').show();
				$('#roof2').show();
				$('#roof3').show();
				$('#roof4').show();
				$('#roof5').show();
				$('#roof6').hide();
			}else if (input == "6"){
				$('#roof1').show();
				$('#roof2').show();
				$('#roof3').show();
				$('#roof4').show();
				$('#roof5').show();
				$('#roof6').show();
			}
		});
	});
</script>
<script type="text/javascript">
	$('.jum-rata').on('input','.jumlah',function(){
		var totalSum = 0;
		$('.jum-rata .jumlah').each(function(){
			var inputVal = $(this).val();
			if ($.isNumeric(inputVal)) {
				totalSum += parseFloat(inputVal);
			}
		});
		$('#result').text(totalSum);
	});
	$('.jum-puncak').on('input','.jumlahpuncak',function(){
		var totalSum = 0;
		$('.jum-puncak .jumlahpuncak').each(function(){
			var inputVal = $(this).val();
			if ($.isNumeric(inputVal)) {
				totalSum += parseFloat(inputVal);
			}
		});
		$('#resultpuncak').text(totalSum);
	});
</script>
<script type="text/javascript">
	$(document).ready(function () {

		var navListItems = $('div.setup-panel div a'),
		allWells = $('.setup-content'),
		allNextBtn = $('.nextBtn');

		allWells.hide();

		navListItems.click(function (e) {
			e.preventDefault();
			var $target = $($(this).attr('href')),
			$item = $(this);

			if (!$item.hasClass('disabled')) {
				navListItems.removeClass('btn-primary').addClass('btn-default');
				$item.addClass('btn-primary');
				allWells.hide();
				$target.show();
				$target.find('input:eq(0)').focus();
			}
		});

		allNextBtn.click(function(){
			var curStep = $(this).closest(".setup-content"),
			curStepBtn = curStep.attr("id"),
			nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
			curInputs = curStep.find("input[type='text'],input[type='email'],input[type='number'],input[type='url']"),
			curTexts = curStep.find("textarea,textarea[type='url']"),
			isValid = true;

			$(".form-group").removeClass("has-error");
			for(var i=0; i<curInputs.length; i++){
				if (!curInputs[i].validity.valid){
					isValid = false;
					$(curInputs[i]).closest(".form-group").addClass("has-error");
					$(curTexts[i]).closest(".form-group").addClass("has-error");
				}
			}

			if (isValid)
				nextStepWizard.removeAttr('disabled').trigger('click');
		});

		$('div.setup-panel div a.btn-primary').trigger('click');
	});
</script>
</body>
</html>