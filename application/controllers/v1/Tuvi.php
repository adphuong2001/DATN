<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tuvi extends API_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function tuViLaSo(){
        $fullname = $this->input->post("fullname");
        $gender = $this->input->post("gender");
        $day = $this->input->post("day");
        $month = $this->input->post("month");
        $year = $this->input->post("year");
        $hour = $this->input->post("hour");
        $minute = $this->input->post("minute");

        $data = [
          "fullname" => $fullname,
          "gender" => $gender,
          "day" => $day,
          "month" => $month,
          "year" => $year,
          "hour" => $hour,
          "minute" => $minute,
        ];

        $api = API_URL_LICH_VAN_NIEN . "tuViLaSo";

        $rs = callApiPost($api, $data);
        die($rs);
    }

    public function tuViCungHoangDao(){
        $cung = $this->input->post("cung");
        $data = [
            "cung" => $cung
        ];

        $api = API_URL_LICH_VAN_NIEN . "tuviCHDNgay";

        $rs = callApiPost($api, $data);
        //die(json_encode($data));
        die($rs);
    }

    public function tinhYeu2CungHoangDao(){
        $nam_xem = $this->input->post("nam_xem");
        $cung_nu = $this->input->post("cung_nu");
        $cung_nam = $this->input->post("cung_nam");

        $api = "https://api.lichvannien.mobi//api/v1/trachNghiemTinhYeuChd";
        $data = [
            "nam_xem" => $nam_xem,
            "cung_nu" => $cung_nu,
            "cung_nam" => $cung_nam
        ];

        $rs = callApiPost($api, $data);
        die($rs);
    }
}