	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<title>Polling System</title>

	<!--=== CSS ===-->

	<!-- Bootstrap -->
	<link href="<? echo BEGIN_PATH ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

	<!-- jQuery UI -->
	<!--<link href="<? echo BEGIN_PATH ?>/plugins/jquery-ui/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css" />-->
	<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="<? echo BEGIN_PATH ?>/plugins/jquery-ui/jquery.ui.1.10.2.ie.css"/>
	<![endif]-->

	<!-- Theme -->
	<link href="<? echo BEGIN_PATH ?>/assets/css/main.css" rel="stylesheet" type="text/css" />
	<link href="<? echo BEGIN_PATH ?>/assets/css/plugins.css" rel="stylesheet" type="text/css" />
	<link href="<? echo BEGIN_PATH ?>/assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="<? echo BEGIN_PATH ?>/assets/css/icons.css" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" href="<? echo BEGIN_PATH ?>/assets/css/fontawesome/font-awesome.min.css">
	<!--[if IE 7]>
		<link rel="stylesheet" href="assets/css/fontawesome/font-awesome-ie7.min.css">
	<![endif]-->

	<!--[if IE 8]>
		<link href="<? echo BEGIN_PATH ?>/assets/css/ie8.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

	<!--=== JavaScript ===-->

	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/assets/js/libs/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>

	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/assets/js/libs/lodash.compat.min.js"></script>

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="<? echo BEGIN_PATH ?>/assets/js/libs/html5shiv.js"></script>
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
	<!--[if lt IE 9]>
		<script type="text/javascript" src="plugins/flot/excanvas.min.js"></script>
	<![endif]-->
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/sparkline/jquery.sparkline.min.js"></script>
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/flot/jquery.flot.min.js"></script>
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/flot/jquery.flot.tooltip.min.js"></script>
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/flot/jquery.flot.resize.min.js"></script>
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/flot/jquery.flot.time.min.js"></script>
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/flot/jquery.flot.growraf.min.js"></script>
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/easy-pie-chart/jquery.easy-pie-chart.min.js"></script>

	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/daterangepicker/daterangepicker.js"></script>
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/blockui/jquery.blockUI.min.js"></script>

	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/fullcalendar/fullcalendar.min.js"></script>

	<!-- Noty -->
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/noty/jquery.noty.js"></script>
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/noty/layouts/top.js"></script>
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/noty/themes/default.js"></script>

	<!-- Forms -->
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/uniform/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/plugins/select2/select2.min.js"></script>

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
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/assets/js/demo/pages_calendar.js"></script>
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/assets/js/demo/charts/chart_filled_blue.js"></script>
	<script type="text/javascript" src="<? echo BEGIN_PATH ?>/assets/js/demo/charts/chart_simple.js"></script>