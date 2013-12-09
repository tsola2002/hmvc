<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * Package: hmvc
 * Filename: template.php
 * Author: solidstunna101
 * Date: 04/12/13
 * Time: 11:22
 *
 */

class Template extends MX_Controller {



    function __construct() {
        parent::__construct();
    }

    function get($order_by){
        $this->load->model('base_model');
        $query = $this->base_model->get($order_by);
        return $query;
}

    function get_with_limit($limit, $offset, $order_by) {
        $this->load->model('base_model');
        $query = $this->base_model->get_with_limit($limit, $offset, $order_by);
        return $query;
    }

    function get_where($id){
        $this->load->model('base_model');
        $query = $this->base_model->get_where($id);
        return $query;
    }

    function get_where_custom($col, $value) {
        $this->load->model('base_model');
        $query = $this->base_model->get_where_custom($col, $value);
        return $query;
    }

    function _insert($data){
        $this->load->model('base_model');
        $this->base_model->_insert($data);
    }

    function _update($id, $data){
        $this->load->model('base_model');
        $this->base_model->_update($id, $data);
    }

    function _delete($id){
        $this->load->model('base_model');
        $this->base_model->_delete($id);
    }

    function count_where($column, $value) {
        $this->load->model('base_model');
        $count = $this->base_model->count_where($column, $value);
        return $count;
    }

    function get_max() {
        $this->load->model('base_model');
        $max_id = $this->base_model->get_max();
        return $max_id;
    }

    function _custom_query($mysql_query) {
        $this->load->model('base_model');
        $query = $this->base_model->_custom_query($mysql_query);
        return $query;
    }

}