<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Posts extends API_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function list(){
        $flag = $this->input->get("flag");

        $rs = $this->PostsModel->getAll();

        if ($flag){
            die(json_encode($rs));
        }else{
            $this->result_json($rs, "Danh sách bài viết");
        }
    }

    public function get(){
        $id = $this->input->get("id");

        $rs = $this->PostsModel->get($id);
        $this->result_json($rs, "Bài viết");
    }

    public function update(){
        $id = $this->input->post("id");
        $content = $this->input->post("content");
        $title = $this->input->post("title");
        $img = $this->input->post("image");

        if (empty($id)){
            $this->result_json_error(41, "Id không hợp lệ");
        }
        if (empty($content)){
            $this->result_json_error(42, "Nội dung đang bỏ trống");
        }
        if (empty($title)){
            $this->result_json_error(42, "Tiêu đề đang bỏ trống");
        }

        $data = ['content' => $content, 'title'  => $title];
        if (!empty($img)){
            $data['img'] = $img;
        }

        $this->PostsModel->update_data( ['id' => $id], $data);

        $this->result_json($id, "Bài viết đã được cập nhật");
    }

    public function add(){
        $content = $this->input->post("content");
        $title = $this->input->post("title");
        $img = $this->input->post("image");

        if (empty($content)){
            $this->result_json_error(42, "Nội dung đang bỏ trống");
        }
        if (empty($title)){
            $this->result_json_error(42, "Tiêu đề đang bỏ trống");
        }

        $this->PostsModel->insert_data(['content' => $content, 'title'  => $title, "img" => $img]);

        $this->result_json($id, "Bài viết đã được thêm");
    }

    public function delete(){
        $id = $this->input->post("id");

        $rs = $this->PostsModel->delete_data(['id' => $id]);

        $this->result_json(null, "Xóa thành công");
    }
}