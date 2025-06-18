<!DOCTYPE html>
<html>
<head>
   
</head>

<body>
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-12">
            <div class="breadcrumbs-area clearfix" style="padding-top : 7px; padding-bottom : 7px">
                <h4 class="page-title">Review</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="<?php echo base_url() ?>home">Dashboard</a></li>
                    <li><span>Review</span></li>
                   
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
        <h2><?= $Judul ?></h2>
        <table class="table-log">
            <tr>
                <th>Judul</th>
                <th>Abstrak</th>
                <th>Tanggal Upload</th>
                <th>File path</th>
            </tr>
            <?php foreach ($journals as $j): ?>
            <tr>
                <td><?= $j->Judul ?></td>
                <td><?= $j->AbstrakJurnal ?></td>
                <td><?= $j->review_date ?></td>
                <td><?= $j->file_path ?></td>
            </tr>
            <?php endforeach; ?>
        </table>

        <label for="comment"><strong>Comment</strong></label>
        <textarea name="comment" placeholder="Tulis komentar..."></textarea><br>
        <button class="btn btn-reject">Reject</button>
        <button class="btn btn-approve">Approve</button>
    </div>
</div>
<title><?= $judul ?></title>
    <style>
        body { font-family: Arial; background-color: #f9f9f9; }
        .container { display: flex; width: 100%; }
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
            /* border-top-right-radius: 20px;
            border-bottom-right-radius: 20px; */
        }
        .table-log {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 15px;
        }
        .table-log th, .table-log td {
            border: 1px solid #aaa;
            padding: 10px;
            text-align: center;
        }
        .btn {
            padding: 10px 20px;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
        }
        .btn-approve { background-color: #00cc66; }
        .btn-reject { background-color: #ff3333; }
        textarea {
            width: 100%;
            height: 60px;
            margin-bottom: 15px;
        }
    </style>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

</body>
</html>