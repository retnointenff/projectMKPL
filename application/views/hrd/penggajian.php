<div class="span9">
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>Gaji Karyawan</h3>
            </div>
            <div class="module-body table">
                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Departemen</th>
                            <th>Jabatan</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;foreach ($karyawan as $kry) {?>
                        <tr class="odd gradeX">
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $kry->nama ?></td>
                            <td><?php echo $kry->departemen ?></td>
                            <td><?php echo $kry->jabatan ?></td>
                            <td class="text-center"><a class='btn btn-info btn-xs' href="<?php echo base_url('index.php/gaji/detailGaji/' . $kry->nik); ?>">Detail</a></td>
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
