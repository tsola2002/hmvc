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

    }

    public function index(){

        $this->load->model('mdl_task');
        $data['query'] = $this->mdl_task->get('priority');

         $data['module'] = "tasks";
         $data['view_file'] = "display";

        //this code calls the template module frm within the tasks module
        //tasks module loads another modules view, then passes its data into that view
        echo Modules::run('template/two_col', $data);

        //$this->load->view('display', $data);







    }


}