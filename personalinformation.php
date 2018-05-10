<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Personal Information</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
        //include_once("navbar.php"); 
        
        echo"<div class=\"container\">";
            echo"<ul class=\"nav nav-tabs\">";
                echo"<li class=\"active\"><a href=\"#\">List</a></li>";
                echo"<li><a href=\"#\">Add</a></li>";
                echo"<li><a href=\"#\">Edit</a></li>";
            echo"</ul>";
        echo"</div>";
        ?>

        <?php
        include_once 'footer.php';
        ?>
    </body>
</html>
