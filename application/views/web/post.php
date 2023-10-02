<!doctype html>
<html>
<head>
    <meta name=generator content="Hugo 0.76.4">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Xem dự đoán số mệnh qua Tử vi và Thần số học</title>
    <link rel="stylesheet" href="<?= base_url() ?>vender/assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>vender/assets/css/mycss.css">
    <link rel="icon" href="<?=base_url()?>vender/img/tuvi_img.png">
    <style>
        .t_icon {
            width: 40px;
            height: 40px;
            margin-bottom: -10px;
        }

        .item_group p {
            color: #ffffff;
            font-size: 25px;
            margin-left: 50px;
        }

        .item_group p:hover {
            color: #ffcc00;
            cursor: pointer;
        }

        a:hover {
            text-decoration: none;
        }
    </style>
</head>
<body>
<a href="<?= base_url() ?>" style="color: #ffffff; margin-left: 15px; margin-top: 5px; color: #ffc14d"> << Trở về</a>
<div class="container" style="margin-top: 20px">
    <div class="main_box" style="background: #ececec;">
        <H1 style="text-align: center; color: #0c0c0c; text-shadow: 0px 0px #000; margin-bottom: 25px"><?=$post['title']?></H1>
        <img src="<?=$post['img']?>" style="width: 100%; max-width: 500px">
        <p style="margin-top: 15px"><?=$post['content']?></p>
    </div>

</div>

</body>
</html>