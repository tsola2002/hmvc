<?php
/**
 *
 * Package: hmvc
 * Filename: dashboard.php
 * Author: solidstunna101
 * Date: 19/12/13
 * Time: 19:12
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
            background-color: #313941;
            color: #8e939a;
            font-family: 'Open Sans', sans-serif;
        }

        h1{
            color: #E9E6E1;
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
          <h2>welcome to the dashboard</h2>
            <p>Please choose from the following options</p>
           <ul>
            <?php
            echo anchor('webpages/manage','<li>Content Management System</li>');
            echo anchor('','<li>Update Top Naviation</li>');
            echo anchor('','<li>Sign Out</li>');
            ?>
           </ul>
        </div>
    </div>
</div>
</body>
</html>