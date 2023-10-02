<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ThanSoHoc extends API_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $numerology = $this->input->get("numerology");
        $type = $this->input->get("type");
        
        $rs = $this->NumerologyPostModel->getPostByNumerology($numerology, $type);
        $this->result_json($rs, "Dự đoán số mệnh đối Thần số hoọc sô ". $numerology);
    }

    public function listPosts(){
        $flag = $this->input->get("flag");
        $rs = $this->NumerologyPostModel->list();

        if ($flag){
            die(json_encode($rs));
        }else{
            $this->result_json($rs, "Danh sách nội dung");
        }
    }

    public function getPostByNumerology(){
        $numerology = $this->input->get("numerology");
        $type = $this->input->get("type");

        $rs = $this->NumerologyPostModel->getPostByNumerology($numerology, $type);

        $this->result_json($rs, "Dự đoán số mệnh đối Thần số hoọc sô ". $numerology);
    }

    public function updatePostContent(){
        $id = $this->input->post("id");
        $content = $this->input->post("content");

        if (empty($id)){
            $this->result_json_error(41, "Id không hợp lệ");
        }
        if (empty($id)){
            $this->result_json_error(42, "Nội dung đang bỏ trống");
        }

        $this->NumerologyPostModel->update_data(['id' => $id], ['content' => $content]);

        $this->result_json($id, "Cập nhật nội dung thành công");
    }
}