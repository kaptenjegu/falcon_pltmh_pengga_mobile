<div class="row">
	<div class="col-md-12">
		<!-- Advanced Tables -->
		<? //= $pesan 
		?>
		<div class="panel panel-default">
			<div class="panel-body">
				<?php if ($_SESSION['role'] == 3 and $_SESSION['id_kantor'] == 1) { ?>
					<a href="<?= base_url('pengajuan/manage'); ?>" class="btn btn-xs btn-primary">
						<i class="glyphicon glyphicon-plus "></i> Tambah Usulan</a>
					<br>
					<br>
				<?php } ?>
				<div class="table-responsive">
					<!--table class="table table-striped table-bordered table-hover" id="dataTables-example"-->
					<table class="table table-striped table-bordered table-hover" id="dataTables-data">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Usulan</th>
								<th>Nomor PO</th>
								<th>Nomor BA</th>
								<th>Deadline</th>
								<th>Backlog</th>
								<th>Status</th>
								<!--th>Status Periksa</th-->
								<th>Opsi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							date_default_timezone_set('Asia/Jakarta');
							$no = 1;
							foreach ($barang as $v) {
								$deadline = view_riwayat($v->id_request, $v->id_status);
								$dl = date('d-m-Y', strtotime(view_riwayat($v->id_request, $v->id_status)));
								$bl = (strtotime(date('d-m-Y')) - strtotime($dl)) / 60 / 60 / 24;
								if ($bl <= 0) {
									$bl = '-';
								} else {
									$bl = $bl . ' Hari';
								}
								echo '<tr>
                                <th>' . $no . '</th>
                                <th>' . $v->nama_barang . '</th>
                                <th>' . $v->nomor_po . '</th>
                                <th>' . $v->nomor_ba . '</th>
                                <th>';
								if ($deadline <> "0000-00-00 00:00:00" and $deadline <> "-") {
									echo date('d-m-Y H:i', strtotime(view_riwayat($v->id_request, $v->id_status)));
									
									//echo $deadline;
									//echo 
								}/*elseif($deadline=="- "){
								echo '-';
							}*/ else {
									echo '-';
									$bl = '-';
								}


								echo ' </th><th>' . $bl . '</th><th>' . $v->nama_status . '</th><th>';

								if ($_SESSION['role'] == 3 and $_SESSION['id_kantor'] == 1) {
									if ($v->id_status == 1 or $v->id_status == 11 or $v->id_status == 13 or $v->id_status == 25 or $v->id_status == 28) {
										echo ' <a href="' . base_url($url . '/manage/' . $v->id_request) . '" class="btn btn-sm btn-primary">Detail</a>';
									}
									if ($v->id_status == 3) {
										echo ' <a href="' . base_url($url . '/hapus/' . $v->id_request) . '" onclick="return confirm(\'Hapus Pengingat Usulan ' . $v->nama_barang . '?\')" class="btn btn-sm btn-danger">Hapus</a>';
									}
								} elseif ($_SESSION['role'] == 1 and $_SESSION['id_kantor'] == 1) {
									if ($v->id_status == 13 or $v->id_status == 25 or $v->id_status == 28) {
										echo '';
									} else {
										echo ' <a href="' . base_url($url . '/manage/' . $v->id_request) . '" class="btn btn-sm btn-primary">Detail</a>';
									}
								} else {
									if ($edit) {
										echo ' <a href="' . base_url($url . '/manage/' . $v->id_request) . '" class="btn btn-sm btn-primary">Detail</a>';
									}
								}

								if ($v->id_status == 37) {
									if (date('Y-m-d') == date('Y-m-d', strtotime(view_riwayat($v->id_request, $v->id_status)))) {
										hapus_karantina($v->id_request);
									}
								}

								echo '</th></tr>';
								$no += 1;
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!--End Advanced Tables -->
	</div>
</div>