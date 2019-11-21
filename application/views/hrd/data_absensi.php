<div class="span9">
    <div class="content">
        <div class="module">
            <!--Modal-->
            <div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="myModaliLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModaliLabel">Import Excel to MySql</h4>
                        </div>
                    <div class="modal-body"> 
                            <div class="form-group" >
                            <?php echo form_open_multipart('excel_import/import_data');
                            echo form_upload('file'); ?>
                            </div>
                    </div>
                        <div class="modal-footer">
                        <a>
                            <?php
                            echo form_submit(null, 'Upload');
                            echo form_close();
                            ?>
                        </a>  
                        </div>
                    </div>
                </div>
            </div>
            <!--End Modal-->
            <div class="module-head">
                <a href="<?php echo base_url('index.php/hrd/hapusdata/'); ?>" id="tambah" style="margin-left: 10px"; class="btn btn-danger btn-fill pull-right" name="all" type="submit"><i class="menu-icon icon-trash"></i></a>   
                <a id="tambah" class="btn btn-primary btn-fill pull-right" data-toggle="modal" data-target="#import"><i class="menu-icon icon-upload-alt"></i>&nbsp;&nbsp;Import</a>    
                <h3>Data Karyawan PT.PYXIS 2019</h3>
                <p class="category">* Data ini akan berubah sewaktu-waktu</p>
            </div>
            <div class="module-body table">
                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
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
                    <?php $no = 0; foreach ($absensi as $row): $no++; ?>
                        <tr class="odd gradeX">
                            <td><?php echo $no;?></td>
                            <td><?php echo $row->nik;?></td>
                            <td><?php echo date('M,Y',strtotime($row->tgl));?></td>
                            <td><?php echo $row->nama;?></td>
                            <td><?php echo $row->cabang;?></td>
                            <td><?php echo $row->departemen;?></td>
                            <td><?php echo $row->jabatan?></td>                                                                      
                            <td>
                            <a href="<?php echo base_url('index.php/hrd/detail_absensi/' .$row->nik);?>" class='btn btn-primary btn-xs btn-fill'>Detail</a>
                            </td>
                        </tr>
                        <?php endforeach ; ?> 
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