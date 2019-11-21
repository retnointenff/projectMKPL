<div class="span9">
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>Data Karyawan PT.PYXIS 2019</h3>
                <p class="category">* Data ini akan berubah sewaktu-waktu</p>
            </div>
            <div class="module-body">
                <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped	 display" width="100%">
                    <thead>
                        <tr>
                        <th class="text-center"> NO </th>
                        <th class="text-center"> NIK </th> 
                        <th class="text-center"> TGL </th> 
                        <th class="text-center"> NAMA </th>
                        <th class="text-center"> CABANG </th>
                        <th class="text-center"> DEPARTEMEN </th>
                        <th class="text-center"> JABATAN </th>
                        <th class="text-center"> Status </th>  
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 0; foreach ($absensi as $row): $no++;?>                      
                        <tr class="odd gradeX">
                            <td><?php echo $no;?></td>
                            <td><?php echo $row->nik;?></td>
                            <td><?php echo date('M,Y',strtotime($row->tgl));?></td>
                            <td><?php echo $row->nama;?></td>
                            <td><?php echo $row->cabang;?></td>
                            <td><?php echo $row->departemen;?></td>
                            <td><?php echo $row->jabatan?></td>
                            <td>
                                <a href="<?php echo base_url('index.php/karyawan/detail_absensi/' .$row->nik);?>" class='btn btn-primary btn-xs btn-fill'>Detail</a>
                            </td>
                        </tr>
                        <?php endforeach ;?>
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