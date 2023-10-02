<?php require_once "main/header.php"; ?>
<script src="<?= base_url() ?>vender/assets/ckeditor/ckeditor.js"></script>
<div class="d-xl-flex justify-content-between align-items-start">
    <div style="display: flex; margin: 0px">
        <h3 class="text-dark font-weight-bold mb-2" id="page-title"></h3>
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
                                    </style>
                                    <h4 style="color: #012541">Nội dung</h4>
                                    <textarea id="n_content" name="content"><?=$content?></textarea>
                                    <div style="width: 100%; text-align: right; margin-top: 20px">
                                        <button class="btn btn-success" onclick="updatePostContent()">Cập nhật</button>
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
    $("#page-title").html("Chỉnh sửa nội dung cho <span style='color: #07a48b'>" + getNumerologyTextType(<?=$type?>) + "</span> ứng với số chủ đạo <span style='color: #ff0000; font-weight: 600'><?=$numerology?></span>");
    CKEDITOR.replace('n_content',{
        height: '320px',
    });

    function updatePostContent(){
        let api_update = url_api + "/ThanSoHoc/updatePostContent";
        let content = CKEDITOR.instances.n_content.getData();

        let data = new FormData();
        data.append('id', "<?=$id?>");
        data.append('content', content);
        callApiPost(api_update, data).then(e => {
            alert(e.message);
            if (e.status){
                window.location="<?=base_admin_url()?>/listNumerologyPost";
            }
        })
    }
</script>
<?php require_once "main/footer.php" ?>
