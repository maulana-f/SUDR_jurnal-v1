<!DOCTYPE html>
<html>
<head>
    <title>Upload Jurnal</title>
    <style>
        body { font-family: Arial; background-color: #f9f9f9; }
        .container {
            display: flex; width: 100%;
        }
        .sidebar {
            width: 20%;
            background: #ddd;
            padding: 20px;
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
        }
        .content {
            width: 100%;
            background: #f99;
            padding: 20px;
            /* border-top-right-radius: 20px; */
            /* border-bottom-right-radius: 20px; */
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #999;
            border-radius: 5px;
        }
        input[type="file"] {
            margin-bottom: 15px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background: #ccc;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>


   <div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-12">
            <div class="breadcrumbs-area clearfix" style="padding-top : 7px; padding-bottom : 7px">
                <h4 class="page-title">Review</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="<?php echo base_url() ?>home">Dashboard</a></li>
                    <li><span>Upload</span></li>
                   
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

    <div class="content">
        <h2>Upload Jurnal</h2>
        <form method="post" action="<?= base_url('upload/simpan') ?>" enctype="multipart/form-data">
            <label>Judul</label>
            <input type="text" name="judul" required>

            <label>Abstrak</label>
            <textarea name="AbstrakJurnal" required></textarea>

            <label>File</label><br>
            <input type="file" name="file" required><br>

            <label>Kategori</label>
            <input type="text" name="kategori" required>

            <input type="submit" value="Submit">
        </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>


</body>
</html>