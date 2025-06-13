<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-12">
            <div class="breadcrumbs-area clearfix" style="padding-top : 7px; padding-bottom : 7px">
                <h4 class="page-title">Pengembalian</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="<?php echo base_url() ?>home">Admin</a></li>
                    <li><a href="<?php echo base_url() ?>pengembalian">Pengembalian</a></li>
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
                <!-- Textual inputs start -->
                <div class="col-12 mt-3">
                    <div class="card">
                        <form action="<?php echo base_url() ?>pengembalian/submit" method="post">
                            <div class="card-body">
                                <h4 class="header-title">Entri Pengembalian</h4> 
                                
                                <div class="form-group">
                                    <label class="col-form-label">Nomor Kembali</label>
                                    <input class="form-control" type="text" name="nomor_kembali" required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Tanggal Kembali</label>
                                    <input class="form-control" type="date" name="tanggal_kembali" required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Judul Buku</label>
                                    <select style="background-color: white" class="form-control" name="nomor_buku" required>
                                        <option value="">-- Pilih Buku --</option>
                                        <?php foreach($buku as $b): ?>
                                            <option value="<?= $b['Nomor_Buku'] ?>"><?= $b['Judul'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Total Kembali</label>
                                    <input class="form-control" type="number" name="total_kembali" min="1" required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Denda (Rp)</label>
                                    <input class="form-control" type="number" name="denda" min="0" required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Nama Anggota</label>
                                    <select style="background-color: white" class="form-control" name="nomor_anggota" required>
                                        <option value="">-- Pilih Anggota --</option>
                                        <?php foreach($anggota as $a): ?>
                                            <option value="<?= $a['Nomor_Anggota'] ?>"><?= $a['Nama_Anggota'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Petugas</label>
                                    <select style="background-color: white" class="form-control" name="kode_petugas" required>
                                        <option value="">-- Pilih Petugas --</option>
                                        <?php foreach($petugas as $p): ?>
                                            <option value="<?= $p['Kode_Petugas'] ?>"><?= $p['Nama_Petugas'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary btn-sm mb-3">Simpan</button>
                                <a href="<?php echo base_url() ?>pengembalian" class="btn btn-secondary btn-sm mb-3">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
