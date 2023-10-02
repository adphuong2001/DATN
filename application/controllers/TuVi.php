<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TuVi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        header('Content-Type: text/html');
    }

    public function index()
    {
        $this->load->view("/web/tu_vi/la-so-tu-vi");
    }

    public function tuViLaSo(){
        $this->load->view("/web/tu_vi/la-so-tu-vi");
    }

    public function tuViCungHoangDao(){
        $this->load->view("/web/tu_vi/ti-vi-cung-hoang-dao");
    }

    public function tinhYeu2CungHoangDao(){
        $this->load->view("/web/tu_vi/tinh-yeu-2-cung-hoang-dao");
    }

}