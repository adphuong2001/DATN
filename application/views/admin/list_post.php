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
                    <a href="<?=base_admin_url()?>addPosts">
                        <button class="btn btn-info">Thêm bài viết mới</button>
                    </a>
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
                                        .table-striped tr td:nth-child(4) {
                                            width: 70%;
                                        }
                                        .table-striped tr td:nth-child(5) {
                                            color: #0f8edd;
                                            font-size: 13px;
                                        }
                                    </style>
                                    <div id="scroll-table">
                                        <table class="table table-striped"
                                               style="width: 100%;"
                                               id="datatable">
                                            <thead style="text-align: center">
                                            <th style="width: 10px">STT</th>
                                            <th>Hình ảnh</th>
                                            <th>Tiêu đề</th>
                                            <th>Chi tiết nội dung</th>
                                            <th>Ngày</th>
                                            <th>Hành động</th>
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
    renderTable(url_api + "Posts/list?flag=1");

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
                        "data": 'img',
                        mRender: function (data, type, row) {
                            return "<img style='width: 100px; height: auto; border-radius: 0px' src='" + data + "'/>";
                        },
                    },
                    {
                        "data": 'title',
                        mRender: function (data, type, row) {
                            return data;
                        },
                    },
                    {
                        "data": 'content',
                        mRender: function (data, type, row) {
                            return "<textarea style='width: 100%; height: 100%; min-height: 60px; font-size: 11px; border: none' readonly>" + data + "</textarea>";
                        },
                    },
                    {
                        "data": 'timecreate',
                        mRender: function (data, type, row) {
                            return data;
                        },
                    },
                    {
                        "data": null,
                        mRender: function (data, type, row) {
                            return "<button class='btn btn-primary' style='padding: 7px 25px; color: #f8f8f8' onclick='editPost("+ data.id +")'>Sửa nội dung</button>" +
                                "<button class='btn btn-danger' style='padding: 7px 25px; color: #f8f8f8; margin-left: 10px' onclick='deletePost("+ data.id +")'>Xóa</button";
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
        window.location="<?=base_admin_url()?>/editPost?p_id=" + id;
    }

    function deletePost(id){
        if (confirm("Bạn chắc chắn muốn xóa bài viết này......")){
            let api_delete = url_api + "/Posts/delete";

            let data = new FormData();
            data.append('id', id);
            callApiPost(api_delete, data).then(e => {
                alert(e.message);
                location.reload();
            });
        }
    }

</script>


<?php require_once "main/footer.php" ?>
