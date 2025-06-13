<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-12">
            <div class="breadcrumbs-area clearfix" style="padding-top : 7px; padding-bottom : 7px">
                <h4 class="page-title">Pengembalian</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="<?php echo base_url() ?>home">Admin</a></li>
                    <li><a href="<?php echo base_url() ?>pengembalian">Pengembalian</a></li>
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
                    <a href="<?php echo base_url() ?>pengembalian/entri" class="btn btn-primary btn-sm mb-3">
                        <i class="fa fa-plus"></i> Tambah
                    </a>
                    <h4 class="header-title">Data Pengembalian</h4>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table table-hover progress-table text-center">
                                <thead class="bg-primary">
                                    <tr>
                                        <th style="color: white">No</th>
                                        <th style="color: white">Nomor Kembali</th>
                                        <th style="color: white">Tanggal Kembali</th>
                                        <th style="color: white">Judul Buku</th>
                                        <th style="color: white">Total Kembali</th>
                                        <th style="color: white">Denda</th>
                                        <th style="color: white">Nama Anggota</th>
                                        <th style="color: white">Nama Petugas</th>
                                        <th style="color: white">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>KM001</td>
                                        <td>2025-05-13</td>
                                        <td>Algoritma dan Pemrograman</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>Dewi Lestari</td>
                                        <td>Rizky Hidayat</td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                            <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>KM002</td>
                                        <td>2025-05-14</td>
                                        <td>Struktur Data</td>
                                        <td>1</td>
                                        <td>5000</td>
                                        <td>Budi Santoso</td>
                                        <td>Dian Prasetyo</td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                            <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    <!-- Tambahkan baris dummy lainnya sesuai kebutuhan -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
