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
			curInputs = curStep.find("input[type='text'],input[type='email'],input[type='number'],input[type='checkbox'],input[type='radio'],input[type='url']"),
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