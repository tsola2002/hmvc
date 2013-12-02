<?php
/**
 *
 * Package: hmvc
 * Filename: tasks.php
 * Author: solidstunna101
 * Date: 02/12/13
 * Time: 10:01
 *
 */
class Tasks extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mdl_task');
    }

    public function index(){

        $data['query'] = $this->mdl_task->get('priority');
        $this->load->view('display', $data);
    }


}