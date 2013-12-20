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

    function submit(){
        $this->load->library('form_validation');

        $this->form_validation->set_rules('page_headline', 'Page Headline', 'required|xss_clean');
        $this->form_validation->set_rules('page_content', 'Page Content', 'required|xss_clean');

        if ($this->form_validation->run($this) == FALSE)
        {
            //if validation is false run create function
            //which should send us back to login form
            $this->create();
        }
        else
        {
            $data = $this->get_data_from_post();
            $data['page_url'] = url_title($data['page_headline']);

            $update_id =  $this->uri->segment(3);
            if(is_numeric($update_id)){

                  if(($update_id==23) || ($update_id==24) || ($update_id==25)){
                      unset($data['page_url']);
                  }
                $this->_update($update_id, $data);
            } else{
                $this->_insert($data);
            }
            redirect('webpages/manage');
        }
    }

    function get_data_from_post(){
        $data['page_headline'] = $this->input->post('page_headline', TRUE);
        $data['page_title'] = $this->input->post('page_title', TRUE);
        $data['keywords'] = $this->input->post('keywords', TRUE);
        $data['description'] = $this->input->post('description', TRUE);
        $data['page_content'] = $this->input->post('page_content', TRUE);
        return $data;
    }

    function get_data_from_db($update_id){
        $query = $this->get_where($update_id);
        foreach($query->result() as $row){
            $data['page_headline'] = $row->page_headline;
            $data['page_title'] = $row->page_title;
            $data['keywords'] = $row->keywords;
            $data['description'] = $row->description;
            $data['page_content'] = $row->page_content;
        }

        if(!isset($data)){
            $data = "";
        }
        return $data;
    }

    function create(){

        $update_id = $this->uri->segment(3);
        $submit = $this->input->post('submit', TRUE);

            if($submit=="Submit"){
                $data = $this->get_data_from_post();
            }else{
                if(is_numeric($update_id)){
                    $data = $this->get_data_from_db($update_id);
                }
            }

            if(!isset($data)){
                $data = $this->get_data_from_post();
            }


        $data['update_id'] = $update_id;

        $data['view_file'] = "create";
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