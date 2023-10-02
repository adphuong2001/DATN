<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Posts_Model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table = $this->posts;
    }
}