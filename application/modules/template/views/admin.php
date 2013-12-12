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
        <div id="content" class="col-lg-3">
            Content
        </div>
        <div id="content" class=" col-lg-offset-1 col-lg-8">
            Content
        </div>
    </div>
</div>
</body>
</html>