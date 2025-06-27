<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-12">
            <div class="breadcrumbs-area clearfix" style="padding-top : 7px; padding-bottom : 7px">
                <h4 class="page-title">Petugas Atau Admin</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="<?php echo base_url() ?>home">Data Penting</a></li>
                    <li><a href="<?php echo base_url() ?>petugas">Petugas Atau Admin</a></li>
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
                        <form action="<?php echo base_url() ?>petugas/submitedit" method="post">
                            <div class="card-body">
                                <h4 class="header-title">Entri Petugas</h4>
                                <input type="hidden" class="form-control" name="id_login" value="<?= $petugas->id_login?>" readonly>
                                <div class="form-group">
                                    <label class="col-form-label">Nama Petugas</label>
                                    <input type="text" class="form-control" name="login_nama" maxlength="100" value="<?php echo isset($petugas->login_nama) ? $petugas->login_nama : ''; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Username</label>
                                    <input type="text" class="form-control" name="login_username" maxlength="50"  value="<?php echo isset($petugas->login_username) ? $petugas->login_username : ''; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <input type="password" class="form-control" name="login_password" maxlength="30">
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary btn-sm mb-3">Simpan</button>
                                <a href="<?php echo base_url() ?>petugas" class="btn btn-secondary btn-sm mb-3">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
