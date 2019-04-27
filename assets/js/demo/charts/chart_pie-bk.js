/*
 * charts/chart_pie.js
 *
 * Demo JavaScript used on charts-page for "Pie Chart".
 */

"use strict";

$(document).ready(function(){

	// Sample Data
	var d_pie = [];

    d_pie[0] = { label: "Invited", data:"50" }
	d_pie[1] = { label: "RSVP No", data:"30" }
	d_pie[2] = { label: "RSVP Yes", data:"70" }

	$.plot("#chart_pie", d_pie, $.extend(true, {}, Plugins.getFlotDefaults(), {
		series: {
			pie: {
				show: true,
				radius: 1,
				label: {
					show: true
				}
			}
		},
		grid: {
			hoverable: true
		},
		tooltip: true,
		tooltipOpts: {
			content: '%p.0%, %s', // show percentages, rounding to 2 decimal places
			shifts: {
				x: 20,
				y: 0
			}
		}
	}));
	
		$.plot("#chart_pie2", d_pie, $.extend(true, {}, Plugins.getFlotDefaults(), {
		series: {
			pie: {
				show: true,
				radius: 1,
				label: {
					show: true
				}
			}
		},
		grid: {
			hoverable: true
		},
		tooltip: true,
		tooltipOpts: {
			content: '%p.0%, %s', // show percentages, rounding to 2 decimal places
			shifts: {
				x: 20,
				y: 0
			}
		}
	}));
	

});