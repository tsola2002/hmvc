<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * Package: hmvc
 * Filename: users.php
 * Author: solidstunna101
 * Date: 04/12/13
 * Time: 11:22
 *
 */

class Users extends MX_Controller {



    function __construct() {
        parent::__construct();
    }


    public function submit()
    {

        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'username', 'required|max_length[30]|xss_clean');
        $this->form_validation->set_rules('password', 'password', 'required|max_length[30]|xss_clean|callback_password_check');


        if ($this->form_validation->run() == FALSE)
        {
            $this->login();
        }
        else
        {
            echo "success";
            die();
        }
    }

    public function password_check($str)
    {
        if ($str == 'test')
        {
            $this->form_validation->set_message('password_check', 'The %s field can not be the word "test"');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }


    function login(){

        $data['view_file'] = "loginform";
        $this->load->module('template');
        $this->template->public_one_col($data);
    }

    function get($order_by){
        $this->load->model('users_mdl');
        $query = $this->users_mdl->get($order_by);
        return $query;
}

    function get_with_limit($limit, $offset, $order_by) {
        $this->load->model('users_mdl');
        $query = $this->users_mdl->get_with_limit($limit, $offset, $order_by);
        return $query;
    }

    function get_where($id){
        $this->load->model('users_mdl');
        $query = $this->users_mdl->get_where($id);
        return $query;
    }

    function get_where_custom($col, $value) {
        $this->load->model('users_mdl');
        $query = $this->users_mdl->get_where_custom($col, $value);
        return $query;
    }

    function _insert($data){
        $this->load->model('users_mdl');
        $this->users_mdl->_insert($data);
    }

    function _update($id, $data){
        $this->load->model('users_mdl');
        $this->users_mdl->_update($id, $data);
    }

    function _delete($id){
        $this->load->model('users_mdl');
        $this->users_mdl->_delete($id);
    }

    function count_where($column, $value) {
        $this->load->model('users_mdl');
        $count = $this->users_mdl->count_where($column, $value);
        return $count;
    }

    function get_max() {
        $this->load->model('users_mdl');
        $max_id = $this->users_mdl->get_max();
        return $max_id;
    }

    function _custom_query($mysql_query) {
        $this->load->model('users_mdl');
        $query = $this->users_mdl->_custom_query($mysql_query);
        return $query;
    }

}