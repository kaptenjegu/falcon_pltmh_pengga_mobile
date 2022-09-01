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
		<?php if ($page == "alarm") { ?>
			setInterval(get_alarm, 10);
		<?php } ?>

		<?php if ($page == "overview") { ?>
			setInterval(get_home, 10);
		<?php } ?>

	</script>

	</body>

	</html>