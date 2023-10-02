<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ThanSoHoc extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        header('Content-Type: text/html');
    }

    public function index()
    {
        $this->load->view("/web/than-so-hoc/than-so-hoc-pythagoras");
    }

    public function cachTinhBhdd(){
        $this->load->view("/web/than-so-hoc/cach-tinh/bhdd");
    }
    public function cachTinhDlbtNltnNc(){
        $this->load->view("/web/than-so-hoc/cach-tinh/dlbt-nltn-nc");
    }
}