<?php

class Upload extends API_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }


    public function index()
    {
        if (!empty($_FILES['uploaded_file'])) {
            $path = "vender/img/uploads/";
            $path = $path . time() . '_' . basename($_FILES['uploaded_file']['name']);
            if (move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
                $url = base_url();
                echo json_encode([
                    'status' => true,
                    'message' => 'success',
                    'data' => $url . '/' . $path,
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'message' => 'error',
                    'data' => null,
                ]);
            }
        } else {
            echo json_encode([
                'status' => false,
                'message' => 'no file',
                'data' => null,
            ]);
        }
    }

    public function uploadImageBase64(){
        $data = $this->input->post("data_base64");

        $path = "vender/img/uploads/";
        $path = $path . generateRandomString(25) ."_notify.png";
        $url = base_url();

        list($type, $data) = explode(';', $data);
        list(, $data)      = explode(',', $data);
        $data = base64_decode($data);

        if (empty($data)){
            die(json_encode([
                'status' => false,
                'message' => 'Thất bại',
                'data' => $url.$path,
            ]));
        }

        file_put_contents($path, $data);
        echo json_encode([
            'status' => true,
            'message' => 'Thành công',
            'data' => $url.$path,
        ]);
    }

    public function uploadMultipleFile()
    {
        if (!empty($_FILES['uploaded_file'])) {
            $path = "vender/img/uploads/";
            $list = [];
            $listVideo = [];

            $countfiles = count($_FILES['uploaded_file']['name']);
            for ($i = 0; $i < $countfiles; $i++) {
                $temp = explode(".", $_FILES["uploaded_file"]["name"][$i]);
                $fileName = 'uploads/' . round(microtime(true)) . "_$i" . '.' . end($temp);
                if (move_uploaded_file($_FILES['uploaded_file']['tmp_name'][$i], $fileName)) {
                    $url = base_url();

                    if (strpos($_FILES["uploaded_file"]["type"][$i], 'video') !== false) {
                        $listVideo[] = $url;
                    } else {
                        $list[] = $url;
                    }
                }
            }
            $this->result_json([
                'images' => $list,
                'videos' => $listVideo,
            ]);
        } else {
            $this->result_json_error(ERROR_UPLOAD_FILE, 'no file');
        }
    }

    public function uploadHunoServer(){

    }
    public function uploadMultipleHunoServer(){

    }

    public function uploadImageBase64HunoServer(){

    }
}
