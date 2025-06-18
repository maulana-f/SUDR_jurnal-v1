<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-12">
            <div class="breadcrumbs-area clearfix" style="padding-top : 7px; padding-bottom : 7px">
                <h4 class="page-title">Data Admin</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="<?php echo base_url() ?>home">Dashboard</a></li>
                    
                    <li><span>Data Admin</span></li>
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
                    <h4 class="header-title">Data Admin</h4>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table table-hover progress-table text-center">
                                <thead class="bg-primary">
                                    <tr>
                                        <th style="color: white">No</th>
                                        <th style="color: white">id petugas</th>
                                        <th style="color: white">Username Petugas</th>
                                        <th style="color: white">Aksi</th>
                                    </tr>
                                </thead>
                                 <tbody>
                                    <?php $no = 1; foreach($petugas as $a): ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $a->id_user; ?></td>
                                        <td><?php echo $a->username; ?></td>
                                        <td>
                                            <a href="<?php echo base_url('petugas/edit/'.$a->username); ?>" class="btn btn-sm btn-primary">Edit</a>
                                            <!-- <a href="<?php echo base_url('petugas/delete/'.$a->id_login); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a> -->
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
