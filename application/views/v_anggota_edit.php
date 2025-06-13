<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-12">
            <div class="breadcrumbs-area clearfix" style="padding-top : 7px; padding-bottom : 7px">
                <h4 class="page-title">Data Anggota</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="<?php echo base_url() ?>home">Data Penting</a></li>
                    <li><a href="<?php echo base_url() ?>anggota">Anggota</a></li>
                    <li><span>Entri</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- page title area end -->

<div class="main-content-inner">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="card">
                        <?php echo $this->session->flashdata("msg"); ?> 
                        <form action="<?php echo base_url() ?>anggota/submitedit" method="post">
                            <div class="card-body">
                                <h4 class="header-title">Entri Anggota</h4>
                                <input type="hidden" class="form-control" name="anggota_id" value="<?= $anggota->anggota_id ?>" readonly>
                                <div class="form-group">
                                    <label class="col-form-label">Nomor Anggota</label>
                                    <input type="text" class="form-control" name="anggota_kode" readonly value="<?php echo isset($anggota->anggota_kode) ? $anggota->anggota_kode : ''; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Nama Anggota</label>
                                    <input type="text" class="form-control" name="anggota_nama" value="<?php echo isset($anggota->anggota_nama) ? $anggota->anggota_nama : ''; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Alamat</label>
                                    <textarea class="form-control" name="anggota_alamat" rows="3" required><?php echo isset($anggota->anggota_alamat) ? $anggota->anggota_alamat : ''; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Telepon</label>
                                    <input type="text" class="form-control" name="anggota_nohp" value="<?php echo isset($anggota->anggota_nohp) ? $anggota->anggota_nohp : ''; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Jenis Kelamin</label>
                                    <select class="form-control" name="anggota_jk" required>
                                        <option value="">-- Pilih --</option>
                                        <option value="Laki-Laki" <?php echo (isset($anggota->anggota_jk) && $anggota->anggota_jk == 'Laki-Laki') ? 'selected' : ''; ?>>Laki-Laki</option>
                                        <option value="Perempuan" <?php echo (isset($anggota->anggota_jk) && $anggota->anggota_jk == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm mb-3">Simpan</button>
                                <a href="<?php echo base_url() ?>anggota" class="btn btn-secondary btn-sm mb-3">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
