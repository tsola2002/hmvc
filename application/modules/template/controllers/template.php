<?php
/**
 *
 * Package: hmvc
 * Filename: template.php
 * Author: solidstunna101
 * Date: 03/12/13
 * Time: 11:25
 *
 */

class Template extends MX_Controller {

    public function __construct(){
        parent::__construct();
    }



    public function two_col($data){
        $this->load->view('two_col', $data);
    }






}