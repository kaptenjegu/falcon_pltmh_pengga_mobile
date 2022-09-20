	<!-- PAGE CONTENT ENDS -->
	</div><!-- /.col -->
	</div><!-- /.row -->
	</div><!-- /.page-content -->
	</div>
	</div><!-- /.main-content -->

	<div class="footer">
		<div class="footer-inner">
			<div class="footer-content">
				<span class="bigger-90">
					&copy; 2022 Monitoring PLTMH Pengga
				</span>

			</div>
		</div>
	</div>
	</div><!-- /.main-container -->

	<script src="<?= base_url('assets/js/jquery-2.1.4.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/jquery-ui.custom.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/jquery.ui.touch-punch.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/jquery.easypiechart.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/jquery.sparkline.index.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/jquery.flot.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/jquery.flot.pie.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/jquery.flot.resize.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/ace-elements.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/ace.min.js'); ?>"></script>

	<script src="<?= base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/jquery.dataTables.bootstrap.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/dataTables.buttons.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/buttons.flash.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/buttons.html5.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/buttons.print.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/buttons.colVis.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/dataTables.select.min.js"></script>

	<script src="<?= base_url(); ?>assets/js/chosen.jquery.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/spinbox.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/bootstrap-datepicker.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/bootstrap-timepicker.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/moment.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/daterangepicker.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/bootstrap-datetimepicker.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/bootstrap-colorpicker.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/jquery.knob.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/autosize.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/jquery.inputlimiter.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/jquery.maskedinput.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/bootstrap-tag.min.js"></script>


	<script src="<?= base_url(); ?>assets/js/jquery-ui.custom.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/jquery.ui.touch-punch.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/chosen.jquery.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/spinbox.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/bootstrap-datepicker.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/bootstrap-timepicker.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/moment.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/daterangepicker.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/bootstrap-datetimepicker.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/bootstrap-colorpicker.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/jquery.knob.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/autosize.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/jquery.inputlimiter.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/jquery.maskedinput.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/bootstrap-tag.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			table = $('#dataTables-data').DataTable({});
		});

		function get_alarm() {
			$.ajax({
				url: "<?php echo base_url() . 'alarm/data_out/'; ?>",
				type: "GET",
				dataType: "html",
				cache: false,
				success: function(data) {
					document.getElementById("alarm").innerHTML = data;
				},
				error: function(data) {
					console.log('gagal konek alarm');
				}
			});

		}

		function get_home() {
			$.ajax({
				url: "<?php echo base_url() . 'api_client/ov_data/'; ?>",
				type: "GET",
				dataType: "json",
				success: function(data) {
					//ASP var
					if (data['prm1'] == 1) {
						document.getElementById("prm1").style.backgroundColor = "green";
					} else {
						document.getElementById("prm1").style.backgroundColor = "gray";
					}
					if (data['prm2'] == 1) {
						document.getElementById("prm2").style.backgroundColor = "green";
					} else {
						document.getElementById("prm2").style.backgroundColor = "gray";
					}
					if (data['prm3'] == 1) {
						document.getElementById("prm3").style.backgroundColor = "green";
					} else {
						document.getElementById("prm3").style.backgroundColor = "gray";
					}
					if (data['prm4'] == 1) {
						document.getElementById("prm4").style.backgroundColor = "green";
					} else {
						document.getElementById("prm4").style.backgroundColor = "gray";
					}
					if (data['prm5'] == 1) {
						document.getElementById("prm5").style.backgroundColor = "green";
					} else {
						document.getElementById("prm5").style.backgroundColor = "gray";
					}
					if (data['prm6'] == 1) {
						document.getElementById("prm6").style.backgroundColor = "green";
					} else {
						document.getElementById("prm6").style.backgroundColor = "gray";
					}
					if (data['prm7'] == 1) {
						document.getElementById("prm7").style.backgroundColor = "green";
					} else {
						document.getElementById("prm7").style.backgroundColor = "gray";
					}
					//SEQ Start
					if (data['sq_start1'] == 1) {
						document.getElementById("sq_start1").style.backgroundColor = "green";
					} else {
						document.getElementById("sq_start1").style.backgroundColor = "gray";
					}
					if (data['sq_start2'] == 1) {
						document.getElementById("sq_start2").style.backgroundColor = "green";
					} else {
						document.getElementById("sq_start2").style.backgroundColor = "gray";
					}
					if (data['sq_start3'] == 1) {
						document.getElementById("sq_start3").style.backgroundColor = "green";
					} else {
						document.getElementById("sq_start3").style.backgroundColor = "gray";
					}
					if (data['sq_start4'] == 1) {
						document.getElementById("sq_start4").style.backgroundColor = "green";
					} else {
						document.getElementById("sq_start4").style.backgroundColor = "gray";
					}
					if (data['sq_start5'] == 1) {
						document.getElementById("sq_start5").style.backgroundColor = "green";
					} else {
						document.getElementById("sq_start5").style.backgroundColor = "gray";
					}
					if (data['sq_start6'] == 1) {
						document.getElementById("sq_start6").style.backgroundColor = "green";
					} else {
						document.getElementById("sq_start6").style.backgroundColor = "gray";
					}
					if (data['sq_start7'] == 1) {
						document.getElementById("sq_start7").style.backgroundColor = "green";
					} else {
						document.getElementById("sq_start7").style.backgroundColor = "gray";
					}
					if (data['sq_start8'] == 1) {
						document.getElementById("sq_start8").style.backgroundColor = "green";
					} else {
						document.getElementById("sq_start8").style.backgroundColor = "gray";
					}
					if (data['sq_start9'] == 1) {
						document.getElementById("sq_start9").style.backgroundColor = "green";
					} else {
						document.getElementById("sq_start9").style.backgroundColor = "gray";
					}
					//SEQ Stop
					if (data['sq_stop1'] == 0) {
						document.getElementById("sq_stop1").style.backgroundColor = "green";
					} else {
						document.getElementById("sq_stop1").style.backgroundColor = "gray";
					}
					if (data['sq_stop2'] == 0) {
						document.getElementById("sq_stop2").style.backgroundColor = "green";
					} else {
						document.getElementById("sq_stop2").style.backgroundColor = "gray";
					}
					if (data['sq_stop3'] == 0) {
						document.getElementById("sq_stop3").style.backgroundColor = "green";
					} else {
						document.getElementById("sq_stop3").style.backgroundColor = "gray";
					}
					if (data['sq_stop4'] == 1) {
						document.getElementById("sq_stop4").style.backgroundColor = "green";
					} else {
						document.getElementById("sq_stop4").style.backgroundColor = "gray";
					}
				},
				error: function(data) {
					console.log('gagal konek Home Mobile');
				}
			});
		}

		function get_turbine() {
			$.ajax({
				url: "<?php echo base_url() . 'api_client/turbine_data/'; ?>",
				type: "GET",
				dataType: "json",
				cache: false,
				success: function(data) {
					document.getElementById("second_bearing").innerHTML = '<b>' + data['second_bearing'] + ' C</b>';
					document.getElementById("thrust_bearing").innerHTML = '<b>' + data['thrust_bearing'] + ' C</b>';
					document.getElementById("turbine_speed").innerHTML = '<b>' + data['turbine_speed'] + ' RPM</b>';
					document.getElementById("inlet_pressure").innerHTML = '<b>' + data['inlet_pressure'] + ' bar</b>';
					document.getElementById("governor_position").innerHTML = '<b>' + data['governor_position'] + ' %</b>';
					document.getElementById("water_level").innerHTML = '<b>' + data['water_level'] + ' mdpl</b>';
				},
				error: function(data) {
					console.log('gagal konek turbine');
				}
			});

			//variabel Turbine
			$.ajax({
				url: "<?php echo base_url() . 'api_client/turbine_var/'; ?>",
				type: "GET",
				dataType: "json",
				cache: false,
				success: function(data) {
					//Miv / Gate Valve
					if (data['permit_open_gv'] == 1) {
						document.getElementById("permit_open_gv").style.backgroundColor = "green";
					} else {
						document.getElementById("permit_open_gv").style.backgroundColor = "gray";
					}

					if (data['permit_close_gv'] == 1) {
						document.getElementById("permit_close_gv").style.backgroundColor = "green";
					} else {
						document.getElementById("permit_close_gv").style.backgroundColor = "gray";
					}

					if (data['remote_indication_gv'] == 1) {
						document.getElementById("remote_indication_gv").style.backgroundColor = "green";
					} else {
						document.getElementById("remote_indication_gv").style.backgroundColor = "gray";
					}

					if (data['auto_status_gv'] == 1) {
						document.getElementById("auto_status_gv").style.backgroundColor = "green";
						document.getElementById("manual_status_gv").style.backgroundColor = "gray";
					} else {
						document.getElementById("auto_status_gv").style.backgroundColor = "gray";
						document.getElementById("manual_status_gv").style.backgroundColor = "green";
					}

					if (data['open_feedback_gv'] == 1) {
						document.getElementById("open_feedback_gv").style.backgroundColor = "green";
					} else {
						document.getElementById("open_feedback_gv").style.backgroundColor = "gray";
					}

					if (data['close_feedback_gv'] == 1) {
						document.getElementById("close_feedback_gv").style.backgroundColor = "green";
					} else {
						document.getElementById("close_feedback_gv").style.backgroundColor = "gray";
					}

					if (data['trip_indication_gv'] == 1) {
						document.getElementById("trip_indication_gv").style.backgroundColor = "red";
					} else {
						document.getElementById("trip_indication_gv").style.backgroundColor = "gray";
					}

					//Gov Gear Mode
					if (data['permit_operation_ggm'] == 1) {
						document.getElementById("permit_operation_ggm").style.backgroundColor = "green";
					} else {
						document.getElementById("permit_operation_ggm").style.backgroundColor = "gray";
					}

					if (data['remote_indication_ggm'] == 1) {
						document.getElementById("remote_indication_ggm").style.backgroundColor = "green";
					} else {
						document.getElementById("remote_indication_ggm").style.backgroundColor = "gray";
					}

					if (data['auto_status_ggm'] == 1) {
						document.getElementById("auto_status_ggm").style.backgroundColor = "green";
						document.getElementById("manual_status_ggm").style.backgroundColor = "gray";
					} else {
						document.getElementById("auto_status_ggm").style.backgroundColor = "gray";
						document.getElementById("manual_status_ggm").style.backgroundColor = "green";
					}

					if (data['fault_indication_ggm'] == 1) {
						document.getElementById("fault_indication_ggm").style.backgroundColor = "red";
					} else {
						document.getElementById("fault_indication_ggm").style.backgroundColor = "gray";
					}

					if (data['underspeed_ggm'] == 1) {
						document.getElementById("underspeed_ggm").style.backgroundColor = "red";
					} else {
						document.getElementById("underspeed_ggm").style.backgroundColor = "gray";
					}

					//Gov Hyd Mode
					if (data['permit_operation_ghm'] == 1) {
						document.getElementById("permit_operation_ghm").style.backgroundColor = "green";
					} else {
						document.getElementById("permit_operation_ghm").style.backgroundColor = "gray";
					}

					if (data['remote_indication_ghm'] == 1) {
						document.getElementById("remote_indication_ghm").style.backgroundColor = "green";
					} else {
						document.getElementById("remote_indication_ghm").style.backgroundColor = "gray";
					}

					if (data['auto_status_ghm'] == 1) {
						document.getElementById("auto_status_ghm").style.backgroundColor = "green";
						document.getElementById("manual_status_ghm").style.backgroundColor = "gray";
					} else {
						document.getElementById("auto_status_ghm").style.backgroundColor = "gray";
						document.getElementById("manual_status_ghm").style.backgroundColor = "green";
					}

					if (data['fault_indication_ghm'] == 1) {
						document.getElementById("fault_indication_ghm").style.backgroundColor = "red";
					} else {
						document.getElementById("fault_indication_ghm").style.backgroundColor = "gray";
					}

					if (data['underspeed_ghm'] == 1) {
						document.getElementById("underspeed_ghm").style.backgroundColor = "red";
					} else {
						document.getElementById("underspeed_ghm").style.backgroundColor = "gray";
					}
				},
				error: function(data) {
					console.log('gagal konek');
				}
			});

		}

		function get_generator() {
			$.ajax({
				url: "<?php echo base_url() . 'api_client/generators_data/'; ?>",
				type: "GET",
				dataType: "json",
				cache: false,
				success: function(data) {
					document.getElementById("non_drive").innerHTML = '<b>' + data['non_drive'] + ' C</b>';
					document.getElementById("drive").innerHTML = '<b>' + data['drive'] + ' C</b>';
					document.getElementById("active_power").innerHTML = '<b>' + data['active_power'] + ' kW</b>';
					document.getElementById("voltage").innerHTML = '<b>' + data['voltage'] + ' kV</b>';
					document.getElementById("current").innerHTML = '<b>' + data['current'] + ' kA</b>';
					document.getElementById("frequency").innerHTML = '<b>' + data['frequency'] + ' Hz</b>';
				},
				error: function(data) {
					console.log('gagal konek');
				}
			});

			// Generator Variabel
			$.ajax({
				url: "<?php echo base_url() . 'api_client/generators_var/'; ?>",
				type: "GET",
				dataType: "json",
				cache: false,
				success: function(data) {
					// excitation
					if (data['permit_operation_exc'] == 1) {
						document.getElementById("permit_operation_exc").style.backgroundColor = "green";
					} else {
						document.getElementById("permit_operation_exc").style.backgroundColor = "gray";
					}

					if (data['remote_indication_exc'] == 1) {
						document.getElementById("remote_indication_exc").style.backgroundColor = "green";
					} else {
						document.getElementById("remote_indication_exc").style.backgroundColor = "gray";
					}

					if (data['auto_status_exc'] == 1) {
						document.getElementById("auto_status_exc").style.backgroundColor = "green";
						document.getElementById("manual_status_exc").style.backgroundColor = "gray";
					} else {
						document.getElementById("auto_status_exc").style.backgroundColor = "gray";
						document.getElementById("manual_status_exc").style.backgroundColor = "green";
					}

					if (data['on_feedback_exc'] == 1) {
						document.getElementById("on_feedback_exc").style.backgroundColor = "green";
						document.getElementById("off_feedback_exc").style.backgroundColor = "gray";
					} else {
						document.getElementById("on_feedback_exc").style.backgroundColor = "gray";
						document.getElementById("off_feedback_exc").style.backgroundColor = "green";
					}

					// synchron
					if (data['permit_operation_syn'] == 1) {
						document.getElementById("permit_operation_syn").style.backgroundColor = "green";
					} else {
						document.getElementById("permit_operation_syn").style.backgroundColor = "gray";
					}

					if (data['remote_indication_syn'] == 1) {
						document.getElementById("remote_indication_syn").style.backgroundColor = "green";
					} else {
						document.getElementById("remote_indication_syn").style.backgroundColor = "gray";
					}

					if (data['auto_status_syn'] == 1) {
						document.getElementById("auto_status_syn").style.backgroundColor = "green";
						document.getElementById("manual_status_syn").style.backgroundColor = "gray";
					} else {
						document.getElementById("auto_status_syn").style.backgroundColor = "gray";
						document.getElementById("manual_status_syn").style.backgroundColor = "green";
					}

					if (data['on_feedback_syn'] == 1) {
						document.getElementById("on_feedback_syn").style.backgroundColor = "green";
						document.getElementById("off_feedback_syn").style.backgroundColor = "gray";
					} else {
						document.getElementById("on_feedback_syn").style.backgroundColor = "gray";
						document.getElementById("off_feedback_syn").style.backgroundColor = "green";
					}

					// CB
					if (data['permit_operation_cb'] == 1) {
						document.getElementById("permit_operation_cb").style.backgroundColor = "green";
					} else {
						document.getElementById("permit_operation_cb").style.backgroundColor = "gray";
					}

					if (data['remote_indication_cb'] == 1) {
						document.getElementById("remote_indication_cb").style.backgroundColor = "green";
					} else {
						document.getElementById("remote_indication_cb").style.backgroundColor = "gray";
					}

					if (data['auto_status_cb'] == 1) {
						document.getElementById("auto_status_cb").style.backgroundColor = "green";
						document.getElementById("manual_status_cb").style.backgroundColor = "gray";
					} else {
						document.getElementById("auto_status_cb").style.backgroundColor = "gray";
						document.getElementById("manual_status_cb").style.backgroundColor = "green";
					}

					if (data['open_feedback_cb'] == 1) {
						document.getElementById("open_feedback_cb").style.backgroundColor = "green";
						document.getElementById("close_feedback_cb").style.backgroundColor = "gray";
					} else {
						document.getElementById("open_feedback_cb").style.backgroundColor = "gray";
						document.getElementById("close_feedback_cb").style.backgroundColor = "green";
					}

					if (data['trip_indication_cb'] == 1) {
						document.getElementById("trip_indication_cb").style.backgroundColor = "red";
					} else {
						document.getElementById("trip_indication_cb").style.backgroundColor = "gray";
					}
				},
				error: function(data) {
					console.log('gagal konek generator');
				}
			});
			
		}

		function get_dashboard(){
			//n_alarm
			$.ajax({
			url: "<?php echo base_url() . 'api_client/dashboard/'; ?>",
			type: "GET",
			dataType: "json",
			success: function (data) {
				if (data['n_alarm'] == 0) {
					document.getElementById("dash_alarm").innerHTML = '<span class="label label-success arrowed arrowed-right">No Alarm</span>';
				} else {
					document.getElementById("dash_alarm").innerHTML = '<span class="label label-danger arrowed arrowed-right">Alarm</span>';
				}

				if (data['turbin'] > 0) {
					document.getElementById("dash_turbin").innerHTML = '<span class="label label-success arrowed arrowed-right">Running</span>';
				} else {
					document.getElementById("dash_turbin").innerHTML = '<span class="label label-default arrowed arrowed-right">Not Running</span>';
				}

				if (data['cb'] == 1) {
					document.getElementById("dash_cb").innerHTML = '<span class="label label-success arrowed arrowed-right">Open</span>';
				} else {
					document.getElementById("dash_cb").innerHTML = '<b class="label label-default arrowed arrowed-right">Close</b>';
				}
			},
			error: function (data) {
				console.log('gagal konek n_alarm');
			}
			});
		}

		<?php if ($page == "alarm") { ?>
			setInterval(get_alarm, 1000);
		<?php } ?>
		<?php if ($page == "turbine") { ?>
			setInterval(get_turbine, 1000);
		<?php } ?>
		<?php if ($page == "generators") { ?>
			setInterval(get_generator, 1000);
		<?php } ?>
		<?php if ($page == "overview") { ?>
			setInterval(get_home, 1000);
		<?php } ?>
		<?php if ($page == "home") { ?>
			setInterval(get_dashboard, 1000);
		<?php } ?>
	</script>

	</body>

	</html>