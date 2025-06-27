<!DOCTYPE html>
<html>
<head>
    <title>Detail Jurnal</title>
    <style>
        body {
            font-family: Arial;
            background-color: #ffeaea;
            padding: 30px;
        }
        .container {
            background: #f8bcbc;
            border-radius: 15px;
            padding: 30px;
            width: 600px;
            margin: auto;
        }
        .box {
            margin-bottom: 15px;
            background: white;
            padding: 15px;
            border-radius: 10px;
        }
        .label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        .btn-download {
            background: #1e90ff;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 10px;
            display: inline-block;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- <h2><?= $journals->id ?></h2> -->

    <div class="box">
        <span class="label">Nama Penulis:</span>
        <?= $journals->penulis ?? 'Tidak tersedia' ?>
    </div>

    <div class="box">
        <span class="label">Tanggal Upload:</span>
        <?= date('d/m/Y', strtotime($journals->created_at ?? 'now')) ?>
    </div>

    <div class="box">
        <span class="label">Abstrak:</span>
        <?= $journals->Abstrak ?? 'Tidak tersedia' ?>
    </div>

    <div class="box">
        <span class="label">Kategori:</span>
        <?= $journals->Kategori ?? 'Tidak tersedia' ?>
    
    </div>

    <div class="box">
        <span class="label">Status:</span>
        <?= ucfirst($journals->status ?? '-') ?>
    </div>

    <?php if (!empty($journals['file'])): ?>
    <div class="box">
        <a class="btn-download" href="<?= base_url('uploads/' . $journals['file']) ?>" download>
            Download File
        </a>
    </div>
<?php else: ?>
    <div class="box">
        <em>File tidak tersedia</em>
    </div>
<?php endif; ?>
</div>

</body>
</html>