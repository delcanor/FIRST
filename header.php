<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    </head>
    <nav class="navbar navbar-expand-sm bg-success navbar-dark fixed-top d-flex d-flex justify-content-center mb-5">
        <ul class="navbar-nav">
            <li class="nav-item p-2 flex-fill">
                <a class="nav-link" href="index.php">
                    <img src="images/fyptraining-green.png" alt="Logo" style="width:40px;">
                    &nbsp;&nbsp;Faculty InfoRmation SysTem&nbsp;</a>
            </li>
            
            <!-- Dropdown -->
            <li class="nav-item dropdown p-2 flex-fill">
                <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
                    <i class="far fa-folder-open"></i>&nbsp;&nbsp;File Maintenance
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="listfaculty.php"><i class="fas fa-address-card"></i>&Tab;List</a>
                    <a class="dropdown-item" href="addfaculty.php"><i class="fas fa-list-alt"></i>&Tab;Add</a>
                    <a class="dropdown-item" href="editfaculty.php"><i class="fas fa-edit"></i>&Tab;Edit</a>
                    <a class="dropdown-item disabled" href="#"><i class="fas fa-eraser"></i>&Tab;Delete</a>
                </div>
            </li>
            
            <!-- Dropdown -->
            <li class="nav-item dropdown p-2 flex-fill">
                <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
                    <i class="far fa-copy"></i>&nbsp;&nbsp;Transaction
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#"><i class="fas fa-archive"></i>&Tab;Academic Credentials</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-briefcase"></i>&Tab;Professional Credentials</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-people-carry"></i>&Tab;Training Attendance</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-plane"></i>&Tab;International Immersion and Study</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-building"></i>&Tab;Association and Membership</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-book"></i>&Tab;Research</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-certificate"></i>&Tab;Certificate</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-graduation-cap"></i>&Tab;Diploma</a>
                </div>
            </li>
            
            <!-- Dropdown -->
            <li class="nav-item dropdown p-2 flex-fill">
                <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
                    <i class="fas fa-clipboard-list"></i>&nbsp;&nbsp;Reports
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#"><i class="fas fa-archive"></i>&Tab;Academic Credentials</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-briefcase"></i>&Tab;Professional Credentials</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-people-carry"></i>&Tab;Training Attendance</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-plane"></i>&Tab;International Immersion and Study</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-building"></i>&Tab;Association and Membership</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-book"></i>&Tab;Research</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-certificate"></i>&Tab;Certificate</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-graduation-cap"></i>&Tab;Diploma</a>
                </div>
            </li>
            
            <li class="nav-item p-2 flex-fill">
                <a class="nav-link" href="#"><i class="fas fa-sign-out-alt"></i>&Tab;Logout</a>
            </li>

        </ul>
    </nav>

</html>
