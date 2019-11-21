<div class="span9">
    <div class="content">
        <div class="module">
            <?php $kry = $this->db->query("SELECT * FROM karyawan WHERE nik = ".$this->session->userdata('nik'))->row_array();?>
            <div class="module-head">
                <h3>Edit Profil</h3>
            </div>
            <div class="module-body">
                <form action="<?php echo base_url('index.php/'.$this->session->userdata('jabatan').'/proses_edit');?>" method="POST" class="form-horizontal row-fluid" >
                <div class="control-group">
                    <label class="control-label" for="basicinput">NIK</label>
                    <div class="controls">
                        <div class="input-prepend">
                            <input type="text" id="basicinput"  value="<?php echo $kry['nik'] ?>" class="span8" name="nik" disabled>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="basicinput">Jabatan</label>
                    <div class="controls">
                        <div class="input-prepend">
                            <input type="text" id="basicinput" value="<?php echo $kry['jabatan'] ?>" class="span8" name="jabatan" disabled>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="basicinput">Departemen</label>
                    <div class="controls">
                        <div class="input-prepend">
                            <input type="text" id="basicinput" value="<?php echo $kry['departemen'] ?>"  class="span8" name="departemen" disabled> 
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="basicinput">Nama Lengkap</label>
                    <div class="controls">
                        <input type="text" data-original-title="" value="<?php echo $kry['nama'] ?>" class="span8 tip" name="nama" required>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="basicinput">E-mail</label>
                    <div class="controls">
                        <input type="text" data-original-title="" value="<?php echo $kry['email'] ?>" class="span8 tip" name="email">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="basicinput">Alamat Lengkap</label>
                    <div class="controls">
                        <input type="text" data-original-title="" value="<?php echo $kry['alamat'] ?>" class="span8 tip" name="alamat" required>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="basicinput">Cabang</label>
                    <div class="controls">
                        <div class="input-prepend">
                            <input type="text" id="basicinput"  value="<?php echo $kry['cabang'] ?>" class="span8" name="cabang" disabled>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="basicinput">Kontrak</label>
                    <div class="controls">
                        <div class="input-prepend">
                            <input type="text" id="basicinput"  value="<?php echo $kry['kontrak'] ?>" class="span8" name="kontrak" disabled>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="basicinput">Tempat Lahir</label>
                    <div class="controls">
                        <input type="text"  data-original-title="" value="<?php echo $kry['tempat'] ?>" class="span8 tip" name="tempat" required>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="basicinput">Tanggal Lahir</label>
                    <div class="controls">
                        <div class="input-prepend">
                            <input type="date"  data-original-title="" value="<?php echo $kry['tgl_lahir'] ?>" class="span" name="tgl_lahir" required>
                        </div>
                        </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Password</label>
                                    <div class="controls">
                                        <input type="password"  data-original-title="" value="<?php echo $kry['pin'] ?>" class="span8 tip" name="password" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Telephone</label>
                                    <div class="controls">
                                        <input type="text"  data-original-title="" value="<?php echo $kry['phone'] ?>" class="span8 tip" name="phone" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Masuk</label>
                                    <div class="controls">
                                        <div class="input-prepend">
                                            <input type="text" id="basicinput"  value="<?php echo $kry['tgl_masuk'] ?>" class="span8" name="tgl_masuk" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Keluar</label>
                                    <div class="controls">
                                        <div class="input-prepend">
                                            <input type="text" id="basicinput" value="<?php echo $kry['tgl_keluar'] ?>"  class="span8" name="tgl_keluar" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" class="btn btn-success btn-flat" name="simpan">Simpan</button>
                                        <a class="btn btn-danger btn-flat" href="<?php echo base_url('index.php/' . strtolower($this->session->userdata('jabatan')));?>">Batal</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--/.module-->
                </div>
                <!--/.content-->
            </div>
            <!--/.span9-->
        </div>
    </div>
    <!--/.container-->
</div>
</body>
</html>