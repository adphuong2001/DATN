<?php
defined('BASEPATH') or exit('No direct script access allowed');
class NumerologyPost_Model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table = $this->numerology_post;
    }

    public function list(){
        $this->db->select("*");
        $this->db->from("$this->table");
        $this->db->order_by("type");
        $this->db->order_by("numerology");
        return $this->db->get()->result_array();
    }

    public function getPostByNumerology($Numerology = 0, $type = 1){
        if (empty($Numerology)) return [];
        $this->db->select("*");
        $this->db->from("$this->table");
        $this->db->where("numerology", $Numerology);
        $this->db->where("type", $type);
        $rs = $this->db->get()->result_array();

        return $rs[0] ?? [];
    }

    public function getPostById($id = 0){
        if (empty($id)) return [];
        $this->db->select("*");
        $this->db->from("$this->table");
        $this->db->where("id", $id);
        $rs = $this->db->get()->result_array();

        return $rs[0] ?? [];
    }
}