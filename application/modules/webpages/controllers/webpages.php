<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * Package: hmvc
 * Filename: base_controller.php
 * Author: solidstunna101
 * Date: 04/12/13
 * Time: 11:22
 *
 */

class Webpages extends MX_Controller {



    function __construct() {
        parent::__construct();
    }

    function manage(){

        $data['query'] = $this->get('page_headline');


        // echo "hello frm manage";
        $data['view_file'] = "manage";
        $this->load->module('template');
        $this->template->admin($data);
    }



    function get($order_by){
        $this->load->model('webpages_mdl');
        $query = $this->webpages_mdl->get($order_by);
        return $query;
}

    function get_with_limit($limit, $offset, $order_by) {
        $this->load->model('webpages_mdl');
        $query = $this->webpages_mdl->get_with_limit($limit, $offset, $order_by);
        return $query;
    }

    function get_where($id){
        $this->load->model('webpages_mdl');
        $query = $this->webpages_mdl->get_where($id);
        return $query;
    }

    function get_where_custom($col, $value) {
        $this->load->model('webpages_mdl');
        $query = $this->webpages_mdl->get_where_custom($col, $value);
        return $query;
    }

    function _insert($data){
        $this->load->model('webpages_mdl');
        $this->webpages_mdl->_insert($data);
    }

    function _update($id, $data){
        $this->load->model('webpages_mdl');
        $this->webpages_mdl->_update($id, $data);
    }

    function _delete($id){
        $this->load->model('webpages_mdl');
        $this->webpages_mdl->_delete($id);
    }

    function count_where($column, $value) {
        $this->load->model('webpages_mdl');
        $count = $this->webpages_mdl->count_where($column, $value);
        return $count;
    }

    function get_max() {
        $this->load->model('webpages_mdl');
        $max_id = $this->webpages_mdl->get_max();
        return $max_id;
    }

    function _custom_query($mysql_query) {
        $this->load->model('webpages_mdl');
        $query = $this->webpages_mdl->_custom_query($mysql_query);
        return $query;
    }

}