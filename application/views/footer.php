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
				success: function(data) {
					document.getElementById("alarm").innerHTML = data;
				},
				error: function(data) {
					console.log('gagal konek cb');
				}
			});

		}

		function get_home() {
			//ASP var
			$.ajax({
				url: "<?php echo base_url() . 'overview/ov_asp/'; ?>",
				type: "GET",
				dataType: "json",
				success: function(data) {
					if (data['1'] == 1) {
						document.getElementById("prm1").style.backgroundColor = "green";
					} else {
						document.getElementById("prm1").style.backgroundColor = "gray";
					}
					if (data['2'] == 1) {
						document.getElementById("prm2").style.backgroundColor = "green";
					} else {
						document.getElementById("prm2").style.backgroundColor = "gray";
					}
					if (data['3'] == 1) {
						document.getElementById("prm3").style.backgroundColor = "green";
					} else {
						document.getElementById("prm3").style.backgroundColor = "gray";
					}
					if (data['4'] == 1) {
						document.getElementById("prm4").style.backgroundColor = "green";
					} else {
						document.getElementById("prm4").style.backgroundColor = "gray";
					}
					if (data['5'] == 1) {
						document.getElementById("prm5").style.backgroundColor = "green";
					} else {
						document.getElementById("prm5").style.backgroundColor = "gray";
					}
					if (data['6'] == 1) {
						document.getElementById("prm6").style.backgroundColor = "green";
					} else {
						document.getElementById("prm6").style.backgroundColor = "gray";
					}
					if (data['7'] == 1) {
						document.getElementById("prm7").style.backgroundColor = "green";
					} else {
						document.getElementById("prm7").style.backgroundColor = "gray";
					}
				},
				error: function(data) {
					console.log('gagal konek ov asp');
				}
			});

			//SEQ Start
			$.ajax({
				url: "<?php echo base_url() . 'overview/seq_start/'; ?>",
				type: "GET",
				dataType: "json",
				success: function(data) {
					if (data['1'] == 1) {
						document.getElementById("sq_start1").style.backgroundColor = "green";
					} else {
						document.getElementById("sq_start1").style.backgroundColor = "gray";
					}
					if (data['2'] == 1) {
						document.getElementById("sq_start2").style.backgroundColor = "green";
					} else {
						document.getElementById("sq_start2").style.backgroundColor = "gray";
					}
					if (data['3'] == 1) {
						document.getElementById("sq_start3").style.backgroundColor = "green";
					} else {
						document.getElementById("sq_start3").style.backgroundColor = "gray";
					}
					if (data['4'] == 1) {
						document.getElementById("sq_start4").style.backgroundColor = "green";
					} else {
						document.getElementById("sq_start4").style.backgroundColor = "gray";
					}
					if (data['5'] == 1) {
						document.getElementById("sq_start5").style.backgroundColor = "green";
					} else {
						document.getElementById("sq_start5").style.backgroundColor = "gray";
					}
					if (data['6'] == 1) {
						document.getElementById("sq_start6").style.backgroundColor = "green";
					} else {
						document.getElementById("sq_start6").style.backgroundColor = "gray";
					}
					if (data['7'] == 1) {
						document.getElementById("sq_start7").style.backgroundColor = "green";
					} else {
						document.getElementById("sq_start7").style.backgroundColor = "gray";
					}
					if (data['8'] == 1) {
						document.getElementById("sq_start8").style.backgroundColor = "green";
					} else {
						document.getElementById("sq_start8").style.backgroundColor = "gray";
					}
					if (data['9'] == 1) {
						document.getElementById("sq_start9").style.backgroundColor = "green";
					} else {
						document.getElementById("sq_start9").style.backgroundColor = "gray";
					}
				},
				error: function(data) {
					console.log('gagal konek seq start');
				}
			});

			//SEQ Stop
			$.ajax({
				url: "<?php echo base_url() . 'overview/seq_stop/'; ?>",
				type: "GET",
				dataType: "json",
				success: function(data) {
					if (data['1'] == 1) {
						document.getElementById("sq_stop1").style.backgroundColor = "green";
					} else {
						document.getElementById("sq_stop1").style.backgroundColor = "gray";
					}
					if (data['2'] == 1) {
						document.getElementById("sq_stop2").style.backgroundColor = "green";
					} else {
						document.getElementById("sq_stop2").style.backgroundColor = "gray";
					}
					if (data['3'] == 1) {
						document.getElementById("sq_stop3").style.backgroundColor = "green";
					} else {
						document.getElementById("sq_stop3").style.backgroundColor = "gray";
					}
					if (data['4'] == 1) {
						document.getElementById("sq_stop4").style.backgroundColor = "green";
					} else {
						document.getElementById("sq_stop4").style.backgroundColor = "gray";
					}

				},
				error: function(data) {
					console.log('gagal konek seq stop');
				}
			});
		}

		function get_turbine() {
			$.ajax({
				url: "<?php echo base_url() . 'turbine/data_out/'; ?>",
				type: "GET",
				dataType: "json",
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

			//Gate Valve
			$.ajax({
				url: "<?php echo base_url() . 'turbine/gate_valve/'; ?>",
				type: "GET",
				dataType: "json",
				success: function(data) {
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
					} else {
						document.getElementById("auto_status_gv").style.backgroundColor = "gray";
					}

					if (data['manual_status_gv'] == 1) {
						document.getElementById("manual_status_gv").style.backgroundColor = "green";
					} else {
						document.getElementById("manual_status_gv").style.backgroundColor = "gray";
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
				},
				error: function(data) {
					console.log('gagal konek');
				}
			});

			//Gov gear mode
			$.ajax({
				url: "<?php echo base_url() . 'turbine/ggear_mode/'; ?>",
				type: "GET",
				dataType: "json",
				success: function(data) {
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
					} else {
						document.getElementById("auto_status_ggm").style.backgroundColor = "gray";
					}

					if (data['manual_status_ggm'] == 1) {
						document.getElementById("manual_status_ggm").style.backgroundColor = "green";
					} else {
						document.getElementById("manual_status_ggm").style.backgroundColor = "gray";
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
				},
				error: function(data) {
					console.log('gagal konek');
				}
			});

			//Gov hyd mode
			$.ajax({
				url: "<?php echo base_url() . 'turbine/ghyd_mode/'; ?>",
				type: "GET",
				dataType: "json",
				success: function(data) {
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
					} else {
						document.getElementById("auto_status_ghm").style.backgroundColor = "gray";
					}

					if (data['manual_status_ghm'] == 1) {
						document.getElementById("manual_status_ghm").style.backgroundColor = "green";
					} else {
						document.getElementById("manual_status_ghm").style.backgroundColor = "gray";
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


		<?php if ($page == "alarm") { ?>
			setInterval(get_alarm, 10);
		<?php } ?>
		<?php if ($page == "turbine") { ?>
			setInterval(get_turbine, 10);
		<?php } ?>

		<?php if ($page == "overview") { ?>
			setInterval(get_home, 10);
		<?php } ?>
	</script>

	</body>

	</html>