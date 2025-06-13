<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-12">
            <div class="breadcrumbs-area clearfix" style="padding-top : 7px; padding-bottom : 7px">
                <h4 class="page-title">Data Petugas Atau Admin</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="<?php echo base_url() ?>home">Data Penting</a></li>
                    <li><a href="<?php echo base_url() ?>petugas">Petugas Atau Admin</a></li>
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
                    <a href="<?php echo base_url() ?>petugas/entri" class="btn btn-primary btn-sm mb-3">
                        <i class="fa fa-plus"></i> Tambah Petugas
                    </a>
                    <?php echo $this->session->flashdata("msg"); ?> 
                    <h4 class="header-title">Data Petugas Atau Admin</h4>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table table-hover progress-table text-center">
                                <thead class="bg-primary">
                                    <tr>
                                        <th style="color: white">No</th>
                                        <th style="color: white">Nama Petugas</th>
                                        <th style="color: white">Username Petugas</th>
                                        <th style="color: white">Aksi</th>
                                    </tr>
                                </thead>
                                 <tbody>
                                    <?php $no = 1; foreach($petugas as $a): ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $a->login_nama; ?></td>
                                        <td><?php echo $a->login_username; ?></td>
                                        <td>
                                            <a href="<?php echo base_url('petugas/edit/'.$a->login_id); ?>" class="btn btn-sm btn-primary">Edit</a>
                                            <a href="<?php echo base_url('petugas/delete/'.$a->login_id); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
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
