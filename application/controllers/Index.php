<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Index extends API_Controller
{

    public function __construct()
    {
        parent::__construct();
        header('Content-Type: text/html');
    }

    public function index()
    {
        $listPost = $this->PostsModel->getAll();
        $this->load->view("/web/index", ['posts' => $listPost]);
    }
}