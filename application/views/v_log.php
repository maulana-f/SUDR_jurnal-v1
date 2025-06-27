<!DOCTYPE html>
<html>
<head>
    <title>Log Aktivitas</title>
    <style>
        table { border-collapse: collapse; width: 100%; background-attachment: fixed; }
        th, td { padding: 8px 12px; border: 1px solid #ccc; }
    </style>
</head>
<body>
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-12">
            <div class="breadcrumbs-area clearfix" style="padding-top : 7px; padding-bottom : 7px">
                <h4 class="page-title">Logs</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="<?php echo base_url() ?>home">Dashboard</a></li>
                    <!-- <li><a href="<?php echo base_url() ?>log">log</a></li> -->
                    <li><span>log</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="main-content-inner">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="card">
    <h2>Riwayat Aktivitas</h2>
     <div class="single-table">
        <div class="table-responsive">
   <table>
    <thead>
        <tr>
            <th>Username</th>
             <th>Waktu</th>
            <th>Aktivitas</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($logs as $l): ?>
            <tr>
                <td><?= $l->username ?? 'Tidak diketahui' ?></td>
                 <td><?= $l->log_date ?></td>
                <td><?= $l->action ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

           </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
</body>
</html>