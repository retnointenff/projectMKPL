<div class="span9">
    <div class="content">
        <div class="module">
            <?php
                $kry = $this->db->query("SELECT * FROM karyawan WHERE nik = " . $this->session->userdata('nik'))->row_array();
                $id = 1;
            ?>
			<div class="module-head">
			    <h3>Form Izin Khusus</h3>
			</div>
			<div class="module-body">
                <form class="form-horizontal row-fluid"  action="<?php echo base_url('index.php/izin/khusus'); ?>" method="post" >
				    <div class="control-group">
					    <label class="control-label" for="basicinput">Kode Izin</label>
						<div class="controls">
						    <div class="input-prepend">
							    <input class="span8" type="text" name="kd_izin" placeholder="KH000".$id value="<?php echo "KH000" . $id++ ?>" readonly>
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
					    <label class="control-label" for="basicinput">Jenis Izin</label>
						<div class="controls">
						    <select tabindex="1" name="jenis" data-placeholder="Pilih Izin" class="span8">
							    <option value="tidak masuk">Tidak Masuk</option>
								<option value="terlambat">Terlambat</option>
								<option value="pulang awal">Pulang Awal</option>
                                <option value="lain-lain">Lain-lain</option>
							</select>
						</div>
					</div>
                    <div class="control-group">
					    <label class="control-label" for="basicinput">Tanggal Izin</label>
						<div class="controls">
						    <div class="input-prepend">
							    <input type="date" required name="tgl" class="span"><span class="add-on menu-icon icon-calendar"></span>
							</div>
						</div>
					</div>
                    <div class="control-group">
					    <label class="control-label" for="basicinput">Jam Izin</label>
						<div class="controls">
						    <div class="input-prepend">
							    <input type="time" required name="jam" class="span"><span class="add-on menu-icon icon-time"></span>
							</div>
						</div>
					</div>
					<div class="control-group">
					    <label class="control-label" for="basicinput">Keterangan</label>
						<div class="controls">
						    <textarea name = "ket" class="span8" rows="5" required></textarea>
						</div>
					</div>
					<div class="control-group">
					    <div class="controls">
						    <button type="submit" name="ajukan" class="btn btn-success">Ajukan Izin</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="module">
            <div class="module-head">
                <h3>Riwayat Izin</h3>
            </div>
            <div class="module-body table">
                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Tanggal Izin</th>
                            <th>Jam Izin</th>
                            <th>Jenis Izin</th>
                            <th>Keterangan</th>
                            <th>Status</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;foreach ($khusus as $khusus) {?>
                        <tr class="odd gradeX">
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $khusus->nama ?></td>
                            <td><?php echo $khusus->tgl ?></td>
                            <td><?php echo $khusus->jam ?></td>
                            <td><?php echo $khusus->jenis ?></td>
                            <td><?php echo $khusus->ket ?></td>
							<?php if($khusus->status == '0') { ?>
								<td><b style="color:red;">Menunggu Konfirmasi</b></td>
							<?php } else if($khusus->status == '1') {?>
								<td><b style="color:blue;">Disetujui</b></td>
							<?php }?>
                            <?php if ($khusus->status == '0') {?>
								<td class="text-center"><a class='btn btn-danger btn-xs' href="<?php echo base_url('index.php/izin/deleteKhusus/' . $khusus->kd_izin); ?>"><span class="menu-icon icon-trash"></span></a></td>
							<?php } else if ($khusus->status == '1') {?>
								<td>-</td>
							<?php }?>
<<<<<<< HEAD
                        </tr>
=======
						</tr>
>>>>>>> eb3ab13216d08f14cf2e98f1d5598af640c5befe
						<?php }?>
                    </tbody>
                </table>
            </div>
        </div> <!--/.module-->
    </div> <!--/.content-->
</div> <!--/.span9-->
</div>
</div> <!--/.container-->
</div> <!--/.wrapper-->
</body>
</html>