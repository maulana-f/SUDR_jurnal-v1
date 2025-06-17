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
                    <li><a href="<?php echo base_url() ?>home">Admin</a></li>
                    <li><a href="<?php echo base_url() ?>buku">log</a></li>
                    <li><span>Data</span></li>
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
    <table class="table table-hover progress-table text-center">
        <thead class="bg-primary">
            <tr>
                <th style="color: black">Log ID</th>
                <th style="color: black">User ID</th>
                <th style="color: black">Action</th>
                <th style="color: black">Log Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($logs as $log): ?>
                <tr>
                    <td><?= $log->log_id ?></td>
                    <td><?= $log->user_id ?></td>
                    <td><?= $log->action ?></td>
                    <td><?= $log->log_date ?></td>
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
</body>
</html>