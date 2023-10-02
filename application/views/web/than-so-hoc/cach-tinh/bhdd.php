<!doctype html>
<html>
<head>
    <meta name=generator content="Hugo 0.76.4">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Công thức tính Bài học đường đời (BHDD)</title>
    <link rel="stylesheet" href="<?= base_url() ?>vender/assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>vender/assets/css/mycss.css">
    <script src="<?= base_url() ?>vender/assets/jquery.min.js"></script>
    <script src="<?= base_url() ?>vender/js/myjs.js"></script>
    <link rel="icon" href="<?=base_url()?>vender/img/tuvi_img.png">
    <style>
        b {
            color: #fff;
        }

        html, body * {
            color: #fff;
        }

        select option {
            color: #3b3b3b;
            border-radius: 15px;
            font-weight: 600;

        }
    </style>
</head>
<body>
<a href="<?= base_url() ?>" style="color: #ffffff; margin-left: 15px; margin-top: 5px; color: #ffc14d"> << Trở về</a>
<div class="container">
    <div class="main_box">
        <H1 style="text-align: center; margin-top: 25px">
            Công thức tính Bài học đường đời (BHDD)
        </H1>

        <p><strong>Chúng ta sử dụng Ngày/Tháng/Năm sinh dương lịch để tính BHDD</strong></p>
        <ul>
            <li><p><strong>Bước 1</strong>: Cộng 02 số Ngày sinh lại và rút gọn còn từ 1 đến 9,
                    riêng sinh ngày 11 hoặc 22 thì giữ nguyên. Trường hợp sinh ngày 29
                    (2 + 9 = 11) thì sẽ rút gọn thành 11.</p></li>
            <li><p><strong>Bước 2</strong>: Làm tương tự đối với 02 số Tháng sinh. Sinh tháng 11 thì
                    giữ nguyên.</p></li>
            <li><p><strong>Bước 3</strong>: Làm tương tự đối với 04 số Năm sinh. Năm sinh nào cộng
                    ra 11, 22 hoặc 33 thì giữ nguyên (VD sinh năm 1984 có tổng là 22 thì
                    giữ nguyên, không rút gọn thành 4).</p></li>
            <li><p><strong>Bước 4</strong>: Cộng 03 số rút gọn của Ngày sinh, Tháng sinh và Năm sinh
                    lại với nhau, cho ra số tổng là một số có 02 chữ số.</p></li>
            <li><p><strong>Bước 5</strong>: Nếu số tổng vừa tính là 11, 22 hoặc 33 thì đó là kết quả
                    cuối cùng (Số BHDD của bạn). Còn nếu ra 1 số khác, ta tiếp tục cộng
                    tổng của 02 chữ số đó lại với nhau, cho ra kết quả từ 1 đến 9
                    hoặc 11. Đó sẽ là kết quả cuối cùng, chính là số BHDD của bạn.</p></li>
            <li><p>VD 1: Bạn sinh ngày 29/11/1993</p>
                <ul>
                    <li><p>Tổng Ngày sinh rút gọn là 2 + 9 = 11 (Giữ nguyên)</p></li>
                    <li><p>Tháng sinh là 11 (Giữ nguyên)</p></li>
                    <li><p>Tổng Năm sinh rút gọn là 1 + 9 + 9 + 3 = 22 (Giữ nguyên)</p></li>
                    <li><p>Tổng 3 số Ngày/Tháng/Năm sinh rút gọn là 11 + 11 + 22 = 44</p></li>
                    <li><p>Do 44 không phải là số đặc biệt nên ta có kết quả cuối cùng là</p>
                        <blockquote><p>4 + 4 = 8</p></blockquote>
                    </li>
                    <li><p>**BHDD của bạn là số 8 **</p></li>
                </ul>
            </li>
            <li><p>VD 2: Bạn sinh ngày 28/12/1991</p>
                <ul>
                    <li><p>Tổng Ngày sinh rút gọn là 2 + 8 = 10; Rút gọn tiếp 1 + 0 = 1</p></li>
                    <li><p>Tổng Tháng sinh rút gọn là 1 + 2 = 3</p></li>
                    <li><p>Tổng Năm sinh rút gọn là 1 + 9 + 9 + 1 = 20; Rút gọn tiếp 2 + 0</p>
                        <blockquote><p>= 2</p></blockquote>
                    </li>
                    <li><p>Tổng 3 số Ngày/Tháng/Năm sinh rút gọn là 1 + 3 + 2 = 6</p></li>
                    <li><p><strong>BHDD của bạn là số 6</strong></p></li>
                </ul>
            </li>
        </ul>
    </div>
</div>

</div>

</div>
</body>
</html>