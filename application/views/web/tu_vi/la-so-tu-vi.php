<!doctype html>
<html>
<head>
    <meta name=generator content="Hugo 0.76.4">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Xem dự đoán số mệnh qua Tử vi lá số</title>
    <link rel="stylesheet" href="<?= base_url() ?>vender/assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>vender/assets/css/mycss.css">
    <script src="<?= base_url() ?>vender/assets/jquery.min.js"></script>
    <script src="<?= base_url() ?>vender/js/myjs.js"></script>
    <link rel="icon" href="<?=base_url()?>vender/img/tuvi_img.png">
    <style>
        b{
            color: #fff;
        }
        html, body *{
            color: #fff;
        }
        select option{
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
            LẬP LÁ SỐ TỬ VI
        </H1>

        <div class="t_form">
            <div class="form-group">
                <label for="exampleInputEmail1">Nhập họ tên</label>
                <input type="email" class="form-control" id="t_name" aria-describedby="emailHelp"
                       placeholder="Nhập họ tên" style="color: #0a930d">
            </div>
            <div class="form-group">
                <div style="display: flex">
                    <div>
                        <label for="exampleInputPassword1">Ngày Sinh</label>
                        <select class="form-control" id="t_day" style="height: 50px; color: #F35022">
                            <?php
                            for ($i = 1; $i <= 31; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div style="margin-left: 25px">
                        <label for="exampleInputPassword1">Tháng sinh</label>
                        <select class="form-control" id="t_month" style="height: 50px; color: #F35022">
                            <?php
                            for ($i = 1; $i <= 12; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div style="margin-left: 25px">
                        <label for="exampleInputPassword1">Năm sinh</label>
                        <select class="form-control" id="t_year" style="height: 50px;color: #F35022 ">
                            <?php
                            $n_year = date("Y");
                            for ($i = $n_year; $i >= 1900; $i--) {
                                echo "<option value='$i'>$i</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div style="display: flex">
                    <div>
                        <label for="exampleInputPassword1">Giờ Sinh</label>
                        <select class="form-control" id="t_hour" style="height: 50px; color: #4C68D7">
                            <?php
                            for ($i = 1; $i <= 24; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div style="margin-left: 25px">
                        <label for="exampleInputPassword1">Phút sinh</label>
                        <select class="form-control" id="t_minute" style="height: 50px; color: #4C68D7">
                            <?php
                            for ($i = 1; $i <= 60; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Giới tính</label>
                <select class="form-control" style="width: 120px; font-weight: 600; color: #799134; height: 50px"
                        id="t_sex">
                    <option value="1">Nam</option>
                    <option value="0">Nữ</option>
                </select>
            </div>
            <div style="text-align: center; margin-top: 25px">
                <button type="submit" class="btn btn-submit" onclick="horoscopeResults()">XEM NGAY</button>
            </div>
        </div>
    </div>
    <div class="main_box" id="rs_box">
        <H1 style="text-align: center; margin-top: 25px">
            Giới thiệu về tử vi
        </H1>
        <p>
            <b>Tử Vi</b>, hay <b>Tử Vi Đẩu Số</b>, là một bộ môn huyền học được dùng với các công năng chính như: luận
            đoán về tính cách, hoàn cảnh, dự đoán về các " vận hạn" trong cuộc đời của một người đồng thời nghiên cứu
            tương tác của một người với các sự kiện, nhân sự.... Chung quy với mục đích chính là để biết vận mệnh con
            người.
        </p>
        <p>
            <b>Lấy lá số tử vi để làm gì ?</b><br>
            Xem lá số tử vi trọn đời có bình giải chi tiết sẽ giúp cho quý bạn mệnh biết về tương lai, vận hạn theo các
            năm. Khi lấy lá số tử vi theo giờ sinh và ngày tháng năm sinh thì quý bạn cần khám phá phần luận giải lá số
            để nắm bắt vận mệnh của chính mình. Lá số tử vi trọn đời mang yếu tố tham khảo giúp quý bản mệnh tránh việc
            không nên, tăng cường việc tốt từ đó có một cuộc sống suôn sẻ và nhiều may mắn.

        </p>
        <p>
            <b>Lá số tử vi trọn đời thể hiện điều gì ?</b><br>
            - Trên mỗi lá số tử vi sẽ thể hiện các phương diện cuộc sống của quý bản mệnh theo từng năm tuổi cụ thể như:
            công danh, sự nghiệp, gia đạo, tình duyên, tiền tài, sức khỏe, anh chị em, quan hệ xã hội...

        </p>
        <p>
            - Để tra cứu và lấy lá số tử vi trọn đời trực tuyến miễn phí quý bạn cần cung cấp đầy đủ và chính xác nhất
            về họ tên, giờ sinh, ngày sinh, tháng sinh, năm sinh và giới tính.

        </p>

        <p>
            - Ngoài ra: cách xem lá số tử vi có thể thay đổi theo các năm. Vì vậy để luận đoán và có cái nhìn chính xác
            nhất về tương lai và vận mệnh của mình trong năm Kỷ Hợi 2019 cũng như trong năm Canh Tý 2020. Quý bạn nên
            lấy lá số tử vi 2019 và cách lập lá số tử vi để tham khảo chi tiết tử vi năm 2020 của mình, cũng như phân
            tích và khám phá lá số tử vi trọn đời của các năm khác.
        </p>
    </div>
</div>

<script>
    const API_LA_SO_TU_VI = "<?=base_url()?>/v1/Tuvi/tuViLaSo";

    function horoscopeResults() {
        let t_name = $("#t_name").val();

        let t_day = $("#t_day").val();
        let t_month = $("#t_month").val();
        let t_year = $("#t_year").val();

        let t_hour = $("#t_hour").val();
        let t_minute = $("#t_minute").val();
        let t_sex = $("#t_sex").val();

        if ( ! t_name){
            alert("Tên không được bỏ trống");
        }else{
            let data = new FormData();
            data.append('fullname', t_name);
            data.append('gender', t_sex);
            data.append('day', t_day);
            data.append('month', t_month);
            data.append('year', t_year);
            data.append('hour', t_hour);
            data.append('minute', t_minute);

            $("#rs_box").html("<div class='t_text_waiting '>Đang tính toán kết quả(chờ trong khoảng 10s).......</div>");

            callApiPost(API_LA_SO_TU_VI, data).then(e => {
                console.log(e);
                outResults(e.data);
            });
        }

    }

    function outResults(data) {
        let html = "";
        html += "<H1 style= 'text-align: center; margin-top: 25px'>KẾT QUẢ LÁ SỐ TỬ VI CỦA BẠN</H1>";
        html += "<h3>THÔNG TIN</h3>";
        html += "<p><b>Họ tên: </b>" + data.ho_ten + "</p>";
        html += "<p><b>Ngày sinh: </b>" + data.ngay_sinh + "</p>";
        html += "<p><b>Giờ sinh: </b>" + data.gio_sinh + "</p>";
        html += "<p><b>Ngày sinh âm lịch: </b>" + data.ngay_sinh_am_lich + "</p>";
        html += "<p><b>Giới tính: </b>";
        if (data.gioi_tinh === 1) {
            html += "Nam";
        } else {
            html += "Nữ";
        }
        html += "</p>";
        html += "<p><b>Bát tự: </b>" + data.bat_tu + "</p>";
        html += "<p><b>Mệnh: </b>" + data.ban_menh + "</p>";
        html += "<p><b>Cục: </b>" + data.cuc + "</p>";

        html += "<br/><h3>LÁ SỐ TỬ VI</h3>";
        html += data.la_so;

        html += "<h3>CUNG MỆNH</h3>";
        html += "<p>" + data.menh + "</p>";
        html += "<h3>CUNG PHỤ MẪU</h3>";
        html += "<p>" + data.phu_mau + "</p>";
        html += "<h3>CUNG PHÚC ĐỨC</h3>";
        html += "<p>" + data.phuc_duc + "</p>";
        html += "<h3>CUNG ĐIỀN TRẠCH</h3>";
        html += "<p>" + data.dien_trach + "</p>";
        html += "<h3>CUNG QUAN LỘC</h3>";
        html += "<p>" + data.quan_loc + "</p>";
        html += "<h3>CUNG NÔ BỘC</h3>";
        html += "<p>" + data.no_boc + "</p>";
        html += "<h3>CUNG THIÊN DI</h3>";
        html += "<p>" + data.thien_di + "</p>";
        html += "<h3>CUNG TẬT ÁCH</h3>";
        html += "<p>" + data.tat_ach + "</p>";
        html += "<h3>CUNG TÀI BẠCH</h3>";
        html += "<p>" + data.tai_bach + "</p>";
        html += "<h3>CUNG TỬ TỨC</h3>";
        html += "<p>" + data.tu_tuc + "</p>";
        html += "<h3>CUNG PHU THÊ</h3>";
        html += "<p>" + data.phu_the + "</p>";
        html += "<h3>CUNG HUYNH ĐỆ</h3>";
        html += "<p>" + data.huynh_de + "</p>";

        $("#rs_box").html(html);
    }

</script>
</body>
</html>