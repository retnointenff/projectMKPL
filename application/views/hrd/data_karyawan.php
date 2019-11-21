<div class="span9">
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>Data Karyawan</h3>
            </div>
            <div class="module-body table">
                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
                    <thead>
                        <tr>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Kontrak</th>
                            <th>No Telp</th>
                            <th class="text-center">Email</th>
                            <th>Departemen</th>
                            <th>Jabatan</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach ($karyawan as $kry) {?>
                        <tr class="odd gradeX">
                            <td><?php echo $kry->nik?></td>
                            <td><?php echo $kry->nama?></td>
                            <td><?php echo $kry->kontrak?></td>
                            <td><?php echo $kry->phone?></td>
                            <td><?php echo $kry->email?></td>
                            <td><?php echo $kry->departemen?></td>
                            <td><?php echo $kry->jabatan?></td>
                            <td><a class='btn btn-info btn-xs' href="<?php echo base_url('index.php/Hrd/edit_karyawan/'. $kry->nik); ?>"><span class="menu-icon icon-edit" ></span></a></td>
                            <td><a class='btn btn-danger btn-xs' href="<?php echo base_url('index.php/Hrd/deleteKaryawan/' . $kry->nik);?>"><span class="menu-icon icon-trash"></span></a></td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div> <!--/.module-->
    </div> <!--/.content-->
</div> <!--/.span9-->
</div> <!--/.row-->
</div> <!--/.container-->
</div> <!--/.wrapper-->
</body>
</html>