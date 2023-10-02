<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post extends API_Controller
{

    public function __construct()
    {
        parent::__construct();
        header('Content-Type: text/html');
    }

    public function index()
    {
        $id = $this->input->get("id");

        $rs = $this->PostsModel->get($id);
        $this->load->view("web/post",  ['post' => $rs]);
    }
}