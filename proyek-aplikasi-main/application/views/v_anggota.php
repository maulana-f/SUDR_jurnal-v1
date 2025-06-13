<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-12">
            <div class="breadcrumbs-area clearfix" style="padding-top : 7px; padding-bottom : 7px">
                <h4 class="page-title">Data Anggota</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="<?php echo base_url() ?>home">Data Penting</a></li>
                    <li><a href="<?php echo base_url() ?>anggota">Anggota</a></li>
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
                    <a href="<?php echo base_url() ?>anggota/entri" class="btn btn-primary btn-sm mb-3">
                        <i class="fa fa-plus"></i> Tambah Anggota
                    </a>
                    <?php echo $this->session->flashdata("msg"); ?> 
                    <h4 class="header-title">Data Anggota</h4>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>No HP</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; foreach($anggota as $a): ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $a->anggota_kode; ?></td>
                                        <td><?php echo $a->anggota_nama; ?></td>
                                        <td><?php echo $a->anggota_alamat; ?></td>
                                        <td><?php echo $a->anggota_nohp; ?></td>
                                        <td><?php echo $a->anggota_jk; ?></td>
                                        <td>
                                            <a href="<?php echo base_url('anggota/edit/'.$a->anggota_id); ?>" class="btn btn-sm btn-primary">Edit</a>
                                            <a href="<?php echo base_url('anggota/delete/'.$a->anggota_id); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
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
