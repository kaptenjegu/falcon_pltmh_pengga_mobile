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
						&copy; 2022, Monitoring PLTMH Pengga
					</span>

				</div>
			</div>
		</div>
	</div><!-- /.main-container -->	

	<script src="<?= base_url('assets/js/jquery-2.1.4.min.js');?>"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js');?>"></script>
	<script src="<?= base_url('assets/js/jquery-ui.custom.min.js');?>"></script>
	<script src="<?= base_url('assets/js/jquery.ui.touch-punch.min.js');?>"></script>
	<script src="<?= base_url('assets/js/jquery.easypiechart.min.js');?>"></script>
	<script src="<?= base_url('assets/js/jquery.sparkline.index.min.js');?>"></script>
	<script src="<?= base_url('assets/js/jquery.flot.min.js');?>"></script>
	<script src="<?= base_url('assets/js/jquery.flot.pie.min.js');?>"></script>
	<script src="<?= base_url('assets/js/jquery.flot.resize.min.js');?>"></script>
	<script src="<?= base_url('assets/js/ace-elements.min.js');?>"></script>
	<script src="<?= base_url('assets/js/ace.min.js');?>"></script>

	<script src="<?= base_url();?>assets/js/jquery.dataTables.min.js"></script>
	<script src="<?= base_url();?>assets/js/jquery.dataTables.bootstrap.min.js"></script>
	<script src="<?= base_url();?>assets/js/dataTables.buttons.min.js"></script>
	<script src="<?= base_url();?>assets/js/buttons.flash.min.js"></script>
	<script src="<?= base_url();?>assets/js/buttons.html5.min.js"></script>
	<script src="<?= base_url();?>assets/js/buttons.print.min.js"></script>
	<script src="<?= base_url();?>assets/js/buttons.colVis.min.js"></script>
	<script src="<?= base_url();?>assets/js/dataTables.select.min.js"></script>

	<script src="<?= base_url();?>assets/js/chosen.jquery.min.js"></script>
	<script src="<?= base_url();?>assets/js/spinbox.min.js"></script>
	<script src="<?= base_url();?>assets/js/bootstrap-datepicker.min.js"></script>
	<script src="<?= base_url();?>assets/js/bootstrap-timepicker.min.js"></script>
	<script src="<?= base_url();?>assets/js/moment.min.js"></script>
	<script src="<?= base_url();?>assets/js/daterangepicker.min.js"></script>
	<script src="<?= base_url();?>assets/js/bootstrap-datetimepicker.min.js"></script>
	<script src="<?= base_url();?>assets/js/bootstrap-colorpicker.min.js"></script>
	<script src="<?= base_url();?>assets/js/jquery.knob.min.js"></script>
	<script src="<?= base_url();?>assets/js/autosize.min.js"></script>
	<script src="<?= base_url();?>assets/js/jquery.inputlimiter.min.js"></script>
	<script src="<?= base_url();?>assets/js/jquery.maskedinput.min.js"></script>
	<script src="<?= base_url();?>assets/js/bootstrap-tag.min.js"></script>


	<script src="<?= base_url();?>assets/js/jquery-ui.custom.min.js"></script>
	<script src="<?= base_url();?>assets/js/jquery.ui.touch-punch.min.js"></script>
	<script src="<?= base_url();?>assets/js/chosen.jquery.min.js"></script>
	<script src="<?= base_url();?>assets/js/spinbox.min.js"></script>
	<script src="<?= base_url();?>assets/js/bootstrap-datepicker.min.js"></script>
	<script src="<?= base_url();?>assets/js/bootstrap-timepicker.min.js"></script>
	<script src="<?= base_url();?>assets/js/moment.min.js"></script>
	<script src="<?= base_url();?>assets/js/daterangepicker.min.js"></script>
	<script src="<?= base_url();?>assets/js/bootstrap-datetimepicker.min.js"></script>
	<script src="<?= base_url();?>assets/js/bootstrap-colorpicker.min.js"></script>
	<script src="<?= base_url();?>assets/js/jquery.knob.min.js"></script>
	<script src="<?= base_url();?>assets/js/autosize.min.js"></script>
	<script src="<?= base_url();?>assets/js/jquery.inputlimiter.min.js"></script>
	<script src="<?= base_url();?>assets/js/jquery.maskedinput.min.js"></script>
	<script src="<?= base_url();?>assets/js/bootstrap-tag.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function () {
			table = $('#dataTables-data').DataTable({
			});
		});

		function get_alarm(){
			$.ajax({
				url : "<?php echo base_url().'alarm/data_out/'; ?>",
				type: "GET",
				dataType: "html",
				success: function(data){ 
				document.getElementById("alarm").innerHTML = data;      
				},
				error:function(data){
					console.log('gagal konek cb');
				}
			});

		}

		setInterval(get_alarm, 10);
	</script>
	
</body>

</html>