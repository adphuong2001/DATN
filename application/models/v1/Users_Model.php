<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Users_Model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table = $this->users;
    }

    public function login($phone, $password){
        if (empty($phone) && empty($password)) return [];

        $this->db->select("id, phone, name, address, avatar, token, timecreate");
        $this->db->from("$this->table");
        $this->db->where("phone", $phone);
        $this->db->where("password", $password);
        $rs = $this->db->get()->result_array();
        $rs = $rs[0] ?? [];
        if (empty($rs)) return [];

        $rs['token'] = md5($phone . $password . SECRET_KEY . time());
        $this->setToken($rs['id'], $rs['token']);

        return $rs;
    }

    public function profile($token){
        if (empty($token)) return [];

        $this->db->select("id, phone, name, address, avatar, token, timecreate");
        $this->db->from("$this->table");
        $this->db->where("token", $token);
        $rs = $this->db->get()->result_array();

        return $rs;
    }

    public function setToken($user_id, $token){
        if (empty($user_id) || empty($token)) return false;

        $this->db->where("id", $user_id);
        $this->db->set("token", $token);

        $this->db->update("$this->table");
    }
}