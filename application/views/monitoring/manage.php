<div class="row">
    <div class="col-md-12">
    <!-- Advanced Tables -->
        <div class="panel panel-default">
		<center><h3><b>Detail Usulan</b></h3></center>
            <div class="panel-body">
                <form method="POST" action="<?= base_url('approve/saveData') ?>">
					<input type="hidden" value="<?= $barang->id_request ?>" name="id_request">
					<div class="form-group">
                        <label>Nama Usulan</label>
                        <input type="text" class="form-control" name="nama_barang" value="<?= $barang->nama_barang ?>" disabled>
                    </div>
					<div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" disabled><?= $barang->deskripsi ?></textarea>
                    </div>
					<div class="form-group">
                        <label>Jenis</label>
                        <input type="text" class="form-control" value="<?= $barang->nama_jenis ?>" disabled>
                    </div>
					<div class="form-group">
                        <label>Kategori</label>
                        <input type="text" class="form-control" value="<?= $barang->nama_kategori ?>" disabled>
                    </div>
					<div class="form-group">
                        <label>Jenis Anggaran</label>
                        <input type="text" class="form-control" value="<?= $barang->nama_jenis_anggaran ?>" disabled>
                    </div>
					<div class="form-group">
                        <label>Anggaran Tahun</label>
                        <input type="text" class="form-control" value="<?= $barang->anggaran ?>" disabled>
                    </div>
					<div class="form-group">
                        <label>Tanggal barang dibutuhkan</label>
                        <input type="text"class="form-control" name="deadline" value="<?= date('d-m-Y', strtotime($barang->deadline)) ?>" disabled>
                    </div>
					<div class="form-group">
                        <label>Status</label>
                        <input type="text" class="form-control" value="<?= $barang->nama_status ?>" disabled>
                    </div>
					<div class="form-group">
                        <label>Tipe Pengadaan</label>
                        <input type="text" class="form-control" value="<?= $barang->nama_pengadaan ?>" disabled>
                    </div>
					<div class="form-group">
                        <label>Nomor Surat</label>
                        <input type="text" class="form-control" maxlength="255" name="nomor_surat" value="<?= $barang->nomor_surat ?>" disabled>
                    </div>
					<div class="form-group">
                        <label>Nomor PO</label>
                        <input type="text" class="form-control" maxlength="255" name="nomor_po" value="<?= $barang->nomor_po ?>" disabled>
                    </div>
					<div class="form-group">
                        <label>Tanggal PO</label>
                        <input type="text" class="form-control" name="tgl_po" value="<?= date('d-m-Y', strtotime($barang->tgl_po)) ?>" disabled>
                    </div>
					<div class="form-group">
                        <label>Levering</label>
                        <input type="text" id="tglm2" class="form-control" name="delivery_time" value="<?= date('d-m-Y', strtotime($barang->delivery_time))  ?>" disabled>
                    </div>
					<div class="form-group">
                        <label>Nominal PO</label>
                        <input type="text" class="form-control" name="nominal_po" value="<?php if($barang->nominal_po){echo number_format($barang->nominal_po);} ?>" disabled>
                    </div>
					<div class="form-group">
                        <label>Nomor BA</label>
                        <input type="text" class="form-control" name="nomor_ba" value="<?= $barang->nomor_ba ?>" disabled>
                    </div>
					<div class="form-group">
                        <label>Tanggal BA</label>
                        <input type="text" class="form-control" name="tgl_ba" value="<?= date('d-m-Y', strtotime($barang->tgl_ba)) ?>" disabled>
                    </div>
					<div class="form-group">
                        <label>Nomor Invoice</label>
                        <input type="text" class="form-control" name="nomor_inv" value="<?= $barang->nomor_inv ?>" readonly>
                    </div>
					<div class="form-group">
                        <label>Tanggal Invoice</label>
                        <input type="text" class="form-control" value="<?= date('d-m-Y', strtotime($barang->tgl_inv)) ?>" disabled>
                    </div>
					<div class="form-group">
                        <label>Nomor Voucher</label>
                        <input type="text" class="form-control" name="nomor_voucher" value="<?= $barang->nomor_voucher ?>" disabled>
                    </div>
					<div class="form-group">
                        <label>Tanggal Pembayaran</label>
                        <input type="text" class="form-control" name="tgl_byr" value="<?= date('d-m-Y', strtotime($barang->tgl_byr)) ?>" disabled>
                    </div>
					
					<?php if($barang->id_status==46){ ?>
						<div class="form-group">
							<label>Alasan Ditolak</label>
							<textarea class="form-control" disabled><?= $barang->alasan_ditolak ?></textarea>
						</div>
					<?php } ?>
					
					
					<div class="form-group">
						<a  href="#" class="btn btn-info" data-toggle="modal" data-target="#catatan">Tampilkan Catatan</a>
					</div>
					
					<?php if(isset($barang)){ ?>
						<?php if($barang->nama_file){ ?>
						<div class="form-group">
							<a href="<?= base_url('assets/file_upload/' . str_replace(' ','_',$barang->nama_file )) ?>" target="_blank" class="btn btn-purple btn-sm"><i class="ace-icon fa fa-cloud-download"></i> Download Lampiran</a>
						</div>
						<?php } ?>
						<?php if($barang->nama_file_evp){ ?>
						<div class="form-group">
							<a href="<?= base_url('assets/file_evp/' . str_replace(' ','_',$barang->nama_file_evp )) ?>" target="_blank" class="btn btn-purple btn-sm"><i class="ace-icon fa fa-cloud-download"></i> Download Lampiran EVP</a>
						</div>
						<?php } ?>
						<?php if($barang->nama_file_mgr){ ?>
							<?php if($barang->id_kategori==1){ ?>
								<div class="form-group">
									<a href="<?= base_url('assets/file_mgr_om/' . str_replace(' ','_',$barang->nama_file_mgr )) ?>" target="_blank" class="btn btn-purple btn-sm"><i class="ace-icon fa fa-cloud-download"></i> Download Lampiran Manager OM</a>
								</div>
							<?php }else{ ?>
								<div class="form-group">
									<a href="<?= base_url('assets/file_mgr_umum/' . str_replace(' ','_',$barang->nama_file_mgr )) ?>" target="_blank" class="btn btn-purple btn-sm"><i class="ace-icon fa fa-cloud-download"></i> Download Lampiran Manager Umum</a>
								</div>
							<?php } ?>
						<?php } ?>
						<?php if($barang->nama_file_staff_om){ ?>
						<div class="form-group">
							<a href="<?= base_url('assets/file_staff_om/' . str_replace(' ','_',$barang->nama_file_staff_om)) ?>" target="_blank" class="btn btn-purple btn-sm"><i class="ace-icon fa fa-cloud-download"></i> Download Lampiran Staff OM</a>
						</div>
						<?php } ?>
						<?php if($barang->nama_file_staff_k3l){ ?>
						<div class="form-group">
							<a href="<?= base_url('assets/file_staff_k3l/' . str_replace(' ','_',$barang->nama_file_staff_k3l)) ?>" target="_blank" class="btn btn-purple btn-sm"><i class="ace-icon fa fa-cloud-download"></i> Download Lampiran Staff EP, K3L</a>
						</div>
						<?php } ?>
						<?php if($barang->nama_file_staff_csr){ ?>
						<div class="form-group">
							<a href="<?= base_url('assets/file_staff_csr/' . str_replace(' ','_',$barang->nama_file_staff_csr)) ?>" target="_blank" class="btn btn-purple btn-sm"><i class="ace-icon fa fa-cloud-download"></i> Download Lampiran Staff CSR, Umum, Keamanan</a>
						</div>
						<?php } ?>
						<?php if($barang->nama_file_staff_umum){ ?>
						<div class="form-group">
							<a href="<?= base_url('assets/file_staff_umum/' . str_replace(' ','_',$barang->nama_file_staff_umum)) ?>" target="_blank" class="btn btn-purple btn-sm"><i class="ace-icon fa fa-cloud-download"></i> Download Lampiran Sekretariat</a>
						</div>
						<?php } ?>
						<?php if($barang->nama_file_pengadaan){ ?>
						<div class="form-group">
							<a href="<?= base_url('assets/file_staff_pengadaan/' . str_replace(' ','_',$barang->nama_file_pengadaan)) ?>" target="_blank" class="btn btn-purple btn-sm"><i class="ace-icon fa fa-cloud-download"></i> Download Lampiran Staff Pengadaan</a>
						</div>
						<?php } ?>
						<?php if($barang->nama_file_pemeriksaan){ ?>
						<div class="form-group">
							<a href="<?= base_url('assets/file_staff_pemeriksaan/' . str_replace(' ','_',$barang->nama_file_pemeriksaan)) ?>" target="_blank" class="btn btn-purple btn-sm"><i class="ace-icon fa fa-cloud-download"></i> Download Lampiran Pemeriksaan</a>
						</div>
						<?php } ?>
						<?php if($barang->nama_file_gudang){ ?>
						<div class="form-group">
							<a href="<?= base_url('assets/file_staff_gudang/' . str_replace(' ','_',$barang->nama_file_gudang)) ?>" target="_blank" class="btn btn-purple btn-sm"><i class="ace-icon fa fa-cloud-download"></i> Download Lampiran BA</a>
						</div>
						<?php } ?>
						<?php if($barang->nama_file_inv){ ?>
						<div class="form-group">
							<a href="<?= base_url('assets/file_staff_inv/' . str_replace(' ','_',$barang->nama_file_inv)) ?>" target="_blank" class="btn btn-purple btn-sm"><i class="ace-icon fa fa-cloud-download"></i> Download Lampiran Invoice</a>
						</div>
						<?php } ?>
						<?php if($barang->nama_file_keuangan){ ?>
						<div class="form-group">
							<a href="<?= base_url('assets/file_staff_keuangan/' . str_replace(' ','_',$barang->nama_file_keuangan)) ?>" target="_blank" class="btn btn-purple btn-sm"><i class="ace-icon fa fa-cloud-download"></i> Download Lampiran Keuangan</a>
						</div>
						<?php } ?>
					<?php } ?>
						
					<div class="form-group">
                        <a href="<?= base_url('monitoring/cetak/' . $barang->id_request ) ?>" target="_blank" class="btn btn-grey btn-sm"><i class="ace-icon fa fa-print"></i> Print Usulan</a>
                    </div>
					<!--a href="<?//= base_url('approve/acc/1/' . $barang->id_request)?>" class="btn btn-success">Disetujui</a-->
							<br>
							<br>
							<div class="row">
								<center><h4><b>Riwayat Usulan "<?= $barang->nama_barang ?>"</b></h4></center>
							</div>
							<br>
							<br>
							<center>
								<div class="row">
									<div class="col-xs-4">
										<div class="row">
											<div class="col-xs-12">
											<?php  
											if(($barang->id_status>=99 AND $barang->id_status<=108) OR ($barang->id_status==11 OR $barang->id_status==12 OR $barang->id_status==13) OR ($barang->id_status==15 OR $barang->id_status==16  OR $barang->id_status==17 OR $barang->id_status==21 OR $barang->id_status==24 OR $barang->id_status==25 OR $barang->id_status==27 OR $barang->id_status==28) OR ($barang->id_status==18 OR $barang->id_status==19 OR $barang->id_status==30 OR $barang->id_status==36 OR $barang->id_status==37 OR $barang->id_status==38 OR $barang->id_status==39 OR $barang->id_status==40 OR $barang->id_status==44 OR $barang->id_status==45 OR $barang->id_status==47 OR $barang->id_status==48 OR $barang->id_status==43 OR $barang->id_status==42)){ 
											?>
												<img src="<?= base_url('assets/images/riwayat_gambar/pjbs.png') ?>" >
											<?php }else{ ?>
												<img src="<?= base_url('assets/images/riwayat_gambar/pjbs_no.png') ?>" >
											<?php } ?>
												
											</div>
											<div class="col-xs-12">
												<b>1. Pembuatan Usulan PJBS</b>
											</div>
										</div>
									</div>
									<div class="col-xs-4">
										<div class="row">
											<div class="col-xs-12">
											<?php 
											if(($barang->id_status>=99 AND $barang->id_status<=108) OR ($barang->id_status==15 OR $barang->id_status==16  OR $barang->id_status==17 OR $barang->id_status==21 OR $barang->id_status==24 OR $barang->id_status==25 OR $barang->id_status==27 OR $barang->id_status==28) OR ($barang->id_status==18 OR $barang->id_status==19 OR $barang->id_status==30 OR $barang->id_status==36 OR $barang->id_status==37 OR $barang->id_status==38 OR $barang->id_status==39 OR $barang->id_status==40 OR $barang->id_status==44 OR $barang->id_status==45 OR $barang->id_status==47 OR $barang->id_status==48 OR $barang->id_status==43 OR $barang->id_status==40 OR $barang->id_status==42)){ 
											?>
												<img src="<?= base_url('assets/images/riwayat_gambar/evaluasi.png') ?>" >
											<?php }else{ ?>
												<img src="<?= base_url('assets/images/riwayat_gambar/evaluasi_no.png') ?>" >
											<?php } ?>
												
											</div>
											<div class="col-xs-12">
												<b>2. Evaluasi EVP</b>
											</div>
										</div>
									</div>
									
									<div class="col-xs-4">
										<div class="row">
											<div class="col-xs-12">
											<?php 
											if(($barang->id_status>=99 AND $barang->id_status<=108) OR $barang->id_status==18 OR $barang->id_status==19 OR $barang->id_status==30 OR $barang->id_status==36 OR $barang->id_status==37 OR $barang->id_status==38 OR $barang->id_status==39 OR $barang->id_status==40 OR $barang->id_status==44 OR $barang->id_status==45 OR $barang->id_status==47 OR $barang->id_status==48 OR $barang->id_status==43 OR $barang->id_status==40 OR $barang->id_status==42){ 
											?>
												<img src="<?= base_url('assets/images/riwayat_gambar/pengadaan.png') ?>" >
											<?php }else{ ?>
												<img src="<?= base_url('assets/images/riwayat_gambar/pengadaan_no.png') ?>" >
											<?php } ?>
												
											</div>
											<div class="col-xs-12">
												<b>3. Pengadaan Barang/Jasa</b>
											</div>
										</div>
									</div>
									<div class="col-xs-4">
										<div class="row">
											<div class="col-xs-12">
											<?php if(($barang->id_status>=99 AND $barang->id_status<=108) OR $barang->id_status==40 OR  $barang->id_status==42 OR $barang->id_status==45 OR $barang->id_status==47 OR $barang->id_status==48 OR $barang->id_status==43){ ?>
												<img src="<?= base_url('assets/images/riwayat_gambar/verifikasi.png') ?>" >
											<?php }else{ ?>
												<img src="<?= base_url('assets/images/riwayat_gambar/verifikasi_no.png') ?>" >
											<?php } ?>
											</div>
											<div class="col-xs-12">
												<b>4. Verifikasi dokumen</b>
											</div>
										</div>
									</div>
									<div class="col-xs-4">
										<div class="row">
											<div class="col-xs-12">
											<?php if(($barang->id_status>=99 AND $barang->id_status<=108) OR $barang->id_status==43 OR $barang->id_status==40 OR $barang->id_status==42){ ?>
												<img src="<?= base_url('assets/images/riwayat_gambar/keuangan.png') ?>" >
											<?php }else{ ?>
												<img src="<?= base_url('assets/images/riwayat_gambar/keuangan_no.png') ?>" >
											<?php } ?>
											</div>
											<div class="col-xs-12">
												<b>5. Pembayaran</b>
											</div>
										</div>
									</div>
									<div class="col-xs-4">
										<div class="row">
											<div class="col-xs-12">
											<?php if($barang->id_status==43){ ?>
												<img src="<?= base_url('assets/images/riwayat_gambar/done.png') ?>" >
											<?php }else{ ?>
												<img src="<?= base_url('assets/images/riwayat_gambar/done_no.png') ?>" >
											<?php } ?>
											</div>
											<div class="col-xs-12">
												<b>6. Selesai</b>
											</div>
										</div>
									</div>
									
								</div>
							</center>
							<br>
							<br>
		<div class="panel panel-default">
			<div class="panel-body">
				
			<div class="table-responsive">
                <!--table class="table table-striped table-bordered table-hover" id="dataTables-example"-->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-data">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Status</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
						<tbody>
						<?php 
						$no = 1;
						foreach($barang2 as $v){ 
						if($v->created_at == '0000-00-00' OR $v->created_at == ''){
							$tgl = '-';
						}else{
							$tgl = date('d-m-Y H:i', strtotime($v->created_at));
						}
							echo '<tr>
                                <th>' . $no . '</th>
                                <th>' . $v->nama_status . '</th>
                                <th>' . $tgl . '</th>
							</tr>';
							$no += 1;
						}
							?>
						</tbody>
					</table>
                </div>
            </div>
        </div>
    <!--End Advanced Tables -->
					<?php if($_SESSION['role'] == 0){ ?>
						<a href="<?= base_url('monitoring/hapus/' . $barang->id_request) ?>" class="btn btn-danger">Hapus Usulan</a>
					<?php } ?> 
					<a href="<?= base_url('monitoring') ?>" class="btn btn-default">Kembali</a>
				</form>
            </div>
        </div>
    <!--End Advanced Tables -->
    </div>
</div>
            