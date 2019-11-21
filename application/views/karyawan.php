<div class="span9">
    <div class="content">
    <?php $kry = $this->db->query("SELECT * FROM karyawan as k JOIN absensi as a ON k.nik = a.nik WHERE a.nik = " . $this->session->userdata('nik'))->row_array();?>
        <div class="btn-controls">
            <div class="btn-box-row row-fluid">
                <a href="#" class="btn-box big span4"><i class="icon-user"></i><b><?= $kry['telat']." menit"?></b>
                    <p class="text-muted">Keterlambatan</p>
                </a>
            </div>
        </div>
    </div> <!--/.content-->
</div> <!--/.span9-->
</div>
</div>
</div>
</body>
