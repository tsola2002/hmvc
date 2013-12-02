<?php
/**
 *
 * Package: hmvc
 * Filename: nofun.php
 * Author: solidstunna101
 * Date: 02/12/13
 * Time: 11:04
 *
 */

class Nofun extends  MX_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function sayhello($name){
        echo "hello frm nofun. How are you $name" ;
    }

}