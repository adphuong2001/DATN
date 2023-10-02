<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends API_Controller
{

    public function __construct()
    {
        parent::__construct();
        header('Content-Type: text/html');

        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        if (!strpos($actual_link, "/login")) {
            $this->checkLogin();
        }
    }

    public function index()
    {
        $this->load->view("admin/list_numerology_content");
    }

    public function listNumerologyPost(){
        $this->load->view("admin/list_numerology_content");
    }

    public function listPosts(){
        $this->load->view("admin/list_post");
    }

    public function checkLogin(){
        $token = $_COOKIE['token'] ?? "";
        $user = $this->UsersModel->profile($token);
        if (empty($user)){
            header("Location: " . base_admin_url("login"));
        }
    }
    public function logout()
    {
        setcookie('token', null, -1, '/');
        header("Location: " . base_admin_url());
    }
    public function login(){
        $phone = $this->input->post("phone");
        $password = $this->input->post("password");

        $data = [];
        if ( !empty($phone) && !empty($password)){
            $password = md5($password);
            $user = $this->UsersModel->login($phone, $password);
            if (!empty($user)){
                setcookie("token", $user['token'], time() + 6000000, "/");
                setcookie("name", $user['name'], time() + 6000000, "/");
                setcookie("phone", $user['phone'], time() + 6000000, "/");
                setcookie("address", $user['address'], time() + 6000000, "/");
                setcookie("avatar", $user['avatar'], time() + 6000000, "/");

                header("Location: " . base_admin_url());
            }else{
                $data["message"] = $user->message ?? "Thông tin đăng nhập không đúng";
            }
        }

        $this->load->view("admin/login", $data);
    }

    public function editNumerologyPost(){
        $id = $this->input->get("p_id");
        $data = $this->NumerologyPostModel->getPostById($id);
        $this->load->view("admin/edit-numerology-post", $data);
    }

    public function editPost(){
        $id = $this->input->get("p_id");
        $data = $this->PostsModel->get($id);
        $this->load->view("admin/edit-post", $data);
    }

    public function addPosts(){
        $this->load->view("admin/add-post");
    }
}