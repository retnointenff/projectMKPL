<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<div class="span9">
    <div class="content">
        <div class="module">
            <?php 
                $kry = $this->db->query("SELECT * FROM karyawan WHERE nik = ".$this->session->userdata('nik'))->row_array();
                $id=1;
            ?>
			<div class="module-head">
			    <h3>Form Izin Cuti</h3>
			</div>
			<div class="module-body">
                <form class="form-horizontal row-fluid"  action="<?php echo base_url('index.php/izin/cuti');?>" method="post" >
				    <div class="control-group">
					    <label class="control-label" for="basicinput">Kode Cuti</label>
						<div class="controls">
						    <div class="input-prepend">
							    <input class="span8" type="text" name="kd_cuti" placeholder="C000".$id value="<?php echo "C000".$id++?>" readonly>       
							</div>
						</div>
					</div>
                    <div class="control-group">
					    <label class="control-label" for="basicinput">NIK</label>
						<div class="controls">
						    <div class="input-prepend">
							    <input class="span8" type="text" name="nik" placeholder="<?php echo $kry['nik'] ?>" readonly>       
							</div>
						</div>
					</div>
					<div class="control-group">
					    <label class="control-label" for="basicinput">Nama</label>
						<div class="controls">
						    <input type="text" id="basicinput" name="nama" placeholder="<?php echo $kry['nama'] ?>" class="span8" readonly>
						</div>
					</div>
                    <div class="control-group">
					    <label class="control-label" for="basicinput">Departemen</label>
						<div class="controls">
						    <input type="text" id="basicinput" name="departemen" placeholder="<?php echo $kry['departemen'] ?>" class="span8" readonly>
						</div>
					</div>
                    <div class="control-group">
					    <label class="control-label" for="basicinput">Jabatan</label>
						<div class="controls">
						    <input type="text" id="basicinput" name="jabatan" placeholder="<?php echo $kry['jabatan'] ?>" class="span8" readonly>
						</div>
					</div>
                    <div class="control-group">
					    <label class="control-label" for="basicinput">Jenis Cuti</label>
						<div class="controls">
						    <select tabindex="1" name="jenis" data-placeholder="Pilih Cuti" class="span8" required>
                                <option value="tahunan">Tahunan</option>
                                <option value="melahirkan">Melahirkan</option>
                                <option value="lain-lain">Lain-lain</option>
                            </select>
                        </div>
					</div>
                    <div class="control-group">
					    <label class="control-label" for="basicinput">Total Cuti</label>
						<div class="controls">
						    <div class="input-prepend">
							    <input class="span8" name="total" type="text" id="total" placeholder="<?php echo $kry['cuti'] ?>" value="<?php echo $kry['cuti'] ?>" readonly>       
							</div>
						</div>
					</div>
                    <div class="control-group">
					    <label class="control-label" for="basicinput">Ambil Cuti</label>
						<div class="controls">
						    <div class="input-prepend">
							    <input class="span8" name="ambil" type="text" id="ambil" placeholder="0" required>       
							</div>
						</div>
                        <script type="text/javascript">
                            $(document).ready(function(){
                                $('#ambil').on("input",
                                    function(){ 
                                        var ptotal=parseInt($('#total').val());
                                        var pambil=parseInt($('#ambil').val());
                                        var psisa = (ptotal-pambil);
                                        $('#sisa').val(psisa);
                                    }
                                );
                            });
                        </script>
					</div>
                    <div class="control-group">
					    <label class="control-label" for="basicinput">Sisa Cuti</label>
						<div class="controls">
						    <div class="input-prepend">
							    <input class="span8" name="sisa" type="text" id="sisa" value="" readonly>       
							</div>
						</div>
					</div>
                    <div class="control-group">
					    <label class="control-label" for="basicinput">Tanggal Mulai</label>
						<div class="controls">
						    <div class="input-prepend">
							    <input type="date" placeholder="" name="dari" class="span" required><span class="add-on menu-icon icon-calendar"></span>
							</div>
						</div>
					</div>
                    <div class="control-group">
					    <label class="control-label" for="basicinput">Tanggal Selesai</label>
						<div class="controls">
						    <div class="input-prepend">
							    <input type="date" placeholder="" name="sampai" class="span" required><span class="add-on menu-icon icon-calendar"></span>
							</div>
						</div>
					</div>
                    <div class="control-group">
					    <label class="control-label" for="basicinput">Tanggal Masuk</label>
						<div class="controls">
						    <div class="input-prepend">
							    <input type="date" placeholder="" name="masuk" class="span" required><span class="add-on menu-icon icon-calendar"></span>
							</div>
						</div>
					</div>
					<div class="control-group">
					    <div class="controls">
						    <button type="submit" name="ajukan" class="btn btn-success">Ajukan Cuti</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="module">
            <div class="module-head">
                <h3>Riwayat Cuti</h3>
            </div>
            <div class="module-body table">
                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Tanggal Cuti</th>
                            <th>Tanggal Masuk</th>
							<th>Jenis Cuti</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach ($cuti as $cuti) {?>
                        <tr class="odd gradeX">
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $cuti->nama ?></td>
                            <td><?php echo $cuti->dari ?></td>
                            <td><?php echo $cuti->masuk ?></td>
							<td><?php echo $cuti->jenis ?></td>
							<td class="text-center"><a class='btn btn-danger btn-xs' href="<?php echo base_url('index.php/izin/deleteCuti/' . $cuti->kd_cuti);?>"><span class="menu-icon icon-trash"></span></a></td>
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