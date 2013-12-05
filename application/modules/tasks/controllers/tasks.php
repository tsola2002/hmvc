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

    function create(){

        $update_id = $this->uri->segment(3);

        if(!isset($update_id)) {
            $update_id = $this->input->post('update_id',  $id );
        }

        if(is_numeric($update_id)) {
            $data = $this->get_data_from_db($update_id);
            $data['update_id'] = $update_id;
        }
        else{
            $data = $this->get_data_from_post();
        }

        $data['module'] = "tasks";
        $data['view_file'] = "form";
        echo Modules::run('template/two_col', $data);
    }

    function get_data_from_post(){
        $data['title'] = $this->input->post('title', TRUE);
        $data['priority'] = $this->input->post('priority', TRUE);
        return $data;
    }

    function get_data_from_db($update_id){
        $query = $this->get_where($update_id);
        foreach($query->result() as $row) {
            $data['title'] = $row->title;
            $data['priority'] = $row->priority;
        }
        return $data;
    }

    function submit() {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('title', 'Title', 'required|min_length[3]|xss_clean');
        $this->form_validation->set_rules('priority', 'priority', 'required|numeric|xss_clean|max_length[2]');

        $update_id = $this->input->post('update_id', TRUE);

        if ($this->form_validation->run() == FALSE)
        {
            $this->create();
        }
        else
        {

            $data = $this->get_data_from_post();

            if(is_numeric($update_id)) {
                $this->_update($update_id, $data);
            } else{
                $this->_insert($data);
            }


            redirect('tasks');
        }
    }

    function get($order_by){
        $this->load->model('mdl_task');
        $query = $this->mdl_task->get($order_by);
        return $query;
    }

    function get_with_limit($limit, $offset, $order_by) {
        $this->load->model('mdl_task');
        $query = $this->mdl_task->get_with_limit($limit, $offset, $order_by);
        return $query;
    }

    function get_where($id){
        $this->load->model('mdl_task');
        $query = $this->mdl_task->get_where($id);
        return $query;
    }

    function get_where_custom($col, $value) {
        $this->load->model('mdl_task');
        $query = $this->mdl_task->get_where_custom($col, $value);
        return $query;
    }

    function _insert($data){
        $this->load->model('mdl_task');
        $this->mdl_task->_insert($data);
    }

    function _update($id, $data){
        $this->load->model('mdl_task');
        $this->mdl_task->_update($id, $data);
    }

    function _delete($id){
        $this->load->model('mdl_task');
        $this->mdl_task->_delete($id);
    }

    function count_where($column, $value) {
        $this->load->model('mdl_task');
        $count = $this->mdl_task->count_where($column, $value);
        return $count;
    }

    function get_max() {
        $this->load->model('mdl_task');
        $max_id = $this->mdl_task->get_max();
        return $max_id;
    }

    function _custom_query($mysql_query) {
        $this->load->model('mdl_task');
        $query = $this->mdl_task->_custom_query($mysql_query);
        return $query;
    }


}