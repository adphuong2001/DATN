<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Ho_Chi_Minh');
ini_set('memory_limit', '-1');

require_once(APPPATH . 'controllers/const.php');
require_once(APPPATH . 'controllers/CommonFunctions.php');
ini_set('memory_limit', '-1');

class API_Controller extends CI_Controller
{

    public $io;

    protected NumerologyPost_Model $NumerologyPostModel;
    protected Users_Model $UsersModel;

    protected Posts_Model $PostsModel;

    public function __construct()
    {
        parent::__construct();
        header('Content-Type: application/json');
        ob_start();
        $this->io = $this->input;

        $this->load->model('v1/NumerologyPost_Model');
        $this->NumerologyPostModel = $this->NumerologyPost_Model;

        $this->load->model('v1/Users_Model');
        $this->UsersModel = $this->Users_Model;

        $this->load->model('v1/Posts_Model');
        $this->PostsModel = $this->Posts_Model;
    }

    public function result_json($data = null, $message = 'Success'): string
    {
        $array = [
            "status" => true,
            "message" => $message,
            "data" => $data,
        ];
        ob_end_clean();
        die(json_encode($array));
    }

    public function result_json_error($error_code, $message = '')
    {
        if (empty($message)) {
            $message = getErrorMessage($error_code);
        }
        $rs = [
            "status" => false,
            "message" => $message,
            "data" => null,
            "error_code" => $error_code,
        ];
        ob_end_clean();
        die(json_encode($rs));
    }

}