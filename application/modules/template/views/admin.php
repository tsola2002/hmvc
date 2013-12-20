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
    <title>Admin Page</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
    <style type="text/css">
        body{
            background-color: #313941;
            color: #E9E6E1;
            font-family: 'Open Sans', sans-serif;
        }


        #content{

            height: 400px;
        }
    </style>
</head>
<body>
<div class="container">

    <div class="row">
        <div id="content" class="col-lg-12">
            <h2>Admin Panel</h2>
            <?php
            //look out for a view file
            if(!isset($view_file)){
                $view_file = "";
            }

            //if no module has been set which should be the case
            //look in the first segment of the url and read that in as the module
            if(!isset($module)){
                $module = $this->uri->segment(1);

            }

            //if both view file & module are present then genrate the url
            if(($view_file!="") && ($module!="")){

                //this code generates users/login url
                $path = $module. "/".$view_file;
                $this->load->view($path);
            }
            ?>
        </div>

    </div>
</div>
</body>
</html>