<!doctype html>
<html>
<head>
    <meta name=generator content="Hugo 0.76.4">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Xem tình yêu hai cung hoàng đạo</title>
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
            TÌNH YÊU HAI CUNG HOÀNG ĐẠO
        </H1>

        <div class="t_form">
            <h3 style="">CHỌN CUNG HOÀNG ĐẠO</h3>

            <div class="form-group">
                <label for="exampleInputPassword1">Cung Nam</label>
                <select class="form-control" id="cung_nam" style="height: 50px;color: #d08733; width: 460px; max-width: 100%">
                    <option value="Bạch Dương">Bạch dương</option>
                    <option value="Kim Ngưu">Kim Ngưu</option>
                    <option value="Nhân Mã">Nhân Mã</option>
                    <option value="Song Tử">Song Tử</option>
                    <option value="Cự Giải">Cự Giải</option>
                    <option value="Sư Tử">Sư TỬ</option>
                    <option value="Xử Nữ">Xử Nữ</option>
                    <option value="Thiên Bình">Thiên Bình</option>
                    <option value="Hổ Cáp">Hổ Cáp (Thiên Yết, Bọ Cạp)</option>
                    <option value="Ma Kết">Ma Kết</option>
                    <option value="Bảo Bình">Bảo Bình</option>
                    <option value="Song Ngư">Song Ngư</option>

                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Cung Nữ</label>
                <select class="form-control" id="cung_nu" style="height: 50px;color: #d08733; width: 460px; max-width: 100%">
                    <option value="Bạch Dương">Bạch dương</option>
                    <option value="Kim Ngưu">Kim Ngưu</option>
                    <option value="Nhân Mã">Nhân Mã</option>
                    <option value="Song Tử">Song Tử</option>
                    <option value="Cự Giải">Cự Giải</option>
                    <option value="Sư Tử">Sư TỬ</option>
                    <option value="Xử Nữ">Xử Nữ</option>
                    <option value="Thiên Bình">Thiên Bình</option>
                    <option value="Hổ Cáp">Hổ Cáp (Thiên Yết, Bọ Cạp)</option>
                    <option value="Ma Kết">Ma Kết</option>
                    <option value="Bảo Bình">Bảo Bình</option>
                    <option value="Song Ngư">Song Ngư</option>
                </select>
            </div>

            <h3 style="margin-top: 50px">Năm xem</h3>
            <div class="form-group">
                <select class="form-control" id="nam_xem" style="height: 50px;color: #F35022 ">
                    <?php
                    $n_year = date("Y");
                    for ($i = $n_year; $i >= 1900; $i--) {
                        echo "<option value='$i'>$i</option>";
                    }
                    ?>
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
    </div>
</div>

<script>
    const API_XEM_TINH_YEU_2_CUNG = "<?=base_url()?>/v1/Tuvi/tinhYeu2CungHoangDao";

    function horoscopeResults() {
        let nam_xem = $("#nam_xem").val();
        let cung_nu = $("#cung_nu").val();
        let cung_nam = $("#cung_nam").val();

        let data = new FormData();
        data.append('nam_xem', nam_xem);
        data.append('cung_nu', cung_nu);
        data.append('cung_nam', cung_nam);

        $("#rs_box").html("<div class='t_text_waiting '>Đang tính toán kết quả(chờ trong khoảng 10s).......</div>");

        callApiPost(API_XEM_TINH_YEU_2_CUNG, data).then(e => {
            console.log(e);
            outResults(e.data);
        });
    }

    function outResults(data) {
        let html = "";
        html += "<H1 style= 'text-align: center; margin-top: 25px'>KẾT QUẢ XEM TỬ VI</H1>";
        // html += "<h3>THÔNG TIN</h3>";
        html += "<p><b>Cung Nam: </b>" + data.cung_nam + "</p>";
        html += "<p><b>Cung Nữ: </b>" + data.cung_nu + "</p>";
        // html += "<br/><h3>LÁ SỐ TỬ VI</h3>";
        html += data.content;

        $("#rs_box").html(html);
    }

</script>
</body>
</html>