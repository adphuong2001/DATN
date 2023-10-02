<?php defined('BASEPATH') or exit('No direct script access allowed');

require_once(APPPATH . 'controllers/CommonFunctions.php');

class MY_Model extends CI_Model
{
    protected $table;
    protected $DB;
    protected $token;

    protected $numerology_post = "numerology_post";
    protected $users = "users";

    protected $posts = "posts";
    function __construct()
    {
        $this->load->database();
        $this->DB = $this->db;
    }

    protected $statistics = "statistics";

    // arr_where: mảng chứa các điều kiện
    // arr_value: mảng chứa các giá trị
    function getAll()
    {
        $this->db->select('*');
        $result = $this->db->get($this->table);
        return $result->result_array();
    }
    function get($id)
    {
        $this->db->select('*');
        $this->db->where("id", $id);
        $result = $this->db->get($this->table)->result_array();
        if (isset($result[0])) return $result[0];
        return false;
    }

    function insert_data($arr_value)
    {
        $this->db->insert($this->table, $arr_value);
        $rb = $this->db->insert_id();
        //die($this->db->last_query());
        return $rb;
    }

    function insert_data_table($table, $arr_value)
    {
        $this->db->insert($table, $arr_value);
        $rb = $this->db->insert_id();
        return $rb;
    }

    function update_data($arr_where, $arr_value)
    {
        foreach ($arr_where as $key => $value) {
            $this->db->where($key, $value);
        }
        $this->db->update($this->table, $arr_value);
        if ($this->db->affected_rows() > 0) return true;
        else return false;
    }


    function update_data_tabale($table, $arr_where, $arr_value)
    {
        foreach ($arr_where as $key => $value) {
            $this->db->where($key, $value);
        }
        $this->db->update($table, $arr_value);
        if ($this->db->affected_rows() > 0) return true;
        else return false;
    }

    /**
     * delete ONE data, using "=" or "LIKE" operator
     * delete MULTIPLE data, using "IN" operator
     * @method delete_data
     * @param array $conditions ['condition' => array(value1, value2, ...)]
     * @param string $operator [= (default), LIKE, IN]
     */
    public function delete_data($conditions, $operator = '')
    {
        switch ($operator) {
            case '':
                foreach ($conditions as $key => $value) {
                    $this->db->where($key, $value);
                }
                break;
            case 'like':
                foreach ($conditions as $key => $value) {
                    $this->db->like($key, $value);
                }
                break;
            case 'in':
                foreach ($conditions as $key => $value) {
                    $this->db->where_in($key, $value);
                }
                break;
        }

        return $this->db->delete($this->table);
    }

    public function delete_data_table($tbale, $conditions, $operator = '')
    {
        switch ($operator) {
            case '':
                foreach ($conditions as $key => $value) {
                    $this->db->where($key, $value);
                }
                break;
            case 'like':
                foreach ($conditions as $key => $value) {
                    $this->db->like($key, $value);
                }
                break;
            case 'in':
                foreach ($conditions as $key => $value) {
                    $this->db->where_in($key, $value);
                }
                break;
        }

        return $this->db->delete($tbale);
    }

    function getdata_id($table, $name, $id)
    {
        $this->db->select('*');
        $this->db->where($name, $id);
        $result = $this->db->get($table);
        return $result->result_array();
    }

    /**
     * get id from specific data
     * @param string $table [name of table]
     * @param array $name [contains name of column and value to compare]
     * @param string $id_col [name of column contains needed id]
     * @return id of $name
     * @author Kien
     * @method getId_data
     */
    public function getId_data($table, $name, $id_col)
    {
        $this->db->select($id_col);
        foreach ($name as $key => $value) {
            $this->db->where($key, $value);
        }
        $rs = $this->db->get($table);
        return $rs->result_array();
    }



    /**
     * get data with custom SELECT and WHERE clause
     * @method get_data
     * @param mixed $conditions [if $condition = 1 then get all data (default)]
     * @param string $selections [get all on default]
     * @param int $limit
     * @param int $offset
     *
     * e.g:
     * $condition = ['key' => 'value', ...] then WHERE clase like "'key' = 'value' AND 'key' = 'value'"
     * $condition = "'key1' = 'value1' AND/OR/... 'key2' like '%value2%'" then WHERE is same
     */

    public function get_data($conditions = 1, $selections = '*', $limit = null, $offset = 0)
    {
        $this->db->select($selections);
        if ($conditions != 1) {
            if (is_array($conditions)) {
                foreach ($conditions as $key => $value) {
                    $this->db->where($key, $value);
                }
            } else $this->db->where($conditions);
        }
        $rs = $this->db->get($this->table, $limit, $offset);
        return $rs->result_array();
    }

    public function get_data_table($table, $conditions = 1, $selections = '*', $limit = null, $offset = 0)
    {
        $this->db->select($selections);
        if ($conditions != 1) {
            if (is_array($conditions)) {
                foreach ($conditions as $key => $value) {
                    $this->db->where($key, $value);
                }
            } else $this->db->where($conditions);
        }
        $rs = $this->db->get($table, $limit, $offset);
        return $rs->result_array();
    }

    /**
     * insert when null and update if existed
     * @method save_data
     * @param array $data ['key' => 'value']
     */
    public function save_data($data)
    {
        $query = "INSERT INTO $this->table (";
        $tmp = "";
        $keys = array_keys($data);
        $values = array_values($data);

        for ($i = 0; $i < count($keys); $i++) {
            $query .= "$keys[$i], ";
            $tmp .= "'$values[$i]', ";
        }
        $query = preg_replace('#(, )$#', ') VALUES (', $query);
        $query .= $tmp;
        $query = preg_replace('#(, )$#', ') ON DUPLICATE KEY UPDATE ', $query);
        foreach ($data as $key => $value) {
            $query .= "$key = '$value', ";
        }
        $query = preg_replace('#(, )$#', '', $query);

        $this->db->query($query);
        return $this->db->affected_rows();
    }
}
