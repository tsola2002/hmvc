<?php
/**
 *
 * Package: hmvc
 * Filename: blog.php
 * Author: solidstunna101
 * Date: 24/09/13
 * Time: 22:28
 *
 */

class Blog extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('blog_m');
    }

    public function listing(){
        $posts = $this->blog_m->get_posts();
        $this->load->view('listing', array('posts' => $posts));
    }


}