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
    </div> <!--/.content-->
</div> <!--/.span9-->
</div>
</div> <!--/.container-->
</div> <!--/.wrapper-->
</body>
</html>