<?php require_once "main/header.php"; ?>
<script src="ckeditor/ckeditor.js"></script>

<div class="d-xl-flex justify-content-between align-items-start">
    <div style="display: flex; margin: 0px">
        <h3 class="text-dark font-weight-bold mb-2" id="page-title">Quản lý danh sách Nội dung cho số chủ đạo trong Thần số học</h3>
        <!--        <button style="margin-left: 15px; margin-bottom: 5px; font-size: 13px" class="btn-edit btn-detail">Thêm đại lý mới</button>-->
    </div>
    <div class="d-sm-flex justify-content-xl-between align-items-center mb-2">
    </div>
</div>
<div class="row">
    <div class="col-md-12">

        <div class="tab-content tab-transparent-content">
            <div class="tab-pane fade show active" id="business-1"
                 role="tabpanel" aria-labelledby="business-tab">
                <div class="tab-pane fade show active"
                     id="business-1" role="tabpanel"
                     aria-labelledby="business-tab">

                    <div style=" width: 100%; margin-bottom: 5px">
                        <div style="float: left">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body"
                                     style="min-height: 700px">
                                    <style>
                                        .table-striped tr td:nth-child(2) {
                                            text-align: left;
                                            color: #c47a25;
                                        }
                                        .table-striped tr td:nth-child(3) {
                                            width: 70%;
                                        }
                                    </style>
                                    <div id="scroll-table">
                                        <table class="table table-striped"
                                               style="width: 100%;"
                                               id="datatable">
                                            <thead style="text-align: center">
                                            <th style="width: 10px">STT</th>
                                            <th>Bài viết</th>
                                            <th>Chi tiết nội dung</th>
                                            <th>Sửa nội dung</th>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    renderTable(url_api + "ThanSoHoc/listPosts?flag=1");

    function renderTable(url) {
        let index = 1;
        $(document).ready(function () {
            $("#datatable").DataTable({
                "ajax": {
                    "url": url,
                    type: "GET",
                    "dataSrc": ""
                },
                "columns": [
                    {
                        "data": null,
                        mRender: function (data, type, row) {
                            console.log(data);
                            return index++;
                        },
                    },
                    {
                        "data": null,
                        mRender: function (data, type, row) {
                            return "Nội dung cho <span style='color: #07a48b'>" + getNumerologyTextType(data.type) + "</span> ứng với số chủ đạo <span style='color: #ff0000; font-weight: 600'>" + data.numerology +"</span>";
                        },
                    },
                    {
                        "data": 'content',
                        mRender: function (data, type, row) {
                            return "<textarea style='width: 100%; height: 100%; min-height: 60px; font-size: 11px; border: none' readonly>" + data + "</textarea>";
                        },
                    },
                    {
                        "data": null,
                        mRender: function (data, type, row) {
                            return "<button class='btn btn-primary' style='padding: 7px 25px; color: #f8f8f8' onclick='editPost("+ data.id +")'>Sửa nội dung</button>";
                        },
                    }
                ],
                "bSort": true,
                "dom": ' <<t>ip>',
                "bProcessing": false,
                "bLengthChange": true,
                "iDisplayLength": 100,
                "language": {
                    "decimal": "",
                    "emptyTable": "Danh sách rỗng",
                    "info": "Hiển thị _START_ - _END_ trên tổng số _TOTAL_ hàng",
                    "infoEmpty": "Hiển thị 0 hàng trên tổng số 0 hàng",
                    "infoFiltered": "(filtered from _MAX_ total entries)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Hiển thị 1 trang _MENU_ hàng",
                    "loadingRecords": "Đang tải...",
                    "processing": "",
                    "search": "Tìm kiếm:",
                    "zeroRecords": "Không tìm thấy kết quả",
                }
            })
        })
    }

    function editPost(id){
        window.location="<?=base_admin_url()?>/editNumerologyPost?p_id=" + id;
    }

</script>


<?php require_once "main/footer.php" ?>
