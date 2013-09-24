<?php
/**
 *
 * Package: hmvc
 * Filename: listing.php
 * Author: solidstunna101
 * Date: 24/09/13
 * Time: 22:27
 *
 */

if(count($posts)){
    foreach($posts as $post){
        echo '<h1>' .$post['title']. '</h1>';
        echo '<p>' .$post['text']. '</p>';
    }
}