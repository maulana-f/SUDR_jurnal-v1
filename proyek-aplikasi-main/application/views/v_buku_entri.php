<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-12">
            <div class="breadcrumbs-area clearfix" style="padding-top : 7px; padding-bottom : 7px">
                <h4 class="page-title">Data Buku</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="<?php echo base_url() ?>home">Admin</a></li>
                    <li><a href="<?php echo base_url() ?>buku">Buku</a></li>
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
                        <form action="<?php echo base_url() ?>buku/submit" enctype="multipart/form-data" method="post">
                            <div class="card-body">
                                <h4 class="header-title">Entri Buku</h4>

                                <div class="form-group">
                                    <label class="col-form-label">Nomor Buku</label>
                                    <input type="text" class="form-control" name="data_buku_nomor" required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Judul</label>
                                    <input type="text" class="form-control" name="data_buku_judul" required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Kategori</label>
                                    <input type="text" class="form-control" name="data_buku_kategori" required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Pengarang</label>
                                    <input type="text" class="form-control" name="data_buku_pengarang" required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Penerbit</label>
                                    <input type="text" class="form-control" name="data_buku_penerbit" required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Tahun</label>
                                    <input type="number" class="form-control" name="data_buku_tahun" min="1900" max="<?= date('Y') ?>" required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Stok</label>
                                    <input type="number" class="form-control" name="data_buku_stok" required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Gambar 1</label>
                                    <input type="file" class="form-control" name="data_buku_gambar_1" required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Gambar 2</label>
                                    <input type="file" class="form-control" name="data_buku_gambar_2" required>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary btn-sm mb-3">Simpan</button>
                                <a href="<?php echo base_url() ?>buku" class="btn btn-secondary btn-sm mb-3">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
