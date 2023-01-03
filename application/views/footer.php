
<!--   Core JS Files   -->
<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/js/moment.min.js') ?>"></script>
<script src="<?= base_url('assets/js/daterangepicker.min.js') ?>"></script>
<!--   Core JS Files   -->


	<script type="text/javascript">
		
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
			//overview
			$.ajax({
				url: "<?php echo base_url() . 'api_client/ov_data/'; ?>",
				type: "GET",
				dataType: "json",
				success: function(data) {
					document.getElementById("active_power").innerHTML = data['active_power'] + ' kW';
					document.getElementById("voltage").innerHTML = data['voltage'] + ' V';
					document.getElementById("current").innerHTML = data['current'] + ' A';
					document.getElementById("frequency").innerHTML = data['frequency'] + ' Hz';
					if(data['gen_faktor_daya'] >= 1){
						document.getElementById("gen_faktor_daya").innerHTML = '-' + data['gen_faktor_daya'];
					}else{
						document.getElementById("gen_faktor_daya").innerHTML = data['gen_faktor_daya'];
					}
					document.getElementById("turbine_speed").innerHTML = data['turbine_speed'] + ' rpm';
					document.getElementById("penstock_pressure").innerHTML = data['penstock_pressure'] + ' mWC';
					document.getElementById("governor_oil").innerHTML = data['governor_oil'] + ' bar';
					document.getElementById("governor_position").innerHTML = data['governor_position'] + ' mm';
					document.getElementById("water_level").innerHTML = data['water_level'] + ' mdpl';
					
					if (data['open_feedback_cb'] == 1) {
						document.getElementById("open_feedback_cb").style.backgroundColor = "green";
						document.getElementById("feedback_distribusi").style.backgroundColor = "green";
					} else {
						document.getElementById("open_feedback_cb").style.backgroundColor = "red";
						document.getElementById("feedback_distribusi").style.backgroundColor = "red";
					}

					if (data['on_feedback_exc'] == 1) {
						document.getElementById("on_feedback_exc").style.backgroundColor = "green";
						document.getElementById("status_generator").style.backgroundColor = "green";
					} else {
						document.getElementById("on_feedback_exc").style.backgroundColor = "red";
						document.getElementById("status_generator").style.backgroundColor = "red";
					}
				},
				error: function(data) {
					console.log('gagal konek OV Mobile');
				}
			});

			//n_alarm
			$.ajax({
			url: "<?php echo base_url() . 'home/n_alarm/'; ?>",
			type: "GET",
			dataType: "json",
			success: function (data) {
				if (data > 0) {
				document.getElementById("status_alarm").style = "text-align:center;margin-top: 900px; background-color: red;width: 175px;font-size: 20px;z-index: 1;position: absolute;font-weight: bold;animation: blinker 1s linear infinite;";
				} else {
				document.getElementById("status_alarm").style = "display: none;";
				}
			},
			error: function (data) {
				console.log('gagal konek n_alarm - home');
			}
			});
		}

		function get_turbine() {
			$.ajax({
				url: "<?php echo base_url() . 'api_client/ov_data/'; ?>",
				type: "GET",
				dataType: "json",
				cache: false,
				success: function(data) {
					document.getElementById("turbine_speed").innerHTML = data['turbine_speed'] + ' RPM';
					document.getElementById("inlet_pressure").innerHTML = data['inlet_pressure'] + ' mWC';
					document.getElementById("penstock_pressure").innerHTML = data['penstock_pressure'] + ' mWC';
					document.getElementById("governor_position").innerHTML = data['governor_position'] + ' mm';
					document.getElementById("water_level").innerHTML = data['water_level'] + ' mdpl';
					document.getElementById("governor_oil").innerHTML = data['governor_oil'] + ' bar';
					document.getElementById("volt_exc").innerHTML = data['volt_exc'] + " VDC";
				},
				error: function(data) {
					console.log('gagal konek turbine');
				}
			});


		}

		function get_generator() {
			$.ajax({
				url: "<?php echo base_url() . 'api_client/ov_data/'; ?>",
				type: "GET",
				dataType: "json",
				cache: false,
				success: function(data) {
					document.getElementById("gen_vrs").innerHTML = data['gen_vrs'] + ' V';
					document.getElementById("gen_vst").innerHTML = data['gen_vst'] + ' V';
					document.getElementById("gen_vtr").innerHTML = data['gen_vtr'] + ' V';
					document.getElementById("gen_ir").innerHTML = data['gen_ir'] + ' A';
					document.getElementById("gen_is").innerHTML = data['gen_is'] + ' A';
					document.getElementById("gen_it").innerHTML = data['gen_it'] + ' A';
					document.getElementById("gen_daya_aktif").innerHTML = data['gen_daya_aktif'] + ' KW';
					document.getElementById("gen_daya_reaktif").innerHTML = data['gen_daya_reaktif'] + ' KVAR';
					document.getElementById("gen_daya_semu").innerHTML = data['gen_daya_semu'] + ' KVA';
					document.getElementById("gen_frequency").innerHTML = data['gen_frequency'] + ' Hz';
					if(data['gen_faktor_daya'] >= 1){
						document.getElementById("gen_faktor_daya").innerHTML = '-' + data['gen_faktor_daya'];
					}else{
						document.getElementById("gen_faktor_daya").innerHTML = data['gen_faktor_daya'];
					}

					document.getElementById("line_vrs").innerHTML = data['line_vrs'] + ' V';
					document.getElementById("line_vst").innerHTML = data['line_vst'] + ' V';
					document.getElementById("line_vtr").innerHTML = data['line_vtr'] + ' V';
					document.getElementById("line_ir").innerHTML = data['line_ir'] + ' A';
					document.getElementById("line_is").innerHTML = data['line_is'] + ' A';
					document.getElementById("line_it").innerHTML = data['line_it'] + ' A';
					document.getElementById("line_daya_aktif").innerHTML = data['line_daya_aktif'] + ' KW';
					document.getElementById("line_daya_reaktif").innerHTML = data['line_daya_reaktif'] + ' KVAR';
					document.getElementById("line_daya_semu").innerHTML = data['line_daya_semu'] + ' KVA';
					document.getElementById("line_frequency").innerHTML = data['line_frequency'] + ' Hz';
					document.getElementById("line_faktor_daya").innerHTML = data['line_faktor_daya'] + '';
				},
				error: function(data) {
					console.log('gagal konek generators');
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
		<?php if ($page == "home") { ?>
			setInterval(get_home, 1000);
		<?php } ?>
	</script>

	</body>

	</html>