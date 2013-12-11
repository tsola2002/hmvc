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

class Security extends MX_Controller {



    function __construct() {
        parent::__construct();
    }

    function  make_hash(){
        $password = "hello";
        $safe_pass = $this->super_hash($password);
        echo $safe_pass;
    }

    function super_hash($password){
        $new_pass = $password.="bla";
        return $new_pass;
    }

}