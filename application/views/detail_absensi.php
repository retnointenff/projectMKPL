<div class="span9">
    <div class="content">
        <div class="module">
            <div class="module-head">
                <a id="tambah" href="<?php echo base_url('index.php/karyawan/absensi'); ?>" style="margin-left: 10px"; name="all" class="btn btn-danger btn-fill pull-right"><i class="menu-icon icon-arrow-left"></i>&nbsp; Kembali</a>
                <h3>Data Karyawan PT.PYXIS 2019</h3>
                <p class="category">* Data ini akan berubah sewaktu-waktu</p>
            </div>
            
            <div class="module-body table">
                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                    width="100%">
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
            <?php $no = 0;

            $jumlahnya = [];
            foreach ($detail_absensi as $row): $no++; ?>
                <?php //$query = $this->db->query("SELECT * FROM absensi WHERE jam GROUP BY nik "); ?>

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
                    <td align="center"><?php
                        $datetime1 = strtotime("08:00");
                        $datetime2 = strtotime($row->jam);
                        $interval = $datetime2 - $datetime1;
                        $hitung_jam = floor($interval / 60);
                        $hitung_menit = (INT)$hitung_jam;
                        if ($hitung_menit<=0){
                            echo "<input class='btn btn-info btn-fill btn-xs' readonly type='text' value='0 menit'>";
                        } else {
                            echo "<input class='btn btn-danger btn-fill btn-xs' readonly type='text' value='-$hitung_menit menit'>";
                        }
                        ?> </td>
                    <!-- <td class="total"> -->
                        <?php
                        if ($hitung_menit > 0) {
                            array_push($jumlahnya, $hitung_menit);
                            $hitung_menit * 0;
                            // array_push($jumlahnya, $hitung_menit);
                            // $jumlahnya[] = $hitung_menit;
                            $jumlah= array_sum($jumlahnya);
                            $jumlah = $jumlah *-1;
                            //echo "$jumlah";
                        } else{
                            $jumlah=0;
                        }

                        // if ($hitung_menit <= 0) {
                            
                        // }
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
                                <td>
                                    <h5> Total telat selama sebulan</h5>
                                </td>
                                <td>
                                    <h5>&nbsp; : &nbsp; <?php echo "<b> $telat menit</b>";
                                    ?>
                                    </h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5> Denda yang harus dibayar</h5>
                                </td>
                                <td>
                                    <h5>&nbsp; : &nbsp;
                                        <?php
                                            if ($telat<30){
                                                $denda = $telat * 0;
                                                echo "<b>Rp.$denda</b>";
                                            }elseif ($telat > 30){
                                                $denda = $telat * 1000;
                                                echo "Rp.".number_format($denda, 0, ".", ".");
                                            }
                                        ?>
                                        </h5> 
                                </td>
                            </tr>
                        <tr>
                            <td>
                                <h5> Anda Mendapatkan</h5>
                            </td>
                            <td>
                            <h5>&nbsp; : &nbsp;
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
                                $hasil = $this->db->query("UPDATE lambat SET bulan ='$bulan', telat='$telat', denda ='$denda', sp='$sp' WHERE nik = '$nik' ");?>
                                </h5> 
                        </td>
                </tr>
            </table>
            </form>   
        </div>
    </div>
</div>
</div>
</div>
</div>
</body>
</html>