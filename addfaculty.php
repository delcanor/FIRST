<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>FIRST: Add</title>
        <link rel="shortcut icon" href="images/fyptraining-green.png" type="image/png">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    </head>
    <body class="bg-light">
        <?php
        include_once('header.php');
        ?>
        <br><br>
        
        <div>
            <div class="container">
                <div class="py-5 text-center">
                    <h2>Add a Faculty Information</h2>
                    <p class="lead">In this page, you can add a new faculty profile.</p>
                </div>
                
                <div class="row">
                    <div class="col-md-2 order-md-2 mb-4">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Picture</span>
                        </h4>
                        <img src="images/turquoise-anonymous-man.svg" width="200" height="200" class="mb-4">
                            <br>
                            <button type="button" class="btn btn-secondary">Upload Picture</button>
                    </div>
                    
                    <div class="col-md-10 order-md-1">
                        <h4 class="mb-3">Basic Information</h4>
                        <form class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="firstName">First name</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="middleName">Middle name</label>
                                    <input type="text" class="form-control" id="middleName" placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid middle name is required.
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="lastName">Last name</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="birthDate">Birth date</label>
                                    <input type="date" class="form-control" id="birthDate" placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid birth date is required.
                                    </div>
                                </div>
                                
                                <div class="col-md-4 mb-3">
                                    <label for="mobileNumber">Mobile Number</label>
                                    <input type="text" class="form-control" id="mobileNumber" placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid mobile number is required.
                                    </div>
                                </div>
                                
                                <div class="col-md-4 mb-3">
                                    <label for="landlineNumber">Land line Number</label>
                                    <input type="text" class="form-control" id="landlineNumber" placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid land line number is required.
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="userName">Username</label>
                                    <input type="text" class="form-control" id="userName" placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid username is required.
                                    </div>
                                </div>
                                
                                <div class="col-md-8 mb-3">
                                    <label for="emailAdd">Email</label>
                                    <input type="email" class="form-control" id="emailAdd" placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid email address is required.
                                    </div>
                                </div>
                                
                            </div>
                            
                            
                    </div>
                </div>
                
                
            </div>
            
        </div>
        
        <?php
        require_once ('footer.php');
        ?>
    </body>
</html>
