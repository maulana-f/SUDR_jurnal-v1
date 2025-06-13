<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-12">
            <div class="breadcrumbs-area clearfix" style="padding-top : 7px; padding-bottom : 7px">
                <h4 class="page-title">Data Buku</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="<?php echo base_url() ?>home">Admin</a></li>
                    <li><a href="<?php echo base_url() ?>buku">Buku</a></li>
                    <li><span>Edit</span></li>
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
                        <form action="<?php echo base_url() ?>buku/submitedit" enctype="multipart/form-data" method="post">
                            <div class="card-body">
                                <h4 class="header-title">Edit Buku</h4>
                                <input type="hidden" class="form-control" name="data_buku_id" value="<?= $buku->data_buku_id ?>" readonly>
                                <input type="hidden" class="form-control" name="current_data_buku_gambar_1" value="<?= $buku->data_buku_gambar_1 ?>" readonly>
                                <input type="hidden" class="form-control" name="current_data_buku_gambar_2" value="<?= $buku->data_buku_gambar_2 ?>" readonly>
                                <div class="form-group">
                                    <label>Nomor Buku</label>
                                    <input type="text" class="form-control" name="data_buku_nomor" value="<?= $buku->data_buku_nomor ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Judul</label>
                                    <input type="text" class="form-control" name="data_buku_judul" value="<?= $buku->data_buku_judul ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <input type="text" class="form-control" name="data_buku_kategori" value="<?= $buku->data_buku_kategori ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Pengarang</label>
                                    <input type="text" class="form-control" name="data_buku_pengarang" value="<?= $buku->data_buku_pengarang ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Penerbit</label>
                                    <input type="text" class="form-control" name="data_buku_penerbit" value="<?= $buku->data_buku_penerbit ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Tahun</label>
                                    <input type="number" class="form-control" name="data_buku_tahun" min="1900" max="<?= date('Y') ?>" value="<?= $buku->data_buku_tahun ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Stok</label>
                                    <input type="number" class="form-control" name="data_buku_stok" value="<?= $buku->data_buku_stok ?>" required>
                                </div>

                                <div class="form-group">
                                    <label>Gambar 1</label>
                                    <input type="file" class="form-control" name="data_buku_gambar_1">
                                    <span class="d-block mt-1">Lihat: 
                                        <a href="<?= base_url('uploads/'.$buku->data_buku_gambar_1) ?>" target="_blank">
                                            <?= $buku->data_buku_gambar_1 ?>
                                        </a>
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label>Gambar 2</label>
                                    <input type="file" class="form-control" name="data_buku_gambar_2">
                                    <span class="d-block mt-1">Lihat: 
                                        <a href="<?= base_url('uploads/'.$buku->data_buku_gambar_2) ?>" target="_blank">
                                            <?= $buku->data_buku_gambar_2 ?>
                                        </a>
                                    </span>
                                </div>

                                <br>
                                <button type="submit" class="btn btn-primary btn-sm mb-3">Update</button>
                                <a href="<?= base_url() ?>buku" class="btn btn-secondary btn-sm mb-3">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
