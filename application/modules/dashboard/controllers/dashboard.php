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

class Dashboard extends MX_Controller {



    function __construct() {
        parent::__construct();
    }

   function home(){
       echo "welcome to the dashboard";
   }

}