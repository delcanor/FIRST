<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>FIRST: School List</title>
        <!--<link rel="shortcut icon" href="images/fyptraining-green.png" type="image/png">-->
        
        <?php //$linkurl = dirname(__DIR__) . "\images\\fyptraining-green.png";
        $linkurl = "../../images/fyptraining-green.png";
        echo $linkurl;
        echo "<link rel=\"shortcut icon\" href=\"" . $linkurl . "type=\"image/png\">";
        ?>
        
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    </head>
    <body>
        <?php
        // put your code here
        ?>
        
        <?php
            require_once(dirname(__DIR__).'/footer.php');
        ?>
    </body>
</html>
