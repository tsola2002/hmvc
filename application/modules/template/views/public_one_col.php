<?php
/**
 *
 * Package: hmvc
 * Filename: one_col.php
 * Author: solidstunna101
 * Date: 03/12/13
 * Time: 11:33
 *
 */
?>

<!doctype html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>One col page</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
    <style type="text/css">
        body{
            background-color: #000080;
        }
        #navbar{
            background-color: #ffdddd;
            height: 400px;
        }

        #content{
            background-color: #808000;
            height: 400px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="jumbotron">
        ONE COLUMN LAYOUT
    </div>
    <div class="row">
        <div id="content" class="col-lg-12">
            Content
            <?php
            //look out for a view file
                if(!isset($view_file)){
                    $view_file = "";
                }

                if(!isset($module)){
                     $module = $this->uri->segment(1);

                 }

            //look out for a module
                if(($view_file!="") && ($module!="")){
                    $path = $module. "/".$view_file;
                    $this->load->view($path);
                }




            ?>
        </div>
    </div>
</div>
</body>
</html>