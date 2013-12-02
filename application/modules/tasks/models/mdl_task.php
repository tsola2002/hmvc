<?php
/**
 *
 * Package: hmvc
 * Filename: mdl_task.php
 * Author: solidstunna101
 * Date: 02/12/13
 * Time: 09:55
 *
 */

class Mdl_task extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

    function get($order_by){
        $this->db->order_by($order_by);
        $query = $this->db->get('tasks');
        return $query;
    }
}