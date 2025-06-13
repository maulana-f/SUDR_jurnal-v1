<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-12">
            <div class="breadcrumbs-area clearfix" style="padding-top : 7px; padding-bottom : 7px">
                <h4 class="page-title">Data Buku</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="<?php echo base_url() ?>home">Admin</a></li>
                    <li><a href="<?php echo base_url() ?>buku">Buku</a></li>
                    <li><span>Data</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- page title area end -->

<div class="main-content-inner">
    <div class="row">
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-body">
                    <a href="<?php echo base_url() ?>buku/entri" class="btn btn-primary btn-sm mb-3">
                        <i class="fa fa-plus"></i> Tambah Buku
                    </a>
                    <?php echo $this->session->flashdata("msg"); ?> 
                    <h4 class="header-title">Data Buku</h4>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table table-hover progress-table text-center">
                                <thead class="bg-primary">
                                    <tr>
                                        <th style="color: white">No</th>
                                        <th style="color: white">Nomor Buku</th>
                                        <th style="color: white">Judul</th>
                                        <th style="color: white">Kategori</th>
                                        <th style="color: white">Pengarang</th>
                                        <th style="color: white">Penerbit</th>
                                        <th style="color: white">Tahun</th>
                                        <th style="color: white">Stok</th>
                                        <th style="color: white">Gambar</th>
                                        <th style="color: white">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; foreach ($buku as $row): ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $row->data_buku_nomor ?></td>
                                            <td><?= $row->data_buku_judul ?></td>
                                            <td><?= $row->data_buku_kategori ?></td>
                                            <td><?= $row->data_buku_pengarang ?></td>
                                            <td><?= $row->data_buku_penerbit ?></td>
                                            <td><?= $row->data_buku_tahun ?></td>
                                            <td><?= $row->data_buku_stok ?></td>
                                            <td>
                                                <a href="<?= site_url('uploads/'.$row->data_buku_gambar_1) ?>" target="_blank">lihat</a><br>
                                                <a href="<?= site_url('uploads/'.$row->data_buku_gambar_2) ?>" target="_blank">lihat</a>
                                            </td>
                                            <td>
                                                <a href="<?= site_url('buku/edit/'.$row->data_buku_id) ?>" class="btn btn-sm btn-primary">Edit</a>
                                                <a href="<?= site_url('buku/delete/'.$row->data_buku_id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
