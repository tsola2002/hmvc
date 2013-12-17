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

    function _in_you_go($username){
        //give users a session variable and send them to the admin
        $query =  $this->get_where_custom('username', $username);
        foreach($query->result() as $row){
            $user_id  = $row->id;
        }



        //makes session variable
        $this->session->set_userdata('user_id', $user_id);

        //echo "hello $user_id";

        //send the users to
        redirect('dashboard/home');
    }

     function submit(){


        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'required|max_length[30]|xss_clean');
        $this->form_validation->set_rules('pword', 'Password', 'required|max_length[30]|xss_clean|callback_pword_check');

        if ($this->form_validation->run($this) == FALSE)
        {
            //if validation is false run login function
            //which should send us back to login form
            $this->login();
        }
        else
        {
            $username = $this->input->post('username', TRUE);
           // echo "success"; die();
           $this->_in_you_go($username);
        }
    }

    function pword_check($pword){
        //takes in put field
        $username  = $this->input->post('username', TRUE);

        $pword = Modules::run('security/make_hash', $pword);
        //load model
        $this->load->model('users_mdl');
        $result = $this->users_mdl->pword_check($username, $pword);

        if ($result == FALSE)
        {
            $this->form_validation->set_message('pword_check', 'You did not enter the correct username/password');
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