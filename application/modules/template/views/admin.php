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
        }

        #navbar{
            background-color: #ffdddd;
            height: 400px;
        }

        #content{

            height: 400px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <h1>Admin Page</h1>
    </div>
    <div class="row">
        <div id="content" class="col-lg-3 well">
            Content
        </div>
        <div id="content" class=" col-lg-offset-1 col-lg-8 well">
            Content
        </div>
    </div>
</div>
</body>
</html>