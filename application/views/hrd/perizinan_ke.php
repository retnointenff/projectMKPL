<div class="span9">
    <div class="content">
        <div class="module">
            <div class="module-head">
            <div class="dropdown pull-right">
                <button id="tambah" class="btn btn-primary dropdown-toggle btn-fill" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Jenis Izin
                <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <li><a href="<?php echo base_url('index.php/hrd/perizinan'); ?>">Izin Cuti</a></li>
                    <li><a href="<?php echo base_url('index.php/hrd/perizinan_kh'); ?>">Izin Khusus</a></li>
                    <li><a href="<?php echo base_url('index.php/hrd/perizinan_ke'); ?>">Izin Keluar</a></li>
                </ul>  
            </div>
                <h3>Data Izin Keluar Karyawan PT PYXIS Ultimate Solution</h3>
                <p>*Data ini akan berubah sewaktu-waktu </p>
            </div>
            <div class="module-body table">
                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                    width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Tanggal Cuti</th>
                            <th>Jam Keluar</th>
                            <th>Jam Kembali</th>
                            <th>Jenis Izin</th>
                            <th>Status</th>
                            <th colspan="2">Action</th>                                            
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; foreach ($perizinan_ke as $prz) {?>
                        <tr class="odd gradeX">
                            <td><?php echo $no++?></td>
                            <td><?php echo $prz->nama?></td>
                            <td><?php echo $prz->jabatan?></td>
                            <td><?php echo $prz->tgl?></td>
                            <td><?php echo $prz->keluar?></td>
                            <td><?php echo $prz->kembali ?></td>
                            <td><?php echo $prz->jenis?></td>
                            <?php if ($prz->status == 0) {?>                                                
                                <td><span class="menu-icon icon-remove"></span></td>
                            <?php } else { ?>
                                <td><span class="menu-icon icon-ok"></span></td>
                            <?php } ?>
                             <?php if ($prz->status == '0') { ?>
                                <td><a class='btn btn-success btn-xs' onclick="return confirm('Konfirmasi Izin')" href="<?php echo base_url('index.php/Hrd/aprove3/'. $prz->kd_keluar) ?>"><span class="menu-icon icon-ok"></span></a></td>
                            <?php } else { ?>
                                <td><a class='btn btn-success btn-xs' onclick="alert('Sudah di Approval')" ><span class="menu-icon icon-ok"></span></a></td>
                            <?php } ?>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</body>
</html>