<div class="row">
    <div class="col-md-12">
    <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-body">
                <form method="POST" action="<?= base_url('keuangan/saveData') ?>">
					<div class="form-group">
                        <label><h3><b><?= $judul ?></b></h3></label>
                    </div>
					<input type="hidden" value="<?= $barang->id_request ?>" name="id_request">
					<input type="hidden" value="<?= $barang->id_status ?>" name="id_status">
					<input type="hidden" id="nama_file" name="nama_file" value="<?php if(isset($barang)){echo $barang->nama_file_keuangan;}?>">
					
					<div class="form-group">
                        <label>Nama Usulan</label>
                        <input type="text" class="form-control" name="nama_barang" value="<?php if(isset($barang)){echo $barang->nama_barang;} ?>" <?php if(isset($barang)){echo "disabled";}else{echo "required";}?>>
                    </div>
					
					<div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" <?php if(isset($barang)){echo "disabled";}else{echo "";}?>><?php if(isset($barang)){echo $barang->deskripsi;} ?></textarea>
                    </div>
					
					<div class="form-group">
                    <label>Jenis</label>
						<?php if(isset($barang)){ ?>
							<?php if($_SESSION['role']==3 AND $_SESSION['id_kantor']==1){ ?>
								<select name="id_jenis"class="form-control" min="1" <?php if($_SESSION['id_kantor']==1 AND $_SESSION['role']==3){ echo 'required';}else{echo 'disabled';} ?>>
									<?php 
									foreach($jenis as $v){
										if($v->id_jenis == $barang->id_jenis){
											$tag = 'selected';
										}else{
											$tag = '';
										}
										
										echo '<option value="' . $v->id_jenis . '" ' . $tag . '>' . $v->nama_jenis . '</option>';
									}
									?>
								</select>
							<?php }else{ ?>
								<input type="text" class="form-control" value="<?= $barang->nama_jenis ?>" disabled>
							<?php } ?>
						<?php }else{ ?>
							<select name="id_jenis"class="form-control" min="1" <?php if($_SESSION['id_kantor']==1 AND $_SESSION['role']==3){ echo 'required';}else{echo 'disabled';} ?>>
							<?php 
							foreach($jenis as $v){
								echo '<option value="' . $v->id_jenis . '">' . $v->nama_jenis . '</option>';
							}
							?>
							</select>
						<?php } ?>
                    </div>
					
					<?php if(isset($barang)){ ?>
						<?php if($barang->id_status==12){ ?>
							<div class="form-group">
							<label>Kategori</label>
							<select name="id_kategori"class="form-control" min="1" required>
								<?php 
								foreach($kategori as $v){
									//if(isset($barang)){
										if($v->id_kategori == $barang->id_kategori){
											$tag = 'selected';
										}else{
											$tag = '';
										}
									//}
									echo '<option value="' . $v->id_kategori . '" ' . $tag . '>' . $v->nama_kategori . '</option>';
								}
								?>
							</select>
						</div>
						<?php }else{ ?>
						<div class="form-group">
						<label>Kategori</label>
							<input type="text" class="form-control" value="<?= $barang->nama_kategori ?>" disabled>
						</div>
						<?php } ?>
					<?php }else{ ?>
						<div class="form-group">
						<label>Kategori</label>
							<select name="id_kategori"class="form-control" min="1" required>
							<?php 
							foreach($kategori as $v){
								echo '<option value="' . $v->id_kategori . '">' . $v->nama_kategori . '</option>';
							}
							?>
							</select>
						</div>
					<?php } ?>
					
					<?php if(isset($barang)){ ?>
						<?php if($_SESSION['role']==3 AND $_SESSION['id_kantor']==1){ ?>
							<div class="form-group">
								<label>Jenis Anggaran</label>
								<select name="id_jenis_anggaran"class="form-control" min="1" required>
								<?php 
								foreach($jenis_anggaran as $v){
									if($v->id_jenis_anggaran == $barang->id_jenis_anggaran){
										$tag = 'selected';
									}else{
										$tag = '';
									}
									echo '<option value="' . $v->id_jenis_anggaran . '" ' . $tag . '>' . $v->nama_jenis_anggaran . '</option>';
								}
								?>
								</select>
							</div>
						<?php }else{ ?>
						<div class="form-group">
							<label>Jenis Anggaran</label>
							<input type="text" class="form-control" value="<?= $barang->nama_jenis_anggaran ?>" disabled>
						</div>
						<?php } ?>
					<?php }else{ ?>
						<div class="form-group">
						<label>Kategori</label>
							<select name="id_kategori"class="form-control" min="1" required>
							<?php 
							foreach($kategori as $v){
								echo '<option value="' . $v->id_kategori . '">' . $v->nama_kategori . '</option>';
							}
							?>
							</select>
						</div>
					<?php } ?>
					
					<div class="form-group">
                        <label>Anggaran Tahun</label>
                        <input type="text" class="form-control" value="<?= $barang->anggaran ?>" disabled>
                    </div>
					<div class="form-group">
                        <label>Tanggal dibutuhkan</label>
                        <input type="date" id="tglm2" class="form-control" name="tgl_butuh" value="<?php if(isset($barang)){echo $barang->deadline;}?>" disabled>
                    </div>
					<?php if(isset($barang)){ ?>
					<div class="form-group">
                        <label>Status</label>
                        <input type="text" class="form-control" value="<?php if(isset($barang)){echo $barang->nama_status;}?>" disabled>
                    </div>
					<?php } ?>
					<div class="form-group">
                        <label>Tipe Pengadaan</label>
                        <input type="text" class="form-control" value="<?= $barang->nama_pengadaan ?>" disabled>
                    </div>
					<div class="form-group">
                        <label>Nomor Surat</label>
                        <input type="text" class="form-control" maxlength="255" name="nomor_surat" value="<?= $barang->nomor_surat ?>" disabled>
                    </div>
					<?php if($barang->note_gm_pjbs){ ?>
					<div class="form-group">
                        <label>Catatan GM PJBS</label>
                        <textarea class="form-control" disabled><?= $barang->note_gm_pjbs ?></textarea>
                    </div>
					<?php } ?>
					<div class="form-group">
                        <label>Catatan EVP</label>
                        <textarea class="form-control" disabled><?= $barang->note_evp ?></textarea>
                    </div>
					<?php if($barang->note_mgr){ ?>
					<div class="form-group">
                        <label>Catatan Manager</label>
                        <textarea class="form-control" disabled><?= $barang->note_mgr ?></textarea>
                    </div>
					<?php } ?>
					
					<div class="form-group">
                        <label>Nomor PO</label>
                        <input type="text" class="form-control" maxlength="255" name="nomor_po" value="<?= $barang->nomor_po ?>" disabled>
                    </div>
					<div class="form-group">
                        <label>Tanggal PO</label>
                        <input type="date" class="form-control" name="tgl_po" value="<?= $barang->tgl_po ?>" disabled>
                    </div>
					<div class="form-group">
                        <label>Estimasi</label>
                        <input type="date" id="tglm2" class="form-control" name="delivery_time" value="<?= $barang->delivery_time  ?>" disabled>
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
                        <input type="date" class="form-control" name="tgl_ba" value="<?= $barang->tgl_ba ?>" disabled>
                    </div>
					<div class="form-group">
                        <label>Nomor Invoice</label>
                        <input type="text" class="form-control" name="nomor_inv" value="<?= $barang->nomor_inv ?>" readonly>
                    </div>
					<div class="form-group">
                        <label>Tanggal Invoice</label>
                        <input type="date" class="form-control" value="<?= $barang->tgl_inv ?>" disabled>
                    </div>
					<div class="form-group">
                        <label>Nomor Voucher</label>
                        <input type="text" class="form-control" name="nomor_voucher" value="<?= $barang->nomor_voucher ?>" required>
                    </div>
					<div class="form-group">
                        <label>Tanggal Pembayaran</label>
                        <input type="date" class="form-control" name="tgl_byr" value="<?= $barang->tgl_byr ?>" required>
                    </div>
					<div class="form-group">
						<label>Catatan</label>
						<textarea style="height:150px;" class="form-control" name="note_staff"><?php if(isset($barang)){echo $barang->note_staff; } ?></textarea>
					</div>
					<div class="form-group">
						<label>Lampiran File Keuangan</label>
						<input type="file" class="file" id="id-input-file-2" required>
						<div id="message_info"></div>
						<div style="color: red;">*jika ingin kirim banyak file, silakan dikompress menggunakan RAR atau ZIP</div>
					</div>
					<?php if($barang->nama_file){ ?>
					<div class="form-group">
                        <a href="<?= base_url('assets/file_upload/' . $barang->nama_file ) ?>" target="_blank" class="btn btn-purple btn-sm"><i class="ace-icon fa fa-cloud-download"></i> Download Lampiran</a>
                    </div>
					<?php } ?>
					<?php if($barang->nama_file_mgr){ ?>
						<?php if($barang->id_kategori==1){ ?>
							<div class="form-group">
								<a href="<?= base_url('assets/file_mgr_om/' . $barang->nama_file_mgr ) ?>" target="_blank" class="btn btn-purple btn-sm"><i class="ace-icon fa fa-cloud-download"></i> Download Lampiran Manager OM</a>
							</div>
						<?php }else{ ?>
							<div class="form-group">
								<a href="<?= base_url('assets/file_mgr_umum/' . $barang->nama_file_mgr ) ?>" target="_blank" class="btn btn-purple btn-sm"><i class="ace-icon fa fa-cloud-download"></i> Download Lampiran Manager Umum</a>
							</div>
						<?php } ?>
					<?php } ?>
					<?php if($barang->nama_file_staff_om){ ?>
					<div class="form-group">
                        <a href="<?= base_url('assets/file_staff_om/' . $barang->nama_file_staff_om) ?>" target="_blank" class="btn btn-purple btn-sm"><i class="ace-icon fa fa-cloud-download"></i> Download Lampiran Staff OM</a>
                    </div>
					<?php } ?>
					<?php if($barang->nama_file_staff_umum){ ?>
					<div class="form-group">
                        <a href="<?= base_url('assets/file_staff_umum/' . $barang->nama_file_staff_umum) ?>" target="_blank" class="btn btn-purple btn-sm"><i class="ace-icon fa fa-cloud-download"></i> Download Lampiran Staff Umum</a>
                    </div>
					<?php } ?>
					<?php if($barang->nama_file_pengadaan){ ?>
					<div class="form-group">
                        <a href="<?= base_url('assets/file_staff_pengadaan/' . $barang->nama_file_pengadaan) ?>" target="_blank" class="btn btn-purple btn-sm"><i class="ace-icon fa fa-cloud-download"></i> Download Lampiran Staff Pengadaan</a>
                    </div>
					<?php } ?>
					<?php if($barang->nama_file_pemeriksaan){ ?>
					<div class="form-group">
                        <a href="<?= base_url('assets/file_staff_pemeriksaan/' . $barang->nama_file_pemeriksaan) ?>" target="_blank" class="btn btn-purple btn-sm"><i class="ace-icon fa fa-cloud-download"></i> Download Lampiran Pemeriksaan</a>
                    </div>
					<?php } ?>
					<?php if($barang->nama_file_gudang){ ?>
					<div class="form-group">
                        <a href="<?= base_url('assets/file_staff_gudang/' . $barang->nama_file_gudang) ?>" target="_blank" class="btn btn-purple btn-sm"><i class="ace-icon fa fa-cloud-download"></i> Download Lampiran BA</a>
                    </div>
					<?php } ?>
					<?php if($barang->nama_file_inv){ ?>
					<div class="form-group">
                        <a href="<?= base_url('assets/file_staff_inv/' . $barang->nama_file_inv) ?>" target="_blank" class="btn btn-purple btn-sm"><i class="ace-icon fa fa-cloud-download"></i> Download Lampiran Invoice</a>
                    </div>
					<?php } ?>
					<?php if($barang->nama_file_keuangan){ ?>
					<div class="form-group">
                        <a href="<?= base_url('assets/file_staff_keuangan/' . $barang->nama_file_keuangan) ?>" target="_blank" class="btn btn-purple btn-sm"><i class="ace-icon fa fa-cloud-download"></i> Download Lampiran Keuangan</a>
                    </div>
					<?php } ?>
					<!--a href="<?//= base_url('approve/acc/1/' . $barang->id_request)?>" class="btn btn-success">Disetujui</a-->
					<button type="submit" class="btn btn-success">Simpan</button>
					<!--a href="<? //= base_url('keuangan/menunggu/') . $barang->id_request ?>" class="btn btn-yellow">Menunggu Invoice</a-->
					<a href="<?= base_url('keuangan') ?>" class="btn btn-default">Kembali</a>
				</form>
				<br>
				<!--form method="POST" action="<? //= base_url('keuangan/nAcc/') ?>">
					<input type="hidden" value="<? //= $barang->id_request ?>" name="id_request">
					<div class="form-group">
                        <label>Alasan Berita Acara Ditolak</label>
                        <textarea class="form-control" name="alasan_ditolak" required></textarea>
                    </div>
					<button type="submit" class="btn btn-danger">Ditolak</button>
				</form-->
            </div>
        </div>
    <!--End Advanced Tables -->
    </div>
</div>
            