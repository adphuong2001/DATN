<!doctype html>
<html>
<head>
    <meta name=generator content="Hugo 0.76.4">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Xem dự đoán số mệnh qua Thần số học Pythahoras</title>
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
            XEM DỰ ĐOÁN SỐ MỆNH QUA THẦN SỐ HỌC PYTHAGORAS
        </H1>

        <div class="t_form">
            <div class="form-group">
                <label for="exampleInputEmail1">Nhập họ tên</label>
                <input type="email" class="form-control" id="t_name" aria-describedby="emailHelp"
                       placeholder="Nhập họ tên" style="color: #0a930d" value="">
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
            <div style="text-align: center; margin-top: 25px">
                <button type="submit" class="btn btn-submit" onclick="numerologyResults()">XEM NGAY</button>
            </div>
        </div>
    </div>
    <div class="main_box" id="rs_box">
        <H1 style="text-align: center; margin-top: 25px">
            Lời ngỏ Cuốn sách Thần số học Pythagoras
        </H1>
        <p>
            Đây là một tấm bản đồ vừa tổng quan lại vừa đủ chi tiết để chỉ dẫn cho bạn khá nhiều ngóc ngách hay ho trong
            cuộc đời mà có lẽ nếu không đọc hết cuốn sách này thì bạn cũng chẳng hề hay biết hoặc gọi tên được chúng.
        </p>
        <p>
            Ai bảo cuộc đời không thể biết trước, đó là khi bạn chưa biết vận mệnh đã ấn định cho bạn những gì trước khi
            bạn bắt đầu hành trình khám phá nó.
        </p>
        <p>
            Điều đặc biệt khi tri thức nằm trong cuốn sách này là sự kế thừa và phát triển từ nghiên cứu dựa theo khoa
            học của nhà toán học - vật lý thiên tài Pythagoras từ 2500 năm trước. Tuy được thống kê và mã hóa qua những
            con số nhưng lại chẳng hề khô khan hơn nữa lại còn dễ đọc, dễ hiểu và dễ áp dụng.
        </p>
        <p>
            Để thấm nhuần được những gì được viết trong cuốn sách này, có hai điều bạn cần lưu ý:
        </p>
        <p>
            Thứ nhất: Hãy tỉnh táo, vì bạn sẽ vừa đọc và vừa làm toán
        </p>
        <p>
            Thứ hai: Phải vui, vì cánh cửa vận mệnh qua ngày tháng, năm sinh và họ tên sắp được hé lộ nên phải vui để
            chuẩn bị thăng hạng cuộc đời.
        </p>
        <p>
            May mắn thay, cuốn sách này được viết vào giữa thời kỳ covid 2020 bùng nổ, khi mà thế giới thực sự đang bước
            sang một trang lịch sử mới sau thảm họa về y tế. Nếu bạn có thể chứng khiến được những thay đổi mạnh mẽ này
            một cách trực tiếp thì càng tốt, vì trải nghiệm này sẽ cho bạn thấy tầm quan trọng của năng lượng đã biểu
            thị qua những con số như thế nào.
        </p>
        <p>
            Cuốn sách này được chia làm 2 phần chính: Phần đầu tiên sẽ cung cấp cho bạn khái quát về môn khoa học
            Numerology- một trong những công trình khoa học quan trọng bậc nhất của thiên tài toán học Pythagoras. Chúng
            ta sẽ cùng tìm hiểu đôi nét về lịch sử ra đời, phát triển và những chỉ số vận mệnh chính yếu sẽ được xét đến
            khi giải mã một con người là gì. Trong phần thứ hai-phần quan trọng nhất, nơi tập hợp những kiến thức và
            trải nghiệm thực tế từ tác giả về ý nghĩa của những con số qua “lời thì thầm”, bạn sẽ được khám phá một cách
            chi tiết về ý nghĩa riêng của từng con số cũng như mô tả chân thực nhất khi đặt con số đó vào từng chỉ số
            vận mệnh cụ thể là như thế nào? Có thể nói rằng toàn bộ những gì cần thiết nhất để giải mã bộ số của một
            người sẽ được trình bày đầy đủ trong phần này. Thêm vào đó, chúng ta cũng sẽ tìm hiểu thêm về các chỉ số tạo
            nên Tiềm năng to lớn trong cuộc đời của mỗi người-các chỉ số Nợ nghiệp, ở đoạn cuối của phần này.
        </p>
        <p>
            Hy vọng rằng, bằng vốn kiến thức và thực nghiệm cơ bản của tác giả, thông qua cuốn sách này, sẽ giúp cho
            những ai đang bắt đầu tìm kiếm sứ mệnh và con đường vận mệnh riêng cho mình sẽ rút ngắn được thời gian và
            công sức để nhanh chóng đạt được mục tiêu là Giải mã thành công cũng như Tự tin hơn trên hành trình vạn dặm.
        </p>
        <p>
            Và bây giờ, khi bạn đã đủ háo hức rồi thì hãy cùng bắt tay vào GIẢI MÃ VẬN MỆNH nhé.
        </p>
        <h3>
            Sơ lược về Numerology và trường phái thần số học Pythagoras
        </h3>
        <p>
            Có rất nhiều hệ thống numerology có nguồn gốc từ nhiều nền văn minh, khoảng thời gian và địa điểm khác nhau
            trên thế giới. Người ta nói rằng ban đầu nó có nguồn gốc từ hàng ngàn năm, trước cả các nền văn minh cổ đại
            của Atlantis, Babylon, Trung Quốc, Ai Cập, Ấn Độ và Hy Lạp. Hệ thống Chaldean về số học (được phát triển bởi
            người Chaldeans-Babylon cổ đại) được cho là hệ thống lâu đời nhất trong tất cả; Tuy nhiên, các nhà nghiên
            cứu numerology hiện đại tin rằng nó đã lỗi thời và ít chính xác với hệ thống số ngày nay. Phương Tây (còn
            được gọi là số học hiện đại của người Viking) cho đến nay vẫn được coi là hệ thống phổ biến và chính xác
            nhất được sử dụng. Numerology phương Tây được phát triển bởi nhà triết học và toán học Hy Lạp- Pythagoras,
            hơn 2.500 năm trước. Pythagoras được coi là là cha đẻ của numerology hiện đại và là người đưa môn học này
            lên bản đồ khoa học khám phá vận mệnh của nhân loại. Hệ thống số học khác hiện đang được sử dụng trên toàn
            thế giới bao gồm Kabbalistic, Trung Quốc (Dịch học), và Tamil / Ấn Độ.
        </p>
        <p>
            Khoảng năm 525 trước Công nguyên, Pythagoras khởi đầu trường phái triết học chính thống của chính mình ở
            Croton, Italia. Pythagoras tin rằng thế giới được hình thành dựa trên quyền năng của các con số; mọi thứ hữu
            hình hay vô hình đều có thể được rút gọn thành các chữ số. Ông tin rằng sự rung động hay “âm” của vũ trụ có
            tác động đúng vào thời điểm một người ra đời, ảnh hưởng đến tính cách, cuộc đời và sự nghiệp của người đó,
            ngoài ra còn phụ thuộc vào vĩ tuyến nơi người đó chào đời.
        </p>
        <p>
            Pythagoras được ca ngợi trong thời của ông là một nhà triết học và toán học lỗi lạc. Trong khi phần lớn cuộc
            đời bị che giấu trong bí ẩn, thì niềm đam mê với những con số của ông được ghi lại rõ ràng; niềm đam mê đã
            đưa anh đến Ai Cập để học numerology trường phái Chaldean trong hai mươi hai năm. Ý tưởng gán các chữ cái
            với giá trị số được gọi là “Hệ thống số Pythagore” ra đời.
        </p>
        <p>
            Đáng tiếc là vào năm 325 sau Công nguyên, tại Công đồng Nicea thứ nhất (Mục đích đầu tiên của việc triệu tập
            công đồng là nhằm tiêu diệt những người theo dị giáo Arian và thống nhất thờ phượng ngày Lễ Phục sinh),
            những người rời khỏi tín ngưỡng của nhà thờ chính phủ đã được phân loại là vi phạm dân sự trong Đế chế La
            Mã. Numerology đã không được sự ưu ái với chính quyền Kitô giáo thời đó và được cho là lĩnh vực tín ngưỡng
            không được chấp thuận cùng với chiêm tinh học và các hình thức bói toán "ma thuật" khác. Bất chấp sự thanh
            trừng này, ý nghĩa tâm linh được gán cho những con số "thiêng liêng" trước đây đã không biến mất; một số số,
            chẳng hạn như "số Jesus" đã được bình luận và phân tích bởi Dorotheus ở Gaza và số học vẫn được sử dụng ít
            nhất trong giới chính thống Hy Lạp bảo thủ. Bất chấp sự phản kháng của nhà thờ, đã có những tranh luận được
            đưa ra cho sự hiện diện của Numerology trong Kinh thánh và kiến ​​trúc tôn giáo (Như trường hợp của số 3 và
            số 7).
        </p>
        <p>
            Trong chiều dài lịch sử 1500 năm tiếp theo, Numerology được lưu truyền như một “môn học cấm kỵ” trong bí mật
            và chỉ thi thoảng được đề cập tới. Ví dụ như trong “Numerorum mysteria” (1591), một chuyên luận về số học
            của Pietro Bongo; hoặc bài diễn văn văn học năm 1658 của Ngài Thomas Browne mang tên “Khu vườn của Cyrus”.
        </p>
        <p>
            Numerology trường phái hiện đại có nhiều tiền đề. Trong cuốn sách “Numerology, The Power in Numbers” của
            Ruth A. Drayer nói rằng vào khoảng đầu thế kỷ 20, bà L. Dow Balliett đã kết hợp công việc của Pythagoras với
            tài liệu tham khảo trong Kinh Thánh. Juno Jordan, sinh viên của Balliett, đã giúp bộ môn này trở thành hệ
            thống được biết đến ngày nay là “Hệ thống dãy số Pythagore” bằng cách xuất bản "The Romance in Your Name"
            vào năm 1965, đã cung cấp một hệ thống để xác định những gì ông gọi là ảnh hưởng quan trọng của các con số
            trong họ tên và ngày sinh vẫn được sử dụng đến ngày hôm nay. Các “nhà thần số học” khác bao gồm Florence
            Campbell (1931), Lynn Buess (1978), Mark Gruner (1979), Faith Javane và Dusty Bunker (1979), Kathleen
            Roquemore (1985) đã mở rộng về việc sử dụng numerology để đánh giá tính cách hoặc các sự kiện. Các trường
            phái khác nhau cũng từ đó mà đưa ra các phương pháp khác nhau để sử dụng numerology.
        </p>
        <p>
            Với cá nhân người viết cuốn sách này thì trường phái Pythagoras truyền thống sẽ là nền tảng được sử dụng để
            tính toán vận mệnh của mỗi người. Ở trường phái cổ điển này, chúng ta sẽ xét tới 4 chỉ số căn bản nhất. (Có
            một số nhà nghiên cứu và chuyên gia xét thêm 2 chỉ số là “Số ngày sinh” và “Số thái độ”, nâng tổng các chỉ
            số cơ bản lên thành 6).
        </p>
        <h3>
            Bộ 4 chỉ số Numerology và mối liên kết với vận mệnh
        </h3>
        <b>
            Một vài từ khóa sẽ liên tục được lặp lại mà bạn nên biết trước
        </b>
        <p>
            Từ sự rung động hay “âm” của vũ trụ tác động đúng vào thời điểm một người ra đời sẽ tạo nên những ảnh hưởng
            lớn đến tính cách, cuộc đời và sự nghiệp của người đó. Dựa theo những sự ảnh hưởng ấy, mã hóa thành con số
            theo thông tin cá nhân thì Thần số học có thể đưa ra 4 chỉ số quan trọng nhất:
        </p>
        <p>
            Từ sự rung động hay “âm” của vũ trụ tác động đúng vào thời điểm một người ra đời sẽ tạo nên những ảnh hưởng
            lớn đến tính cách, cuộc đời và sự nghiệp của người đó. Dựa theo những sự ảnh hưởng ấy, mã hóa thành con số
            theo thông tin cá nhân thì Thần số học có thể đưa ra 4 chỉ số quan trọng nhất:
        </p>
        <p>
            <b> Bài học đường đời (BHDD)</b>: Giá trị, ý nghĩa và bài học khi bạn xuất hiện trong cuộc đời này là gì.
        </p>
        <p>
            Bài học đường đời (BHDD)
        </p>
        <p>
            A - bằng phẳng rộng rãi
        </p>
        <p>
            B - có vài đoạn khá xóc và dốc
        </p>
        <p>
            C - hẹp và nhiều sỏi đá
        </p>
        <p>
            Thì sinh ra, có người được may mắn sải cánh tung hoành trên con đường A, có người thì chỉ được bước đi trên
            con đường B nhưng lại có một số người đành phải cam chịu chấp nhận con đường C.
        </p>
        <p>
            Vận mệnh của con người cũng vậy, thượng đế đã sắp đặt sẵn một con đường dành riêng cho mỗi số mệnh. Trên
            những con đường ấy sẽ có những cơ hội/thách thức khác nhau, và tùy từng chướng ngại vật khác nhau ấy mà
            chúng ta sẽ thu được những bài học và thành quả khác nhau để đến cuối cùng có thể tận hưởng được hết vẻ đẹp
            của con đường mà mình được ban cho. Đó được gọi là BÀI HỌC ĐƯỜNG ĐỜI.
        </p>
        <p>
            Để hỗ trợ cho việc di chuyển trên con đường đời ấy thì ta được cung cấp thêm một số trang bị (cái tên) và nó
            sẽ được thể hiện qua:
        </p>
        <p>
            <b> Năng lực tự nhiên (NLTN)</b>: Hay còn gọi là khả năng nổi trội tự nhiên sinh ra đã có. Bạn không cần quá
            cố gắng hay phải định nghĩa về nó mà năng lực này sẽ tự động được sử dụng như một loại bản năng trong cuộc
            sống thường nhật. Mỗi người sinh ra sẽ được trang bị cho mình những loại năng lực tự nhiên khác nhau.
        </p>
        <p>
            <b> Động lực bên trong (ĐLBT)</b>: Chính là khao khát ẩn sâu con người bên trong của bạn, thứ khiến cho bạn
            thỏa mãn, cảm thấy vui vẻ và hạnh phúc khi trải nghiệm. Đây chỉ là mong muốn, bí mật riêng nên chỉ bản thân
            mỗi người mới định nghĩa được nó thực sự là gì
        </p>
        <p>
            <b>Nhân cách bên ngoài (NC)</b>: Là thứ mà người khác dùng để nhận diện bạn. Hành động bạn thực hiện, lời
            nói bạn truyền đạt, phong thái bạn trình bày sẽ tạo ra con người bạn trong mắt người khác như thế nào. Hay
            nói cách khác, chỉ số này sẽ cho bạn biết, bạn là ai trong mắt người khác.
        </p>
        <p>

        <style>
            th, td{
                border: solid 1px #00ffe9;
                text-align: center;
            }
            th{
                color: #ff961d;
            }
            td{
                color: #e5e5e5;
            }
        </style>
        <table style=width:100%>
            <tr>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
                <th>8</th>
                <th>9</th>
            </tr>
            <tr>
                <td>A</td>
                <td>B</td>
                <td>C</td>
                <td>D</td>
                <td>E</td>
                <td>F</td>
                <td>G</td>
                <td>H</td>
                <td>I</td>
            </tr>
            <tr>
                <td>J</td>
                <td>K</td>
                <td>L</td>
                <td>M</td>
                <td>N</td>
                <td>O</td>
                <td>P</td>
                <td>Q</td>
                <td>R</td>
            </tr>
            <tr>
                <td>S</td>
                <td>T</td>
                <td>U</td>
                <td>V</td>
                <td>W</td>
                <td>X</td>
                <td>Y</td>
                <td>Z</td>
                <td></td>
            </tr>
        </table>


    </div>
</div>
</div>

<script>
    const API_THAN_SO_HOC = "<?=base_url()?>/v1/ThanSoHoc";
    
    async function numerologyResults() {
        let t_name = $("#t_name").val();

        let t_day = $("#t_day").val();
        let t_month = $("#t_month").val();
        let t_year = $("#t_year").val();
        
        let numerologyBHDD = calculateNumerologyBHDD(t_year, t_month, t_day);
        let numerologyNLTN = calculateNumerologyNLTN(t_name);
        let numerologyDLBT = calculateNumerologyDLBT(t_name);
        let numerologyNC = calculateNumerologyNC(t_name);
     
        
        // console.log("Than so hoc BHDD:" + numerologyBHDD);
        // console.log("Than so hoc NLTN:" + numerologyNLTN);
        // console.log("Than so hoc DLBT:" + numerologyDLBT);
        // console.log("Than so hoc NC:" + numerologyNC);

        if (!t_name) {
            alert("Tên không được bỏ trống");
        } else {

            $("#rs_box").html("<div class='t_text_waiting '>Đang tính toán kết quả(chờ trong khoảng 10s).......</div>");

            let api_url_bhdd = API_THAN_SO_HOC + "?type=1&numerology=" + numerologyBHDD;
            let api_url_nltn = API_THAN_SO_HOC + "?type=2&numerology=" + numerologyNLTN;
            let api_url_dlbt = API_THAN_SO_HOC + "?type=3&numerology=" + numerologyDLBT;
            let api_url_nc = API_THAN_SO_HOC + "?type=4&&numerology=" + numerologyNC;
            
            let bndd = await callApiGet(api_url_bhdd);
            let nltn = await callApiGet(api_url_nltn);
            let dlbt = await callApiGet(api_url_dlbt);
            let nc = await callApiGet(api_url_nc);
            let _data = {"name": t_name,
                "birthday": t_day +"/" + t_month + "/" + t_year,
                "bndd":{
                    "num": numerologyBHDD,
                    "content": bndd.data.content ?? "",
                },
                "nltn":{
                    "num": numerologyNLTN,
                    "content": nltn.data.content ?? "",
                },
                "dlbt":{
                    "num": numerologyDLBT,
                    "content": dlbt.data.content ?? "",
                },
                "nc":{
                    "num": numerologyNC,
                    "content": nc.data.content ?? "",
                }};
            outResults(_data);
        }

    }

    function outResults(data) {
        let html = "";
        html += "<H1 style= 'text-align: center; margin-top: 25px'>KẾT QUẢ</H1>";
        html += "<h3>Thông tin</h3>";
        html += "<p><b>Họ tên: </b>" + data.name + "</p>";
        html += "<p><b>Ngày sinh: </b>" + data.birthday + "</p>";
     
        html += "<br/><h3>Bài học đường đời ứng với số " + data.bndd.num +"</h3>";
        html += "<p style='color: #ffd320'> Bài học đường đời (BHDD) = " + data.bndd.num +
            "<a href='<?=base_url()?>/ThanSoHoc/cachTinhBhdd' style='color: #e7a5ff; margin-left: 10px'>(Xem cách tính)</a> </p>";

        html += "<p>" + data.bndd.content + "</p>";


        html += "<br/><h3>Năng lực tự nhiên ứng với số " + data.nltn.num +"</h3>";
        html += "<p style='color: #ffd320'>Năng lực tự nhiên (NLTN) = " + data.nltn.num +
            "<a href='<?=base_url()?>/ThanSoHoc/cachTinhDlbtNltnNc' style='color: #e7a5ff; margin-left: 10px'>(Xem cách tính)</a> </p>";
        html += "<p>" + data.nltn.content + "</p>";

        html += "<br/><h3>Động lực bên trong ứng với số " + data.dlbt.num +"</h3>";
        html += "<p style='color: #ffd320'>Động lực bên trong (DLBT) = " + data.dlbt.num +
            "<a href='<?=base_url()?>/ThanSoHoc/cachTinhDlbtNltnNc' style='color: #e7a5ff; margin-left: 10px'>(Xem cách tính)</a> </p>";
        html += "<p>" + data.dlbt.content + "</p>";

        html += "<br/><h3>Nhân cách bên ngoài ứng với số " + data.nc.num +"</h3>";
        html += "<p style='color: #ffd320'> Nhân cách bên ngoài (NC) = " + data.nc.num +
            "<a href='<?=base_url()?>/ThanSoHoc/cachTinhDlbtNltnNc' style='color: #e7a5ff; margin-left: 10px'>(Xem cách tính)</a> </p>";
        html += "<p>" + data.nc.content + "</p>";
        
        
        $("#rs_box").html(html);
    }

</script>
</body>
</html>