<div class="span9">
    <div class="content">
        <div class="module">
            <?php
                $kry = $this->db->query("SELECT * FROM karyawan WHERE nik = " . $this->session->userdata('nik'))->row_array();
                $id = 1;
            ?>
			<div class="module-head">
			    <h3>Form Izin Keluar</h3>
			</div>
			<div class="module-body">
                <form class="form-horizontal row-fluid"  action="<?php echo base_url('index.php/izin/keluar'); ?>" method="post" >
				    <div class="control-group">
					    <label class="control-label" for="basicinput">Kode Izin</label>
					    <div class="controls">
						    <div class="input-prepend">
							    <input class="span8" type="text" name="kd_keluar" placeholder="K000".$id value="<?php echo "K000" . $id++ ?>" readonly>
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
							    <option value="pribadi">Pribadi</option>
								<option value="tugas kantor">Tugas Kantor</option>
							</select>
						</div>
					</div>
                    <div class="control-group">
					    <label class="control-label" for="basicinput">Waktu Izin</label>
						<div class="controls">
						    <div class="input-prepend">
							    <input type="text" value="<?php $dt = new DateTime(null, new DateTimeZone('Asia/Jakarta')); echo $dt->format('Y-m-d H:i:s a');?>" name="tgl" class="span" readonly><span class="add-on menu-icon icon-calendar"></span>
							</div>
						</div>
					</div>
                    <div class="control-group">
					    <label class="control-label" for="basicinput">Jam Keluar</label>
						<div class="controls">
						    <div class="input-prepend">
							    <input type="time" required name="keluar" class="span"><span class="add-on menu-icon icon-time"></span>
							</div>
						</div>
					</div>
                    <div class="control-group">
					    <label class="control-label" for="basicinput">Jam Kembali</label>
						<div class="controls">
						    <div class="input-prepend">
							    <input type="time" required name="kembali" class="span"><span class="add-on menu-icon icon-time"></span>
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
</div> <!--/.row-->
</div> <!--/.container-->
</div> <!--/.wrapper-->
</body>
</html>