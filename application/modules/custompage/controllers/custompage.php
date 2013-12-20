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

class Custompage extends MX_Controller {



    function __construct() {
        parent::__construct();
    }

   function index(){

       $first_bit = $this->uri->segment(1);
       $second_bit = $this->uri->segment(2);

       if($second_bit==""){

            if($first_bit==""){
                $first_bit = "homepage";
            }

            $this->load->module('webpages');
            $query = $this->webpages->get_where_custom('page_url', $first_bit);
           foreach($query->result() as $row){
               $data['page_headline'] = $row->page_headline;
               $data['page_title'] = $row->page_title;
               $data['keywords'] = $row->keywords;
               $data['description'] = $row->description;
               $data['page_content'] = $row->page_content;
           }
       }

       $this->load->module('template');
       $this->template->public_one_col($data);

   }

}