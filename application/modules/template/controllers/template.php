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

    function public_one_col($data){
        //$data['variable'] = "...";
        $this->load->view('public_one_col', $data);
    }

    function admin($data){
        //$data['variable'] = "...";
        $this->load->view('admin', $data);
    }



}