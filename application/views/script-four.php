	<!--=== JavaScript ===-->
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>

	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/assets/js/libs/lodash.compat.min.js"></script>

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="assets/js/libs/html5shiv.js"></script>
	<![endif]-->

	<!-- Smartphone Touch Events -->
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/touchpunch/jquery.ui.touch-punch.min.js"></script>
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/event.swipe/jquery.event.move.js"></script>
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/event.swipe/jquery.event.swipe.js"></script>

	<!-- General -->
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/assets/js/libs/breakpoints.js"></script>
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/respond/respond.min.js"></script> <!-- Polyfill for min/max-width CSS3 Media Queries (only for IE8) -->
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/cookie/jquery.cookie.min.js"></script>
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/slimscroll/jquery.slimscroll.horizontal.min.js"></script>

	<!-- Page specific plugins -->
	<!-- Charts -->
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/sparkline/jquery.sparkline.min.js"></script>

	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/daterangepicker/daterangepicker.js"></script>
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/blockui/jquery.blockUI.min.js"></script>

	<!-- Pickers -->
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/pickadate/picker.js"></script>
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/pickadate/picker.date.js"></script>
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/pickadate/picker.time.js"></script>
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>

	<!-- Noty -->
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/noty/jquery.noty.js"></script>
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/noty/layouts/top.js"></script>
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/noty/themes/default.js"></script>

	<!-- Slim Progress Bars -->
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/nprogress/nprogress.js"></script>

	<!-- Bootbox -->
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/bootbox/bootbox.js"></script>

	<!-- App -->
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/assets/js/app.js"></script>
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/assets/js/plugins.js"></script>
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/assets/js/plugins.form-components.js"></script>

	<script>
	$(document).ready(function(){
		"use strict";

		App.init(); // Init layout and core plugins
		Plugins.init(); // Init all plugins
		FormComponents.init(); // Init all form-specific plugins
	});
	</script>

	<!-- Demo JS -->
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/assets/js/custom.js"></script>
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/assets/js/demo/ui_general.js"></script>