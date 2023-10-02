<!doctype html>
<html>
<head>
    <meta name=generator content="Hugo 0.76.4">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Xem tử vi cung hoàng đạo theo cung</title>
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
            XEM TỬ VI CUNG HOÀNG ĐẠO THEO CUNG
        </H1>

        <div class="t_form">
            <h3 style="">CHỌN CUNG HOÀNG ĐẠO</h3>

            <div class="form-group">
                <select class="form-control" id="t_cung" style="height: 50px;color: #d08733; width: 460px; max-width: 100%">
                    <option value="bachduong">Bạch dương</option>
                    <option value="kimnguu">Kim Ngưu</option>
                    <option value="songtu">Song Tử</option>
                    <option value="cugiai">Cự Giải</option>
                    <option value="sutu">Sư TỬ</option>
                    <option value="xunu">Xử Nữ</option>
                    <option value="thienbinh">Thiên Bình</option>
                    <option value="hocap">Hổ Cáp (Thiên Yết, Bọ Cạp)</option>
                    <option value="maket">Ma Kết</option>
                    <option value="nhanma">Nhân Mã</option>
                    <option value="baobinh">Bảo Bình</option>
                    <option value="songngu">Song Ngư</option>
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
    const API_TU_VI_CUNG_HOANG_DAO = "<?=base_url()?>/v1/Tuvi/tuViCungHoangDao";

    function horoscopeResults() {
        let t_cung = $("#t_cung").val();

        let data = new FormData();
        data.append('cung', t_cung);

        $("#rs_box").html("<div class='t_text_waiting '>Đang tính toán kết quả(chờ trong khoảng 10s).......</div>");

        callApiPost(API_TU_VI_CUNG_HOANG_DAO, data).then(e => {
            console.log(e);
            outResults(e.data);
        });
    }

    function outResults(data) {
        let html = "";
        html += "<H1 style= 'text-align: center; margin-top: 25px'>KẾT QUẢ XEM TỬ VI</H1>";
        // html += "<h3>THÔNG TIN</h3>";
        html += "<p><b>Cung: </b>" + data.cung + "</p>";
        html += "<img src='" +  data.image + "'>";

        // html += "<br/><h3>LÁ SỐ TỬ VI</h3>";
        html += data.content;

        $("#rs_box").html(html);
    }

</script>
</body>
</html>