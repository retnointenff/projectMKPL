<div class="span9">
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>Slip Gaji dan Tunjangan</h3>
            </div>
            <div class="module-body">
                <form method="GET">
                    <div class="from-group">
                        <table style="form-group">
                            <?php 
                                for ($i=0; $i < sizeof($desk); $i++) { ?>
                            <tr>
                                <td><?= $desk[$i]?></td>
                                <td>&nbsp; : &nbsp;</td>
                                <?php if ($i==0) {?>
                                    <td align="right"><?= $kry[$i];?></td>
                                <?php } else if ($i==1) {?>
                                    <td align="right"><?= $kry[$i];?></td>
                                <?php } else {?>
                                <td align="right"><?= number_format($gaji[$i-1], 0, ".", ".");}}?></td>
                            </tr>
                        </table>
                    </div>
                </form>   
                <hr>
                <div class="" style="padding: 0 0 20px 25px">
                    <button class="btn btn-success btn-fill" data-toggle="modal" data-target="#cetakpdf">CETAK PDF&nbsp;&nbsp;<i class="menu-icon icon-print"></i></button>
                </div>              
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
                        <a href="<?php $a = 0; echo base_url('index.php/gaji/printPdf/'.$kry[$a]); ?>" name="import" class="btn btn-success btn-fill btn-sm" target="_blank"><i class="menu-icon icon-print"></i>&nbsp;&nbsp;Cetak</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!--End Modal--> 
            
        </div> <!--/.module-->
    </div> <!--/.content-->
</div> <!--/.span9-->
</div> <!--/.row-->
</div> <!--/.container-->
</div> <!--/.wrapper-->
</body>