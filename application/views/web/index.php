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
        .post_title{
            font-size: 30px;
            font-weight: 600;
            color: #000
        }
        .post_title:hover{
            color: #0f8edd;
        }
    </style>
</head>
<body>
<div class="container" style="margin-top: 20px">
    <div class="main_box">
        <div class="item_group">
            <H1><img class="t_icon" src="<?= base_url() ?>/vender/img/tuvi_img.png" style="margin-right: 10px">XEM TỬ VI
            </H1>
            <a href="<?= base_url("TuVi/tuViLaSo") ?>">
                <p>
                    Xem Tử vi lá số
                </p>
            </a>

            <a href="<?= base_url("TuVi/tuViCungHoangDao") ?>">
                <p>
                    Xem tử vi Cung hoàng đạo theo Cung
                </p>
            </a>

            <a href="<?= base_url("TuVi/tinhYeu2CungHoangDao") ?>">
                <p>
                    Xem tình yêu hai Cung hoàng đạo
                </p>
            </a>

        </div>
        <div class="item_group">
            <H1><img class="t_icon" src="<?= base_url() ?>/vender/img/thansohoc_icon.png" style="margin-right: 2px"> XEM
                THẦN SỐ HỌC</H1>
            <a href="<?= base_url("ThanSoHoc") ?>">
                <p>
                    Dự đoán số mệnh qua Thần số hoc
                </p>
            </a>
        </div>
    </div>

    <div class="main_box" style="background: #ececec">
        <H1 style="text-align: center; color: #0c0c0c; text-shadow: 0px 0px #000; margin-bottom: 25px">BÀI VIẾT</H1>
        <?php
            if (!isset($posts)) $posts = [];
            foreach ($posts as $post){
                ?>
                <div style="display: flex; margin-bottom: 25px; border: 1px solid #000">
                    <div style="width: 20%">
                       <a href="<?=base_url()?>Post?id=<?=$post['id'] ?? 0?>">
                           <img src="<?=$post['img']?>" style="width: 100%; aspect-ratio: 1/1">
                       </a>
                    </div>
                    <div style="flex: 1; padding-left: 30px; padding-right: 15px">
                        <a href="<?=base_url()?>Post?id=<?=$post['id'] ?? 0?>">
                            <div class="post_title"><?=$post['title']?></div>
                        </a>
                        <p><?=substr($post['content'], 0,560) . "..."?></p>
                    </div>
                </div>
        <?php
            }
        ?>

    </div>

</div>

</body>
</html>