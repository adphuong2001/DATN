<?php require_once "main/header.php"; ?>
<script src="<?= base_url() ?>vender/assets/ckeditor/ckeditor.js"></script>
<div class="d-xl-flex justify-content-between align-items-start">
    <div style="display: flex; margin: 0px">
        <h3 class="text-dark font-weight-bold mb-2" id="page-title">Chỉnh sửa bài viết</h3>
        <!--        <button style="margin-left: 15px; margin-bottom: 5px; font-size: 13px" class="btn-edit btn-detail">Thêm đại lý mới</button>-->
    </div>
    <div class="d-sm-flex justify-content-xl-between align-items-center mb-2">
    </div>
</div>
<style>
    .p_title{
        width: 100%;
        border: solid 1px #888;
        height: 30px;
        font-weight: 500;
        padding-left: 5px;
    }
    .p_title:focus{
        border: solid 1px #888;
    }
</style>
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
                                    <h4 style="color: #012541; margin-top: 20px">Tiêu đề bài viết</h4>
                                    <input type="text" value="<?=$title?>" class="p_title" id="n_title" name="title">

                                    <h4 style="color: #012541; margin-top: 20px">Nội dung</h4>
                                    <textarea id="n_content" name="content"><?=$content?></textarea>

                                    <div class="form-group">
                                        <h4 style="color: #012541; margin-top: 20px">Hình ảnh bài viết</h4>
                                        <img id="blah" src="<?=$img ?? ""?>" alt="Hình ảnh thông báo"
                                             style="height: 140px; width: 200px;"/><br><br>
                                        <input type='file' style="font-size: 12px;" name="imgInp" id="imgInp"/>
                                    </div>

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
    CKEDITOR.replace('n_content',{
        height: '320px',
    });

    async function updatePostContent(){
        let api_update = url_api + "/Posts/update";
        let content = CKEDITOR.instances.n_content.getData();
        let title = $("#n_title").val();
        let image = document.getElementById("imgInp").files[0];

        let url_upload = url_api + "upload";

        let u_data = new FormData()
        u_data.append('uploaded_file', image);
        image = await fetch(url_upload, {
            method: 'POST',
            body: u_data
        }).then(e => {
            return e.json();
        }).catch(e => {
            console.log(e)
        })
        image = image.data ?? "";

        let data = new FormData();
        data.append('id', "<?=$id?>");
        data.append('content', content);
        data.append('title', title);
        data.append('image', image);

        callApiPost(api_update, data).then(e => {
            alert(e.message);
            if (e.status){
                window.location="<?=base_admin_url()?>/listPosts";
            }
        })
    }


    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function () {
        readURL(this);
    });
</script>
<?php require_once "main/footer.php" ?>
