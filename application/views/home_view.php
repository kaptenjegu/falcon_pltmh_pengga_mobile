<div class="row">

	<div class="alert alert-block alert-success">
		<!--i class="ace-icon fa fa-check green"></i-->
		<marquee>Selamat datang di aplikasi Monitoring PLTMH Pengga</b>.</marquee>
	</div>

	<div class="col-xs-12">

		<div class="widget-box">
			<div class="widget-header widget-header-flat">
				<h4 class="widget-title lighter">
					<i class="ace-icon fa fa-star orange"></i>
					Information
				</h4>
			</div>

			<div class="widget-body">
				<div class="widget-main">
					<div class="col-sm-5">
						<div class="widget-box transparent">
							<div class="widget-body">
								<div class="widget-main no-padding">
									<table class="table table-bordered table-striped">
										<tbody>
											<tr>
												<td>Alarm Status</td>

												<td>
													<span class="label label-success arrowed arrowed-right">No Alarm</span>
												</td>
											</tr>

											<tr>
												<td>Turbine Status</td>

												<td>
													<span class="label label-success arrowed arrowed-right">Running</span>
												</td>
											</tr>

											<tr>
												<td>CB Status</td>

												<td>
													<b class="label label-default arrowed arrowed-right">Close</b>
												</td>
											</tr>


										</tbody>
									</table>
								</div><!-- /.widget-main -->
							</div><!-- /.widget-body -->
						</div><!-- /.widget-box -->
					</div>
				</div><!-- /.widget-main -->
			</div><!-- /.widget-body -->
		</div><!-- /.widget-box -->
	</div><!-- /.col -->
	<!--div class="col-xs-2"></div-->

	<div class="col-xs-12">
		<center>
			<a href="<?= base_url('overview'); ?>" class="btn btn-app btn-purple radius-4">
				<i class="ace-icon fa fa-desktop bigger-230"></i>
				Overview
			</a>
			<a href="<?= base_url('turbine'); ?>" class="btn btn-app btn-purple radius-4">
				<i class="ace-icon fa fa-cogs bigger-230"></i>
				Turbine
			</a>

			<a href="<?= base_url('generators'); ?>" class="btn btn-app btn-purple radius-4">
				<i class="ace-icon fa fa-cog bigger-530"></i>
				Generator
			</a>
			<a href="<?= base_url('alarm'); ?>" class="btn btn-app btn-purple radius-4">
				<i class="ace-icon fa fa-bell-o bigger-530"></i>
				Alarm
			</a>

		</center>
	</div>

	<!--div class="col-xs-2"></div-->
</div>