<?php
/**
 *
 * Package: hmvc
 * Filename: blog_m.php
 * Author: solidstunna101
 * Date: 24/09/13
 * Time: 22:28
 *
 */

class Blog_m extends CI_Model {

    function get_posts(){
        return array(
            array('title' => 'This is my blog post', 'text' => 'This is my text'),
            array('title' => 'This is my blog post', 'text' => 'This is my text'),
            array('title' => 'This is my blog post', 'text' => 'This is my text'),
        );
    }

}