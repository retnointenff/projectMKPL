<div class="span9">
    <div class="content">
        <div class="module">
            <div class="module-head">
                <a id="tambah" href="<?php echo base_url('index.php/hrd/absensi'); ?>" style="margin-left: 10px"; name="all" class="btn btn-danger btn-fill pull-right"><i class="menu-icon icon-reply"></i>&nbsp; Kembali</a>
                <h3>Data Karyawan PT.PYXIS 2019</h3>
                <p class="category">* Data ini akan berubah sewaktu-waktu</p>
            </div>
            <div class="module-body table">
                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center"> NO </th>
                            <th class="text-center"> NIK </th> 
                            <th class="text-center"> NAMA </th> 
                            <th class="text-center"> TGL </th>
                            <th class="text-center"> JAM </th>
                            <th class="text-center"> TELAT</th>
                            <th class="text-center"> Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 0; $jumlahnya = []; foreach ($detail_absensi as $row): $no++; ?>
                    <tr class="odd gradeX">
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row->nik; ?></td>
                        <td><?php echo $row->nama; ?></td>
                        <td>
                            <?php 
                                echo date('d, M Y', strtotime($row->tgl));
                                $bulan = date('M, Y', strtotime($row->tgl)); 
                            ?>
                        </td>
                        <td><?php echo $row->jam; ?></td>
                        <td>
                            <?php
                                $datetime1 = strtotime("08:00");
                                $datetime2 = strtotime($row->jam);
                                $interval = $datetime2 - $datetime1;
                                $hitung_jam = floor($interval / 60);
                                $hitung_menit = (INT)$hitung_jam;
                                if ($hitung_menit<=0){
                                    echo "<input class='btn btn-info btn-fill btn-xs' readonly='readonly' type='text' value='0 menit'>";
                                } else {
                                    echo "<input class='btn btn-danger btn-fill btn-xs' readonly='readonly' type='text' value='-$hitung_menit menit'>";
                                }
                            ?>
                        </td>
                        <!-- <td class="total"> -->
                            <?php
                                if ($hitung_menit > 0) {
                                    array_push($jumlahnya, $hitung_menit);
                                    $hitung_menit * 0;
                                    $jumlah= array_sum($jumlahnya);
                                    $jumlah = $jumlah *-1;
                                    // echo "$jumlah";
                                } else {
                                    $jumlah = 0;
                                }
                            ?>
                        <!-- </td> -->
                        <td>
                            <?php
                                if ($hitung_menit > 0) {
                                    echo "<p class='text-danger '>Telat</p>";
                                } else {
                                    echo "<p class='text-primary '>Normal</p> ";
                                }
                            ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>   
            </table>
        </div>
        <div style="padding: 0px 0 0px 25px;">
            <?php
                $totalTelat = array_sum($jumlahnya);
                $telat = $jumlah *-1;
                $telat = $totalTelat;
                if ($row->nik != '') {
                    $nik = $row->nik;
                }
                $denda = $telat * 1000;
                $hasil = $this->db->query("UPDATE absensi SET telat ='$telat' WHERE nik = '$nik' ");
                $this->db->query("UPDATE gaji SET denda= '.$denda.'WHERE nik = '$nik' ");
            ?>
            <form method="GET">
                <div class="from-group">
                    <table style="form-group">
                        <tr>
                            <td><h5> Total telat selama sebulan</h5></td>
                            <td><h5>&nbsp; : &nbsp; <?php echo "<b> $telat menit</b>";?></h5></td>
                        </tr>
                        <tr>
                            <td><h5> Denda yang harus dibayar</h5></td>
                            <td><h5>&nbsp; : &nbsp;
                                <?php
                                    if ($telat<30){
                                        $denda = $telat * 0;
                                        echo "<b>Rp.$denda</b>";
                                    } elseif ($telat >30){
                                        $denda = $telat*1000;
                                        echo "Rp." . number_format($denda, 0, ".", ".");
                                    }
                                ?>
                                </h5> 
                            </td>
                        </tr>
                        <tr>
                            <td><h5> Anda Mendapatkan</h5></td>
                            <td><h5>&nbsp; : &nbsp;
                                <?php
                                    if($telat == 0){
                                        $sp = "0";
                                        echo "<b>SP $sp </b>";
                                    }elseif ($telat < 30) {
                                        $sp = "1";
                                        echo "<b>SP $sp </b>";
                                    } elseif ($telat > 30) {
                                        $sp = "2";
                                        echo "<b>SP $sp</b>";
                                    }
                                    $hasil = $this->db->query("UPDATE lambat SET bulan ='$bulan', telat='$telat', denda ='$denda', sp='$sp' WHERE nik = '$nik' ");
                                ?>
                                </h5> 
                            </td>
                        </tr>
                    </table>
            <div class="" style="padding: 0 0 20px 25px">
                <button class="btn btn-success btn-fill" data-toggle="modal" data-target="#cetakpdf">CETAK PDF&nbsp;&nbsp;<i class="menu-icon icon-print"></i></button>
            </div>
            
            <!--Modal-->
            <div class="modal fade" id="cetakpdf" tabindex="-1" role="dialog" aria-labelledby="myModaliLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModaliLabel">Cetak Ke PDF</h4>
                        </div>
                        <div class="modal-body">
                            <b>Cetak Laporan PDF</b>
                        </div>
                        <div class="modal-footer">
                            <a type="button" class="btn btn-danger btn-fill btn-sm" data-dismiss="modal"><i class="menu-icon icon-remove"></i>&nbsp;&nbsp;Close</a>
                            <a href="<?php echo base_url('index.php/hrd/cetak_pdf/'.$row->nik); ?>" name="import" class="btn btn-success btn-fill btn-sm" target="_blank"><i class="menu-icon icon-print"></i>&nbsp;&nbsp;Cetak</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Modal--> 
                </div>
            </form>   
            </div>
        </div> <!--/.module-->
    </div> <!--/.content-->
</div> <!--/.span9-->                                                  
</div> <!--/.row-->
</div> <!--/.container-->
</div> <!--/.wrapper-->
</body>
</html>