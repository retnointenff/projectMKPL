<div class="span9">
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>Edit Data Karyawan</h3>
            </div>
            <div class="module-body">
                <form action="<?php echo base_url('index.php/Hrd/proses_Karyawan');?>" method="POST" class="form-horizontal row-fluid" >
                    <?php
                    foreach ($karyawan as $kyw) {
                        ?>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">NIK</label>
                        <div class="controls">
                            <input type="text" data-original-title="" value="<?php echo $kyw->nik ?>" class="span8 tip" name="nik" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Jabatan</label>
                        <div class="controls">
                            <input type="text" data-original-title="" value="<?php echo $kyw->jabatan ?>" class="span8 tip" name="jabatan" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Departemen</label>
                        <div class="controls">
                            <input type="text" data-original-title="" value="<?php echo $kyw->departemen ?>" class="span8 tip" name="departemen" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Nama Lengkap</label>
                        <div class="controls">
                            <input type="text" data-original-title="" value="<?php echo $kyw->nama ?>" class="span8 tip" name="nama" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">E-mail</label>
                        <div class="controls">
                            <input type="text" data-original-title="" value="<?php echo $kyw->email ?>" class="span8 tip" name="email" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Alamat Lengkap</label>
                        <div class="controls">
                            <input type="text" data-original-title="" value="<?php echo $kyw->alamat ?>" class="span8 tip" name="alamat" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Cabang</label>
                        <div class="controls">
                            <input type="text" data-original-title="" value="<?php echo $kyw->cabang ?>" class="span8 tip" name="cabang" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Kontrak</label>
                        <div class="controls">
                            <input type="text" data-original-title="" value="<?php echo $kyw->kontrak ?>" class="span8 tip" name="kontrak" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Tempat Lahir</label>
                        <div class="controls">
                            <input type="text"  data-original-title="" value="<?php echo $kyw->tempat ?>" class="span8 tip" name="tempat" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Tanggal Lahir</label>
                        <div class="controls">
                            <div class="input-prepend">
                                <input type="date"  data-original-title="" value="<?php echo $kyw->tgl_lahir ?>" class="span" name="tgl_lahir" required>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Password</label>
                        <div class="controls">
                                <input type="password" id="basicinput"  value="123456" class="span8" name="password" disabled>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Telephone</label>
                        <div class="controls">
                            <input type="text"  data-original-title="" value="<?php echo $kyw->phone ?>" class="span8 tip" name="phone" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Tanggal Masuk</label>
                        <div class="controls">
                            <input type="text"  data-original-title="" value="<?php echo $kyw->tgl_masuk ?>" class="span8 tip" name="tgl_masuk" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Tanggal Keluar</label>
                        <div class="controls">
                            <input type="text"  data-original-title="" value="<?php echo $kyw->tgl_keluar ?>" class="span8 tip" name="tgl_keluar" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" class="btn btn-success btn-flat" name="simpan">Simpan</button>
                            <button type="submit" class="btn btn-danger btn-flat" name="kembali" href="<?php echo base_url('index.php/hrd/karyawan'); ?>">Kembali</button>
                        </div>
                    </div>
                    <?php } ?>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</body>
</html>