<div class="row">
    <div class="col-md-12">
    <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-body">
                <form method="POST" action="<?= $url ?>">
					<div class="form-group">
                        <label><h3><b><?= $judul ?></b></h3></label>
                    </div>
					<?php 
					if(isset($barang)){
						if($barang->id_status==11){
							$file = $barang->nama_file;
						}
						elseif($barang->id_status==13){
							$file = $barang->nama_file;
						}
						elseif($barang->id_status==16){
							$file = $barang->nama_file_staff_om;
						}
						elseif($barang->id_status==12 OR $barang->id_status==24 OR $barang->id_status==27){
							$file = $barang->nama_file_evp;
						}
						elseif($barang->id_status==15 OR $barang->id_status==17 OR $barang->id_status==54){
							$file = $barang->nama_file_mgr;
						}
						elseif($barang->id_status==21){
							$file = $barang->nama_file_staff_umum;
						}
						elseif($barang->id_status==18){
							$file = $barang->nama_file_pengadaan;
						}
						elseif($barang->id_status==19 OR $barang->id_status==37){
							$file = $barang->nama_file_pemeriksaan;
						}
						elseif($barang->id_status==36){	//sesi staff om buat BA
							$file = $barang->nama_file_gudang;
						}
						elseif($barang->id_status==39){	//sesi staff umum untuk invoice
							$file = $barang->nama_file_inv;
						}
						elseif($barang->id_status==108){	//sesi staff keuangan
							$file = $barang->nama_file_keuangan;
						}
						elseif($barang->id_status==51){	//Disposisi ke staff EP, K3L
							$file = $barang->nama_file_staff_k3l;
						}
						elseif($barang->id_status==53){	//Disposisi ke staff CSR,Umum, keamanan
							$file = $barang->nama_file_staff_csr;
						}
						
						else{
							$file = '';
						}
					}else{
						$file = '';
					}
					?>
					<input type="hidden" value="<?php if(isset($barang)){echo $barang->id_request;} ?>" name="id_request">
					<input type="hidden" value="<?php if(isset($barang)){echo $barang->id_status;} ?>" name="id_status">
					<input type="hidden" name="id_status_before" value="<?php if(isset($barang)){echo $barang->id_status;}?>">
					<input type="hidden" name="id_kategori" value="<?php if(isset($barang)){echo $barang->id_kategori;}?>">
					<input type="hidden" id="nama_file" name="nama_file" value="<?= $file ?>">
					
<!-- start isset -->						
						<?php if(isset($barang)){ ?>
						
							<?php if(($barang->id_status==1 OR $barang->id_status==11 OR $barang->id_status == 25 OR $barang->id_status == 28 OR $barang->id_status == 13) AND ($_SESSION['role']==3 AND $_SESSION['id_kantor']==1)){ ?>
							
								<!--div class="form-group">
									<label>Nomor Surat</label>
									<input type="text" class="form-control" name="nomor_surat_pjbs" value="<?php //if(isset($barang)){echo $barang->nomor_surat_pjbs;} ?>" required>
								</div-->
								<div class="form-group">
									<label>Nama Usulan</label>
									<input type="text" class="form-control" name="nama_barang" value="<?php if(isset($barang)){echo $barang->nama_barang;} ?>" required>
								</div>
								<div class="form-group">
									<label>Deskripsi</label>
									<textarea class="form-control" name="deskripsi"><?php if(isset($barang)){echo $barang->deskripsi;} ?></textarea>
								</div>
							
							<?php }else{ ?>
								<!--div class="form-group">
									<label>Nomor Surat</label>
									<input type="text" class="form-control" value="<?php //if(isset($barang)){echo $barang->nomor_surat_pjbs;} ?>" disabled>
								</div-->
								<div class="form-group">
									<label>Nama Usulan</label>
									<input type="text" class="form-control" value="<?php if(isset($barang)){echo $barang->nama_barang;} ?>" disabled>
								</div>
								<div class="form-group">
									<label>Deskripsi</label>
									<textarea class="form-control" name="deskripsi" disabled><?php if(isset($barang)){echo $barang->deskripsi;} ?></textarea>
								</div>
								
							<?php } ?>
							
							
							
							<?php if($_SESSION['role']==3 AND $_SESSION['id_kantor']==1 AND ($barang->id_status==1 OR $barang->id_status==11 OR $barang->id_status == 25 OR $barang->id_status == 28 OR $barang->id_status == 13)){ ?>
								<div class="form-group">
									<label>Jenis</label>
									<select name="id_jenis"class="form-control" min="1" <?php if($_SESSION['id_kantor']==1 AND $_SESSION['role']==3){ echo 'required';}else{echo 'disabled';} ?>>
										<option value="">--- Pilih Jenis ---</option>
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
								</div>
							<?php }else{ ?>
								<div class="form-group">
									<label>Jenis</label>
									<input type="text" class="form-control" value="<?= $barang->nama_jenis ?>" disabled>
								</div>
							<?php } ?>
														
							<?php if($_SESSION['role']==3 AND $_SESSION['id_kantor']==1 AND ($barang->id_status==1 OR $barang->id_status==11 OR $barang->id_status == 25 OR $barang->id_status == 28 OR $barang->id_status == 13)){ ?>
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
							
							<?php if($_SESSION['role']==3 AND $_SESSION['id_kantor']==1 AND ($barang->id_status==1 OR $barang->id_status==11 OR $barang->id_status == 25 OR $barang->id_status == 28 OR $barang->id_status == 13)){ ?>
								<div class="form-group">
									<label>Anggaran Tahun</label>
									<input type="number" class="form-control" name="anggaran" value="<?= $barang->anggaran ?>" required>
								</div>
							<?php }else{ ?>
								<div class="form-group">
									<label>Anggaran Tahun</label>
									<input type="number" class="form-control" value="<?= $barang->anggaran ?>" disabled>
								</div>
							<?php } ?>
							
							<div class="form-group">
								<label>Tanggal usulan dibuat</label>
								<input type="text" class="form-control" value="<?php if(isset($barang)){echo date('d-m-Y', strtotime($barang->created_at));}?>" disabled>
							</div>
							
							<?php if($_SESSION['role']==3 AND $_SESSION['id_kantor']==1 AND ($barang->id_status==1 OR $barang->id_status==11 OR $barang->id_status == 25 OR $barang->id_status == 28 OR $barang->id_status == 13)){ ?>
								<div class="form-group">
									<label>Tanggal dibutuhkan</label>
									<input type="date" id="tglm2" class="form-control" name="tgl_butuh" value="<?php if(isset($barang)){echo $barang->deadline;}?>" required>
								</div>
							<?php }else{ ?>
								<div class="form-group">
									<label><b>Tanggal dibutuhkan</b></label>
									<!--input type="text" class="form-control" value="<?php //if(isset($barang)){echo date('d-m-Y', strtotime($barang->deadline));}?>" disabled-->
									<div class="alert alert-block alert-danger">
										<b><?php if(isset($barang)){echo date('d-m-Y', strtotime($barang->deadline));}?></b>
									</div>
								</div>
							<?php } ?>
							
							<?php if(isset($tgl_before)){?>
								<div class="form-group">
									<label><?= $nama_before ?></label>
									<input type="text" class="form-control" value="<?= date('d-m-Y H:i:s', strtotime($tgl_before)) ?>" disabled>
								</div>
							<?php } ?>
							
							<?php if($barang->id_status<>153 AND $barang->id_status<>152 AND $barang->id_status<>151 AND $barang->id_status<>108 AND $barang->id_status<>107 AND $barang->id_status<>106 AND $barang->id_status<>105 AND $barang->id_status<>104 AND $barang->id_status<>103 AND $barang->id_status<>102 AND $barang->id_status<>101 AND $barang->id_status<>100 AND $barang->id_status<>99 AND $barang->id_status<>44 AND $barang->id_status<>42 AND $barang->id_status<>40 AND $barang->id_status<>48 AND $barang->id_status<>39 AND$barang->id_status<>38 AND $barang->id_status<>36 AND $barang->id_status<>19 AND $barang->id_status<>37 AND $barang->id_status<>24 AND $barang->id_status<>27 AND $barang->id_status<>21 AND $barang->id_status<>18){ ?>
								<div class="form-group">
									<label>Jatuh Tempo untuk proses selanjutnya</label>
									<input type="date" id="tglm" class="form-control" name="deadline" value="<?php if(isset($deadline)){echo view_tgl($deadline->deadline);}?>" required>
								</div>
								<!--div class="form-group bootstrap-timepicker">
									<input id="timepicker1" type="text" class="form-control" name="time" value="<?php //if(isset($deadline)){echo view_jam($deadline->deadline);}?>" required>
								</div-->
								<input type="hidden" name="time" value="00:00:00" >
							<?php } ?>
							
							<?php if(($barang->id_status==17 AND $_SESSION['role']==5) OR ($barang->id_status==54 AND $_SESSION['role']==2 AND $_SESSION['id_kantor']==2)){ ?>
								<div class="form-group">
									<label>Jatuh Tempo untuk Sekretariat</label>
									<input type="date" id="tglm2" class="form-control" name="deadline2" required>
								</div>
								<!--div class="form-group bootstrap-timepicker">
									<input id="timepicker2" type="text" class="form-control" name="time2" required>
								</div-->
								
								<div class="form-group">
									<label>Jatuh Tempo untuk Staff Pengadaan</label>
									<input type="date" id="tglm3" class="form-control" name="deadline3" required>
								</div>
								<!--div class="form-group bootstrap-timepicker">
									<input id="timepicker3" type="text" class="form-control" name="time3" required>
								</div-->
								
								<div class="form-group">
									<label>Jatuh Tempo untuk Penerbitan BA</label>
									<input type="date" id="tglm4" class="form-control" name="deadline4" required>
								</div>
								<!--div class="form-group bootstrap-timepicker">
									<input id="timepicker4" type="text" class="form-control" name="time4" required>
								</div-->
								<input type="hidden" name="time2" value="00:00:00" >
								<input type="hidden" name="time3" value="00:00:00" >
								<input type="hidden" name="time4" value="00:00:00" >
							<?php } ?>
							
							<?php if($barang->id_status==12){ ?>
								<div class="form-group">
									<label>Kategori</label>
									<select name="id_kategori" class="form-control" min="1" required>
										<option value="">--- Pilih Kategori ---</option>
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
							
							<?php if($barang->id_status == 24 OR $barang->id_status == 27){ ?>
								<div class="form-group">
									<label>Tipe Pengadaan</label>
									<select class="form-control" name="id_pengadaan">
										<option value="">--- Pilih Tipe Pengadaan ---</option>
										<?php 
										foreach($pengadaan as $p){
											echo '<option value="' . $p->id_pengadaan . '">' . $p->nama_pengadaan . '</option>';
										}
										?>
									</select>
								</div>
							<?php }else{ ?>
								<div class="form-group">
									<label>Tipe Pengadaan</label>
									<input type="text" class="form-control" value="<?= $barang->nama_pengadaan ?>" disabled>
								</div>
							<?php } ?>
								
							<div class="form-group">
								<label>Status usulan saat ini</label>
								<input type="text" class="form-control" value="<?php if(isset($barang)){echo $barang->nama_status;}?>" disabled>
							</div>
							
							<?php if($barang->id_status==21){ ?>
								<div class="form-group">
									<label>Nomor Surat</label>
									<input type="text" class="form-control" maxlength="255" name="nomor_surat" value="<?= $barang->nomor_surat ?>" required>
								</div>
							<?php }else{ ?>
								<div class="form-group">
									<label>Nomor Surat</label>
									<input type="text" class="form-control" value="<?= $barang->nomor_surat ?>" disabled>
								</div>
							<?php } ?>
							
							<?php if($barang->id_status == 18){ ?>
								<div class="form-group">
									<label>Nomor PO / SPMK / Kontrak</label>
									<input type="text" class="form-control" maxlength="255" name="nomor_po" value="<?= $barang->nomor_po ?>" required>
								</div>
								<div class="form-group">
									<label>Tanggal PO / SPMK / Kontrak</label>
									<input type="date" id="tglm" class="form-control" name="tgl_po" value="<?= $barang->tgl_po ?>" required>
								</div>
								<div class="form-group">
									<label>Nama PT</label>
									<input type="text" class="form-control" name="nama_pt" value="<?= $barang->nama_pt ?>" required>
								</div>
								<div class="form-group">
									<label>Levering</label>
									<input type="date" id="tglm2" class="form-control" name="delivery_time" value="<?= $barang->delivery_time  ?>">
								</div>
								<div class="form-group">
									<label>Nominal PO / SPMK / Kontrak</label>
									<input type="number" class="form-control" id="nominal_po" onkeyup="formatRupiah()" name="nominal_po" value="<?= $barang->nominal_po ?>">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="nominal_po2" disabled>
								</div>
							<?php } ?>
							<?php if(isset($barang->nomor_po) AND $barang->id_status<>18){ ?>
								<div class="form-group">
									<label>Nomor PO / SPMK / Kontrak</label>
									<input type="text" class="form-control" maxlength="255" value="<?= $barang->nomor_po ?>" disabled>
								</div>
								<div class="form-group">
									<label>Tanggal PO / SPMK / Kontrak</label>
									<input type="text" class="form-control" value="<?= date('d-m-Y', strtotime($barang->tgl_po)) ?>" disabled>
								</div>
								<div class="form-group">
									<label>Nama PT</label>
									<input type="text" class="form-control" value="<?= $barang->nama_pt ?>" disabled>
								</div>
								<div class="form-group">
									<label>Levering</label>
									<input type="text" class="form-control" value="<?= date('d-m-Y', strtotime($barang->delivery_time))  ?>" disabled>
								</div>
								<div class="form-group">
									<label>Nominal PO / SPMK / Kontrak</label>
									<input type="text" class="form-control" id="nominal_po" value="<?= number_format($barang->nominal_po) ?>" disabled>
								</div>
								
							<?php } ?>
							
							<?php if($barang->id_status==19 OR $barang->id_status==37){ ?>
								<div class="form-group">
									<label>Status</label>
									<select class="form-control" name="id_status">
									<option value="">---Pilih Status---</option>
										<?php
										foreach($status as $s){
											if($s->id_status == $barang->id_status){
												$tag = 'selected';
											}else{
												$tag = '';
											}
											echo '<option value="' . $s->id_status . '" ' . $tag . '>' . $s->nama_status . '</option>';
										}
										?>
									</select>
								</div>
							<?php } ?>
							
							<?php if($barang->id_status==36 OR $barang->id_status==42){ ?>
								<div class="form-group">
									<label>Nomor BA</label>
									<input type="text" class="form-control" name="nomor_ba" value="<?= $barang->nomor_ba ?>" required>
								</div>
								<div class="form-group">
									<label>Tanggal BA</label>
									<input type="date" id="tglm" class="form-control" name="tgl_ba" value="<?= $barang->tgl_ba ?>" required>
								</div>
							<?php }else{ ?>
								<?php if($barang->nomor_ba<>""){ ?>
									<div class="form-group">
										<label>Nomor BA</label>
										<input type="text" class="form-control" name="nomor_ba" value="<?= $barang->nomor_ba ?>" disabled>
									</div>
									<div class="form-group">
										<label>Tanggal BA</label>
										<input type="text" class="form-control" value="<?= date('d-m-Y',strtotime($barang->tgl_ba)) ?>" disabled>
									</div>
								<?php } ?>
							<?php } ?>
							
							<?php if($barang->id_status==39){ ?>
								<div class="form-group">
									<label>Nomor Invoice</label>
									<input type="text" class="form-control" name="nomor_inv" value="<?= $barang->nomor_inv ?>" required>
								</div>
							<?php } ?>
							<?php if($barang->nomor_inv<>""){ ?>
								<div class="form-group">
									<label>Nomor Invoice</label>
									<input type="text" class="form-control" value="<?= $barang->nomor_inv ?>" disabled>
								</div>
								<div class="form-group">
									<label>Tanggal Invoice</label>
									<input type="text" class="form-control" value="<?= date('d-m-Y', strtotime($barang->tgl_inv)) ?>" disabled>
								</div>
							<?php } ?>
							
							<?php if($barang->id_status==108){ ?>
								<div class="form-group">
									<label>Nomor Voucher</label>
									<input type="text" class="form-control" name="nomor_voucher" value="<?= $barang->nomor_voucher ?>" required>
								</div>
								<div class="form-group">
									<label>Tanggal Pembayaran</label>
									<input type="date" id="tglm"class="form-control" name="tgl_byr" value="<?= $barang->tgl_byr ?>" required>
								</div>
							<?php } ?>
							<?php if(isset($barang->nomor_voucher)){ ?>
								<div class="form-group">
									<label>Nomor Voucher</label>
									<input type="text" class="form-control" value="<?= $barang->nomor_voucher ?>" disabled>
								</div>
								<div class="form-group">
									<label>Tanggal Pembayaran</label>
									<input type="date" class="form-control" value="<?= $barang->tgl_byr ?>" disabled>
								</div>
							<?php } ?>							
							
							<?php if($barang->id_status==44){ ?>
								<div class="form-group">
									<label>Disposisi verifikasi</label>
									<select name="id_disposisi" class="form-control" min="1" required>
										<option value="">--- Pilih Manager ---</option>
										<option value="99">Manager O&M </option>
										<option value="104">Manager Umum </option>
									</select>
								</div>
							<?php } ?>
							
							<?php if($barang->id_status==15 AND $_SESSION['role']==2 AND $_SESSION['id_kantor']==2){ ?>
								<div class="form-group">
									<label>Disposisi staff</label>
									<select class="form-control" name="id_umum" min="1" required>
										<option value="">--- Pilih Staff ---</option>
										<option value="51">Disposisi ke staff EP, K3L</option>
										<option value="53">Disposisi ke staff CSR,Umum, keamanan</option>
									</select>
								</div>
							<?php } ?>
							
							<?php if($barang->id_kategori==2 AND  $barang->id_status==104){ //Verifikasi invoice - diverifikasi oleh EVP, diteruskan ke Manager Umum ?>
								<div class="form-group">
									<label>Disposisi staff untuk verifikasi</label>
									<select class="form-control" name="id_umum" min="1" required>
										<option value="">---Pilih Staff---</option>
										<option value="105">Disposisi ke staff EP, K3L</option>
										<option value="106">Disposisi ke staff CSR,Umum, keamanan</option>
									</select>
								</div>
							<?php } ?>
							
							<div class="form-group">
								<a  href="#" class="btn btn-info" data-toggle="modal" data-target="#catatan">Tampilkan Catatan</a>
							</div>
							
							
					
							<?php if($_SESSION['role']==3 AND $_SESSION['id_kantor']==1 AND ($barang->id_status==11 OR $barang->id_status == 25 OR $barang->id_status == 28 OR $barang->id_status == 13)){ ?>
								<div class="form-group">
									<label>Catatan Staff PJBS</label>
									<textarea class="form-control" name="note_staff_pjbs"><?= $barang->note_staff_pjbs ?></textarea>
								</div>
							<?php }else{ ?>
								
							<?php } ?>
							
							<?php if($_SESSION['role']==1 AND $_SESSION['id_kantor']==1 AND $barang->id_status==11){ ?>
								<div class="form-group">
									<label>Catatan GM PJBS</label>
									<textarea class="form-control" name="note_gm_pjbs"><?= $barang->note_gm_pjbs ?></textarea>
								</div>
							<?php }else{ ?>
								
							<?php } ?>
							
							<?php if($barang->id_status==12 OR $barang->id_status==24 OR $barang->id_status==27 OR $barang->id_status==44 OR $barang->id_status==103){ ?>
								<div class="form-group">
									<label>Catatan EVP</label>
									<textarea class="form-control" name="note_evp"><?= $barang->note_evp ?></textarea>
								</div>
							<?php }else{ ?>
								
							<?php } ?>
							
							<?php if($barang->id_status==15 OR $barang->id_status==17 OR $barang->id_status==2){ ?>
								<div class="form-group">
									<label>Catatan Manager</label>
									<textarea class="form-control" name="note_mgr"><?= $barang->note_mgr ?></textarea>
								</div>
							<?php }else{ ?>
								
							<?php } ?>
							
							<?php if($barang->id_status==16 OR $barang->id_status==100){ ?>
								<div class="form-group">
									<label>Catatan Staff O&M</label>
									<textarea class="form-control" name="note_staff_om"><?= $barang->note_staff_om ?></textarea>
								</div>
							<?php } ?>
							
							<?php if($barang->id_status==105 OR $barang->id_status==106){ ?>
								<div class="form-group">
									<label>Catatan Staff Umum</label>
									<textarea class="form-control" name="note_staff_k3l_csr"><?= $barang->note_staff_k3l_csr ?></textarea>
								</div>
							<?php } ?>
							
							<?php if($barang->id_status==21){ ?>
								<div class="form-group">
									<label>Catatan Sekretariat</label>
									<textarea class="form-control" name="note_staff_umum"><?= $barang->note_staff_umum ?></textarea>
								</div>
							<?php } ?>
							
							<?php if($barang->id_status==18){ ?>
								<div class="form-group">
									<label>Catatan Staff Pengadaan</label>
									<textarea class="form-control" name="note_staff_pengadaan"><?= $barang->note_staff_pengadaan ?></textarea>
								</div>
							<?php } ?>
							
							<?php if($barang->id_status==19 OR $barang->id_status==37){ ?>
								<div class="form-group">
									<label>Catatan Staff Pemeriksa</label>
									<textarea class="form-control" name="note_staff_pemeriksa"><?= $barang->note_staff_pemeriksa ?></textarea>
								</div>
							<?php } ?>
							
							<?php if($barang->id_status==36){ ?>
								<div class="form-group">
									<label>Catatan BA</label>
									<textarea class="form-control" name="note_staff_gudang"><?= $barang->note_staff_gudang ?></textarea>
								</div>
							<?php } ?>
							
							<?php if($barang->id_status==39){ ?>
								<div class="form-group">
									<label>Catatan Invoice</label>
									<textarea class="form-control" name="note_staff_inv"><?= $barang->note_staff_inv ?></textarea>
								</div>
							<?php } ?>
							
							<?php if($barang->id_status==108){ ?>
								<div class="form-group">
									<label>Catatan Keuangan</label>
									<textarea class="form-control" name="note_staff_keuangan"><?= $barang->note_staff_keuangan ?></textarea>
								</div>
							<?php } ?>
							
							
							<?php if($barang->id_status == 13 OR $barang->id_status == 22 OR $barang->id_status == 25 OR $barang->id_status == 28 OR $barang->id_status == 38 OR $barang->id_status == 42 OR $barang->id_status == 151 OR $barang->id_status == 152 OR $barang->id_status == 153){	
								
									echo '<div class="form-group">
										<label>Deadline revisi</label>';
									
									if(date('d-m-Y H:i',strtotime(view_riwayat($barang->id_request, $barang->id_status)))<>"0000-00-00 00:00:00"){
										//date('d-m-Y H:i',strtotime(view_riwayat($v->id_request, $v->id_status)));
										echo '<input type="text" class="form-control" value="'. date('d-m-Y H:i',strtotime(view_riwayat($barang->id_request, $barang->id_status))) .'" disabled>';
									}else
									{
										echo '<input type="text" class="form-control" value="-" disabled>';
									}
										
									echo'</div>';
								
								
								echo'<div class="form-group">
									<label>Alasan Ditolak</label>
									<textarea class="form-control" disabled>' . $barang->alasan_ditolak . '</textarea>
								</div>';
							}
							?>
							
<!-- end isset -->						
						<?php }else{ ?>
<!-- start non var -->						
							<div class="form-group">
								<label>Nama Usulan</label>
								<input type="text" class="form-control" name="nama_barang" required>
							</div>
							<div class="form-group">
								<label>Deskripsi</label>
								<textarea class="form-control" name="deskripsi"></textarea>
							</div>
							<div class="form-group">
								<label>Jenis</label>
								<select name="id_jenis"class="form-control" min="1" <?php if($_SESSION['id_kantor']==1 AND $_SESSION['role']==3){ echo 'required';}else{echo 'disabled';} ?>>
								<?php 
								foreach($jenis as $v){
									echo '<option value="' . $v->id_jenis . '">' . $v->nama_jenis . '</option>';
								}
								?>
								</select>
							</div>
							<div class="form-group">
								<label>Jenis Anggaran</label>
								<select name="id_jenis_anggaran"class="form-control" min="1" required>
								<?php 
								foreach($jenis_anggaran as $v){
									echo '<option value="' . $v->id_jenis_anggaran . '">' . $v->nama_jenis_anggaran . '</option>';
								}
								?>
								</select>
							</div>
							<div class="form-group">
								<label>Anggaran Tahun</label>
								<input type="number" class="form-control" name="anggaran" required>
							</div>
							<div class="form-group">
								<label>Tanggal dibutuhkan</label>
								<input type="date" id="tglm" class="form-control" name="tgl_butuh" required>
							</div>
							<div class="form-group">
								<label>Jatuh Tempo untuk proses selanjutnya</label>
								<input type="date" id="tglm2" class="form-control" name="deadline" required>
							</div>
							<div class="form-group bootstrap-timepicker">
								<input id="timepicker1" type="text" class="form-control" name="time" required>
							</div>
							<?php if($_SESSION['role']==3 AND $_SESSION['id_kantor']==1){ ?>
							<div class="form-group">
								<label>Catatan Staff PJBS</label>
								<textarea class="form-control" name="note_staff_pjbs"></textarea>
							</div>
							<?php } ?>
							<?php if($_SESSION['role']==1 AND $_SESSION['id_kantor']==1){ ?>
								<div class="form-group">
									<label>Catatan GM PJBS</label>
									<textarea class="form-control" name="note_gm_pjbs"></textarea>
								</div>
							<?php } ?>
							<?php if($_SESSION['role']==1 AND $_SESSION['id_kantor']==2){ ?>
								<div class="form-group">
									<label>Catatan EVP</label>
									<textarea class="form-control" name="note_evp"></textarea>
								</div>
							<?php } ?>
							<?php if($_SESSION['role']==1 AND $_SESSION['id_kantor']==2){ ?>
								<div class="form-group">
									<label>Catatan Manager</label>
									<textarea class="form-control" name="note_mgr"></textarea>
								</div>
							<?php } ?>
						<?php } ?>
<!-- end non var -->	
					<?php if($mode_file==1){ ?>
						<div class="form-group">
							<label>Lampiran File <?= $lampiran ?></label>
							<input type="file" class="file" id="id-input-file-2" <?php if(isset($file_req)){if($file_req==1){echo 'required';}} ?>>
							<div id="message_info"></div>
							<?php if(isset($file_req)){if($file_req==1){ ?>
								<div style="color: red;"><b>*Wajib upload lampiran file</b></div>
							<?php }} ?>
							<div style="color: black;">*jika ingin kirim banyak file, silakan dikompress menggunakan RAR atau ZIP</div>
							<div style="color: black;">*Nama file tidak boleh ada spasi, spasi bisa diganti dengan garis bawah</div>
						</div>
					<?php } ?>
					
					<?php if(isset($barang)){ ?>
						<?php if($barang->nama_file){ ?>
						<div class="form-group">
							<a href="<?= base_url('assets/file_upload/' . str_replace(' ','_',$barang->nama_file) ) ?>" target="_blank" class="btn btn-purple btn-sm"><i class="ace-icon fa fa-cloud-download"></i> Download Lampiran</a>
						</div>
						<?php } ?>
						<?php if($barang->nama_file_evp){ ?>
						<div class="form-group">
							<a href="<?= base_url('assets/file_evp/' . str_replace(' ','_',$barang->nama_file_evp) ) ?>" target="_blank" class="btn btn-purple btn-sm"><i class="ace-icon fa fa-cloud-download"></i> Download Lampiran EVP</a>
						</div>
						<?php } ?>
						<?php if($barang->nama_file_mgr){ ?>
							<?php if($barang->id_kategori==1){ ?>
								<div class="form-group">
									<a href="<?= base_url('assets/file_mgr_om/' . str_replace(' ','_',$barang->nama_file_mgr) ) ?>" target="_blank" class="btn btn-purple btn-sm"><i class="ace-icon fa fa-cloud-download"></i> Download Lampiran Manager OM</a>
								</div>
							<?php }else{ ?>
								<div class="form-group">
									<a href="<?= base_url('assets/file_mgr_umum/' . str_replace(' ','_',$barang->nama_file_mgr) ) ?>" target="_blank" class="btn btn-purple btn-sm"><i class="ace-icon fa fa-cloud-download"></i> Download Lampiran Manager Umum</a>
								</div>
							<?php } ?>
						<?php } ?>
						<?php if($barang->nama_file_staff_om){ ?>
						<div class="form-group">
							<a href="<?= base_url('assets/file_staff_om/' . str_replace(' ','_',$barang->nama_file_staff_om) )?>" target="_blank" class="btn btn-purple btn-sm"><i class="ace-icon fa fa-cloud-download"></i> Download Lampiran Staff OM</a>
						</div>
						<?php } ?>
						<?php if($barang->nama_file_staff_k3l){ ?>
						<div class="form-group">
							<a href="<?= base_url('assets/file_staff_k3l/' . str_replace(' ','_',$barang->nama_file_staff_k3l)) ?>" target="_blank" class="btn btn-purple btn-sm"><i class="ace-icon fa fa-cloud-download"></i> Download Lampiran Staff EP, K3L</a>
						</div>
						<?php } ?>
						<?php if($barang->nama_file_staff_csr){ ?>
						<div class="form-group">
							<a href="<?= base_url('assets/file_staff_csr/' . str_replace(' ','_',$barang->nama_file_staff_csr) )?>" target="_blank" class="btn btn-purple btn-sm"><i class="ace-icon fa fa-cloud-download"></i> Download Lampiran Staff CSR, Umum, Keamanan</a>
						</div>
						<?php } ?>
						<?php if($barang->nama_file_staff_umum){ ?>
						<div class="form-group">
							<a href="<?= base_url('assets/file_staff_umum/' . str_replace(' ','_',$barang->nama_file_staff_umum) )?>" target="_blank" class="btn btn-purple btn-sm"><i class="ace-icon fa fa-cloud-download"></i> Download Lampiran Sekretariat</a>
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
					
					
					<!--a href="<?//= base_url('approve/acc/1/' . $barang->id_request)?>" class="btn btn-success">Disetujui</a-->
					<button type="submit" id="save_data" class="btn btn-success">Simpan</button>
					<?php if(isset($btn_custom)){ ?>
						<?= $btn_custom ?>
					<?php } ?>
					<!--a href="<? //= base_url('keuangan/menunggu/') . $barang->id_request ?>" class="btn btn-yellow">Menunggu Invoice</a-->
					<a href="<?= base_url($back) ?>" class="btn btn-default">Kembali</a>
				</form>
				
<!-- Form Ditolak -->				
				<?php if($ditolak){ ?>
				<br>
				<h3><b>Form Penolakan Usulan</b></h3>
				<form method="POST" action="<?= $url_ditolak ?>">
					<input type="hidden" value="<?= $barang->id_request ?>" name="id_request">
					<input type="hidden" value="<?= $barang->id_status ?>" name="id_status">
					<?php if($barang->id_status <> 21){ ?>
						<div class="form-group">
							<label>Deadline</label>
							<input type="date" id="tgl_ditolak" class="form-control" name="deadline" required>
						</div>
						<!--div class="form-group bootstrap-timepicker">
							<input id="timepicker_ditolak" type="text" class="form-control" name="time" required>
						</div-->
					<?php } ?>
					
					<?php if($barang->id_status == 108){ ?>
						<div class="form-group">
							<label>Opsi revisi</label>
							<select name="id_status_kembali" class="form-control" min="1" required>
								<option value="">---Pilih Opsi---</option>
								<option value="42">Revisi BA</option>
								<option value="151">Revisi Invoice - Staff O&M</option>
								<option value="152">Revisi Invoice - Staff EP, K3L</option>
								<option value="153">Revisi Invoice - Staff CSR, Umum, Keamanan</option>
							</select>
						</div>
					<?php } ?>
					
					<div class="form-group">
                        <label><?= $header_ditolak ?></label>
                        <textarea class="form-control" name="alasan_ditolak" required></textarea>
                    </div>
					<?php if($barang->id_status==21){ ?>
						<button type="submit" class="btn btn-danger">Ditolak</button>
					<?php }else{ ?>
						<button type="submit" class="btn btn-danger">Revisi</button>
					<?php } ?>
				</form>
				<?php } ?>
<!-- Form Ditolak -->

            </div>
        </div>
    <!--End Advanced Tables -->
    </div>
</div>
            