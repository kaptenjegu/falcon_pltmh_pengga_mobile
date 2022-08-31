<div class="row">
    <div class="col-md-12">


        <!-- Advanced Tables -->
        <? //= $pesan 
        ?>
        <div class="panel panel-default">
            <div class="panel-body">
                <h4><b>Monitoring barang/jasa</b></h4>
                <div class="table-responsive">
                    <!--table class="table table-striped table-bordered table-hover" id="dataTables-example"-->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-data">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Usulan</th>
                                <th>Jenis</th>
                                <th>Kategori</th>
                                <th>Deadline</th>
                                <th>Backlog</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($barang as $v) {
                                if ($_SESSION['id_kantor'] == 2 or $_SESSION['role'] == 1 or $_SESSION['role'] == 0) {
                                    $barang = '<a href="' . base_url('monitoring/manage/' . $v->id_request) . '">' . $v->nama_barang . '</a>';
                                } else {
                                    $barang = $v->nama_barang;
                                }

                                $dl = date('d-m-Y', strtotime(view_riwayat($v->id_request, $v->id_status)));
                                $bl = (strtotime(date('d-m-Y')) - strtotime($dl)) / 60 / 60 / 24;
                                if ($bl <= 0) {
                                    $bl = '-';
                                } else {
                                    $bl = $bl . ' Hari';
                                }

                                echo '<tr>
                                <th>' . $no . '</th>
                                <th>' . $barang . '</th>
                                <th>' . $v->nama_jenis . '</th>
                                <th>' . $v->nama_kategori . '</th>
                                <th>' . $dl . '</th>
                                <th>' . $bl . '</th>
                                <th>' . $v->nama_status . '</th>
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
    </div>
</div>