<script type="text/javascript" src="<?php echo base_url('assets/js/jq.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap-datepicker.min.js'); ?>"></script>
<script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
<script src="https://cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.8/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/toastr.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bangunan.js'); ?>"></script>
<!-- <script type="text/javascript">
	(function() {

  // Definition of caller element
  var getTriggerElement = function(el) {
    var isCollapse = el.getAttribute('data-collapse');
    if (isCollapse !== null) {
      return el;
    } else {
      var isParentCollapse = el.parentNode.getAttribute('data-collapse');
      return (isParentCollapse !== null) ? el.parentNode : undefined;
    }
  };

  // A handler for click on toggle button
  var collapseClickHandler = function(event) {
    var triggerEl = getTriggerElement(event.target);
    // If trigger element does not exist
    if (triggerEl === undefined) {
      event.preventDefault();
      return false;
    }

    // If the target element exists
    var targetEl = document.querySelector(triggerEl.getAttribute('data-target'));
    if (targetEl) {
      triggerEl.classList.toggle('-active');
      targetEl.classList.toggle('-on');
    }
  };

  // Delegated event
  document.addEventListener('click', collapseClickHandler, false);

})(document, window);
</script> -->
</body>
</html>