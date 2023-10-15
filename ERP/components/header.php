<?php
    session_start();
    include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/ERP/components/main.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg shadow-sm">
        <div class="container">
            <a class="navbar-brand me-5" href="/ERP">
                <img src="/ERP/images/logo.png" style="width: 150px;" alt="bascom logo">
            </a>
            <button class="navbar-toggler rounded-0 border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/ERP/dashboard">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/ERP/students">Student info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/ERP/timetable">Timetable</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/ERP/addmission">Admission</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/ERP/attendance">Attendance</a>
                    </li>
                </ul>

                <div class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="d-flex align-items-center border-start ps-3 border-2 border-secondary" role="search">
                            <i class="fa-solid fa-user bg-secondary text-white p-2 rounded-circle"></i>
                            <div class="px-3">
                                <p class="m-0" style="font-size:80%!important">Mayurraj Devendrabhai Chavda</p>
                                <p class="m-0 text-secondary" style="font-size:70%!important">AIPL, Vastrapr</p>
                            </div>
                            <i class="fa-solid fa-caret-down text-secondary"></i>
                        </div>
                    </a>
                    <ul class="dropdown-menu w-100 mt-3 rounded-0">
                        <li>
                            <a class="dropdown-item" href="#" style="font-size:80%!important">
                                <i class="fa-solid fa-user"></i>
                                My profile
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/ERP/login/logout.php" style="font-size:80%!important">
                                <i class="fa-solid fa-right-from-bracket"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>